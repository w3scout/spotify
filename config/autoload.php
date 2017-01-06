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


ClassLoader::addNamespaces(array
(
    'w3scouts\spotifybutton',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'w3scouts\spotifybutton\ModuleSpotifyButton' => 'system/modules/w3s_spotify/modules/ModuleSpotifyButton.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_spotify_button' => 'system/modules/w3s_spotify/templates',
));
