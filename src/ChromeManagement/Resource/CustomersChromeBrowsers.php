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

namespace Google\Service\ChromeManagement\Resource;

use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1ChromeBrowser;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1ListChromeBrowsersResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1MoveChromeBrowsersRequest;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1MoveChromeBrowsersResponse;
use Google\Service\ChromeManagement\GoogleProtobufEmpty;

/**
 * The "chromeBrowsers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chromemanagementService = new Google\Service\ChromeManagement(...);
 *   $chromeBrowsers = $chromemanagementService->customers_chromeBrowsers;
 *  </code>
 */
class CustomersChromeBrowsers extends \Google\Service\Resource
{
  /**
   * Deletes the data collected from a Chrome browser profile.
   * (chromeBrowsers.delete)
   *
   * @param string $name Required. Format:
   * customers/{customer_id}/chromeBrowsers/{browser_permanent_id}
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Retrieves a single Chrome Browser identified by its customer ID and resource
   * ID. (chromeBrowsers.get)
   *
   * @param string $name Required. Format:
   * customers/{customer_id}/chromeBrowsers/{browser_permanent_id}
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1ChromeBrowser
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleChromeManagementVersionsV1ChromeBrowser::class);
  }
  /**
   * Retrieves all Chrome Browsers of a customer (paginated).
   * (chromeBrowsers.listCustomersChromeBrowsers)
   *
   * @param string $parent Required. Format: customers/{customer_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The filter used to filter browsers. The
   * following fields can be used in the filter: * `browser_permanent_id` *
   * `virtual_device_id` * `last_policy_fetch_time` * `os_platform` *
   * `os_architecture` * `os_version` * `machine_name` * `annotated_location` *
   * `annotated_user` * `annotated_asset_id` * `annotated_note` * `org_unit_path`
   * * `org_unit_id` * `last_registration_time` * `os_platform_version` *
   * `browser_version` * `last_status_report_time` * `extension_count` *
   * `policy_count` * `last_device_user` * `last_activity_time` *
   * `device_id_collision` The following functions can be used in the filter: *
   * `in_group(string)`: Filters browsers that belong to the specified Cloud
   * Identity group resource name (e.g. `in_group("groups/{group_id}")`). Any of
   * the above fields or functions can be used to specify a filter, and filtering
   * by multiple fields or functions is supported with AND operator. String type,
   * Integer type fields and enum type fields support `=` and `:` operators. The
   * timestamp type fields support `=`, `<=` and `>=` operators. Timestamps expect
   * an RFC-3339 formatted string enclosed in double quotes (e.g.,
   * `"2012-04-21T11:30:00-04:00"`). Wildcard `*` is only supported for
   * `machine_name`, `annotated_asset_id`, and `browser_version`. In addition,
   * global string literal filtering without a field name is supported: a single
   * term (e.g., `ABC`) matches if any indexed string field contains `ABC`, and
   * multiple terms joined by `AND` or whitespace (e.g., `machine AND 73` or
   * `machine 73`) match browsers where every term appears in at least one indexed
   * string field (whereas a single quoted phrase like `"machine 73"` matches the
   * contiguous phrase within a single field).
   * @opt_param string orderBy Optional. The fields used to specify the ordering
   * of the results. The supported fields are: * `browser_permanent_id` *
   * `virtual_device_id` * `last_policy_fetch_time` * `annotated_user` *
   * `annotated_location` * `annotated_asset_id` * `annotated_notes` *
   * `org_unit_path` * `os_version` * `last_registration_time` * `extension_count`
   * * `policy_count` * `last_device_user` * `machine_name` *
   * `browser_version_channel` * `os_platform_version` * `last_activity_time` *
   * `browser_version` By default, sorting is in ascending order, to specify
   * descending order for a field, a suffix ` desc` should be added to the field
   * name. The default ordering is the ascending order of `browser_permanent_id`.
   * @opt_param int pageSize Optional. Maximum number of results to return.
   * Maximum and default are 100.
   * @opt_param string pageToken Optional. Token to specify next page in the list.
   * @return GoogleChromeManagementVersionsV1ListChromeBrowsersResponse
   * @throws \Google\Service\Exception
   */
  public function listCustomersChromeBrowsers($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleChromeManagementVersionsV1ListChromeBrowsersResponse::class);
  }
  /**
   * Moves managed Chrome Browsers to a new Organizational Unit (OU). If there is
   * an error while moving any of the browsers, none of the browsers will be
   * moved. (chromeBrowsers.move)
   *
   * @param string $parent Required. Format: customers/{customer_id}
   * @param GoogleChromeManagementVersionsV1MoveChromeBrowsersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1MoveChromeBrowsersResponse
   * @throws \Google\Service\Exception
   */
  public function move($parent, GoogleChromeManagementVersionsV1MoveChromeBrowsersRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('move', [$params], GoogleChromeManagementVersionsV1MoveChromeBrowsersResponse::class);
  }
  /**
   * Updates annotation information for a Chrome Browser. (chromeBrowsers.patch)
   *
   * @param string $name Identifier. Format:
   * customers/{customer_id}/chromeBrowsers/{browser_permanent_id}
   * @param GoogleChromeManagementVersionsV1ChromeBrowser $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The update mask that can be used to
   * specify which fields to update.
   * @return GoogleChromeManagementVersionsV1ChromeBrowser
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleChromeManagementVersionsV1ChromeBrowser $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleChromeManagementVersionsV1ChromeBrowser::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersChromeBrowsers::class, 'Google_Service_ChromeManagement_Resource_CustomersChromeBrowsers');
