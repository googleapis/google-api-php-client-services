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

namespace Google\Service\SA360\Resource;

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateAccountLinkRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateAccountLinkResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAccountLinkRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAccountLinkResponse;

/**
 * The "accountLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $accountLinks = $searchads360Service->customers_accountLinks;
 *  </code>
 */
class CustomersAccountLinks extends \Google\Service\Resource
{
  /**
   * Creates an account link. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [DatabaseError]() [FieldError]() [HeaderError]()
   * [InternalError]() [MutateError]() [QuotaError]() [RequestError]()
   * [ThirdPartyAppAnalyticsLinkError]() (accountLinks.create)
   *
   * @param string $customerId Required. The ID of the customer for which the
   * account link is created.
   * @param GoogleAdsSearchads360V23ServicesCreateAccountLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesCreateAccountLinkResponse
   * @throws \Google\Service\Exception
   */
  public function create($customerId, GoogleAdsSearchads360V23ServicesCreateAccountLinkRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleAdsSearchads360V23ServicesCreateAccountLinkResponse::class);
  }
  /**
   * Creates or removes an account link. From V5, create is not supported through
   * AccountLinkService.MutateAccountLink. Use
   * AccountLinkService.CreateAccountLink instead. List of thrown errors:
   * [AccountLinkError]() [AuthenticationError]() [AuthorizationError]()
   * [FieldMaskError]() [HeaderError]() [InternalError]() [MutateError]()
   * [QuotaError]() [RequestError]() (accountLinks.mutate)
   *
   * @param string $customerId Required. The ID of the customer being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateAccountLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateAccountLinkResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateAccountLinkRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateAccountLinkResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersAccountLinks::class, 'Google_Service_SA360_Resource_CustomersAccountLinks');
