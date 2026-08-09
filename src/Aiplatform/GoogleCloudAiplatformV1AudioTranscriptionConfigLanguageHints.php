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

class GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageHints extends \Google\Collection
{
  protected $collection_key = 'languageCodes';
  /**
   * Required. Deprecated: Use top-level `language_codes` instead. BCP-47
   * language codes. At least one must be specified.
   *
   * @deprecated
   * @var string[]
   */
  public $languageCodes;

  /**
   * Required. Deprecated: Use top-level `language_codes` instead. BCP-47
   * language codes. At least one must be specified.
   *
   * @deprecated
   * @param string[] $languageCodes
   */
  public function setLanguageCodes($languageCodes)
  {
    $this->languageCodes = $languageCodes;
  }
  /**
   * @deprecated
   * @return string[]
   */
  public function getLanguageCodes()
  {
    return $this->languageCodes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageHints::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AudioTranscriptionConfigLanguageHints');
