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

namespace Google\Service\TagManager;

class Trigger extends \Google\Collection
{
  protected $collection_key = 'parameter';
  /**
   * @var string
   */
  public $accountId;
  /**
   * @var Condition[]
   */
  public $autoEventFilter;
  protected $autoEventFilterType = Condition::class;
  protected $autoEventFilterDataType = 'array';
  /**
   * @var Parameter
   */
  public $checkValidation;
  protected $checkValidationType = Parameter::class;
  protected $checkValidationDataType = '';
  /**
   * @var string
   */
  public $containerId;
  /**
   * @var Parameter
   */
  public $continuousTimeMinMilliseconds;
  protected $continuousTimeMinMillisecondsType = Parameter::class;
  protected $continuousTimeMinMillisecondsDataType = '';
  /**
   * @var Condition[]
   */
  public $customEventFilter;
  protected $customEventFilterType = Condition::class;
  protected $customEventFilterDataType = 'array';
  /**
   * @var Parameter
   */
  public $eventName;
  protected $eventNameType = Parameter::class;
  protected $eventNameDataType = '';
  /**
   * @var Condition[]
   */
  public $filter;
  protected $filterType = Condition::class;
  protected $filterDataType = 'array';
  /**
   * @var string
   */
  public $fingerprint;
  /**
   * @var Parameter
   */
  public $horizontalScrollPercentageList;
  protected $horizontalScrollPercentageListType = Parameter::class;
  protected $horizontalScrollPercentageListDataType = '';
  /**
   * @var Parameter
   */
  public $interval;
  protected $intervalType = Parameter::class;
  protected $intervalDataType = '';
  /**
   * @var Parameter
   */
  public $intervalSeconds;
  protected $intervalSecondsType = Parameter::class;
  protected $intervalSecondsDataType = '';
  /**
   * @var Parameter
   */
  public $limit;
  protected $limitType = Parameter::class;
  protected $limitDataType = '';
  /**
   * @var Parameter
   */
  public $maxTimerLengthSeconds;
  protected $maxTimerLengthSecondsType = Parameter::class;
  protected $maxTimerLengthSecondsDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $notes;
  /**
   * @var Parameter[]
   */
  public $parameter;
  protected $parameterType = Parameter::class;
  protected $parameterDataType = 'array';
  /**
   * @var string
   */
  public $parentFolderId;
  /**
   * @var string
   */
  public $path;
  /**
   * @var Parameter
   */
  public $selector;
  protected $selectorType = Parameter::class;
  protected $selectorDataType = '';
  /**
   * @var string
   */
  public $tagManagerUrl;
  /**
   * @var Parameter
   */
  public $totalTimeMinMilliseconds;
  protected $totalTimeMinMillisecondsType = Parameter::class;
  protected $totalTimeMinMillisecondsDataType = '';
  /**
   * @var string
   */
  public $triggerId;
  /**
   * @var string
   */
  public $type;
  /**
   * @var Parameter
   */
  public $uniqueTriggerId;
  protected $uniqueTriggerIdType = Parameter::class;
  protected $uniqueTriggerIdDataType = '';
  /**
   * @var Parameter
   */
  public $verticalScrollPercentageList;
  protected $verticalScrollPercentageListType = Parameter::class;
  protected $verticalScrollPercentageListDataType = '';
  /**
   * @var Parameter
   */
  public $visibilitySelector;
  protected $visibilitySelectorType = Parameter::class;
  protected $visibilitySelectorDataType = '';
  /**
   * @var Parameter
   */
  public $visiblePercentageMax;
  protected $visiblePercentageMaxType = Parameter::class;
  protected $visiblePercentageMaxDataType = '';
  /**
   * @var Parameter
   */
  public $visiblePercentageMin;
  protected $visiblePercentageMinType = Parameter::class;
  protected $visiblePercentageMinDataType = '';
  /**
   * @var Parameter
   */
  public $waitForTags;
  protected $waitForTagsType = Parameter::class;
  protected $waitForTagsDataType = '';
  /**
   * @var Parameter
   */
  public $waitForTagsTimeout;
  protected $waitForTagsTimeoutType = Parameter::class;
  protected $waitForTagsTimeoutDataType = '';
  /**
   * @var string
   */
  public $workspaceId;

