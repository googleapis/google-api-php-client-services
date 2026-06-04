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

class GoogleAdsSearchads360V23ServicesIncentiveRequirementSpend extends \Google\Model
{
  protected $awardAmountType = GoogleTypeMoney::class;
  protected $awardAmountDataType = '';
  protected $requiredAmountType = GoogleTypeMoney::class;
  protected $requiredAmountDataType = '';

  /**
   * Required. Amount in free spend that user will be granted after spending
   * target amount. Denominated in the currency of the country passed in the get
   * request.
   *
   * @param GoogleTypeMoney $awardAmount
   */
  public function setAwardAmount(GoogleTypeMoney $awardAmount)
  {
    $this->awardAmount = $awardAmount;
  }
  /**
   * @return GoogleTypeMoney
   */
  public function getAwardAmount()
  {
    return $this->awardAmount;
  }
  /**
   * Required. Amount that user must spend to receive the award amount.
   * Denominated in the currency of the country passed in the get request.
   *
   * @param GoogleTypeMoney $requiredAmount
   */
  public function setRequiredAmount(GoogleTypeMoney $requiredAmount)
  {
    $this->requiredAmount = $requiredAmount;
  }
  /**
   * @return GoogleTypeMoney
   */
  public function getRequiredAmount()
  {
    return $this->requiredAmount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesIncentiveRequirementSpend::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesIncentiveRequirementSpend');
