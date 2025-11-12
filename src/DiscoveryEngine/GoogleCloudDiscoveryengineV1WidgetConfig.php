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

class GoogleCloudDiscoveryengineV1WidgetConfig extends \Google\Collection
{
  protected $collection_key = 'facetField';
  protected $accessSettingsType = GoogleCloudDiscoveryengineV1WidgetConfigAccessSettings::class;
  protected $accessSettingsDataType = '';
  /**
   * @var bool
   */
  public $allowPublicAccess;
  /**
   * @var string[]
   */
  public $allowlistedDomains;
  protected $assistantSettingsType = GoogleCloudDiscoveryengineV1WidgetConfigAssistantSettings::class;
  protected $assistantSettingsDataType = '';
  protected $collectionComponentsType = GoogleCloudDiscoveryengineV1WidgetConfigCollectionComponent::class;
  protected $collectionComponentsDataType = 'array';
  /**
   * @var string
   */
  public $configId;
  protected $contentSearchSpecType = GoogleCloudDiscoveryengineV1SearchRequestContentSearchSpec::class;
  protected $contentSearchSpecDataType = '';
  /**
   * @var string
   */
  public $createTime;
  protected $customerProvidedConfigType = GoogleCloudDiscoveryengineV1WidgetConfigCustomerProvidedConfig::class;
  protected $customerProvidedConfigDataType = '';
  /**
   * @var string
   */
  public $dataStoreType;
  protected $dataStoreUiConfigsType = GoogleCloudDiscoveryengineV1WidgetConfigDataStoreUiConfig::class;
  protected $dataStoreUiConfigsDataType = 'array';
  /**
   * @var string
   */
  public $defaultSearchRequestOrderBy;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var bool
   */
  public $enableAutocomplete;
  /**
   * @var bool
   */
  public $enableConversationalSearch;
  /**
   * @var bool
   */
  public $enablePrivateKnowledgeGraph;
  /**
   * @var bool
   */
  public $enableQualityFeedback;
  /**
   * @var bool
   */
  public $enableResultScore;
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
  public $enableSnippetResultSummary;
  /**
   * @var bool
   */
  public $enableSummarization;
  /**
   * @var bool
   */
  public $enableWebApp;
  protected $facetFieldType = GoogleCloudDiscoveryengineV1WidgetConfigFacetField::class;
  protected $facetFieldDataType = 'array';
  protected $fieldsUiComponentsMapType = GoogleCloudDiscoveryengineV1WidgetConfigUIComponentField::class;
  protected $fieldsUiComponentsMapDataType = 'map';
  /**
   * @var bool
   */
  public $geminiBundle;
  protected $homepageSettingType = GoogleCloudDiscoveryengineV1WidgetConfigHomepageSetting::class;
  protected $homepageSettingDataType = '';
  /**
   * @var string
   */
  public $industryVertical;
  /**
   * @var bool
   */
  public $llmEnabled;
  /**
   * @var bool
   */
  public $minimumDataTermAccepted;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $resultDisplayType;
  /**
   * @var string
   */
  public $solutionType;
  protected $uiBrandingType = GoogleCloudDiscoveryengineV1WidgetConfigUiBrandingSettings::class;
  protected $uiBrandingDataType = '';
  protected $uiSettingsType = GoogleCloudDiscoveryengineV1WidgetConfigUiSettings::class;
  protected $uiSettingsDataType = '';
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigAccessSettings
   */
  public function setAccessSettings(GoogleCloudDiscoveryengineV1WidgetConfigAccessSettings $accessSettings)
  {
    $this->accessSettings = $accessSettings;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigAccessSettings
   */
  public function getAccessSettings()
  {
    return $this->accessSettings;
  }
  /**
   * @param bool
   */
  public function setAllowPublicAccess($allowPublicAccess)
  {
    $this->allowPublicAccess = $allowPublicAccess;
  }
  /**
   * @return bool
   */
  public function getAllowPublicAccess()
  {
    return $this->allowPublicAccess;
  }
  /**
   * @param string[]
   */
  public function setAllowlistedDomains($allowlistedDomains)
  {
    $this->allowlistedDomains = $allowlistedDomains;
  }
  /**
   * @return string[]
   */
  public function getAllowlistedDomains()
  {
    return $this->allowlistedDomains;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigAssistantSettings
   */
  public function setAssistantSettings(GoogleCloudDiscoveryengineV1WidgetConfigAssistantSettings $assistantSettings)
  {
    $this->assistantSettings = $assistantSettings;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigAssistantSettings
   */
  public function getAssistantSettings()
  {
    return $this->assistantSettings;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigCollectionComponent[]
   */
  public function setCollectionComponents($collectionComponents)
  {
    $this->collectionComponents = $collectionComponents;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigCollectionComponent[]
   */
  public function getCollectionComponents()
  {
    return $this->collectionComponents;
  }
  /**
   * @param string
   */
  public function setConfigId($configId)
  {
    $this->configId = $configId;
  }
  /**
   * @return string
   */
  public function getConfigId()
  {
    return $this->configId;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1SearchRequestContentSearchSpec
   */
  public function setContentSearchSpec(GoogleCloudDiscoveryengineV1SearchRequestContentSearchSpec $contentSearchSpec)
  {
    $this->contentSearchSpec = $contentSearchSpec;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1SearchRequestContentSearchSpec
   */
  public function getContentSearchSpec()
  {
    return $this->contentSearchSpec;
  }
  /**
   * @param string
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
   * @param GoogleCloudDiscoveryengineV1WidgetConfigCustomerProvidedConfig
   */
  public function setCustomerProvidedConfig(GoogleCloudDiscoveryengineV1WidgetConfigCustomerProvidedConfig $customerProvidedConfig)
  {
    $this->customerProvidedConfig = $customerProvidedConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigCustomerProvidedConfig
   */
  public function getCustomerProvidedConfig()
  {
    return $this->customerProvidedConfig;
  }
  /**
   * @param string
   */
  public function setDataStoreType($dataStoreType)
  {
    $this->dataStoreType = $dataStoreType;
  }
  /**
   * @return string
   */
  public function getDataStoreType()
  {
    return $this->dataStoreType;
  }
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
   * @param string
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
  public function setEnableConversationalSearch($enableConversationalSearch)
  {
    $this->enableConversationalSearch = $enableConversationalSearch;
  }
  /**
   * @return bool
   */
  public function getEnableConversationalSearch()
  {
    return $this->enableConversationalSearch;
  }
  /**
   * @param bool
   */
  public function setEnablePrivateKnowledgeGraph($enablePrivateKnowledgeGraph)
  {
    $this->enablePrivateKnowledgeGraph = $enablePrivateKnowledgeGraph;
  }
  /**
   * @return bool
   */
  public function getEnablePrivateKnowledgeGraph()
  {
    return $this->enablePrivateKnowledgeGraph;
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
  public function setEnableResultScore($enableResultScore)
  {
    $this->enableResultScore = $enableResultScore;
  }
  /**
   * @return bool
   */
  public function getEnableResultScore()
  {
    return $this->enableResultScore;
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
  public function setEnableSnippetResultSummary($enableSnippetResultSummary)
  {
    $this->enableSnippetResultSummary = $enableSnippetResultSummary;
  }
  /**
   * @return bool
   */
  public function getEnableSnippetResultSummary()
  {
    return $this->enableSnippetResultSummary;
  }
  /**
   * @param bool
   */
  public function setEnableSummarization($enableSummarization)
  {
    $this->enableSummarization = $enableSummarization;
  }
  /**
   * @return bool
   */
  public function getEnableSummarization()
  {
    return $this->enableSummarization;
  }
  /**
   * @param bool
   */
  public function setEnableWebApp($enableWebApp)
  {
    $this->enableWebApp = $enableWebApp;
  }
  /**
   * @return bool
   */
  public function getEnableWebApp()
  {
    return $this->enableWebApp;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigFacetField[]
   */
  public function setFacetField($facetField)
  {
    $this->facetField = $facetField;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigFacetField[]
   */
  public function getFacetField()
  {
    return $this->facetField;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigUIComponentField[]
   */
  public function setFieldsUiComponentsMap($fieldsUiComponentsMap)
  {
    $this->fieldsUiComponentsMap = $fieldsUiComponentsMap;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigUIComponentField[]
   */
  public function getFieldsUiComponentsMap()
  {
    return $this->fieldsUiComponentsMap;
  }
  /**
   * @param bool
   */
  public function setGeminiBundle($geminiBundle)
  {
    $this->geminiBundle = $geminiBundle;
  }
  /**
   * @return bool
   */
  public function getGeminiBundle()
  {
    return $this->geminiBundle;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigHomepageSetting
   */
  public function setHomepageSetting(GoogleCloudDiscoveryengineV1WidgetConfigHomepageSetting $homepageSetting)
  {
    $this->homepageSetting = $homepageSetting;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigHomepageSetting
   */
  public function getHomepageSetting()
  {
    return $this->homepageSetting;
  }
  /**
   * @param string
   */
  public function setIndustryVertical($industryVertical)
  {
    $this->industryVertical = $industryVertical;
  }
  /**
   * @return string
   */
  public function getIndustryVertical()
  {
    return $this->industryVertical;
  }
  /**
   * @param bool
   */
  public function setLlmEnabled($llmEnabled)
  {
    $this->llmEnabled = $llmEnabled;
  }
  /**
   * @return bool
   */
  public function getLlmEnabled()
  {
    return $this->llmEnabled;
  }
  /**
   * @param bool
   */
  public function setMinimumDataTermAccepted($minimumDataTermAccepted)
  {
    $this->minimumDataTermAccepted = $minimumDataTermAccepted;
  }
  /**
   * @return bool
   */
  public function getMinimumDataTermAccepted()
  {
    return $this->minimumDataTermAccepted;
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
   * @param string
   */
  public function setResultDisplayType($resultDisplayType)
  {
    $this->resultDisplayType = $resultDisplayType;
  }
  /**
   * @return string
   */
  public function getResultDisplayType()
  {
    return $this->resultDisplayType;
  }
  /**
   * @param string
   */
  public function setSolutionType($solutionType)
  {
    $this->solutionType = $solutionType;
  }
  /**
   * @return string
   */
  public function getSolutionType()
  {
    return $this->solutionType;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigUiBrandingSettings
   */
  public function setUiBranding(GoogleCloudDiscoveryengineV1WidgetConfigUiBrandingSettings $uiBranding)
  {
    $this->uiBranding = $uiBranding;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigUiBrandingSettings
   */
  public function getUiBranding()
  {
    return $this->uiBranding;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigUiSettings
   */
  public function setUiSettings(GoogleCloudDiscoveryengineV1WidgetConfigUiSettings $uiSettings)
  {
    $this->uiSettings = $uiSettings;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigUiSettings
   */
  public function getUiSettings()
  {
    return $this->uiSettings;
  }
  /**
   * @param string
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
class_alias(GoogleCloudDiscoveryengineV1WidgetConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfig');
