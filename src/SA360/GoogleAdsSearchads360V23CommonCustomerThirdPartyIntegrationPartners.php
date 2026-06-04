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

class GoogleAdsSearchads360V23CommonCustomerThirdPartyIntegrationPartners extends \Google\Collection
{
  protected $collection_key = 'viewabilityIntegrationPartners';
  protected $brandLiftIntegrationPartnersType = GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandLiftIntegrationPartner::class;
  protected $brandLiftIntegrationPartnersDataType = 'array';
  protected $brandSafetyIntegrationPartnersType = GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandSafetyIntegrationPartner::class;
  protected $brandSafetyIntegrationPartnersDataType = 'array';
  protected $reachIntegrationPartnersType = GoogleAdsSearchads360V23CommonCustomerThirdPartyReachIntegrationPartner::class;
  protected $reachIntegrationPartnersDataType = 'array';
  protected $viewabilityIntegrationPartnersType = GoogleAdsSearchads360V23CommonCustomerThirdPartyViewabilityIntegrationPartner::class;
  protected $viewabilityIntegrationPartnersDataType = 'array';

  /**
   * Allowed third party integration partners for Brand Lift verification.
   *
   * @param GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandLiftIntegrationPartner[] $brandLiftIntegrationPartners
   */
  public function setBrandLiftIntegrationPartners($brandLiftIntegrationPartners)
  {
    $this->brandLiftIntegrationPartners = $brandLiftIntegrationPartners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandLiftIntegrationPartner[]
   */
  public function getBrandLiftIntegrationPartners()
  {
    return $this->brandLiftIntegrationPartners;
  }
  /**
   * Allowed third party integration partners for brand safety verification.
   *
   * @param GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandSafetyIntegrationPartner[] $brandSafetyIntegrationPartners
   */
  public function setBrandSafetyIntegrationPartners($brandSafetyIntegrationPartners)
  {
    $this->brandSafetyIntegrationPartners = $brandSafetyIntegrationPartners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandSafetyIntegrationPartner[]
   */
  public function getBrandSafetyIntegrationPartners()
  {
    return $this->brandSafetyIntegrationPartners;
  }
  /**
   * Allowed third party integration partners for reach verification.
   *
   * @param GoogleAdsSearchads360V23CommonCustomerThirdPartyReachIntegrationPartner[] $reachIntegrationPartners
   */
  public function setReachIntegrationPartners($reachIntegrationPartners)
  {
    $this->reachIntegrationPartners = $reachIntegrationPartners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomerThirdPartyReachIntegrationPartner[]
   */
  public function getReachIntegrationPartners()
  {
    return $this->reachIntegrationPartners;
  }
  /**
   * Allowed third party integration partners for YouTube viewability
   * verification.
   *
   * @param GoogleAdsSearchads360V23CommonCustomerThirdPartyViewabilityIntegrationPartner[] $viewabilityIntegrationPartners
   */
  public function setViewabilityIntegrationPartners($viewabilityIntegrationPartners)
  {
    $this->viewabilityIntegrationPartners = $viewabilityIntegrationPartners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomerThirdPartyViewabilityIntegrationPartner[]
   */
  public function getViewabilityIntegrationPartners()
  {
    return $this->viewabilityIntegrationPartners;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCustomerThirdPartyIntegrationPartners::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCustomerThirdPartyIntegrationPartners');
