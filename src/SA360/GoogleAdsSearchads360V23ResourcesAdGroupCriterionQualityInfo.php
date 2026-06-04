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

class GoogleAdsSearchads360V23ResourcesAdGroupCriterionQualityInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CREATIVE_QUALITY_SCORE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CREATIVE_QUALITY_SCORE_UNKNOWN = 'UNKNOWN';
  /**
   * Quality of the creative is below average.
   */
  public const CREATIVE_QUALITY_SCORE_BELOW_AVERAGE = 'BELOW_AVERAGE';
  /**
   * Quality of the creative is average.
   */
  public const CREATIVE_QUALITY_SCORE_AVERAGE = 'AVERAGE';
  /**
   * Quality of the creative is above average.
   */
  public const CREATIVE_QUALITY_SCORE_ABOVE_AVERAGE = 'ABOVE_AVERAGE';
  /**
   * Not specified.
   */
  public const POST_CLICK_QUALITY_SCORE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const POST_CLICK_QUALITY_SCORE_UNKNOWN = 'UNKNOWN';
  /**
   * Quality of the creative is below average.
   */
  public const POST_CLICK_QUALITY_SCORE_BELOW_AVERAGE = 'BELOW_AVERAGE';
  /**
   * Quality of the creative is average.
   */
  public const POST_CLICK_QUALITY_SCORE_AVERAGE = 'AVERAGE';
  /**
   * Quality of the creative is above average.
   */
  public const POST_CLICK_QUALITY_SCORE_ABOVE_AVERAGE = 'ABOVE_AVERAGE';
  /**
   * Not specified.
   */
  public const SEARCH_PREDICTED_CTR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SEARCH_PREDICTED_CTR_UNKNOWN = 'UNKNOWN';
  /**
   * Quality of the creative is below average.
   */
  public const SEARCH_PREDICTED_CTR_BELOW_AVERAGE = 'BELOW_AVERAGE';
  /**
   * Quality of the creative is average.
   */
  public const SEARCH_PREDICTED_CTR_AVERAGE = 'AVERAGE';
  /**
   * Quality of the creative is above average.
   */
  public const SEARCH_PREDICTED_CTR_ABOVE_AVERAGE = 'ABOVE_AVERAGE';
  /**
   * Output only. The performance of the ad compared to other advertisers.
   *
   * @var string
   */
  public $creativeQualityScore;
  /**
   * Output only. The quality score of the landing page.
   *
   * @var string
   */
  public $postClickQualityScore;
  /**
   * Output only. The quality score. This field may not be populated if Google
   * does not have enough information to determine a value.
   *
   * @var int
   */
  public $qualityScore;
  /**
   * Output only. The click-through rate compared to that of other advertisers.
   *
   * @var string
   */
  public $searchPredictedCtr;

  /**
   * Output only. The performance of the ad compared to other advertisers.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BELOW_AVERAGE, AVERAGE,
   * ABOVE_AVERAGE
   *
   * @param self::CREATIVE_QUALITY_SCORE_* $creativeQualityScore
   */
  public function setCreativeQualityScore($creativeQualityScore)
  {
    $this->creativeQualityScore = $creativeQualityScore;
  }
  /**
   * @return self::CREATIVE_QUALITY_SCORE_*
   */
  public function getCreativeQualityScore()
  {
    return $this->creativeQualityScore;
  }
  /**
   * Output only. The quality score of the landing page.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BELOW_AVERAGE, AVERAGE,
   * ABOVE_AVERAGE
   *
   * @param self::POST_CLICK_QUALITY_SCORE_* $postClickQualityScore
   */
  public function setPostClickQualityScore($postClickQualityScore)
  {
    $this->postClickQualityScore = $postClickQualityScore;
  }
  /**
   * @return self::POST_CLICK_QUALITY_SCORE_*
   */
  public function getPostClickQualityScore()
  {
    return $this->postClickQualityScore;
  }
  /**
   * Output only. The quality score. This field may not be populated if Google
   * does not have enough information to determine a value.
   *
   * @param int $qualityScore
   */
  public function setQualityScore($qualityScore)
  {
    $this->qualityScore = $qualityScore;
  }
  /**
   * @return int
   */
  public function getQualityScore()
  {
    return $this->qualityScore;
  }
  /**
   * Output only. The click-through rate compared to that of other advertisers.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BELOW_AVERAGE, AVERAGE,
   * ABOVE_AVERAGE
   *
   * @param self::SEARCH_PREDICTED_CTR_* $searchPredictedCtr
   */
  public function setSearchPredictedCtr($searchPredictedCtr)
  {
    $this->searchPredictedCtr = $searchPredictedCtr;
  }
  /**
   * @return self::SEARCH_PREDICTED_CTR_*
   */
  public function getSearchPredictedCtr()
  {
    return $this->searchPredictedCtr;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupCriterionQualityInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupCriterionQualityInfo');
