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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettings extends \Google\Collection
{
  protected $collection_key = 'models';
  /**
   * Optional. Additional user-provided context to be used during generation.
   *
   * @var string
   */
  public $context;
  /**
   * Optional. When true, the LLM prompt includes the full program text (both
   * mutable EVOLVE-BLOCK regions and immutable boilerplate). When false
   * (default), only the mutable EVOLVE-BLOCK regions are shown, saving context
   * window.
   *
   * @var bool
   */
  public $includeFullProgramInPrompt;
  protected $modelsType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettingsModelConfig::class;
  protected $modelsDataType = 'array';

  /**
   * Optional. Additional user-provided context to be used during generation.
   *
   * @param string $context
   */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /**
   * @return string
   */
  public function getContext()
  {
    return $this->context;
  }
  /**
   * Optional. When true, the LLM prompt includes the full program text (both
   * mutable EVOLVE-BLOCK regions and immutable boilerplate). When false
   * (default), only the mutable EVOLVE-BLOCK regions are shown, saving context
   * window.
   *
   * @param bool $includeFullProgramInPrompt
   */
  public function setIncludeFullProgramInPrompt($includeFullProgramInPrompt)
  {
    $this->includeFullProgramInPrompt = $includeFullProgramInPrompt;
  }
  /**
   * @return bool
   */
  public function getIncludeFullProgramInPrompt()
  {
    return $this->includeFullProgramInPrompt;
  }
  /**
   * Optional. Per-model configuration. See `ModelConfig` for details. If left
   * unset, the server selects a default model.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettingsModelConfig[] $models
   */
  public function setModels($models)
  {
    $this->models = $models;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettingsModelConfig[]
   */
  public function getModels()
  {
    return $this->models;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettings::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettings');
