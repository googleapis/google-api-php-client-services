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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1AssistAnswer extends \Google\Collection
{
  protected $collection_key = 'replies';
  /**
   * @var string[]
   */
  public $assistSkippedReasons;
  protected $customerPolicyEnforcementResultType = GoogleCloudDiscoveryengineV1AssistAnswerCustomerPolicyEnforcementResult::class;
  protected $customerPolicyEnforcementResultDataType = '';
  /**
   * @var string
   */
  public $name;
  protected $repliesType = GoogleCloudDiscoveryengineV1AssistAnswerReply::class;
  protected $repliesDataType = 'array';
  /**
   * @var string
   */
  public $state;

  /**
   * @param string[]
   */
  public function setAssistSkippedReasons($assistSkippedReasons)
  {
    $this->assistSkippedReasons = $assistSkippedReasons;
  }
  /**
   * @return string[]
   */
  public function getAssistSkippedReasons()
  {
    return $this->assistSkippedReasons;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1AssistAnswerCustomerPolicyEnforcementResult
   */
  public function setCustomerPolicyEnforcementResult(GoogleCloudDiscoveryengineV1AssistAnswerCustomerPolicyEnforcementResult $customerPolicyEnforcementResult)
  {
    $this->customerPolicyEnforcementResult = $customerPolicyEnforcementResult;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AssistAnswerCustomerPolicyEnforcementResult
   */
  public function getCustomerPolicyEnforcementResult()
  {
    return $this->customerPolicyEnforcementResult;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1AssistAnswerReply[]
   */
  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AssistAnswerReply[]
   */
  public function getReplies()
  {
    return $this->replies;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1AssistAnswer::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1AssistAnswer');
