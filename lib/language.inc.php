<?php
use Utils\I18n\I18n;

function getAutoloadTranslationWithoutFailover($str, $lang)
{
    global $language;

    if (!isset($language[$lang])) {
        load_language_file($lang);
    }
    if (!isset($language[$lang][$str])) {
        return null;
    } else {
        return $language[$lang][$str];
    }
}

/**
 * Return tranlated string
 *
 * @param string $str - translation key
 * @param array $args - arguments to insert into string (see vsprintf for details)
 * @return string - localized string
 */
function tr($str, array $args = null)
{
    if (is_null($args)) {
        return I18n::translatePhrase($str);
    } else {
        return vsprintf(I18n::translatePhrase($str), $args);
    }
}
