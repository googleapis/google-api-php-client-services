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

namespace Google\Service\HomeGraphService;

class QueryResponsePayload extends \Google\Model
{
  protected $deviceMetadataType = DeviceMetadata::class;
  protected $deviceMetadataDataType = 'map';
  /**
   * States of the devices. Map of third-party device ID to struct of device
   * states.
   *
   * @var array[]
   */
  public $devices;
  protected $homeTraitPayloadType = HomeTraitPayload::class;
  protected $homeTraitPayloadDataType = 'map';

  /**
   * Map from the Trait ID (e.g., "action.devices.traits.OnOff") to its last
   * Spanner commit timestamp. If a trait has no recorded timestamp, it will be
   * omitted from this map.
   *
   * @param DeviceMetadata[] $deviceMetadata
   */
  public function setDeviceMetadata($deviceMetadata)
  {
    $this->deviceMetadata = $deviceMetadata;
  }
  /**
   * @return DeviceMetadata[]
   */
  public function getDeviceMetadata()
  {
    return $this->deviceMetadata;
  }
  /**
   * States of the devices. Map of third-party device ID to struct of device
   * states.
   *
   * @param array[] $devices
   */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /**
   * @return array[]
   */
  public function getDevices()
  {
    return $this->devices;
  }
  /**
   * Map of device IDs to their Unified Device Data Model (UDDM) trait payloads.
   * This field is populated when `device_view` is set to HOME_TRAIT_ONLY or
   * HOME_TRAIT_AND_SMART_HOME_TRAIT.
   *
   * @param HomeTraitPayload[] $homeTraitPayload
   */
  public function setHomeTraitPayload($homeTraitPayload)
  {
    $this->homeTraitPayload = $homeTraitPayload;
  }
  /**
   * @return HomeTraitPayload[]
   */
  public function getHomeTraitPayload()
  {
    return $this->homeTraitPayload;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryResponsePayload::class, 'Google_Service_HomeGraphService_QueryResponsePayload');
