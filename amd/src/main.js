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
 * TODO describe module main
 *
 * @module     local_ivhello/main
 * @copyright  2026 Sokunthearith Makara <sokunthearithmakara@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import Base from 'mod_interactivevideo/type/base'; // Base class.
import $ from 'jquery'; // JQuery.

export default class Hello extends Base {
    init() {
        if (this.isEditMode()) { // Check if edit mode.
            return; // Return.
        }
        window.console.log('Hello World!'); // Log message.
        let self = this; // Get self.

        $(document).on('iv:playerPaused.Hello', async function() { // On player paused event.
            let currentTime = await self.player.getCurrentTime(); // Get current time.

            window.console.log({currentTime}); // Log current time.
            self.addNotification(currentTime, 'default');
        });
    }

    addAnnotation(annotations, timestamp, coursemodule) {
        window.console.log('addAnnotation');
        super.addAnnotation(annotations, timestamp, coursemodule);
    }
}
