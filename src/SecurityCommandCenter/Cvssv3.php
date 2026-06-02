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

class Cvssv3 extends \Google\Model
{
  public const ATTACK_COMPLEXITY_ATTACK_COMPLEXITY_UNSPECIFIED = 'ATTACK_COMPLEXITY_UNSPECIFIED';
  public const ATTACK_COMPLEXITY_ATTACK_COMPLEXITY_LOW = 'ATTACK_COMPLEXITY_LOW';
  public const ATTACK_COMPLEXITY_ATTACK_COMPLEXITY_HIGH = 'ATTACK_COMPLEXITY_HIGH';
  public const ATTACK_VECTOR_ATTACK_VECTOR_UNSPECIFIED = 'ATTACK_VECTOR_UNSPECIFIED';
  public const ATTACK_VECTOR_ATTACK_VECTOR_NETWORK = 'ATTACK_VECTOR_NETWORK';
  public const ATTACK_VECTOR_ATTACK_VECTOR_ADJACENT = 'ATTACK_VECTOR_ADJACENT';
  public const ATTACK_VECTOR_ATTACK_VECTOR_LOCAL = 'ATTACK_VECTOR_LOCAL';
  public const ATTACK_VECTOR_ATTACK_VECTOR_PHYSICAL = 'ATTACK_VECTOR_PHYSICAL';
  public const AVAILABILITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  public const AVAILABILITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  public const AVAILABILITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  public const AVAILABILITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  public const CONFIDENTIALITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  public const CONFIDENTIALITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  public const CONFIDENTIALITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  public const CONFIDENTIALITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  public const INTEGRITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  public const INTEGRITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  public const INTEGRITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  public const INTEGRITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  public const PRIVILEGES_REQUIRED_PRIVILEGES_REQUIRED_UNSPECIFIED = 'PRIVILEGES_REQUIRED_UNSPECIFIED';
  public const PRIVILEGES_REQUIRED_PRIVILEGES_REQUIRED_NONE = 'PRIVILEGES_REQUIRED_NONE';
  public const PRIVILEGES_REQUIRED_PRIVILEGES_REQUIRED_LOW = 'PRIVILEGES_REQUIRED_LOW';
  public const PRIVILEGES_REQUIRED_PRIVILEGES_REQUIRED_HIGH = 'PRIVILEGES_REQUIRED_HIGH';
  public const SCOPE_SCOPE_UNSPECIFIED = 'SCOPE_UNSPECIFIED';
  public const SCOPE_SCOPE_UNCHANGED = 'SCOPE_UNCHANGED';
  public const SCOPE_SCOPE_CHANGED = 'SCOPE_CHANGED';
  public const USER_INTERACTION_USER_INTERACTION_UNSPECIFIED = 'USER_INTERACTION_UNSPECIFIED';
  public const USER_INTERACTION_USER_INTERACTION_NONE = 'USER_INTERACTION_NONE';
  public const USER_INTERACTION_USER_INTERACTION_REQUIRED = 'USER_INTERACTION_REQUIRED';
  /**
   * @var string
   */
  public $attackComplexity;
  /**
   * @var string
   */
  public $attackVector;
  /**
   * @var string
   */
  public $availabilityImpact;
  public $baseScore;
  /**
   * @var string
   */
  public $confidentialityImpact;
  /**
   * @var string
   */
  public $integrityImpact;
  /**
   * @var string
   */
  public $privilegesRequired;
  /**
   * @var string
   */
  public $scope;
  /**
   * @var string
   */
  public $userInteraction;

  /**
   * @param self::ATTACK_COMPLEXITY_* $attackComplexity
   */
  public function setAttackComplexity($attackComplexity)
  {
    $this->attackComplexity = $attackComplexity;
  }
  /**
   * @return self::ATTACK_COMPLEXITY_*
   */
  public function getAttackComplexity()
  {
    return $this->attackComplexity;
  }
  /**
   * @param self::ATTACK_VECTOR_* $attackVector
   */
  public function setAttackVector($attackVector)
  {
    $this->attackVector = $attackVector;
  }
  /**
   * @return self::ATTACK_VECTOR_*
   */
  public function getAttackVector()
  {
    return $this->attackVector;
  }
  /**
   * @param self::AVAILABILITY_IMPACT_* $availabilityImpact
   */
  public function setAvailabilityImpact($availabilityImpact)
  {
    $this->availabilityImpact = $availabilityImpact;
  }
  /**
   * @return self::AVAILABILITY_IMPACT_*
   */
  public function getAvailabilityImpact()
  {
    return $this->availabilityImpact;
  }
  public function setBaseScore($baseScore)
  {
    $this->baseScore = $baseScore;
  }
  public function getBaseScore()
  {
    return $this->baseScore;
  }
  /**
   * @param self::CONFIDENTIALITY_IMPACT_* $confidentialityImpact
   */
  public function setConfidentialityImpact($confidentialityImpact)
  {
    $this->confidentialityImpact = $confidentialityImpact;
  }
  /**
   * @return self::CONFIDENTIALITY_IMPACT_*
   */
  public function getConfidentialityImpact()
  {
    return $this->confidentialityImpact;
  }
  /**
   * @param self::INTEGRITY_IMPACT_* $integrityImpact
   */
  public function setIntegrityImpact($integrityImpact)
  {
    $this->integrityImpact = $integrityImpact;
  }
  /**
   * @return self::INTEGRITY_IMPACT_*
   */
  public function getIntegrityImpact()
  {
    return $this->integrityImpact;
  }
  /**
   * @param self::PRIVILEGES_REQUIRED_* $privilegesRequired
   */
  public function setPrivilegesRequired($privilegesRequired)
  {
    $this->privilegesRequired = $privilegesRequired;
  }
  /**
   * @return self::PRIVILEGES_REQUIRED_*
   */
  public function getPrivilegesRequired()
  {
    return $this->privilegesRequired;
  }
  /**
   * @param self::SCOPE_* $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return self::SCOPE_*
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * @param self::USER_INTERACTION_* $userInteraction
   */
  public function setUserInteraction($userInteraction)
  {
    $this->userInteraction = $userInteraction;
  }
  /**
   * @return self::USER_INTERACTION_*
   */
  public function getUserInteraction()
  {
    return $this->userInteraction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Cvssv3::class, 'Google_Service_SecurityCommandCenter_Cvssv3');
