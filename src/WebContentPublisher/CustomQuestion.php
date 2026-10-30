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

namespace Google\Service\WebContentPublisher;

class CustomQuestion extends \Google\Collection
{
  protected $collection_key = 'answerChoices';
  protected $answerChoicesType = CustomAnswerChoice::class;
  protected $answerChoicesDataType = 'array';
  /**
   * Optional. Reporting category label sent to Google Analytics (up to 100
   * characters).
   *
   * @var string
   */
  public $categoryLabel;
  /**
   * Optional. The question prompt displayed to readers (up to 140 characters).
   *
   * @var string
   */
  public $displayText;
  /**
   * Output only. Server-assigned unique identifier for the custom question.
   *
   * @var string
   */
  public $id;

  /**
   * Required. Ordered list of answer choices for the custom question (2-5
   * items).
   *
   * @param CustomAnswerChoice[] $answerChoices
   */
  public function setAnswerChoices($answerChoices)
  {
    $this->answerChoices = $answerChoices;
  }
  /**
   * @return CustomAnswerChoice[]
   */
  public function getAnswerChoices()
  {
    return $this->answerChoices;
  }
  /**
   * Optional. Reporting category label sent to Google Analytics (up to 100
   * characters).
   *
   * @param string $categoryLabel
   */
  public function setCategoryLabel($categoryLabel)
  {
    $this->categoryLabel = $categoryLabel;
  }
  /**
   * @return string
   */
  public function getCategoryLabel()
  {
    return $this->categoryLabel;
  }
  /**
   * Optional. The question prompt displayed to readers (up to 140 characters).
   *
   * @param string $displayText
   */
  public function setDisplayText($displayText)
  {
    $this->displayText = $displayText;
  }
  /**
   * @return string
   */
  public function getDisplayText()
  {
    return $this->displayText;
  }
  /**
   * Output only. Server-assigned unique identifier for the custom question.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomQuestion::class, 'Google_Service_WebContentPublisher_CustomQuestion');
