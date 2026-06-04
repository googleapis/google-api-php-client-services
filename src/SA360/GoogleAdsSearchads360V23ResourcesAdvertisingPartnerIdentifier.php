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

class GoogleAdsSearchads360V23ResourcesAdvertisingPartnerIdentifier extends \Google\Model
{
  /**
   * Output only. The resource name of the advertising partner Google Ads
   * account. This field is required and should not be empty when creating a new
   * Advertising Partner link. It is unable to be modified after the creation of
   * the link.
   *
   * @var string
   */
  public $customer;

  /**
   * Output only. The resource name of the advertising partner Google Ads
   * account. This field is required and should not be empty when creating a new
   * Advertising Partner link. It is unable to be modified after the creation of
   * the link.
   *
   * @param string $customer
   */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /**
   * @return string
   */
  public function getCustomer()
  {
    return $this->customer;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdvertisingPartnerIdentifier::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdvertisingPartnerIdentifier');
