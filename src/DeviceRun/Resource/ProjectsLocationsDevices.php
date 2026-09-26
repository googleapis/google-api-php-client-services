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

namespace Google\Service\DeviceRun\Resource;

use Google\Service\DeviceRun\CatalogDevice;
use Google\Service\DeviceRun\CatalogListDevicesResponse;

/**
 * The "devices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $devicerunService = new Google\Service\DeviceRun(...);
 *   $devices = $devicerunService->projects_locations_devices;
 *  </code>
 */
class ProjectsLocationsDevices extends \Google\Service\Resource
{
  /**
   * Returns information about a specific device. (devices.get)
   *
   * @param string $name Required. The name of the device. Format:
   * `projects/{project}/locations/global/devices/{device}`.
   * @param array $optParams Optional parameters.
   * @return CatalogDevice
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], CatalogDevice::class);
  }
  /**
   * Lists all devices. (devices.listProjectsLocationsDevices)
   *
   * @param string $parent Required. The parent of the collection of devices.
   * Format: `projects/{project}/locations/global`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An AIP-160 (https://google.aip.dev/160)
   * filter expression restricting which devices are returned. An empty filter
   * returns all devices. Filtering is supported over the `Device` fields,
   * including nested fields via dot-path. Enum and string values must be double-
   * quoted. Examples: * `platform = "ANDROID"` * `platform = "ANDROID" AND
   * os_version = "34"` * `hardware_type = "PHYSICAL" AND form_factor = "PHONE"` *
   * `android_details.build_type = "userdebug"` * `availability.capacity = "HIGH"`
   * @opt_param int pageSize Optional. The maximum number of devices to return.
   * The server may return fewer items than this value.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListDevices` call. Provide this to receive the subsequent page. When
   * paginating, all other parameters provided to `ListDevices` must match the
   * call that provided the page token.
   * @return CatalogListDevicesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsDevices($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], CatalogListDevicesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDevices::class, 'Google_Service_DeviceRun_Resource_ProjectsLocationsDevices');
