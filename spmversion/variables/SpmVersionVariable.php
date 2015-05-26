<?php
namespace Craft;

/**
 * Spaceman Version variable
 */

class SpmVersionVariable
{
    public function printVersion()
    {
        $version_str = craft()->spmVersion->readVersionFile();
        return $version_str;
    }

    public function cacheBuster()
    {
        $version_str = craft()->spmVersion->readVersionFile();
        $cache_buster_str = empty($settings->cacheBusterString) ? '?v=' : $settings->cacheBusterString;

        return $cache_buster_str . $version_str;
    }
}
