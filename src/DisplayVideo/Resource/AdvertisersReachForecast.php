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

namespace Google\Service\DisplayVideo\Resource;

use Google\Service\DisplayVideo\GenerateReachForecastRequest;
use Google\Service\DisplayVideo\GenerateReachForecastResponse;
use Google\Service\DisplayVideo\RetrievePlannableLocationsResponse;
use Google\Service\DisplayVideo\RetrievePlannableProductsResponse;
use Google\Service\DisplayVideo\RetrievePlannableUserInterestsResponse;
use Google\Service\DisplayVideo\RetrievePlannableUserListsResponse;

/**
 * The "reachForecast" collection of methods.
 * Typical usage is:
 *  <code>
 *   $displayvideoService = new Google\Service\DisplayVideo(...);
 *   $reachForecast = $displayvideoService->advertisers_reachForecast;
 *  </code>
 */
class AdvertisersReachForecast extends \Google\Service\Resource
{
  /**
   * Generates a reach forecast for a given advertiser and targeting
   * configuration. (reachForecast.generateReachForecast)
   *
   * @param string $advertiserId Required. The ID of the advertiser that will run
   * the planned campaign.
   * @param GenerateReachForecastRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GenerateReachForecastResponse
   * @throws \Google\Service\Exception
   */
  public function generateReachForecast($advertiserId, GenerateReachForecastRequest $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateReachForecast', [$params], GenerateReachForecastResponse::class);
  }
  /**
   * Retrieves the list of countries where reach forecasting is supported.
   * (reachForecast.retrievePlannableLocations)
   *
   * @param string $advertiserId Required. The ID of the advertiser to list
   * plannable locations for.
   * @param array $optParams Optional parameters.
   * @return RetrievePlannableLocationsResponse
   * @throws \Google\Service\Exception
   */
  public function retrievePlannableLocations($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('retrievePlannableLocations', [$params], RetrievePlannableLocationsResponse::class);
  }
  /**
   * Retrieves the list of products that can be planned for a location.
   * (reachForecast.retrievePlannableProducts)
   *
   * @param string $advertiserId Required. The ID of the advertiser to list
   * plannable products for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string plannableLocationId Required. The ID of the plannable
   * location.
   * @return RetrievePlannableProductsResponse
   * @throws \Google\Service\Exception
   */
  public function retrievePlannableProducts($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('retrievePlannableProducts', [$params], RetrievePlannableProductsResponse::class);
  }
  /**
   * Retrieves Google Audiences (User Interests) available for forecasting.
   * (reachForecast.retrievePlannableUserInterests)
   *
   * @param string $advertiserId Required. The ID of the advertiser to list
   * plannable user interests for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string productCategory Required. The product category to retrieve
   * plannable user interests for.
   * @return RetrievePlannableUserInterestsResponse
   * @throws \Google\Service\Exception
   */
  public function retrievePlannableUserInterests($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('retrievePlannableUserInterests', [$params], RetrievePlannableUserInterestsResponse::class);
  }
  /**
   * Retrieves first and third party user lists available for forecasting.
   * (reachForecast.retrievePlannableUserLists)
   *
   * @param string $advertiserId Required. The ID of the advertiser to retrieve
   * plannable user lists for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Allows filtering by plannable user list
   * properties. Supported syntax: * Filter expressions are made up of one or more
   * restrictions. * Restrictions can be combined by `AND` or `OR` logical
   * operators. * A restriction has the form of `{field} {operator} {value}`. *
   * The `displayName` field must use the `HAS (:)` operator. * All other fields
   * must use the `EQUALS (=)` operator. Supported fields: * `plannableStatus` *
   * `displayName` * `userListType` * `name` Examples: * All plannable user lists:
   * `plannableStatus="PLANNABLE"` * Plannable user lists with display name
   * containing "Shopping": `plannableStatus="PLANNABLE" AND
   * displayName:"Shopping"` * First party user lists:
   * `userListType="FIRST_PARTY"` The length of this field should be no more than
   * 500 characters. Reference our [filter `LIST` requests](/display-
   * video/api/guides/how-tos/filters) guide for more information.
   * @opt_param int pageSize Optional. Requested page size. Must be between `1`
   * and `5000`. If unspecified will default to `5000`.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return. Typically, this is the value of next_page_token
   * returned from the previous call to `RetrievePlannableUserLists` method. If
   * not specified, the first page of results will be returned.
   * @return RetrievePlannableUserListsResponse
   * @throws \Google\Service\Exception
   */
  public function retrievePlannableUserLists($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('retrievePlannableUserLists', [$params], RetrievePlannableUserListsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdvertisersReachForecast::class, 'Google_Service_DisplayVideo_Resource_AdvertisersReachForecast');
