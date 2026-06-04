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

class GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandLiftIntegrationPartner extends \Google\Model
{
  /**
   * Not specified.
   */
  public const BRAND_LIFT_INTEGRATION_PARTNER_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const BRAND_LIFT_INTEGRATION_PARTNER_UNKNOWN = 'UNKNOWN';
  /**
   * Kantar
   */
  public const BRAND_LIFT_INTEGRATION_PARTNER_KANTAR_MILLWARD_BROWN = 'KANTAR_MILLWARD_BROWN';
  /**
   * Dynata
   */
  public const BRAND_LIFT_INTEGRATION_PARTNER_DYNATA = 'DYNATA';
  /**
   * Intage
   */
  public const BRAND_LIFT_INTEGRATION_PARTNER_INTAGE = 'INTAGE';
  /**
   * Macromill
   */
  public const BRAND_LIFT_INTEGRATION_PARTNER_MACROMILL = 'MACROMILL';
  /**
   * If true, cost data can be shared with this vendor.
   *
   * @var bool
   */
  public $allowShareCost;
  /**
   * Allowed Third Party integration partners for Brand Lift verification.
   *
   * @var string
   */
  public $brandLiftIntegrationPartner;

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
   * Allowed Third Party integration partners for Brand Lift verification.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, KANTAR_MILLWARD_BROWN, DYNATA,
   * INTAGE, MACROMILL
   *
   * @param self::BRAND_LIFT_INTEGRATION_PARTNER_* $brandLiftIntegrationPartner
   */
  public function setBrandLiftIntegrationPartner($brandLiftIntegrationPartner)
  {
    $this->brandLiftIntegrationPartner = $brandLiftIntegrationPartner;
  }
  /**
   * @return self::BRAND_LIFT_INTEGRATION_PARTNER_*
   */
  public function getBrandLiftIntegrationPartner()
  {
    return $this->brandLiftIntegrationPartner;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandLiftIntegrationPartner::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandLiftIntegrationPartner');
