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

class StudioCreativeAsset extends \Google\Model
{
  protected $createInfoType = LastModifiedInfo::class;
  protected $createInfoDataType = '';
  /**
   * @var string
   */
  public $filename;
  /**
   * @var string
   */
  public $filesize;
  /**
   * @var string
   */
  public $id;
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
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
  public $studioCreativeId;
  /**
   * @var string
   */
  public $type;
  protected $videoProcessingDataType = VideoProcessingData::class;
  protected $videoProcessingDataDataType = '';

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
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /**
   * @return string
   */
  public function getFilename()
  {
    return $this->filename;
  }
  /**
   * @param string
   */
  public function setFilesize($filesize)
  {
    $this->filesize = $filesize;
  }
  /**
   * @return string
   */
  public function getFilesize()
  {
    return $this->filesize;
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
  public function setStudioCreativeId($studioCreativeId)
  {
    $this->studioCreativeId = $studioCreativeId;
  }
  /**
   * @return string
   */
  public function getStudioCreativeId()
  {
    return $this->studioCreativeId;
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
   * @param VideoProcessingData
   */
  public function setVideoProcessingData(VideoProcessingData $videoProcessingData)
  {
    $this->videoProcessingData = $videoProcessingData;
  }
  /**
   * @return VideoProcessingData
   */
  public function getVideoProcessingData()
  {
    return $this->videoProcessingData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StudioCreativeAsset::class, 'Google_Service_Dfareporting_StudioCreativeAsset');
