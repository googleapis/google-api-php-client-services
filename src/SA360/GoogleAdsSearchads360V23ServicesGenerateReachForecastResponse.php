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

class GoogleAdsSearchads360V23ServicesGenerateReachForecastResponse extends \Google\Model
{
  protected $onTargetAudienceMetricsType = GoogleAdsSearchads360V23ServicesOnTargetAudienceMetrics::class;
  protected $onTargetAudienceMetricsDataType = '';
  protected $reachCurveType = GoogleAdsSearchads360V23ServicesReachCurve::class;
  protected $reachCurveDataType = '';

  /**
   * Reference on target audiences for this curve.
   *
   * @param GoogleAdsSearchads360V23ServicesOnTargetAudienceMetrics $onTargetAudienceMetrics
   */
  public function setOnTargetAudienceMetrics(GoogleAdsSearchads360V23ServicesOnTargetAudienceMetrics $onTargetAudienceMetrics)
  {
    $this->onTargetAudienceMetrics = $onTargetAudienceMetrics;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesOnTargetAudienceMetrics
   */
  public function getOnTargetAudienceMetrics()
  {
    return $this->onTargetAudienceMetrics;
  }
  /**
   * The generated reach curve for the planned product mix.
   *
   * @param GoogleAdsSearchads360V23ServicesReachCurve $reachCurve
   */
  public function setReachCurve(GoogleAdsSearchads360V23ServicesReachCurve $reachCurve)
  {
    $this->reachCurve = $reachCurve;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesReachCurve
   */
  public function getReachCurve()
  {
    return $this->reachCurve;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateReachForecastResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateReachForecastResponse');
