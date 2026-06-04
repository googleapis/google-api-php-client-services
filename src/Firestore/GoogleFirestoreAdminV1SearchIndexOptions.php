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

namespace Google\Service\Firestore;

class GoogleFirestoreAdminV1SearchIndexOptions extends \Google\Model
{
  /**
   * Optional. The language to use for text search indexes. Used as the default
   * language if not overridden at the document level by specifying the
   * `text_language_override_field`. The language is specified as a BCP 47
   * language code. For indexes with MONGODB_COMPATIBLE_API ApiScope: If
   * unspecified, the default language is English. For indexes with `ANY_API`
   * ApiScope: If unspecified, the default behavior is autodetect.
   *
   * @var string
   */
  public $textLanguage;
  /**
   * Optional. The field in the document that specifies which language to use
   * for that specific document. For indexes with MONGODB_COMPATIBLE_API
   * ApiScope: if unspecified, the language is taken from the "language" field
   * if it exists or from `text_language` if it does not.
   *
   * @var string
   */
  public $textLanguageOverrideFieldPath;

  /**
   * Optional. The language to use for text search indexes. Used as the default
   * language if not overridden at the document level by specifying the
   * `text_language_override_field`. The language is specified as a BCP 47
   * language code. For indexes with MONGODB_COMPATIBLE_API ApiScope: If
   * unspecified, the default language is English. For indexes with `ANY_API`
   * ApiScope: If unspecified, the default behavior is autodetect.
   *
   * @param string $textLanguage
   */
  public function setTextLanguage($textLanguage)
  {
    $this->textLanguage = $textLanguage;
  }
  /**
   * @return string
   */
  public function getTextLanguage()
  {
    return $this->textLanguage;
  }
  /**
   * Optional. The field in the document that specifies which language to use
   * for that specific document. For indexes with MONGODB_COMPATIBLE_API
   * ApiScope: if unspecified, the language is taken from the "language" field
   * if it exists or from `text_language` if it does not.
   *
   * @param string $textLanguageOverrideFieldPath
   */
  public function setTextLanguageOverrideFieldPath($textLanguageOverrideFieldPath)
  {
    $this->textLanguageOverrideFieldPath = $textLanguageOverrideFieldPath;
  }
  /**
   * @return string
   */
  public function getTextLanguageOverrideFieldPath()
  {
    return $this->textLanguageOverrideFieldPath;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirestoreAdminV1SearchIndexOptions::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1SearchIndexOptions');
