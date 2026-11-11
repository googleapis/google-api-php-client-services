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

namespace Google\Service\CustomerEngagementSuite;

class ExperimentConfigVersionRelease extends \Google\Collection
{
  /**
   * Unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Deprecated: This state is no longer used.
   */
  public const STATE_PENDING = 'PENDING';
  /**
   * Running state. Experiment is running and valid.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * Deprecated: This state is no longer used.
   */
  public const STATE_DONE = 'DONE';
  /**
   * Deprecated: This state is no longer used.
   */
  public const STATE_EXPIRED = 'EXPIRED';
  protected $collection_key = 'trafficAllocations';
  /**
   * Optional. State of the version release.
   *
   * @var string
   */
  public $state;
  protected $trafficAllocationsType = ExperimentConfigVersionReleaseTrafficAllocation::class;
  protected $trafficAllocationsDataType = 'array';

  /**
   * Optional. State of the version release.
   *
   * Accepted values: STATE_UNSPECIFIED, PENDING, RUNNING, DONE, EXPIRED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Optional. Traffic allocations for the version release. When non-empty, the
   * `traffic_percentage` values across all allocations must sum to `100`,
   * representing the split of remaining non-study traffic.
   *
   * @param ExperimentConfigVersionReleaseTrafficAllocation[] $trafficAllocations
   */
  public function setTrafficAllocations($trafficAllocations)
  {
    $this->trafficAllocations = $trafficAllocations;
  }
  /**
   * @return ExperimentConfigVersionReleaseTrafficAllocation[]
   */
  public function getTrafficAllocations()
  {
    return $this->trafficAllocations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExperimentConfigVersionRelease::class, 'Google_Service_CustomerEngagementSuite_ExperimentConfigVersionRelease');
