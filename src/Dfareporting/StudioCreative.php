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

class StudioCreative extends \Google\Collection
{
  protected $collection_key = 'assetIds';
  /**
   * @var string[]
   */
  public $assetIds;
  /**
   * @var string
   */
  public $backupImageAssetId;
  protected $createdInfoType = LastModifiedInfo::class;
  protected $createdInfoDataType = '';
  protected $dimensionType = StudioCreativeDimension::class;
  protected $dimensionDataType = '';
  /**
   * @var string
   */
  public $dynamicProfileId;
  /**
   * @var string
   */
  public $format;
  /**
   * @var string
   */
  public $id;
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
  public $studioAccountId;
  /**
   * @var string
   */
  public $studioAdvertiserId;
  /**
   * @var string
   */
  public $studioCampaignId;

  /**
   * @param string[]
   */
  public function setAssetIds($assetIds)
  {
    $this->assetIds = $assetIds;
  }
  /**
   * @return string[]
   */
  public function getAssetIds()
  {
    return $this->assetIds;
  }
  /**
   * @param string
   */
  public function setBackupImageAssetId($backupImageAssetId)
  {
    $this->backupImageAssetId = $backupImageAssetId;
  }
  /**
   * @return string
   */
  public function getBackupImageAssetId()
  {
    return $this->backupImageAssetId;
  }
  /**
   * @param LastModifiedInfo
   */
  public function setCreatedInfo(LastModifiedInfo $createdInfo)
  {
    $this->createdInfo = $createdInfo;
  }
  /**
   * @return LastModifiedInfo
   */
  public function getCreatedInfo()
  {
    return $this->createdInfo;
  }
  /**
   * @param StudioCreativeDimension
   */
  public function setDimension(StudioCreativeDimension $dimension)
  {
    $this->dimension = $dimension;
  }
  /**
   * @return StudioCreativeDimension
   */
  public function getDimension()
  {
    return $this->dimension;
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
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /**
   * @return string
   */
  public function getFormat()
  {
    return $this->format;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
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
  public function setStudioAccountId($studioAccountId)
  {
    $this->studioAccountId = $studioAccountId;
  }
  /**
   * @return string
   */
  public function getStudioAccountId()
  {
    return $this->studioAccountId;
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
  /**
   * @param string
   */
  public function setStudioCampaignId($studioCampaignId)
  {
    $this->studioCampaignId = $studioCampaignId;
  }
  /**
   * @return string
   */
  public function getStudioCampaignId()
  {
    return $this->studioCampaignId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StudioCreative::class, 'Google_Service_Dfareporting_StudioCreative');
