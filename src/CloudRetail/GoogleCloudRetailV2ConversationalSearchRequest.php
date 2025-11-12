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

namespace Google\Service\CloudRetail;

class GoogleCloudRetailV2ConversationalSearchRequest extends \Google\Collection
{
  protected $collection_key = 'safetySettings';
  /**
   * @var string
   */
  public $branch;
  /**
   * @var string
   */
  public $conversationId;
  protected $conversationalFilteringSpecType = GoogleCloudRetailV2ConversationalSearchRequestConversationalFilteringSpec::class;
  protected $conversationalFilteringSpecDataType = '';
  /**
   * @var string[]
   */
  public $pageCategories;
  /**
   * @var string
   */
  public $query;
  protected $safetySettingsType = GoogleCloudRetailV2SafetySetting::class;
  protected $safetySettingsDataType = 'array';
  protected $searchParamsType = GoogleCloudRetailV2ConversationalSearchRequestSearchParams::class;
  protected $searchParamsDataType = '';
  protected $userInfoType = GoogleCloudRetailV2UserInfo::class;
  protected $userInfoDataType = '';
  /**
   * @var string[]
   */
  public $userLabels;
  /**
   * @var string
   */
  public $visitorId;

  /**
   * @param string
   */
  public function setBranch($branch)
  {
    $this->branch = $branch;
  }
  /**
   * @return string
   */
  public function getBranch()
  {
    return $this->branch;
  }
  /**
   * @param string
   */
  public function setConversationId($conversationId)
  {
    $this->conversationId = $conversationId;
  }
  /**
   * @return string
   */
  public function getConversationId()
  {
    return $this->conversationId;
  }
  /**
   * @param GoogleCloudRetailV2ConversationalSearchRequestConversationalFilteringSpec
   */
  public function setConversationalFilteringSpec(GoogleCloudRetailV2ConversationalSearchRequestConversationalFilteringSpec $conversationalFilteringSpec)
  {
    $this->conversationalFilteringSpec = $conversationalFilteringSpec;
  }
  /**
   * @return GoogleCloudRetailV2ConversationalSearchRequestConversationalFilteringSpec
   */
  public function getConversationalFilteringSpec()
  {
    return $this->conversationalFilteringSpec;
  }
  /**
   * @param string[]
   */
  public function setPageCategories($pageCategories)
  {
    $this->pageCategories = $pageCategories;
  }
  /**
   * @return string[]
   */
  public function getPageCategories()
  {
    return $this->pageCategories;
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
   * @param GoogleCloudRetailV2SafetySetting[]
   */
  public function setSafetySettings($safetySettings)
  {
    $this->safetySettings = $safetySettings;
  }
  /**
   * @return GoogleCloudRetailV2SafetySetting[]
   */
  public function getSafetySettings()
  {
    return $this->safetySettings;
  }
  /**
   * @param GoogleCloudRetailV2ConversationalSearchRequestSearchParams
   */
  public function setSearchParams(GoogleCloudRetailV2ConversationalSearchRequestSearchParams $searchParams)
  {
    $this->searchParams = $searchParams;
  }
  /**
   * @return GoogleCloudRetailV2ConversationalSearchRequestSearchParams
   */
  public function getSearchParams()
  {
    return $this->searchParams;
  }
  /**
   * @param GoogleCloudRetailV2UserInfo
   */
  public function setUserInfo(GoogleCloudRetailV2UserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /**
   * @return GoogleCloudRetailV2UserInfo
   */
  public function getUserInfo()
  {
    return $this->userInfo;
  }
  /**
   * @param string[]
   */
  public function setUserLabels($userLabels)
  {
    $this->userLabels = $userLabels;
  }
  /**
   * @return string[]
   */
  public function getUserLabels()
  {
    return $this->userLabels;
  }
  /**
   * @param string
   */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /**
   * @return string
   */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRetailV2ConversationalSearchRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ConversationalSearchRequest');
