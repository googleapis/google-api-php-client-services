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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1MemoryGenerationTriggerConfigGenerationTriggerRule extends \Google\Model
{
  /**
   * Optional. Specifies to trigger generation when the event count reaches this
   * limit.
   *
   * @var int
   */
  public $eventCount;
  /**
   * Optional. Specifies to trigger generation at a fixed interval. The duration
   * must have a minute-level granularity.
   *
   * @var string
   */
  public $fixedInterval;
  /**
   * Optional. Specifies to trigger generation if the stream is inactive for the
   * specified duration after the most recent event. The duration must have a
   * minute-level granularity.
   *
   * @var string
   */
  public $idleDuration;

  /**
   * Optional. Specifies to trigger generation when the event count reaches this
   * limit.
   *
   * @param int $eventCount
   */
  public function setEventCount($eventCount)
  {
    $this->eventCount = $eventCount;
  }
  /**
   * @return int
   */
  public function getEventCount()
  {
    return $this->eventCount;
  }
  /**
   * Optional. Specifies to trigger generation at a fixed interval. The duration
   * must have a minute-level granularity.
   *
   * @param string $fixedInterval
   */
  public function setFixedInterval($fixedInterval)
  {
    $this->fixedInterval = $fixedInterval;
  }
  /**
   * @return string
   */
  public function getFixedInterval()
  {
    return $this->fixedInterval;
  }
  /**
   * Optional. Specifies to trigger generation if the stream is inactive for the
   * specified duration after the most recent event. The duration must have a
   * minute-level granularity.
   *
   * @param string $idleDuration
   */
  public function setIdleDuration($idleDuration)
  {
    $this->idleDuration = $idleDuration;
  }
  /**
   * @return string
   */
  public function getIdleDuration()
  {
    return $this->idleDuration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1MemoryGenerationTriggerConfigGenerationTriggerRule::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1MemoryGenerationTriggerConfigGenerationTriggerRule');
