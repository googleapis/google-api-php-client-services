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

namespace Google\Service\CustomerEngagementSuite;

class GuardrailLlmPolicy extends \Google\Model
{
  /**
   * Policy scope is not specified.
   */
  public const POLICY_SCOPE_POLICY_SCOPE_UNSPECIFIED = 'POLICY_SCOPE_UNSPECIFIED';
  /**
   * Policy check is triggered on user input.
   */
  public const POLICY_SCOPE_USER_QUERY = 'USER_QUERY';
  /**
   * Policy check is triggered on agent response. Applying this policy scope
   * will introduce additional latency before the agent can respond.
   */
  public const POLICY_SCOPE_AGENT_RESPONSE = 'AGENT_RESPONSE';
  /**
   * Policy check is triggered on both user input and agent response. Applying
   * this policy scope will introduce additional latency before the agent can
   * respond.
   */
  public const POLICY_SCOPE_USER_QUERY_AND_AGENT_RESPONSE = 'USER_QUERY_AND_AGENT_RESPONSE';
  /**
   * Optional. By default, the LLM policy check is bypassed for short
   * utterances. Enabling this setting applies the policy check to all
   * utterances, including those that would normally be skipped.
   *
   * @var bool
   */
  public $allowShortUtterance;
  /**
   * Optional. If an error occurs during the policy check, fail open and do not
   * trigger the guardrail.
   *
   * @var bool
   */
  public $failOpen;
  /**
   * Optional. When checking this policy, consider the last 'n' messages in the
   * conversation. When not set a default value of 10 will be used.
   *
   * @var int
   */
  public $maxConversationMessages;
  protected $modelSettingsType = ModelSettings::class;
  protected $modelSettingsDataType = '';
  /**
   * Required. Defines when to apply the policy check during the conversation.
   * If set to `POLICY_SCOPE_UNSPECIFIED`, the policy will be applied to the
   * user input. When applying the policy to the agent response, additional
   * latency will be introduced before the agent can respond.
   *
   * @var string
   */
  public $policyScope;
  /**
   * Required. Policy prompt.
   *
   * @var string
   */
  public $prompt;

  /**
   * Optional. By default, the LLM policy check is bypassed for short
   * utterances. Enabling this setting applies the policy check to all
   * utterances, including those that would normally be skipped.
   *
   * @param bool $allowShortUtterance
   */
  public function setAllowShortUtterance($allowShortUtterance)
  {
    $this->allowShortUtterance = $allowShortUtterance;
  }
  /**
   * @return bool
   */
  public function getAllowShortUtterance()
  {
    return $this->allowShortUtterance;
  }
  /**
   * Optional. If an error occurs during the policy check, fail open and do not
   * trigger the guardrail.
   *
   * @param bool $failOpen
   */
  public function setFailOpen($failOpen)
  {
    $this->failOpen = $failOpen;
  }
  /**
   * @return bool
   */
  public function getFailOpen()
  {
    return $this->failOpen;
  }
  /**
   * Optional. When checking this policy, consider the last 'n' messages in the
   * conversation. When not set a default value of 10 will be used.
   *
   * @param int $maxConversationMessages
   */
  public function setMaxConversationMessages($maxConversationMessages)
  {
    $this->maxConversationMessages = $maxConversationMessages;
  }
  /**
   * @return int
   */
  public function getMaxConversationMessages()
  {
    return $this->maxConversationMessages;
  }
  /**
   * Optional. Model settings.
   *
   * @param ModelSettings $modelSettings
   */
  public function setModelSettings(ModelSettings $modelSettings)
  {
    $this->modelSettings = $modelSettings;
  }
  /**
   * @return ModelSettings
   */
  public function getModelSettings()
  {
    return $this->modelSettings;
  }
  /**
   * Required. Defines when to apply the policy check during the conversation.
   * If set to `POLICY_SCOPE_UNSPECIFIED`, the policy will be applied to the
   * user input. When applying the policy to the agent response, additional
   * latency will be introduced before the agent can respond.
   *
   * Accepted values: POLICY_SCOPE_UNSPECIFIED, USER_QUERY, AGENT_RESPONSE,
   * USER_QUERY_AND_AGENT_RESPONSE
   *
   * @param self::POLICY_SCOPE_* $policyScope
   */
  public function setPolicyScope($policyScope)
  {
    $this->policyScope = $policyScope;
  }
  /**
   * @return self::POLICY_SCOPE_*
   */
  public function getPolicyScope()
  {
    return $this->policyScope;
  }
  /**
   * Required. Policy prompt.
   *
   * @param string $prompt
   */
  public function setPrompt($prompt)
  {
    $this->prompt = $prompt;
  }
  /**
   * @return string
   */
  public function getPrompt()
  {
    return $this->prompt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GuardrailLlmPolicy::class, 'Google_Service_CustomerEngagementSuite_GuardrailLlmPolicy');
