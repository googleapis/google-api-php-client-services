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

class GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudget extends \Google\Model
{
  /**
   * Output only. Current budget amount.
   *
   * @var string
   */
  public $currentAmountMicros;
  /**
   * Output only. The date when the new budget would start being used. This
   * field will be set for the following recommendation types:
   * FORECASTING_SET_TARGET_ROAS YYYY-MM-DD format, for example, 2018-04-17.
   *
   * @var string
   */
  public $newStartDate;
  /**
   * Output only. Recommended budget amount.
   *
   * @var string
   */
  public $recommendedNewAmountMicros;

  /**
   * Output only. Current budget amount.
   *
   * @param string $currentAmountMicros
   */
  public function setCurrentAmountMicros($currentAmountMicros)
  {
    $this->currentAmountMicros = $currentAmountMicros;
  }
  /**
   * @return string
   */
  public function getCurrentAmountMicros()
  {
    return $this->currentAmountMicros;
  }
  /**
   * Output only. The date when the new budget would start being used. This
   * field will be set for the following recommendation types:
   * FORECASTING_SET_TARGET_ROAS YYYY-MM-DD format, for example, 2018-04-17.
   *
   * @param string $newStartDate
   */
  public function setNewStartDate($newStartDate)
  {
    $this->newStartDate = $newStartDate;
  }
  /**
   * @return string
   */
  public function getNewStartDate()
  {
    return $this->newStartDate;
  }
  /**
   * Output only. Recommended budget amount.
   *
   * @param string $recommendedNewAmountMicros
   */
  public function setRecommendedNewAmountMicros($recommendedNewAmountMicros)
  {
    $this->recommendedNewAmountMicros = $recommendedNewAmountMicros;
  }
  /**
   * @return string
   */
  public function getRecommendedNewAmountMicros()
  {
    return $this->recommendedNewAmountMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudget::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudget');
