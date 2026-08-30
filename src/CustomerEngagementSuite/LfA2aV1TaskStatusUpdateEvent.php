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

class LfA2aV1TaskStatusUpdateEvent extends \Google\Model
{
  /**
   * Required. The ID of the context that the task belongs to.
   *
   * @var string
   */
  public $contextId;
  /**
   * Optional. Metadata associated with the task update.
   *
   * @var array[]
   */
  public $metadata;
  protected $statusType = LfA2aV1TaskStatus::class;
  protected $statusDataType = '';
  /**
   * Required. The ID of the task that has changed.
   *
   * @var string
   */
  public $taskId;

  /**
   * Required. The ID of the context that the task belongs to.
   *
   * @param string $contextId
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
   * Optional. Metadata associated with the task update.
   *
   * @param array[] $metadata
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
   * Required. The new status of the task.
   *
   * @param LfA2aV1TaskStatus $status
   */
  public function setStatus(LfA2aV1TaskStatus $status)
  {
    $this->status = $status;
  }
  /**
   * @return LfA2aV1TaskStatus
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Required. The ID of the task that has changed.
   *
   * @param string $taskId
   */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /**
   * @return string
   */
  public function getTaskId()
  {
    return $this->taskId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1TaskStatusUpdateEvent::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1TaskStatusUpdateEvent');
