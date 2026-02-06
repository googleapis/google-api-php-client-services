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

class App extends \Google\Collection
{
  /**
   * Unspecified tool execution mode. Default to PARALLEL.
   */
  public const TOOL_EXECUTION_MODE_TOOL_EXECUTION_MODE_UNSPECIFIED = 'TOOL_EXECUTION_MODE_UNSPECIFIED';
  /**
   * If there are multiple tools being selected, they will be executed in
   * parallel, with the same [ToolContext](https://google.github.io/adk-
   * docs/context/#the-different-types-of-context).
   */
  public const TOOL_EXECUTION_MODE_PARALLEL = 'PARALLEL';
  /**
   * If there are multiple tools being selected, they will be executed
   * sequentially. The next tool will only be executed after the previous tool
   * completes and it can see updated
   * [ToolContext](https://google.github.io/adk-docs/context/#the-different-
   * types-of-context) from the previous tool.
   */
  public const TOOL_EXECUTION_MODE_SEQUENTIAL = 'SEQUENTIAL';
  protected $collection_key = 'variableDeclarations';
  protected $audioProcessingConfigType = AudioProcessingConfig::class;
  protected $audioProcessingConfigDataType = '';
  protected $clientCertificateSettingsType = ClientCertificateSettings::class;
  protected $clientCertificateSettingsDataType = '';
  /**
   * Output only. Timestamp when the app was created.
   *
   * @var string
   */
  public $createTime;
  protected $dataStoreSettingsType = DataStoreSettings::class;
  protected $dataStoreSettingsDataType = '';
  protected $defaultChannelProfileType = ChannelProfile::class;
  protected $defaultChannelProfileDataType = '';
  /**
   * Output only. Number of deployments in the app.
   *
   * @var int
   */
  public $deploymentCount;
  /**
   * Optional. Human-readable description of the app.
   *
   * @var string
   */
  public $description;
  /**
   * Required. Display name of the app.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Etag used to ensure the object hasn't changed during a read-
   * modify-write operation. If the etag is empty, the update will overwrite any
   * concurrent changes.
   *
   * @var string
   */
  public $etag;
  protected $evaluationMetricsThresholdsType = EvaluationMetricsThresholds::class;
  protected $evaluationMetricsThresholdsDataType = '';
  /**
   * Optional. Instructions for all the agents in the app. You can use this
   * instruction to set up a stable identity or personality across all the
   * agents.
   *
   * @var string
   */
  public $globalInstruction;
  /**
   * Optional. List of guardrails for the app. Format:
   * `projects/{project}/locations/{location}/apps/{app}/guardrails/{guardrail}`
   *
   * @var string[]
   */
  public $guardrails;
  protected $languageSettingsType = LanguageSettings::class;
  protected $languageSettingsDataType = '';
  /**
   * Optional. Indicates whether the app is locked for changes. If the app is
   * locked, modifications to the app resources will be rejected.
   *
   * @var bool
   */
  public $locked;
  protected $loggingSettingsType = LoggingSettings::class;
  protected $loggingSettingsDataType = '';
  /**
   * Optional. Metadata about the app. This field can be used to store
   * additional information relevant to the app's details or intended usages.
   *
   * @var string[]
   */
  public $metadata;
  protected $modelSettingsType = ModelSettings::class;
  protected $modelSettingsDataType = '';
  /**
   * Identifier. The unique identifier of the app. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Whether the app is pinned in the app list.
   *
   * @var bool
   */
  public $pinned;
  protected $predefinedVariableDeclarationsType = AppVariableDeclaration::class;
  protected $predefinedVariableDeclarationsDataType = 'array';
  /**
   * Optional. The root agent is the entry point of the app. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @var string
   */
  public $rootAgent;
  protected $timeZoneSettingsType = TimeZoneSettings::class;
  protected $timeZoneSettingsDataType = '';
  /**
   * Optional. The tool execution mode for the app. If not provided, will
   * default to PARALLEL.
   *
   * @var string
   */
  public $toolExecutionMode;
  /**
   * Output only. Timestamp when the app was last updated.
   *
   * @var string
   */
  public $updateTime;
  protected $variableDeclarationsType = AppVariableDeclaration::class;
  protected $variableDeclarationsDataType = 'array';

