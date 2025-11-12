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

class GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResult extends \Google\Model
{
  protected $additionalFilterType = GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResultAdditionalFilter::class;
  protected $additionalFilterDataType = '';
  protected $followupQuestionType = GoogleCloudRetailV2ConversationalSearchResponseFollowupQuestion::class;
  protected $followupQuestionDataType = '';

  /**
   * @param GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResultAdditionalFilter
   */
  public function setAdditionalFilter(GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResultAdditionalFilter $additionalFilter)
  {
    $this->additionalFilter = $additionalFilter;
  }
  /**
   * @return GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResultAdditionalFilter
   */
  public function getAdditionalFilter()
  {
    return $this->additionalFilter;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ConversationalSearchResponseConversationalFilteringResult');
