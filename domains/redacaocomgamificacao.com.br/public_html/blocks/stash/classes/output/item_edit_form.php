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
 * A form for adding and editing stash items.
 *
 * @package   block_stash
 * @copyright 2016 Adrian Greeve <adriangreeve.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_stash\output;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/lib/formslib.php');

use moodleform;

/**
 * Item class.
 *
 * @package   block_stash
 * @copyright 2016 Adrian Greeve <adriangreeve.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class item_edit_form extends moodleform {

    /**
     * Form definition.
     */
    public function definition () {
        $mform = $this->_form;

        $mform->addElement('text', 'itemname', get_string('itemname', 'block_stash'));
        $mform->setType('itemname', PARAM_TEXT);

        $mform->addElement('hidden', 'id', $this->_customdata['id']);
        $mform->setType('id', PARAM_INT);

        $this->add_action_buttons();
    }
}
