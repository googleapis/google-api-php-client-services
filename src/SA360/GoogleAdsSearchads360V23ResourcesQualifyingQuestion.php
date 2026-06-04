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

class GoogleAdsSearchads360V23ResourcesQualifyingQuestion extends \Google\Model
{
  /**
   * Output only. The locale of the qualifying question.
   *
   * @var string
   */
  public $locale;
  /**
   * Output only. The id of the qualifying question.
   *
   * @var string
   */
  public $qualifyingQuestionId;
  /**
   * Output only. The resource name of the qualifying question.
   * 'qualifyingQuestions/{qualifyingQuestionId}'
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The qualifying question.
   *
   * @var string
   */
  public $text;

  /**
   * Output only. The locale of the qualifying question.
   *
   * @param string $locale
   */
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /**
   * @return string
   */
  public function getLocale()
  {
    return $this->locale;
  }
  /**
   * Output only. The id of the qualifying question.
   *
   * @param string $qualifyingQuestionId
   */
  public function setQualifyingQuestionId($qualifyingQuestionId)
  {
    $this->qualifyingQuestionId = $qualifyingQuestionId;
  }
  /**
   * @return string
   */
  public function getQualifyingQuestionId()
  {
    return $this->qualifyingQuestionId;
  }
  /**
   * Output only. The resource name of the qualifying question.
   * 'qualifyingQuestions/{qualifyingQuestionId}'
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. The qualifying question.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesQualifyingQuestion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesQualifyingQuestion');
