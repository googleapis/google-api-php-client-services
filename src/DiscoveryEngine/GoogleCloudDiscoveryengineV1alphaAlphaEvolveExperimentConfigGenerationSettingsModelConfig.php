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

class GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettingsModelConfig extends \Google\Model
{
  /**
   * Required. Model name (e.g. `gemini-2.5-flash`, `gemini-3.1-pro-preview`).
   * See `model_mixture` for the list of allowed models.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Relative weight for this model in the mixture. Must be a finite,
   * strictly positive value. Weights across all entries are normalized server-
   * side, so they need not sum to 1.0. Defaults to 1.0 when unset, which is
   * convenient when configuring a single model or an even mixture. Some Pro-
   * tier models are capped at most 50% of the total weight; requests violating
   * that cap are rejected with INVALID_ARGUMENT.
   *
   * @var float
   */
  public $weight;

  /**
   * Required. Model name (e.g. `gemini-2.5-flash`, `gemini-3.1-pro-preview`).
   * See `model_mixture` for the list of allowed models.
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
   * Optional. Relative weight for this model in the mixture. Must be a finite,
   * strictly positive value. Weights across all entries are normalized server-
   * side, so they need not sum to 1.0. Defaults to 1.0 when unset, which is
   * convenient when configuring a single model or an even mixture. Some Pro-
   * tier models are capped at most 50% of the total weight; requests violating
   * that cap are rejected with INVALID_ARGUMENT.
   *
   * @param float $weight
   */
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  /**
   * @return float
   */
  public function getWeight()
  {
    return $this->weight;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettingsModelConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigGenerationSettingsModelConfig');
