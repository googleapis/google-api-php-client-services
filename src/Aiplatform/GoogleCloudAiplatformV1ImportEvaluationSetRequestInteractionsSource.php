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

class GoogleCloudAiplatformV1ImportEvaluationSetRequestInteractionsSource extends \Google\Collection
{
  protected $collection_key = 'interactions';
  protected $geminiAgentConfigType = GoogleCloudAiplatformV1GeminiAgentConfig::class;
  protected $geminiAgentConfigDataType = '';
  /**
   * Required. The interactions to import. Format:
   * `projects/{project}/locations/{location}/interactions/{interaction}`.
   *
   * @var string[]
   */
  public $interactions;

  /**
   * Optional. Gemini Agent (Vertex AI Agent resource).
   *
   * @param GoogleCloudAiplatformV1GeminiAgentConfig $geminiAgentConfig
   */
  public function setGeminiAgentConfig(GoogleCloudAiplatformV1GeminiAgentConfig $geminiAgentConfig)
  {
    $this->geminiAgentConfig = $geminiAgentConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1GeminiAgentConfig
   */
  public function getGeminiAgentConfig()
  {
    return $this->geminiAgentConfig;
  }
  /**
   * Required. The interactions to import. Format:
   * `projects/{project}/locations/{location}/interactions/{interaction}`.
   *
   * @param string[] $interactions
   */
  public function setInteractions($interactions)
  {
    $this->interactions = $interactions;
  }
  /**
   * @return string[]
   */
  public function getInteractions()
  {
    return $this->interactions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ImportEvaluationSetRequestInteractionsSource::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ImportEvaluationSetRequestInteractionsSource');
