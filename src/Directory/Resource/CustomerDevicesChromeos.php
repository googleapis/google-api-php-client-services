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

namespace Google\Service\Directory\Resource;

use Google\Service\Directory\BatchChangeChromeOsDeviceStatusRequest;
use Google\Service\Directory\BatchChangeChromeOsDeviceStatusResponse;
use Google\Service\Directory\CountChromeOsDevicesResponse;
use Google\Service\Directory\DirectoryChromeosdevicesIssueCommandRequest;
use Google\Service\Directory\DirectoryChromeosdevicesIssueCommandResponse;

/**
 * The "chromeos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google\Service\Directory(...);
 *   $chromeos = $adminService->customer_devices_chromeos;
 *  </code>
 */
class CustomerDevicesChromeos extends \Google\Service\Resource
{
  /**
   * Changes the status of a batch of ChromeOS devices. For more information about
   * changing a ChromeOS device state [Repair, repurpose, or retire ChromeOS
   * devices](https://support.google.com/chrome/a/answer/3523633).
   * (chromeos.batchChangeStatus)
   *
   * @param string $customerId Required. Immutable ID of the Google Workspace
   * account.
   * @param BatchChangeChromeOsDeviceStatusRequest $postBody
   * @param array $optParams Optional parameters.
   * @return BatchChangeChromeOsDeviceStatusResponse
   * @throws \Google\Service\Exception
   */
  public function batchChangeStatus($customerId, BatchChangeChromeOsDeviceStatusRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchChangeStatus', [$params], BatchChangeChromeOsDeviceStatusResponse::class);
  }
  /**
   * Counts ChromeOS devices matching the request. (chromeos.countChromeOsDevices)
   *
   * @param string $customerId Required. Immutable ID of the Google Workspace
   * account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Search string in the format given at
   * https://developers.google.com/workspace/admin/directory/v1/list-query-
   * operators
   * @opt_param bool includeChildOrgunits Optional. Return devices from all child
   * orgunits, as well as the specified org unit. If this is set to true,
   * 'orgUnitPath' must be provided.
   * @opt_param string orgUnitPath Optional. The full path of the organizational
   * unit (minus the leading `/`) or its unique ID.
   * @return CountChromeOsDevicesResponse
   * @throws \Google\Service\Exception
   */
  public function countChromeOsDevices($customerId, $optParams = [])
  {
    $params = ['customerId' => $customerId];
    $params = array_merge($params, $optParams);
    return $this->call('countChromeOsDevices', [$params], CountChromeOsDevicesResponse::class);
  }
  /**
   * Issues a command for the device to execute. (chromeos.issueCommand)
   *
   * @param string $customerId Immutable. ID of the Google Workspace account.
   * @param string $deviceId Immutable. ID of Chrome OS Device.
   * @param DirectoryChromeosdevicesIssueCommandRequest $postBody
   * @param array $optParams Optional parameters.
   * @return DirectoryChromeosdevicesIssueCommandResponse
   * @throws \Google\Service\Exception
   */
  public function issueCommand($customerId, $deviceId, DirectoryChromeosdevicesIssueCommandRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'deviceId' => $deviceId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('issueCommand', [$params], DirectoryChromeosdevicesIssueCommandResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerDevicesChromeos::class, 'Google_Service_Directory_Resource_CustomerDevicesChromeos');
