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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRegenerateShareableLinkIdRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRegenerateShareableLinkIdResponse;

/**
 * The "thirdPartyAppAnalyticsLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $thirdPartyAppAnalyticsLinks = $searchads360Service->customers_thirdPartyAppAnalyticsLinks;
 *  </code>
 */
class CustomersThirdPartyAppAnalyticsLinks extends \Google\Service\Resource
{
  /**
   * Regenerate ThirdPartyAppAnalyticsLink.shareable_link_id that should be
   * provided to the third party when setting up app analytics. List of thrown
   * errors: [AuthenticationError]() [AuthorizationError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RequestError]()
   * (thirdPartyAppAnalyticsLinks.regenerateShareableLinkId)
   *
   * @param string $resourceName Resource name of the third party app analytics
   * link.
   * @param GoogleAdsSearchads360V23ServicesRegenerateShareableLinkIdRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesRegenerateShareableLinkIdResponse
   * @throws \Google\Service\Exception
   */
  public function regenerateShareableLinkId($resourceName, GoogleAdsSearchads360V23ServicesRegenerateShareableLinkIdRequest $postBody, $optParams = [])
  {
    $params = ['resourceName' => $resourceName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('regenerateShareableLinkId', [$params], GoogleAdsSearchads360V23ServicesRegenerateShareableLinkIdResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersThirdPartyAppAnalyticsLinks::class, 'Google_Service_SA360_Resource_CustomersThirdPartyAppAnalyticsLinks');
