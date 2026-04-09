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

use Google\Service\DisplayVideo\AdGroup;
use Google\Service\DisplayVideo\BulkEditAdGroupAssignedTargetingOptionsRequest;
use Google\Service\DisplayVideo\BulkEditAdGroupAssignedTargetingOptionsResponse;
use Google\Service\DisplayVideo\BulkListAdGroupAssignedTargetingOptionsResponse;
use Google\Service\DisplayVideo\DisplayvideoEmpty;
use Google\Service\DisplayVideo\ListAdGroupsResponse;

/**
 * The "adGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $displayvideoService = new Google\Service\DisplayVideo(...);
 *   $adGroups = $displayvideoService->advertisers_adGroups;
 *  </code>
 */
class AdvertisersAdGroups extends \Google\Service\Resource
{
  /**
   * Bulk edits targeting options for multiple ad groups. The same set of delete
   * and create requests will be applied to all specified ad groups. Specifically,
   * the operation will delete the assigned targeting options provided in
   * BulkEditAdGroupAssignedTargetingOptionsRequest.delete_requests from each ad
   * group, and then create the assigned targeting options provided in
   * BulkEditAdGroupAssignedTargetingOptionsRequest.create_requests. This method
   * is only supported for Demand Gen ad groups. Retrieval and management of
   * Demand Gen resources is currently in beta. This method is only available to
   * allowlisted users. (adGroups.bulkEditAssignedTargetingOptions)
   *
   * @param string $advertiserId Required. The ID of the advertiser the ad groups
   * belong to.
   * @param BulkEditAdGroupAssignedTargetingOptionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return BulkEditAdGroupAssignedTargetingOptionsResponse
   * @throws \Google\Service\Exception
   */
  public function bulkEditAssignedTargetingOptions($advertiserId, BulkEditAdGroupAssignedTargetingOptionsRequest $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('bulkEditAssignedTargetingOptions', [$params], BulkEditAdGroupAssignedTargetingOptionsResponse::class);
  }
  /**
   * Lists assigned targeting options for multiple ad groups across targeting
   * types. Inherited assigned targeting options are not included.
   * (adGroups.bulkListAssignedTargetingOptions)
   *
   * @param string $advertiserId Required. The ID of the advertiser the line items
   * belongs to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string adGroupIds Required. The IDs of the ad groups to list
   * assigned targeting options for.
   * @opt_param string filter Optional. Allows filtering by assigned targeting
   * option fields. Supported syntax: * Filter expressions are made up of one or
   * more restrictions. * Restrictions can be combined by the logical operator
   * `OR`. * A restriction has the form of `{field} {operator} {value}`. * All
   * fields must use the `EQUALS (=)` operator. Supported fields: *
   * `targetingType` Examples: * `AssignedTargetingOption` resources of targeting
   * type `TARGETING_TYPE_YOUTUBE_VIDEO` or `TARGETING_TYPE_YOUTUBE_CHANNEL`:
   * `targetingType="TARGETING_TYPE_YOUTUBE_VIDEO" OR
   * targetingType="TARGETING_TYPE_YOUTUBE_CHANNEL"` The length of this field
   * should be no more than 500 characters. Reference our [filter `LIST`
   * requests](/display-video/api/guides/how-tos/filters) guide for more
   * information.
   * @opt_param string orderBy Optional. Field by which to sort the list.
   * Acceptable values are: * `adGroupId` (default) *
   * `assignedTargetingOption.targetingType` The default sorting order is
   * ascending. To specify descending order for a field, a suffix "desc" should be
   * added to the field name. Example: `targetingType desc`.
   * @opt_param int pageSize Optional. Requested page size. The size must be an
   * integer between `1` and `5000`. If unspecified, the default is `5000`.
   * Returns error code `INVALID_ARGUMENT` if an invalid value is specified.
   * @opt_param string pageToken Optional. A token that lets the client fetch the
   * next page of results. Typically, this is the value of next_page_token
   * returned from the previous call to the
   * `BulkListAdGroupAssignedTargetingOptions` method. If not specified, the first
   * page of results will be returned.
   * @return BulkListAdGroupAssignedTargetingOptionsResponse
   * @throws \Google\Service\Exception
   */
  public function bulkListAssignedTargetingOptions($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('bulkListAssignedTargetingOptions', [$params], BulkListAdGroupAssignedTargetingOptionsResponse::class);
  }
  /**
   * Creates a new ad group. Returns the newly created ad group if successful.
   * This method is only supported for Demand Gen ad groups. Retrieval and
   * management of Demand Gen resources is currently in beta. This method is only
   * available to allowlisted users. (adGroups.create)
   *
   * @param string $advertiserId Output only. The unique ID of the advertiser the
   * ad group belongs to.
   * @param AdGroup $postBody
   * @param array $optParams Optional parameters.
   * @return AdGroup
   * @throws \Google\Service\Exception
   */
  public function create($advertiserId, AdGroup $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], AdGroup::class);
  }
  /**
   * Deletes a AdGroup. Returns error code `NOT_FOUND` if the ad group does not
   * exist. This method is only supported for Demand Gen ad groups. Retrieval and
   * management of Demand Gen resources is currently in beta. This method is only
   * available to allowlisted users. (adGroups.delete)
   *
   * @param string $advertiserId Required. The ID of the advertiser this ad group
   * belongs to.
   * @param string $adGroupId Required. The ID of the ad group to delete.
   * @param array $optParams Optional parameters.
   * @return DisplayvideoEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($advertiserId, $adGroupId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'adGroupId' => $adGroupId];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DisplayvideoEmpty::class);
  }
  /**
   * Gets an ad group. (adGroups.get)
   *
   * @param string $advertiserId Required. The ID of the advertiser this ad group
   * belongs to.
   * @param string $adGroupId Required. The ID of the ad group to fetch.
   * @param array $optParams Optional parameters.
   * @return AdGroup
   * @throws \Google\Service\Exception
   */
  public function get($advertiserId, $adGroupId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'adGroupId' => $adGroupId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AdGroup::class);
  }
  /**
   * Lists ad groups. (adGroups.listAdvertisersAdGroups)
   *
   * @param string $advertiserId Required. The ID of the advertiser the ad groups
   * belongs to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Allows filtering by custom ad group
   * fields. Supported syntax: * Filter expressions are made up of one or more
   * restrictions. * Restrictions can be combined by `AND` and `OR`. A sequence of
   * restrictions implicitly uses `AND`. * A restriction has the form of `{field}
   * {operator} {value}`. * All fields must use the `EQUALS (=)` operator.
   * Supported properties: * `adGroupId` * `displayName` * `entityStatus` *
   * `lineItemId` * `adGroupFormat` Examples: * All ad groups under an line item:
   * `lineItemId="1234"` * All `ENTITY_STATUS_ACTIVE` or `ENTITY_STATUS_PAUSED`
   * `AD_GROUP_FORMAT_IN_STREAM` ad groups under an advertiser:
   * `(entityStatus="ENTITY_STATUS_ACTIVE" OR entityStatus="ENTITY_STATUS_PAUSED")
   * AND adGroupFormat="AD_GROUP_FORMAT_IN_STREAM"` The length of this field
   * should be no more than 500 characters. Reference our [filter `LIST`
   * requests](/display-video/api/guides/how-tos/filters) guide for more
   * information.
   * @opt_param string orderBy Optional. Field by which to sort the list.
   * Acceptable values are: * `displayName` (default) * `entityStatus` The default
   * sorting order is ascending. To specify descending order for a field, a suffix
   * "desc" should be added to the field name. Example: `displayName desc`.
   * @opt_param int pageSize Optional. Requested page size. Must be between `1`
   * and `200`. If unspecified will default to `100`. Returns error code
   * `INVALID_ARGUMENT` if an invalid value is specified.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return. Typically, this is the value of next_page_token
   * returned from the previous call to `ListAdGroups` method. If not specified,
   * the first page of results will be returned.
   * @return ListAdGroupsResponse
   * @throws \Google\Service\Exception
   */
  public function listAdvertisersAdGroups($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAdGroupsResponse::class);
  }
  /**
   * Updates an existing ad group. Returns the updated ad group if successful.
   * This method is only supported for Demand Gen ad groups. Retrieval and
   * management of Demand Gen resources is currently in beta. This method is only
   * available to allowlisted users. (adGroups.patch)
   *
   * @param string $advertiserId Output only. The unique ID of the advertiser the
   * ad group belongs to.
   * @param string $adGroupId Output only. The unique ID of the ad group. Assigned
   * by the system.
   * @param AdGroup $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The mask to control which fields to
   * update.
   * @return AdGroup
   * @throws \Google\Service\Exception
   */
  public function patch($advertiserId, $adGroupId, AdGroup $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'adGroupId' => $adGroupId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], AdGroup::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdvertisersAdGroups::class, 'Google_Service_DisplayVideo_Resource_AdvertisersAdGroups');
