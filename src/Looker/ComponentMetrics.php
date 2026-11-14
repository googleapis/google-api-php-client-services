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

namespace Google\Service\Looker;

class ComponentMetrics extends \Google\Model
{
  /**
   * Unspecified component type.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * BigQuery Elite System Activity component.
   */
  public const TYPE_BQ_ESA = 'BQ_ESA';
  /**
   * Database component.
   */
  public const TYPE_DB = 'DB';
  /**
   * File system component.
   */
  public const TYPE_FS = 'FS';
  /**
   * Overall Export Job.
   */
  public const TYPE_ALL = 'ALL';
  /**
   * Duration of the component export.
   *
   * @var string
   */
  public $duration;
  /**
   * End timestamp of the component export.
   *
   * @var string
   */
  public $endTime;
  /**
   * Number of retries during the component export.
   *
   * @var int
   */
  public $retryCount;
  /**
   * Size of the exported component in gigabytes.
   *
   * @var 
   */
  public $sizeGb;
  /**
   * Start timestamp of the component export.
   *
   * @var string
   */
  public $startTime;
  /**
   * Type of the exported component.
   *
   * @var string
   */
  public $type;

  /**
   * Duration of the component export.
   *
   * @param string $duration
   */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /**
   * @return string
   */
  public function getDuration()
  {
    return $this->duration;
  }
  /**
   * End timestamp of the component export.
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
   * Number of retries during the component export.
   *
   * @param int $retryCount
   */
  public function setRetryCount($retryCount)
  {
    $this->retryCount = $retryCount;
  }
  /**
   * @return int
   */
  public function getRetryCount()
  {
    return $this->retryCount;
  }
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /**
   * Start timestamp of the component export.
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
  /**
   * Type of the exported component.
   *
   * Accepted values: TYPE_UNSPECIFIED, BQ_ESA, DB, FS, ALL
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ComponentMetrics::class, 'Google_Service_Looker_ComponentMetrics');
