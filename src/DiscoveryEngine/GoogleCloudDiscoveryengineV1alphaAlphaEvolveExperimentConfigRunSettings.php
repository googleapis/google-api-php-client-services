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

class GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigRunSettings extends \Google\Model
{
  /**
   * Required. Maximum number of programs that can be generated in parallel.
   * Must be positive.
   *
   * @var int
   */
  public $concurrency;
  /**
   * Optional. Maximum duration of the experiment. If unset, defaults to 24
   * hours.
   *
   * @var string
   */
  public $maxDuration;
  /**
   * Required. Maximum number of programs to generate during the experiment run.
   * The initial program counts towards this limit. Must be greater than 1.
   *
   * @var int
   */
  public $maxPrograms;

  /**
   * Required. Maximum number of programs that can be generated in parallel.
   * Must be positive.
   *
   * @param int $concurrency
   */
  public function setConcurrency($concurrency)
  {
    $this->concurrency = $concurrency;
  }
  /**
   * @return int
   */
  public function getConcurrency()
  {
    return $this->concurrency;
  }
  /**
   * Optional. Maximum duration of the experiment. If unset, defaults to 24
   * hours.
   *
   * @param string $maxDuration
   */
  public function setMaxDuration($maxDuration)
  {
    $this->maxDuration = $maxDuration;
  }
  /**
   * @return string
   */
  public function getMaxDuration()
  {
    return $this->maxDuration;
  }
  /**
   * Required. Maximum number of programs to generate during the experiment run.
   * The initial program counts towards this limit. Must be greater than 1.
   *
   * @param int $maxPrograms
   */
  public function setMaxPrograms($maxPrograms)
  {
    $this->maxPrograms = $maxPrograms;
  }
  /**
   * @return int
   */
  public function getMaxPrograms()
  {
    return $this->maxPrograms;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigRunSettings::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfigRunSettings');
