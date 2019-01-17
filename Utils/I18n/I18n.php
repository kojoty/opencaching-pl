<?php
namespace Utils\I18n;

use Utils\Text\UserInputFilter;
use Utils\Uri\OcCookie;
use Utils\Uri\Uri;
use lib\Objects\OcConfig\OcConfig;
use Utils\Debug\Debug;

class I18n
{
    const FAILOVER_LANGUAGE = 'en';
    const COOKIE_LANG_VAR = 'lang';

    private $currentLanguage;
    private $trArray;

    private function __construct()
    {
        $this->trArray = [];

        $initLang = $this->getInitLang();
        // check if $requestedLang is supported by node
        if (!$this->isLangSupported($initLang)) {
            // requested language is not supported - display error...
            $this->handleUnsupportedLangAndExit($initLang);
        }

        $this->setCurrentLang($initLang);
        $this->loadLangFile($initLang);
        Languages::setLocale($initLang);
    }

    /**
     * Returns instance of itself.
     *
     * @return I18n object
     */
    public static function instance()
    {
        static $instance = null;
        if ($instance === null) {
            $instance = new static(false);
        }
        return $instance;
    }

    /**
     * Retruns current language of tranlsations
     * @return string - two-char lang code - for example: 'pl' or 'en'
     */
    public static function getCurrentLang()
    {
        return self::instance()->currentLanguage;
    }

    public static function getLangForDbTranslations()
    {
        return self::getCurrentLang();
    }

    /**
     * The only function to initilize I18n for OC code.
     * This should be called at the begining of every request.
     *
     * @return \Utils\I18n\I18n
     */
    public static function init()
    {
        // just be sure that instance of this class is created
        return self::instance();
    }

    /**
     * Main translate function
     *
     * @param string $translationId - id of the phrase
     * @param string $langCode - two-letter language code
     * @param boolean $skipPostprocess - if true skip "old-template" postprocessing
     * @return string -
     */
    public static function translatePhrase($translationId, $langCode=null, $skipPostprocess=null)
    {
        return self::instance()->translate($translationId, $langCode=null, $skipPostprocess=null);
    }

    /**
     * Allow to check if given phrase is present
     *
     * @param string $str - phrase to translate
     * @return boolean
     */
    public static function isTranslationAvailable($str)
    {
        $language = self::getCurrentLang();
        $instance = self::instance();
        return isset($instance->trArray[$language][$str]) && $instance->trArray[$language][$str];
    }

    public static function getLanguagesFlagsData($currentLang=null){

        $instance = self::instance();
        $result = array();
        foreach ($instance->getSupportedTranslations() as $language) {
            if (!isset($currentLang) || $language != $currentLang) {
                $result[$language]['name'] = $language;
                $result[$language]['img'] = '/images/flags/' . $language . '.svg';
                $result[$language]['link'] = Uri::setOrReplaceParamValue('lang',$language);
            }
        }
        return $result;
    }

    /**
     * Returns language code which should be apply for current instance
     */
    private function getInitLang()
    {
        // first check if CrowdinInContext is enabled - then use pseudoLang
        CrowdinInContextMode::initHandler();
        if (CrowdinInContextMode::enabled()) {
            // CrowdinInContext mode is enabled => force loading crowdin "pseudo" lang
            return CrowdinInContextMode::getPseudoLang();
        }

        // language changed
        if (isset($_REQUEST['lang'])) {
            return $_REQUEST['lang'];
        } else {
            return OcCookie::getOrDefault(self::COOKIE_LANG_VAR, $this->getDefaultLang());
        }
    }

    private function translate($str, $langCode=null, $skipPostprocess=null)
    {
        if(!$langCode){
            $langCode = self::getCurrentLang();
        }

        if (!isset($this->trArray[$langCode])) {
            $this->loadLangFile($langCode);
        }

        if (isset($this->trArray[$langCode][$str]) && $this->trArray[$langCode][$str]) {
            // requested phrase found
            if (!$skipPostprocess) {
                return $this->postProcessTr($this->trArray[$langCode][$str]);
            } else {
                return $this->trArray[$langCode][$str];
            }
        } else {
            if($langCode != self::FAILOVER_LANGUAGE){
                // there is no such phrase - try to handle it in failover language
                return $this->translate($str, self::FAILOVER_LANGUAGE, $skipPostprocess);
            }
        }

        // ups - no such phrase at all - even in failover language...
        Debug::errorLog('Unknown translation for id: '.$str);
        return "No translation available (id: $str)";
    }

    private function postProcessTr(&$ref)
    {
        if (strpos($ref, "{") !== false) {
            return tpl_do_replace($ref, true);
        } else {
            return $ref;
        }
    }

    /**
     * Load given translation file
     *
     * THIS METHOD SHOULD BE PRIVATE!
     *
     * @param string $langCode - two-letter language code
     */
    private function loadLangFile($langCode)
    {
        $languageFilename = __DIR__ . "/../../lib/languages/" . $langCode.'.php';
        if (!file_exists($languageFilename)) {
            throw new \Exception("Can't find translation file for requested language!");
            return;
        }

        // load selected language/translation file
        include ($languageFilename);
        $this->trArray[$langCode] = $translations;
    }

    private function setCurrentLang($languageCode)
    {
        $this->currentLanguage = $languageCode;
        OcCookie::set(self::COOKIE_LANG_VAR, $languageCode, true);
    }

    /**
     * supported translations list is stored in i18n::$config['supportedLanguages'] var in config files
     * @return array of supported languags
     */
    private function getSupportedTranslations(){
        return OcConfig::instance()->getI18Config()['supportedLanguages'];
    }

    private function getDefaultLang()
    {
        return OcConfig::instance()->getI18Config()['defaultLang'];
    }

    private function isLangSupported($langCode){

        if (CrowdinInContextMode::isSupportedInConfig()) {
            if ($langCode == CrowdinInContextMode::getPseudoLang() ){
                return true;
            }
        }
        return in_array($langCode, $this->getSupportedTranslations());
    }

    private function handleUnsupportedLangAndExit($requestedLang)
    {
        tpl_set_tplname('error/langNotSupported');
        $view = tpl_getView();

        $view->loadJQuery();
        $view->setVar("localCss",
            Uri::getLinkWithModificationTime('/tpl/stdstyle/error/error.css'));
        $view->setVar('requestedLang', UserInputFilter::purifyHtmlString($requestedLang));

        $this->setLang(self::FAILOVER_LANGUAGE);

        $view->setVar('allLanguageFlags', self::getLanguagesFlagsData());

        $this->loadLangFile(self::FAILOVER_LANGUAGE);

        tpl_BuildTemplate();
        exit;
    }

}

