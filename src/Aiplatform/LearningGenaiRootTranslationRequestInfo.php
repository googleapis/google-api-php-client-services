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

class LearningGenaiRootTranslationRequestInfo extends \Google\Collection
{
  protected $collection_key = 'detectedLanguageCodes';
  /**
   * @var string[]
   */
  public $detectedLanguageCodes;
  /**
   * @var string
   */
  public $totalContentSize;

  /**
   * @param string[]
   */
  public function setDetectedLanguageCodes($detectedLanguageCodes)
  {
    $this->detectedLanguageCodes = $detectedLanguageCodes;
  }
  /**
   * @return string[]
   */
  public function getDetectedLanguageCodes()
  {
    return $this->detectedLanguageCodes;
  }
  /**
   * @param string
   */
  public function setTotalContentSize($totalContentSize)
  {
    $this->totalContentSize = $totalContentSize;
  }
  /**
   * @return string
   */
  public function getTotalContentSize()
  {
    return $this->totalContentSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LearningGenaiRootTranslationRequestInfo::class, 'Google_Service_Aiplatform_LearningGenaiRootTranslationRequestInfo');
