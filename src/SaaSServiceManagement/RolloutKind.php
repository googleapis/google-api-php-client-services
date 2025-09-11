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

class RolloutKind extends \Google\Model
{
  /**
   * @var string[]
   */
  public $annotations;
  /**
   * @var string
   */
  public $createTime;
  protected $errorBudgetType = ErrorBudget::class;
  protected $errorBudgetDataType = '';
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
  public $rolloutOrchestrationStrategy;
  /**
   * @var string
   */
  public $uid;
  /**
   * @var string
   */
  public $unitFilter;
  /**
   * @var string
   */
  public $unitKind;
  /**
   * @var string
   */
  public $updateTime;
  /**
   * @var string
   */
  public $updateUnitKindStrategy;

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
   * @param ErrorBudget
   */
  public function setErrorBudget(ErrorBudget $errorBudget)
  {
    $this->errorBudget = $errorBudget;
  }
  /**
   * @return ErrorBudget
   */
  public function getErrorBudget()
  {
    return $this->errorBudget;
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
  public function setRolloutOrchestrationStrategy($rolloutOrchestrationStrategy)
  {
    $this->rolloutOrchestrationStrategy = $rolloutOrchestrationStrategy;
  }
  /**
   * @return string
   */
  public function getRolloutOrchestrationStrategy()
  {
    return $this->rolloutOrchestrationStrategy;
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
  public function setUnitFilter($unitFilter)
  {
    $this->unitFilter = $unitFilter;
  }
  /**
   * @return string
   */
  public function getUnitFilter()
  {
    return $this->unitFilter;
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
  /**
   * @param string
   */
  public function setUpdateUnitKindStrategy($updateUnitKindStrategy)
  {
    $this->updateUnitKindStrategy = $updateUnitKindStrategy;
  }
  /**
   * @return string
   */
  public function getUpdateUnitKindStrategy()
  {
    return $this->updateUnitKindStrategy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RolloutKind::class, 'Google_Service_SaaSServiceManagement_RolloutKind');
