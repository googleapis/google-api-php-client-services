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

class DataStoreToolSummarizationConfig extends \Google\Model
{
  /**
   * Optional. Whether summarization is disabled.
   *
   * @var bool
   */
  public $disabled;
  protected $modelSettingsType = ModelSettings::class;
  protected $modelSettingsDataType = '';
  /**
   * Optional. The prompt definition. If not set, default prompt will be used.
   *
   * @var string
   */
  public $prompt;

  /**
   * Optional. Whether summarization is disabled.
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
   * Optional. Configurations for the LLM model.
   *
   * @param ModelSettings $modelSettings
   */
  public function setModelSettings(ModelSettings $modelSettings)
  {
    $this->modelSettings = $modelSettings;
  }
  /**
   * @return ModelSettings
   */
  public function getModelSettings()
  {
    return $this->modelSettings;
  }
  /**
   * Optional. The prompt definition. If not set, default prompt will be used.
   *
   * @param string $prompt
   */
  public function setPrompt($prompt)
  {
    $this->prompt = $prompt;
  }
  /**
   * @return string
   */
  public function getPrompt()
  {
    return $this->prompt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataStoreToolSummarizationConfig::class, 'Google_Service_CustomerEngagementSuite_DataStoreToolSummarizationConfig');
