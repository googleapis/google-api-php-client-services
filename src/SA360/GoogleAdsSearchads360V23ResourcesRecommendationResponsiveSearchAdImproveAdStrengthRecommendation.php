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

class GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdImproveAdStrengthRecommendation extends \Google\Model
{
  protected $currentAdType = GoogleAdsSearchads360V23ResourcesAd::class;
  protected $currentAdDataType = '';
  protected $recommendedAdType = GoogleAdsSearchads360V23ResourcesAd::class;
  protected $recommendedAdDataType = '';

  /**
   * Output only. The current ad to be updated.
   *
   * @param GoogleAdsSearchads360V23ResourcesAd $currentAd
   */
  public function setCurrentAd(GoogleAdsSearchads360V23ResourcesAd $currentAd)
  {
    $this->currentAd = $currentAd;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAd
   */
  public function getCurrentAd()
  {
    return $this->currentAd;
  }
  /**
   * Output only. The updated ad.
   *
   * @param GoogleAdsSearchads360V23ResourcesAd $recommendedAd
   */
  public function setRecommendedAd(GoogleAdsSearchads360V23ResourcesAd $recommendedAd)
  {
    $this->recommendedAd = $recommendedAd;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAd
   */
  public function getRecommendedAd()
  {
    return $this->recommendedAd;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdImproveAdStrengthRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdImproveAdStrengthRecommendation');
