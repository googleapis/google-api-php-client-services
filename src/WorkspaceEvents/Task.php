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

namespace Google\Service\WorkspaceEvents;

class Task extends \Google\Collection
{
  protected $collection_key = 'history';
  protected $artifactsType = Artifact::class;
  protected $artifactsDataType = 'array';
  /**
   * @var string
   */
  public $contextId;
  protected $historyType = Message::class;
  protected $historyDataType = 'array';
  /**
   * @var string
   */
  public $id;
  /**
   * @var array[]
   */
  public $metadata;
  protected $statusType = TaskStatus::class;
  protected $statusDataType = '';

  /**
   * @param Artifact[]
   */
  public function setArtifacts($artifacts)
  {
    $this->artifacts = $artifacts;
  }
  /**
   * @return Artifact[]
   */
  public function getArtifacts()
  {
    return $this->artifacts;
  }
  /**
   * @param string
   */
  public function setContextId($contextId)
  {
    $this->contextId = $contextId;
  }
  /**
   * @return string
   */
  public function getContextId()
  {
    return $this->contextId;
  }
  /**
   * @param Message[]
   */
  public function setHistory($history)
  {
    $this->history = $history;
  }
  /**
   * @return Message[]
   */
  public function getHistory()
  {
    return $this->history;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param array[]
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return array[]
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param TaskStatus
   */
  public function setStatus(TaskStatus $status)
  {
    $this->status = $status;
  }
  /**
   * @return TaskStatus
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Task::class, 'Google_Service_WorkspaceEvents_Task');
