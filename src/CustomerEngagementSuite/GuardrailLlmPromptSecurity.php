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

class GuardrailLlmPromptSecurity extends \Google\Model
{
  protected $customPolicyType = GuardrailLlmPolicy::class;
  protected $customPolicyDataType = '';
  protected $defaultSettingsType = GuardrailLlmPromptSecurityDefaultSecuritySettings::class;
  protected $defaultSettingsDataType = '';
  /**
   * Optional. Determines the behavior when the guardrail encounters an LLM
   * error. - If true: the guardrail is bypassed. - If false (default): the
   * guardrail triggers/blocks. Note: If a custom policy is provided, this field
   * is ignored in favor of the policy's 'fail_open' configuration.
   *
   * @var bool
   */
  public $failOpen;

  /**
   * Optional. Use a user-defined LlmPolicy to configure the security guardrail.
   *
   * @param GuardrailLlmPolicy $customPolicy
   */
  public function setCustomPolicy(GuardrailLlmPolicy $customPolicy)
  {
    $this->customPolicy = $customPolicy;
  }
  /**
   * @return GuardrailLlmPolicy
   */
  public function getCustomPolicy()
  {
    return $this->customPolicy;
  }
  /**
   * Optional. Use the system's predefined default security settings. To select
   * this mode, include an empty 'default_settings' message in the request. The
   * 'default_prompt_template' field within will be populated by the server in
   * the response.
   *
   * @param GuardrailLlmPromptSecurityDefaultSecuritySettings $defaultSettings
   */
  public function setDefaultSettings(GuardrailLlmPromptSecurityDefaultSecuritySettings $defaultSettings)
  {
    $this->defaultSettings = $defaultSettings;
  }
  /**
   * @return GuardrailLlmPromptSecurityDefaultSecuritySettings
   */
  public function getDefaultSettings()
  {
    return $this->defaultSettings;
  }
  /**
   * Optional. Determines the behavior when the guardrail encounters an LLM
   * error. - If true: the guardrail is bypassed. - If false (default): the
   * guardrail triggers/blocks. Note: If a custom policy is provided, this field
   * is ignored in favor of the policy's 'fail_open' configuration.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GuardrailLlmPromptSecurity::class, 'Google_Service_CustomerEngagementSuite_GuardrailLlmPromptSecurity');
