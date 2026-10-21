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

namespace Google\Service\DeepReview;

class FieldComparison extends \Google\Model
{
  /**
   * Output only. Human-readable comparison detail (e.g., "extracted=2023,
   * found=2024 (diff=1)").
   *
   * @var string
   */
  public $detail;
  /**
   * Output only. Field key ("title", "authors", "year", "journal", "volume",
   * "pages", "doi").
   *
   * @var string
   */
  public $fieldKey;
  /**
   * Output only. Whether the extracted and retrieved values matched.
   *
   * @var bool
   */
  public $match;

  /**
   * Output only. Human-readable comparison detail (e.g., "extracted=2023,
   * found=2024 (diff=1)").
   *
   * @param string $detail
   */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /**
   * @return string
   */
  public function getDetail()
  {
    return $this->detail;
  }
  /**
   * Output only. Field key ("title", "authors", "year", "journal", "volume",
   * "pages", "doi").
   *
   * @param string $fieldKey
   */
  public function setFieldKey($fieldKey)
  {
    $this->fieldKey = $fieldKey;
  }
  /**
   * @return string
   */
  public function getFieldKey()
  {
    return $this->fieldKey;
  }
  /**
   * Output only. Whether the extracted and retrieved values matched.
   *
   * @param bool $match
   */
  public function setMatch($match)
  {
    $this->match = $match;
  }
  /**
   * @return bool
   */
  public function getMatch()
  {
    return $this->match;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldComparison::class, 'Google_Service_DeepReview_FieldComparison');
