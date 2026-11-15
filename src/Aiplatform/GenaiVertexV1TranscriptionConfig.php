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

class GenaiVertexV1TranscriptionConfig extends \Google\Collection
{
  /**
   * Unspecified transcription mode.
   */
  public const MODE_ENUM_MODE_UNSPECIFIED = 'MODE_UNSPECIFIED';
  /**
   * Verbatim transcription mode.
   */
  public const MODE_ENUM_VERBATIM = 'VERBATIM';
  /**
   * Smart transcription mode.
   */
  public const MODE_ENUM_SMART = 'SMART';
  protected $collection_key = 'timestampGranularities';
  /**
   * Optional. A list of phrases to bias the ASR model towards.
   *
   * @deprecated
   * @var string[]
   */
  public $adaptationPhrases;
  /**
   * Optional. A list of custom vocabulary phrases to bias the speech
   * recognition model toward recognizing specific terms.
   *
   * @var string[]
   */
  public $customVocabulary;
  /**
   * Optional. Configures speaker diarization. Supported values: "speaker".
   *
   * @deprecated
   * @var string
   */
  public $diarizationMode;
  /**
   * Optional. BCP-47 language codes providing hints about the languages present
   * in the audio. If omitted or empty, defaults to automatic language
   * detection.
   *
   * @var string[]
   */
  public $languageCodes;
  protected $modeConfigType = GenaiVertexV1TranscriptionMode::class;
  protected $modeConfigDataType = '';
  /**
   * @var string
   */
  public $modeEnum;
  /**
   * Optional. The granularity of timestamps to include in the transcription
   * output. Supported values: "word". If empty, no timestamps are generated.
   *
   * @deprecated
   * @var string[]
   */
  public $timestampGranularities;

  /**
   * Optional. A list of phrases to bias the ASR model towards.
   *
   * @deprecated
   * @param string[] $adaptationPhrases
   */
  public function setAdaptationPhrases($adaptationPhrases)
  {
    $this->adaptationPhrases = $adaptationPhrases;
  }
  /**
   * @deprecated
   * @return string[]
   */
  public function getAdaptationPhrases()
  {
    return $this->adaptationPhrases;
  }
  /**
   * Optional. A list of custom vocabulary phrases to bias the speech
   * recognition model toward recognizing specific terms.
   *
   * @param string[] $customVocabulary
   */
  public function setCustomVocabulary($customVocabulary)
  {
    $this->customVocabulary = $customVocabulary;
  }
  /**
   * @return string[]
   */
  public function getCustomVocabulary()
  {
    return $this->customVocabulary;
  }
  /**
   * Optional. Configures speaker diarization. Supported values: "speaker".
   *
   * @deprecated
   * @param string $diarizationMode
   */
  public function setDiarizationMode($diarizationMode)
  {
    $this->diarizationMode = $diarizationMode;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getDiarizationMode()
  {
    return $this->diarizationMode;
  }
  /**
   * Optional. BCP-47 language codes providing hints about the languages present
   * in the audio. If omitted or empty, defaults to automatic language
   * detection.
   *
   * @param string[] $languageCodes
   */
  public function setLanguageCodes($languageCodes)
  {
    $this->languageCodes = $languageCodes;
  }
  /**
   * @return string[]
   */
  public function getLanguageCodes()
  {
    return $this->languageCodes;
  }
  /**
   * @param GenaiVertexV1TranscriptionMode $modeConfig
   */
  public function setModeConfig(GenaiVertexV1TranscriptionMode $modeConfig)
  {
    $this->modeConfig = $modeConfig;
  }
  /**
   * @return GenaiVertexV1TranscriptionMode
   */
  public function getModeConfig()
  {
    return $this->modeConfig;
  }
  /**
   * @param self::MODE_ENUM_* $modeEnum
   */
  public function setModeEnum($modeEnum)
  {
    $this->modeEnum = $modeEnum;
  }
  /**
   * @return self::MODE_ENUM_*
   */
  public function getModeEnum()
  {
    return $this->modeEnum;
  }
  /**
   * Optional. The granularity of timestamps to include in the transcription
   * output. Supported values: "word". If empty, no timestamps are generated.
   *
   * @deprecated
   * @param string[] $timestampGranularities
   */
  public function setTimestampGranularities($timestampGranularities)
  {
    $this->timestampGranularities = $timestampGranularities;
  }
  /**
   * @deprecated
   * @return string[]
   */
  public function getTimestampGranularities()
  {
    return $this->timestampGranularities;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1TranscriptionConfig::class, 'Google_Service_Aiplatform_GenaiVertexV1TranscriptionConfig');
