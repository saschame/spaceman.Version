<?php
namespace Craft;

/**
 * Spaceman Version service
 */
class SpmVersionService extends BaseApplicationComponent
{
	/**
	 * Reads the version.txt File from the Filesystem
	 *
	 * @throws Exception
	 * @return string
	 */
	public function readVersionFile()
	{
		$settings = craft()->plugins->getPlugin('spmversion')->getSettings();

		if (!$settings->pathToVersionTxt)
		{
			throw new Exception('Die Einstellung "Pfad" ist nicht in den Plugin Einstellungen angegeben.');
		}

        $version_file = $settings->pathToVersionTxt;

        // read file
        if (file_exists($version_file)) {
            $version = file_get_contents($version_file);
            $version = preg_replace('/[^\.0-9]/', '', $version);
            if (!empty($version)) {
                return $version;
            }
        }

        // something went wrong
		return '';
	}

}
