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

class GoogleCloudAiplatformV1AgentStatus extends \Google\Model
{
  /**
   * Unspecified agent state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The agent is active and ready to process requests.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The agent is suspended.
   */
  public const STATE_SUSPENDED = 'SUSPENDED';
  /**
   * The agent is archived (read-only).
   */
  public const STATE_ARCHIVED = 'ARCHIVED';
  /**
   * The agent is soft-deleted.
   */
  public const STATE_DELETED = 'DELETED';
  /**
   * Output only. The time at which the agent was soft-deleted.
   *
   * @var string
   */
  public $deleteTime;
  /**
   * Output only. The current state of the agent.
   *
   * @var string
   */
  public $state;
  protected $suspensionReasonType = GoogleCloudAiplatformV1AgentStatusSuspensionReason::class;
  protected $suspensionReasonDataType = '';

  /**
   * Output only. The time at which the agent was soft-deleted.
   *
   * @param string $deleteTime
   */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /**
   * @return string
   */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /**
   * Output only. The current state of the agent.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE, SUSPENDED, ARCHIVED, DELETED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Context about the current active suspension.
   *
   * @param GoogleCloudAiplatformV1AgentStatusSuspensionReason $suspensionReason
   */
  public function setSuspensionReason(GoogleCloudAiplatformV1AgentStatusSuspensionReason $suspensionReason)
  {
    $this->suspensionReason = $suspensionReason;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentStatusSuspensionReason
   */
  public function getSuspensionReason()
  {
    return $this->suspensionReason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentStatus::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentStatus');
