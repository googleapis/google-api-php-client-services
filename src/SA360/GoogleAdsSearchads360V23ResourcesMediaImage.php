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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesMediaImage extends \Google\Model
{
  /**
   * Immutable. Raw image data.
   *
   * @var string
   */
  public $data;
  /**
   * Output only. The url to the full size version of the image.
   *
   * @var string
   */
  public $fullSizeImageUrl;
  /**
   * Output only. The url to the preview size version of the image.
   *
   * @var string
   */
  public $previewSizeImageUrl;

  /**
   * Immutable. Raw image data.
   *
   * @param string $data
   */
  public function setData($data)
  {
    $this->data = $data;
  }
  /**
   * @return string
   */
  public function getData()
  {
    return $this->data;
  }
  /**
   * Output only. The url to the full size version of the image.
   *
   * @param string $fullSizeImageUrl
   */
  public function setFullSizeImageUrl($fullSizeImageUrl)
  {
    $this->fullSizeImageUrl = $fullSizeImageUrl;
  }
  /**
   * @return string
   */
  public function getFullSizeImageUrl()
  {
    return $this->fullSizeImageUrl;
  }
  /**
   * Output only. The url to the preview size version of the image.
   *
   * @param string $previewSizeImageUrl
   */
  public function setPreviewSizeImageUrl($previewSizeImageUrl)
  {
    $this->previewSizeImageUrl = $previewSizeImageUrl;
  }
  /**
   * @return string
   */
  public function getPreviewSizeImageUrl()
  {
    return $this->previewSizeImageUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesMediaImage::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesMediaImage');
