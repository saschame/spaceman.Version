<?php
namespace Craft;

class SpmVersionPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Spaceman Version');
	}

	function getVersion()
	{
		return '1.0';
	}

	function getDeveloper()
	{
		return 'Sascha Merkofer, spaceman.agency';
	}

	function getDeveloperUrl()
	{
		return 'http://spaceman-agency.ch';
	}

	protected function defineSettings()
	{
		return array(
			'pathToVersionTxt' => AttributeType::String,
			'cacheBusterString' => AttributeType::String,
		);
	}

	public function getSettingsHtml()
	{
		return craft()->templates->render('spmversion/_settings', array(
			'settings' => $this->getSettings()
		));
	}
}
