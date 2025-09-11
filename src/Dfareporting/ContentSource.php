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

class ContentSource extends \Google\Model
{
  /**
   * @var string
   */
  public $contentSourceName;
  protected $createInfoType = LastModifiedInfo::class;
  protected $createInfoDataType = '';
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  protected $metaDataType = ContentSourceMetaData::class;
  protected $metaDataDataType = '';
  /**
   * @var string
   */
  public $resourceLink;
  /**
   * @var string
   */
  public $resourceType;

  /**
   * @param string
   */
  public function setContentSourceName($contentSourceName)
  {
    $this->contentSourceName = $contentSourceName;
  }
  /**
   * @return string
   */
  public function getContentSourceName()
  {
    return $this->contentSourceName;
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
   * @param ContentSourceMetaData
   */
  public function setMetaData(ContentSourceMetaData $metaData)
  {
    $this->metaData = $metaData;
  }
  /**
   * @return ContentSourceMetaData
   */
  public function getMetaData()
  {
    return $this->metaData;
  }
  /**
   * @param string
   */
  public function setResourceLink($resourceLink)
  {
    $this->resourceLink = $resourceLink;
  }
  /**
   * @return string
   */
  public function getResourceLink()
  {
    return $this->resourceLink;
  }
  /**
   * @param string
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContentSource::class, 'Google_Service_Dfareporting_ContentSource');
