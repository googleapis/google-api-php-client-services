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

namespace Google\Service\Apigee\Resource;

use Google\Service\Apigee\GoogleCloudApigeeV1AdjustAppGroupBalanceRequest;
use Google\Service\Apigee\GoogleCloudApigeeV1AppGroupBalance;
use Google\Service\Apigee\GoogleCloudApigeeV1CreditAppGroupBalanceRequest;

/**
 * The "balance" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google\Service\Apigee(...);
 *   $balance = $apigeeService->organizations_appgroups_balance;
 *  </code>
 */
class OrganizationsAppgroupsBalance extends \Google\Service\Resource
{
  /**
   * Adjust the prepaid balance for the AppGroup. This API will be used in
   * scenarios where the AppGroup has been under-charged or over-charged.
   * (balance.adjust)
   *
   * @param string $name Required. Account balance for the AppGroup. Use the
   * following structure in your request:
   * `organizations/{org}/appgroups/{app_group}/balance`
   * @param GoogleCloudApigeeV1AdjustAppGroupBalanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudApigeeV1AppGroupBalance
   * @throws \Google\Service\Exception
   */
  public function adjust($name, GoogleCloudApigeeV1AdjustAppGroupBalanceRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('adjust', [$params], GoogleCloudApigeeV1AppGroupBalance::class);
  }
  /**
   * Credits the account balance for the AppGroup. (balance.credit)
   *
   * @param string $name Required. Account balance for the AppGroup. Use the
   * following structure in your request:
   * `organizations/{org}/appgroups/{app_group}/balance`
   * @param GoogleCloudApigeeV1CreditAppGroupBalanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudApigeeV1AppGroupBalance
   * @throws \Google\Service\Exception
   */
  public function credit($name, GoogleCloudApigeeV1CreditAppGroupBalanceRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('credit', [$params], GoogleCloudApigeeV1AppGroupBalance::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsAppgroupsBalance::class, 'Google_Service_Apigee_Resource_OrganizationsAppgroupsBalance');
