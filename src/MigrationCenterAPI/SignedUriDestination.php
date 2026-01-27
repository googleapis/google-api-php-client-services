<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\MigrationCenterAPI;

class SignedUriDestination extends \Google\Model
{
  /**
   * Unspecified file format will be treated as CSV.
   */
  public const FILE_FORMAT_FILE_FORMAT_UNSPECIFIED = 'FILE_FORMAT_UNSPECIFIED';
  /**
   * CSV file format.
   */
  public const FILE_FORMAT_CSV = 'CSV';
  /**
   * XLSX file format which used in Excel.
   */
  public const FILE_FORMAT_XLSX = 'XLSX';
  /**
   * Required. The file format to export.
   *
   * @var string
   */
  public $fileFormat;

  /**
   * Required. The file format to export.
   *
   * Accepted values: FILE_FORMAT_UNSPECIFIED, CSV, XLSX
   *
   * @param self::FILE_FORMAT_* $fileFormat
   */
  public function setFileFormat($fileFormat)
  {
    $this->fileFormat = $fileFormat;
  }
  /**
   * @return self::FILE_FORMAT_*
   */
  public function getFileFormat()
  {
    return $this->fileFormat;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SignedUriDestination::class, 'Google_Service_MigrationCenterAPI_SignedUriDestination');
