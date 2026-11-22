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

class GoogleCloudAiplatformV1MonitoredAgent extends \Google\Model
{
  /**
   * The default value. This value is used if the state is omitted.
   */
  public const STATE_ENABLEMENT_STATE_UNSPECIFIED = 'ENABLEMENT_STATE_UNSPECIFIED';
  /**
   * The agent is successfully enabled and active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The agent is in the process of being enabled.
   */
  public const STATE_ENABLING = 'ENABLING';
  /**
   * The agent is disabled.
   */
  public const STATE_DISABLED = 'DISABLED';
  protected $agentResourceType = GoogleCloudAiplatformV1AgentResource::class;
  protected $agentResourceDataType = '';
  /**
   * Output only. The time the MonitoredAgent was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The display name of the MonitoredAgent.
   *
   * @var string
   */
  public $displayName;
  /**
   * Identifier. The resource name of the MonitoredAgent.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The current state of the agent's enablement.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. A brief message explaining the current state.
   *
   * @var string
   */
  public $statusMessage;
  /**
   * Output only. The time the MonitoredAgent was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. The configuration for the agent being monitored.
   *
   * @param GoogleCloudAiplatformV1AgentResource $agentResource
   */
  public function setAgentResource(GoogleCloudAiplatformV1AgentResource $agentResource)
  {
    $this->agentResource = $agentResource;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentResource
   */
  public function getAgentResource()
  {
    return $this->agentResource;
  }
  /**
   * Output only. The time the MonitoredAgent was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. The display name of the MonitoredAgent.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Identifier. The resource name of the MonitoredAgent.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The current state of the agent's enablement.
   *
   * Accepted values: ENABLEMENT_STATE_UNSPECIFIED, ACTIVE, ENABLING, DISABLED
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
   * Output only. A brief message explaining the current state.
   *
   * @param string $statusMessage
   */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /**
   * @return string
   */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /**
   * Output only. The time the MonitoredAgent was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1MonitoredAgent::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1MonitoredAgent');
