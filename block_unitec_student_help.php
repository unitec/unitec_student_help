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
        
        // List of all the logos
        $help1button = '<a href="http://library.unitec.ac.nz/" target="_blank"><div class="helpbutton">Testing help logo</div></a>';
        
        $help2button = '<a href="https://moodle.unitec.ac.nz/course/view.php?id=360" target="_blank"><div class="helpbutton">Te Puna Ako Learning Centre</div></a>';
        
        $help3button = '<a href="http://askims.unitec.ac.nz/" target="_blank"><div class="helpbutton">Ask IMS: Technical Support</div></a>';
        
        $help4button = '<a href="http://libguides.unitec.ac.nz/studytoolbox" target="_blank"><div class="helpbutton">Study Toolbox</div></a>';
		
		$help5button = '<a href="https://moodle.unitec.ac.nz/" target="_blank"><div class="helpbutton">Testing help logo</div></a>';
		
		// Choose the order the logos will display in the block
        $this->content->text = $help1button.$help2button.$help4button.$help3button.$help5button;
       
        return $this->content;
    }

}

?>
