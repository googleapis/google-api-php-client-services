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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2beta1KnowledgeAssistAnswerAdditionalSuggestedQueryResult extends \Google\Model
{
  protected $suggestedQueryType = GoogleCloudDialogflowV2beta1KnowledgeAssistAnswerSuggestedQuery::class;
  protected $suggestedQueryDataType = '';

  /**
   * @param GoogleCloudDialogflowV2beta1KnowledgeAssistAnswerSuggestedQuery $suggestedQuery
   */
  public function setSuggestedQuery(GoogleCloudDialogflowV2beta1KnowledgeAssistAnswerSuggestedQuery $suggestedQuery)
  {
    $this->suggestedQuery = $suggestedQuery;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1KnowledgeAssistAnswerSuggestedQuery
   */
  public function getSuggestedQuery()
  {
    return $this->suggestedQuery;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2beta1KnowledgeAssistAnswerAdditionalSuggestedQueryResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1KnowledgeAssistAnswerAdditionalSuggestedQueryResult');
