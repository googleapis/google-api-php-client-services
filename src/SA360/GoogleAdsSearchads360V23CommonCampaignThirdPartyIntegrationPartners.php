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

class GoogleAdsSearchads360V23CommonCampaignThirdPartyIntegrationPartners extends \Google\Collection
{
  protected $collection_key = 'viewabilityIntegrationPartners';
  protected $brandLiftIntegrationPartnersType = GoogleAdsSearchads360V23CommonCampaignThirdPartyBrandLiftIntegrationPartner::class;
  protected $brandLiftIntegrationPartnersDataType = 'array';
  protected $brandSafetyIntegrationPartnersType = GoogleAdsSearchads360V23CommonCampaignThirdPartyBrandSafetyIntegrationPartner::class;
  protected $brandSafetyIntegrationPartnersDataType = 'array';
  protected $reachIntegrationPartnersType = GoogleAdsSearchads360V23CommonCampaignThirdPartyReachIntegrationPartner::class;
  protected $reachIntegrationPartnersDataType = 'array';
  protected $viewabilityIntegrationPartnersType = GoogleAdsSearchads360V23CommonCampaignThirdPartyViewabilityIntegrationPartner::class;
  protected $viewabilityIntegrationPartnersDataType = 'array';

  /**
   * Third party integration partners for Brand Lift verification for this
   * Campaign.
   *
   * @param GoogleAdsSearchads360V23CommonCampaignThirdPartyBrandLiftIntegrationPartner[] $brandLiftIntegrationPartners
   */
  public function setBrandLiftIntegrationPartners($brandLiftIntegrationPartners)
  {
    $this->brandLiftIntegrationPartners = $brandLiftIntegrationPartners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCampaignThirdPartyBrandLiftIntegrationPartner[]
   */
  public function getBrandLiftIntegrationPartners()
  {
    return $this->brandLiftIntegrationPartners;
  }
  /**
   * Third party integration partners for brand safety verification for this
   * Campaign.
   *
   * @param GoogleAdsSearchads360V23CommonCampaignThirdPartyBrandSafetyIntegrationPartner[] $brandSafetyIntegrationPartners
   */
  public function setBrandSafetyIntegrationPartners($brandSafetyIntegrationPartners)
  {
    $this->brandSafetyIntegrationPartners = $brandSafetyIntegrationPartners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCampaignThirdPartyBrandSafetyIntegrationPartner[]
   */
  public function getBrandSafetyIntegrationPartners()
  {
    return $this->brandSafetyIntegrationPartners;
  }
  /**
   * Third party integration partners for reach verification for this Campaign.
   *
   * @param GoogleAdsSearchads360V23CommonCampaignThirdPartyReachIntegrationPartner[] $reachIntegrationPartners
   */
  public function setReachIntegrationPartners($reachIntegrationPartners)
  {
    $this->reachIntegrationPartners = $reachIntegrationPartners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCampaignThirdPartyReachIntegrationPartner[]
   */
  public function getReachIntegrationPartners()
  {
    return $this->reachIntegrationPartners;
  }
  /**
   * Third party integration partners for YouTube viewability verification for
   * this Campaign.
   *
   * @param GoogleAdsSearchads360V23CommonCampaignThirdPartyViewabilityIntegrationPartner[] $viewabilityIntegrationPartners
   */
  public function setViewabilityIntegrationPartners($viewabilityIntegrationPartners)
  {
    $this->viewabilityIntegrationPartners = $viewabilityIntegrationPartners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCampaignThirdPartyViewabilityIntegrationPartner[]
   */
  public function getViewabilityIntegrationPartners()
  {
    return $this->viewabilityIntegrationPartners;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCampaignThirdPartyIntegrationPartners::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCampaignThirdPartyIntegrationPartners');
