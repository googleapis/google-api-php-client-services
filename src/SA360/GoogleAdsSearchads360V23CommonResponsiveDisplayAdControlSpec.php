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

class GoogleAdsSearchads360V23CommonResponsiveDisplayAdControlSpec extends \Google\Model
{
  /**
   * Whether the advertiser has opted into the asset enhancements feature.
   *
   * @var bool
   */
  public $enableAssetEnhancements;
  /**
   * Whether the advertiser has opted into auto-gen video feature.
   *
   * @var bool
   */
  public $enableAutogenVideo;

  /**
   * Whether the advertiser has opted into the asset enhancements feature.
   *
   * @param bool $enableAssetEnhancements
   */
  public function setEnableAssetEnhancements($enableAssetEnhancements)
  {
    $this->enableAssetEnhancements = $enableAssetEnhancements;
  }
  /**
   * @return bool
   */
  public function getEnableAssetEnhancements()
  {
    return $this->enableAssetEnhancements;
  }
  /**
   * Whether the advertiser has opted into auto-gen video feature.
   *
   * @param bool $enableAutogenVideo
   */
  public function setEnableAutogenVideo($enableAutogenVideo)
  {
    $this->enableAutogenVideo = $enableAutogenVideo;
  }
  /**
   * @return bool
   */
  public function getEnableAutogenVideo()
  {
    return $this->enableAutogenVideo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonResponsiveDisplayAdControlSpec::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonResponsiveDisplayAdControlSpec');
