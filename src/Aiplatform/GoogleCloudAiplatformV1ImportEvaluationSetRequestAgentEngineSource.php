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

class GoogleCloudAiplatformV1ImportEvaluationSetRequestAgentEngineSource extends \Google\Collection
{
  protected $collection_key = 'sessionIds';
  /**
   * Required. Location for the Agent Engine sessions.
   *
   * @var string
   */
  public $location;
  /**
   * Required. Project ID for the Agent Engine sessions.
   *
   * @var string
   */
  public $projectId;
  /**
   * Required. Reasoning Engine ID for the Agent Engine sessions.
   *
   * @var string
   */
  public $reasoningEngineId;
  /**
   * Required. Session IDs for the Agent Engine sessions to retrieve.
   *
   * @var string[]
   */
  public $sessionIds;

  /**
   * Required. Location for the Agent Engine sessions.
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Required. Project ID for the Agent Engine sessions.
   *
   * @param string $projectId
   */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /**
   * @return string
   */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /**
   * Required. Reasoning Engine ID for the Agent Engine sessions.
   *
   * @param string $reasoningEngineId
   */
  public function setReasoningEngineId($reasoningEngineId)
  {
    $this->reasoningEngineId = $reasoningEngineId;
  }
  /**
   * @return string
   */
  public function getReasoningEngineId()
  {
    return $this->reasoningEngineId;
  }
  /**
   * Required. Session IDs for the Agent Engine sessions to retrieve.
   *
   * @param string[] $sessionIds
   */
  public function setSessionIds($sessionIds)
  {
    $this->sessionIds = $sessionIds;
  }
  /**
   * @return string[]
   */
  public function getSessionIds()
  {
    return $this->sessionIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ImportEvaluationSetRequestAgentEngineSource::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ImportEvaluationSetRequestAgentEngineSource');