  /**
   * Optional. Audio processing configuration of the app.
   *
   * @param AudioProcessingConfig $audioProcessingConfig
   */
  public function setAudioProcessingConfig(AudioProcessingConfig $audioProcessingConfig)
  {
    $this->audioProcessingConfig = $audioProcessingConfig;
  }
  /**
   * @return AudioProcessingConfig
   */
  public function getAudioProcessingConfig()
  {
    return $this->audioProcessingConfig;
  }
  /**
   * Optional. The default client certificate settings for the app.
   *
   * @param ClientCertificateSettings $clientCertificateSettings
   */
  public function setClientCertificateSettings(ClientCertificateSettings $clientCertificateSettings)
  {
    $this->clientCertificateSettings = $clientCertificateSettings;
  }
  /**
   * @return ClientCertificateSettings
   */
  public function getClientCertificateSettings()
  {
    return $this->clientCertificateSettings;
  }
  /**
   * Output only. Timestamp when the app was created.
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
   * Optional. The data store settings for the app.
   *
   * @param DataStoreSettings $dataStoreSettings
   */
  public function setDataStoreSettings(DataStoreSettings $dataStoreSettings)
  {
    $this->dataStoreSettings = $dataStoreSettings;
  }
  /**
   * @return DataStoreSettings
   */
  public function getDataStoreSettings()
  {
    return $this->dataStoreSettings;
  }
  /**
   * Optional. The default channel profile used by the app.
   *
   * @param ChannelProfile $defaultChannelProfile
   */
  public function setDefaultChannelProfile(ChannelProfile $defaultChannelProfile)
  {
    $this->defaultChannelProfile = $defaultChannelProfile;
  }
  /**
   * @return ChannelProfile
   */
  public function getDefaultChannelProfile()
  {
    return $this->defaultChannelProfile;
  }
  /**
   * Output only. Number of deployments in the app.
   *
   * @param int $deploymentCount
   */
  public function setDeploymentCount($deploymentCount)
  {
    $this->deploymentCount = $deploymentCount;
  }
  /**
   * @return int
   */
  public function getDeploymentCount()
  {
    return $this->deploymentCount;
  }
  /**
   * Optional. Human-readable description of the app.
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
   * Required. Display name of the app.
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
   * Output only. Etag used to ensure the object hasn't changed during a read-
   * modify-write operation. If the etag is empty, the update will overwrite any
   * concurrent changes.
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
   * Optional. The evaluation thresholds for the app.
   *
   * @param EvaluationMetricsThresholds $evaluationMetricsThresholds
   */
  public function setEvaluationMetricsThresholds(EvaluationMetricsThresholds $evaluationMetricsThresholds)
  {
    $this->evaluationMetricsThresholds = $evaluationMetricsThresholds;
  }
  /**
   * @return EvaluationMetricsThresholds
   */
  public function getEvaluationMetricsThresholds()
  {
    return $this->evaluationMetricsThresholds;
  }
  /**
   * Optional. Instructions for all the agents in the app. You can use this
   * instruction to set up a stable identity or personality across all the
   * agents.
   *
   * @param string $globalInstruction
   */
  public function setGlobalInstruction($globalInstruction)
  {
    $this->globalInstruction = $globalInstruction;
  }
  /**
   * @return string
   */
  public function getGlobalInstruction()
  {
    return $this->globalInstruction;
  }
  /**
   * Optional. List of guardrails for the app. Format:
   * `projects/{project}/locations/{location}/apps/{app}/guardrails/{guardrail}`
   *
   * @param string[] $guardrails
   */
  public function setGuardrails($guardrails)
  {
    $this->guardrails = $guardrails;
  }
  /**
   * @return string[]
   */
  public function getGuardrails()
  {
    return $this->guardrails;
  }
  /**
   * Optional. Language settings of the app.
   *
   * @param LanguageSettings $languageSettings
   */
  public function setLanguageSettings(LanguageSettings $languageSettings)
  {
    $this->languageSettings = $languageSettings;
  }
  /**
   * @return LanguageSettings
   */
  public function getLanguageSettings()
  {
    return $this->languageSettings;
  }
  /**
   * Optional. Indicates whether the app is locked for changes. If the app is
   * locked, modifications to the app resources will be rejected.
   *
   * @param bool $locked
   */
  public function setLocked($locked)
  {
    $this->locked = $locked;
  }
  /**
   * @return bool
   */
  public function getLocked()
  {
    return $this->locked;
  }
  /**
   * Optional. Logging settings of the app.
   *
   * @param LoggingSettings $loggingSettings
   */
  public function setLoggingSettings(LoggingSettings $loggingSettings)
  {
    $this->loggingSettings = $loggingSettings;
  }
  /**
   * @return LoggingSettings
   */
  public function getLoggingSettings()
  {
    return $this->loggingSettings;
  }
  /**
   * Optional. Metadata about the app. This field can be used to store
   * additional information relevant to the app's details or intended usages.
   *
   * @param string[] $metadata
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return string[]
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Optional. The default LLM model settings for the app. Individual resources
   * (e.g. agents, guardrails) can override these configurations as needed.
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
   * Identifier. The unique identifier of the app. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
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
   * Optional. Whether the app is pinned in the app list.
   *
   * @param bool $pinned
   */
  public function setPinned($pinned)
  {
    $this->pinned = $pinned;
  }
  /**
   * @return bool
   */
  public function getPinned()
  {
    return $this->pinned;
  }
  /**
   * Output only. The declarations of predefined variables for the app.
   *
   * @param AppVariableDeclaration[] $predefinedVariableDeclarations
   */
  public function setPredefinedVariableDeclarations($predefinedVariableDeclarations)
  {
    $this->predefinedVariableDeclarations = $predefinedVariableDeclarations;
  }
  /**
   * @return AppVariableDeclaration[]
   */
  public function getPredefinedVariableDeclarations()
  {
    return $this->predefinedVariableDeclarations;
  }
  /**
   * Optional. The root agent is the entry point of the app. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @param string $rootAgent
   */
  public function setRootAgent($rootAgent)
  {
    $this->rootAgent = $rootAgent;
  }
  /**
   * @return string
   */
  public function getRootAgent()
  {
    return $this->rootAgent;
  }
  /**
   * Optional. TimeZone settings of the app.
   *
   * @param TimeZoneSettings $timeZoneSettings
   */
  public function setTimeZoneSettings(TimeZoneSettings $timeZoneSettings)
  {
    $this->timeZoneSettings = $timeZoneSettings;
  }
  /**
   * @return TimeZoneSettings
   */
  public function getTimeZoneSettings()
  {
    return $this->timeZoneSettings;
  }
  /**
   * Optional. The tool execution mode for the app. If not provided, will
   * default to PARALLEL.
   *
   * Accepted values: TOOL_EXECUTION_MODE_UNSPECIFIED, PARALLEL, SEQUENTIAL
   *
   * @param self::TOOL_EXECUTION_MODE_* $toolExecutionMode
   */
  public function setToolExecutionMode($toolExecutionMode)
  {
    $this->toolExecutionMode = $toolExecutionMode;
  }
  /**
   * @return self::TOOL_EXECUTION_MODE_*
   */
  public function getToolExecutionMode()
  {
    return $this->toolExecutionMode;
  }
  /**
   * Output only. Timestamp when the app was last updated.
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
  /**
   * Optional. The declarations of the variables.
   *
   * @param AppVariableDeclaration[] $variableDeclarations
   */
  public function setVariableDeclarations($variableDeclarations)
  {
    $this->variableDeclarations = $variableDeclarations;
  }
  /**
   * @return AppVariableDeclaration[]
   */
  public function getVariableDeclarations()
  {
    return $this->variableDeclarations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(App::class, 'Google_Service_CustomerEngagementSuite_App');
