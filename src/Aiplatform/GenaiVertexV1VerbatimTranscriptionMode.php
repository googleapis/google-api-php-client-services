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

class GenaiVertexV1VerbatimTranscriptionMode extends \Google\Collection
{
  protected $collection_key = 'timestampGranularities';
  /**
   * Optional. Configures speaker diarization. Supported values: "speaker".
   *
   * @var string
   */
  public $diarizationMode;
  /**
   * Optional. The granularity of timestamps to include in the transcription
   * output. Supported values: "word". If empty, no timestamps are generated.
   *
   * @var string[]
   */
  public $timestampGranularities;

  /**
   * Optional. Configures speaker diarization. Supported values: "speaker".
   *
   * @param string $diarizationMode
   */
  public function setDiarizationMode($diarizationMode)
  {
    $this->diarizationMode = $diarizationMode;
  }
  /**
   * @return string
   */
  public function getDiarizationMode()
  {
    return $this->diarizationMode;
  }
  /**
   * Optional. The granularity of timestamps to include in the transcription
   * output. Supported values: "word". If empty, no timestamps are generated.
   *
   * @param string[] $timestampGranularities
   */
  public function setTimestampGranularities($timestampGranularities)
  {
    $this->timestampGranularities = $timestampGranularities;
  }
  /**
   * @return string[]
   */
  public function getTimestampGranularities()
  {
    return $this->timestampGranularities;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1VerbatimTranscriptionMode::class, 'Google_Service_Aiplatform_GenaiVertexV1VerbatimTranscriptionMode');
