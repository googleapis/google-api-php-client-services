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

class Callback extends \Google\Model
{
  /**
   * Optional. Human-readable description of the callback.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Whether the callback is disabled. Disabled callbacks are ignored
   * by the agent.
   *
   * @var bool
   */
  public $disabled;
  /**
   * Optional. If enabled, the callback will also be executed on intermediate
   * model outputs. This setting only affects after model callback. **ENABLE
   * WITH CAUTION**. Typically after model callback only needs to be executed
   * after receiving all model responses. Enabling proactive execution may have
   * negative implication on the execution cost and latency, and should only be
   * enabled in rare situations.
   *
   * @var bool
   */
  public $proactiveExecutionEnabled;
  /**
   * Required. The python code to execute for the callback.
   *
   * @var string
   */
  public $pythonCode;

  /**
   * Optional. Human-readable description of the callback.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. Whether the callback is disabled. Disabled callbacks are ignored
   * by the agent.
   *
   * @param bool $disabled
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * Optional. If enabled, the callback will also be executed on intermediate
   * model outputs. This setting only affects after model callback. **ENABLE
   * WITH CAUTION**. Typically after model callback only needs to be executed
   * after receiving all model responses. Enabling proactive execution may have
   * negative implication on the execution cost and latency, and should only be
   * enabled in rare situations.
   *
   * @param bool $proactiveExecutionEnabled
   */
  public function setProactiveExecutionEnabled($proactiveExecutionEnabled)
  {
    $this->proactiveExecutionEnabled = $proactiveExecutionEnabled;
  }
  /**
   * @return bool
   */
  public function getProactiveExecutionEnabled()
  {
    return $this->proactiveExecutionEnabled;
  }
  /**
   * Required. The python code to execute for the callback.
   *
   * @param string $pythonCode
   */
  public function setPythonCode($pythonCode)
  {
    $this->pythonCode = $pythonCode;
  }
  /**
   * @return string
   */
  public function getPythonCode()
  {
    return $this->pythonCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Callback::class, 'Google_Service_CustomerEngagementSuite_Callback');
