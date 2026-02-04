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

class GoogleCloudAiplatformV1AgentDataConversationTurn extends \Google\Collection
{
  protected $collection_key = 'events';
  protected $eventsType = GoogleCloudAiplatformV1AgentDataAgentEvent::class;
  protected $eventsDataType = 'array';
  /**
   * Optional. A unique identifier for the turn. Useful for referencing specific
   * turns across systems.
   *
   * @var string
   */
  public $turnId;
  /**
   * Optional. The 0-based index of the turn in the conversation sequence.
   *
   * @var int
   */
  public $turnIndex;

  /**
   * Optional. The list of events that occurred during this turn.
   *
   * @param GoogleCloudAiplatformV1AgentDataAgentEvent[] $events
   */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentDataAgentEvent[]
   */
  public function getEvents()
  {
    return $this->events;
  }
  /**
   * Optional. A unique identifier for the turn. Useful for referencing specific
   * turns across systems.
   *
   * @param string $turnId
   */
  public function setTurnId($turnId)
  {
    $this->turnId = $turnId;
  }
  /**
   * @return string
   */
  public function getTurnId()
  {
    return $this->turnId;
  }
  /**
   * Optional. The 0-based index of the turn in the conversation sequence.
   *
   * @param int $turnIndex
   */
  public function setTurnIndex($turnIndex)
  {
    $this->turnIndex = $turnIndex;
  }
  /**
   * @return int
   */
  public function getTurnIndex()
  {
    return $this->turnIndex;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentDataConversationTurn::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentDataConversationTurn');
