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

namespace Google\Service\NetworkSecurity;

class WildfireSubmissionRule extends \Google\Model
{
  /**
   * Direction not specified.
   */
  public const DIRECTION_DIRECTION_UNSPECIFIED = 'DIRECTION_UNSPECIFIED';
  /**
   * Upload direction.
   */
  public const DIRECTION_UPLOAD = 'UPLOAD';
  /**
   * Download direction.
   */
  public const DIRECTION_DOWNLOAD = 'DOWNLOAD';
  /**
   * Both upload and download directions.
   */
  public const DIRECTION_BOTH = 'BOTH';
  /**
   * File selection mode not specified.
   */
  public const FILE_SELECTION_MODE_FILE_SELECTION_MODE_UNSPECIFIED = 'FILE_SELECTION_MODE_UNSPECIFIED';
  /**
   * Submit all file types for scanning.
   */
  public const FILE_SELECTION_MODE_ALL_FILE_TYPES = 'ALL_FILE_TYPES';
  /**
   * Submit a custom list of file types for scanning.
   */
  public const FILE_SELECTION_MODE_CUSTOM_FILE_TYPES = 'CUSTOM_FILE_TYPES';
  protected $customFileTypesType = WildfireSubmissionRuleCustomFileTypes::class;
  protected $customFileTypesDataType = '';
  /**
   * Required. Direction for the files to be analyzed by Advanced malware
   * sandbox.
   *
   * @var string
   */
  public $direction;
  /**
   * Required. File selection mode for Advanced malware sandbox analysis.
   *
   * @var string
   */
  public $fileSelectionMode;

  /**
   * Submit a custom list of file types for Advanced malware sandbox analysis.
   *
   * @param WildfireSubmissionRuleCustomFileTypes $customFileTypes
   */
  public function setCustomFileTypes(WildfireSubmissionRuleCustomFileTypes $customFileTypes)
  {
    $this->customFileTypes = $customFileTypes;
  }
  /**
   * @return WildfireSubmissionRuleCustomFileTypes
   */
  public function getCustomFileTypes()
  {
    return $this->customFileTypes;
  }
  /**
   * Required. Direction for the files to be analyzed by Advanced malware
   * sandbox.
   *
   * Accepted values: DIRECTION_UNSPECIFIED, UPLOAD, DOWNLOAD, BOTH
   *
   * @param self::DIRECTION_* $direction
   */
  public function setDirection($direction)
  {
    $this->direction = $direction;
  }
  /**
   * @return self::DIRECTION_*
   */
  public function getDirection()
  {
    return $this->direction;
  }
  /**
   * Required. File selection mode for Advanced malware sandbox analysis.
   *
   * Accepted values: FILE_SELECTION_MODE_UNSPECIFIED, ALL_FILE_TYPES,
   * CUSTOM_FILE_TYPES
   *
   * @param self::FILE_SELECTION_MODE_* $fileSelectionMode
   */
  public function setFileSelectionMode($fileSelectionMode)
  {
    $this->fileSelectionMode = $fileSelectionMode;
  }
  /**
   * @return self::FILE_SELECTION_MODE_*
   */
  public function getFileSelectionMode()
  {
    return $this->fileSelectionMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WildfireSubmissionRule::class, 'Google_Service_NetworkSecurity_WildfireSubmissionRule');
