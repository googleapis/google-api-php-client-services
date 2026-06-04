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

class GoogleAdsSearchads360V23CommonAdVideoAssetInfo extends \Google\Model
{
  protected $adVideoAssetFeatureControlType = GoogleAdsSearchads360V23CommonAdVideoAssetLinkFeatureControl::class;
  protected $adVideoAssetFeatureControlDataType = '';

  /**
   * Defines feature controls for this AdVideoAsset during serving time. For
   * example, whether YouTube comments should be enabled for Partnership Ads
   * served on YouTube Shorts.
   *
   * @param GoogleAdsSearchads360V23CommonAdVideoAssetLinkFeatureControl $adVideoAssetFeatureControl
   */
  public function setAdVideoAssetFeatureControl(GoogleAdsSearchads360V23CommonAdVideoAssetLinkFeatureControl $adVideoAssetFeatureControl)
  {
    $this->adVideoAssetFeatureControl = $adVideoAssetFeatureControl;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdVideoAssetLinkFeatureControl
   */
  public function getAdVideoAssetFeatureControl()
  {
    return $this->adVideoAssetFeatureControl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAdVideoAssetInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAdVideoAssetInfo');
