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

class GoogleCloudSecuritycenterV2ArtifactGuardPolicy extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const TYPE_ARTIFACT_GUARD_POLICY_TYPE_UNSPECIFIED = 'ARTIFACT_GUARD_POLICY_TYPE_UNSPECIFIED';
  /**
   * Vulnerability type.
   */
  public const TYPE_VULNERABILITY = 'VULNERABILITY';
  /**
   * The reason for the policy failure, for example, "severity=HIGH AND
   * max_vuln_count=2".
   *
   * @var string
   */
  public $failureReason;
  /**
   * The ID of the failing policy, for example,
   * "organizations/3392779/locations/global/policies/prod-policy".
   *
   * @var string
   */
  public $policyId;
  /**
   * The type of the policy evaluation.
   *
   * @var string
   */
  public $type;

  /**
   * The reason for the policy failure, for example, "severity=HIGH AND
   * max_vuln_count=2".
   *
   * @param string $failureReason
   */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /**
   * @return string
   */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /**
   * The ID of the failing policy, for example,
   * "organizations/3392779/locations/global/policies/prod-policy".
   *
   * @param string $policyId
   */
  public function setPolicyId($policyId)
  {
    $this->policyId = $policyId;
  }
  /**
   * @return string
   */
  public function getPolicyId()
  {
    return $this->policyId;
  }
  /**
   * The type of the policy evaluation.
   *
   * Accepted values: ARTIFACT_GUARD_POLICY_TYPE_UNSPECIFIED, VULNERABILITY
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2ArtifactGuardPolicy::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2ArtifactGuardPolicy');
