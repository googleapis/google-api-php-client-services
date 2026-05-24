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

namespace Google\Service\ChromeManagement\Resource;

use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1CheckEnablementStatusResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1DisableInsightsRequest;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1DisableInsightsResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1EnableInsightsRequest;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1EnableInsightsResponse;

/**
 * The "securityInsights" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chromemanagementService = new Google\Service\ChromeManagement(...);
 *   $securityInsights = $chromemanagementService->customers_enterprise_securityInsights;
 *  </code>
 */
class CustomersEnterpriseSecurityInsights extends \Google\Service\Resource
{
  /**
   * Gets the setting state of the insights feature for the customer.
   * (securityInsights.checkEnablementStatus)
   *
   * @param string $customer Required. The customer to check the enablement status
   * for. Format: customers/{customer_id}
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1CheckEnablementStatusResponse
   * @throws \Google\Service\Exception
   */
  public function checkEnablementStatus($customer, $optParams = [])
  {
    $params = ['customer' => $customer];
    $params = array_merge($params, $optParams);
    return $this->call('checkEnablementStatus', [$params], GoogleChromeManagementVersionsV1CheckEnablementStatusResponse::class);
  }
  /**
   * Disables insights for the customer. (securityInsights.disable)
   *
   * @param string $customer Required. The customer to disable insights for.
   * Format: customers/{customer}
   * @param GoogleChromeManagementVersionsV1DisableInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1DisableInsightsResponse
   * @throws \Google\Service\Exception
   */
  public function disable($customer, GoogleChromeManagementVersionsV1DisableInsightsRequest $postBody, $optParams = [])
  {
    $params = ['customer' => $customer, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('disable', [$params], GoogleChromeManagementVersionsV1DisableInsightsResponse::class);
  }
  /**
   * Enables insights for the customer and sets up required chrome connectors.
   * (securityInsights.enable)
   *
   * @param string $customer Required. The customer to enable insights for.
   * Format: customers/{customer}
   * @param GoogleChromeManagementVersionsV1EnableInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1EnableInsightsResponse
   * @throws \Google\Service\Exception
   */
  public function enable($customer, GoogleChromeManagementVersionsV1EnableInsightsRequest $postBody, $optParams = [])
  {
    $params = ['customer' => $customer, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('enable', [$params], GoogleChromeManagementVersionsV1EnableInsightsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersEnterpriseSecurityInsights::class, 'Google_Service_ChromeManagement_Resource_CustomersEnterpriseSecurityInsights');
