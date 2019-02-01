<?php

import('lib.pkp.classes.plugins.ThemePlugin');

class UnivalleThemePlugin extends ThemePlugin {

	public function __construct()
	{
		parent::__construct();

	}

	public function isActive() {
		if (defined('SESSION_DISABLE_INIT')) return true;
		return parent::isActive();
	}
/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {

		$this->setParent('defaultthemeplugin');
		$this->addStyle('child-stylesheet', 'styles/index.less');

	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return 'Tema Univalle';
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return 'Tema customizado por la Universidad del Valle, partiendo de el tema por defecto';
	}

	/**
	 * Get the name of the settings file to be installed on new journal
	 * creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Get the name of the settings file to be installed site-wide when
	 * OJS is installed.
	 * @return string
	 */
	function getInstallSitePluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

}

?>

