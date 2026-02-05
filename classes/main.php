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

namespace local_ivhello;

/**
 * Class main
 *
 * @package    local_ivhello
 * @copyright  2026 Sokunthearith Makara <sokunthearithmakara@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class main extends \ivplugin_richtext\main {
    /**
     * Returns the property of the richtext type
     * name - name of the type
     * title - title of the type
     * icon - icon of the type
     * amdmodule - javascript module of the type
     * class - php class of the type
     * form - php form class of the type
     * hascompletion - whether the type has completion status
     * hastimestamp - whether the type depends on timestamp
     * allowmultiple - whether the type allows multiple instances in a single interactive video
     * description - description of the type
     * @return array
     */
    public function get_property() {
        return [
            'name' => 'hello',
            'title' => get_string('pluginname', 'local_ivhello'),
            'icon' => 'bi bi-android',
            'amdmodule' => 'local_ivhello/main',
            'class' => 'local_ivhello\\main',
            'form' => 'local_ivhello\\form',
            'hascompletion' => true,
            'hastimestamp' => true,
            'allowmultiple' => true,
            'hasreport' => true,
            'description' => get_string('plugindescription', 'local_ivhello'),
            'author' => 'tsmakara',
            'initonreport' => true,
            'pro' => true,
            'tutorial' => get_string('tutorialurl', 'local_ivhello'),
            'preloadstrings' => false,
        ];
    }

    public function get_content($arg) {
        return 'Hello World!';
    }
}
