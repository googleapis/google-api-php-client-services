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

class ModelSettings extends \Google\Model
{
  /**
   * Optional. The LLM model that the agent should use. If not set, the agent
   * will inherit the model from its parent agent.
   *
   * @var string
   */
  public $model;
  /**
   * Optional. If set, this temperature will be used for the LLM model.
   * Temperature controls the randomness of the model's responses. Lower
   * temperatures produce responses that are more predictable. Higher
   * temperatures produce responses that are more creative.
   *
   * @var 
   */
  public $temperature;

  /**
   * Optional. The LLM model that the agent should use. If not set, the agent
   * will inherit the model from its parent agent.
   *
   * @param string $model
   */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /**
   * @return string
   */
  public function getModel()
  {
    return $this->model;
  }
  public function setTemperature($temperature)
  {
    $this->temperature = $temperature;
  }
  public function getTemperature()
  {
    return $this->temperature;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ModelSettings::class, 'Google_Service_CustomerEngagementSuite_ModelSettings');
