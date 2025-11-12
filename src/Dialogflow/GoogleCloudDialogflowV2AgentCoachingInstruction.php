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

class GoogleCloudDialogflowV2AgentCoachingInstruction extends \Google\Model
{
  /**
   * @var string
   */
  public $agentAction;
  /**
   * @var string
   */
  public $condition;
  /**
   * @var string
   */
  public $displayDetails;
  /**
   * @var string
   */
  public $displayName;
  protected $duplicateCheckResultType = GoogleCloudDialogflowV2AgentCoachingInstructionDuplicateCheckResult::class;
  protected $duplicateCheckResultDataType = '';
  /**
   * @var string
   */
  public $systemAction;

  /**
   * @param string
   */
  public function setAgentAction($agentAction)
  {
    $this->agentAction = $agentAction;
  }
  /**
   * @return string
   */
  public function getAgentAction()
  {
    return $this->agentAction;
  }
  /**
   * @param string
   */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return string
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * @param string
   */
  public function setDisplayDetails($displayDetails)
  {
    $this->displayDetails = $displayDetails;
  }
  /**
   * @return string
   */
  public function getDisplayDetails()
  {
    return $this->displayDetails;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param GoogleCloudDialogflowV2AgentCoachingInstructionDuplicateCheckResult
   */
  public function setDuplicateCheckResult(GoogleCloudDialogflowV2AgentCoachingInstructionDuplicateCheckResult $duplicateCheckResult)
  {
    $this->duplicateCheckResult = $duplicateCheckResult;
  }
  /**
   * @return GoogleCloudDialogflowV2AgentCoachingInstructionDuplicateCheckResult
   */
  public function getDuplicateCheckResult()
  {
    return $this->duplicateCheckResult;
  }
  /**
   * @param string
   */
  public function setSystemAction($systemAction)
  {
    $this->systemAction = $systemAction;
  }
  /**
   * @return string
   */
  public function getSystemAction()
  {
    return $this->systemAction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2AgentCoachingInstruction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2AgentCoachingInstruction');
