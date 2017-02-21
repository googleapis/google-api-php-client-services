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

class Google_Service_Supportcases_Action extends Google_Model
{
  protected $cannedResponsesType = 'Google_Service_Supportcases_CannedResponseAction';
  protected $cannedResponsesDataType = '';
  protected $issueCategoriesType = 'Google_Service_Supportcases_IssueCategoryAction';
  protected $issueCategoriesDataType = '';
  public $nextState;

  public function setCannedResponses(Google_Service_Supportcases_CannedResponseAction $cannedResponses)
  {
    $this->cannedResponses = $cannedResponses;
  }
  public function getCannedResponses()
  {
    return $this->cannedResponses;
  }
  public function setIssueCategories(Google_Service_Supportcases_IssueCategoryAction $issueCategories)
  {
    $this->issueCategories = $issueCategories;
  }
  public function getIssueCategories()
  {
    return $this->issueCategories;
  }
  public function setNextState($nextState)
  {
    $this->nextState = $nextState;
  }
  public function getNextState()
  {
    return $this->nextState;
  }
}
