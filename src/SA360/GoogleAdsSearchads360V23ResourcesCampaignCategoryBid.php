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

class GoogleAdsSearchads360V23ResourcesCampaignCategoryBid extends \Google\Model
{
  /**
   * Category for which the bid will be associated with. For example,
   * xcat:service_area_business_plumber.
   *
   * @var string
   */
  public $categoryId;
  /**
   * Manual CPA bid for the category. Bid must be greater than the reserve price
   * associated for that category. Value is in micros and in the advertiser's
   * currency.
   *
   * @var string
   */
  public $manualCpaBidMicros;
  /**
   * Target CPA bid for the category. Value is in micros and in the advertiser's
   * currency.
   *
   * @var string
   */
  public $targetCpaBidMicros;

  /**
   * Category for which the bid will be associated with. For example,
   * xcat:service_area_business_plumber.
   *
   * @param string $categoryId
   */
  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  /**
   * @return string
   */
  public function getCategoryId()
  {
    return $this->categoryId;
  }
  /**
   * Manual CPA bid for the category. Bid must be greater than the reserve price
   * associated for that category. Value is in micros and in the advertiser's
   * currency.
   *
   * @param string $manualCpaBidMicros
   */
  public function setManualCpaBidMicros($manualCpaBidMicros)
  {
    $this->manualCpaBidMicros = $manualCpaBidMicros;
  }
  /**
   * @return string
   */
  public function getManualCpaBidMicros()
  {
    return $this->manualCpaBidMicros;
  }
  /**
   * Target CPA bid for the category. Value is in micros and in the advertiser's
   * currency.
   *
   * @param string $targetCpaBidMicros
   */
  public function setTargetCpaBidMicros($targetCpaBidMicros)
  {
    $this->targetCpaBidMicros = $targetCpaBidMicros;
  }
  /**
   * @return string
   */
  public function getTargetCpaBidMicros()
  {
    return $this->targetCpaBidMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignCategoryBid::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignCategoryBid');
