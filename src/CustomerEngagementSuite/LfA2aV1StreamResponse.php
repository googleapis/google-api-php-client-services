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

class LfA2aV1StreamResponse extends \Google\Model
{
  protected $artifactUpdateType = LfA2aV1TaskArtifactUpdateEvent::class;
  protected $artifactUpdateDataType = '';
  protected $messageType = LfA2aV1Message::class;
  protected $messageDataType = '';
  protected $statusUpdateType = LfA2aV1TaskStatusUpdateEvent::class;
  protected $statusUpdateDataType = '';
  protected $taskType = LfA2aV1Task::class;
  protected $taskDataType = '';

  /**
   * An event indicating a task artifact update.
   *
   * @param LfA2aV1TaskArtifactUpdateEvent $artifactUpdate
   */
  public function setArtifactUpdate(LfA2aV1TaskArtifactUpdateEvent $artifactUpdate)
  {
    $this->artifactUpdate = $artifactUpdate;
  }
  /**
   * @return LfA2aV1TaskArtifactUpdateEvent
   */
  public function getArtifactUpdate()
  {
    return $this->artifactUpdate;
  }
  /**
   * A Message object containing a message from the agent.
   *
   * @param LfA2aV1Message $message
   */
  public function setMessage(LfA2aV1Message $message)
  {
    $this->message = $message;
  }
  /**
   * @return LfA2aV1Message
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * An event indicating a task status update.
   *
   * @param LfA2aV1TaskStatusUpdateEvent $statusUpdate
   */
  public function setStatusUpdate(LfA2aV1TaskStatusUpdateEvent $statusUpdate)
  {
    $this->statusUpdate = $statusUpdate;
  }
  /**
   * @return LfA2aV1TaskStatusUpdateEvent
   */
  public function getStatusUpdate()
  {
    return $this->statusUpdate;
  }
  /**
   * A Task object containing the current state of the task.
   *
   * @param LfA2aV1Task $task
   */
  public function setTask(LfA2aV1Task $task)
  {
    $this->task = $task;
  }
  /**
   * @return LfA2aV1Task
   */
  public function getTask()
  {
    return $this->task;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1StreamResponse::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1StreamResponse');
