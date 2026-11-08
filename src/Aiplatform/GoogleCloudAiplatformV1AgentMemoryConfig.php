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

class GoogleCloudAiplatformV1AgentMemoryConfig extends \Google\Model
{
  /**
   * Optional. If true, memory is disabled for the agent as a whole: across
   * every task it runs, the agent neither reads existing memories into the
   * prompt nor forms new ones. Memory is on by default, and this is the setting
   * that wins. A task may turn memory off for itself alone with
   * `TaskSpec.scope.memory_config.disable_memory`, but cannot turn it back on
   * while this is true; the two are OR'ed. This level wins because it is the
   * mutable one. Turning it on has to cover the tasks that already exist, whose
   * stored specs still say whatever they were created with, so the agent's
   * current value is re-applied every time a session opens, including on a
   * resume. Memories already stored are retained and stay readable by the
   * agent's users; this governs only whether the agent can access and modify
   * them.
   *
   * @var bool
   */
  public $disableMemory;

  /**
   * Optional. If true, memory is disabled for the agent as a whole: across
   * every task it runs, the agent neither reads existing memories into the
   * prompt nor forms new ones. Memory is on by default, and this is the setting
   * that wins. A task may turn memory off for itself alone with
   * `TaskSpec.scope.memory_config.disable_memory`, but cannot turn it back on
   * while this is true; the two are OR'ed. This level wins because it is the
   * mutable one. Turning it on has to cover the tasks that already exist, whose
   * stored specs still say whatever they were created with, so the agent's
   * current value is re-applied every time a session opens, including on a
   * resume. Memories already stored are retained and stay readable by the
   * agent's users; this governs only whether the agent can access and modify
   * them.
   *
   * @param bool $disableMemory
   */
  public function setDisableMemory($disableMemory)
  {
    $this->disableMemory = $disableMemory;
  }
  /**
   * @return bool
   */
  public function getDisableMemory()
  {
    return $this->disableMemory;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentMemoryConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentMemoryConfig');
