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

class GoogleAdsSearchads360V23ServicesGenerateConversionRatesRequest extends \Google\Model
{
  /**
   * Required. The ID of the customer. A conversion rate based on the historical
   * data of this customer may be suggested.
   *
   * @var string
   */
  public $customerId;
  /**
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @var string
   */
  public $customerReachGroup;
  protected $reachApplicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $reachApplicationInfoDataType = '';

  /**
   * Required. The ID of the customer. A conversion rate based on the historical
   * data of this customer may be suggested.
   *
   * @param string $customerId
   */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /**
   * @return string
   */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /**
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @param string $customerReachGroup
   */
  public function setCustomerReachGroup($customerReachGroup)
  {
    $this->customerReachGroup = $customerReachGroup;
  }
  /**
   * @return string
   */
  public function getCustomerReachGroup()
  {
    return $this->customerReachGroup;
  }
  /**
   * Optional. Additional information on the application issuing the request.
   *
   * @param GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $reachApplicationInfo
   */
  public function setReachApplicationInfo(GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $reachApplicationInfo)
  {
    $this->reachApplicationInfo = $reachApplicationInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdditionalApplicationInfo
   */
  public function getReachApplicationInfo()
  {
    return $this->reachApplicationInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateConversionRatesRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateConversionRatesRequest');
