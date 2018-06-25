<?php 
/**
 * Config for revealjs in mobile app
 *
 * @package	revealjs
 * @copyright  2018 Mayel de Borniol
 * @license	http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$addons = array(
    "mod_revealjs" => array( // Plugin identifier
    	'handlers' => array( // Different places where the plugin will display content.
            'mod_revealjs_view' => array( // Handler unique name (alphanumeric).
            	'delegate' => 'CoreCourseModuleDelegate', // Delegate (where to display the link to the plugin)
            	'displaydata' => array(
            	                	'icon' => $CFG->wwwroot . '/mod/revealjs/pix/icon.svg',
            	                	'class' => '',
            	            	),
            	'method' => 'mobile_presentation_view', // Main function in \mod_X\output\mobile
//            	'offlinefunctions' => array(
//                    'mobile_presentation_view' => array(),
//                 )       // Function that needs to be downloaded for offline.
            )
    	),
	'lang' => array(	// Language strings that are used in all the handlers.
                array('pluginname', 'revealjs'),
        ),
    )
);