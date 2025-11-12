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

namespace Google\Service\PaymentsResellerSubscription;

class SubscriptionPromotionSpec extends \Google\Model
{
  protected $freeTrialDurationType = Duration::class;
  protected $freeTrialDurationDataType = '';
  protected $introductoryPricingDetailsType = PromotionIntroductoryPricingDetails::class;
  protected $introductoryPricingDetailsDataType = '';
  /**
   * @var string
   */
  public $promotion;
  /**
   * @var string
   */
  public $type;

  /**
   * @param Duration
   */
  public function setFreeTrialDuration(Duration $freeTrialDuration)
  {
    $this->freeTrialDuration = $freeTrialDuration;
  }
  /**
   * @return Duration
   */
  public function getFreeTrialDuration()
  {
    return $this->freeTrialDuration;
  }
  /**
   * @param PromotionIntroductoryPricingDetails
   */
  public function setIntroductoryPricingDetails(PromotionIntroductoryPricingDetails $introductoryPricingDetails)
  {
    $this->introductoryPricingDetails = $introductoryPricingDetails;
  }
  /**
   * @return PromotionIntroductoryPricingDetails
   */
  public function getIntroductoryPricingDetails()
  {
    return $this->introductoryPricingDetails;
  }
  /**
   * @param string
   */
  public function setPromotion($promotion)
  {
    $this->promotion = $promotion;
  }
  /**
   * @return string
   */
  public function getPromotion()
  {
    return $this->promotion;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SubscriptionPromotionSpec::class, 'Google_Service_PaymentsResellerSubscription_SubscriptionPromotionSpec');
