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

class GoogleCloudAiplatformV1AudioTranscriptionConfig extends \Google\Collection
{
  protected $collection_key = 'languageCodes';
  /**
   * Optional. Deprecated: Use `custom_vocabulary` instead. A list of phrases to
   * bias the speech recognition model towards.
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
   * Optional. Configures speaker diarization.
   *
   * @var bool
   */
  public $diarization;
  protected $languageAutoType = GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageAuto::class;
  protected $languageAutoDataType = '';
  /**
   * Optional. BCP-47 language codes providing hints about the languages present
   * in the audio. If omitted or empty, defaults to automatic language
   * detection.
   *
   * @var string[]
   */
  public $languageCodes;
  protected $languageHintsType = GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageHints::class;
  protected $languageHintsDataType = '';
  /**
   * Optional. Configures word-level timestamp generation.
   *
   * @var bool
   */
  public $wordTimestamp;

  /**
   * Optional. Deprecated: Use `custom_vocabulary` instead. A list of phrases to
   * bias the speech recognition model towards.
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
   * Optional. Configures speaker diarization.
   *
   * @param bool $diarization
   */
  public function setDiarization($diarization)
  {
    $this->diarization = $diarization;
  }
  /**
   * @return bool
   */
  public function getDiarization()
  {
    return $this->diarization;
  }
  /**
   * Optional. Deprecated: Use top-level `language_codes` instead. The model
   * will detect the language automatically.
   *
   * @deprecated
   * @param GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageAuto $languageAuto
   */
  public function setLanguageAuto(GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageAuto $languageAuto)
  {
    $this->languageAuto = $languageAuto;
  }
  /**
   * @deprecated
   * @return GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageAuto
   */
  public function getLanguageAuto()
  {
    return $this->languageAuto;
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
   * Optional. Deprecated: Use top-level `language_codes` instead. Specifies one
   * or more languages in the audio.
   *
   * @deprecated
   * @param GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageHints $languageHints
   */
  public function setLanguageHints(GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageHints $languageHints)
  {
    $this->languageHints = $languageHints;
  }
  /**
   * @deprecated
   * @return GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageHints
   */
  public function getLanguageHints()
  {
    return $this->languageHints;
  }
  /**
   * Optional. Configures word-level timestamp generation.
   *
   * @param bool $wordTimestamp
   */
  public function setWordTimestamp($wordTimestamp)
  {
    $this->wordTimestamp = $wordTimestamp;
  }
  /**
   * @return bool
   */
  public function getWordTimestamp()
  {
    return $this->wordTimestamp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AudioTranscriptionConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AudioTranscriptionConfig');
