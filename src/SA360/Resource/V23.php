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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateConversionRatesRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGenerateConversionRatesResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListBenchmarksAvailableDatesRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListBenchmarksAvailableDatesResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListBenchmarksLocationsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListBenchmarksLocationsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListBenchmarksProductsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListBenchmarksProductsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListBenchmarksSourcesRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListBenchmarksSourcesResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListPlannableLocationsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListPlannableLocationsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListPlannableProductsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListPlannableProductsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListPlannableUserInterestsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListPlannableUserInterestsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListPlannableUserListsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListPlannableUserListsResponse;

/**
 * The "v23" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $v23 = $searchads360Service->v23;
 *  </code>
 */
class V23 extends \Google\Service\Resource
{
  /**
   * Returns a collection of conversion rate suggestions for supported plannable
   * products. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (v23.generateConversionRates)
   *
   * @param GoogleAdsSearchads360V23ServicesGenerateConversionRatesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGenerateConversionRatesResponse
   * @throws \Google\Service\Exception
   */
  public function generateConversionRates(GoogleAdsSearchads360V23ServicesGenerateConversionRatesRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateConversionRates', [$params], GoogleAdsSearchads360V23ServicesGenerateConversionRatesResponse::class);
  }
  /**
   * Returns a date range that supports benchmarks. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [FieldError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RequestError]()
   * (v23.listBenchmarksAvailableDates)
   *
   * @param GoogleAdsSearchads360V23ServicesListBenchmarksAvailableDatesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListBenchmarksAvailableDatesResponse
   * @throws \Google\Service\Exception
   */
  public function listBenchmarksAvailableDates(GoogleAdsSearchads360V23ServicesListBenchmarksAvailableDatesRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('listBenchmarksAvailableDates', [$params], GoogleAdsSearchads360V23ServicesListBenchmarksAvailableDatesResponse::class);
  }
  /**
   * Returns the list of locations that support benchmarks (for example,
   * countries). List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [FieldError]() [HeaderError]() [InternalError]()
   * [QuotaError]() [RequestError]() (v23.listBenchmarksLocations)
   *
   * @param GoogleAdsSearchads360V23ServicesListBenchmarksLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListBenchmarksLocationsResponse
   * @throws \Google\Service\Exception
   */
  public function listBenchmarksLocations(GoogleAdsSearchads360V23ServicesListBenchmarksLocationsRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('listBenchmarksLocations', [$params], GoogleAdsSearchads360V23ServicesListBenchmarksLocationsResponse::class);
  }
  /**
   * Returns the list of products that supports benchmarks. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [FieldError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RequestError]()
   * (v23.listBenchmarksProducts)
   *
   * @param GoogleAdsSearchads360V23ServicesListBenchmarksProductsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListBenchmarksProductsResponse
   * @throws \Google\Service\Exception
   */
  public function listBenchmarksProducts(GoogleAdsSearchads360V23ServicesListBenchmarksProductsRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('listBenchmarksProducts', [$params], GoogleAdsSearchads360V23ServicesListBenchmarksProductsResponse::class);
  }
  /**
   * Returns the list of benchmarks sources (for example, Industry Verticals).
   * List of thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [FieldError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (v23.listBenchmarksSources)
   *
   * @param GoogleAdsSearchads360V23ServicesListBenchmarksSourcesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListBenchmarksSourcesResponse
   * @throws \Google\Service\Exception
   */
  public function listBenchmarksSources(GoogleAdsSearchads360V23ServicesListBenchmarksSourcesRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('listBenchmarksSources', [$params], GoogleAdsSearchads360V23ServicesListBenchmarksSourcesResponse::class);
  }
  /**
   * Returns the list of plannable locations (for example, countries). List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RequestError]()
   * (v23.listPlannableLocations)
   *
   * @param GoogleAdsSearchads360V23ServicesListPlannableLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListPlannableLocationsResponse
   * @throws \Google\Service\Exception
   */
  public function listPlannableLocations(GoogleAdsSearchads360V23ServicesListPlannableLocationsRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('listPlannableLocations', [$params], GoogleAdsSearchads360V23ServicesListPlannableLocationsResponse::class);
  }
  /**
   * Returns the list of per-location plannable YouTube ad formats with allowed
   * targeting. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (v23.listPlannableProducts)
   *
   * @param GoogleAdsSearchads360V23ServicesListPlannableProductsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListPlannableProductsResponse
   * @throws \Google\Service\Exception
   */
  public function listPlannableProducts(GoogleAdsSearchads360V23ServicesListPlannableProductsRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('listPlannableProducts', [$params], GoogleAdsSearchads360V23ServicesListPlannableProductsResponse::class);
  }
  /**
   * Returns the list of plannable user interests. A plannable user interest is
   * one that can be targeted in a reach forecast using
   * ReachPlanService.GenerateReachForecast. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [FieldError]() [HeaderError]()
   * [InternalError]() [ListOperationError]() [QuotaError]() [RequestError]()
   * [StringLengthError]() (v23.listPlannableUserInterests)
   *
   * @param GoogleAdsSearchads360V23ServicesListPlannableUserInterestsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListPlannableUserInterestsResponse
   * @throws \Google\Service\Exception
   */
  public function listPlannableUserInterests(GoogleAdsSearchads360V23ServicesListPlannableUserInterestsRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('listPlannableUserInterests', [$params], GoogleAdsSearchads360V23ServicesListPlannableUserInterestsResponse::class);
  }
  /**
   * Returns the list of plannable user lists with their plannable status. User
   * lists may not be plannable for a number of reasons, including: - They are
   * less than 10 days old. - They have a membership lifespan that is less than 30
   * days - They have less than 10,000 or more than 700,000 users. List of thrown
   * errors: [AuthenticationError]() [AuthorizationError]() [FieldError]()
   * [HeaderError]() [InternalError]() [QuotaError]() [RangeError]()
   * [ReachPlanError]() [RequestError]() (v23.listPlannableUserLists)
   *
   * @param GoogleAdsSearchads360V23ServicesListPlannableUserListsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListPlannableUserListsResponse
   * @throws \Google\Service\Exception
   */
  public function listPlannableUserLists(GoogleAdsSearchads360V23ServicesListPlannableUserListsRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('listPlannableUserLists', [$params], GoogleAdsSearchads360V23ServicesListPlannableUserListsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(V23::class, 'Google_Service_SA360_Resource_V23');
