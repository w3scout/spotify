<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package W3s_spotify
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ModuleW3sSpotifyBtn' => 'system/modules/w3s_spotify/ModuleW3sSpotifyBtn.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_w3s_spotify_btn' => 'system/modules/w3s_spotify/templates',
));
