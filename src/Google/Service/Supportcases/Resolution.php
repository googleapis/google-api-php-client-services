<?php
/*
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

class Google_Service_Supportcases_Resolution extends Google_Collection
{
  protected $collection_key = 'preActions';
  protected $cannedResponseType = 'Google_Service_Supportcases_CannedResponse';
  protected $cannedResponseDataType = '';
  protected $helpCenterType = 'Google_Service_Supportcases_HelpCenterContent';
  protected $helpCenterDataType = '';
  public $matchReason;
  public $matchTerms;
  protected $postActionsType = 'Google_Service_Supportcases_Action';
  protected $postActionsDataType = 'array';
  protected $preActionsType = 'Google_Service_Supportcases_Action';
  protected $preActionsDataType = 'array';
  public $score;
  public $snippet;
  public $title;
  protected $workflowType = 'Google_Service_Supportcases_Workflow';
  protected $workflowDataType = '';

  public function setCannedResponse(Google_Service_Supportcases_CannedResponse $cannedResponse)
  {
    $this->cannedResponse = $cannedResponse;
  }
  public function getCannedResponse()
  {
    return $this->cannedResponse;
  }
  public function setHelpCenter(Google_Service_Supportcases_HelpCenterContent $helpCenter)
  {
    $this->helpCenter = $helpCenter;
  }
  public function getHelpCenter()
  {
    return $this->helpCenter;
  }
  public function setMatchReason($matchReason)
  {
    $this->matchReason = $matchReason;
  }
  public function getMatchReason()
  {
    return $this->matchReason;
  }
  public function setMatchTerms($matchTerms)
  {
    $this->matchTerms = $matchTerms;
  }
  public function getMatchTerms()
  {
    return $this->matchTerms;
  }
  public function setPostActions($postActions)
  {
    $this->postActions = $postActions;
  }
  public function getPostActions()
  {
    return $this->postActions;
  }
  public function setPreActions($preActions)
  {
    $this->preActions = $preActions;
  }
  public function getPreActions()
  {
    return $this->preActions;
  }
  public function setScore($score)
  {
    $this->score = $score;
  }
  public function getScore()
  {
    return $this->score;
  }
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  public function getSnippet()
  {
    return $this->snippet;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setWorkflow(Google_Service_Supportcases_Workflow $workflow)
  {
    $this->workflow = $workflow;
  }
  public function getWorkflow()
  {
    return $this->workflow;
  }
}
