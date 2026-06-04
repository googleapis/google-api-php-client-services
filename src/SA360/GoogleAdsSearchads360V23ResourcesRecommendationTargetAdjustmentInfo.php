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

class GoogleAdsSearchads360V23ResourcesRecommendationTargetAdjustmentInfo extends \Google\Model
{
  /**
   * Output only. The current average target of the campaign or portfolio
   * targeted by this recommendation.
   *
   * @var string
   */
  public $currentAverageTargetMicros;
  /**
   * Output only. The factor by which we recommend the target to be adjusted by.
   *
   * @var 
   */
  public $recommendedTargetMultiplier;
  /**
   * Output only. The shared set resource name of the portfolio bidding strategy
   * where the target is defined. Only populated if the recommendation is
   * portfolio level.
   *
   * @var string
   */
  public $sharedSet;

  /**
   * Output only. The current average target of the campaign or portfolio
   * targeted by this recommendation.
   *
   * @param string $currentAverageTargetMicros
   */
  public function setCurrentAverageTargetMicros($currentAverageTargetMicros)
  {
    $this->currentAverageTargetMicros = $currentAverageTargetMicros;
  }
  /**
   * @return string
   */
  public function getCurrentAverageTargetMicros()
  {
    return $this->currentAverageTargetMicros;
  }
  public function setRecommendedTargetMultiplier($recommendedTargetMultiplier)
  {
    $this->recommendedTargetMultiplier = $recommendedTargetMultiplier;
  }
  public function getRecommendedTargetMultiplier()
  {
    return $this->recommendedTargetMultiplier;
  }
  /**
   * Output only. The shared set resource name of the portfolio bidding strategy
   * where the target is defined. Only populated if the recommendation is
   * portfolio level.
   *
   * @param string $sharedSet
   */
  public function setSharedSet($sharedSet)
  {
    $this->sharedSet = $sharedSet;
  }
  /**
   * @return string
   */
  public function getSharedSet()
  {
    return $this->sharedSet;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationTargetAdjustmentInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationTargetAdjustmentInfo');
