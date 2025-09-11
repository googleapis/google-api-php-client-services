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

class InterconnectApplicationAwareInterconnect extends \Google\Collection
{
  protected $collection_key = 'shapeAveragePercentages';
  protected $bandwidthPercentagePolicyType = InterconnectApplicationAwareInterconnectBandwidthPercentagePolicy::class;
  protected $bandwidthPercentagePolicyDataType = '';
  /**
   * @var string
   */
  public $profileDescription;
  protected $shapeAveragePercentagesType = InterconnectApplicationAwareInterconnectBandwidthPercentage::class;
  protected $shapeAveragePercentagesDataType = 'array';
  protected $strictPriorityPolicyType = InterconnectApplicationAwareInterconnectStrictPriorityPolicy::class;
  protected $strictPriorityPolicyDataType = '';

  /**
   * @param InterconnectApplicationAwareInterconnectBandwidthPercentagePolicy
   */
  public function setBandwidthPercentagePolicy(InterconnectApplicationAwareInterconnectBandwidthPercentagePolicy $bandwidthPercentagePolicy)
  {
    $this->bandwidthPercentagePolicy = $bandwidthPercentagePolicy;
  }
  /**
   * @return InterconnectApplicationAwareInterconnectBandwidthPercentagePolicy
   */
  public function getBandwidthPercentagePolicy()
  {
    return $this->bandwidthPercentagePolicy;
  }
  /**
   * @param string
   */
  public function setProfileDescription($profileDescription)
  {
    $this->profileDescription = $profileDescription;
  }
  /**
   * @return string
   */
  public function getProfileDescription()
  {
    return $this->profileDescription;
  }
  /**
   * @param InterconnectApplicationAwareInterconnectBandwidthPercentage[]
   */
  public function setShapeAveragePercentages($shapeAveragePercentages)
  {
    $this->shapeAveragePercentages = $shapeAveragePercentages;
  }
  /**
   * @return InterconnectApplicationAwareInterconnectBandwidthPercentage[]
   */
  public function getShapeAveragePercentages()
  {
    return $this->shapeAveragePercentages;
  }
  /**
   * @param InterconnectApplicationAwareInterconnectStrictPriorityPolicy
   */
  public function setStrictPriorityPolicy(InterconnectApplicationAwareInterconnectStrictPriorityPolicy $strictPriorityPolicy)
  {
    $this->strictPriorityPolicy = $strictPriorityPolicy;
  }
  /**
   * @return InterconnectApplicationAwareInterconnectStrictPriorityPolicy
   */
  public function getStrictPriorityPolicy()
  {
    return $this->strictPriorityPolicy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InterconnectApplicationAwareInterconnect::class, 'Google_Service_Compute_InterconnectApplicationAwareInterconnect');
