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

class GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequest extends \Google\Collection
{
  protected $collection_key = 'suggestionTypes';
  protected $boostSpecType = GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestBoostSpec::class;
  protected $boostSpecDataType = '';
  /**
   * @var string[]
   */
  public $experimentIds;
  /**
   * @var bool
   */
  public $includeTailSuggestions;
  /**
   * @var string
   */
  public $query;
  /**
   * @var string
   */
  public $queryModel;
  protected $suggestionTypeSpecsType = GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestSuggestionTypeSpec::class;
  protected $suggestionTypeSpecsDataType = 'array';
  /**
   * @var string[]
   */
  public $suggestionTypes;
  protected $userInfoType = GoogleCloudDiscoveryengineV1UserInfo::class;
  protected $userInfoDataType = '';
  /**
   * @var string
   */
  public $userPseudoId;

  /**
   * @param GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestBoostSpec
   */
  public function setBoostSpec(GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestBoostSpec $boostSpec)
  {
    $this->boostSpec = $boostSpec;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestBoostSpec
   */
  public function getBoostSpec()
  {
    return $this->boostSpec;
  }
  /**
   * @param string[]
   */
  public function setExperimentIds($experimentIds)
  {
    $this->experimentIds = $experimentIds;
  }
  /**
   * @return string[]
   */
  public function getExperimentIds()
  {
    return $this->experimentIds;
  }
  /**
   * @param bool
   */
  public function setIncludeTailSuggestions($includeTailSuggestions)
  {
    $this->includeTailSuggestions = $includeTailSuggestions;
  }
  /**
   * @return bool
   */
  public function getIncludeTailSuggestions()
  {
    return $this->includeTailSuggestions;
  }
  /**
   * @param string
   */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /**
   * @return string
   */
  public function getQuery()
  {
    return $this->query;
  }
  /**
   * @param string
   */
  public function setQueryModel($queryModel)
  {
    $this->queryModel = $queryModel;
  }
  /**
   * @return string
   */
  public function getQueryModel()
  {
    return $this->queryModel;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestSuggestionTypeSpec[]
   */
  public function setSuggestionTypeSpecs($suggestionTypeSpecs)
  {
    $this->suggestionTypeSpecs = $suggestionTypeSpecs;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestSuggestionTypeSpec[]
   */
  public function getSuggestionTypeSpecs()
  {
    return $this->suggestionTypeSpecs;
  }
  /**
   * @param string[]
   */
  public function setSuggestionTypes($suggestionTypes)
  {
    $this->suggestionTypes = $suggestionTypes;
  }
  /**
   * @return string[]
   */
  public function getSuggestionTypes()
  {
    return $this->suggestionTypes;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1UserInfo
   */
  public function setUserInfo(GoogleCloudDiscoveryengineV1UserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1UserInfo
   */
  public function getUserInfo()
  {
    return $this->userInfo;
  }
  /**
   * @param string
   */
  public function setUserPseudoId($userPseudoId)
  {
    $this->userPseudoId = $userPseudoId;
  }
  /**
   * @return string
   */
  public function getUserPseudoId()
  {
    return $this->userPseudoId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequest::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequest');
