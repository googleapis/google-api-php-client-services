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

class Message extends \Google\Collection
{
  protected $collection_key = 'chunks';
  protected $chunksType = Chunk::class;
  protected $chunksDataType = 'array';
  /**
   * Optional. Timestamp when the message was sent or received. Should not be
   * used if the message is part of an example.
   *
   * @var string
   */
  public $eventTime;
  /**
   * Optional. The role within the conversation, e.g., user, agent.
   *
   * @var string
   */
  public $role;

  /**
   * Optional. Content of the message as a series of chunks.
   *
   * @param Chunk[] $chunks
   */
  public function setChunks($chunks)
  {
    $this->chunks = $chunks;
  }
  /**
   * @return Chunk[]
   */
  public function getChunks()
  {
    return $this->chunks;
  }
  /**
   * Optional. Timestamp when the message was sent or received. Should not be
   * used if the message is part of an example.
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
  /**
   * Optional. The role within the conversation, e.g., user, agent.
   *
   * @param string $role
   */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /**
   * @return string
   */
  public function getRole()
  {
    return $this->role;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Message::class, 'Google_Service_CustomerEngagementSuite_Message');
