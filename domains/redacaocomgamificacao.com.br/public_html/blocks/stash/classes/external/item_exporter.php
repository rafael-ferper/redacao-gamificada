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
 * Persistent exporter.
 *
 * @package    block_stash
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_stash\external;
defined('MOODLE_INTERNAL') || die();

use moodle_url;
use renderer_base;

/**
 * Persistent exporter class.
 *
 * @package    block_stash
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class item_exporter extends persistent_exporter {

    protected static function define_class() {
        return 'block_stash\\item';
    }

    protected static function define_related() {
        return array('context' => 'context');
    }

    protected static function define_other_properties() {
        return [
            'maxnumberformatted' => [
                'type' => PARAM_RAW
            ],
            'imageurl' => [
                'type' => PARAM_URL
            ]
        ];
    }

    protected function update_values() {
        $itemid = $this->persistent->get_id();
        $detail = $this->persistent->get_detail();
        $updatedetail = file_rewrite_pluginfile_urls($detail, 'pluginfile.php', $this->related['context']->id, 'block_stash',
                'detail', $itemid);
        return ['detail' => $updatedetail];
    }

    protected function get_other_values(renderer_base $output) {
        $itemid = $this->persistent->get_id();
        $maxnumber = $this->persistent->get_maxnumber();
        $unlimited = $this->persistent->is_unlimited();

        $imageurl = moodle_url::make_pluginfile_url($this->related['context']->id, 'block_stash', 'item', $itemid, '/', 'image');

        return [
            'maxnumberformatted' => $unlimited ? get_string('unlimited', 'block_stash') : $maxnumber,
            'imageurl' => $imageurl->out(false),
        ];
    }

}
