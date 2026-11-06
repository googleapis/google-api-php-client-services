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

namespace Google\Service\DataManager;

class WarningCount extends \Google\Collection
{
  public const REASON_PROCESSING_WARNING_REASON_UNSPECIFIED = 'PROCESSING_WARNING_REASON_UNSPECIFIED';
  public const REASON_PROCESSING_WARNING_REASON_KEK_PERMISSION_DENIED = 'PROCESSING_WARNING_REASON_KEK_PERMISSION_DENIED';
  public const REASON_PROCESSING_WARNING_REASON_DEK_DECRYPTION_ERROR = 'PROCESSING_WARNING_REASON_DEK_DECRYPTION_ERROR';
  public const REASON_PROCESSING_WARNING_REASON_DECRYPTION_ERROR = 'PROCESSING_WARNING_REASON_DECRYPTION_ERROR';
  public const REASON_PROCESSING_WARNING_REASON_WIP_AUTH_FAILED = 'PROCESSING_WARNING_REASON_WIP_AUTH_FAILED';
  public const REASON_PROCESSING_WARNING_REASON_INVALID_WIP = 'PROCESSING_WARNING_REASON_INVALID_WIP';
  public const REASON_PROCESSING_WARNING_REASON_INVALID_KEK = 'PROCESSING_WARNING_REASON_INVALID_KEK';
  public const REASON_PROCESSING_WARNING_REASON_USER_IDENTIFIER_DECRYPTION_ERROR = 'PROCESSING_WARNING_REASON_USER_IDENTIFIER_DECRYPTION_ERROR';
  public const REASON_PROCESSING_WARNING_REASON_INTERNAL_ERROR = 'PROCESSING_WARNING_REASON_INTERNAL_ERROR';
  public const REASON_PROCESSING_WARNING_REASON_AWS_AUTH_FAILED = 'PROCESSING_WARNING_REASON_AWS_AUTH_FAILED';
  public const REASON_PROCESSING_WARNING_REASON_CUSTOM_VARIABLE_NOT_ENABLED = 'PROCESSING_WARNING_REASON_CUSTOM_VARIABLE_NOT_ENABLED';
  public const REASON_PROCESSING_WARNING_REASON_CUSTOM_VARIABLE_NOT_PREDEFINED = 'PROCESSING_WARNING_REASON_CUSTOM_VARIABLE_NOT_PREDEFINED';
  protected $collection_key = 'recordIndices';
  /**
   * @var string
   */
  public $reason;
  /**
   * @var string
   */
  public $recordCount;
  /**
   * @var int[]
   */
  public $recordIndices;

  /**
   * @param self::REASON_* $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return self::REASON_*
   */
  public function getReason()
  {
    return $this->reason;
  }
  /**
   * @param string $recordCount
   */
  public function setRecordCount($recordCount)
  {
    $this->recordCount = $recordCount;
  }
  /**
   * @return string
   */
  public function getRecordCount()
  {
    return $this->recordCount;
  }
  /**
   * @param int[] $recordIndices
   */
  public function setRecordIndices($recordIndices)
  {
    $this->recordIndices = $recordIndices;
  }
  /**
   * @return int[]
   */
  public function getRecordIndices()
  {
    return $this->recordIndices;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WarningCount::class, 'Google_Service_DataManager_WarningCount');
