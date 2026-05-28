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

namespace Google\Service\GoogleHealthAPI\Resource;

use Google\Service\GoogleHealthAPI\ListPairedDevicesResponse;
use Google\Service\GoogleHealthAPI\PairedDevice;

/**
 * The "pairedDevices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $healthService = new Google\Service\GoogleHealthAPI(...);
 *   $pairedDevices = $healthService->users_pairedDevices;
 *  </code>
 */
class UsersPairedDevices extends \Google\Service\Resource
{
  /**
   * Returns user's Device. (pairedDevices.get)
   *
   * @param string $name Required. The name of the device to retrieve. Format:
   * users/{user}/devices/{device}
   * @param array $optParams Optional parameters.
   * @return PairedDevice
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], PairedDevice::class);
  }
  /**
   * Returns the user's list of paired 1P trackers and smartwatches.
   * (pairedDevices.listUsersPairedDevices)
   *
   * @param string $parent Required. The parent, which owns this collection of
   * devices. Format: users/{user}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of devices to return.
   * The service may return fewer than this value. If unspecified, at most 5
   * devices will be returned. The maximum value is 100. values above 100 will be
   * coerced to 100.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListPairedDevices` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListPairedDevices` must match
   * the call that provided the page token.
   * @return ListPairedDevicesResponse
   * @throws \Google\Service\Exception
   */
  public function listUsersPairedDevices($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListPairedDevicesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UsersPairedDevices::class, 'Google_Service_GoogleHealthAPI_Resource_UsersPairedDevices');
