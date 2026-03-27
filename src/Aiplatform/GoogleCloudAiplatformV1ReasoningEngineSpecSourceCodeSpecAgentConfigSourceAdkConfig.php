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

class GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSourceAdkConfig extends \Google\Model
{
  /**
   * Required. The value of the ADK config in JSON format.
   *
   * @var array[]
   */
  public $jsonConfig;

  /**
   * Required. The value of the ADK config in JSON format.
   *
   * @param array[] $jsonConfig
   */
  public function setJsonConfig($jsonConfig)
  {
    $this->jsonConfig = $jsonConfig;
  }
  /**
   * @return array[]
   */
  public function getJsonConfig()
  {
    return $this->jsonConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSourceAdkConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSourceAdkConfig');
