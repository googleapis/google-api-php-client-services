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

class GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgram extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_PROGRAM_STATE_UNSPECIFIED = 'PROGRAM_STATE_UNSPECIFIED';
  /**
   * The program is initialized.
   */
  public const STATE_INITIALIZED = 'INITIALIZED';
  /**
   * The program is in generation.
   */
  public const STATE_GENERATING = 'GENERATING';
  /**
   * The program is pending evaluation.
   */
  public const STATE_EVALUATING = 'EVALUATING';
  /**
   * The program is completed.
   */
  public const STATE_COMPLETED = 'COMPLETED';
  protected $collection_key = 'parentPrograms';
  protected $contentType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramContent::class;
  protected $contentDataType = '';
  /**
   * Output only. Time when the program was created.
   *
   * @var string
   */
  public $createTime;
  protected $evaluationType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramEvaluation::class;
  protected $evaluationDataType = '';
  /**
   * Optional. Lock token for the program.
   *
   * @var string
   */
  public $lockToken;
  /**
   * Identifier. Unique identifier for the program. Format: `projects/{project}/
   * locations/{location}/collections/{collection}/engines/{engine}/sessions/{se
   * ssion}/alphaEvolveExperiments/{alpha_evolve_experiment}/alphaEvolvePrograms
   * /{alpha_evolve_program}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Optionally specifies which parent programs this program was
   * evolved from. Format: `projects/{project}/locations/{location}/collections/
   * {collection}/engines/{engine}/sessions/{session}/alphaEvolveExperiments/{al
   * pha_evolve_experiment}/alphaEvolvePrograms/{alpha_evolve_program}`
   *
   * @var string[]
   */
  public $parentPrograms;
  /**
   * Output only. State of the program.
   *
   * @var string
   */
  public $state;

  /**
   * Optional. Content of the program.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramContent $content
   */
  public function setContent(GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramContent $content)
  {
    $this->content = $content;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramContent
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Output only. Time when the program was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Evaluation results for the program.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramEvaluation $evaluation
   */
  public function setEvaluation(GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramEvaluation $evaluation)
  {
    $this->evaluation = $evaluation;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramEvaluation
   */
  public function getEvaluation()
  {
    return $this->evaluation;
  }
  /**
   * Optional. Lock token for the program.
   *
   * @param string $lockToken
   */
  public function setLockToken($lockToken)
  {
    $this->lockToken = $lockToken;
  }
  /**
   * @return string
   */
  public function getLockToken()
  {
    return $this->lockToken;
  }
  /**
   * Identifier. Unique identifier for the program. Format: `projects/{project}/
   * locations/{location}/collections/{collection}/engines/{engine}/sessions/{se
   * ssion}/alphaEvolveExperiments/{alpha_evolve_experiment}/alphaEvolvePrograms
   * /{alpha_evolve_program}`
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
   * Output only. Optionally specifies which parent programs this program was
   * evolved from. Format: `projects/{project}/locations/{location}/collections/
   * {collection}/engines/{engine}/sessions/{session}/alphaEvolveExperiments/{al
   * pha_evolve_experiment}/alphaEvolvePrograms/{alpha_evolve_program}`
   *
   * @param string[] $parentPrograms
   */
  public function setParentPrograms($parentPrograms)
  {
    $this->parentPrograms = $parentPrograms;
  }
  /**
   * @return string[]
   */
  public function getParentPrograms()
  {
    return $this->parentPrograms;
  }
  /**
   * Output only. State of the program.
   *
   * Accepted values: PROGRAM_STATE_UNSPECIFIED, INITIALIZED, GENERATING,
   * EVALUATING, COMPLETED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgram::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgram');
