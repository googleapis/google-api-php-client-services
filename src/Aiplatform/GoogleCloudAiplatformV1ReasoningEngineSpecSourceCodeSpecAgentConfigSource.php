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

class GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSource extends \Google\Model
{
  protected $adkConfigType = GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSourceAdkConfig::class;
  protected $adkConfigDataType = '';
  protected $inlineSourceType = GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecInlineSource::class;
  protected $inlineSourceDataType = '';

  /**
   * Required. The ADK configuration.
   *
   * @param GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSourceAdkConfig $adkConfig
   */
  public function setAdkConfig(GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSourceAdkConfig $adkConfig)
  {
    $this->adkConfig = $adkConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSourceAdkConfig
   */
  public function getAdkConfig()
  {
    return $this->adkConfig;
  }
  /**
   * Optional. Any additional files needed to interpret the config. If a
   * `requirements.txt` file is present in the `inline_source`, the
   * corresponding packages will be installed. If no `requirements.txt` file is
   * present in `inline_source`, then the latest version of `google-adk` will be
   * installed for interpreting the ADK config.
   *
   * @param GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecInlineSource $inlineSource
   */
  public function setInlineSource(GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecInlineSource $inlineSource)
  {
    $this->inlineSource = $inlineSource;
  }
  /**
   * @return GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecInlineSource
   */
  public function getInlineSource()
  {
    return $this->inlineSource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSource::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecAgentConfigSource');
