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
 * Class form
 *
 * @package    local_ivhello
 * @copyright  2026 Sokunthearith Makara <sokunthearithmakara@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class form extends \mod_interactivevideo\form\base_form {
    /**
     * Form definition
     */
    public function definition() {
        $mform = $this->_form;

        // Standard elements.
        $this->standard_elements();

        // Title field.
        $mform->addElement('text', 'title', '<i class="bi bi-quote iv-mr-2"></i>' . get_string('title', 'mod_interactivevideo')); // Title.
        $mform->setType('title', PARAM_TEXT); // Set type.
        $mform->setDefault('title', get_string('defaulttitle', 'mod_interactivevideo')); // Set default value.
        $mform->addRule('title', get_string('required'), 'required', null, 'client'); // Add validation rule.

        // Custom text field.
        $mform->addElement('text', 'content', '<i class="bi bi-quote iv-mr-2"></i>' . get_string('customtext', 'local_ivhello')); // Custom text.
        $mform->setType('content', PARAM_TEXT); // Set type.
        $mform->addRule('content', get_string('required'), 'required', null, 'client'); // Add validation rule.

        // Completion tracking.
        $this->completion_tracking_field('none');
        // XP.
        $this->xp_form_field(); // XP form field.
        $mform->hideIf('xp', 'completiontracking', 'eq', 'none'); // Hide XP field if completion tracking is none.
        // Display options.
        $this->display_options_field();
        // Advanced form fields.
        $this->advanced_form_fields([
            'hascompletion' => true, // Has completion.
        ]);

        $this->close_form(); // Close form.
    }

    /**
     * Set data for dynamic submission.
     */
    public function set_data_for_dynamic_submission(): void { // Set data for dynamic submission.
        $data = $this->set_data_default(); // Set default data.
        $data->content = $this->optional_param('content', '', PARAM_TEXT); // Set content.
        $this->set_data($data); // Set data.
    }
}
