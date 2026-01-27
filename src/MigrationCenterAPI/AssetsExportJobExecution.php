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

class AssetsExportJobExecution extends \Google\Model
{
  /**
   * Output only. Completion time of the export.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. Globally unique identifier of the execution.
   *
   * @var string
   */
  public $executionId;
  /**
   * Output only. Expiration time for the export and artifacts.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Output only. Number of assets requested for export after resolving the
   * requested filters.
   *
   * @var int
   */
  public $requestedAssetCount;
  protected $resultType = AssetsExportJobExecutionResult::class;
  protected $resultDataType = '';
  /**
   * Output only. Execution timestamp.
   *
   * @var string
   */
  public $startTime;

  /**
   * Output only. Completion time of the export.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Output only. Globally unique identifier of the execution.
   *
   * @param string $executionId
   */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /**
   * @return string
   */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /**
   * Output only. Expiration time for the export and artifacts.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Output only. Number of assets requested for export after resolving the
   * requested filters.
   *
   * @param int $requestedAssetCount
   */
  public function setRequestedAssetCount($requestedAssetCount)
  {
    $this->requestedAssetCount = $requestedAssetCount;
  }
  /**
   * @return int
   */
  public function getRequestedAssetCount()
  {
    return $this->requestedAssetCount;
  }
  /**
   * Output only. Result of the export execution.
   *
   * @param AssetsExportJobExecutionResult $result
   */
  public function setResult(AssetsExportJobExecutionResult $result)
  {
    $this->result = $result;
  }
  /**
   * @return AssetsExportJobExecutionResult
   */
  public function getResult()
  {
    return $this->result;
  }
  /**
   * Output only. Execution timestamp.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetsExportJobExecution::class, 'Google_Service_MigrationCenterAPI_AssetsExportJobExecution');
