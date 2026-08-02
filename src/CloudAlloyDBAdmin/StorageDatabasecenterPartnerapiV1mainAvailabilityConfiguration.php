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

namespace Google\Service\CloudAlloyDBAdmin;

class StorageDatabasecenterPartnerapiV1mainAvailabilityConfiguration extends \Google\Model
{
  /**
   * Disable validation warnings
   */
  public const AVAILABILITY_TYPE_AVAILABILITY_TYPE_UNSPECIFIED = 'AVAILABILITY_TYPE_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const AVAILABILITY_TYPE_ZONAL = 'ZONAL';
  /**
   * Disable validation warnings
   */
  public const AVAILABILITY_TYPE_REGIONAL = 'REGIONAL';
  /**
   * Disable validation warnings
   */
  public const AVAILABILITY_TYPE_MULTI_REGIONAL = 'MULTI_REGIONAL';
  /**
   * Disable validation warnings
   */
  public const AVAILABILITY_TYPE_AVAILABILITY_TYPE_OTHER = 'AVAILABILITY_TYPE_OTHER';
  /**
   * Disable validation warnings
   *
   * @var bool
   */
  public $automaticFailoverRoutingConfigured;
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $availabilityType;
  /**
   * Disable validation warnings
   *
   * @var bool
   */
  public $crossRegionReplicaConfigured;
  /**
   * Disable validation warnings
   *
   * @var bool
   */
  public $externalReplicaConfigured;
  /**
   * Disable validation warnings
   *
   * @var bool
   */
  public $promotableReplicaConfigured;

  /**
   * Disable validation warnings
   *
   * @param bool $automaticFailoverRoutingConfigured
   */
  public function setAutomaticFailoverRoutingConfigured($automaticFailoverRoutingConfigured)
  {
    $this->automaticFailoverRoutingConfigured = $automaticFailoverRoutingConfigured;
  }
  /**
   * @return bool
   */
  public function getAutomaticFailoverRoutingConfigured()
  {
    return $this->automaticFailoverRoutingConfigured;
  }
  /**
   * Disable validation warnings
   *
   * Accepted values: AVAILABILITY_TYPE_UNSPECIFIED, ZONAL, REGIONAL,
   * MULTI_REGIONAL, AVAILABILITY_TYPE_OTHER
   *
   * @param self::AVAILABILITY_TYPE_* $availabilityType
   */
  public function setAvailabilityType($availabilityType)
  {
    $this->availabilityType = $availabilityType;
  }
  /**
   * @return self::AVAILABILITY_TYPE_*
   */
  public function getAvailabilityType()
  {
    return $this->availabilityType;
  }
  /**
   * Disable validation warnings
   *
   * @param bool $crossRegionReplicaConfigured
   */
  public function setCrossRegionReplicaConfigured($crossRegionReplicaConfigured)
  {
    $this->crossRegionReplicaConfigured = $crossRegionReplicaConfigured;
  }
  /**
   * @return bool
   */
  public function getCrossRegionReplicaConfigured()
  {
    return $this->crossRegionReplicaConfigured;
  }
  /**
   * Disable validation warnings
   *
   * @param bool $externalReplicaConfigured
   */
  public function setExternalReplicaConfigured($externalReplicaConfigured)
  {
    $this->externalReplicaConfigured = $externalReplicaConfigured;
  }
  /**
   * @return bool
   */
  public function getExternalReplicaConfigured()
  {
    return $this->externalReplicaConfigured;
  }
  /**
   * Disable validation warnings
   *
   * @param bool $promotableReplicaConfigured
   */
  public function setPromotableReplicaConfigured($promotableReplicaConfigured)
  {
    $this->promotableReplicaConfigured = $promotableReplicaConfigured;
  }
  /**
   * @return bool
   */
  public function getPromotableReplicaConfigured()
  {
    return $this->promotableReplicaConfigured;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainAvailabilityConfiguration::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainAvailabilityConfiguration');
