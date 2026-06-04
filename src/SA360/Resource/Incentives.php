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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesFetchIncentiveResponse;

/**
 * The "incentives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $incentives = $searchads360Service->incentives;
 *  </code>
 */
class Incentives extends \Google\Service\Resource
{
  /**
   * Returns incentives for a given user. (incentives.fetchIncentive)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string countryCode Optional. User's country code. If not provided,
   * the server will default to "US". Possible country codes:
   * https://developers.google.com/google-ads/api/data/codes-formats#country_codes
   * @opt_param string email Optional. Email of the user that the requested
   * incentive is meant for. Will be used for channel partners who do NOT use
   * OAuth to authenticate on behalf of user.
   * @opt_param string languageCode Optional. User's language code. If not
   * provided, the server will default to "en". Possible language codes:
   * https://developers.google.com/google-ads/api/data/codes-formats#languages
   * @opt_param string type Optional. The type of incentive to get. Defaults to
   * ACQUISITION.
   * @return GoogleAdsSearchads360V23ServicesFetchIncentiveResponse
   * @throws \Google\Service\Exception
   */
  public function fetchIncentive($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('fetchIncentive', [$params], GoogleAdsSearchads360V23ServicesFetchIncentiveResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Incentives::class, 'Google_Service_SA360_Resource_Incentives');
