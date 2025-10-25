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

namespace Google\Service\DisplayVideo;

class AdAsset extends \Google\Model
{
  /**
   * @var string
   */
  public $adAssetId;
  /**
   * @var string
   */
  public $adAssetType;
  /**
   * @var string
   */
  public $entityStatus;
  /**
   * @var string
   */
  public $name;
  protected $youtubeVideoAssetType = YoutubeVideoAsset::class;
  protected $youtubeVideoAssetDataType = '';

  /**
   * @param string
   */
  public function setAdAssetId($adAssetId)
  {
    $this->adAssetId = $adAssetId;
  }
  /**
   * @return string
   */
  public function getAdAssetId()
  {
    return $this->adAssetId;
  }
  /**
   * @param string
   */
  public function setAdAssetType($adAssetType)
  {
    $this->adAssetType = $adAssetType;
  }
  /**
   * @return string
   */
  public function getAdAssetType()
  {
    return $this->adAssetType;
  }
  /**
   * @param string
   */
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /**
   * @return string
   */
  public function getEntityStatus()
  {
    return $this->entityStatus;
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
   * @param YoutubeVideoAsset
   */
  public function setYoutubeVideoAsset(YoutubeVideoAsset $youtubeVideoAsset)
  {
    $this->youtubeVideoAsset = $youtubeVideoAsset;
  }
  /**
   * @return YoutubeVideoAsset
   */
  public function getYoutubeVideoAsset()
  {
    return $this->youtubeVideoAsset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdAsset::class, 'Google_Service_DisplayVideo_AdAsset');
