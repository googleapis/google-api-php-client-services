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

class GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact extends \Google\Model
{
  protected $baseMetricsType = GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics::class;
  protected $baseMetricsDataType = '';
  protected $potentialMetricsType = GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics::class;
  protected $potentialMetricsDataType = '';

  /**
   * Output only. Base metrics at the time the recommendation was generated.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics $baseMetrics
   */
  public function setBaseMetrics(GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics $baseMetrics)
  {
    $this->baseMetrics = $baseMetrics;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics
   */
  public function getBaseMetrics()
  {
    return $this->baseMetrics;
  }
  /**
   * Output only. Estimated metrics if the recommendation is applied.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics $potentialMetrics
   */
  public function setPotentialMetrics(GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics $potentialMetrics)
  {
    $this->potentialMetrics = $potentialMetrics;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics
   */
  public function getPotentialMetrics()
  {
    return $this->potentialMetrics;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact');
