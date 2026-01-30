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

namespace Google\Service\AndroidPublisher;

class OfferPhase extends \Google\Model
{
  protected $basePriceType = BasePriceOfferPhase::class;
  protected $basePriceDataType = '';
  protected $freeTrialType = FreeTrialOfferPhase::class;
  protected $freeTrialDataType = '';
  protected $introductoryPriceType = IntroductoryPriceOfferPhase::class;
  protected $introductoryPriceDataType = '';
  protected $prorationPeriodType = ProrationPeriodOfferPhase::class;
  protected $prorationPeriodDataType = '';

  /**
   * Set when the offer phase is a base plan pricing phase.
   *
   * @param BasePriceOfferPhase $basePrice
   */
  public function setBasePrice(BasePriceOfferPhase $basePrice)
  {
    $this->basePrice = $basePrice;
  }
  /**
   * @return BasePriceOfferPhase
   */
  public function getBasePrice()
  {
    return $this->basePrice;
  }
  /**
   * Set when the offer phase is a free trial.
   *
   * @param FreeTrialOfferPhase $freeTrial
   */
  public function setFreeTrial(FreeTrialOfferPhase $freeTrial)
  {
    $this->freeTrial = $freeTrial;
  }
  /**
   * @return FreeTrialOfferPhase
   */
  public function getFreeTrial()
  {
    return $this->freeTrial;
  }
  /**
   * Set when the offer phase is an introductory price offer phase.
   *
   * @param IntroductoryPriceOfferPhase $introductoryPrice
   */
  public function setIntroductoryPrice(IntroductoryPriceOfferPhase $introductoryPrice)
  {
    $this->introductoryPrice = $introductoryPrice;
  }
  /**
   * @return IntroductoryPriceOfferPhase
   */
  public function getIntroductoryPrice()
  {
    return $this->introductoryPrice;
  }
  /**
   * Set when the offer phase is a proration period.
   *
   * @param ProrationPeriodOfferPhase $prorationPeriod
   */
  public function setProrationPeriod(ProrationPeriodOfferPhase $prorationPeriod)
  {
    $this->prorationPeriod = $prorationPeriod;
  }
  /**
   * @return ProrationPeriodOfferPhase
   */
  public function getProrationPeriod()
  {
    return $this->prorationPeriod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OfferPhase::class, 'Google_Service_AndroidPublisher_OfferPhase');
