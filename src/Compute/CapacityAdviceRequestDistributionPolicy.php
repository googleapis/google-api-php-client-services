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

namespace Google\Service\Compute;

class CapacityAdviceRequestDistributionPolicy extends \Google\Collection
{
  /**
   * Picks zones for creating VM instances to fulfill the requested number of
   * VMs within present resource constraints.
   */
  public const TARGET_SHAPE_ANY = 'ANY';
  /**
   * Creates all VM instances within a single zone. The zone is selected based
   * on the present resource constraints.
   */
  public const TARGET_SHAPE_ANY_SINGLE_ZONE = 'ANY_SINGLE_ZONE';
  /**
   * Prioritizes acquisition of resources, scheduling VMs in zones where
   * resources are available while distributing VMs as evenly as possible across
   * selected zones to minimize the impact of zonal failure.
   */
  public const TARGET_SHAPE_BALANCED = 'BALANCED';
  /**
   * Default value, unused.
   */
  public const TARGET_SHAPE_TARGET_SHAPE_UNSPECIFIED = 'TARGET_SHAPE_UNSPECIFIED';
  protected $collection_key = 'zones';
  /**
   * Target distribution shape. You can specify the following values:ANY,
   * ANY_SINGLE_ZONE, or BALANCED.
   *
   * @var string
   */
  public $targetShape;
  protected $zonesType = CapacityAdviceRequestDistributionPolicyZoneConfiguration::class;
  protected $zonesDataType = 'array';

  /**
   * Target distribution shape. You can specify the following values:ANY,
   * ANY_SINGLE_ZONE, or BALANCED.
   *
   * Accepted values: ANY, ANY_SINGLE_ZONE, BALANCED, TARGET_SHAPE_UNSPECIFIED
   *
   * @param self::TARGET_SHAPE_* $targetShape
   */
  public function setTargetShape($targetShape)
  {
    $this->targetShape = $targetShape;
  }
  /**
   * @return self::TARGET_SHAPE_*
   */
  public function getTargetShape()
  {
    return $this->targetShape;
  }
  /**
   * Zones where Capacity Advisor looks for capacity.
   *
   * @param CapacityAdviceRequestDistributionPolicyZoneConfiguration[] $zones
   */
  public function setZones($zones)
  {
    $this->zones = $zones;
  }
  /**
   * @return CapacityAdviceRequestDistributionPolicyZoneConfiguration[]
   */
  public function getZones()
  {
    return $this->zones;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityAdviceRequestDistributionPolicy::class, 'Google_Service_Compute_CapacityAdviceRequestDistributionPolicy');
