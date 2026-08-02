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

namespace Google\Service\CloudAlloyDBAdmin;

class StorageDatabasecenterPartnerapiV1mainRetentionSettings extends \Google\Model
{
  /**
   * Disable validation warnings
   */
  public const RETENTION_UNIT_RETENTION_UNIT_UNSPECIFIED = 'RETENTION_UNIT_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const RETENTION_UNIT_COUNT = 'COUNT';
  /**
   * Disable validation warnings
   */
  public const RETENTION_UNIT_TIME = 'TIME';
  /**
   * Disable validation warnings
   */
  public const RETENTION_UNIT_DURATION = 'DURATION';
  /**
   * Disable validation warnings
   */
  public const RETENTION_UNIT_RETENTION_UNIT_OTHER = 'RETENTION_UNIT_OTHER';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $durationBasedRetention;
  /**
   * Disable validation warnings
   *
   * @var int
   */
  public $quantityBasedRetention;
  /**
   * Disable validation warnings
   *
   * @deprecated
   * @var string
   */
  public $retentionUnit;
  /**
   * Disable validation warnings
   *
   * @deprecated
   * @var string
   */
  public $timeBasedRetention;
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $timestampBasedRetentionTime;

  /**
   * Disable validation warnings
   *
   * @param string $durationBasedRetention
   */
  public function setDurationBasedRetention($durationBasedRetention)
  {
    $this->durationBasedRetention = $durationBasedRetention;
  }
  /**
   * @return string
   */
  public function getDurationBasedRetention()
  {
    return $this->durationBasedRetention;
  }
  /**
   * Disable validation warnings
   *
   * @param int $quantityBasedRetention
   */
  public function setQuantityBasedRetention($quantityBasedRetention)
  {
    $this->quantityBasedRetention = $quantityBasedRetention;
  }
  /**
   * @return int
   */
  public function getQuantityBasedRetention()
  {
    return $this->quantityBasedRetention;
  }
  /**
   * Disable validation warnings
   *
   * Accepted values: RETENTION_UNIT_UNSPECIFIED, COUNT, TIME, DURATION,
   * RETENTION_UNIT_OTHER
   *
   * @deprecated
   * @param self::RETENTION_UNIT_* $retentionUnit
   */
  public function setRetentionUnit($retentionUnit)
  {
    $this->retentionUnit = $retentionUnit;
  }
  /**
   * @deprecated
   * @return self::RETENTION_UNIT_*
   */
  public function getRetentionUnit()
  {
    return $this->retentionUnit;
  }
  /**
   * Disable validation warnings
   *
   * @deprecated
   * @param string $timeBasedRetention
   */
  public function setTimeBasedRetention($timeBasedRetention)
  {
    $this->timeBasedRetention = $timeBasedRetention;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getTimeBasedRetention()
  {
    return $this->timeBasedRetention;
  }
  /**
   * Disable validation warnings
   *
   * @param string $timestampBasedRetentionTime
   */
  public function setTimestampBasedRetentionTime($timestampBasedRetentionTime)
  {
    $this->timestampBasedRetentionTime = $timestampBasedRetentionTime;
  }
  /**
   * @return string
   */
  public function getTimestampBasedRetentionTime()
  {
    return $this->timestampBasedRetentionTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainRetentionSettings::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainRetentionSettings');
