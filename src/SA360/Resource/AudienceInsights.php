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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListInsightsEligibleDatesRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListInsightsEligibleDatesResponse;

/**
 * The "audienceInsights" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $audienceInsights = $searchads360Service->audienceInsights;
 *  </code>
 */
class AudienceInsights extends \Google\Service\Resource
{
  /**
   * Lists date ranges for which audience insights data can be requested. List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]() [FieldError]()
   * [HeaderError]() [InternalError]() [QuotaError]() [RangeError]()
   * [RequestError]() (audienceInsights.listInsightsEligibleDates)
   *
   * @param GoogleAdsSearchads360V23ServicesListInsightsEligibleDatesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListInsightsEligibleDatesResponse
   * @throws \Google\Service\Exception
   */
  public function listInsightsEligibleDates(GoogleAdsSearchads360V23ServicesListInsightsEligibleDatesRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('listInsightsEligibleDates', [$params], GoogleAdsSearchads360V23ServicesListInsightsEligibleDatesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudienceInsights::class, 'Google_Service_SA360_Resource_AudienceInsights');
