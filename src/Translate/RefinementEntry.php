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

namespace Google\Service\Translate;

class RefinementEntry extends \Google\Model
{
  /**
   * Required. The original translation of the source text.
   *
   * @var string
   */
  public $originalTranslation;
  /**
   * Required. The source text to be refined.
   *
   * @var string
   */
  public $sourceText;

  /**
   * Required. The original translation of the source text.
   *
   * @param string $originalTranslation
   */
  public function setOriginalTranslation($originalTranslation)
  {
    $this->originalTranslation = $originalTranslation;
  }
  /**
   * @return string
   */
  public function getOriginalTranslation()
  {
    return $this->originalTranslation;
  }
  /**
   * Required. The source text to be refined.
   *
   * @param string $sourceText
   */
  public function setSourceText($sourceText)
  {
    $this->sourceText = $sourceText;
  }
  /**
   * @return string
   */
  public function getSourceText()
  {
    return $this->sourceText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RefinementEntry::class, 'Google_Service_Translate_RefinementEntry');
