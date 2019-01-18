<?php

namespace lib\Objects;

use lib\Objects\OcConfig\OcConfig;
use Utils\Text\UserInputFilter;

/**
 * This is the only interface by which Okapi accesses OCPL code.
 * The methods here should be as lean and performant as possible.
 * Avoid any includion of OCPL classes which are avoidable.
 */

final class OcFacade
{
    public static function getSiteLanguages()
    {
        return OcConfig::instance()->getI18Config()['supportedLanguages'];
    }

    public static function purifyHtmlString($str)
    {
        return UserInputFilter::purifyHtmlString($str);
    }
}
