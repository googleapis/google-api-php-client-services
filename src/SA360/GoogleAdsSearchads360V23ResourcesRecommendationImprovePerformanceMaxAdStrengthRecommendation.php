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

class GoogleAdsSearchads360V23ResourcesRecommendationImprovePerformanceMaxAdStrengthRecommendation extends \Google\Model
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
  /**
   * Output only. The current ad strength score of the asset group.
   *
   * @var string
   */
  public $adStrength;
  /**
   * Output only. The asset group resource name.
   *
   * @var string
   */
  public $assetGroup;

  /**
   * Output only. The current ad strength score of the asset group.
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
   * Output only. The asset group resource name.
   *
   * @param string $assetGroup
   */
  public function setAssetGroup($assetGroup)
  {
    $this->assetGroup = $assetGroup;
  }
  /**
   * @return string
   */
  public function getAssetGroup()
  {
    return $this->assetGroup;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationImprovePerformanceMaxAdStrengthRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationImprovePerformanceMaxAdStrengthRecommendation');
