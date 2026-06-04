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

class GoogleFirestoreAdminV1SearchTextIndexSpec extends \Google\Model
{
  /**
   * The index type is unspecified. Not a valid option.
   */
  public const INDEX_TYPE_TEXT_INDEX_TYPE_UNSPECIFIED = 'TEXT_INDEX_TYPE_UNSPECIFIED';
  /**
   * Field values are tokenized. This is the only way currently supported for
   * MONGODB_COMPATIBLE_API.
   */
  public const INDEX_TYPE_TOKENIZED = 'TOKENIZED';
  /**
   * The match type is unspecified. Not a valid option.
   */
  public const MATCH_TYPE_TEXT_MATCH_TYPE_UNSPECIFIED = 'TEXT_MATCH_TYPE_UNSPECIFIED';
  /**
   * Match on any indexed field. This is the only way currently supported for
   * MONGODB_COMPATIBLE_API.
   */
  public const MATCH_TYPE_MATCH_GLOBALLY = 'MATCH_GLOBALLY';
  /**
   * Required. How to index the text field value.
   *
   * @var string
   */
  public $indexType;
  /**
   * Required. How to match the text field value.
   *
   * @var string
   */
  public $matchType;

  /**
   * Required. How to index the text field value.
   *
   * Accepted values: TEXT_INDEX_TYPE_UNSPECIFIED, TOKENIZED
   *
   * @param self::INDEX_TYPE_* $indexType
   */
  public function setIndexType($indexType)
  {
    $this->indexType = $indexType;
  }
  /**
   * @return self::INDEX_TYPE_*
   */
  public function getIndexType()
  {
    return $this->indexType;
  }
  /**
   * Required. How to match the text field value.
   *
   * Accepted values: TEXT_MATCH_TYPE_UNSPECIFIED, MATCH_GLOBALLY
   *
   * @param self::MATCH_TYPE_* $matchType
   */
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /**
   * @return self::MATCH_TYPE_*
   */
  public function getMatchType()
  {
    return $this->matchType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirestoreAdminV1SearchTextIndexSpec::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1SearchTextIndexSpec');
