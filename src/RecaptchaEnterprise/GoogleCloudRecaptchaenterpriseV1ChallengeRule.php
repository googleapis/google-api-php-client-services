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

namespace Google\Service\RecaptchaEnterprise;

class GoogleCloudRecaptchaenterpriseV1ChallengeRule extends \Google\Model
{
  protected $challengeType = GoogleCloudRecaptchaenterpriseV1ChallengeRuleChallengeOutcome::class;
  protected $challengeDataType = '';
  /**
   * Optional. A CEL condition that must be met for this rule to apply. If
   * unspecified, the rule applies unconditionally. The following fields can be
   * referenced in the condition: * `score` * `user_ip_address` * `user_asn` *
   * `user_agent` * `region_code` * `verified_bots.name` *
   * `verified_bots.bot_type` Examples: * `score < 0.5` * `user_ip_address ==
   * "123.45.67.89"` * `user_agent.contains("Chrome")` * `score < 0.5 &&
   * user_ip_address == "123.45.67.89"`
   *
   * @var string
   */
  public $condition;
  protected $noChallengeType = GoogleCloudRecaptchaenterpriseV1ChallengeRuleNoChallengeOutcome::class;
  protected $noChallengeDataType = '';

  /**
   * Present a challenge to the user.
   *
   * @param GoogleCloudRecaptchaenterpriseV1ChallengeRuleChallengeOutcome $challenge
   */
  public function setChallenge(GoogleCloudRecaptchaenterpriseV1ChallengeRuleChallengeOutcome $challenge)
  {
    $this->challenge = $challenge;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1ChallengeRuleChallengeOutcome
   */
  public function getChallenge()
  {
    return $this->challenge;
  }
  /**
   * Optional. A CEL condition that must be met for this rule to apply. If
   * unspecified, the rule applies unconditionally. The following fields can be
   * referenced in the condition: * `score` * `user_ip_address` * `user_asn` *
   * `user_agent` * `region_code` * `verified_bots.name` *
   * `verified_bots.bot_type` Examples: * `score < 0.5` * `user_ip_address ==
   * "123.45.67.89"` * `user_agent.contains("Chrome")` * `score < 0.5 &&
   * user_ip_address == "123.45.67.89"`
   *
   * @param string $condition
   */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return string
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * Do not present a challenge to the user.
   *
   * @param GoogleCloudRecaptchaenterpriseV1ChallengeRuleNoChallengeOutcome $noChallenge
   */
  public function setNoChallenge(GoogleCloudRecaptchaenterpriseV1ChallengeRuleNoChallengeOutcome $noChallenge)
  {
    $this->noChallenge = $noChallenge;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1ChallengeRuleNoChallengeOutcome
   */
  public function getNoChallenge()
  {
    return $this->noChallenge;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1ChallengeRule::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ChallengeRule');
