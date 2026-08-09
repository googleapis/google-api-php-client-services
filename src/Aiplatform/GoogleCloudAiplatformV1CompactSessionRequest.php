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

class GoogleCloudAiplatformV1CompactSessionRequest extends \Google\Model
{
  protected $compactionType = GoogleCloudAiplatformV1CompactionConfig::class;
  protected $compactionDataType = '';

  /**
   * Required. The compaction configuration to apply. At least one compaction
   * category (summarization or event editing) must be enabled within it.
   *
   * @param GoogleCloudAiplatformV1CompactionConfig $compaction
   */
  public function setCompaction(GoogleCloudAiplatformV1CompactionConfig $compaction)
  {
    $this->compaction = $compaction;
  }
  /**
   * @return GoogleCloudAiplatformV1CompactionConfig
   */
  public function getCompaction()
  {
    return $this->compaction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1CompactSessionRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1CompactSessionRequest');
