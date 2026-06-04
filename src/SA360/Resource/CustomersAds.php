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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAdsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAdsResponse;

/**
 * The "ads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $ads = $searchads360Service->customers_ads;
 *  </code>
 */
class CustomersAds extends \Google\Service\Resource
{
  /**
   * Updates ads. Operation statuses are returned. Updating ads is not supported
   * for TextAd, ExpandedDynamicSearchAd, GmailAd and ImageAd. List of thrown
   * errors: [AdCustomizerError]() [AdError]() [AdSharingError]() [AdxError]()
   * [AssetError]() [AssetLinkError]() [AuthenticationError]()
   * [AuthorizationError]() [CollectionSizeError]() [DatabaseError]()
   * [DateError]() [DistinctError]() [FeedAttributeReferenceError]()
   * [FieldError]() [FieldMaskError]() [FunctionError]() [FunctionParsingError]()
   * [HeaderError]() [IdError]() [ImageError]() [InternalError]()
   * [ListOperationError]() [MediaBundleError]() [MediaFileError]()
   * [MutateError]() [NewResourceCreationError]() [NotEmptyError]() [NullError]()
   * [OperatorError]() [PolicyFindingError]() [PolicyViolationError]()
   * [QuotaError]() [RangeError]() [RequestError]() [SizeLimitError]()
   * [StringFormatError]() [StringLengthError]() [UrlFieldError]() (ads.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose ads are
   * being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateAdsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateAdsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateAdsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateAdsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersAds::class, 'Google_Service_SA360_Resource_CustomersAds');
