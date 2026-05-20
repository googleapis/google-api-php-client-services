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

namespace Google\Service\BigtableAdmin;

class AutomatedBackupPolicy extends \Google\Collection
{
  protected $collection_key = 'locations';
  /**
   * How frequently automated backups should occur. The only supported value at
   * this time is 24 hours. An undefined frequency is treated as 24 hours.
   *
   * @var string
   */
  public $frequency;
  /**
   * Optional. A list of Cloud Bigtable zones where automated backups are
   * allowed to be created. If empty, automated backups will be created in all
   * zones of the instance. Locations are in the format
   * `projects/{project}/locations/{zone}`. You can set this field only for
   * tables in Enterprise Plus instances.
   *
   * @var string[]
   */
  public $locations;
  /**
   * Required. How long the automated backups should be retained. Values must be
   * at least 3 days and at most 90 days.
   *
   * @var string
   */
  public $retentionPeriod;

  /**
   * How frequently automated backups should occur. The only supported value at
   * this time is 24 hours. An undefined frequency is treated as 24 hours.
   *
   * @param string $frequency
   */
  public function setFrequency($frequency)
  {
    $this->frequency = $frequency;
  }
  /**
   * @return string
   */
  public function getFrequency()
  {
    return $this->frequency;
  }
  /**
   * Optional. A list of Cloud Bigtable zones where automated backups are
   * allowed to be created. If empty, automated backups will be created in all
   * zones of the instance. Locations are in the format
   * `projects/{project}/locations/{zone}`. You can set this field only for
   * tables in Enterprise Plus instances.
   *
   * @param string[] $locations
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return string[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * Required. How long the automated backups should be retained. Values must be
   * at least 3 days and at most 90 days.
   *
   * @param string $retentionPeriod
   */
  public function setRetentionPeriod($retentionPeriod)
  {
    $this->retentionPeriod = $retentionPeriod;
  }
  /**
   * @return string
   */
  public function getRetentionPeriod()
  {
    return $this->retentionPeriod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutomatedBackupPolicy::class, 'Google_Service_BigtableAdmin_AutomatedBackupPolicy');
