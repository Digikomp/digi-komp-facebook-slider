<?php 
/**
 * Digi-Komp Facebook Slider. Module Entry Point
 *
 * Copyright (C) 2014 Chris Chaffey
 *
 * @package    Digi-Komp Facebook Slider
 * @subpackage Modules
 * @link       http://www.digi-komp.com
 * @license    GNU/GPL, see license.txt
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

$doc=JFactory::getDocument();
if (trim( $params->get( 'loadCss' ) ) == 1)
{
	$doc->addStyleSheet(JURI::root().'modules/mod_dk_fbslide_2.5/css/mod_dk_fbslide_2.5.css');
}
else
{
	$doc->addStyleSheet(JURI::root().'modules/mod_dk_fbslide_2.5/css/mod_dk_fbslide_noncss_file.css');
}

if (trim( $params->get( 'loadjQuery' ) ) == 1)
{
	$doc->addScript(JURI::root().'modules/mod_dk_fbslide_2.5/js/jquery.min.js');
}
?>