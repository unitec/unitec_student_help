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

======================

This block has been created by Miriam Laidlaw to contain links to
help services for Unitec students, for use on the Unitec Moodle
site.

This block should be installed in the blocks folder of your Moodle.
The folder should be called unitec_student_help

To update the links:
Open up block_unitec_student_help.php
In the section //List of all the logos
Each logo has two variables:
the file which points to the image stored in the img folder
(Note that this should alwasy remain a relative link)
and the logo which has the URL of the help service and references
the first variable.

To alter one, simply alter the img location and URL.

To add one, copy two of the existing lines and update the varaible
name to include the next sequential number (this must be done in three
places, once on the first line and twice on the second) and update
the image and help resource URL.
Update the alt text.
Make sure the image is saved in the img folder.

======================
 Changelog

0.1
Block created.

0.2
README File updated