  /**
   * @param string
   */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /**
   * @return string
   */
  public function getAccountId()
  {
    return $this->accountId;
  }
  /**
   * @param Condition[]
   */
  public function setAutoEventFilter($autoEventFilter)
  {
    $this->autoEventFilter = $autoEventFilter;
  }
  /**
   * @return Condition[]
   */
  public function getAutoEventFilter()
  {
    return $this->autoEventFilter;
  }
  /**
   * @param Parameter
   */
  public function setCheckValidation(Parameter $checkValidation)
  {
    $this->checkValidation = $checkValidation;
  }
  /**
   * @return Parameter
   */
  public function getCheckValidation()
  {
    return $this->checkValidation;
  }
  /**
   * @param string
   */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /**
   * @return string
   */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /**
   * @param Parameter
   */
  public function setContinuousTimeMinMilliseconds(Parameter $continuousTimeMinMilliseconds)
  {
    $this->continuousTimeMinMilliseconds = $continuousTimeMinMilliseconds;
  }
  /**
   * @return Parameter
   */
  public function getContinuousTimeMinMilliseconds()
  {
    return $this->continuousTimeMinMilliseconds;
  }
  /**
   * @param Condition[]
   */
  public function setCustomEventFilter($customEventFilter)
  {
    $this->customEventFilter = $customEventFilter;
  }
  /**
   * @return Condition[]
   */
  public function getCustomEventFilter()
  {
    return $this->customEventFilter;
  }
  /**
   * @param Parameter
   */
  public function setEventName(Parameter $eventName)
  {
    $this->eventName = $eventName;
  }
  /**
   * @return Parameter
   */
  public function getEventName()
  {
    return $this->eventName;
  }
  /**
   * @param Condition[]
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return Condition[]
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * @param string
   */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /**
   * @return string
   */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /**
   * @param Parameter
   */
  public function setHorizontalScrollPercentageList(Parameter $horizontalScrollPercentageList)
  {
    $this->horizontalScrollPercentageList = $horizontalScrollPercentageList;
  }
  /**
   * @return Parameter
   */
  public function getHorizontalScrollPercentageList()
  {
    return $this->horizontalScrollPercentageList;
  }
  /**
   * @param Parameter
   */
  public function setInterval(Parameter $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return Parameter
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * @param Parameter
   */
  public function setIntervalSeconds(Parameter $intervalSeconds)
  {
    $this->intervalSeconds = $intervalSeconds;
  }
  /**
   * @return Parameter
   */
  public function getIntervalSeconds()
  {
    return $this->intervalSeconds;
  }
  /**
   * @param Parameter
   */
  public function setLimit(Parameter $limit)
  {
    $this->limit = $limit;
  }
  /**
   * @return Parameter
   */
  public function getLimit()
  {
    return $this->limit;
  }
  /**
   * @param Parameter
   */
  public function setMaxTimerLengthSeconds(Parameter $maxTimerLengthSeconds)
  {
    $this->maxTimerLengthSeconds = $maxTimerLengthSeconds;
  }
  /**
   * @return Parameter
   */
  public function getMaxTimerLengthSeconds()
  {
    return $this->maxTimerLengthSeconds;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /**
   * @return string
   */
  public function getNotes()
  {
    return $this->notes;
  }
  /**
   * @param Parameter[]
   */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /**
   * @return Parameter[]
   */
  public function getParameter()
  {
    return $this->parameter;
  }
  /**
   * @param string
   */
  public function setParentFolderId($parentFolderId)
  {
    $this->parentFolderId = $parentFolderId;
  }
  /**
   * @return string
   */
  public function getParentFolderId()
  {
    return $this->parentFolderId;
  }
  /**
   * @param string
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * @param Parameter
   */
  public function setSelector(Parameter $selector)
  {
    $this->selector = $selector;
  }
  /**
   * @return Parameter
   */
  public function getSelector()
  {
    return $this->selector;
  }
  /**
   * @param string
   */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /**
   * @return string
   */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
  /**
   * @param Parameter
   */
  public function setTotalTimeMinMilliseconds(Parameter $totalTimeMinMilliseconds)
  {
    $this->totalTimeMinMilliseconds = $totalTimeMinMilliseconds;
  }
  /**
   * @return Parameter
   */
  public function getTotalTimeMinMilliseconds()
  {
    return $this->totalTimeMinMilliseconds;
  }
  /**
   * @param string
   */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /**
   * @return string
   */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param Parameter
   */
  public function setUniqueTriggerId(Parameter $uniqueTriggerId)
  {
    $this->uniqueTriggerId = $uniqueTriggerId;
  }
  /**
   * @return Parameter
   */
  public function getUniqueTriggerId()
  {
    return $this->uniqueTriggerId;
  }
  /**
   * @param Parameter
   */
  public function setVerticalScrollPercentageList(Parameter $verticalScrollPercentageList)
  {
    $this->verticalScrollPercentageList = $verticalScrollPercentageList;
  }
  /**
   * @return Parameter
   */
  public function getVerticalScrollPercentageList()
  {
    return $this->verticalScrollPercentageList;
  }
  /**
   * @param Parameter
   */
  public function setVisibilitySelector(Parameter $visibilitySelector)
  {
    $this->visibilitySelector = $visibilitySelector;
  }
  /**
   * @return Parameter
   */
  public function getVisibilitySelector()
  {
    return $this->visibilitySelector;
  }
  /**
   * @param Parameter
   */
  public function setVisiblePercentageMax(Parameter $visiblePercentageMax)
  {
    $this->visiblePercentageMax = $visiblePercentageMax;
  }
  /**
   * @return Parameter
   */
  public function getVisiblePercentageMax()
  {
    return $this->visiblePercentageMax;
  }
  /**
   * @param Parameter
   */
  public function setVisiblePercentageMin(Parameter $visiblePercentageMin)
  {
    $this->visiblePercentageMin = $visiblePercentageMin;
  }
  /**
   * @return Parameter
   */
  public function getVisiblePercentageMin()
  {
    return $this->visiblePercentageMin;
  }
  /**
   * @param Parameter
   */
  public function setWaitForTags(Parameter $waitForTags)
  {
    $this->waitForTags = $waitForTags;
  }
  /**
   * @return Parameter
   */
  public function getWaitForTags()
  {
    return $this->waitForTags;
  }
  /**
   * @param Parameter
   */
  public function setWaitForTagsTimeout(Parameter $waitForTagsTimeout)
  {
    $this->waitForTagsTimeout = $waitForTagsTimeout;
  }
  /**
   * @return Parameter
   */
  public function getWaitForTagsTimeout()
  {
    return $this->waitForTagsTimeout;
  }
  /**
   * @param string
   */
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /**
   * @return string
   */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Trigger::class, 'Google_Service_TagManager_Trigger');
