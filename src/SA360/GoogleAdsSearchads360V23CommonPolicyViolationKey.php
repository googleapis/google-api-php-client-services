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

class GoogleAdsSearchads360V23CommonPolicyViolationKey extends \Google\Model
{
  /**
   * Unique ID of the violated policy.
   *
   * @var string
   */
  public $policyName;
  /**
   * The text that violates the policy if specified. Otherwise, refers to the
   * policy in general (for example, when requesting to be exempt from the whole
   * policy). If not specified for criterion exemptions, the whole policy is
   * implied. Must be specified for ad exemptions.
   *
   * @var string
   */
  public $violatingText;

  /**
   * Unique ID of the violated policy.
   *
   * @param string $policyName
   */
  public function setPolicyName($policyName)
  {
    $this->policyName = $policyName;
  }
  /**
   * @return string
   */
  public function getPolicyName()
  {
    return $this->policyName;
  }
  /**
   * The text that violates the policy if specified. Otherwise, refers to the
   * policy in general (for example, when requesting to be exempt from the whole
   * policy). If not specified for criterion exemptions, the whole policy is
   * implied. Must be specified for ad exemptions.
   *
   * @param string $violatingText
   */
  public function setViolatingText($violatingText)
  {
    $this->violatingText = $violatingText;
  }
  /**
   * @return string
   */
  public function getViolatingText()
  {
    return $this->violatingText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPolicyViolationKey::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPolicyViolationKey');
