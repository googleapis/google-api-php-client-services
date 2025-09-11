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

namespace Google\Service\Spanner;

class PartitionEventRecord extends \Google\Collection
{
  protected $collection_key = 'moveOutEvents';
  /**
   * @var string
   */
  public $commitTimestamp;
  protected $moveInEventsType = MoveInEvent::class;
  protected $moveInEventsDataType = 'array';
  protected $moveOutEventsType = MoveOutEvent::class;
  protected $moveOutEventsDataType = 'array';
  /**
   * @var string
   */
  public $partitionToken;
  /**
   * @var string
   */
  public $recordSequence;

  /**
   * @param string
   */
  public function setCommitTimestamp($commitTimestamp)
  {
    $this->commitTimestamp = $commitTimestamp;
  }
  /**
   * @return string
   */
  public function getCommitTimestamp()
  {
    return $this->commitTimestamp;
  }
  /**
   * @param MoveInEvent[]
   */
  public function setMoveInEvents($moveInEvents)
  {
    $this->moveInEvents = $moveInEvents;
  }
  /**
   * @return MoveInEvent[]
   */
  public function getMoveInEvents()
  {
    return $this->moveInEvents;
  }
  /**
   * @param MoveOutEvent[]
   */
  public function setMoveOutEvents($moveOutEvents)
  {
    $this->moveOutEvents = $moveOutEvents;
  }
  /**
   * @return MoveOutEvent[]
   */
  public function getMoveOutEvents()
  {
    return $this->moveOutEvents;
  }
  /**
   * @param string
   */
  public function setPartitionToken($partitionToken)
  {
    $this->partitionToken = $partitionToken;
  }
  /**
   * @return string
   */
  public function getPartitionToken()
  {
    return $this->partitionToken;
  }
  /**
   * @param string
   */
  public function setRecordSequence($recordSequence)
  {
    $this->recordSequence = $recordSequence;
  }
  /**
   * @return string
   */
  public function getRecordSequence()
  {
    return $this->recordSequence;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionEventRecord::class, 'Google_Service_Spanner_PartitionEventRecord');
