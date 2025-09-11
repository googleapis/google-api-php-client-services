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

namespace Google\Service\Dfareporting;

class Element extends \Google\Collection
{
  protected $collection_key = 'feedFields';
  /**
   * @var int
   */
  public $activeFieldId;
  protected $createInfoType = LastModifiedInfo::class;
  protected $createInfoDataType = '';
  /**
   * @var int
   */
  public $defaultFieldId;
  /**
   * @var string
   */
  public $elementName;
  /**
   * @var int
   */
  public $endTimestampFieldId;
  /**
   * @var int
   */
  public $externalIdFieldId;
  protected $feedFieldsType = FeedField::class;
  protected $feedFieldsDataType = 'array';
  /**
   * @var bool
   */
  public $isLocalTimestamp;
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  /**
   * @var int
   */
  public $proximityTargetingFieldId;
  /**
   * @var int
   */
  public $reportingLabelFieldId;
  /**
   * @var int
   */
  public $startTimestampFieldId;

  /**
   * @param int
   */
  public function setActiveFieldId($activeFieldId)
  {
    $this->activeFieldId = $activeFieldId;
  }
  /**
   * @return int
   */
  public function getActiveFieldId()
  {
    return $this->activeFieldId;
  }
  /**
   * @param LastModifiedInfo
   */
  public function setCreateInfo(LastModifiedInfo $createInfo)
  {
    $this->createInfo = $createInfo;
  }
  /**
   * @return LastModifiedInfo
   */
  public function getCreateInfo()
  {
    return $this->createInfo;
  }
  /**
   * @param int
   */
  public function setDefaultFieldId($defaultFieldId)
  {
    $this->defaultFieldId = $defaultFieldId;
  }
  /**
   * @return int
   */
  public function getDefaultFieldId()
  {
    return $this->defaultFieldId;
  }
  /**
   * @param string
   */
  public function setElementName($elementName)
  {
    $this->elementName = $elementName;
  }
  /**
   * @return string
   */
  public function getElementName()
  {
    return $this->elementName;
  }
  /**
   * @param int
   */
  public function setEndTimestampFieldId($endTimestampFieldId)
  {
    $this->endTimestampFieldId = $endTimestampFieldId;
  }
  /**
   * @return int
   */
  public function getEndTimestampFieldId()
  {
    return $this->endTimestampFieldId;
  }
  /**
   * @param int
   */
  public function setExternalIdFieldId($externalIdFieldId)
  {
    $this->externalIdFieldId = $externalIdFieldId;
  }
  /**
   * @return int
   */
  public function getExternalIdFieldId()
  {
    return $this->externalIdFieldId;
  }
  /**
   * @param FeedField[]
   */
  public function setFeedFields($feedFields)
  {
    $this->feedFields = $feedFields;
  }
  /**
   * @return FeedField[]
   */
  public function getFeedFields()
  {
    return $this->feedFields;
  }
  /**
   * @param bool
   */
  public function setIsLocalTimestamp($isLocalTimestamp)
  {
    $this->isLocalTimestamp = $isLocalTimestamp;
  }
  /**
   * @return bool
   */
  public function getIsLocalTimestamp()
  {
    return $this->isLocalTimestamp;
  }
  /**
   * @param LastModifiedInfo
   */
  public function setLastModifiedInfo(LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  /**
   * @return LastModifiedInfo
   */
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
  }
  /**
   * @param int
   */
  public function setProximityTargetingFieldId($proximityTargetingFieldId)
  {
    $this->proximityTargetingFieldId = $proximityTargetingFieldId;
  }
  /**
   * @return int
   */
  public function getProximityTargetingFieldId()
  {
    return $this->proximityTargetingFieldId;
  }
  /**
   * @param int
   */
  public function setReportingLabelFieldId($reportingLabelFieldId)
  {
    $this->reportingLabelFieldId = $reportingLabelFieldId;
  }
  /**
   * @return int
   */
  public function getReportingLabelFieldId()
  {
    return $this->reportingLabelFieldId;
  }
  /**
   * @param int
   */
  public function setStartTimestampFieldId($startTimestampFieldId)
  {
    $this->startTimestampFieldId = $startTimestampFieldId;
  }
  /**
   * @return int
   */
  public function getStartTimestampFieldId()
  {
    return $this->startTimestampFieldId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Element::class, 'Google_Service_Dfareporting_Element');
