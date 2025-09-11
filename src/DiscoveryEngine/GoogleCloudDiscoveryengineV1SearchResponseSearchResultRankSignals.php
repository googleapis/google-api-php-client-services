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

class GoogleCloudDiscoveryengineV1SearchResponseSearchResultRankSignals extends \Google\Collection
{
  protected $collection_key = 'customSignals';
  /**
   * @var float
   */
  public $boostingFactor;
  protected $customSignalsType = GoogleCloudDiscoveryengineV1SearchResponseSearchResultRankSignalsCustomSignal::class;
  protected $customSignalsDataType = 'array';
  /**
   * @var float
   */
  public $defaultRank;
  /**
   * @var float
   */
  public $documentAge;
  /**
   * @var float
   */
  public $keywordSimilarityScore;
  /**
   * @var float
   */
  public $pctrRank;
  /**
   * @var float
   */
  public $relevanceScore;
  /**
   * @var float
   */
  public $semanticSimilarityScore;
  /**
   * @var float
   */
  public $topicalityRank;

  /**
   * @param float
   */
  public function setBoostingFactor($boostingFactor)
  {
    $this->boostingFactor = $boostingFactor;
  }
  /**
   * @return float
   */
  public function getBoostingFactor()
  {
    return $this->boostingFactor;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1SearchResponseSearchResultRankSignalsCustomSignal[]
   */
  public function setCustomSignals($customSignals)
  {
    $this->customSignals = $customSignals;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1SearchResponseSearchResultRankSignalsCustomSignal[]
   */
  public function getCustomSignals()
  {
    return $this->customSignals;
  }
  /**
   * @param float
   */
  public function setDefaultRank($defaultRank)
  {
    $this->defaultRank = $defaultRank;
  }
  /**
   * @return float
   */
  public function getDefaultRank()
  {
    return $this->defaultRank;
  }
  /**
   * @param float
   */
  public function setDocumentAge($documentAge)
  {
    $this->documentAge = $documentAge;
  }
  /**
   * @return float
   */
  public function getDocumentAge()
  {
    return $this->documentAge;
  }
  /**
   * @param float
   */
  public function setKeywordSimilarityScore($keywordSimilarityScore)
  {
    $this->keywordSimilarityScore = $keywordSimilarityScore;
  }
  /**
   * @return float
   */
  public function getKeywordSimilarityScore()
  {
    return $this->keywordSimilarityScore;
  }
  /**
   * @param float
   */
  public function setPctrRank($pctrRank)
  {
    $this->pctrRank = $pctrRank;
  }
  /**
   * @return float
   */
  public function getPctrRank()
  {
    return $this->pctrRank;
  }
  /**
   * @param float
   */
  public function setRelevanceScore($relevanceScore)
  {
    $this->relevanceScore = $relevanceScore;
  }
  /**
   * @return float
   */
  public function getRelevanceScore()
  {
    return $this->relevanceScore;
  }
  /**
   * @param float
   */
  public function setSemanticSimilarityScore($semanticSimilarityScore)
  {
    $this->semanticSimilarityScore = $semanticSimilarityScore;
  }
  /**
   * @return float
   */
  public function getSemanticSimilarityScore()
  {
    return $this->semanticSimilarityScore;
  }
  /**
   * @param float
   */
  public function setTopicalityRank($topicalityRank)
  {
    $this->topicalityRank = $topicalityRank;
  }
  /**
   * @return float
   */
  public function getTopicalityRank()
  {
    return $this->topicalityRank;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1SearchResponseSearchResultRankSignals::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1SearchResponseSearchResultRankSignals');
