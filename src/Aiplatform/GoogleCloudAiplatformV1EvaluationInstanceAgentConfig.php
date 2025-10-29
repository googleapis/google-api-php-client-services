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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1EvaluationInstanceAgentConfig extends \Google\Model
{
  protected $developerInstructionType = GoogleCloudAiplatformV1EvaluationInstanceInstanceData::class;
  protected $developerInstructionDataType = '';
  protected $toolsType = GoogleCloudAiplatformV1EvaluationInstanceAgentConfigTools::class;
  protected $toolsDataType = '';
  /**
   * @var string
   */
  public $toolsText;

  /**
   * @param GoogleCloudAiplatformV1EvaluationInstanceInstanceData
   */
  public function setDeveloperInstruction(GoogleCloudAiplatformV1EvaluationInstanceInstanceData $developerInstruction)
  {
    $this->developerInstruction = $developerInstruction;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationInstanceInstanceData
   */
  public function getDeveloperInstruction()
  {
    return $this->developerInstruction;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationInstanceAgentConfigTools
   */
  public function setTools(GoogleCloudAiplatformV1EvaluationInstanceAgentConfigTools $tools)
  {
    $this->tools = $tools;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationInstanceAgentConfigTools
   */
  public function getTools()
  {
    return $this->tools;
  }
  /**
   * @param string
   */
  public function setToolsText($toolsText)
  {
    $this->toolsText = $toolsText;
  }
  /**
   * @return string
   */
  public function getToolsText()
  {
    return $this->toolsText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationInstanceAgentConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationInstanceAgentConfig');
