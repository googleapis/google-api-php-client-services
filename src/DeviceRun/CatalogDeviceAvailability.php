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

namespace Google\Service\DeviceRun;

class CatalogDeviceAvailability extends \Google\Model
{
  /**
   * The value of availability is unknown or unset.
   */
  public const AVAILABLE_AVAILABILITY_UNSPECIFIED = 'AVAILABILITY_UNSPECIFIED';
  /**
   * No devices of this configuration are currently idle. A request can still be
   * made, but it will queue until a device frees up. Expect longer wait times,
   * and avoid requesting many devices at once (e.g. high shard counts).
   */
  public const AVAILABLE_AVAILABILITY_NONE = 'AVAILABILITY_NONE';
  /**
   * A small number of devices are currently idle. Suitable for a few concurrent
   * requests. Larger bursts (e.g. many shards) may queue until devices free up.
   */
  public const AVAILABLE_AVAILABILITY_LOW = 'AVAILABILITY_LOW';
  /**
   * A moderate number of devices are currently idle. Suitable for a moderate
   * number of concurrent requests. Very large bursts may still queue.
   */
  public const AVAILABLE_AVAILABILITY_MEDIUM = 'AVAILABILITY_MEDIUM';
  /**
   * Many devices are currently idle. Suitable for a large number of concurrent
   * requests with little to no queueing at the moment of observation.
   */
  public const AVAILABLE_AVAILABILITY_HIGH = 'AVAILABILITY_HIGH';
  /**
   * The value of device capacity is unknown or unset.
   */
  public const CAPACITY_CAPACITY_UNSPECIFIED = 'CAPACITY_UNSPECIFIED';
  /**
   * No online devices of this configuration. These devices are unavailable
   * either temporarily or permanently and should not be requested. If the
   * device is also marked as deprecated, this state is very likely permanent.
   */
  public const CAPACITY_CAPACITY_NONE = 'CAPACITY_NONE';
  /**
   * Devices that are low in capacity (the lab has a small number of these
   * devices). These devices may be used if users need to test on this specific
   * device model and version. Please note that due to low capacity, the tests
   * may take much longer to finish, especially if a large number of tests are
   * invoked at once. These devices are not suitable for test sharding.
   */
  public const CAPACITY_CAPACITY_LOW = 'CAPACITY_LOW';
  /**
   * Devices that are medium in capacity (the lab has a decent number of these
   * devices, though not as many as high capacity devices). These devices are
   * suitable for fewer test runs (e.g. fewer than 100 tests) and only for low
   * shard counts (e.g. less than 10 shards).
   */
  public const CAPACITY_CAPACITY_MEDIUM = 'CAPACITY_MEDIUM';
  /**
   * Devices that are high in capacity (the lab has a large number of these
   * devices). These devices are generally suggested for running a large number
   * of simultaneous tests (e.g. more than 100 tests). Please note that high
   * capacity devices do not guarantee short wait times due to several factors:
   * 1. Traffic (how heavily they are used at any given moment). 2. High
   * capacity devices are prioritized for certain usages, which may cause user
   * tests to be slower than selecting other similar device types.
   */
  public const CAPACITY_CAPACITY_HIGH = 'CAPACITY_HIGH';
  /**
   * Output only. Specifies the current availability bucket (idle, immediately
   * allocatable devices) for this device configuration. This is a best-effort
   * snapshot, refreshed periodically. It fluctuates depending on traffic as
   * other requests allocate devices.
   *
   * @var string
   */
  public $available;
  /**
   * Output only. Specifies the current capacity bucket for this device
   * configuration. Represents the total number of online devices (idle or in
   * use).
   *
   * @var string
   */
  public $capacity;

  /**
   * Output only. Specifies the current availability bucket (idle, immediately
   * allocatable devices) for this device configuration. This is a best-effort
   * snapshot, refreshed periodically. It fluctuates depending on traffic as
   * other requests allocate devices.
   *
   * Accepted values: AVAILABILITY_UNSPECIFIED, AVAILABILITY_NONE,
   * AVAILABILITY_LOW, AVAILABILITY_MEDIUM, AVAILABILITY_HIGH
   *
   * @param self::AVAILABLE_* $available
   */
  public function setAvailable($available)
  {
    $this->available = $available;
  }
  /**
   * @return self::AVAILABLE_*
   */
  public function getAvailable()
  {
    return $this->available;
  }
  /**
   * Output only. Specifies the current capacity bucket for this device
   * configuration. Represents the total number of online devices (idle or in
   * use).
   *
   * Accepted values: CAPACITY_UNSPECIFIED, CAPACITY_NONE, CAPACITY_LOW,
   * CAPACITY_MEDIUM, CAPACITY_HIGH
   *
   * @param self::CAPACITY_* $capacity
   */
  public function setCapacity($capacity)
  {
    $this->capacity = $capacity;
  }
  /**
   * @return self::CAPACITY_*
   */
  public function getCapacity()
  {
    return $this->capacity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogDeviceAvailability::class, 'Google_Service_DeviceRun_CatalogDeviceAvailability');
