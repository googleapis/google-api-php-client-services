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

class GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandSafetyIntegrationPartner extends \Google\Model
{
  /**
   * Not specified.
   */
  public const BRAND_SAFETY_INTEGRATION_PARTNER_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const BRAND_SAFETY_INTEGRATION_PARTNER_UNKNOWN = 'UNKNOWN';
  /**
   * DoubleVerify.
   */
  public const BRAND_SAFETY_INTEGRATION_PARTNER_DOUBLE_VERIFY = 'DOUBLE_VERIFY';
  /**
   * Integral Ad Science.
   */
  public const BRAND_SAFETY_INTEGRATION_PARTNER_INTEGRAL_AD_SCIENCE = 'INTEGRAL_AD_SCIENCE';
  /**
   * Zefr.
   */
  public const BRAND_SAFETY_INTEGRATION_PARTNER_ZEFR = 'ZEFR';
  /**
   * Allowed third party integration partners for brand safety verification.
   *
   * @var string
   */
  public $brandSafetyIntegrationPartner;

  /**
   * Allowed third party integration partners for brand safety verification.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DOUBLE_VERIFY, INTEGRAL_AD_SCIENCE,
   * ZEFR
   *
   * @param self::BRAND_SAFETY_INTEGRATION_PARTNER_* $brandSafetyIntegrationPartner
   */
  public function setBrandSafetyIntegrationPartner($brandSafetyIntegrationPartner)
  {
    $this->brandSafetyIntegrationPartner = $brandSafetyIntegrationPartner;
  }
  /**
   * @return self::BRAND_SAFETY_INTEGRATION_PARTNER_*
   */
  public function getBrandSafetyIntegrationPartner()
  {
    return $this->brandSafetyIntegrationPartner;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandSafetyIntegrationPartner::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCustomerThirdPartyBrandSafetyIntegrationPartner');
