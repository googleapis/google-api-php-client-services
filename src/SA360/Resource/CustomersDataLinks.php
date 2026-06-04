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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateDataLinkRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateDataLinkResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveDataLinkRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveDataLinkResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUpdateDataLinkRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUpdateDataLinkResponse;

/**
 * The "dataLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $dataLinks = $searchads360Service->customers_dataLinks;
 *  </code>
 */
class CustomersDataLinks extends \Google\Service\Resource
{
  /**
   * Creates a data link. The requesting Google Ads account name and account ID
   * will be shared with the third party (such as YouTube creators for video
   * links) to whom you are creating the link with. Only customers on the allow-
   * list can create data links. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [DatabaseError]() [DataLinkError]() [FieldError]()
   * [HeaderError]() [InternalError]() [MutateError]() [QuotaError]()
   * [RequestError]() (dataLinks.create)
   *
   * @param string $customerId Required. The ID of the customer for which the data
   * link is created.
   * @param GoogleAdsSearchads360V23ServicesCreateDataLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesCreateDataLinkResponse
   * @throws \Google\Service\Exception
   */
  public function create($customerId, GoogleAdsSearchads360V23ServicesCreateDataLinkRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleAdsSearchads360V23ServicesCreateDataLinkResponse::class);
  }
  /**
   * Remove a data link. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [DatabaseError]() [DataLinkError]() [FieldError]()
   * [HeaderError]() [InternalError]() [MutateError]() [QuotaError]()
   * [RequestError]() (dataLinks.remove)
   *
   * @param string $customerId Required. The ID of the customer for which the data
   * link is updated.
   * @param GoogleAdsSearchads360V23ServicesRemoveDataLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesRemoveDataLinkResponse
   * @throws \Google\Service\Exception
   */
  public function remove($customerId, GoogleAdsSearchads360V23ServicesRemoveDataLinkRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('remove', [$params], GoogleAdsSearchads360V23ServicesRemoveDataLinkResponse::class);
  }
  /**
   * Update a data link. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [DatabaseError]() [DataLinkError]() [FieldError]()
   * [HeaderError]() [InternalError]() [MutateError]() [QuotaError]()
   * [RequestError]() (dataLinks.update)
   *
   * @param string $customerId Required. The ID of the customer for which the data
   * link is created.
   * @param GoogleAdsSearchads360V23ServicesUpdateDataLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesUpdateDataLinkResponse
   * @throws \Google\Service\Exception
   */
  public function update($customerId, GoogleAdsSearchads360V23ServicesUpdateDataLinkRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('update', [$params], GoogleAdsSearchads360V23ServicesUpdateDataLinkResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersDataLinks::class, 'Google_Service_SA360_Resource_CustomersDataLinks');
