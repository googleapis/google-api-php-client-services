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

namespace Google\Service\Aiplatform;

class GenaiVertexV1Interaction extends \Google\Collection
{
  /**
   * Default service tier, which is standard.
   */
  public const SERVICE_TIER_SERVICE_TIER_UNSPECIFIED = 'SERVICE_TIER_UNSPECIFIED';
  /**
   * Flex service tier.
   */
  public const SERVICE_TIER_SERVICE_TIER_FLEX = 'SERVICE_TIER_FLEX';
  /**
   * Standard service tier.
   */
  public const SERVICE_TIER_SERVICE_TIER_STANDARD = 'SERVICE_TIER_STANDARD';
  /**
   * Priority service tier.
   */
  public const SERVICE_TIER_SERVICE_TIER_PRIORITY = 'SERVICE_TIER_PRIORITY';
  /**
   * Deferred service tier.
   */
  public const SERVICE_TIER_SERVICE_TIER_DEFERRED = 'SERVICE_TIER_DEFERRED';
  /**
   * Default value. This value is unused.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The interaction is in progress.
   */
  public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
  /**
   * The interaction requires action/input from the user.
   */
  public const STATUS_REQUIRES_ACTION = 'REQUIRES_ACTION';
  /**
   * The interaction is completed.
   */
  public const STATUS_COMPLETED = 'COMPLETED';
  /**
   * The interaction failed.
   */
  public const STATUS_FAILED = 'FAILED';
  /**
   * The interaction was cancelled.
   */
  public const STATUS_CANCELLED = 'CANCELLED';
  /**
   * The interaction is completed, but contains incomplete results (e.g. hitting
   * max_tokens).
   */
  public const STATUS_INCOMPLETE = 'INCOMPLETE';
  /**
   * The interaction is queued, waiting for processing (e.g. waiting for off-
   * peak capacity).
   */
  public const STATUS_QUEUED = 'QUEUED';
  /**
   * The interaction requires at least one more request for it to be completed.
   * The next request should set the continuation_token to the one returned by
   * this request.
   */
  public const STATUS_REQUIRES_CONTINUATION = 'REQUIRES_CONTINUATION';
  protected $collection_key = 'tools';
  protected $agentInteractionType = GenaiVertexV1AgentInteraction::class;
  protected $agentInteractionDataType = '';
  protected $contentType = GenaiVertexV1Content::class;
  protected $contentDataType = '';
  /**
   * Required. Output only. The time at which the response was created in ISO
   * 8601 format (YYYY-MM-DDThh:mm:ssZ).
   *
   * @var string
   */
  public $created;
  /**
   * The environment ID for the interaction. Can be 'remote' for default
   * environment.
   *
   * @var string
   */
  public $envId;
  /**
   * Output only. The environment ID for the interaction. Only populated if
   * environment config is set in the request.
   *
   * @var string
   */
  public $environmentId;
  protected $errorsType = GenaiVertexV1Error::class;
  protected $errorsDataType = 'array';
  /**
   * Required. Output only. A unique identifier for the interaction completion.
   *
   * @var string
   */
  public $id;
  /**
   * The labels with user-defined metadata for the request. Label keys and
   * values can be no longer than 63 characters (Unicode codepoints) and can
   * only contain lowercase letters, numeric characters, underscores, and
   * dashes. International characters are allowed. Label values are optional.
   * Label keys must start with a letter.
   *
   * @var string[]
   */
  public $labels;
  protected $modelInteractionType = GenaiVertexV1ModelInteraction::class;
  protected $modelInteractionDataType = '';
  /**
   * The ID of the previous interaction, if any.
   *
   * @var string
   */
  public $previousInteractionId;
  protected $responseFormatListType = GenaiVertexV1ResponseFormatList::class;
  protected $responseFormatListDataType = '';
  protected $responseFormatSingletonType = GenaiVertexV1ResponseFormat::class;
  protected $responseFormatSingletonDataType = '';
  protected $safetySettingsType = GenaiVertexV1SafetySetting::class;
  protected $safetySettingsDataType = 'array';
  /**
   * The service tier for the interaction.
   *
   * @var string
   */
  public $serviceTier;
  /**
   * Required. Output only. The status of the interaction.
   *
   * @var string
   */
  public $status;
  protected $stepListType = GenaiVertexV1StepList::class;
  protected $stepListDataType = '';
  protected $stepsType = GenaiVertexV1Step::class;
  protected $stepsDataType = 'array';
  /**
   * A string input for the interaction, it will be processed as a single text
   * input.
   *
   * @var string
   */
  public $stringContent;
  /**
   * System instruction for the interaction.
   *
   * @var string
   */
  public $systemInstruction;
  protected $toolsType = GenaiVertexV1Tool::class;
  protected $toolsDataType = 'array';
  /**
   * Required. Output only. The time at which the response was last updated in
   * ISO 8601 format (YYYY-MM-DDThh:mm:ssZ).
   *
   * @var string
   */
  public $updated;
  protected $usageType = GenaiVertexV1InteractionUsage::class;
  protected $usageDataType = '';

