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

class Unit extends \Google\Collection
{
  protected $collection_key = 'scheduledOperations';
  /**
   * @var string[]
   */
  public $annotations;
  protected $conditionsType = UnitCondition::class;
  protected $conditionsDataType = 'array';
  /**
   * @var string
   */
  public $createTime;
  protected $dependenciesType = UnitDependency::class;
  protected $dependenciesDataType = 'array';
  protected $dependentsType = UnitDependency::class;
  protected $dependentsDataType = 'array';
  /**
   * @var string
   */
  public $etag;
  protected $inputVariablesType = UnitVariable::class;
  protected $inputVariablesDataType = 'array';
  /**
   * @var string[]
   */
  public $labels;
  protected $maintenanceType = MaintenanceSettings::class;
  protected $maintenanceDataType = '';
  /**
   * @var string
   */
  public $managementMode;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string[]
   */
  public $ongoingOperations;
  protected $outputVariablesType = UnitVariable::class;
  protected $outputVariablesDataType = 'array';
  /**
   * @var string[]
   */
  public $pendingOperations;
  /**
   * @var string
   */
  public $release;
  /**
   * @var string[]
   */
  public $scheduledOperations;
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $systemCleanupAt;
  /**
   * @var string
   */
  public $systemManagedState;
  /**
   * @var string
   */
  public $tenant;
  /**
   * @var string
   */
  public $uid;
  /**
   * @var string
   */
  public $unitKind;
  /**
   * @var string
   */
  public $updateTime;

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
   * @param UnitCondition[]
   */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /**
   * @return UnitCondition[]
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
   * @param UnitDependency[]
   */
  public function setDependencies($dependencies)
  {
    $this->dependencies = $dependencies;
  }
  /**
   * @return UnitDependency[]
   */
  public function getDependencies()
  {
    return $this->dependencies;
  }
  /**
   * @param UnitDependency[]
   */
  public function setDependents($dependents)
  {
    $this->dependents = $dependents;
  }
  /**
   * @return UnitDependency[]
   */
  public function getDependents()
  {
    return $this->dependents;
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
   * @param UnitVariable[]
   */
  public function setInputVariables($inputVariables)
  {
    $this->inputVariables = $inputVariables;
  }
  /**
   * @return UnitVariable[]
   */
  public function getInputVariables()
  {
    return $this->inputVariables;
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
   * @param MaintenanceSettings
   */
  public function setMaintenance(MaintenanceSettings $maintenance)
  {
    $this->maintenance = $maintenance;
  }
  /**
   * @return MaintenanceSettings
   */
  public function getMaintenance()
  {
    return $this->maintenance;
  }
  /**
   * @param string
   */
  public function setManagementMode($managementMode)
  {
    $this->managementMode = $managementMode;
  }
  /**
   * @return string
   */
  public function getManagementMode()
  {
    return $this->managementMode;
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
   * @param string[]
   */
  public function setOngoingOperations($ongoingOperations)
  {
    $this->ongoingOperations = $ongoingOperations;
  }
  /**
   * @return string[]
   */
  public function getOngoingOperations()
  {
    return $this->ongoingOperations;
  }
  /**
   * @param UnitVariable[]
   */
  public function setOutputVariables($outputVariables)
  {
    $this->outputVariables = $outputVariables;
  }
  /**
   * @return UnitVariable[]
   */
  public function getOutputVariables()
  {
    return $this->outputVariables;
  }
  /**
   * @param string[]
   */
  public function setPendingOperations($pendingOperations)
  {
    $this->pendingOperations = $pendingOperations;
  }
  /**
   * @return string[]
   */
  public function getPendingOperations()
  {
    return $this->pendingOperations;
  }
  /**
   * @param string
   */
  public function setRelease($release)
  {
    $this->release = $release;
  }
  /**
   * @return string
   */
  public function getRelease()
  {
    return $this->release;
  }
  /**
   * @param string[]
   */
  public function setScheduledOperations($scheduledOperations)
  {
    $this->scheduledOperations = $scheduledOperations;
  }
  /**
   * @return string[]
   */
  public function getScheduledOperations()
  {
    return $this->scheduledOperations;
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
  public function setSystemCleanupAt($systemCleanupAt)
  {
    $this->systemCleanupAt = $systemCleanupAt;
  }
  /**
   * @return string
   */
  public function getSystemCleanupAt()
  {
    return $this->systemCleanupAt;
  }
  /**
   * @param string
   */
  public function setSystemManagedState($systemManagedState)
  {
    $this->systemManagedState = $systemManagedState;
  }
  /**
   * @return string
   */
  public function getSystemManagedState()
  {
    return $this->systemManagedState;
  }
  /**
   * @param string
   */
  public function setTenant($tenant)
  {
    $this->tenant = $tenant;
  }
  /**
   * @return string
   */
  public function getTenant()
  {
    return $this->tenant;
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
  public function setUnitKind($unitKind)
  {
    $this->unitKind = $unitKind;
  }
  /**
   * @return string
   */
  public function getUnitKind()
  {
    return $this->unitKind;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Unit::class, 'Google_Service_SaaSServiceManagement_Unit');
