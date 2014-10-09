<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

 /**
 * Unitec Student Help provides links to useful help resources for students.
 * 
 * @package    block
 * @subpackage unitec_student_help
 * @copyright  2014 Unitec Institute of Technology
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_unitec_student_help extends block_base {
	
    // Initialize the block
    function init() {
        $this->title = get_string('pluginname', 'block_unitec_student_help');
    }
	
    // Makes the content accesible for Moodle
    function get_content() {
        global $CFG, $OUTPUT;;
        
        require_once($CFG->libdir.'/filelib.php');

        if ($this->content !== NULL) {
            return $this->content;
        }
		
        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->footer = '';
        
        // Select the logo to show
		$logo1file = $CFG->wwwroot.'/blocks/unitec_student_help/img/library.png';
        $help1logo = '<a href="http://library.unitec.ac.nz" target="_blank"><img src="'.$logo1file.'" alt="Library" style="width: 90%; margin-bottom: 3px;"></a>';
        
        $logo2file = $CFG->wwwroot.'/blocks/unitec_student_help/img/tpa.png';
        $help2logo = '<a href="http://moodle.unitec.ac.nz/course/view.php?id=360" target="_blank"><img src="'.$logo2file.'" alt="TPA Learning Centre" style="width: 90%; margin-bottom: 3px;"></a>';
        
        $logo3file = $CFG->wwwroot.'/blocks/unitec_student_help/img/askims.png';
        $help3logo = '<a href="http://askims.unitec.ac.nz" target="_blank"><img src="'.$logo3file.'" alt="Ask IMS" style="width: 90%; margin-bottom: 3px;"></a>';
        
        $logo4file = $CFG->wwwroot.'/blocks/unitec_student_help/img/studytoolbox.png';
        $help4logo = '<a href="http://libguides.unitec.ac.nz/studytoolbox" target="_blank"><img src="'.$logo4file.'" alt="Study Toolbox" style="width: 90%; margin-bottom: 3px;"></a>';

        $this->content->text = $help1logo.$help2logo.$help4logo.$help3logo;
       
        return $this->content;
    }

}

?>
