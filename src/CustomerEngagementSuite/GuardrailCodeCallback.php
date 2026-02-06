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

class GuardrailCodeCallback extends \Google\Model
{
  protected $afterAgentCallbackType = Callback::class;
  protected $afterAgentCallbackDataType = '';
  protected $afterModelCallbackType = Callback::class;
  protected $afterModelCallbackDataType = '';
  protected $beforeAgentCallbackType = Callback::class;
  protected $beforeAgentCallbackDataType = '';
  protected $beforeModelCallbackType = Callback::class;
  protected $beforeModelCallbackDataType = '';

  /**
   * Optional. The callback to execute after the agent is called. Each callback
   * function is expected to return a structure (e.g., a dict or object)
   * containing at least: - 'decision': Either 'OK' or 'TRIGGER'. - 'reason': A
   * string explaining the decision. A 'TRIGGER' decision may halt further
   * processing.
   *
   * @param Callback $afterAgentCallback
   */
  public function setAfterAgentCallback(Callback $afterAgentCallback)
  {
    $this->afterAgentCallback = $afterAgentCallback;
  }
  /**
   * @return Callback
   */
  public function getAfterAgentCallback()
  {
    return $this->afterAgentCallback;
  }
  /**
   * Optional. The callback to execute after the model is called. If there are
   * multiple calls to the model, the callback will be executed multiple times.
   * Each callback function is expected to return a structure (e.g., a dict or
   * object) containing at least: - 'decision': Either 'OK' or 'TRIGGER'. -
   * 'reason': A string explaining the decision. A 'TRIGGER' decision may halt
   * further processing.
   *
   * @param Callback $afterModelCallback
   */
  public function setAfterModelCallback(Callback $afterModelCallback)
  {
    $this->afterModelCallback = $afterModelCallback;
  }
  /**
   * @return Callback
   */
  public function getAfterModelCallback()
  {
    return $this->afterModelCallback;
  }
  /**
   * Optional. The callback to execute before the agent is called. Each callback
   * function is expected to return a structure (e.g., a dict or object)
   * containing at least: - 'decision': Either 'OK' or 'TRIGGER'. - 'reason': A
   * string explaining the decision. A 'TRIGGER' decision may halt further
   * processing.
   *
   * @param Callback $beforeAgentCallback
   */
  public function setBeforeAgentCallback(Callback $beforeAgentCallback)
  {
    $this->beforeAgentCallback = $beforeAgentCallback;
  }
  /**
   * @return Callback
   */
  public function getBeforeAgentCallback()
  {
    return $this->beforeAgentCallback;
  }
  /**
   * Optional. The callback to execute before the model is called. If there are
   * multiple calls to the model, the callback will be executed multiple times.
   * Each callback function is expected to return a structure (e.g., a dict or
   * object) containing at least: - 'decision': Either 'OK' or 'TRIGGER'. -
   * 'reason': A string explaining the decision. A 'TRIGGER' decision may halt
   * further processing.
   *
   * @param Callback $beforeModelCallback
   */
  public function setBeforeModelCallback(Callback $beforeModelCallback)
  {
    $this->beforeModelCallback = $beforeModelCallback;
  }
  /**
   * @return Callback
   */
  public function getBeforeModelCallback()
  {
    return $this->beforeModelCallback;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GuardrailCodeCallback::class, 'Google_Service_CustomerEngagementSuite_GuardrailCodeCallback');
