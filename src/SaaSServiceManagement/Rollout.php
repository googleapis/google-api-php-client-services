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

class Rollout extends \Google\Model
{
  /**
   * @var string[]
   */
  public $annotations;
  protected $controlType = RolloutControl::class;
  protected $controlDataType = '';
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $endTime;
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
  public $parentRollout;
  /**
   * @var string
   */
  public $release;
  /**
   * @var string
   */
  public $rolloutKind;
  /**
   * @var string
   */
  public $rolloutOrchestrationStrategy;
  /**
   * @var string
   */
  public $rootRollout;
  /**
   * @var string
   */
  public $startTime;
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $stateMessage;
  /**
   * @var string
   */
  public $stateTransitionTime;
  protected $statsType = RolloutStats::class;
  protected $statsDataType = '';
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
   * @param RolloutControl
   */
  public function setControl(RolloutControl $control)
  {
    $this->control = $control;
  }
  /**
   * @return RolloutControl
   */
  public function getControl()
  {
    return $this->control;
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
   * @param string
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
  public function setParentRollout($parentRollout)
  {
    $this->parentRollout = $parentRollout;
  }
  /**
   * @return string
   */
  public function getParentRollout()
  {
    return $this->parentRollout;
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
   * @param string
   */
  public function setRolloutKind($rolloutKind)
  {
    $this->rolloutKind = $rolloutKind;
  }
  /**
   * @return string
   */
  public function getRolloutKind()
  {
    return $this->rolloutKind;
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
  public function setRootRollout($rootRollout)
  {
    $this->rootRollout = $rootRollout;
  }
  /**
   * @return string
   */
  public function getRootRollout()
  {
    return $this->rootRollout;
  }
  /**
   * @param string
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /**
   * @return string
   */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
  /**
   * @param string
   */
  public function setStateTransitionTime($stateTransitionTime)
  {
    $this->stateTransitionTime = $stateTransitionTime;
  }
  /**
   * @return string
   */
  public function getStateTransitionTime()
  {
    return $this->stateTransitionTime;
  }
  /**
   * @param RolloutStats
   */
  public function setStats(RolloutStats $stats)
  {
    $this->stats = $stats;
  }
  /**
   * @return RolloutStats
   */
  public function getStats()
  {
    return $this->stats;
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
class_alias(Rollout::class, 'Google_Service_SaaSServiceManagement_Rollout');
