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

class GoogleCloudSecuritycenterV2RuntimeInfo extends \Google\Model
{
  public const EVIDENCE_RUNTIME_EVIDENCE_UNSPECIFIED = 'RUNTIME_EVIDENCE_UNSPECIFIED';
  public const EVIDENCE_VULNERABLE_PACKAGE_NOT_LOADED = 'VULNERABLE_PACKAGE_NOT_LOADED';
  public const EVIDENCE_VULNERABLE_PACKAGE_LOADED = 'VULNERABLE_PACKAGE_LOADED';
  public const EVIDENCE_VULNERABLE_CLASS_OR_SCRIPT_LOADED = 'VULNERABLE_CLASS_OR_SCRIPT_LOADED';
  public const EVIDENCE_VULNERABLE_FUNCTION_EXECUTED = 'VULNERABLE_FUNCTION_EXECUTED';
  public const IMPACT_RUNTIME_IMPACT_UNSPECIFIED = 'RUNTIME_IMPACT_UNSPECIFIED';
  public const IMPACT_NO_IMPACT = 'NO_IMPACT';
  public const IMPACT_POTENTIAL_IMPACT = 'POTENTIAL_IMPACT';
  public const IMPACT_ACTIVE_IMPACT = 'ACTIVE_IMPACT';
  /**
   * @var string
   */
  public $evidence;
  /**
   * @var string
   */
  public $firstObservedTime;
  /**
   * @var string
   */
  public $impact;
  /**
   * @var string
   */
  public $lastObservedTime;

  /**
   * @param self::EVIDENCE_* $evidence
   */
  public function setEvidence($evidence)
  {
    $this->evidence = $evidence;
  }
  /**
   * @return self::EVIDENCE_*
   */
  public function getEvidence()
  {
    return $this->evidence;
  }
  /**
   * @param string $firstObservedTime
   */
  public function setFirstObservedTime($firstObservedTime)
  {
    $this->firstObservedTime = $firstObservedTime;
  }
  /**
   * @return string
   */
  public function getFirstObservedTime()
  {
    return $this->firstObservedTime;
  }
  /**
   * @param self::IMPACT_* $impact
   */
  public function setImpact($impact)
  {
    $this->impact = $impact;
  }
  /**
   * @return self::IMPACT_*
   */
  public function getImpact()
  {
    return $this->impact;
  }
  /**
   * @param string $lastObservedTime
   */
  public function setLastObservedTime($lastObservedTime)
  {
    $this->lastObservedTime = $lastObservedTime;
  }
  /**
   * @return string
   */
  public function getLastObservedTime()
  {
    return $this->lastObservedTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2RuntimeInfo::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2RuntimeInfo');
