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

class GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpec extends \Google\Model
{
  protected $keywordSearchThresholdType = GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec::class;
  protected $keywordSearchThresholdDataType = '';
  protected $semanticSearchThresholdType = GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec::class;
  protected $semanticSearchThresholdDataType = '';

  /**
   * Optional. Relevance filtering threshold specification for keyword search.
   *
   * @param GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec $keywordSearchThreshold
   */
  public function setKeywordSearchThreshold(GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec $keywordSearchThreshold)
  {
    $this->keywordSearchThreshold = $keywordSearchThreshold;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec
   */
  public function getKeywordSearchThreshold()
  {
    return $this->keywordSearchThreshold;
  }
  /**
   * Optional. Relevance filtering threshold specification for semantic search.
   *
   * @param GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec $semanticSearchThreshold
   */
  public function setSemanticSearchThreshold(GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec $semanticSearchThreshold)
  {
    $this->semanticSearchThreshold = $semanticSearchThreshold;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec
   */
  public function getSemanticSearchThreshold()
  {
    return $this->semanticSearchThreshold;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpec::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaSearchRequestRelevanceFilterSpec');
