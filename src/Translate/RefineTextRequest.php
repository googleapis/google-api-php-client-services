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

class RefineTextRequest extends \Google\Collection
{
  protected $collection_key = 'refinementEntries';
  protected $refinementEntriesType = RefinementEntry::class;
  protected $refinementEntriesDataType = 'array';
  /**
   * Required. The BCP-47 language code of the source text in the request, for
   * example, "en-US".
   *
   * @var string
   */
  public $sourceLanguageCode;
  /**
   * Required. The BCP-47 language code for translation output, for example,
   * "zh-CN".
   *
   * @var string
   */
  public $targetLanguageCode;

  /**
   * Required. The source texts and original translations in the source and
   * target languages.
   *
   * @param RefinementEntry[] $refinementEntries
   */
  public function setRefinementEntries($refinementEntries)
  {
    $this->refinementEntries = $refinementEntries;
  }
  /**
   * @return RefinementEntry[]
   */
  public function getRefinementEntries()
  {
    return $this->refinementEntries;
  }
  /**
   * Required. The BCP-47 language code of the source text in the request, for
   * example, "en-US".
   *
   * @param string $sourceLanguageCode
   */
  public function setSourceLanguageCode($sourceLanguageCode)
  {
    $this->sourceLanguageCode = $sourceLanguageCode;
  }
  /**
   * @return string
   */
  public function getSourceLanguageCode()
  {
    return $this->sourceLanguageCode;
  }
  /**
   * Required. The BCP-47 language code for translation output, for example,
   * "zh-CN".
   *
   * @param string $targetLanguageCode
   */
  public function setTargetLanguageCode($targetLanguageCode)
  {
    $this->targetLanguageCode = $targetLanguageCode;
  }
  /**
   * @return string
   */
  public function getTargetLanguageCode()
  {
    return $this->targetLanguageCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RefineTextRequest::class, 'Google_Service_Translate_RefineTextRequest');
