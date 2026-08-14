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

namespace Google\Service\Games;

class PlayerGameEvent extends \Google\Model
{
  /**
   * Required. A unique client-generated UUID for this specific event instance.
   * Used for server-side idempotency and deduplication. Submitting an event
   * with a previously recorded event_id for the same player will be ignored.
   *
   * @var string
   */
  public $eventId;
  /**
   * Required. Client-defined name of the event (e.g., "run_completed",
   * "level_up"). Maximum length: 100 characters.
   *
   * @var string
   */
  public $eventName;
  protected $eventPropertiesType = PropertyValue::class;
  protected $eventPropertiesDataType = 'map';
  /**
   * Required. The time from the client when this specific event was performed.
   *
   * @var string
   */
  public $eventTime;

  /**
   * Required. A unique client-generated UUID for this specific event instance.
   * Used for server-side idempotency and deduplication. Submitting an event
   * with a previously recorded event_id for the same player will be ignored.
   *
   * @param string $eventId
   */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /**
   * @return string
   */
  public function getEventId()
  {
    return $this->eventId;
  }
  /**
   * Required. Client-defined name of the event (e.g., "run_completed",
   * "level_up"). Maximum length: 100 characters.
   *
   * @param string $eventName
   */
  public function setEventName($eventName)
  {
    $this->eventName = $eventName;
  }
  /**
   * @return string
   */
  public function getEventName()
  {
    return $this->eventName;
  }
  /**
   * Optional. Key-value properties providing details about the event. - Maximum
   * number of properties: 25. - Property key maximum length: 100 characters. -
   * String values within PropertyValue maximum length: 1024 characters.
   *
   * @param PropertyValue[] $eventProperties
   */
  public function setEventProperties($eventProperties)
  {
    $this->eventProperties = $eventProperties;
  }
  /**
   * @return PropertyValue[]
   */
  public function getEventProperties()
  {
    return $this->eventProperties;
  }
  /**
   * Required. The time from the client when this specific event was performed.
   *
   * @param string $eventTime
   */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /**
   * @return string
   */
  public function getEventTime()
  {
    return $this->eventTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlayerGameEvent::class, 'Google_Service_Games_PlayerGameEvent');
