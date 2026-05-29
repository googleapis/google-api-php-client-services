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

namespace Google\Service\ContainerAnalysis;

class CVSS extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const ATTACK_COMPLEXITY_ATTACK_COMPLEXITY_UNSPECIFIED = 'ATTACK_COMPLEXITY_UNSPECIFIED';
  /**
   * Low attack complexity (AC:L). Defined in CVSS v2, v3, v4.
   */
  public const ATTACK_COMPLEXITY_ATTACK_COMPLEXITY_LOW = 'ATTACK_COMPLEXITY_LOW';
  /**
   * High attack complexity (AC:H). Defined in CVSS v2, v3, v4.
   */
  public const ATTACK_COMPLEXITY_ATTACK_COMPLEXITY_HIGH = 'ATTACK_COMPLEXITY_HIGH';
  /**
   * Medium attack complexity (AC:M). Defined in CVSS v2.
   */
  public const ATTACK_COMPLEXITY_ATTACK_COMPLEXITY_MEDIUM = 'ATTACK_COMPLEXITY_MEDIUM';
  /**
   * Unspecified.
   */
  public const ATTACK_REQUIREMENTS_ATTACK_REQUIREMENTS_UNSPECIFIED = 'ATTACK_REQUIREMENTS_UNSPECIFIED';
  /**
   * No attack requirements (AT:N). Defined in CVSS v4.
   */
  public const ATTACK_REQUIREMENTS_ATTACK_REQUIREMENTS_NONE = 'ATTACK_REQUIREMENTS_NONE';
  /**
   * Attack requirements: Present (AT:P). Defined in CVSS v4.
   */
  public const ATTACK_REQUIREMENTS_ATTACK_REQUIREMENTS_PRESENT = 'ATTACK_REQUIREMENTS_PRESENT';
  /**
   * Unspecified.
   */
  public const ATTACK_VECTOR_ATTACK_VECTOR_UNSPECIFIED = 'ATTACK_VECTOR_UNSPECIFIED';
  /**
   * Attack Vector: Network (AV:N). Defined in CVSS v2, v3, v4.
   */
  public const ATTACK_VECTOR_ATTACK_VECTOR_NETWORK = 'ATTACK_VECTOR_NETWORK';
  /**
   * Attack Vector: Adjacent (AV:A). Defined in CVSS v2, v3, v4.
   */
  public const ATTACK_VECTOR_ATTACK_VECTOR_ADJACENT = 'ATTACK_VECTOR_ADJACENT';
  /**
   * Attack Vector: Local (AV:L). Defined in CVSS v2, v3, v4.
   */
  public const ATTACK_VECTOR_ATTACK_VECTOR_LOCAL = 'ATTACK_VECTOR_LOCAL';
  /**
   * Attack Vector: Physical (AV:P). Defined in CVSS v3, v4.
   */
  public const ATTACK_VECTOR_ATTACK_VECTOR_PHYSICAL = 'ATTACK_VECTOR_PHYSICAL';
  /**
   * Unspecified.
   */
  public const AUTHENTICATION_AUTHENTICATION_UNSPECIFIED = 'AUTHENTICATION_UNSPECIFIED';
  /**
   * Multiple authentication required (Au:M). Defined in CVSS v2.
   */
  public const AUTHENTICATION_AUTHENTICATION_MULTIPLE = 'AUTHENTICATION_MULTIPLE';
  /**
   * Single authentication required (Au:S). Defined in CVSS v2.
   */
  public const AUTHENTICATION_AUTHENTICATION_SINGLE = 'AUTHENTICATION_SINGLE';
  /**
   * No authentication required (Au:N). Defined in CVSS v2.
   */
  public const AUTHENTICATION_AUTHENTICATION_NONE = 'AUTHENTICATION_NONE';
  /**
   * Unspecified.
   */
  public const AVAILABILITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  /**
   * High impact (H). Defined in CVSS v3, v4.
   */
  public const AVAILABILITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  /**
   * Low impact (L). Defined in CVSS v3, v4.
   */
  public const AVAILABILITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  /**
   * No impact (N). Defined in CVSS v2, v3, v4.
   */
  public const AVAILABILITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  /**
   * Partial impact (P). Defined in CVSS v2.
   */
  public const AVAILABILITY_IMPACT_IMPACT_PARTIAL = 'IMPACT_PARTIAL';
  /**
   * Complete impact (C). Defined in CVSS v2.
   */
  public const AVAILABILITY_IMPACT_IMPACT_COMPLETE = 'IMPACT_COMPLETE';
  /**
   * Unspecified.
   */
  public const CONFIDENTIALITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  /**
   * High impact (H). Defined in CVSS v3, v4.
   */
  public const CONFIDENTIALITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  /**
   * Low impact (L). Defined in CVSS v3, v4.
   */
  public const CONFIDENTIALITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  /**
   * No impact (N). Defined in CVSS v2, v3, v4.
   */
  public const CONFIDENTIALITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  /**
   * Partial impact (P). Defined in CVSS v2.
   */
  public const CONFIDENTIALITY_IMPACT_IMPACT_PARTIAL = 'IMPACT_PARTIAL';
  /**
   * Complete impact (C). Defined in CVSS v2.
   */
  public const CONFIDENTIALITY_IMPACT_IMPACT_COMPLETE = 'IMPACT_COMPLETE';
  /**
   * Unspecified.
   */
  public const INTEGRITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  /**
   * High impact (H). Defined in CVSS v3, v4.
   */
  public const INTEGRITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  /**
   * Low impact (L). Defined in CVSS v3, v4.
   */
  public const INTEGRITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  /**
   * No impact (N). Defined in CVSS v2, v3, v4.
   */
  public const INTEGRITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  /**
   * Partial impact (P). Defined in CVSS v2.
   */
  public const INTEGRITY_IMPACT_IMPACT_PARTIAL = 'IMPACT_PARTIAL';
  /**
   * Complete impact (C). Defined in CVSS v2.
   */
  public const INTEGRITY_IMPACT_IMPACT_COMPLETE = 'IMPACT_COMPLETE';
  /**
   * Unspecified.
   */
  public const PRIVILEGES_REQUIRED_PRIVILEGES_REQUIRED_UNSPECIFIED = 'PRIVILEGES_REQUIRED_UNSPECIFIED';
  /**
   * No privileges required (PR:N). Defined in CVSS v3, v4.
   */
  public const PRIVILEGES_REQUIRED_PRIVILEGES_REQUIRED_NONE = 'PRIVILEGES_REQUIRED_NONE';
  /**
   * Low privileges required (PR:L). Defined in CVSS v3, v4.
   */
  public const PRIVILEGES_REQUIRED_PRIVILEGES_REQUIRED_LOW = 'PRIVILEGES_REQUIRED_LOW';
  /**
   * High privileges required (PR:H). Defined in CVSS v3, v4.
   */
  public const PRIVILEGES_REQUIRED_PRIVILEGES_REQUIRED_HIGH = 'PRIVILEGES_REQUIRED_HIGH';
  /**
   * Unspecified.
   */
  public const SCOPE_SCOPE_UNSPECIFIED = 'SCOPE_UNSPECIFIED';
  /**
   * Scope: Unchanged (S:U). Defined in CVSS v3.
   */
  public const SCOPE_SCOPE_UNCHANGED = 'SCOPE_UNCHANGED';
  /**
   * Scope: Changed (S:C). Defined in CVSS v3.
   */
  public const SCOPE_SCOPE_CHANGED = 'SCOPE_CHANGED';
  /**
   * Unspecified.
   */
  public const SUBSEQUENT_SYSTEM_AVAILABILITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  /**
   * High impact (H). Defined in CVSS v3, v4.
   */
  public const SUBSEQUENT_SYSTEM_AVAILABILITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  /**
   * Low impact (L). Defined in CVSS v3, v4.
   */
  public const SUBSEQUENT_SYSTEM_AVAILABILITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  /**
   * No impact (N). Defined in CVSS v2, v3, v4.
   */
  public const SUBSEQUENT_SYSTEM_AVAILABILITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  /**
   * Partial impact (P). Defined in CVSS v2.
   */
  public const SUBSEQUENT_SYSTEM_AVAILABILITY_IMPACT_IMPACT_PARTIAL = 'IMPACT_PARTIAL';
  /**
   * Complete impact (C). Defined in CVSS v2.
   */
  public const SUBSEQUENT_SYSTEM_AVAILABILITY_IMPACT_IMPACT_COMPLETE = 'IMPACT_COMPLETE';
  /**
   * Unspecified.
   */
  public const SUBSEQUENT_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  /**
   * High impact (H). Defined in CVSS v3, v4.
   */
  public const SUBSEQUENT_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  /**
   * Low impact (L). Defined in CVSS v3, v4.
   */
  public const SUBSEQUENT_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  /**
   * No impact (N). Defined in CVSS v2, v3, v4.
   */
  public const SUBSEQUENT_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  /**
   * Partial impact (P). Defined in CVSS v2.
   */
  public const SUBSEQUENT_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_PARTIAL = 'IMPACT_PARTIAL';
  /**
   * Complete impact (C). Defined in CVSS v2.
   */
  public const SUBSEQUENT_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_COMPLETE = 'IMPACT_COMPLETE';
  /**
   * Unspecified.
   */
  public const SUBSEQUENT_SYSTEM_INTEGRITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  /**
   * High impact (H). Defined in CVSS v3, v4.
   */
  public const SUBSEQUENT_SYSTEM_INTEGRITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  /**
   * Low impact (L). Defined in CVSS v3, v4.
   */
  public const SUBSEQUENT_SYSTEM_INTEGRITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  /**
   * No impact (N). Defined in CVSS v2, v3, v4.
   */
  public const SUBSEQUENT_SYSTEM_INTEGRITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  /**
   * Partial impact (P). Defined in CVSS v2.
   */
  public const SUBSEQUENT_SYSTEM_INTEGRITY_IMPACT_IMPACT_PARTIAL = 'IMPACT_PARTIAL';
  /**
   * Complete impact (C). Defined in CVSS v2.
   */
  public const SUBSEQUENT_SYSTEM_INTEGRITY_IMPACT_IMPACT_COMPLETE = 'IMPACT_COMPLETE';
  /**
   * Unspecified.
   */
  public const USER_INTERACTION_USER_INTERACTION_UNSPECIFIED = 'USER_INTERACTION_UNSPECIFIED';
  /**
   * No user interaction required (UI:N). Defined in CVSS v3, v4.
   */
  public const USER_INTERACTION_USER_INTERACTION_NONE = 'USER_INTERACTION_NONE';
  /**
   * User interaction required (UI:R). Defined in CVSS v3.
   */
  public const USER_INTERACTION_USER_INTERACTION_REQUIRED = 'USER_INTERACTION_REQUIRED';
  /**
   * Passive user interaction required (UI:P). Defined in CVSS v4.
   */
  public const USER_INTERACTION_USER_INTERACTION_PASSIVE = 'USER_INTERACTION_PASSIVE';
  /**
   * Active user interaction required (UI:A). Defined in CVSS v4.
   */
  public const USER_INTERACTION_USER_INTERACTION_ACTIVE = 'USER_INTERACTION_ACTIVE';
  /**
   * Unspecified.
   */
  public const VULNERABLE_SYSTEM_AVAILABILITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  /**
   * High impact (H). Defined in CVSS v3, v4.
   */
  public const VULNERABLE_SYSTEM_AVAILABILITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  /**
   * Low impact (L). Defined in CVSS v3, v4.
   */
  public const VULNERABLE_SYSTEM_AVAILABILITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  /**
   * No impact (N). Defined in CVSS v2, v3, v4.
   */
  public const VULNERABLE_SYSTEM_AVAILABILITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  /**
   * Partial impact (P). Defined in CVSS v2.
   */
  public const VULNERABLE_SYSTEM_AVAILABILITY_IMPACT_IMPACT_PARTIAL = 'IMPACT_PARTIAL';
  /**
   * Complete impact (C). Defined in CVSS v2.
   */
  public const VULNERABLE_SYSTEM_AVAILABILITY_IMPACT_IMPACT_COMPLETE = 'IMPACT_COMPLETE';
  /**
   * Unspecified.
   */
  public const VULNERABLE_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  /**
   * High impact (H). Defined in CVSS v3, v4.
   */
  public const VULNERABLE_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  /**
   * Low impact (L). Defined in CVSS v3, v4.
   */
  public const VULNERABLE_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  /**
   * No impact (N). Defined in CVSS v2, v3, v4.
   */
  public const VULNERABLE_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  /**
   * Partial impact (P). Defined in CVSS v2.
   */
  public const VULNERABLE_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_PARTIAL = 'IMPACT_PARTIAL';
  /**
   * Complete impact (C). Defined in CVSS v2.
   */
  public const VULNERABLE_SYSTEM_CONFIDENTIALITY_IMPACT_IMPACT_COMPLETE = 'IMPACT_COMPLETE';
  /**
   * Unspecified.
   */
  public const VULNERABLE_SYSTEM_INTEGRITY_IMPACT_IMPACT_UNSPECIFIED = 'IMPACT_UNSPECIFIED';
  /**
   * High impact (H). Defined in CVSS v3, v4.
   */
  public const VULNERABLE_SYSTEM_INTEGRITY_IMPACT_IMPACT_HIGH = 'IMPACT_HIGH';
  /**
   * Low impact (L). Defined in CVSS v3, v4.
   */
  public const VULNERABLE_SYSTEM_INTEGRITY_IMPACT_IMPACT_LOW = 'IMPACT_LOW';
  /**
   * No impact (N). Defined in CVSS v2, v3, v4.
   */
  public const VULNERABLE_SYSTEM_INTEGRITY_IMPACT_IMPACT_NONE = 'IMPACT_NONE';
  /**
   * Partial impact (P). Defined in CVSS v2.
   */
  public const VULNERABLE_SYSTEM_INTEGRITY_IMPACT_IMPACT_PARTIAL = 'IMPACT_PARTIAL';
  /**
   * Complete impact (C). Defined in CVSS v2.
   */
  public const VULNERABLE_SYSTEM_INTEGRITY_IMPACT_IMPACT_COMPLETE = 'IMPACT_COMPLETE';
  /**
   * Attack Complexity (AC). Defined in CVSS v2, v3, v4.
   *
   * @var string
   */
  public $attackComplexity;
  /**
   * Attack Requirements (AT). Defined in CVSS v4.
   *
   * @var string
   */
  public $attackRequirements;
  /**
   * Attack Vector (AV). Defined in CVSS v2, v3, v4.
   *
   * @var string
   */
  public $attackVector;
  /**
   * Authentication (Au). Defined in CVSS v2.
   *
   * @var string
   */
  public $authentication;
  /**
   * Availability Impact (A). Defined in CVSS v2, v3.
   *
   * @var string
   */
  public $availabilityImpact;
  /**
   * The base score is a function of the base metric scores.
   *
   * @var float
   */
  public $baseScore;
  /**
   * Confidentiality Impact (C). Defined in CVSS v2, v3.
   *
   * @var string
   */
  public $confidentialityImpact;
  /**
   * @var float
   */
  public $exploitabilityScore;
  /**
   * @var float
   */
  public $impactScore;
  /**
   * Integrity Impact (I). Defined in CVSS v2, v3.
   *
   * @var string
   */
  public $integrityImpact;
  /**
   * Privileges Required (PR). Defined in CVSS v3, v4.
   *
   * @var string
   */
  public $privilegesRequired;
  /**
   * Scope (S). Defined in CVSS v3.
   *
   * @var string
   */
  public $scope;
  /**
   * Subsequent System Availability Impact (SA). Defined in CVSS v4.
   *
   * @var string
   */
  public $subsequentSystemAvailabilityImpact;
  /**
   * Subsequent System Confidentiality Impact (SC). Defined in CVSS v4.
   *
   * @var string
   */
  public $subsequentSystemConfidentialityImpact;
  /**
   * Subsequent System Integrity Impact (SI). Defined in CVSS v4.
   *
   * @var string
   */
  public $subsequentSystemIntegrityImpact;
  /**
   * User Interaction (UI). Defined in CVSS v3, v4.
   *
   * @var string
   */
  public $userInteraction;
  /**
   * Vulnerable System Availability Impact (VA). Defined in CVSS v4.
   *
   * @var string
   */
  public $vulnerableSystemAvailabilityImpact;
  /**
   * Vulnerable System Confidentiality Impact (VC). Defined in CVSS v4.
   *
   * @var string
   */
  public $vulnerableSystemConfidentialityImpact;
  /**
   * Vulnerable System Integrity Impact (VI). Defined in CVSS v4.
   *
   * @var string
   */
  public $vulnerableSystemIntegrityImpact;

  /**
   * Attack Complexity (AC). Defined in CVSS v2, v3, v4.
   *
   * Accepted values: ATTACK_COMPLEXITY_UNSPECIFIED, ATTACK_COMPLEXITY_LOW,
   * ATTACK_COMPLEXITY_HIGH, ATTACK_COMPLEXITY_MEDIUM
   *
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
   * Attack Requirements (AT). Defined in CVSS v4.
   *
   * Accepted values: ATTACK_REQUIREMENTS_UNSPECIFIED, ATTACK_REQUIREMENTS_NONE,
   * ATTACK_REQUIREMENTS_PRESENT
   *
   * @param self::ATTACK_REQUIREMENTS_* $attackRequirements
   */
  public function setAttackRequirements($attackRequirements)
  {
    $this->attackRequirements = $attackRequirements;
  }
  /**
   * @return self::ATTACK_REQUIREMENTS_*
   */
  public function getAttackRequirements()
  {
    return $this->attackRequirements;
  }
  /**
   * Attack Vector (AV). Defined in CVSS v2, v3, v4.
   *
   * Accepted values: ATTACK_VECTOR_UNSPECIFIED, ATTACK_VECTOR_NETWORK,
   * ATTACK_VECTOR_ADJACENT, ATTACK_VECTOR_LOCAL, ATTACK_VECTOR_PHYSICAL
   *
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
   * Authentication (Au). Defined in CVSS v2.
   *
   * Accepted values: AUTHENTICATION_UNSPECIFIED, AUTHENTICATION_MULTIPLE,
   * AUTHENTICATION_SINGLE, AUTHENTICATION_NONE
   *
   * @param self::AUTHENTICATION_* $authentication
   */
  public function setAuthentication($authentication)
  {
    $this->authentication = $authentication;
  }
  /**
   * @return self::AUTHENTICATION_*
   */
  public function getAuthentication()
  {
    return $this->authentication;
  }
  /**
   * Availability Impact (A). Defined in CVSS v2, v3.
   *
   * Accepted values: IMPACT_UNSPECIFIED, IMPACT_HIGH, IMPACT_LOW, IMPACT_NONE,
   * IMPACT_PARTIAL, IMPACT_COMPLETE
   *
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
  /**
   * The base score is a function of the base metric scores.
   *
   * @param float $baseScore
   */
  public function setBaseScore($baseScore)
  {
    $this->baseScore = $baseScore;
  }
  /**
   * @return float
   */
  public function getBaseScore()
  {
    return $this->baseScore;
  }
  /**
   * Confidentiality Impact (C). Defined in CVSS v2, v3.
   *
   * Accepted values: IMPACT_UNSPECIFIED, IMPACT_HIGH, IMPACT_LOW, IMPACT_NONE,
   * IMPACT_PARTIAL, IMPACT_COMPLETE
   *
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
   * @param float $exploitabilityScore
   */
  public function setExploitabilityScore($exploitabilityScore)
  {
    $this->exploitabilityScore = $exploitabilityScore;
  }
  /**
   * @return float
   */
  public function getExploitabilityScore()
  {
    return $this->exploitabilityScore;
  }
  /**
   * @param float $impactScore
   */
  public function setImpactScore($impactScore)
  {
    $this->impactScore = $impactScore;
  }
  /**
   * @return float
   */
  public function getImpactScore()
  {
    return $this->impactScore;
  }
  /**
   * Integrity Impact (I). Defined in CVSS v2, v3.
   *
   * Accepted values: IMPACT_UNSPECIFIED, IMPACT_HIGH, IMPACT_LOW, IMPACT_NONE,
   * IMPACT_PARTIAL, IMPACT_COMPLETE
   *
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
   * Privileges Required (PR). Defined in CVSS v3, v4.
   *
   * Accepted values: PRIVILEGES_REQUIRED_UNSPECIFIED, PRIVILEGES_REQUIRED_NONE,
   * PRIVILEGES_REQUIRED_LOW, PRIVILEGES_REQUIRED_HIGH
   *
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
   * Scope (S). Defined in CVSS v3.
   *
   * Accepted values: SCOPE_UNSPECIFIED, SCOPE_UNCHANGED, SCOPE_CHANGED
   *
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
   * Subsequent System Availability Impact (SA). Defined in CVSS v4.
   *
   * Accepted values: IMPACT_UNSPECIFIED, IMPACT_HIGH, IMPACT_LOW, IMPACT_NONE,
   * IMPACT_PARTIAL, IMPACT_COMPLETE
   *
   * @param self::SUBSEQUENT_SYSTEM_AVAILABILITY_IMPACT_* $subsequentSystemAvailabilityImpact
   */
  public function setSubsequentSystemAvailabilityImpact($subsequentSystemAvailabilityImpact)
  {
    $this->subsequentSystemAvailabilityImpact = $subsequentSystemAvailabilityImpact;
  }
  /**
   * @return self::SUBSEQUENT_SYSTEM_AVAILABILITY_IMPACT_*
   */
  public function getSubsequentSystemAvailabilityImpact()
  {
    return $this->subsequentSystemAvailabilityImpact;
  }
  /**
   * Subsequent System Confidentiality Impact (SC). Defined in CVSS v4.
   *
   * Accepted values: IMPACT_UNSPECIFIED, IMPACT_HIGH, IMPACT_LOW, IMPACT_NONE,
   * IMPACT_PARTIAL, IMPACT_COMPLETE
   *
   * @param self::SUBSEQUENT_SYSTEM_CONFIDENTIALITY_IMPACT_* $subsequentSystemConfidentialityImpact
   */
  public function setSubsequentSystemConfidentialityImpact($subsequentSystemConfidentialityImpact)
  {
    $this->subsequentSystemConfidentialityImpact = $subsequentSystemConfidentialityImpact;
  }
  /**
   * @return self::SUBSEQUENT_SYSTEM_CONFIDENTIALITY_IMPACT_*
   */
  public function getSubsequentSystemConfidentialityImpact()
  {
    return $this->subsequentSystemConfidentialityImpact;
  }
  /**
   * Subsequent System Integrity Impact (SI). Defined in CVSS v4.
   *
   * Accepted values: IMPACT_UNSPECIFIED, IMPACT_HIGH, IMPACT_LOW, IMPACT_NONE,
   * IMPACT_PARTIAL, IMPACT_COMPLETE
   *
   * @param self::SUBSEQUENT_SYSTEM_INTEGRITY_IMPACT_* $subsequentSystemIntegrityImpact
   */
  public function setSubsequentSystemIntegrityImpact($subsequentSystemIntegrityImpact)
  {
    $this->subsequentSystemIntegrityImpact = $subsequentSystemIntegrityImpact;
  }
  /**
   * @return self::SUBSEQUENT_SYSTEM_INTEGRITY_IMPACT_*
   */
  public function getSubsequentSystemIntegrityImpact()
  {
    return $this->subsequentSystemIntegrityImpact;
  }
  /**
   * User Interaction (UI). Defined in CVSS v3, v4.
   *
   * Accepted values: USER_INTERACTION_UNSPECIFIED, USER_INTERACTION_NONE,
   * USER_INTERACTION_REQUIRED, USER_INTERACTION_PASSIVE,
   * USER_INTERACTION_ACTIVE
   *
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
  /**
   * Vulnerable System Availability Impact (VA). Defined in CVSS v4.
   *
   * Accepted values: IMPACT_UNSPECIFIED, IMPACT_HIGH, IMPACT_LOW, IMPACT_NONE,
   * IMPACT_PARTIAL, IMPACT_COMPLETE
   *
   * @param self::VULNERABLE_SYSTEM_AVAILABILITY_IMPACT_* $vulnerableSystemAvailabilityImpact
   */
  public function setVulnerableSystemAvailabilityImpact($vulnerableSystemAvailabilityImpact)
  {
    $this->vulnerableSystemAvailabilityImpact = $vulnerableSystemAvailabilityImpact;
  }
  /**
   * @return self::VULNERABLE_SYSTEM_AVAILABILITY_IMPACT_*
   */
  public function getVulnerableSystemAvailabilityImpact()
  {
    return $this->vulnerableSystemAvailabilityImpact;
  }
  /**
   * Vulnerable System Confidentiality Impact (VC). Defined in CVSS v4.
   *
   * Accepted values: IMPACT_UNSPECIFIED, IMPACT_HIGH, IMPACT_LOW, IMPACT_NONE,
   * IMPACT_PARTIAL, IMPACT_COMPLETE
   *
   * @param self::VULNERABLE_SYSTEM_CONFIDENTIALITY_IMPACT_* $vulnerableSystemConfidentialityImpact
   */
  public function setVulnerableSystemConfidentialityImpact($vulnerableSystemConfidentialityImpact)
  {
    $this->vulnerableSystemConfidentialityImpact = $vulnerableSystemConfidentialityImpact;
  }
  /**
   * @return self::VULNERABLE_SYSTEM_CONFIDENTIALITY_IMPACT_*
   */
  public function getVulnerableSystemConfidentialityImpact()
  {
    return $this->vulnerableSystemConfidentialityImpact;
  }
  /**
   * Vulnerable System Integrity Impact (VI). Defined in CVSS v4.
   *
   * Accepted values: IMPACT_UNSPECIFIED, IMPACT_HIGH, IMPACT_LOW, IMPACT_NONE,
   * IMPACT_PARTIAL, IMPACT_COMPLETE
   *
   * @param self::VULNERABLE_SYSTEM_INTEGRITY_IMPACT_* $vulnerableSystemIntegrityImpact
   */
  public function setVulnerableSystemIntegrityImpact($vulnerableSystemIntegrityImpact)
  {
    $this->vulnerableSystemIntegrityImpact = $vulnerableSystemIntegrityImpact;
  }
  /**
   * @return self::VULNERABLE_SYSTEM_INTEGRITY_IMPACT_*
   */
  public function getVulnerableSystemIntegrityImpact()
  {
    return $this->vulnerableSystemIntegrityImpact;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CVSS::class, 'Google_Service_ContainerAnalysis_CVSS');
