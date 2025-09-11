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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpec extends \Google\Model
{
  protected $imageGenerationSpecType = GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecImageGenerationSpec::class;
  protected $imageGenerationSpecDataType = '';
  protected $vertexAiSearchSpecType = GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecVertexAiSearchSpec::class;
  protected $vertexAiSearchSpecDataType = '';
  protected $videoGenerationSpecType = GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecVideoGenerationSpec::class;
  protected $videoGenerationSpecDataType = '';
  protected $webGroundingSpecType = GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecWebGroundingSpec::class;
  protected $webGroundingSpecDataType = '';

  /**
   * @param GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecImageGenerationSpec
   */
  public function setImageGenerationSpec(GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecImageGenerationSpec $imageGenerationSpec)
  {
    $this->imageGenerationSpec = $imageGenerationSpec;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecImageGenerationSpec
   */
  public function getImageGenerationSpec()
  {
    return $this->imageGenerationSpec;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecVertexAiSearchSpec
   */
  public function setVertexAiSearchSpec(GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecVertexAiSearchSpec $vertexAiSearchSpec)
  {
    $this->vertexAiSearchSpec = $vertexAiSearchSpec;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecVertexAiSearchSpec
   */
  public function getVertexAiSearchSpec()
  {
    return $this->vertexAiSearchSpec;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecVideoGenerationSpec
   */
  public function setVideoGenerationSpec(GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecVideoGenerationSpec $videoGenerationSpec)
  {
    $this->videoGenerationSpec = $videoGenerationSpec;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecVideoGenerationSpec
   */
  public function getVideoGenerationSpec()
  {
    return $this->videoGenerationSpec;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecWebGroundingSpec
   */
  public function setWebGroundingSpec(GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecWebGroundingSpec $webGroundingSpec)
  {
    $this->webGroundingSpec = $webGroundingSpec;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpecWebGroundingSpec
   */
  public function getWebGroundingSpec()
  {
    return $this->webGroundingSpec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpec::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1StreamAssistRequestToolsSpec');
