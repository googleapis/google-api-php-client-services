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

class GoogleCloudAiplatformV1CompactionConfig extends \Google\Model
{
  protected $eventEditingType = GoogleCloudAiplatformV1CompactionConfigEventEditingConfig::class;
  protected $eventEditingDataType = '';
  protected $summarizationType = GoogleCloudAiplatformV1CompactionConfigLlmSummarizationConfig::class;
  protected $summarizationDataType = '';

  /**
   * Optional. Event-history editing compaction configuration. Set to enable
   * deterministic event editing (e.g. masking oversized tool responses). Can be
   * combined with `summarization`.
   *
   * @param GoogleCloudAiplatformV1CompactionConfigEventEditingConfig $eventEditing
   */
  public function setEventEditing(GoogleCloudAiplatformV1CompactionConfigEventEditingConfig $eventEditing)
  {
    $this->eventEditing = $eventEditing;
  }
  /**
   * @return GoogleCloudAiplatformV1CompactionConfigEventEditingConfig
   */
  public function getEventEditing()
  {
    return $this->eventEditing;
  }
  /**
   * Optional. LLM summarization compaction configuration. Set to enable
   * summarization-based compaction. Can be combined with `event_editing`.
   *
   * @param GoogleCloudAiplatformV1CompactionConfigLlmSummarizationConfig $summarization
   */
  public function setSummarization(GoogleCloudAiplatformV1CompactionConfigLlmSummarizationConfig $summarization)
  {
    $this->summarization = $summarization;
  }
  /**
   * @return GoogleCloudAiplatformV1CompactionConfigLlmSummarizationConfig
   */
  public function getSummarization()
  {
    return $this->summarization;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1CompactionConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1CompactionConfig');
