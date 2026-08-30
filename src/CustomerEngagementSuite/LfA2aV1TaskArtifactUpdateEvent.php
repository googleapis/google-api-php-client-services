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

class LfA2aV1TaskArtifactUpdateEvent extends \Google\Model
{
  /**
   * If true, the content of this artifact should be appended to a previously
   * sent artifact with the same ID.
   *
   * @var bool
   */
  public $append;
  protected $artifactType = LfA2aV1Artifact::class;
  protected $artifactDataType = '';
  /**
   * Required. The ID of the context that this task belongs to.
   *
   * @var string
   */
  public $contextId;
  /**
   * If true, this is the final chunk of the artifact.
   *
   * @var bool
   */
  public $lastChunk;
  /**
   * Optional. Metadata associated with the artifact update.
   *
   * @var array[]
   */
  public $metadata;
  /**
   * Required. The ID of the task for this artifact.
   *
   * @var string
   */
  public $taskId;

  /**
   * If true, the content of this artifact should be appended to a previously
   * sent artifact with the same ID.
   *
   * @param bool $append
   */
  public function setAppend($append)
  {
    $this->append = $append;
  }
  /**
   * @return bool
   */
  public function getAppend()
  {
    return $this->append;
  }
  /**
   * Required. The artifact that was generated or updated.
   *
   * @param LfA2aV1Artifact $artifact
   */
  public function setArtifact(LfA2aV1Artifact $artifact)
  {
    $this->artifact = $artifact;
  }
  /**
   * @return LfA2aV1Artifact
   */
  public function getArtifact()
  {
    return $this->artifact;
  }
  /**
   * Required. The ID of the context that this task belongs to.
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
   * If true, this is the final chunk of the artifact.
   *
   * @param bool $lastChunk
   */
  public function setLastChunk($lastChunk)
  {
    $this->lastChunk = $lastChunk;
  }
  /**
   * @return bool
   */
  public function getLastChunk()
  {
    return $this->lastChunk;
  }
  /**
   * Optional. Metadata associated with the artifact update.
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
   * Required. The ID of the task for this artifact.
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
class_alias(LfA2aV1TaskArtifactUpdateEvent::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1TaskArtifactUpdateEvent');
