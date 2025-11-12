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

class GoogleCloudDiscoveryengineV1WidgetConfigUiSettings extends \Google\Collection
{
  protected $collection_key = 'dataStoreUiConfigs';
  protected $dataStoreUiConfigsType = GoogleCloudDiscoveryengineV1WidgetConfigDataStoreUiConfig::class;
  protected $dataStoreUiConfigsDataType = 'array';
  /**
   * @var string
   */
  public $defaultSearchRequestOrderBy;
  /**
   * @var bool
   */
  public $disableUserEventsCollection;
  /**
   * @var bool
   */
  public $enableAutocomplete;
  /**
   * @var bool
   */
  public $enableCreateAgentButton;
  /**
   * @var bool
   */
  public $enablePeopleSearch;
  /**
   * @var bool
   */
  public $enableQualityFeedback;
  /**
   * @var bool
   */
  public $enableSafeSearch;
  /**
   * @var bool
   */
  public $enableSearchAsYouType;
  /**
   * @var bool
   */
  public $enableVisualContentSummary;
  /**
   * @var string[]
   */
  public $features;
  protected $generativeAnswerConfigType = GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsGenerativeAnswerConfig::class;
  protected $generativeAnswerConfigDataType = '';
  /**
   * @var string
   */
  public $interactionType;
  /**
   * @var string[]
   */
  public $modelConfigs;
  /**
   * @var string
   */
  public $resultDescriptionType;

  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigDataStoreUiConfig[]
   */
  public function setDataStoreUiConfigs($dataStoreUiConfigs)
  {
    $this->dataStoreUiConfigs = $dataStoreUiConfigs;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigDataStoreUiConfig[]
   */
  public function getDataStoreUiConfigs()
  {
    return $this->dataStoreUiConfigs;
  }
  /**
   * @param string
   */
  public function setDefaultSearchRequestOrderBy($defaultSearchRequestOrderBy)
  {
    $this->defaultSearchRequestOrderBy = $defaultSearchRequestOrderBy;
  }
  /**
   * @return string
   */
  public function getDefaultSearchRequestOrderBy()
  {
    return $this->defaultSearchRequestOrderBy;
  }
  /**
   * @param bool
   */
  public function setDisableUserEventsCollection($disableUserEventsCollection)
  {
    $this->disableUserEventsCollection = $disableUserEventsCollection;
  }
  /**
   * @return bool
   */
  public function getDisableUserEventsCollection()
  {
    return $this->disableUserEventsCollection;
  }
  /**
   * @param bool
   */
  public function setEnableAutocomplete($enableAutocomplete)
  {
    $this->enableAutocomplete = $enableAutocomplete;
  }
  /**
   * @return bool
   */
  public function getEnableAutocomplete()
  {
    return $this->enableAutocomplete;
  }
  /**
   * @param bool
   */
  public function setEnableCreateAgentButton($enableCreateAgentButton)
  {
    $this->enableCreateAgentButton = $enableCreateAgentButton;
  }
  /**
   * @return bool
   */
  public function getEnableCreateAgentButton()
  {
    return $this->enableCreateAgentButton;
  }
  /**
   * @param bool
   */
  public function setEnablePeopleSearch($enablePeopleSearch)
  {
    $this->enablePeopleSearch = $enablePeopleSearch;
  }
  /**
   * @return bool
   */
  public function getEnablePeopleSearch()
  {
    return $this->enablePeopleSearch;
  }
  /**
   * @param bool
   */
  public function setEnableQualityFeedback($enableQualityFeedback)
  {
    $this->enableQualityFeedback = $enableQualityFeedback;
  }
  /**
   * @return bool
   */
  public function getEnableQualityFeedback()
  {
    return $this->enableQualityFeedback;
  }
  /**
   * @param bool
   */
  public function setEnableSafeSearch($enableSafeSearch)
  {
    $this->enableSafeSearch = $enableSafeSearch;
  }
  /**
   * @return bool
   */
  public function getEnableSafeSearch()
  {
    return $this->enableSafeSearch;
  }
  /**
   * @param bool
   */
  public function setEnableSearchAsYouType($enableSearchAsYouType)
  {
    $this->enableSearchAsYouType = $enableSearchAsYouType;
  }
  /**
   * @return bool
   */
  public function getEnableSearchAsYouType()
  {
    return $this->enableSearchAsYouType;
  }
  /**
   * @param bool
   */
  public function setEnableVisualContentSummary($enableVisualContentSummary)
  {
    $this->enableVisualContentSummary = $enableVisualContentSummary;
  }
  /**
   * @return bool
   */
  public function getEnableVisualContentSummary()
  {
    return $this->enableVisualContentSummary;
  }
  /**
   * @param string[]
   */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /**
   * @return string[]
   */
  public function getFeatures()
  {
    return $this->features;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsGenerativeAnswerConfig
   */
  public function setGenerativeAnswerConfig(GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsGenerativeAnswerConfig $generativeAnswerConfig)
  {
    $this->generativeAnswerConfig = $generativeAnswerConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsGenerativeAnswerConfig
   */
  public function getGenerativeAnswerConfig()
  {
    return $this->generativeAnswerConfig;
  }
  /**
   * @param string
   */
  public function setInteractionType($interactionType)
  {
    $this->interactionType = $interactionType;
  }
  /**
   * @return string
   */
  public function getInteractionType()
  {
    return $this->interactionType;
  }
  /**
   * @param string[]
   */
  public function setModelConfigs($modelConfigs)
  {
    $this->modelConfigs = $modelConfigs;
  }
  /**
   * @return string[]
   */
  public function getModelConfigs()
  {
    return $this->modelConfigs;
  }
  /**
   * @param string
   */
  public function setResultDescriptionType($resultDescriptionType)
  {
    $this->resultDescriptionType = $resultDescriptionType;
  }
  /**
   * @return string
   */
  public function getResultDescriptionType()
  {
    return $this->resultDescriptionType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigUiSettings::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigUiSettings');
