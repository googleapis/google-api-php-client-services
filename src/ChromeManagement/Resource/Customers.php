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

use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1SubscriptionInfo;

/**
 * The "customers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chromemanagementService = new Google\Service\ChromeManagement(...);
 *   $customers = $chromemanagementService->customers;
 *  </code>
 */
class Customers extends \Google\Service\Resource
{
  /**
   * Gets the aggregated subscription and license information for a given customer
   * as a singleton resource. Note: Because the data is snapshotted for ChromeOS
   * devices, the exact numbers can be delayed by up to 10 seconds.
   * (customers.getSubscriptionInfo)
   *
   * @param string $name Required. The resource name of the customer subscription
   * info to retrieve. Format: customers/{customer}/subscriptionInfo
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1SubscriptionInfo
   * @throws \Google\Service\Exception
   */
  public function getSubscriptionInfo($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getSubscriptionInfo', [$params], GoogleChromeManagementVersionsV1SubscriptionInfo::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Customers::class, 'Google_Service_ChromeManagement_Resource_Customers');
