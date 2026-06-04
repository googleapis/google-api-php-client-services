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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesEnablePMaxBrandGuidelinesRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesEnablePMaxBrandGuidelinesResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCampaignsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCampaignsResponse;

/**
 * The "campaigns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $campaigns = $searchads360Service->customers_campaigns;
 *  </code>
 */
class CustomersCampaigns extends \Google\Service\Resource
{
  /**
   * Enables Brand Guidelines for Performance Max campaigns. List of thrown
   * errors: [AuthenticationError]() [AssetError]() [AssetLinkError]()
   * [AuthorizationError]() [BrandGuidelinesMigrationError]() [CampaignError]()
   * [HeaderError]() [InternalError]() [MutateError]() [QuotaError]()
   * [RequestError]() [ResourceCountLimitExceededError]()
   * (campaigns.enablePMaxBrandGuidelines)
   *
   * @param string $customerId Required. The ID of the customer whose campaigns
   * are being enabled.
   * @param GoogleAdsSearchads360V23ServicesEnablePMaxBrandGuidelinesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesEnablePMaxBrandGuidelinesResponse
   * @throws \Google\Service\Exception
   */
  public function enablePMaxBrandGuidelines($customerId, GoogleAdsSearchads360V23ServicesEnablePMaxBrandGuidelinesRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('enablePMaxBrandGuidelines', [$params], GoogleAdsSearchads360V23ServicesEnablePMaxBrandGuidelinesResponse::class);
  }
  /**
   * Creates, updates, or removes campaigns. Operation statuses are returned. List
   * of thrown errors: [AdxError]() [AuthenticationError]() [AuthorizationError]()
   * [BiddingError]() [BiddingStrategyError]() [CampaignBudgetError]()
   * [CampaignError]() [ContextError]() [DatabaseError]() [DateError]()
   * [DateRangeError]() [DistinctError]() [FieldError]() [FieldMaskError]()
   * [HeaderError]() [IdError]() [InternalError]() [ListOperationError]()
   * [MutateError]() [NewResourceCreationError]() [NotAllowlistedError]()
   * [NotEmptyError]() [NullError]() [OperationAccessDeniedError]()
   * [OperatorError]() [QuotaError]() [RangeError]() [RegionCodeError]()
   * [RequestError]() [ResourceCountLimitExceededError]() [SettingError]()
   * [SizeLimitError]() [StringFormatError]() [StringLengthError]()
   * [UrlFieldError]() (campaigns.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose campaigns
   * are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateCampaignsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateCampaignsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateCampaignsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateCampaignsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersCampaigns::class, 'Google_Service_SA360_Resource_CustomersCampaigns');
