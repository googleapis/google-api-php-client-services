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

class TurnResumeSnapshot extends \Google\Collection
{
  protected $collection_key = 'events';
  protected $eventsType = StreamChatAiAssistantResponse::class;
  protected $eventsDataType = 'array';
  /**
   * When the turn will be wound down if no client remains attached.
   *
   * @var string
   */
  public $orphanDeadlineTime;
  /**
   * The position this snapshot represents. Live events follow with
   * sequence_number strictly greater than this. When lower than the
   * resume_from_sequence_number the client requested, flushed progress lags
   * what the client already rendered: the client must discard its rendered
   * content of this turn beyond this position before applying the snapshot.
   *
   * @var string
   */
  public $resolvedSequenceNumber;
  /**
   * Identifies the turn being attached to.
   *
   * @var string
   */
  public $turnId;

  /**
   * Compacted events reconstructing the turn's visible output, in render order,
   * using the same event shapes as live streaming.
   *
   * @param StreamChatAiAssistantResponse[] $events
   */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /**
   * @return StreamChatAiAssistantResponse[]
   */
  public function getEvents()
  {
    return $this->events;
  }
  /**
   * When the turn will be wound down if no client remains attached.
   *
   * @param string $orphanDeadlineTime
   */
  public function setOrphanDeadlineTime($orphanDeadlineTime)
  {
    $this->orphanDeadlineTime = $orphanDeadlineTime;
  }
  /**
   * @return string
   */
  public function getOrphanDeadlineTime()
  {
    return $this->orphanDeadlineTime;
  }
  /**
   * The position this snapshot represents. Live events follow with
   * sequence_number strictly greater than this. When lower than the
   * resume_from_sequence_number the client requested, flushed progress lags
   * what the client already rendered: the client must discard its rendered
   * content of this turn beyond this position before applying the snapshot.
   *
   * @param string $resolvedSequenceNumber
   */
  public function setResolvedSequenceNumber($resolvedSequenceNumber)
  {
    $this->resolvedSequenceNumber = $resolvedSequenceNumber;
  }
  /**
   * @return string
   */
  public function getResolvedSequenceNumber()
  {
    return $this->resolvedSequenceNumber;
  }
  /**
   * Identifies the turn being attached to.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TurnResumeSnapshot::class, 'Google_Service_CustomerEngagementSuite_TurnResumeSnapshot');
