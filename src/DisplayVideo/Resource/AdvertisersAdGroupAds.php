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

use Google\Service\DisplayVideo\AdGroupAd;
use Google\Service\DisplayVideo\DisplayvideoEmpty;
use Google\Service\DisplayVideo\ListAdGroupAdsResponse;

/**
 * The "adGroupAds" collection of methods.
 * Typical usage is:
 *  <code>
 *   $displayvideoService = new Google\Service\DisplayVideo(...);
 *   $adGroupAds = $displayvideoService->advertisers_adGroupAds;
 *  </code>
 */
class AdvertisersAdGroupAds extends \Google\Service\Resource
{
  /**
   * Creates an ad group ad. This method is only supported for Demand Gen ads.
   * Retrieval and management of Demand Gen resources is currently in beta. This
   * method is only available to allowlisted users. (adGroupAds.create)
   *
   * @param string $advertiserId Output only. The unique ID of the advertiser the
   * ad belongs to.
   * @param AdGroupAd $postBody
   * @param array $optParams Optional parameters.
   * @return AdGroupAd
   * @throws \Google\Service\Exception
   */
  public function create($advertiserId, AdGroupAd $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], AdGroupAd::class);
  }
  /**
   * Deletes an ad group ad. This method is only supported for Demand Gen ads.
   * Retrieval and management of Demand Gen resources is currently in beta. This
   * method is only available to allowlisted users. (adGroupAds.delete)
   *
   * @param string $advertiserId Required. The ID of the advertiser the ad belongs
   * to.
   * @param string $adGroupAdId Required. The ID of the ad to delete. Only Demand
   * Gen ads are supported.
   * @param array $optParams Optional parameters.
   * @return DisplayvideoEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($advertiserId, $adGroupAdId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'adGroupAdId' => $adGroupAdId];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DisplayvideoEmpty::class);
  }
  /**
   * Gets an ad group ad. (adGroupAds.get)
   *
   * @param string $advertiserId Required. The ID of the advertiser this ad group
   * ad belongs to.
   * @param string $adGroupAdId Required. The ID of the ad to fetch.
   * @param array $optParams Optional parameters.
   * @return AdGroupAd
   * @throws \Google\Service\Exception
   */
  public function get($advertiserId, $adGroupAdId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'adGroupAdId' => $adGroupAdId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AdGroupAd::class);
  }
  /**
   * Lists ad group ads. (adGroupAds.listAdvertisersAdGroupAds)
   *
   * @param string $advertiserId Required. The ID of the advertiser the ads belong
   * to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Allows filtering by ad group ad fields.
   * Supported syntax: * Filter expressions are made up of one or more
   * restrictions. * Restrictions can be combined by `AND` and `OR`. A sequence of
   * restrictions implicitly uses `AND`. * A restriction has the form of `{field}
   * {operator} {value}`. * All fields must use the `EQUALS (=)` operator.
   * Supported fields: * `adGroupId` * `displayName` * `entityStatus` *
   * `adGroupAdId` Examples: * All ad group ads under an ad group:
   * `adGroupId="1234"` * All ad group ads under an ad group with an entityStatus
   * of `ENTITY_STATUS_ACTIVE` or `ENTITY_STATUS_PAUSED`:
   * `(entityStatus="ENTITY_STATUS_ACTIVE" OR entityStatus="ENTITY_STATUS_PAUSED")
   * AND adGroupId="12345"` The length of this field should be no more than 500
   * characters. Reference our [filter `LIST` requests](/display-
   * video/api/guides/how-tos/filters) guide for more information.
   * @opt_param string orderBy Optional. Field by which to sort the list.
   * Acceptable values are: * `displayName` (default) * `entityStatus` The default
   * sorting order is ascending. To specify descending order for a field, a suffix
   * "desc" should be added to the field name. Example: `displayName desc`.
   * @opt_param int pageSize Optional. Requested page size. Must be between `1`
   * and `100`. If unspecified will default to `100`. Returns error code
   * `INVALID_ARGUMENT` if an invalid value is specified.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return. Typically, this is the value of next_page_token
   * returned from the previous call to `ListAdGroupAds` method. If not specified,
   * the first page of results will be returned.
   * @return ListAdGroupAdsResponse
   * @throws \Google\Service\Exception
   */
  public function listAdvertisersAdGroupAds($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAdGroupAdsResponse::class);
  }
  /**
   * Updates an ad group ad. This method is only supported for Demand Gen ads.
   * Retrieval and management of Demand Gen resources is currently in beta. This
   * method is only available to allowlisted users. (adGroupAds.patch)
   *
   * @param string $advertiserId Output only. The unique ID of the advertiser the
   * ad belongs to.
   * @param string $adGroupAdId Output only. The unique ID of the ad. Assigned by
   * the system.
   * @param AdGroupAd $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The mask to control which fields to
   * update.
   * @return AdGroupAd
   * @throws \Google\Service\Exception
   */
  public function patch($advertiserId, $adGroupAdId, AdGroupAd $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'adGroupAdId' => $adGroupAdId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], AdGroupAd::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdvertisersAdGroupAds::class, 'Google_Service_DisplayVideo_Resource_AdvertisersAdGroupAds');
