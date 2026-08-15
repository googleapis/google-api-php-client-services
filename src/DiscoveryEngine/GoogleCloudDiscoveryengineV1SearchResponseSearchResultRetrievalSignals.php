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

class GoogleCloudDiscoveryengineV1SearchResponseSearchResultRetrievalSignals extends \Google\Collection
{
  protected $collection_key = 'retrievalSources';
  /**
   * Optional. Indicates how the result was retrieved.
   *
   * @var string[]
   */
  public $retrievalSources;
  /**
   * Optional. Relevance score used by the filter when
   * semantic_relevance_threshold is set.
   *
   * @var float
   */
  public $semanticRelevanceScore;

  /**
   * Optional. Indicates how the result was retrieved.
   *
   * @param string[] $retrievalSources
   */
  public function setRetrievalSources($retrievalSources)
  {
    $this->retrievalSources = $retrievalSources;
  }
  /**
   * @return string[]
   */
  public function getRetrievalSources()
  {
    return $this->retrievalSources;
  }
  /**
   * Optional. Relevance score used by the filter when
   * semantic_relevance_threshold is set.
   *
   * @param float $semanticRelevanceScore
   */
  public function setSemanticRelevanceScore($semanticRelevanceScore)
  {
    $this->semanticRelevanceScore = $semanticRelevanceScore;
  }
  /**
   * @return float
   */
  public function getSemanticRelevanceScore()
  {
    return $this->semanticRelevanceScore;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1SearchResponseSearchResultRetrievalSignals::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1SearchResponseSearchResultRetrievalSignals');
