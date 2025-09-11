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

class DynamicProfile extends \Google\Model
{
  protected $activeType = DynamicProfileVersion::class;
  protected $activeDataType = '';
  /**
   * @var string
   */
  public $archiveStatus;
  protected $createInfoType = LastModifiedInfo::class;
  protected $createInfoDataType = '';
  /**
   * @var string
   */
  public $description;
  protected $draftType = DynamicProfileVersion::class;
  protected $draftDataType = '';
  /**
   * @var string
   */
  public $dynamicProfileId;
  /**
   * @var string
   */
  public $kind;
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $status;
  /**
   * @var string
   */
  public $studioAdvertiserId;

  /**
   * @param DynamicProfileVersion
   */
  public function setActive(DynamicProfileVersion $active)
  {
    $this->active = $active;
  }
  /**
   * @return DynamicProfileVersion
   */
  public function getActive()
  {
    return $this->active;
  }
  /**
   * @param string
   */
  public function setArchiveStatus($archiveStatus)
  {
    $this->archiveStatus = $archiveStatus;
  }
  /**
   * @return string
   */
  public function getArchiveStatus()
  {
    return $this->archiveStatus;
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param DynamicProfileVersion
   */
  public function setDraft(DynamicProfileVersion $draft)
  {
    $this->draft = $draft;
  }
  /**
   * @return DynamicProfileVersion
   */
  public function getDraft()
  {
    return $this->draft;
  }
  /**
   * @param string
   */
  public function setDynamicProfileId($dynamicProfileId)
  {
    $this->dynamicProfileId = $dynamicProfileId;
  }
  /**
   * @return string
   */
  public function getDynamicProfileId()
  {
    return $this->dynamicProfileId;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
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
class_alias(DynamicProfile::class, 'Google_Service_Dfareporting_DynamicProfile');
