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

class GoogleAdsSearchads360V23CommonCustomerThirdPartyViewabilityIntegrationPartner extends \Google\Model
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
   * If true, cost data can be shared with this vendor.
   *
   * @var bool
   */
  public $allowShareCost;
  /**
   * Allowed third party integration partners for YouTube viewability
   * verification.
   *
   * @var string
   */
  public $viewabilityIntegrationPartner;

  /**
   * If true, cost data can be shared with this vendor.
   *
   * @param bool $allowShareCost
   */
  public function setAllowShareCost($allowShareCost)
  {
    $this->allowShareCost = $allowShareCost;
  }
  /**
   * @return bool
   */
  public function getAllowShareCost()
  {
    return $this->allowShareCost;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCustomerThirdPartyViewabilityIntegrationPartner::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCustomerThirdPartyViewabilityIntegrationPartner');
