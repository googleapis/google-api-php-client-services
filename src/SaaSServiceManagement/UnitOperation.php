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

namespace Google\Service\SaaSServiceManagement;

class UnitOperation extends \Google\Collection
{
  protected $collection_key = 'conditions';
  /**
   * @var string[]
   */
  public $annotations;
  /**
   * @var bool
   */
  public $cancel;
  protected $conditionsType = UnitOperationCondition::class;
  protected $conditionsDataType = 'array';
  /**
   * @var string
   */
  public $createTime;
  protected $deprovisionType = Deprovision::class;
  protected $deprovisionDataType = '';
  /**
   * @var string
   */
  public $engineState;
  /**
   * @var string
   */
  public $errorCategory;
  /**
   * @var string
   */
  public $etag;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $parentUnitOperation;
  protected $provisionType = Provision::class;
  protected $provisionDataType = '';
  /**
   * @var string
   */
  public $rollout;
  protected $scheduleType = Schedule::class;
  protected $scheduleDataType = '';
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $uid;
  /**
   * @var string
   */
  public $unit;
  /**
   * @var string
   */
  public $updateTime;
  protected $upgradeType = Upgrade::class;
  protected $upgradeDataType = '';

  /**
   * @param string[]
   */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /**
   * @return string[]
   */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * @param bool
   */
  public function setCancel($cancel)
  {
    $this->cancel = $cancel;
  }
  /**
   * @return bool
   */
  public function getCancel()
  {
    return $this->cancel;
  }
  /**
   * @param UnitOperationCondition[]
   */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /**
   * @return UnitOperationCondition[]
   */
  public function getConditions()
  {
    return $this->conditions;
  }
  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param Deprovision
   */
  public function setDeprovision(Deprovision $deprovision)
  {
    $this->deprovision = $deprovision;
  }
  /**
   * @return Deprovision
   */
  public function getDeprovision()
  {
    return $this->deprovision;
  }
  /**
   * @param string
   */
  public function setEngineState($engineState)
  {
    $this->engineState = $engineState;
  }
  /**
   * @return string
   */
  public function getEngineState()
  {
    return $this->engineState;
  }
  /**
   * @param string
   */
  public function setErrorCategory($errorCategory)
  {
    $this->errorCategory = $errorCategory;
  }
  /**
   * @return string
   */
  public function getErrorCategory()
  {
    return $this->errorCategory;
  }
  /**
   * @param string
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setParentUnitOperation($parentUnitOperation)
  {
    $this->parentUnitOperation = $parentUnitOperation;
  }
  /**
   * @return string
   */
  public function getParentUnitOperation()
  {
    return $this->parentUnitOperation;
  }
  /**
   * @param Provision
   */
  public function setProvision(Provision $provision)
  {
    $this->provision = $provision;
  }
  /**
   * @return Provision
   */
  public function getProvision()
  {
    return $this->provision;
  }
  /**
   * @param string
   */
  public function setRollout($rollout)
  {
    $this->rollout = $rollout;
  }
  /**
   * @return string
   */
  public function getRollout()
  {
    return $this->rollout;
  }
  /**
   * @param Schedule
   */
  public function setSchedule(Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  /**
   * @return Schedule
   */
  public function getSchedule()
  {
    return $this->schedule;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param string
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * @param string
   */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /**
   * @return string
   */
  public function getUnit()
  {
    return $this->unit;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * @param Upgrade
   */
  public function setUpgrade(Upgrade $upgrade)
  {
    $this->upgrade = $upgrade;
  }
  /**
   * @return Upgrade
   */
  public function getUpgrade()
  {
    return $this->upgrade;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UnitOperation::class, 'Google_Service_SaaSServiceManagement_UnitOperation');
