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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesEffectiveFrequencyBreakdown extends \Google\Model
{
  /**
   * The number of users (including co-viewing users) reached for the associated
   * effective_frequency value.
   *
   * @var string
   */
  public $effectiveCoviewReach;
  /**
   * The effective frequency [1-10].
   *
   * @var int
   */
  public $effectiveFrequency;
  /**
   * The number of users (including co-viewing users) reached for the associated
   * effective_frequency value within the specified plan demographic.
   *
   * @var string
   */
  public $onTargetEffectiveCoviewReach;
  /**
   * The number of unique people reached at least effective_frequency times that
   * exactly matches the Targeting. Note that a minimum number of unique people
   * must be reached in order for data to be reported. If the minimum number is
   * not met, the on_target_reach value will be rounded to 0.
   *
   * @var string
   */
  public $onTargetReach;
  /**
   * Total number of unique people reached at least effective_frequency times.
   * This includes people that may fall outside the specified Targeting. Note
   * that a minimum number of unique people must be reached in order for data to
   * be reported. If the minimum number is not met, the total_reach value will
   * be rounded to 0.
   *
   * @var string
   */
  public $totalReach;

  /**
   * The number of users (including co-viewing users) reached for the associated
   * effective_frequency value.
   *
   * @param string $effectiveCoviewReach
   */
  public function setEffectiveCoviewReach($effectiveCoviewReach)
  {
    $this->effectiveCoviewReach = $effectiveCoviewReach;
  }
  /**
   * @return string
   */
  public function getEffectiveCoviewReach()
  {
    return $this->effectiveCoviewReach;
  }
  /**
   * The effective frequency [1-10].
   *
   * @param int $effectiveFrequency
   */
  public function setEffectiveFrequency($effectiveFrequency)
  {
    $this->effectiveFrequency = $effectiveFrequency;
  }
  /**
   * @return int
   */
  public function getEffectiveFrequency()
  {
    return $this->effectiveFrequency;
  }
  /**
   * The number of users (including co-viewing users) reached for the associated
   * effective_frequency value within the specified plan demographic.
   *
   * @param string $onTargetEffectiveCoviewReach
   */
  public function setOnTargetEffectiveCoviewReach($onTargetEffectiveCoviewReach)
  {
    $this->onTargetEffectiveCoviewReach = $onTargetEffectiveCoviewReach;
  }
  /**
   * @return string
   */
  public function getOnTargetEffectiveCoviewReach()
  {
    return $this->onTargetEffectiveCoviewReach;
  }
  /**
   * The number of unique people reached at least effective_frequency times that
   * exactly matches the Targeting. Note that a minimum number of unique people
   * must be reached in order for data to be reported. If the minimum number is
   * not met, the on_target_reach value will be rounded to 0.
   *
   * @param string $onTargetReach
   */
  public function setOnTargetReach($onTargetReach)
  {
    $this->onTargetReach = $onTargetReach;
  }
  /**
   * @return string
   */
  public function getOnTargetReach()
  {
    return $this->onTargetReach;
  }
  /**
   * Total number of unique people reached at least effective_frequency times.
   * This includes people that may fall outside the specified Targeting. Note
   * that a minimum number of unique people must be reached in order for data to
   * be reported. If the minimum number is not met, the total_reach value will
   * be rounded to 0.
   *
   * @param string $totalReach
   */
  public function setTotalReach($totalReach)
  {
    $this->totalReach = $totalReach;
  }
  /**
   * @return string
   */
  public function getTotalReach()
  {
    return $this->totalReach;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesEffectiveFrequencyBreakdown::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesEffectiveFrequencyBreakdown');
