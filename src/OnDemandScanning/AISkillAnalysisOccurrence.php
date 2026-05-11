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

namespace Google\Service\OnDemandScanning;

class AISkillAnalysisOccurrence extends \Google\Collection
{
  protected $collection_key = 'findings';
  protected $findingsType = Finding::class;
  protected $findingsDataType = 'array';
  /**
   * Maximum severity found among findings.
   *
   * @var string
   */
  public $maxSeverity;
  /**
   * Name of the skill that produced this analysis.
   *
   * @var string
   */
  public $skillName;

  /**
   * Findings produced by the analysis.
   *
   * @param Finding[] $findings
   */
  public function setFindings($findings)
  {
    $this->findings = $findings;
  }
  /**
   * @return Finding[]
   */
  public function getFindings()
  {
    return $this->findings;
  }
  /**
   * Maximum severity found among findings.
   *
   * @param string $maxSeverity
   */
  public function setMaxSeverity($maxSeverity)
  {
    $this->maxSeverity = $maxSeverity;
  }
  /**
   * @return string
   */
  public function getMaxSeverity()
  {
    return $this->maxSeverity;
  }
  /**
   * Name of the skill that produced this analysis.
   *
   * @param string $skillName
   */
  public function setSkillName($skillName)
  {
    $this->skillName = $skillName;
  }
  /**
   * @return string
   */
  public function getSkillName()
  {
    return $this->skillName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AISkillAnalysisOccurrence::class, 'Google_Service_OnDemandScanning_AISkillAnalysisOccurrence');
