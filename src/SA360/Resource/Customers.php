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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateCustomerClientRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateCustomerClientResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateAdGroupThemesRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateAdGroupThemesResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateAudienceOverlapInsightsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateAudienceOverlapInsightsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateInsightsFinderReportRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateInsightsFinderReportResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateKeywordForecastMetricsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateKeywordForecastMetricsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateKeywordIdeaResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateKeywordIdeasRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateReachForecastRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateReachForecastResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateSuggestedTargetingInsightsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateSuggestedTargetingInsightsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateTargetingSuggestionMetricsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateTargetingSuggestionMetricsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGetIdentityVerificationResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListAccessibleCustomersResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListAudienceInsightsAttributesRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListAudienceInsightsAttributesResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCustomerRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCustomerResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesStartIdentityVerificationRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestKeywordThemesRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestKeywordThemesResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestSmartCampaignAdRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestSmartCampaignAdResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestTravelAssetsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestTravelAssetsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUploadUserDataRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUploadUserDataResponse;
use Google\Service\SA360\GoogleProtobufEmpty;

/**
 * The "customers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $customers = $searchads360Service->customers;
 *  </code>
 */
class Customers extends \Google\Service\Resource
{
  /**
   * Creates a new client under manager. The new client customer is returned. List
   * of thrown errors: [AccessInvitationError]() [AuthenticationError]()
   * [AuthorizationError]() [CurrencyCodeError]() [HeaderError]()
   * [InternalError]() [ManagerLinkError]() [QuotaError]() [RequestError]()
   * [StringLengthError]() [TimeZoneError]() (customers.createCustomerClient)
   *
   * @param string $customerId Required. The ID of the Manager under whom client
   * customer is being created.
   * @param GoogleAdsSearchads360V23ServicesCreateCustomerClientRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesCreateCustomerClientResponse
   * @throws \Google\Service\Exception
   */
  public function createCustomerClient($customerId, GoogleAdsSearchads360V23ServicesCreateCustomerClientRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('createCustomerClient', [$params], GoogleAdsSearchads360V23ServicesCreateCustomerClientResponse::class);
  }
  /**
   * Returns a list of suggested AdGroups and suggested modifications (text, match
   * type) for the given keywords. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [CollectionSizeError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RequestError]()
   * (customers.generateAdGroupThemes)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesGenerateAdGroupThemesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateAdGroupThemesResponse
   * @throws \Google\Service\Exception
   */
  public function generateAdGroupThemes($customerId, GoogleAdsSearchads360V23ServicesGenerateAdGroupThemesRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateAdGroupThemes', [$params], GoogleAdsSearchads360V23ServicesGenerateAdGroupThemesResponse::class);
  }
  /**
   * Returns a collection of attributes that are represented in an audience of
   * interest, with metrics that compare each attribute's share of the audience
   * with its share of a baseline audience. List of thrown errors:
   * [AudienceInsightsError]() [AuthenticationError]() [AuthorizationError]()
   * [FieldError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RangeError]() [RequestError]()
   * (customers.generateAudienceCompositionInsights)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsResponse
   * @throws \Google\Service\Exception
   */
  public function generateAudienceCompositionInsights($customerId, GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateAudienceCompositionInsights', [$params], GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsResponse::class);
  }
  /**
   * Returns a collection of audience attributes using generative AI based on the
   * provided audience description. List of thrown errors:
   * [AudienceInsightsError]() [AuthenticationError]() [AuthorizationError]()
   * [FieldError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (customers.generateAudienceDefinition)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionResponse
   * @throws \Google\Service\Exception
   */
  public function generateAudienceDefinition($customerId, GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateAudienceDefinition', [$params], GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionResponse::class);
  }
  /**
   * Returns a collection of audience attributes along with estimates of the
   * overlap between their potential YouTube reach and that of a given input
   * attribute. List of thrown errors: [AudienceInsightsError]()
   * [AuthenticationError]() [AuthorizationError]() [FieldError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RangeError]() [RequestError]()
   * (customers.generateAudienceOverlapInsights)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesGenerateAudienceOverlapInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateAudienceOverlapInsightsResponse
   * @throws \Google\Service\Exception
   */
  public function generateAudienceOverlapInsights($customerId, GoogleAdsSearchads360V23ServicesGenerateAudienceOverlapInsightsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateAudienceOverlapInsights', [$params], GoogleAdsSearchads360V23ServicesGenerateAudienceOverlapInsightsResponse::class);
  }
  /**
   * Returns YouTube advertisement metrics for the given client against industry
   * benchmarks. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [BenchmarksError]() [FieldError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RangeError]() [RequestError]()
   * (customers.generateBenchmarksMetrics)
   *
   * @param string $customerId Required. The ID of the customer. Supply a client
   * customer ID to generate metrics for the customer. A manager account customer
   * ID will not return customer metrics since it does not have any associated
   * direct ad campaigns.
   * @param GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsResponse
   * @throws \Google\Service\Exception
   */
  public function generateBenchmarksMetrics($customerId, GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateBenchmarksMetrics', [$params], GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsResponse::class);
  }
  /**
   * Creates a saved report that can be viewed in the Insights Finder tool. List
   * of thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [FieldError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RangeError]() [RequestError]() (customers.generateInsightsFinderReport)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesGenerateInsightsFinderReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateInsightsFinderReportResponse
   * @throws \Google\Service\Exception
   */
  public function generateInsightsFinderReport($customerId, GoogleAdsSearchads360V23ServicesGenerateInsightsFinderReportRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateInsightsFinderReport', [$params], GoogleAdsSearchads360V23ServicesGenerateInsightsFinderReportResponse::class);
  }
  /**
   * Returns metrics (such as impressions, clicks, total cost) of a keyword
   * forecast for the given campaign. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [CollectionSizeError]()
   * [HeaderError]() [InternalError]() [QuotaError]() [RequestError]()
   * (customers.generateKeywordForecastMetrics)
   *
   * @param string $customerId The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesGenerateKeywordForecastMetricsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateKeywordForecastMetricsResponse
   * @throws \Google\Service\Exception
   */
  public function generateKeywordForecastMetrics($customerId, GoogleAdsSearchads360V23ServicesGenerateKeywordForecastMetricsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateKeywordForecastMetrics', [$params], GoogleAdsSearchads360V23ServicesGenerateKeywordForecastMetricsResponse::class);
  }
  /**
   * Returns a list of keyword historical metrics. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [CollectionSizeError]()
   * [HeaderError]() [InternalError]() [QuotaError]() [RequestError]()
   * (customers.generateKeywordHistoricalMetrics)
   *
   * @param string $customerId The ID of the customer with the recommendation.
   * @param GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsResponse
   * @throws \Google\Service\Exception
   */
  public function generateKeywordHistoricalMetrics($customerId, GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateKeywordHistoricalMetrics', [$params], GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsResponse::class);
  }
  /**
   * Returns a list of keyword ideas. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [CollectionSizeError]()
   * [HeaderError]() [InternalError]() [KeywordPlanIdeaError]() [QuotaError]()
   * [RequestError]() (customers.generateKeywordIdeas)
   *
   * @param string $customerId The ID of the customer with the recommendation.
   * @param GoogleAdsSearchads360V23ServicesGenerateKeywordIdeasRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateKeywordIdeaResponse
   * @throws \Google\Service\Exception
   */
  public function generateKeywordIdeas($customerId, GoogleAdsSearchads360V23ServicesGenerateKeywordIdeasRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateKeywordIdeas', [$params], GoogleAdsSearchads360V23ServicesGenerateKeywordIdeaResponse::class);
  }
  /**
   * Generates a reach forecast for a given targeting / product mix. List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]() [FieldError]()
   * [HeaderError]() [InternalError]() [QuotaError]() [RangeError]()
   * [ReachPlanError]() [RequestError]() (customers.generateReachForecast)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesGenerateReachForecastRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateReachForecastResponse
   * @throws \Google\Service\Exception
   */
  public function generateReachForecast($customerId, GoogleAdsSearchads360V23ServicesGenerateReachForecastRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateReachForecast', [$params], GoogleAdsSearchads360V23ServicesGenerateReachForecastResponse::class);
  }
  /**
   * Returns a collection of targeting insights (e.g. targetable audiences) that
   * are relevant to the requested audience. List of thrown errors:
   * [AudienceInsightsError]() [AuthenticationError]() [AuthorizationError]()
   * [FieldError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RangeError]() [RequestError]()
   * (customers.generateSuggestedTargetingInsights)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesGenerateSuggestedTargetingInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateSuggestedTargetingInsightsResponse
   * @throws \Google\Service\Exception
   */
  public function generateSuggestedTargetingInsights($customerId, GoogleAdsSearchads360V23ServicesGenerateSuggestedTargetingInsightsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateSuggestedTargetingInsights', [$params], GoogleAdsSearchads360V23ServicesGenerateSuggestedTargetingInsightsResponse::class);
  }
  /**
   * Returns potential reach metrics for targetable audiences. This method helps
   * answer questions like "How many Men aged 18+ interested in Camping can be
   * reached on YouTube?" List of thrown errors: [AudienceInsightsError]()
   * [AuthenticationError]() [AuthorizationError]() [FieldError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RangeError]() [RequestError]()
   * (customers.generateTargetingSuggestionMetrics)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesGenerateTargetingSuggestionMetricsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateTargetingSuggestionMetricsResponse
   * @throws \Google\Service\Exception
   */
  public function generateTargetingSuggestionMetrics($customerId, GoogleAdsSearchads360V23ServicesGenerateTargetingSuggestionMetricsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateTargetingSuggestionMetrics', [$params], GoogleAdsSearchads360V23ServicesGenerateTargetingSuggestionMetricsResponse::class);
  }
  /**
   * Returns Identity Verification information. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RequestError]()
   * (customers.getIdentityVerification)
   *
   * @param string $customerId Required. The ID of the customer for whom we are
   * requesting verification information.
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGetIdentityVerificationResponse
   * @throws \Google\Service\Exception
   */
  public function getIdentityVerification($customerId, $optParams = [])
  {
    $params = ['customerId' => $customerId];
    $params = array_merge($params, $optParams);
    return $this->call('getIdentityVerification', [$params], GoogleAdsSearchads360V23ServicesGetIdentityVerificationResponse::class);
  }
  /**
   * Returns resource names of customers directly accessible by the user
   * authenticating the call. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (customers.listAccessibleCustomers)
   *
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListAccessibleCustomersResponse
   * @throws \Google\Service\Exception
   */
  public function listAccessibleCustomers($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('listAccessibleCustomers', [$params], GoogleAdsSearchads360V23ServicesListAccessibleCustomersResponse::class);
  }
  /**
   * Updates a customer. Operation statuses are returned. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [DatabaseError]()
   * [FieldMaskError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() [UrlFieldError]() (customers.mutate)
   *
   * @param string $customerId Required. The ID of the customer being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateCustomerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateCustomerResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateCustomerRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateCustomerResponse::class);
  }
  /**
   * Removes automatically created assets from a campaign. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [ContextError]()
   * [FieldError]() [InternalError]() [MutateError]() [PartialFailureError]()
   * [QuotaError]() [RequestError]()
   * (customers.removeCampaignAutomaticallyCreatedAsset)
   *
   * @param string $customerId Required. The ID of the customer whose assets are
   * being removed.
   * @param GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetResponse
   * @throws \Google\Service\Exception
   */
  public function removeCampaignAutomaticallyCreatedAsset($customerId, GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('removeCampaignAutomaticallyCreatedAsset', [$params], GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetResponse::class);
  }
  /**
   * Searches for audience attributes that can be used to generate insights. List
   * of thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [FieldError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RangeError]() [RequestError]() (customers.searchAudienceInsightsAttributes)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesListAudienceInsightsAttributesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListAudienceInsightsAttributesResponse
   * @throws \Google\Service\Exception
   */
  public function searchAudienceInsightsAttributes($customerId, GoogleAdsSearchads360V23ServicesListAudienceInsightsAttributesRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('searchAudienceInsightsAttributes', [$params], GoogleAdsSearchads360V23ServicesListAudienceInsightsAttributesResponse::class);
  }
  /**
   * Starts Identity Verification for a given verification program type. Statuses
   * are returned. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (customers.startIdentityVerification)
   *
   * @param string $customerId Required. The Id of the customer for whom we are
   * creating this verification.
   * @param GoogleAdsSearchads360V23ServicesStartIdentityVerificationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function startIdentityVerification($customerId, GoogleAdsSearchads360V23ServicesStartIdentityVerificationRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('startIdentityVerification', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Suggests keyword themes to advertise on. (customers.suggestKeywordThemes)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesSuggestKeywordThemesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesSuggestKeywordThemesResponse
   * @throws \Google\Service\Exception
   */
  public function suggestKeywordThemes($customerId, GoogleAdsSearchads360V23ServicesSuggestKeywordThemesRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('suggestKeywordThemes', [$params], GoogleAdsSearchads360V23ServicesSuggestKeywordThemesResponse::class);
  }
  /**
   * Suggests a Smart campaign ad compatible with the Ad family of resources,
   * based on data points such as targeting and the business to advertise.
   * (customers.suggestSmartCampaignAd)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesSuggestSmartCampaignAdRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesSuggestSmartCampaignAdResponse
   * @throws \Google\Service\Exception
   */
  public function suggestSmartCampaignAd($customerId, GoogleAdsSearchads360V23ServicesSuggestSmartCampaignAdRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('suggestSmartCampaignAd', [$params], GoogleAdsSearchads360V23ServicesSuggestSmartCampaignAdResponse::class);
  }
  /**
   * Returns BudgetOption suggestions.
   * (customers.suggestSmartCampaignBudgetOptions)
   *
   * @param string $customerId Required. The ID of the customer whose budget
   * options are to be suggested.
   * @param GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponse
   * @throws \Google\Service\Exception
   */
  public function suggestSmartCampaignBudgetOptions($customerId, GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('suggestSmartCampaignBudgetOptions', [$params], GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponse::class);
  }
  /**
   * Returns Travel Asset suggestions. Asset suggestions are returned on a best-
   * effort basis. There are no guarantees that all possible asset types will be
   * returned for any given hotel property. (customers.suggestTravelAssets)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesSuggestTravelAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesSuggestTravelAssetsResponse
   * @throws \Google\Service\Exception
   */
  public function suggestTravelAssets($customerId, GoogleAdsSearchads360V23ServicesSuggestTravelAssetsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('suggestTravelAssets', [$params], GoogleAdsSearchads360V23ServicesSuggestTravelAssetsResponse::class);
  }
  /**
   * Uploads the given user data. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [CollectionSizeError]() [FieldError]() [HeaderError]()
   * [InternalError]() [MutateError]() [OfflineUserDataJobError]() [QuotaError]()
   * [RequestError]() [UserDataError]() (customers.uploadUserData)
   *
   * @param string $customerId Required. The ID of the customer for which to
   * update the user data.
   * @param GoogleAdsSearchads360V23ServicesUploadUserDataRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesUploadUserDataResponse
   * @throws \Google\Service\Exception
   */
  public function uploadUserData($customerId, GoogleAdsSearchads360V23ServicesUploadUserDataRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('uploadUserData', [$params], GoogleAdsSearchads360V23ServicesUploadUserDataResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Customers::class, 'Google_Service_SA360_Resource_Customers');
