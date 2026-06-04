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

class GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaBidTooLowRecommendation extends \Google\Model
{
  /**
   * Output only. The current average target CPA of the campaign, in micros of
   * customer local currency.
   *
   * @var string
   */
  public $averageTargetCpaMicros;
  /**
   * Output only. A number greater than 1.0 indicating the factor by which we
   * recommend the target CPA should be increased.
   *
   * @var 
   */
  public $recommendedTargetMultiplier;

  /**
   * Output only. The current average target CPA of the campaign, in micros of
   * customer local currency.
   *
   * @param string $averageTargetCpaMicros
   */
  public function setAverageTargetCpaMicros($averageTargetCpaMicros)
  {
    $this->averageTargetCpaMicros = $averageTargetCpaMicros;
  }
  /**
   * @return string
   */
  public function getAverageTargetCpaMicros()
  {
    return $this->averageTargetCpaMicros;
  }
  public function setRecommendedTargetMultiplier($recommendedTargetMultiplier)
  {
    $this->recommendedTargetMultiplier = $recommendedTargetMultiplier;
  }
  public function getRecommendedTargetMultiplier()
  {
    return $this->recommendedTargetMultiplier;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaBidTooLowRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaBidTooLowRecommendation');
