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

class HealthAggregationPoliciesScopedList extends \Google\Collection
{
  protected $collection_key = 'healthAggregationPolicies';
  protected $healthAggregationPoliciesType = HealthAggregationPolicy::class;
  protected $healthAggregationPoliciesDataType = 'array';
  protected $warningType = HealthAggregationPoliciesScopedListWarning::class;
  protected $warningDataType = '';

  /**
   * A list of HealthAggregationPolicys contained in this scope.
   *
   * @param HealthAggregationPolicy[] $healthAggregationPolicies
   */
  public function setHealthAggregationPolicies($healthAggregationPolicies)
  {
    $this->healthAggregationPolicies = $healthAggregationPolicies;
  }
  /**
   * @return HealthAggregationPolicy[]
   */
  public function getHealthAggregationPolicies()
  {
    return $this->healthAggregationPolicies;
  }
  /**
   * Informational warning which replaces the list of health aggregation
   * policies when the list is empty.
   *
   * @param HealthAggregationPoliciesScopedListWarning $warning
   */
  public function setWarning(HealthAggregationPoliciesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  /**
   * @return HealthAggregationPoliciesScopedListWarning
   */
  public function getWarning()
  {
    return $this->warning;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HealthAggregationPoliciesScopedList::class, 'Google_Service_Compute_HealthAggregationPoliciesScopedList');
