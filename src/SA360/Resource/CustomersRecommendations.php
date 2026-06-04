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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesApplyRecommendationRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesApplyRecommendationResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesDismissRecommendationRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesDismissRecommendationResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateRecommendationsResponse;

/**
 * The "recommendations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $recommendations = $searchads360Service->customers_recommendations;
 *  </code>
 */
class CustomersRecommendations extends \Google\Service\Resource
{
  /**
   * Applies given recommendations with corresponding apply parameters. List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [DatabaseError]() [FieldError]() [HeaderError]() [InternalError]()
   * [MutateError]() [QuotaError]() [RecommendationError]() [RequestError]()
   * [UrlFieldError]() (recommendations.apply)
   *
   * @param string $customerId Required. The ID of the customer with the
   * recommendation.
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationResponse
   * @throws \Google\Service\Exception
   */
  public function apply($customerId, GoogleAdsSearchads360V23ServicesApplyRecommendationRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('apply', [$params], GoogleAdsSearchads360V23ServicesApplyRecommendationResponse::class);
  }
  /**
   * Dismisses given recommendations. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RecommendationError]() [RequestError]()
   * (recommendations.dismiss)
   *
   * @param string $customerId Required. The ID of the customer with the
   * recommendation.
   * @param GoogleAdsSearchads360V23ServicesDismissRecommendationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesDismissRecommendationResponse
   * @throws \Google\Service\Exception
   */
  public function dismiss($customerId, GoogleAdsSearchads360V23ServicesDismissRecommendationRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', [$params], GoogleAdsSearchads360V23ServicesDismissRecommendationResponse::class);
  }
  /**
   * Generates Recommendations based off the requested recommendation_types. List
   * of thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [HeaderError]() [InternalError]() [QuotaError]() [RecommendationError]()
   * [RequestError]() (recommendations.generate)
   *
   * @param string $customerId Required. The ID of the customer generating
   * recommendations.
   * @param GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateRecommendationsResponse
   * @throws \Google\Service\Exception
   */
  public function generate($customerId, GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generate', [$params], GoogleAdsSearchads360V23ServicesGenerateRecommendationsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersRecommendations::class, 'Google_Service_SA360_Resource_CustomersRecommendations');
