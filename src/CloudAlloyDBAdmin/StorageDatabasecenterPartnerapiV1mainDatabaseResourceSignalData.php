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

class StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData extends \Google\Model
{
  /**
   * @var string
   */
  public $fullResourceName;
  /**
   * @var string
   */
  public $lastRefreshTime;
  protected $resourceIdType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceId::class;
  protected $resourceIdDataType = '';
  /**
   * @var bool
   */
  public $signalBoolValue;
  /**
   * @var string
   */
  public $signalState;
  /**
   * @var string
   */
  public $signalType;

  /**
   * @param string
   */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /**
   * @return string
   */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
  /**
   * @param string
   */
  public function setLastRefreshTime($lastRefreshTime)
  {
    $this->lastRefreshTime = $lastRefreshTime;
  }
  /**
   * @return string
   */
  public function getLastRefreshTime()
  {
    return $this->lastRefreshTime;
  }
  /**
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceId
   */
  public function setResourceId(StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceId
   */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /**
   * @param bool
   */
  public function setSignalBoolValue($signalBoolValue)
  {
    $this->signalBoolValue = $signalBoolValue;
  }
  /**
   * @return bool
   */
  public function getSignalBoolValue()
  {
    return $this->signalBoolValue;
  }
  /**
   * @param string
   */
  public function setSignalState($signalState)
  {
    $this->signalState = $signalState;
  }
  /**
   * @return string
   */
  public function getSignalState()
  {
    return $this->signalState;
  }
  /**
   * @param string
   */
  public function setSignalType($signalType)
  {
    $this->signalType = $signalType;
  }
  /**
   * @return string
   */
  public function getSignalType()
  {
    return $this->signalType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData');
