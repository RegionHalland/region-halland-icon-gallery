<?php

	/**
	 * @package Region Halland Icon Gallery
	 */
	/*
	Plugin Name: Region Halland Icon Gallery
	Description: Ett icon-bibliotek med svg-filer
	Version: 1.0.0
	Author: Roland Hydén
	License: MIT
	Text Domain: region_halland_icon_gallery
	*/

	// Return icon
	function get_region_halland_icon($icon) {

		switch ($icon) {
		    case 'headphone':
					$svgContent = "<path d='M4 0C2.35 0 1 1.35 1 3v1H.5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2v3.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H7V3c0-1.65-1.35-3-3-3z'/>";
					return $svgContent;
		        break;
		    case 'monitor':
		    		$svgContent = "<path d='M.34 0A.5.5 0 0 0 0 .5v5a.5.5 0 0 0 .5.5H3v1H2c-.55 0-1 .45-1 1h6c0-.55-.45-1-1-1H5V6h2.5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.09 0 .5.5 0 0 0-.06 0zM1 1h6v4H1V1z'/>";
					return $svgContent;
			case 'menu':
					$svgContent = "<path d='M15 4H1a1 1 0 1 1 0-2h14a1 1 0 0 1 0 2zm0 5H1a1 1 0 1 1 0-2h14a1 1 0 0 1 0 2zm0 5H1a1 1 0 0 1 0-2h14a1 1 0 0 1 0 2z'/>";
					return $svgContent;
			case 'x':
					$svgContent = "<path d='M1.41 0L0 1.41l.72.72L2.5 3.94.72 5.72 0 6.41l1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72L6.41 0l-.69.72L3.94 2.5 2.13.72 1.41 0z'/>";
		    		return $svgContent;
			case 'chevron-right':
					$svgContent = "<path d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'/>";
					return $svgContent;
			case 'info':
					$svgContent = "<path d='M5 0c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1zM3.5 2.5C2.67 2.5 2 3.17 2 4h1c0-.28.22-.5.5-.5s.5.22.5.5-1 1.64-1 2.5C3 7.36 3.67 8 4.5 8S6 7.33 6 6.5H5c0 .28-.22.5-.5.5S4 6.78 4 6.5C4 6.14 5 4.66 5 4c0-.81-.67-1.5-1.5-1.5z'/>";
					return $svgContent;
			default:
	    		$svgContent = "<path d='M4 0C2.35 0 1 1.35 1 3v1H.5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2v3.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H7V3c0-1.65-1.35-3-3-3z'/>";
				return $svgContent;
		} 

	}

	// Method when the plugin is activated
	function region_halland_icon_gallery_activate() {
		// Nothing at the moment
	}

	// Method when the plugin is deactivated
	function region_halland_icon_gallery_deactivate() {
		// Nothing at the moment
	}
	
	// Activate the plugin and call method
	register_activation_hook( __FILE__, 'region_halland_icon_gallery_activate');

	// Dectivate the plugin and call method
	register_deactivation_hook( __FILE__, 'region_halland_icon_gallery_deactivate');

?>