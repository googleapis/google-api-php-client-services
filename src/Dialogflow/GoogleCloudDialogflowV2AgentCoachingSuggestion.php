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

class GoogleCloudDialogflowV2AgentCoachingSuggestion extends \Google\Collection
{
  protected $collection_key = 'sampleResponses';
  protected $agentActionSuggestionsType = GoogleCloudDialogflowV2AgentCoachingSuggestionAgentActionSuggestion::class;
  protected $agentActionSuggestionsDataType = 'array';
  protected $applicableInstructionsType = GoogleCloudDialogflowV2AgentCoachingInstruction::class;
  protected $applicableInstructionsDataType = 'array';
  protected $sampleResponsesType = GoogleCloudDialogflowV2AgentCoachingSuggestionSampleResponse::class;
  protected $sampleResponsesDataType = 'array';

  /**
   * @param GoogleCloudDialogflowV2AgentCoachingSuggestionAgentActionSuggestion[]
   */
  public function setAgentActionSuggestions($agentActionSuggestions)
  {
    $this->agentActionSuggestions = $agentActionSuggestions;
  }
  /**
   * @return GoogleCloudDialogflowV2AgentCoachingSuggestionAgentActionSuggestion[]
   */
  public function getAgentActionSuggestions()
  {
    return $this->agentActionSuggestions;
  }
  /**
   * @param GoogleCloudDialogflowV2AgentCoachingInstruction[]
   */
  public function setApplicableInstructions($applicableInstructions)
  {
    $this->applicableInstructions = $applicableInstructions;
  }
  /**
   * @return GoogleCloudDialogflowV2AgentCoachingInstruction[]
   */
  public function getApplicableInstructions()
  {
    return $this->applicableInstructions;
  }
  /**
   * @param GoogleCloudDialogflowV2AgentCoachingSuggestionSampleResponse[]
   */
  public function setSampleResponses($sampleResponses)
  {
    $this->sampleResponses = $sampleResponses;
  }
  /**
   * @return GoogleCloudDialogflowV2AgentCoachingSuggestionSampleResponse[]
   */
  public function getSampleResponses()
  {
    return $this->sampleResponses;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2AgentCoachingSuggestion::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2AgentCoachingSuggestion');
