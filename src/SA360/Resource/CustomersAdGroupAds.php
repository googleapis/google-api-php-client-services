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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAdGroupAdsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAdGroupAdsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveAutomaticallyCreatedAssetsRequest;
use Google\Service\SA360\GoogleProtobufEmpty;

/**
 * The "adGroupAds" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $adGroupAds = $searchads360Service->customers_adGroupAds;
 *  </code>
 */
class CustomersAdGroupAds extends \Google\Service\Resource
{
  /**
   * Creates, updates, or removes ads. Operation statuses are returned. List of
   * thrown errors: [AdCustomizerError]() [AdError]() [AdGroupAdError]()
   * [AdSharingError]() [AdxError]() [AssetError]() [AssetLinkError]()
   * [AuthenticationError]() [AuthorizationError]() [CollectionSizeError]()
   * [ContextError]() [DatabaseError]() [DateError]() [DistinctError]()
   * [FeedAttributeReferenceError]() [FieldError]() [FieldMaskError]()
   * [FunctionError]() [FunctionParsingError]() [HeaderError]() [IdError]()
   * [ImageError]() [InternalError]() [ListOperationError]() [MediaBundleError]()
   * [MediaFileError]() [MutateError]() [NewResourceCreationError]()
   * [NotEmptyError]() [NullError]() [OperationAccessDeniedError]()
   * [OperatorError]() [PolicyFindingError]() [PolicyValidationParameterError]()
   * [PolicyViolationError]() [QuotaError]() [RangeError]() [RequestError]()
   * [ResourceCountLimitExceededError]() [SizeLimitError]() [StringFormatError]()
   * [StringLengthError]() [UrlFieldError]() (adGroupAds.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose ads are
   * being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateAdGroupAdsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateAdGroupAdsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateAdGroupAdsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateAdGroupAdsResponse::class);
  }
  /**
   * Remove automatically created assets from an ad. List of thrown errors:
   * [AdError]() [AuthenticationError]() [AuthorizationError]()
   * [AutomaticallyCreatedAssetRemovalError]() [HeaderError]() [InternalError]()
   * [MutateError]() [QuotaError]() [RequestError]()
   * (adGroupAds.removeAutomaticallyCreatedAssets)
   *
   * @param string $adGroupAd Required. The resource name of the AdGroupAd from
   * which to remove automatically created assets.
   * @param GoogleAdsSearchads360V23ServicesRemoveAutomaticallyCreatedAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function removeAutomaticallyCreatedAssets($adGroupAd, GoogleAdsSearchads360V23ServicesRemoveAutomaticallyCreatedAssetsRequest $postBody, $optParams = [])
  {
    $params = ['adGroupAd' => $adGroupAd, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('removeAutomaticallyCreatedAssets', [$params], GoogleProtobufEmpty::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersAdGroupAds::class, 'Google_Service_SA360_Resource_CustomersAdGroupAds');
