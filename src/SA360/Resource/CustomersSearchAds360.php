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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateSearchAds360Request;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateSearchAds360Response;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSearchSearchAds360Request;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSearchSearchAds360Response;

/**
 * The "searchAds360" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $searchAds360 = $searchads360Service->customers_searchAds360;
 *  </code>
 */
class CustomersSearchAds360 extends \Google\Service\Resource
{
  /**
   * This method is essentially a wrapper around a series of mutate methods. The
   * only features it offers over calling those methods directly are: - Atomic
   * transactions - Temp resource names (described below) - Somewhat reduced
   * latency over making a series of mutate calls Note: Only resources that
   * support atomic transactions are included, so this method can't replace all
   * calls to individual services. ## Atomic Transaction Benefits Atomicity makes
   * error handling much easier. If you're making a series of changes and one
   * fails, it can leave your account in an inconsistent state. With atomicity,
   * you either reach the chosen state directly, or the request fails and you can
   * retry. ## Temp Resource Names Temp resource names are a special type of
   * resource name used to create a resource and reference that resource in the
   * same request. For example, if a is created with `resource_name` equal to ``,
   * that resource name can be reused in the `` field in the same request. That
   * way, the two resources are created and linked atomically. To create a temp
   * resource name, put a negative number in the part of the name that the server
   * would normally allocate. Note: - Resources must be created with a temp name
   * before the name can be reused. For example, the previous example would fail
   * if the mutate order was reversed. - Temp names are not remembered across
   * requests. - There's no limit to the number of temp names in a request. - Each
   * temp name must use a unique negative number, even if the resource types
   * differ. ## Latency It's important to group mutates by resource type or the
   * request may time out and fail. Latency is roughly equal to a series of calls
   * to individual mutate methods, where each change in resource type is a new
   * call. For example, mutating is like 2 calls, while mutating is like 4 calls.
   * List of thrown errors: [AdCustomizerError]() [AdError]() [AdGroupAdError]()
   * [AdGroupCriterionError]() [AdGroupError]() [AssetError]()
   * [AuthenticationError]() [AuthorizationError]() [BiddingError]()
   * [CampaignBudgetError]() [CampaignCriterionError]() [CampaignError]()
   * [CampaignExperimentError]() [CampaignSharedSetError]()
   * [CollectionSizeError]() [ContextError]() [ConversionActionError]()
   * [CriterionError]() [CustomerFeedError]() [DatabaseError]() [DateError]()
   * [DateRangeError]() [DistinctError]() [ExtensionFeedItemError]()
   * [ExtensionSettingError]() [FeedAttributeReferenceError]() [FeedError]()
   * [FeedItemError]() [FeedItemSetError]() [FieldError]() [FieldMaskError]()
   * [FunctionParsingError]() [HeaderError]() [ImageError]() [InternalError]()
   * [KeywordPlanAdGroupKeywordError]() [KeywordPlanCampaignError]()
   * [KeywordPlanError]() [LabelError]() [ListOperationError]()
   * [MediaUploadError]() [MutateError]() [NewResourceCreationError]()
   * [NullError]() [OperationAccessDeniedError]() [PolicyFindingError]()
   * [PolicyViolationError]() [QuotaError]() [RangeError]() [RequestError]()
   * [ResourceCountLimitExceededError]() [SettingError]() [SharedSetError]()
   * [SizeLimitError]() [StringFormatError]() [StringLengthError]()
   * [UrlFieldError]() [UserListError]() [YoutubeVideoRegistrationError]()
   * (searchAds360.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose resources
   * are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateSearchAds360Request $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateSearchAds360Response
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateSearchAds360Request $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateSearchAds360Response::class);
  }
  /**
   * Returns all rows that match the search query. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [ChangeEventError]()
   * [ChangeStatusError]() [ClickViewError]() [HeaderError]() [InternalError]()
   * [QueryError]() [QuotaError]() [RequestError]() (searchAds360.search)
   *
   * @param string $customerId Required. The ID of the customer being queried.
   * @param GoogleAdsSearchads360V23ServicesSearchSearchAds360Request $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesSearchSearchAds360Response
   * @throws \Google\Service\Exception
   */
  public function search($customerId, GoogleAdsSearchads360V23ServicesSearchSearchAds360Request $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('search', [$params], GoogleAdsSearchads360V23ServicesSearchSearchAds360Response::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersSearchAds360::class, 'Google_Service_SA360_Resource_CustomersSearchAds360');
