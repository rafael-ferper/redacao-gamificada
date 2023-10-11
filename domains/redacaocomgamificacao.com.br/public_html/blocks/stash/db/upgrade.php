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
 * Block Stash upgrade.
 *
 * @package    block_stash
 * @copyright  2016 Frédéric Massart
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Block Stash upgrade function.
 *
 * @param int $oldversion Old version.
 * @return true
 */
function xmldb_block_stash_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2016052301) {

        // Define table block_stash to be created.
        $table = new xmldb_table('block_stash');

        // Adding fields to table block_stash.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '12', null, XMLDB_NOTNULL, null, null);
        $table->add_field('name', XMLDB_TYPE_TEXT, null, null, null, null, null);

        // Adding keys to table block_stash.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for block_stash.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2016052301, 'stash');
    }

    if ($oldversion < 2016052302) {

        // Define table block_stash_items to be created.
        $table = new xmldb_table('block_stash_items');

        // Adding fields to table block_stash_items.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('stashid', XMLDB_TYPE_INTEGER, '12', null, XMLDB_NOTNULL, null, null);
        $table->add_field('name', XMLDB_TYPE_TEXT, null, null, null, null, null);

        // Adding keys to table block_stash_items.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for block_stash_items.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2016052302, 'stash');
    }

    if ($oldversion < 2016052303) {

        // Define table block_stash_user_items to be created.
        $table = new xmldb_table('block_stash_user_items');

        // Adding fields to table block_stash_user_items.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('itemid', XMLDB_TYPE_INTEGER, '12', null, XMLDB_NOTNULL, null, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '12', null, XMLDB_NOTNULL, null, null);
        $table->add_field('quantity', XMLDB_TYPE_INTEGER, '10', null, null, null, null);

        // Adding keys to table block_stash_user_items.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for block_stash_user_items.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2016052303, 'stash');
    }

    if ($oldversion < 2016052304) {

        // Define table block_stash_drops to be created.
        $table = new xmldb_table('block_stash_drops');

        // Adding fields to table block_stash_drops.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('itemid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('name', XMLDB_TYPE_CHAR, '100', null, XMLDB_NOTNULL, null, null);
        $table->add_field('maxpickup', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '1');
        $table->add_field('pickupinterval', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '3600');
        $table->add_field('hashcode', XMLDB_TYPE_CHAR, '40', null, XMLDB_NOTNULL, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('usermodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

        // Adding keys to table block_stash_drops.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Adding indexes to table block_stash_drops.
        $table->add_index('itemid', XMLDB_INDEX_NOTUNIQUE, array('itemid'));

        // Conditionally launch create table for block_stash_drops.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2016052304, 'stash');
    }

    if ($oldversion < 2016052305) {

        // Define field maxnumber to be added to block_stash_items.
        $table = new xmldb_table('block_stash_items');
        $field = new xmldb_field('maxnumber', XMLDB_TYPE_INTEGER, '10', null, null, null, '1', 'name');

        // Conditionally launch add field maxnumber.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2016052305, 'stash');
    }

    if ($oldversion < 2016052306) {

        // Define table block_stash_drop_pickups to be created.
        $table = new xmldb_table('block_stash_drop_pickups');

        // Adding fields to table block_stash_drop_pickups.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('dropid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('pickupcount', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('lastpickup', XMLDB_TYPE_INTEGER, '10', null, null, null, null);

        // Adding keys to table block_stash_drop_pickups.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Adding indexes to table block_stash_drop_pickups.
        $table->add_index('userdrop', XMLDB_INDEX_UNIQUE, array('dropid', 'userid'));

        // Conditionally launch create table for block_stash_drop_pickups.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2016052306, 'stash');
    }

    if ($oldversion < 2016082600) {

        // Define field detail to be added to block_stash_items.
        $table = new xmldb_table('block_stash_items');
        $field = new xmldb_field('detail', XMLDB_TYPE_TEXT, null, null, null, null, null, 'maxnumber');

        // Conditionally launch add field detail.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('detailformat', XMLDB_TYPE_INTEGER, '1', null, null, null, null, 'detail');

        // Conditionally launch add field detailformat.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2016082600, 'stash');
    }

     if ($oldversion < 2017013007) {

        // Define table block_stash_trade to be created.
        $table = new xmldb_table('block_stash_trade');

        // Adding fields to table block_stash_trade.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('stashid', XMLDB_TYPE_INTEGER, '11', null, XMLDB_NOTNULL, null, null);
        $table->add_field('name', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('losstitle', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('gaintitle', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('hashcode', XMLDB_TYPE_CHAR, '40', null, XMLDB_NOTNULL, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('usermodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

        // Adding keys to table block_stash_trade.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for block_stash_trade.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2017013007, 'stash');
    }

    if ($oldversion < 2017013008) {

        // Define table block_stash_trade_items to be created.
        $table = new xmldb_table('block_stash_trade_items');

        // Adding fields to table block_stash_trade_items.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('tradeid', XMLDB_TYPE_INTEGER, '11', null, XMLDB_NOTNULL, null, null);
        $table->add_field('itemid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('quantity', XMLDB_TYPE_INTEGER, '10', null, null, null, '0');
        $table->add_field('gainloss', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '1');
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('usermodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

        // Adding keys to table block_stash_trade_items.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for block_stash_trade_items.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2017013008, 'stash');
    }

    if ($oldversion < 2018050800) {

        // Define field usermodified to be dropped from block_stash.
        $table = new xmldb_table('block_stash');
        $field = new xmldb_field('usermodified');

        // Conditionally launch drop field usermodified.
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2018050800, 'stash');
    }

    if ($oldversion < 2018050801) {

        // Define field usermodified to be dropped from block_stash_items.
        $table = new xmldb_table('block_stash_items');
        $field = new xmldb_field('usermodified');

        // Conditionally launch drop field usermodified.
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2018050801, 'stash');
    }

    if ($oldversion < 2018050802) {

        // Define field usermodified to be dropped from block_stash_user_items.
        $table = new xmldb_table('block_stash_user_items');
        $field = new xmldb_field('usermodified');

        // Conditionally launch drop field usermodified.
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2018050802, 'stash');
    }

    if ($oldversion < 2018050803) {

        // Define field usermodified to be dropped from block_stash_drops.
        $table = new xmldb_table('block_stash_drops');
        $field = new xmldb_field('usermodified');

        // Conditionally launch drop field usermodified.
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2018050803, 'stash');
    }

    if ($oldversion < 2018050804) {

        // Define field usermodified to be dropped from block_stash_drop_pickups.
        $table = new xmldb_table('block_stash_drop_pickups');
        $field = new xmldb_field('usermodified');

        // Conditionally launch drop field usermodified.
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2018050804, 'stash');
    }

    if ($oldversion < 2018050805) {

        // Define field usermodified to be dropped from block_stash_trade.
        $table = new xmldb_table('block_stash_trade');
        $field = new xmldb_field('usermodified');

        // Conditionally launch drop field usermodified.
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2018050805, 'stash');
    }

    if ($oldversion < 2018050806) {

        // Define field usermodified to be dropped from block_stash_trade_items.
        $table = new xmldb_table('block_stash_trade_items');
        $field = new xmldb_field('usermodified');

        // Conditionally launch drop field usermodified.
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2018050806, 'stash');
    }

    if ($oldversion < 2019040700) {

        // Define field amountlimit to be added to block_stash_items.
        $table = new xmldb_table('block_stash_items');
        $field = new xmldb_field('amountlimit', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'timemodified');

        // Conditionally launch add field amountlimit.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2019040700, 'stash');
    }

    if ($oldversion < 2019040701) {

        // Define field currentamount to be added to block_stash_items.
        $table = new xmldb_table('block_stash_items');
        $field = new xmldb_field('currentamount', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'amountlimit');

        // Conditionally launch add field currentamount.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Stash savepoint reached.
        upgrade_block_savepoint(true, 2019040701, 'stash');
    }

    if ($oldversion < 2019112804) {

        $parentcontextids = $DB->get_records('block_instances', ['blockname' => 'stash'], '','parentcontextid');
        $roles = get_archetype_roles('teacher');
        foreach ($roles as $role) {
            foreach ($parentcontextids as $contextid) {
                assign_capability('block/stash:view', CAP_ALLOW, $role->id, $contextid->parentcontextid, $overwrite = false);
            }
        }

        upgrade_block_savepoint(true, 2019112804, 'stash');
    }

    return true;
}
