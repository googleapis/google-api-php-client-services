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

class GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics extends \Google\Model
{
  /**
   * Output only. Number of ad clicks.
   *
   * @var 
   */
  public $clicks;
  /**
   * Output only. Number of conversions.
   *
   * @var 
   */
  public $conversions;
  /**
   * Output only. Sum of the conversion value of the conversions.
   *
   * @var 
   */
  public $conversionsValue;
  /**
   * Output only. Cost (in micros) for advertising, in the local currency for
   * the account.
   *
   * @var string
   */
  public $costMicros;
  /**
   * Output only. Number of ad impressions.
   *
   * @var 
   */
  public $impressions;
  /**
   * Output only. Number of video views for a video ad campaign.
   *
   * @var 
   */
  public $videoViews;

  public function setClicks($clicks)
  {
    $this->clicks = $clicks;
  }
  public function getClicks()
  {
    return $this->clicks;
  }
  public function setConversions($conversions)
  {
    $this->conversions = $conversions;
  }
  public function getConversions()
  {
    return $this->conversions;
  }
  public function setConversionsValue($conversionsValue)
  {
    $this->conversionsValue = $conversionsValue;
  }
  public function getConversionsValue()
  {
    return $this->conversionsValue;
  }
  /**
   * Output only. Cost (in micros) for advertising, in the local currency for
   * the account.
   *
   * @param string $costMicros
   */
  public function setCostMicros($costMicros)
  {
    $this->costMicros = $costMicros;
  }
  /**
   * @return string
   */
  public function getCostMicros()
  {
    return $this->costMicros;
  }
  public function setImpressions($impressions)
  {
    $this->impressions = $impressions;
  }
  public function getImpressions()
  {
    return $this->impressions;
  }
  public function setVideoViews($videoViews)
  {
    $this->videoViews = $videoViews;
  }
  public function getVideoViews()
  {
    return $this->videoViews;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationRecommendationMetrics');
