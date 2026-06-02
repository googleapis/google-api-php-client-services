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

namespace Google\Service\SecurityCommandCenter;

class MitreAttack extends \Google\Collection
{
  public const PRIMARY_TACTIC_TACTIC_UNSPECIFIED = 'TACTIC_UNSPECIFIED';
  public const PRIMARY_TACTIC_RECONNAISSANCE = 'RECONNAISSANCE';
  public const PRIMARY_TACTIC_RESOURCE_DEVELOPMENT = 'RESOURCE_DEVELOPMENT';
  public const PRIMARY_TACTIC_INITIAL_ACCESS = 'INITIAL_ACCESS';
  public const PRIMARY_TACTIC_EXECUTION = 'EXECUTION';
  public const PRIMARY_TACTIC_PERSISTENCE = 'PERSISTENCE';
  public const PRIMARY_TACTIC_PRIVILEGE_ESCALATION = 'PRIVILEGE_ESCALATION';
  public const PRIMARY_TACTIC_DEFENSE_EVASION = 'DEFENSE_EVASION';
  public const PRIMARY_TACTIC_CREDENTIAL_ACCESS = 'CREDENTIAL_ACCESS';
  public const PRIMARY_TACTIC_DISCOVERY = 'DISCOVERY';
  public const PRIMARY_TACTIC_LATERAL_MOVEMENT = 'LATERAL_MOVEMENT';
  public const PRIMARY_TACTIC_COLLECTION = 'COLLECTION';
  public const PRIMARY_TACTIC_COMMAND_AND_CONTROL = 'COMMAND_AND_CONTROL';
  public const PRIMARY_TACTIC_EXFILTRATION = 'EXFILTRATION';
  public const PRIMARY_TACTIC_IMPACT = 'IMPACT';
  protected $collection_key = 'primaryTechniques';
  /**
   * @var string[]
   */
  public $additionalTactics;
  /**
   * @var string[]
   */
  public $additionalTechniques;
  /**
   * @var string
   */
  public $primaryTactic;
  /**
   * @var string[]
   */
  public $primaryTechniques;
  /**
   * @var string
   */
  public $version;

  /**
   * @param string[] $additionalTactics
   */
  public function setAdditionalTactics($additionalTactics)
  {
    $this->additionalTactics = $additionalTactics;
  }
  /**
   * @return string[]
   */
  public function getAdditionalTactics()
  {
    return $this->additionalTactics;
  }
  /**
   * @param string[] $additionalTechniques
   */
  public function setAdditionalTechniques($additionalTechniques)
  {
    $this->additionalTechniques = $additionalTechniques;
  }
  /**
   * @return string[]
   */
  public function getAdditionalTechniques()
  {
    return $this->additionalTechniques;
  }
  /**
   * @param self::PRIMARY_TACTIC_* $primaryTactic
   */
  public function setPrimaryTactic($primaryTactic)
  {
    $this->primaryTactic = $primaryTactic;
  }
  /**
   * @return self::PRIMARY_TACTIC_*
   */
  public function getPrimaryTactic()
  {
    return $this->primaryTactic;
  }
  /**
   * @param string[] $primaryTechniques
   */
  public function setPrimaryTechniques($primaryTechniques)
  {
    $this->primaryTechniques = $primaryTechniques;
  }
  /**
   * @return string[]
   */
  public function getPrimaryTechniques()
  {
    return $this->primaryTechniques;
  }
  /**
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MitreAttack::class, 'Google_Service_SecurityCommandCenter_MitreAttack');