  /**
   * Interaction for generating the completion using agents.
   *
   * @param GenaiVertexV1AgentInteraction $agentInteraction
   */
  public function setAgentInteraction(GenaiVertexV1AgentInteraction $agentInteraction)
  {
    $this->agentInteraction = $agentInteraction;
  }
  /**
   * @return GenaiVertexV1AgentInteraction
   */
  public function getAgentInteraction()
  {
    return $this->agentInteraction;
  }
  /**
   * The content for the interaction.
   *
   * @param GenaiVertexV1Content $content
   */
  public function setContent(GenaiVertexV1Content $content)
  {
    $this->content = $content;
  }
  /**
   * @return GenaiVertexV1Content
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Required. Output only. The time at which the response was created in ISO
   * 8601 format (YYYY-MM-DDThh:mm:ssZ).
   *
   * @param string $created
   */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /**
   * @return string
   */
  public function getCreated()
  {
    return $this->created;
  }
  /**
   * The environment ID for the interaction. Can be 'remote' for default
   * environment.
   *
   * @param string $envId
   */
  public function setEnvId($envId)
  {
    $this->envId = $envId;
  }
  /**
   * @return string
   */
  public function getEnvId()
  {
    return $this->envId;
  }
  /**
   * Output only. The environment ID for the interaction. Only populated if
   * environment config is set in the request.
   *
   * @param string $environmentId
   */
  public function setEnvironmentId($environmentId)
  {
    $this->environmentId = $environmentId;
  }
  /**
   * @return string
   */
  public function getEnvironmentId()
  {
    return $this->environmentId;
  }
  /**
   * Output only. Diagnostic faults / platform errors recorded on the
   * interaction.
   *
   * @param GenaiVertexV1Error[] $errors
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return GenaiVertexV1Error[]
   */
  public function getErrors()
  {
    return $this->errors;
  }
  /**
   * Required. Output only. A unique identifier for the interaction completion.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * The labels with user-defined metadata for the request. Label keys and
   * values can be no longer than 63 characters (Unicode codepoints) and can
   * only contain lowercase letters, numeric characters, underscores, and
   * dashes. International characters are allowed. Label values are optional.
   * Label keys must start with a letter.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Interaction for generating the completion using models.
   *
   * @param GenaiVertexV1ModelInteraction $modelInteraction
   */
  public function setModelInteraction(GenaiVertexV1ModelInteraction $modelInteraction)
  {
    $this->modelInteraction = $modelInteraction;
  }
  /**
   * @return GenaiVertexV1ModelInteraction
   */
  public function getModelInteraction()
  {
    return $this->modelInteraction;
  }
  /**
   * The ID of the previous interaction, if any.
   *
   * @param string $previousInteractionId
   */
  public function setPreviousInteractionId($previousInteractionId)
  {
    $this->previousInteractionId = $previousInteractionId;
  }
  /**
   * @return string
   */
  public function getPreviousInteractionId()
  {
    return $this->previousInteractionId;
  }
  /**
   * @param GenaiVertexV1ResponseFormatList $responseFormatList
   */
  public function setResponseFormatList(GenaiVertexV1ResponseFormatList $responseFormatList)
  {
    $this->responseFormatList = $responseFormatList;
  }
  /**
   * @return GenaiVertexV1ResponseFormatList
   */
  public function getResponseFormatList()
  {
    return $this->responseFormatList;
  }
  /**
   * @param GenaiVertexV1ResponseFormat $responseFormatSingleton
   */
  public function setResponseFormatSingleton(GenaiVertexV1ResponseFormat $responseFormatSingleton)
  {
    $this->responseFormatSingleton = $responseFormatSingleton;
  }
  /**
   * @return GenaiVertexV1ResponseFormat
   */
  public function getResponseFormatSingleton()
  {
    return $this->responseFormatSingleton;
  }
  /**
   * Safety settings for the interaction.
   *
   * @param GenaiVertexV1SafetySetting[] $safetySettings
   */
  public function setSafetySettings($safetySettings)
  {
    $this->safetySettings = $safetySettings;
  }
  /**
   * @return GenaiVertexV1SafetySetting[]
   */
  public function getSafetySettings()
  {
    return $this->safetySettings;
  }
  /**
   * The service tier for the interaction.
   *
   * Accepted values: SERVICE_TIER_UNSPECIFIED, SERVICE_TIER_FLEX,
   * SERVICE_TIER_STANDARD, SERVICE_TIER_PRIORITY, SERVICE_TIER_DEFERRED
   *
   * @param self::SERVICE_TIER_* $serviceTier
   */
  public function setServiceTier($serviceTier)
  {
    $this->serviceTier = $serviceTier;
  }
  /**
   * @return self::SERVICE_TIER_*
   */
  public function getServiceTier()
  {
    return $this->serviceTier;
  }
  /**
   * Required. Output only. The status of the interaction.
   *
   * Accepted values: UNSPECIFIED, IN_PROGRESS, REQUIRES_ACTION, COMPLETED,
   * FAILED, CANCELLED, INCOMPLETE, QUEUED, REQUIRES_CONTINUATION
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Input only. The steps for the interaction.
   *
   * @param GenaiVertexV1StepList $stepList
   */
  public function setStepList(GenaiVertexV1StepList $stepList)
  {
    $this->stepList = $stepList;
  }
  /**
   * @return GenaiVertexV1StepList
   */
  public function getStepList()
  {
    return $this->stepList;
  }
  /**
   * Required. Output only. The steps that make up the interaction, when
   * included in the response.
   *
   * @param GenaiVertexV1Step[] $steps
   */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /**
   * @return GenaiVertexV1Step[]
   */
  public function getSteps()
  {
    return $this->steps;
  }
  /**
   * A string input for the interaction, it will be processed as a single text
   * input.
   *
   * @param string $stringContent
   */
  public function setStringContent($stringContent)
  {
    $this->stringContent = $stringContent;
  }
  /**
   * @return string
   */
  public function getStringContent()
  {
    return $this->stringContent;
  }
  /**
   * System instruction for the interaction.
   *
   * @param string $systemInstruction
   */
  public function setSystemInstruction($systemInstruction)
  {
    $this->systemInstruction = $systemInstruction;
  }
  /**
   * @return string
   */
  public function getSystemInstruction()
  {
    return $this->systemInstruction;
  }
  /**
   * A list of tool declarations the model may call during interaction.
   *
   * @param GenaiVertexV1Tool[] $tools
   */
  public function setTools($tools)
  {
    $this->tools = $tools;
  }
  /**
   * @return GenaiVertexV1Tool[]
   */
  public function getTools()
  {
    return $this->tools;
  }
  /**
   * Required. Output only. The time at which the response was last updated in
   * ISO 8601 format (YYYY-MM-DDThh:mm:ssZ).
   *
   * @param string $updated
   */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /**
   * @return string
   */
  public function getUpdated()
  {
    return $this->updated;
  }
  /**
   * Output only. Statistics on the interaction request's token usage.
   *
   * @param GenaiVertexV1InteractionUsage $usage
   */
  public function setUsage(GenaiVertexV1InteractionUsage $usage)
  {
    $this->usage = $usage;
  }
  /**
   * @return GenaiVertexV1InteractionUsage
   */
  public function getUsage()
  {
    return $this->usage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1Interaction::class, 'Google_Service_Aiplatform_GenaiVertexV1Interaction');
