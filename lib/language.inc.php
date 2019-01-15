<?php
use Utils\I18n\I18n;

/**
 * Return tranlated string
 *
 * @param string $str - translation key
 * @param array $args - arguments to insert into string (see vsprintf for details)
 * @return string - localized string
 */
function tr($str, array $args = null)
{
    global $language, $lang;
    if (is_null($args)) {
        return I18n::translatePhrase($str, $lang);
    } else {
        return vsprintf(I18n::translatePhrase($str, $lang), $args);
    }
}

function tr2($str, $lang)
{
    global $language;

    if (!isset($language[$lang])) {
        I18n::loadLangFile($lang);
    }

    return I18n::translatePhrase($str, $lang);
}

