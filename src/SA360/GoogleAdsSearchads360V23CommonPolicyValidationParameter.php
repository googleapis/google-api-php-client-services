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

class GoogleAdsSearchads360V23CommonPolicyValidationParameter extends \Google\Collection
{
  protected $collection_key = 'ignorablePolicyTopics';
  protected $exemptPolicyViolationKeysType = GoogleAdsSearchads360V23CommonPolicyViolationKey::class;
  protected $exemptPolicyViolationKeysDataType = 'array';
  /**
   * The list of policy topics that should not cause a `PolicyFindingError` to
   * be reported. This field is used for ad policy exemptions. It corresponds to
   * the `PolicyTopicEntry.topic` field. If this field is populated, then
   * `exempt_policy_violation_keys` must be empty. Resources that violate these
   * policies will be saved, but will not be eligible to serve. They may begin
   * serving at a later time due to a change in policies, re-review of the
   * resource, or a change in advertiser certificates.
   *
   * @var string[]
   */
  public $ignorablePolicyTopics;

  /**
   * The list of policy violation keys that should not cause a
   * `PolicyViolationError` to be reported. Not all policy violations are
   * exemptable. Refer to the `is_exemptible` field in the returned
   * `PolicyViolationError`. This field is used for keyword policy exemptions.
   * If this field is populated, then `ignorable_policy_topics` must be empty.
   * Resources that violate these policies will be saved, but will not be
   * eligible to serve. They may begin serving at a later time due to a change
   * in policies, re-review of the resource, or a change in advertiser
   * certificates.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyViolationKey[] $exemptPolicyViolationKeys
   */
  public function setExemptPolicyViolationKeys($exemptPolicyViolationKeys)
  {
    $this->exemptPolicyViolationKeys = $exemptPolicyViolationKeys;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyViolationKey[]
   */
  public function getExemptPolicyViolationKeys()
  {
    return $this->exemptPolicyViolationKeys;
  }
  /**
   * The list of policy topics that should not cause a `PolicyFindingError` to
   * be reported. This field is used for ad policy exemptions. It corresponds to
   * the `PolicyTopicEntry.topic` field. If this field is populated, then
   * `exempt_policy_violation_keys` must be empty. Resources that violate these
   * policies will be saved, but will not be eligible to serve. They may begin
   * serving at a later time due to a change in policies, re-review of the
   * resource, or a change in advertiser certificates.
   *
   * @param string[] $ignorablePolicyTopics
   */
  public function setIgnorablePolicyTopics($ignorablePolicyTopics)
  {
    $this->ignorablePolicyTopics = $ignorablePolicyTopics;
  }
  /**
   * @return string[]
   */
  public function getIgnorablePolicyTopics()
  {
    return $this->ignorablePolicyTopics;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPolicyValidationParameter::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPolicyValidationParameter');
