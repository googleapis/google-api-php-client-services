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

namespace Google\Service\DiscoveryEngine;

class A2aV1StreamResponse extends \Google\Model
{
  protected $artifactUpdateType = A2aV1TaskArtifactUpdateEvent::class;
  protected $artifactUpdateDataType = '';
  protected $messageType = A2aV1Message::class;
  protected $messageDataType = '';
  protected $statusUpdateType = A2aV1TaskStatusUpdateEvent::class;
  protected $statusUpdateDataType = '';
  protected $taskType = A2aV1Task::class;
  protected $taskDataType = '';

  /**
   * @param A2aV1TaskArtifactUpdateEvent $artifactUpdate
   */
  public function setArtifactUpdate(A2aV1TaskArtifactUpdateEvent $artifactUpdate)
  {
    $this->artifactUpdate = $artifactUpdate;
  }
  /**
   * @return A2aV1TaskArtifactUpdateEvent
   */
  public function getArtifactUpdate()
  {
    return $this->artifactUpdate;
  }
  /**
   * @param A2aV1Message $message
   */
  public function setMessage(A2aV1Message $message)
  {
    $this->message = $message;
  }
  /**
   * @return A2aV1Message
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * @param A2aV1TaskStatusUpdateEvent $statusUpdate
   */
  public function setStatusUpdate(A2aV1TaskStatusUpdateEvent $statusUpdate)
  {
    $this->statusUpdate = $statusUpdate;
  }
  /**
   * @return A2aV1TaskStatusUpdateEvent
   */
  public function getStatusUpdate()
  {
    return $this->statusUpdate;
  }
  /**
   * @param A2aV1Task $task
   */
  public function setTask(A2aV1Task $task)
  {
    $this->task = $task;
  }
  /**
   * @return A2aV1Task
   */
  public function getTask()
  {
    return $this->task;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(A2aV1StreamResponse::class, 'Google_Service_DiscoveryEngine_A2aV1StreamResponse');
