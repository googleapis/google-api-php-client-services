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

class GoogleAdsSearchads360V23ResourcesRecommendationImproveDemandGenAdStrengthRecommendation extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const AD_STRENGTH_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const AD_STRENGTH_UNKNOWN = 'UNKNOWN';
  /**
   * The ad strength is currently pending.
   */
  public const AD_STRENGTH_PENDING = 'PENDING';
  /**
   * No ads could be generated.
   */
  public const AD_STRENGTH_NO_ADS = 'NO_ADS';
  /**
   * Poor strength.
   */
  public const AD_STRENGTH_POOR = 'POOR';
  /**
   * Average strength.
   */
  public const AD_STRENGTH_AVERAGE = 'AVERAGE';
  /**
   * Good strength.
   */
  public const AD_STRENGTH_GOOD = 'GOOD';
  /**
   * Excellent strength.
   */
  public const AD_STRENGTH_EXCELLENT = 'EXCELLENT';
  protected $collection_key = 'demandGenAssetActionItems';
  /**
   * Output only. The resource name of the ad that can be improved.
   *
   * @var string
   */
  public $ad;
  /**
   * Output only. The current ad strength.
   *
   * @var string
   */
  public $adStrength;
  /**
   * Output only. A list of recommendations to improve the ad strength.
   *
   * @var string[]
   */
  public $demandGenAssetActionItems;

  /**
   * Output only. The resource name of the ad that can be improved.
   *
   * @param string $ad
   */
  public function setAd($ad)
  {
    $this->ad = $ad;
  }
  /**
   * @return string
   */
  public function getAd()
  {
    return $this->ad;
  }
  /**
   * Output only. The current ad strength.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, NO_ADS, POOR, AVERAGE,
   * GOOD, EXCELLENT
   *
   * @param self::AD_STRENGTH_* $adStrength
   */
  public function setAdStrength($adStrength)
  {
    $this->adStrength = $adStrength;
  }
  /**
   * @return self::AD_STRENGTH_*
   */
  public function getAdStrength()
  {
    return $this->adStrength;
  }
  /**
   * Output only. A list of recommendations to improve the ad strength.
   *
   * @param string[] $demandGenAssetActionItems
   */
  public function setDemandGenAssetActionItems($demandGenAssetActionItems)
  {
    $this->demandGenAssetActionItems = $demandGenAssetActionItems;
  }
  /**
   * @return string[]
   */
  public function getDemandGenAssetActionItems()
  {
    return $this->demandGenAssetActionItems;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationImproveDemandGenAdStrengthRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationImproveDemandGenAdStrengthRecommendation');
