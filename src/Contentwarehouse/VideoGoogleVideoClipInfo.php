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

namespace Google\Service\Contentwarehouse;

class VideoGoogleVideoClipInfo extends \Google\Collection
{
  protected $collection_key = 'assetLoggingId';
  /**
   * @var string
   */
  public $aloudLoggingId;
  /**
   * @var string
   */
  public $appVersion;
  /**
   * @var string[]
   */
  public $assetLoggingId;
  /**
   * @var string
   */
  public $dubbingLoggingId;
  /**
   * @var string
   */
  public $productType;

  /**
   * @param string
   */
  public function setAloudLoggingId($aloudLoggingId)
  {
    $this->aloudLoggingId = $aloudLoggingId;
  }
  /**
   * @return string
   */
  public function getAloudLoggingId()
  {
    return $this->aloudLoggingId;
  }
  /**
   * @param string
   */
  public function setAppVersion($appVersion)
  {
    $this->appVersion = $appVersion;
  }
  /**
   * @return string
   */
  public function getAppVersion()
  {
    return $this->appVersion;
  }
  /**
   * @param string[]
   */
  public function setAssetLoggingId($assetLoggingId)
  {
    $this->assetLoggingId = $assetLoggingId;
  }
  /**
   * @return string[]
   */
  public function getAssetLoggingId()
  {
    return $this->assetLoggingId;
  }
  /**
   * @param string
   */
  public function setDubbingLoggingId($dubbingLoggingId)
  {
    $this->dubbingLoggingId = $dubbingLoggingId;
  }
  /**
   * @return string
   */
  public function getDubbingLoggingId()
  {
    return $this->dubbingLoggingId;
  }
  /**
   * @param string
   */
  public function setProductType($productType)
  {
    $this->productType = $productType;
  }
  /**
   * @return string
   */
  public function getProductType()
  {
    return $this->productType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VideoGoogleVideoClipInfo::class, 'Google_Service_Contentwarehouse_VideoGoogleVideoClipInfo');
