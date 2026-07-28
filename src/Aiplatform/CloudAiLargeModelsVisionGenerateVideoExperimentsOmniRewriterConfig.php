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

class CloudAiLargeModelsVisionGenerateVideoExperimentsOmniRewriterConfig extends \Google\Model
{
  /**
   * Optional. Maximum duration of a chunk in seconds.
   *
   * @var float
   */
  public $maxChunkDuration;
  /**
   * Optional. FPS used to generate gemini chunks for video inputs.
   *
   * @var int
   */
  public $rewriterInputFps;

  /**
   * Optional. Maximum duration of a chunk in seconds.
   *
   * @param float $maxChunkDuration
   */
  public function setMaxChunkDuration($maxChunkDuration)
  {
    $this->maxChunkDuration = $maxChunkDuration;
  }
  /**
   * @return float
   */
  public function getMaxChunkDuration()
  {
    return $this->maxChunkDuration;
  }
  /**
   * Optional. FPS used to generate gemini chunks for video inputs.
   *
   * @param int $rewriterInputFps
   */
  public function setRewriterInputFps($rewriterInputFps)
  {
    $this->rewriterInputFps = $rewriterInputFps;
  }
  /**
   * @return int
   */
  public function getRewriterInputFps()
  {
    return $this->rewriterInputFps;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionGenerateVideoExperimentsOmniRewriterConfig::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionGenerateVideoExperimentsOmniRewriterConfig');
