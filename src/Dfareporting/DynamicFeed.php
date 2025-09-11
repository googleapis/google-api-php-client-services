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

class DynamicFeed extends \Google\Model
{
  protected $contentSourceType = ContentSource::class;
  protected $contentSourceDataType = '';
  protected $createInfoType = LastModifiedInfo::class;
  protected $createInfoDataType = '';
  /**
   * @var string
   */
  public $dynamicFeedId;
  /**
   * @var string
   */
  public $dynamicFeedName;
  protected $elementType = Element::class;
  protected $elementDataType = '';
  protected $feedIngestionStatusType = FeedIngestionStatus::class;
  protected $feedIngestionStatusDataType = '';
  protected $feedScheduleType = FeedSchedule::class;
  protected $feedScheduleDataType = '';
  /**
   * @var bool
   */
  public $hasPublished;
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  /**
   * @var string
   */
  public $status;
  /**
   * @var string
   */
  public $studioAdvertiserId;

  /**
   * @param ContentSource
   */
  public function setContentSource(ContentSource $contentSource)
  {
    $this->contentSource = $contentSource;
  }
  /**
   * @return ContentSource
   */
  public function getContentSource()
  {
    return $this->contentSource;
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
   * @param string
   */
  public function setDynamicFeedId($dynamicFeedId)
  {
    $this->dynamicFeedId = $dynamicFeedId;
  }
  /**
   * @return string
   */
  public function getDynamicFeedId()
  {
    return $this->dynamicFeedId;
  }
  /**
   * @param string
   */
  public function setDynamicFeedName($dynamicFeedName)
  {
    $this->dynamicFeedName = $dynamicFeedName;
  }
  /**
   * @return string
   */
  public function getDynamicFeedName()
  {
    return $this->dynamicFeedName;
  }
  /**
   * @param Element
   */
  public function setElement(Element $element)
  {
    $this->element = $element;
  }
  /**
   * @return Element
   */
  public function getElement()
  {
    return $this->element;
  }
  /**
   * @param FeedIngestionStatus
   */
  public function setFeedIngestionStatus(FeedIngestionStatus $feedIngestionStatus)
  {
    $this->feedIngestionStatus = $feedIngestionStatus;
  }
  /**
   * @return FeedIngestionStatus
   */
  public function getFeedIngestionStatus()
  {
    return $this->feedIngestionStatus;
  }
  /**
   * @param FeedSchedule
   */
  public function setFeedSchedule(FeedSchedule $feedSchedule)
  {
    $this->feedSchedule = $feedSchedule;
  }
  /**
   * @return FeedSchedule
   */
  public function getFeedSchedule()
  {
    return $this->feedSchedule;
  }
  /**
   * @param bool
   */
  public function setHasPublished($hasPublished)
  {
    $this->hasPublished = $hasPublished;
  }
  /**
   * @return bool
   */
  public function getHasPublished()
  {
    return $this->hasPublished;
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
   * @param string
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * @param string
   */
  public function setStudioAdvertiserId($studioAdvertiserId)
  {
    $this->studioAdvertiserId = $studioAdvertiserId;
  }
  /**
   * @return string
   */
  public function getStudioAdvertiserId()
  {
    return $this->studioAdvertiserId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DynamicFeed::class, 'Google_Service_Dfareporting_DynamicFeed');
