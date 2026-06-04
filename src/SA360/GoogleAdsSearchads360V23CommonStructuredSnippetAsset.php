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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonStructuredSnippetAsset extends \Google\Collection
{
  protected $collection_key = 'values';
  /**
   * Required. The header of the snippet. This string should be one of the
   * predefined values at https://developers.google.com/google-
   * ads/api/reference/data/structured-snippet-headers
   *
   * @var string
   */
  public $header;
  /**
   * Required. The values in the snippet. The size of this collection should be
   * between 3 and 10, inclusive. The length of each value should be between 1
   * and 25 characters, inclusive.
   *
   * @var string[]
   */
  public $values;

  /**
   * Required. The header of the snippet. This string should be one of the
   * predefined values at https://developers.google.com/google-
   * ads/api/reference/data/structured-snippet-headers
   *
   * @param string $header
   */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /**
   * @return string
   */
  public function getHeader()
  {
    return $this->header;
  }
  /**
   * Required. The values in the snippet. The size of this collection should be
   * between 3 and 10, inclusive. The length of each value should be between 1
   * and 25 characters, inclusive.
   *
   * @param string[] $values
   */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /**
   * @return string[]
   */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonStructuredSnippetAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonStructuredSnippetAsset');
