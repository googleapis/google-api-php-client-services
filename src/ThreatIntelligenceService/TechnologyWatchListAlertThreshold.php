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

namespace Google\Service\ThreatIntelligenceService;

class TechnologyWatchListAlertThreshold extends \Google\Collection
{
  /**
   * Unspecified priority.
   */
  public const PRIORITY_MINIMUM_PRIORITY_UNSPECIFIED = 'PRIORITY_UNSPECIFIED';
  /**
   * Priority level 0.
   */
  public const PRIORITY_MINIMUM_P0 = 'P0';
  /**
   * Priority level 1.
   */
  public const PRIORITY_MINIMUM_P1 = 'P1';
  /**
   * Priority level 2.
   */
  public const PRIORITY_MINIMUM_P2 = 'P2';
  /**
   * Priority level 3.
   */
  public const PRIORITY_MINIMUM_P3 = 'P3';
  /**
   * Priority level 4.
   */
  public const PRIORITY_MINIMUM_P4 = 'P4';
  protected $collection_key = 'exploitationStates';
  /**
   * Optional. The minimum cvss V3 score for the alert. Ex: 7.0. Valid range is
   * [0.0, 10.0].
   *
   * @var float
   */
  public $cvssScoreMinimum;
  /**
   * Optional. The minimum epss score for the alert. Ex: 0.8. Valid range is
   * [0.0, 1.0].
   *
   * @var float
   */
  public $epssScoreMinimum;
  /**
   * Optional. The exploitation states of the alert.
   *
   * @var string[]
   */
  public $exploitationStates;
  /**
   * Optional. The minimum priority for the alert.
   *
   * @var string
   */
  public $priorityMinimum;

  /**
   * Optional. The minimum cvss V3 score for the alert. Ex: 7.0. Valid range is
   * [0.0, 10.0].
   *
   * @param float $cvssScoreMinimum
   */
  public function setCvssScoreMinimum($cvssScoreMinimum)
  {
    $this->cvssScoreMinimum = $cvssScoreMinimum;
  }
  /**
   * @return float
   */
  public function getCvssScoreMinimum()
  {
    return $this->cvssScoreMinimum;
  }
  /**
   * Optional. The minimum epss score for the alert. Ex: 0.8. Valid range is
   * [0.0, 1.0].
   *
   * @param float $epssScoreMinimum
   */
  public function setEpssScoreMinimum($epssScoreMinimum)
  {
    $this->epssScoreMinimum = $epssScoreMinimum;
  }
  /**
   * @return float
   */
  public function getEpssScoreMinimum()
  {
    return $this->epssScoreMinimum;
  }
  /**
   * Optional. The exploitation states of the alert.
   *
   * @param string[] $exploitationStates
   */
  public function setExploitationStates($exploitationStates)
  {
    $this->exploitationStates = $exploitationStates;
  }
  /**
   * @return string[]
   */
  public function getExploitationStates()
  {
    return $this->exploitationStates;
  }
  /**
   * Optional. The minimum priority for the alert.
   *
   * Accepted values: PRIORITY_UNSPECIFIED, P0, P1, P2, P3, P4
   *
   * @param self::PRIORITY_MINIMUM_* $priorityMinimum
   */
  public function setPriorityMinimum($priorityMinimum)
  {
    $this->priorityMinimum = $priorityMinimum;
  }
  /**
   * @return self::PRIORITY_MINIMUM_*
   */
  public function getPriorityMinimum()
  {
    return $this->priorityMinimum;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TechnologyWatchListAlertThreshold::class, 'Google_Service_ThreatIntelligenceService_TechnologyWatchListAlertThreshold');
