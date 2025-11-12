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

class GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsGenerativeAnswerConfig extends \Google\Model
{
  /**
   * @var bool
   */
  public $disableRelatedQuestions;
  /**
   * @var bool
   */
  public $ignoreAdversarialQuery;
  /**
   * @var bool
   */
  public $ignoreLowRelevantContent;
  /**
   * @var bool
   */
  public $ignoreNonAnswerSeekingQuery;
  /**
   * @var string
   */
  public $imageSource;
  /**
   * @var string
   */
  public $languageCode;
  /**
   * @var int
   */
  public $maxRephraseSteps;
  /**
   * @var string
   */
  public $modelPromptPreamble;
  /**
   * @var string
   */
  public $modelVersion;
  /**
   * @var int
   */
  public $resultCount;

  /**
   * @param bool
   */
  public function setDisableRelatedQuestions($disableRelatedQuestions)
  {
    $this->disableRelatedQuestions = $disableRelatedQuestions;
  }
  /**
   * @return bool
   */
  public function getDisableRelatedQuestions()
  {
    return $this->disableRelatedQuestions;
  }
  /**
   * @param bool
   */
  public function setIgnoreAdversarialQuery($ignoreAdversarialQuery)
  {
    $this->ignoreAdversarialQuery = $ignoreAdversarialQuery;
  }
  /**
   * @return bool
   */
  public function getIgnoreAdversarialQuery()
  {
    return $this->ignoreAdversarialQuery;
  }
  /**
   * @param bool
   */
  public function setIgnoreLowRelevantContent($ignoreLowRelevantContent)
  {
    $this->ignoreLowRelevantContent = $ignoreLowRelevantContent;
  }
  /**
   * @return bool
   */
  public function getIgnoreLowRelevantContent()
  {
    return $this->ignoreLowRelevantContent;
  }
  /**
   * @param bool
   */
  public function setIgnoreNonAnswerSeekingQuery($ignoreNonAnswerSeekingQuery)
  {
    $this->ignoreNonAnswerSeekingQuery = $ignoreNonAnswerSeekingQuery;
  }
  /**
   * @return bool
   */
  public function getIgnoreNonAnswerSeekingQuery()
  {
    return $this->ignoreNonAnswerSeekingQuery;
  }
  /**
   * @param string
   */
  public function setImageSource($imageSource)
  {
    $this->imageSource = $imageSource;
  }
  /**
   * @return string
   */
  public function getImageSource()
  {
    return $this->imageSource;
  }
  /**
   * @param string
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * @param int
   */
  public function setMaxRephraseSteps($maxRephraseSteps)
  {
    $this->maxRephraseSteps = $maxRephraseSteps;
  }
  /**
   * @return int
   */
  public function getMaxRephraseSteps()
  {
    return $this->maxRephraseSteps;
  }
  /**
   * @param string
   */
  public function setModelPromptPreamble($modelPromptPreamble)
  {
    $this->modelPromptPreamble = $modelPromptPreamble;
  }
  /**
   * @return string
   */
  public function getModelPromptPreamble()
  {
    return $this->modelPromptPreamble;
  }
  /**
   * @param string
   */
  public function setModelVersion($modelVersion)
  {
    $this->modelVersion = $modelVersion;
  }
  /**
   * @return string
   */
  public function getModelVersion()
  {
    return $this->modelVersion;
  }
  /**
   * @param int
   */
  public function setResultCount($resultCount)
  {
    $this->resultCount = $resultCount;
  }
  /**
   * @return int
   */
  public function getResultCount()
  {
    return $this->resultCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsGenerativeAnswerConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsGenerativeAnswerConfig');
