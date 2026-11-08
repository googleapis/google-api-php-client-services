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

class GoogleCloudAiplatformV1DataAgentConfig extends \Google\Model
{
  /**
   * Required. The resource name of the Gemini Data Analytics data agent.
   * Format: `projects/{project}/locations/{location}/dataAgents/{data_agent}`.
   * For example: `projects/123/locations/us-central1/dataAgents/my-agent`.
   *
   * @var string
   */
  public $dataAgent;

  /**
   * Required. The resource name of the Gemini Data Analytics data agent.
   * Format: `projects/{project}/locations/{location}/dataAgents/{data_agent}`.
   * For example: `projects/123/locations/us-central1/dataAgents/my-agent`.
   *
   * @param string $dataAgent
   */
  public function setDataAgent($dataAgent)
  {
    $this->dataAgent = $dataAgent;
  }
  /**
   * @return string
   */
  public function getDataAgent()
  {
    return $this->dataAgent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1DataAgentConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1DataAgentConfig');
