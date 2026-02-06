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

class Guardrail extends \Google\Model
{
  protected $actionType = TriggerAction::class;
  protected $actionDataType = '';
  protected $codeCallbackType = GuardrailCodeCallback::class;
  protected $codeCallbackDataType = '';
  protected $contentFilterType = GuardrailContentFilter::class;
  protected $contentFilterDataType = '';
  /**
   * Output only. Timestamp when the guardrail was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Description of the guardrail.
   *
   * @var string
   */
  public $description;
  /**
   * Required. Display name of the guardrail.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. Whether the guardrail is enabled.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Etag used to ensure the object hasn't changed during a read-modify-write
   * operation. If the etag is empty, the update will overwrite any concurrent
   * changes.
   *
   * @var string
   */
  public $etag;
  protected $llmPolicyType = GuardrailLlmPolicy::class;
  protected $llmPolicyDataType = '';
  protected $llmPromptSecurityType = GuardrailLlmPromptSecurity::class;
  protected $llmPromptSecurityDataType = '';
  protected $modelSafetyType = GuardrailModelSafety::class;
  protected $modelSafetyDataType = '';
  /**
   * Identifier. The unique identifier of the guardrail. Format:
   * `projects/{project}/locations/{location}/apps/{app}/guardrails/{guardrail}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Timestamp when the guardrail was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. Action to take when the guardrail is triggered.
   *
   * @param TriggerAction $action
   */
  public function setAction(TriggerAction $action)
  {
    $this->action = $action;
  }
  /**
   * @return TriggerAction
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Optional. Guardrail that potentially blocks the conversation based on the
   * result of the callback execution.
   *
   * @param GuardrailCodeCallback $codeCallback
   */
  public function setCodeCallback(GuardrailCodeCallback $codeCallback)
  {
    $this->codeCallback = $codeCallback;
  }
  /**
   * @return GuardrailCodeCallback
   */
  public function getCodeCallback()
  {
    return $this->codeCallback;
  }
  /**
   * Optional. Guardrail that bans certain content from being used in the
   * conversation.
   *
   * @param GuardrailContentFilter $contentFilter
   */
  public function setContentFilter(GuardrailContentFilter $contentFilter)
  {
    $this->contentFilter = $contentFilter;
  }
  /**
   * @return GuardrailContentFilter
   */
  public function getContentFilter()
  {
    return $this->contentFilter;
  }
  /**
   * Output only. Timestamp when the guardrail was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Description of the guardrail.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. Display name of the guardrail.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Whether the guardrail is enabled.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Etag used to ensure the object hasn't changed during a read-modify-write
   * operation. If the etag is empty, the update will overwrite any concurrent
   * changes.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Optional. Guardrail that blocks the conversation if the LLM response is
   * considered violating the policy based on the LLM classification.
   *
   * @param GuardrailLlmPolicy $llmPolicy
   */
  public function setLlmPolicy(GuardrailLlmPolicy $llmPolicy)
  {
    $this->llmPolicy = $llmPolicy;
  }
  /**
   * @return GuardrailLlmPolicy
   */
  public function getLlmPolicy()
  {
    return $this->llmPolicy;
  }
  /**
   * Optional. Guardrail that blocks the conversation if the prompt is
   * considered unsafe based on the LLM classification.
   *
   * @param GuardrailLlmPromptSecurity $llmPromptSecurity
   */
  public function setLlmPromptSecurity(GuardrailLlmPromptSecurity $llmPromptSecurity)
  {
    $this->llmPromptSecurity = $llmPromptSecurity;
  }
  /**
   * @return GuardrailLlmPromptSecurity
   */
  public function getLlmPromptSecurity()
  {
    return $this->llmPromptSecurity;
  }
  /**
   * Optional. Guardrail that blocks the conversation if the LLM response is
   * considered unsafe based on the model safety settings.
   *
   * @param GuardrailModelSafety $modelSafety
   */
  public function setModelSafety(GuardrailModelSafety $modelSafety)
  {
    $this->modelSafety = $modelSafety;
  }
  /**
   * @return GuardrailModelSafety
   */
  public function getModelSafety()
  {
    return $this->modelSafety;
  }
  /**
   * Identifier. The unique identifier of the guardrail. Format:
   * `projects/{project}/locations/{location}/apps/{app}/guardrails/{guardrail}`
   *
   * @param string $name
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
   * Output only. Timestamp when the guardrail was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Guardrail::class, 'Google_Service_CustomerEngagementSuite_Guardrail');
