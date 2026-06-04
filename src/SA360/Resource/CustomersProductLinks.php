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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateProductLinkRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateProductLinkResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveProductLinkRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveProductLinkResponse;

/**
 * The "productLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $productLinks = $searchads360Service->customers_productLinks;
 *  </code>
 */
class CustomersProductLinks extends \Google\Service\Resource
{
  /**
   * Creates a product link. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [DatabaseError]() [FieldError]() [HeaderError]()
   * [InternalError]() [MutateError]() [QuotaError]() [RequestError]()
   * (productLinks.create)
   *
   * @param string $customerId Required. The ID of the customer for which the
   * product link is created.
   * @param GoogleAdsSearchads360V23ServicesCreateProductLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesCreateProductLinkResponse
   * @throws \Google\Service\Exception
   */
  public function create($customerId, GoogleAdsSearchads360V23ServicesCreateProductLinkRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleAdsSearchads360V23ServicesCreateProductLinkResponse::class);
  }
  /**
   * Removes a product link. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [FieldMaskError]() [HeaderError]() [InternalError]()
   * [MutateError]() [QuotaError]() [RequestError]() (productLinks.remove)
   *
   * @param string $customerId Required. The ID of the customer being modified.
   * @param GoogleAdsSearchads360V23ServicesRemoveProductLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesRemoveProductLinkResponse
   * @throws \Google\Service\Exception
   */
  public function remove($customerId, GoogleAdsSearchads360V23ServicesRemoveProductLinkRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('remove', [$params], GoogleAdsSearchads360V23ServicesRemoveProductLinkResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersProductLinks::class, 'Google_Service_SA360_Resource_CustomersProductLinks');
