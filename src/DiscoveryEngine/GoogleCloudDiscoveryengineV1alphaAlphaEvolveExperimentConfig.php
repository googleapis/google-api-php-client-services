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

class GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfig extends \Google\Model
{
  protected $evolutionSettingsType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigEvolutionSettings::class;
  protected $evolutionSettingsDataType = '';
  protected $generationSettingsType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettings::class;
  protected $generationSettingsDataType = '';
  /**
   * Required. Description of the problem to be solved by the experiment.
   *
   * @var string
   */
  public $problemDescription;
  /**
   * Required. Primary programming language of the code being optimized.
   *
   * @var string
   */
  public $programLanguage;
  protected $runSettingsType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigRunSettings::class;
  protected $runSettingsDataType = '';
  /**
   * Required. Title of the experiment.
   *
   * @var string
   */
  public $title;

  /**
   * Optional. Evolution settings for the experiment.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigEvolutionSettings $evolutionSettings
   */
  public function setEvolutionSettings(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigEvolutionSettings $evolutionSettings)
  {
    $this->evolutionSettings = $evolutionSettings;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigEvolutionSettings
   */
  public function getEvolutionSettings()
  {
    return $this->evolutionSettings;
  }
  /**
   * Optional. Generation settings for the experiment, controlling how new
   * program candidates are generated, including things LLM parameters and user-
   * provided context and prompts.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettings $generationSettings
   */
  public function setGenerationSettings(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettings $generationSettings)
  {
    $this->generationSettings = $generationSettings;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettings
   */
  public function getGenerationSettings()
  {
    return $this->generationSettings;
  }
  /**
   * Required. Description of the problem to be solved by the experiment.
   *
   * @param string $problemDescription
   */
  public function setProblemDescription($problemDescription)
  {
    $this->problemDescription = $problemDescription;
  }
  /**
   * @return string
   */
  public function getProblemDescription()
  {
    return $this->problemDescription;
  }
  /**
   * Required. Primary programming language of the code being optimized.
   *
   * @param string $programLanguage
   */
  public function setProgramLanguage($programLanguage)
  {
    $this->programLanguage = $programLanguage;
  }
  /**
   * @return string
   */
  public function getProgramLanguage()
  {
    return $this->programLanguage;
  }
  /**
   * Required. Run settings for the experiment, controlling the overall behavior
   * of the experiment run.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigRunSettings $runSettings
   */
  public function setRunSettings(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigRunSettings $runSettings)
  {
    $this->runSettings = $runSettings;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigRunSettings
   */
  public function getRunSettings()
  {
    return $this->runSettings;
  }
  /**
   * Required. Title of the experiment.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfig');
