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
   * Thinking level is unspecified.
   */
  public const THINKING_LEVEL_THINKING_LEVEL_UNSPECIFIED = 'THINKING_LEVEL_UNSPECIFIED';
  /**
   * Default thinking level.
   */
  public const THINKING_LEVEL_DEFAULT = 'DEFAULT';
  /**
   * Low thinking level.
   */
  public const THINKING_LEVEL_LOW = 'LOW';
  /**
   * Medium thinking level.
   */
  public const THINKING_LEVEL_MEDIUM = 'MEDIUM';
  /**
   * High thinking level.
   */
  public const THINKING_LEVEL_HIGH = 'HIGH';
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
   * Optional. The thinking level of the model.
   *
   * @var string
   */
  public $thinkingLevel;

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
  /**
   * Optional. The thinking level of the model.
   *
   * Accepted values: THINKING_LEVEL_UNSPECIFIED, DEFAULT, LOW, MEDIUM, HIGH
   *
   * @param self::THINKING_LEVEL_* $thinkingLevel
   */
  public function setThinkingLevel($thinkingLevel)
  {
    $this->thinkingLevel = $thinkingLevel;
  }
  /**
   * @return self::THINKING_LEVEL_*
   */
  public function getThinkingLevel()
  {
    return $this->thinkingLevel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ModelSettings::class, 'Google_Service_CustomerEngagementSuite_ModelSettings');
