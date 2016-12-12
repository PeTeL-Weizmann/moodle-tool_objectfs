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
//

  /**
   * Strings for component 'local_catdeleter', language 'en'.
   *
   * @package   local_catdeleter
   * @author    Kenneth Hendricks <kennethhendricks@catalyst-au.net>
   * @copyright Catalyst IT
   * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
   */

$string['pluginname'] = 'S3 File System';
$string['push_to_sss_task'] = 'S3 file system upload task';

$string['file_status:page'] = 'S3 file status';
$string['file_status:location'] = 'File location';
$string['file_status:files'] = 'Files';
$string['file_status:size'] = 'Total size (MB)';
$string['file_status:state:duplicated'] = 'Duplicated';
$string['file_status:state:local'] = 'Local';
$string['file_status:state:external'] = 'External';
$string['file_status:state:unknown'] = 'Unknown';


$string['settings:enabled'] = 'Enable S3 file system';
$string['settings:enabled_help'] = 'Enable or disable the S3 file system.';
$string['settings:awsheader'] = 'AWS S3 Settings';
$string['settings:key'] = 'Key';
$string['settings:key_help'] = 'AWS key credential.';
$string['settings:secret'] = 'Secret';
$string['settings:secret_help'] = 'AWS secret credential.';
$string['settings:bucket'] = 'Bucket';
$string['settings:bucket_help'] = 'AWS bucket to store files in.';
$string['settings:region'] = 'AWS region';
$string['settings:region_help'] = 'AWS API gateway region.';
$string['settings:checkconnenction'] = 'Check Connection';
$string['settings:filetransferheader'] = 'File Transfer Settings';
$string['settings:sizethreshold'] = 'Size threshold (KB)';
$string['settings:sizethreshold_help'] = 'Size threshold for transfering files to S3. If files are over this size they will be transfered to S3.';
$string['settings:minimumage'] = 'Minimum age';
$string['settings:minimumage_help'] = 'Minimum age that a file must exist on the local file system before it will be considered for transfer.';
$string['settings:consistencydelay'] = 'Consistency delay';
$string['settings:consistencydelay_help'] = 'How long a file must existed after being transfered to S3 before they are a candidate for deletion locally. A value of -1 will never delete local files.';
$string['settings:loggingheader'] = 'Logging Settings';
$string['settings:logginglocation'] = 'Logging location';
$string['settings:logginglocation_help'] = 'Location of the file access log file.';
