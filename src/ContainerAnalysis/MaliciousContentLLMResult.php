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

namespace Google\Service\ContainerAnalysis;

class MaliciousContentLLMResult extends \Google\Model
{
  /**
   * Unspecified severity.
   */
  public const MAX_SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * Critical severity.
   */
  public const MAX_SEVERITY_CRITICAL = 'CRITICAL';
  /**
   * High severity.
   */
  public const MAX_SEVERITY_HIGH = 'HIGH';
  /**
   * Unspecified scan status.
   */
  public const SCAN_STATUS_SCAN_STATUS_UNSPECIFIED = 'SCAN_STATUS_UNSPECIFIED';
  /**
   * Scan was performed.
   */
  public const SCAN_STATUS_PERFORMED = 'PERFORMED';
  /**
   * Scan was not performed.
   */
  public const SCAN_STATUS_NOT_PERFORMED = 'NOT_PERFORMED';
  /**
   * Tracks max severity found.
   *
   * @var string
   */
  public $maxSeverity;
  /**
   * The base name of the model that performed the scan.
   *
   * @var string
   */
  public $modelId;
  /**
   * Status of the scan.
   *
   * @var string
   */
  public $scanStatus;

  /**
   * Tracks max severity found.
   *
   * Accepted values: SEVERITY_UNSPECIFIED, CRITICAL, HIGH
   *
   * @param self::MAX_SEVERITY_* $maxSeverity
   */
  public function setMaxSeverity($maxSeverity)
  {
    $this->maxSeverity = $maxSeverity;
  }
  /**
   * @return self::MAX_SEVERITY_*
   */
  public function getMaxSeverity()
  {
    return $this->maxSeverity;
  }
  /**
   * The base name of the model that performed the scan.
   *
   * @param string $modelId
   */
  public function setModelId($modelId)
  {
    $this->modelId = $modelId;
  }
  /**
   * @return string
   */
  public function getModelId()
  {
    return $this->modelId;
  }
  /**
   * Status of the scan.
   *
   * Accepted values: SCAN_STATUS_UNSPECIFIED, PERFORMED, NOT_PERFORMED
   *
   * @param self::SCAN_STATUS_* $scanStatus
   */
  public function setScanStatus($scanStatus)
  {
    $this->scanStatus = $scanStatus;
  }
  /**
   * @return self::SCAN_STATUS_*
   */
  public function getScanStatus()
  {
    return $this->scanStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MaliciousContentLLMResult::class, 'Google_Service_ContainerAnalysis_MaliciousContentLLMResult');
