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

namespace Google\Service\GoogleHealthAPI;

class SleepSummary extends \Google\Collection
{
  protected $collection_key = 'stagesSummary';
  /**
   * Output only. Minutes after wake up calculated by restlessness algorithm.
   *
   * @var string
   */
  public $minutesAfterWakeUp;
  /**
   * Output only. Total number of minutes asleep. For classic sleep it is the
   * sum of ASLEEP stages (excluding AWAKE and RESTLESS). For "stages" sleep it
   * is the sum of LIGHT, REM and DEEP stages (excluding AWAKE).
   *
   * @var string
   */
  public $minutesAsleep;
  /**
   * Output only. Total number of minutes awake. It is a sum of all AWAKE
   * stages.
   *
   * @var string
   */
  public $minutesAwake;
  /**
   * Output only. Delta between wake time and bedtime. It is the sum of all
   * stages.
   *
   * @var string
   */
  public $minutesInSleepPeriod;
  /**
   * Output only. Minutes to fall asleep calculated by restlessness algorithm.
   *
   * @var string
   */
  public $minutesToFallAsleep;
  protected $stagesSummaryType = StageSummary::class;
  protected $stagesSummaryDataType = 'array';

  /**
   * Output only. Minutes after wake up calculated by restlessness algorithm.
   *
   * @param string $minutesAfterWakeUp
   */
  public function setMinutesAfterWakeUp($minutesAfterWakeUp)
  {
    $this->minutesAfterWakeUp = $minutesAfterWakeUp;
  }
  /**
   * @return string
   */
  public function getMinutesAfterWakeUp()
  {
    return $this->minutesAfterWakeUp;
  }
  /**
   * Output only. Total number of minutes asleep. For classic sleep it is the
   * sum of ASLEEP stages (excluding AWAKE and RESTLESS). For "stages" sleep it
   * is the sum of LIGHT, REM and DEEP stages (excluding AWAKE).
   *
   * @param string $minutesAsleep
   */
  public function setMinutesAsleep($minutesAsleep)
  {
    $this->minutesAsleep = $minutesAsleep;
  }
  /**
   * @return string
   */
  public function getMinutesAsleep()
  {
    return $this->minutesAsleep;
  }
  /**
   * Output only. Total number of minutes awake. It is a sum of all AWAKE
   * stages.
   *
   * @param string $minutesAwake
   */
  public function setMinutesAwake($minutesAwake)
  {
    $this->minutesAwake = $minutesAwake;
  }
  /**
   * @return string
   */
  public function getMinutesAwake()
  {
    return $this->minutesAwake;
  }
  /**
   * Output only. Delta between wake time and bedtime. It is the sum of all
   * stages.
   *
   * @param string $minutesInSleepPeriod
   */
  public function setMinutesInSleepPeriod($minutesInSleepPeriod)
  {
    $this->minutesInSleepPeriod = $minutesInSleepPeriod;
  }
  /**
   * @return string
   */
  public function getMinutesInSleepPeriod()
  {
    return $this->minutesInSleepPeriod;
  }
  /**
   * Output only. Minutes to fall asleep calculated by restlessness algorithm.
   *
   * @param string $minutesToFallAsleep
   */
  public function setMinutesToFallAsleep($minutesToFallAsleep)
  {
    $this->minutesToFallAsleep = $minutesToFallAsleep;
  }
  /**
   * @return string
   */
  public function getMinutesToFallAsleep()
  {
    return $this->minutesToFallAsleep;
  }
  /**
   * Output only. List of summaries (total duration and segment count) per each
   * sleep stage type.
   *
   * @param StageSummary[] $stagesSummary
   */
  public function setStagesSummary($stagesSummary)
  {
    $this->stagesSummary = $stagesSummary;
  }
  /**
   * @return StageSummary[]
   */
  public function getStagesSummary()
  {
    return $this->stagesSummary;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SleepSummary::class, 'Google_Service_GoogleHealthAPI_SleepSummary');
