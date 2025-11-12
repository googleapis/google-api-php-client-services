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

class GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponse extends \Google\Collection
{
  protected $collection_key = 'recentSearchSuggestions';
  protected $contentSuggestionsType = GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponseContentSuggestion::class;
  protected $contentSuggestionsDataType = 'array';
  protected $peopleSuggestionsType = GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponsePersonSuggestion::class;
  protected $peopleSuggestionsDataType = 'array';
  protected $querySuggestionsType = GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponseQuerySuggestion::class;
  protected $querySuggestionsDataType = 'array';
  protected $recentSearchSuggestionsType = GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponseRecentSearchSuggestion::class;
  protected $recentSearchSuggestionsDataType = 'array';
  /**
   * @var bool
   */
  public $tailMatchTriggered;

  /**
   * @param GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponseContentSuggestion[]
   */
  public function setContentSuggestions($contentSuggestions)
  {
    $this->contentSuggestions = $contentSuggestions;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponseContentSuggestion[]
   */
  public function getContentSuggestions()
  {
    return $this->contentSuggestions;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponsePersonSuggestion[]
   */
  public function setPeopleSuggestions($peopleSuggestions)
  {
    $this->peopleSuggestions = $peopleSuggestions;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponsePersonSuggestion[]
   */
  public function getPeopleSuggestions()
  {
    return $this->peopleSuggestions;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponseQuerySuggestion[]
   */
  public function setQuerySuggestions($querySuggestions)
  {
    $this->querySuggestions = $querySuggestions;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponseQuerySuggestion[]
   */
  public function getQuerySuggestions()
  {
    return $this->querySuggestions;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponseRecentSearchSuggestion[]
   */
  public function setRecentSearchSuggestions($recentSearchSuggestions)
  {
    $this->recentSearchSuggestions = $recentSearchSuggestions;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponseRecentSearchSuggestion[]
   */
  public function getRecentSearchSuggestions()
  {
    return $this->recentSearchSuggestions;
  }
  /**
   * @param bool
   */
  public function setTailMatchTriggered($tailMatchTriggered)
  {
    $this->tailMatchTriggered = $tailMatchTriggered;
  }
  /**
   * @return bool
   */
  public function getTailMatchTriggered()
  {
    return $this->tailMatchTriggered;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponse::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1AdvancedCompleteQueryResponse');
