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

class GoogleAdsSearchads360V23CommonCampaignThirdPartyViewabilityIntegrationPartner extends \Google\Model
{
  /**
   * Not specified.
   */
  public const VIEWABILITY_INTEGRATION_PARTNER_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const VIEWABILITY_INTEGRATION_PARTNER_UNKNOWN = 'UNKNOWN';
  /**
   * DoubleVerify.
   */
  public const VIEWABILITY_INTEGRATION_PARTNER_DOUBLE_VERIFY = 'DOUBLE_VERIFY';
  /**
   * Integral Ad Science.
   */
  public const VIEWABILITY_INTEGRATION_PARTNER_INTEGRAL_AD_SCIENCE = 'INTEGRAL_AD_SCIENCE';
  /**
   * If true, then cost data will be shared with this vendor.
   *
   * @var bool
   */
  public $shareCost;
  /**
   * Allowed third party integration partners for YouTube viewability
   * verification.
   *
   * @var string
   */
  public $viewabilityIntegrationPartner;
  protected $viewabilityIntegrationPartnerDataType = GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData::class;
  protected $viewabilityIntegrationPartnerDataDataType = '';

  /**
   * If true, then cost data will be shared with this vendor.
   *
   * @param bool $shareCost
   */
  public function setShareCost($shareCost)
  {
    $this->shareCost = $shareCost;
  }
  /**
   * @return bool
   */
  public function getShareCost()
  {
    return $this->shareCost;
  }
  /**
   * Allowed third party integration partners for YouTube viewability
   * verification.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DOUBLE_VERIFY, INTEGRAL_AD_SCIENCE
   *
   * @param self::VIEWABILITY_INTEGRATION_PARTNER_* $viewabilityIntegrationPartner
   */
  public function setViewabilityIntegrationPartner($viewabilityIntegrationPartner)
  {
    $this->viewabilityIntegrationPartner = $viewabilityIntegrationPartner;
  }
  /**
   * @return self::VIEWABILITY_INTEGRATION_PARTNER_*
   */
  public function getViewabilityIntegrationPartner()
  {
    return $this->viewabilityIntegrationPartner;
  }
  /**
   * Third party partner data for YouTube viewability verification. This is
   * optional metadata for partners to join or attach data to Ads campaigns.
   *
   * @param GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData $viewabilityIntegrationPartnerData
   */
  public function setViewabilityIntegrationPartnerData(GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData $viewabilityIntegrationPartnerData)
  {
    $this->viewabilityIntegrationPartnerData = $viewabilityIntegrationPartnerData;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData
   */
  public function getViewabilityIntegrationPartnerData()
  {
    return $this->viewabilityIntegrationPartnerData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCampaignThirdPartyViewabilityIntegrationPartner::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCampaignThirdPartyViewabilityIntegrationPartner');
