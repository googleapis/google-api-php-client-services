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

class GoogleAdsSearchads360V23ResourcesOfflineUserDataJobMetadata extends \Google\Model
{
  /**
   * Not specified.
   */
  public const MATCH_RATE_RANGE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Default value for match rate range.
   */
  public const MATCH_RATE_RANGE_UNKNOWN = 'UNKNOWN';
  /**
   * Match rate range for offline data upload entity is between 0% and 19%.
   */
  public const MATCH_RATE_RANGE_MATCH_RANGE_LESS_THAN_20 = 'MATCH_RANGE_LESS_THAN_20';
  /**
   * Match rate range for offline data upload entity is between 20% and 30%.
   */
  public const MATCH_RATE_RANGE_MATCH_RANGE_20_TO_30 = 'MATCH_RANGE_20_TO_30';
  /**
   * Match rate range for offline data upload entity is between 31% and 40%.
   */
  public const MATCH_RATE_RANGE_MATCH_RANGE_31_TO_40 = 'MATCH_RANGE_31_TO_40';
  /**
   * Match rate range for offline data upload entity is between 41% and 50%.
   */
  public const MATCH_RATE_RANGE_MATCH_RANGE_41_TO_50 = 'MATCH_RANGE_41_TO_50';
  /**
   * Match rate range for offline data upload entity is between 51% and 60%.
   */
  public const MATCH_RATE_RANGE_MATCH_RANGE_51_TO_60 = 'MATCH_RANGE_51_TO_60';
  /**
   * Match rate range for offline data upload entity is between 61% and 70%.
   */
  public const MATCH_RATE_RANGE_MATCH_RANGE_61_TO_70 = 'MATCH_RANGE_61_TO_70';
  /**
   * Match rate range for offline data upload entity is between 71% and 80%.
   */
  public const MATCH_RATE_RANGE_MATCH_RANGE_71_TO_80 = 'MATCH_RANGE_71_TO_80';
  /**
   * Match rate range for offline data upload entity is between 81% and 90%.
   */
  public const MATCH_RATE_RANGE_MATCH_RANGE_81_TO_90 = 'MATCH_RANGE_81_TO_90';
  /**
   * Match rate range for offline data upload entity is more than or equal to
   * 91%.
   */
  public const MATCH_RATE_RANGE_MATCH_RANGE_91_TO_100 = 'MATCH_RANGE_91_TO_100';
  /**
   * Output only. Match rate of the Customer Match user list upload. Describes
   * the estimated match rate when the status of the job is "RUNNING" and final
   * match rate when the final match rate is available after the status of the
   * job is "SUCCESS/FAILED".
   *
   * @var string
   */
  public $matchRateRange;

  /**
   * Output only. Match rate of the Customer Match user list upload. Describes
   * the estimated match rate when the status of the job is "RUNNING" and final
   * match rate when the final match rate is available after the status of the
   * job is "SUCCESS/FAILED".
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MATCH_RANGE_LESS_THAN_20,
   * MATCH_RANGE_20_TO_30, MATCH_RANGE_31_TO_40, MATCH_RANGE_41_TO_50,
   * MATCH_RANGE_51_TO_60, MATCH_RANGE_61_TO_70, MATCH_RANGE_71_TO_80,
   * MATCH_RANGE_81_TO_90, MATCH_RANGE_91_TO_100
   *
   * @param self::MATCH_RATE_RANGE_* $matchRateRange
   */
  public function setMatchRateRange($matchRateRange)
  {
    $this->matchRateRange = $matchRateRange;
  }
  /**
   * @return self::MATCH_RATE_RANGE_*
   */
  public function getMatchRateRange()
  {
    return $this->matchRateRange;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesOfflineUserDataJobMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesOfflineUserDataJobMetadata');
