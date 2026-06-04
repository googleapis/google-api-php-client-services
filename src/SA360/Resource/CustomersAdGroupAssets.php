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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAdGroupAssetsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAdGroupAssetsResponse;

/**
 * The "adGroupAssets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $adGroupAssets = $searchads360Service->customers_adGroupAssets;
 *  </code>
 */
class CustomersAdGroupAssets extends \Google\Service\Resource
{
  /**
   * Creates, updates, or removes ad group assets. Operation statuses are
   * returned. List of thrown errors: [AssetLinkError]() [AuthenticationError]()
   * [AuthorizationError]() [ContextError]() [FieldError]() [HeaderError]()
   * [InternalError]() [MutateError]() [NotAllowlistedError]() [QuotaError]()
   * [RequestError]() (adGroupAssets.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose ad group
   * assets are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateAdGroupAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateAdGroupAssetsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateAdGroupAssetsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateAdGroupAssetsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersAdGroupAssets::class, 'Google_Service_SA360_Resource_CustomersAdGroupAssets');
