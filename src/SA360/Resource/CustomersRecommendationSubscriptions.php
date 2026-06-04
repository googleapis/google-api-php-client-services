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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateRecommendationSubscriptionRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateRecommendationSubscriptionResponse;

/**
 * The "recommendationSubscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $recommendationSubscriptions = $searchads360Service->customers_recommendationSubscriptions;
 *  </code>
 */
class CustomersRecommendationSubscriptions extends \Google\Service\Resource
{
  /**
   * Mutates given subscription with corresponding apply parameters. List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [DatabaseError]() [FieldError]() [HeaderError]() [InternalError]()
   * [MutateError]() [QuotaError]() [RecommendationError]()
   * [RecommendationSubscriptionError]() [RequestError]() [UrlFieldError]()
   * (recommendationSubscriptions.mutateRecommendationSubscription)
   *
   * @param string $customerId Required. The ID of the subscribing customer.
   * @param GoogleAdsSearchads360V23ServicesMutateRecommendationSubscriptionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateRecommendationSubscriptionResponse
   * @throws \Google\Service\Exception
   */
  public function mutateRecommendationSubscription($customerId, GoogleAdsSearchads360V23ServicesMutateRecommendationSubscriptionRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutateRecommendationSubscription', [$params], GoogleAdsSearchads360V23ServicesMutateRecommendationSubscriptionResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersRecommendationSubscriptions::class, 'Google_Service_SA360_Resource_CustomersRecommendationSubscriptions');
