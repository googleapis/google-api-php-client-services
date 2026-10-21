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

class TextQuoteSelector extends \Google\Model
{
  /**
   * Output only. Verbatim substring extracted from the document character
   * stream.
   *
   * @var string
   */
  public $exact;
  /**
   * Output only. Characters immediately preceding `exact` for disambiguation.
   *
   * @var string
   */
  public $prefix;
  /**
   * Output only. Characters immediately following `exact` for disambiguation.
   *
   * @var string
   */
  public $suffix;

  /**
   * Output only. Verbatim substring extracted from the document character
   * stream.
   *
   * @param string $exact
   */
  public function setExact($exact)
  {
    $this->exact = $exact;
  }
  /**
   * @return string
   */
  public function getExact()
  {
    return $this->exact;
  }
  /**
   * Output only. Characters immediately preceding `exact` for disambiguation.
   *
   * @param string $prefix
   */
  public function setPrefix($prefix)
  {
    $this->prefix = $prefix;
  }
  /**
   * @return string
   */
  public function getPrefix()
  {
    return $this->prefix;
  }
  /**
   * Output only. Characters immediately following `exact` for disambiguation.
   *
   * @param string $suffix
   */
  public function setSuffix($suffix)
  {
    $this->suffix = $suffix;
  }
  /**
   * @return string
   */
  public function getSuffix()
  {
    return $this->suffix;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextQuoteSelector::class, 'Google_Service_DeepReview_TextQuoteSelector');
