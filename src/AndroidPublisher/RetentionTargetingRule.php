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

namespace Google\Service\AndroidPublisher;

class RetentionTargetingRule extends \Google\Model
{
  /**
   * Optional. Whether this offer can be claimed multiple times by a user. If
   * set to false, a user who has ever subscribed to this offer will never be
   * eligible for it again. If set to true, a user may become eligible again
   * after the duration specified in `min_offer_cooldown_duration` has passed
   * since the end of the previous retention offer's discount period. Defaults
   * to false if not specified.
   *
   * @var bool
   */
  public $allowMultipleClaims;
  /**
   * Optional. The minimum duration a user must have been a paid subscriber to
   * be eligible, specified in ISO 8601 format. If not specified, no minimum
   * subscription time is considered for this rule.
   *
   * @var string
   */
  public $minDuration;
  /**
   * Optional. The minimum duration that must pass after the previous retention
   * offer's discount period ends before the user is eligible again. Specified
   * in ISO 8601 format. Applicable only if allow_multiple_claims is true.
   *
   * @var string
   */
  public $minOfferCooldownDuration;
  protected $scopeType = TargetingRuleScope::class;
  protected $scopeDataType = '';

  /**
   * Optional. Whether this offer can be claimed multiple times by a user. If
   * set to false, a user who has ever subscribed to this offer will never be
   * eligible for it again. If set to true, a user may become eligible again
   * after the duration specified in `min_offer_cooldown_duration` has passed
   * since the end of the previous retention offer's discount period. Defaults
   * to false if not specified.
   *
   * @param bool $allowMultipleClaims
   */
  public function setAllowMultipleClaims($allowMultipleClaims)
  {
    $this->allowMultipleClaims = $allowMultipleClaims;
  }
  /**
   * @return bool
   */
  public function getAllowMultipleClaims()
  {
    return $this->allowMultipleClaims;
  }
  /**
   * Optional. The minimum duration a user must have been a paid subscriber to
   * be eligible, specified in ISO 8601 format. If not specified, no minimum
   * subscription time is considered for this rule.
   *
   * @param string $minDuration
   */
  public function setMinDuration($minDuration)
  {
    $this->minDuration = $minDuration;
  }
  /**
   * @return string
   */
  public function getMinDuration()
  {
    return $this->minDuration;
  }
  /**
   * Optional. The minimum duration that must pass after the previous retention
   * offer's discount period ends before the user is eligible again. Specified
   * in ISO 8601 format. Applicable only if allow_multiple_claims is true.
   *
   * @param string $minOfferCooldownDuration
   */
  public function setMinOfferCooldownDuration($minOfferCooldownDuration)
  {
    $this->minOfferCooldownDuration = $minOfferCooldownDuration;
  }
  /**
   * @return string
   */
  public function getMinOfferCooldownDuration()
  {
    return $this->minOfferCooldownDuration;
  }
  /**
   * Optional. The scope of subscriptions this rule considers. Only allows "this
   * subscription".
   *
   * @param TargetingRuleScope $scope
   */
  public function setScope(TargetingRuleScope $scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return TargetingRuleScope
   */
  public function getScope()
  {
    return $this->scope;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RetentionTargetingRule::class, 'Google_Service_AndroidPublisher_RetentionTargetingRule');
