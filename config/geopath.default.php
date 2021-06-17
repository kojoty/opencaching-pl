<?php

/**
 * Geopath related configuration
 *
 * This is a default configuration.
 * It may be customized in node-specific configuration file.
 */

use src\Models\GeoCache\GeoCache;

$geopathCfg = [];

/**
 * If current node supports geopaths (has geopaths enabled on site)
 * former: global $powerTrailModuleSwitchOn
 */
$geopathCfg['geopathsSupported'] = true;

/**
 * Minimum caches necesary fo publish geocache
 * former: $powerTrailMinimumCacheCount
 */
$geopathCfg['minCachesCount'] = 5;

/**
 * Owner of the geopath should has at least this number of founds
 * former: $powerTrailUserMinimumCacheFoundToSetNewPowerTrail
 */
$geopathCfg['geopathOwnerMinFounds'] = 100;

/**
 * Array of types of geocaches forbidden in geopaths
 */
$geopathCfg['forbiddenCacheTypes'] = [ GeoCache::TYPE_EVENT, GeoCache::TYPE_OWNCACHE ];
