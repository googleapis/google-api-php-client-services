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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateUserListsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateUserListsResponse;

/**
 * The "userLists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $userLists = $searchads360Service->customers_userLists;
 *  </code>
 */
class CustomersUserLists extends \Google\Service\Resource
{
  /**
   * Creates or updates user lists. Operation statuses are returned. List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [CollectionSizeError]() [DatabaseError]() [DistinctError]() [FieldError]()
   * [FieldMaskError]() [HeaderError]() [InternalError]() [MutateError]()
   * [NewResourceCreationError]() [NotAllowlistedError]() [NotEmptyError]()
   * [OperationAccessDeniedError]() [QuotaError]() [RangeError]() [RequestError]()
   * [StringFormatError]() [StringLengthError]() [UserListError]()
   * (userLists.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose user lists
   * are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateUserListsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateUserListsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateUserListsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateUserListsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersUserLists::class, 'Google_Service_SA360_Resource_CustomersUserLists');
