<?php
namespace mod_revealjs\output;
 
defined('MOODLE_INTERNAL') || die();
 
//use context_module;
 
/**
 * Mobile output class for revealjs
 *
 * @package	revealjs
 * @copyright  2018 Mayel de Borniol
 * @license	http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mobile {
 
	/**
 	* Returns the certificate course view for the mobile app.
 	* @param  array $args Arguments from tool_mobile_get_content WS
 	*
 	* @return array   	HTML, javascript and otherdata
 	*/
    public static function mobile_presentation_view($args) {
    	global $OUTPUT, $CFG;
 
    	$args = (object) $args;
    	
//    	print_r($args);
    
    	$data = array(
        	'courseid' => $args->courseid,
        	'cmid' => $args->cmid,
        	'args' =>  print_r($args, true),
        	'url' => $CFG->wwwroot.'/mod/revealjs/view.php?id='.$args->cmid
    	);
    	
 
    	return array(
        	'templates' => array(
            	array(
                	'id' => 'main',
                	'html' => $OUTPUT->render_from_template('revealjs/mobile_view_page', $data),
            	),
        	),
        	'javascript' => '',
        	'otherdata' => ''
    	);
    }
}