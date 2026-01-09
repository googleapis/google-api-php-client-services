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

class BackendServiceNetworkPassThroughLbTrafficPolicyZonalAffinity extends \Google\Model
{
  public const SPILLOVER_ZONAL_AFFINITY_DISABLED = 'ZONAL_AFFINITY_DISABLED';
  public const SPILLOVER_ZONAL_AFFINITY_SPILL_CROSS_ZONE = 'ZONAL_AFFINITY_SPILL_CROSS_ZONE';
  public const SPILLOVER_ZONAL_AFFINITY_STAY_WITHIN_ZONE = 'ZONAL_AFFINITY_STAY_WITHIN_ZONE';
  /**
   * This field indicates whether zonal affinity is enabled or not. The possible
   * values are:        - ZONAL_AFFINITY_DISABLED: Default Value. Zonal Affinity
   * is disabled. The load balancer distributes new connections to all
   * healthy backend endpoints across all zones.    -
   * ZONAL_AFFINITY_STAY_WITHIN_ZONE: Zonal Affinity is    enabled. The load
   * balancer distributes new connections to all healthy    backend endpoints in
   * the local zone only. If there are no healthy    backend endpoints in the
   * local zone, the load balancer distributes    new connections to all backend
   * endpoints in the local zone.    - ZONAL_AFFINITY_SPILL_CROSS_ZONE: Zonal
   * Affinity is    enabled. The load balancer distributes new connections to
   * all healthy    backend endpoints in the local zone only. If there aren't
   * enough    healthy backend endpoints in the local zone, the load balancer
   * distributes new connections to all healthy backend endpoints across all
   * zones.
   *
   * @var string
   */
  public $spillover;
  /**
   * The value of the field must be in [0, 1]. When the ratio of the count of
   * healthy backend endpoints in a zone to the count of backend endpoints in
   * that same zone is equal to or above this threshold, the load balancer
   * distributes new connections to all healthy endpoints in the local zone
   * only. When the ratio of the count of healthy backend endpoints in a zone to
   * the count of backend endpoints in that same zone is below this threshold,
   * the load balancer distributes all new connections to all healthy endpoints
   * across all zones.
   *
   * @var float
   */
  public $spilloverRatio;

  /**
   * This field indicates whether zonal affinity is enabled or not. The possible
   * values are:        - ZONAL_AFFINITY_DISABLED: Default Value. Zonal Affinity
   * is disabled. The load balancer distributes new connections to all
   * healthy backend endpoints across all zones.    -
   * ZONAL_AFFINITY_STAY_WITHIN_ZONE: Zonal Affinity is    enabled. The load
   * balancer distributes new connections to all healthy    backend endpoints in
   * the local zone only. If there are no healthy    backend endpoints in the
   * local zone, the load balancer distributes    new connections to all backend
   * endpoints in the local zone.    - ZONAL_AFFINITY_SPILL_CROSS_ZONE: Zonal
   * Affinity is    enabled. The load balancer distributes new connections to
   * all healthy    backend endpoints in the local zone only. If there aren't
   * enough    healthy backend endpoints in the local zone, the load balancer
   * distributes new connections to all healthy backend endpoints across all
   * zones.
   *
   * Accepted values: ZONAL_AFFINITY_DISABLED, ZONAL_AFFINITY_SPILL_CROSS_ZONE,
   * ZONAL_AFFINITY_STAY_WITHIN_ZONE
   *
   * @param self::SPILLOVER_* $spillover
   */
  public function setSpillover($spillover)
  {
    $this->spillover = $spillover;
  }
  /**
   * @return self::SPILLOVER_*
   */
  public function getSpillover()
  {
    return $this->spillover;
  }
  /**
   * The value of the field must be in [0, 1]. When the ratio of the count of
   * healthy backend endpoints in a zone to the count of backend endpoints in
   * that same zone is equal to or above this threshold, the load balancer
   * distributes new connections to all healthy endpoints in the local zone
   * only. When the ratio of the count of healthy backend endpoints in a zone to
   * the count of backend endpoints in that same zone is below this threshold,
   * the load balancer distributes all new connections to all healthy endpoints
   * across all zones.
   *
   * @param float $spilloverRatio
   */
  public function setSpilloverRatio($spilloverRatio)
  {
    $this->spilloverRatio = $spilloverRatio;
  }
  /**
   * @return float
   */
  public function getSpilloverRatio()
  {
    return $this->spilloverRatio;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BackendServiceNetworkPassThroughLbTrafficPolicyZonalAffinity::class, 'Google_Service_Compute_BackendServiceNetworkPassThroughLbTrafficPolicyZonalAffinity');
