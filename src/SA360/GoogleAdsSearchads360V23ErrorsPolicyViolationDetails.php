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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ErrorsPolicyViolationDetails extends \Google\Model
{
  /**
   * Human readable description of policy violation.
   *
   * @var string
   */
  public $externalPolicyDescription;
  /**
   * Human readable name of the policy.
   *
   * @var string
   */
  public $externalPolicyName;
  /**
   * Whether user can file an exemption request for this violation.
   *
   * @var bool
   */
  public $isExemptible;
  protected $keyType = GoogleAdsSearchads360V23CommonPolicyViolationKey::class;
  protected $keyDataType = '';

  /**
   * Human readable description of policy violation.
   *
   * @param string $externalPolicyDescription
   */
  public function setExternalPolicyDescription($externalPolicyDescription)
  {
    $this->externalPolicyDescription = $externalPolicyDescription;
  }
  /**
   * @return string
   */
  public function getExternalPolicyDescription()
  {
    return $this->externalPolicyDescription;
  }
  /**
   * Human readable name of the policy.
   *
   * @param string $externalPolicyName
   */
  public function setExternalPolicyName($externalPolicyName)
  {
    $this->externalPolicyName = $externalPolicyName;
  }
  /**
   * @return string
   */
  public function getExternalPolicyName()
  {
    return $this->externalPolicyName;
  }
  /**
   * Whether user can file an exemption request for this violation.
   *
   * @param bool $isExemptible
   */
  public function setIsExemptible($isExemptible)
  {
    $this->isExemptible = $isExemptible;
  }
  /**
   * @return bool
   */
  public function getIsExemptible()
  {
    return $this->isExemptible;
  }
  /**
   * Unique identifier for this violation. If policy is exemptible, this key may
   * be used to request exemption.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyViolationKey $key
   */
  public function setKey(GoogleAdsSearchads360V23CommonPolicyViolationKey $key)
  {
    $this->key = $key;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyViolationKey
   */
  public function getKey()
  {
    return $this->key;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ErrorsPolicyViolationDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ErrorsPolicyViolationDetails');
