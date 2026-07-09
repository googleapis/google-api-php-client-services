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

class GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentStats extends \Google\Model
{
  /**
   * Output only. Number of candidates generated.
   *
   * @var int
   */
  public $candidatesCount;
  /**
   * Output only. Number of candidates evaluated.
   *
   * @var int
   */
  public $evaluatedCandidatesCount;
  /**
   * Output only. Number of billed input tokens consumed by the experiment.
   *
   * @var string
   */
  public $inputTokenCount;
  /**
   * Output only. Number of billed output tokens consumed by the experiment.
   *
   * @var string
   */
  public $outputTokenCount;

  /**
   * Output only. Number of candidates generated.
   *
   * @param int $candidatesCount
   */
  public function setCandidatesCount($candidatesCount)
  {
    $this->candidatesCount = $candidatesCount;
  }
  /**
   * @return int
   */
  public function getCandidatesCount()
  {
    return $this->candidatesCount;
  }
  /**
   * Output only. Number of candidates evaluated.
   *
   * @param int $evaluatedCandidatesCount
   */
  public function setEvaluatedCandidatesCount($evaluatedCandidatesCount)
  {
    $this->evaluatedCandidatesCount = $evaluatedCandidatesCount;
  }
  /**
   * @return int
   */
  public function getEvaluatedCandidatesCount()
  {
    return $this->evaluatedCandidatesCount;
  }
  /**
   * Output only. Number of billed input tokens consumed by the experiment.
   *
   * @param string $inputTokenCount
   */
  public function setInputTokenCount($inputTokenCount)
  {
    $this->inputTokenCount = $inputTokenCount;
  }
  /**
   * @return string
   */
  public function getInputTokenCount()
  {
    return $this->inputTokenCount;
  }
  /**
   * Output only. Number of billed output tokens consumed by the experiment.
   *
   * @param string $outputTokenCount
   */
  public function setOutputTokenCount($outputTokenCount)
  {
    $this->outputTokenCount = $outputTokenCount;
  }
  /**
   * @return string
   */
  public function getOutputTokenCount()
  {
    return $this->outputTokenCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentStats::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentStats');
