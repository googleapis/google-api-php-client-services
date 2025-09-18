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

class GoogleCloudRetailV2ConversationalSearchResponse extends \Google\Collection
{
  protected $collection_key = 'userQueryTypes';
  /**
   * @var string
   */
  public $conversationId;
  protected $conversationalFilteringResultType = GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResult::class;
  protected $conversationalFilteringResultDataType = '';
  /**
   * @var string
   */
  public $conversationalTextResponse;
  protected $followupQuestionType = GoogleCloudRetailV2ConversationalSearchResponseFollowupQuestion::class;
  protected $followupQuestionDataType = '';
  protected $refinedSearchType = GoogleCloudRetailV2ConversationalSearchResponseRefinedSearch::class;
  protected $refinedSearchDataType = 'array';
  /**
   * @var string
   */
  public $state;
  /**
   * @var string[]
   */
  public $userQueryTypes;

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
   * @param GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResult
   */
  public function setConversationalFilteringResult(GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResult $conversationalFilteringResult)
  {
    $this->conversationalFilteringResult = $conversationalFilteringResult;
  }
  /**
   * @return GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResult
   */
  public function getConversationalFilteringResult()
  {
    return $this->conversationalFilteringResult;
  }
  /**
   * @param string
   */
  public function setConversationalTextResponse($conversationalTextResponse)
  {
    $this->conversationalTextResponse = $conversationalTextResponse;
  }
  /**
   * @return string
   */
  public function getConversationalTextResponse()
  {
    return $this->conversationalTextResponse;
  }
  /**
   * @param GoogleCloudRetailV2ConversationalSearchResponseFollowupQuestion
   */
  public function setFollowupQuestion(GoogleCloudRetailV2ConversationalSearchResponseFollowupQuestion $followupQuestion)
  {
    $this->followupQuestion = $followupQuestion;
  }
  /**
   * @return GoogleCloudRetailV2ConversationalSearchResponseFollowupQuestion
   */
  public function getFollowupQuestion()
  {
    return $this->followupQuestion;
  }
  /**
   * @param GoogleCloudRetailV2ConversationalSearchResponseRefinedSearch[]
   */
  public function setRefinedSearch($refinedSearch)
  {
    $this->refinedSearch = $refinedSearch;
  }
  /**
   * @return GoogleCloudRetailV2ConversationalSearchResponseRefinedSearch[]
   */
  public function getRefinedSearch()
  {
    return $this->refinedSearch;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param string[]
   */
  public function setUserQueryTypes($userQueryTypes)
  {
    $this->userQueryTypes = $userQueryTypes;
  }
  /**
   * @return string[]
   */
  public function getUserQueryTypes()
  {
    return $this->userQueryTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRetailV2ConversationalSearchResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ConversationalSearchResponse');
