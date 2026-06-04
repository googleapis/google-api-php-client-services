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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMoveManagerLinkRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMoveManagerLinkResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCustomerManagerLinkRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCustomerManagerLinkResponse;

/**
 * The "customerManagerLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $customerManagerLinks = $searchads360Service->customers_customerManagerLinks;
 *  </code>
 */
class CustomersCustomerManagerLinks extends \Google\Service\Resource
{
  /**
   * Moves a client customer to a new manager customer. This simplifies the
   * complex request that requires two operations to move a client customer to a
   * new manager, for example: 1. Update operation with Status INACTIVE (previous
   * manager) and, 2. Update operation with Status ACTIVE (new manager). List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [DatabaseError]() [FieldError]() [HeaderError]() [InternalError]()
   * [MutateError]() [QuotaError]() [RequestError]()
   * (customerManagerLinks.moveManagerLink)
   *
   * @param string $customerId Required. The ID of the client customer that is
   * being moved.
   * @param GoogleAdsSearchads360V23ServicesMoveManagerLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMoveManagerLinkResponse
   * @throws \Google\Service\Exception
   */
  public function moveManagerLink($customerId, GoogleAdsSearchads360V23ServicesMoveManagerLinkRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('moveManagerLink', [$params], GoogleAdsSearchads360V23ServicesMoveManagerLinkResponse::class);
  }
  /**
   * Updates customer manager links. Operation statuses are returned. List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [DatabaseError]() [FieldError]() [FieldMaskError]() [HeaderError]()
   * [InternalError]() [ManagerLinkError]() [MutateError]() [QuotaError]()
   * [RequestError]() (customerManagerLinks.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose customer
   * manager links are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateCustomerManagerLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateCustomerManagerLinkResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateCustomerManagerLinkRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateCustomerManagerLinkResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersCustomerManagerLinks::class, 'Google_Service_SA360_Resource_CustomersCustomerManagerLinks');
