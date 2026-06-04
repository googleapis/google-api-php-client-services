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

class GoogleAdsSearchads360V23ResourcesCustomLeadFormSubmissionField extends \Google\Model
{
  /**
   * Output only. Field value for custom question response, maximum number of
   * characters is 70.
   *
   * @var string
   */
  public $fieldValue;
  /**
   * Output only. Question text for custom question, maximum number of
   * characters is 300.
   *
   * @var string
   */
  public $questionText;

  /**
   * Output only. Field value for custom question response, maximum number of
   * characters is 70.
   *
   * @param string $fieldValue
   */
  public function setFieldValue($fieldValue)
  {
    $this->fieldValue = $fieldValue;
  }
  /**
   * @return string
   */
  public function getFieldValue()
  {
    return $this->fieldValue;
  }
  /**
   * Output only. Question text for custom question, maximum number of
   * characters is 300.
   *
   * @param string $questionText
   */
  public function setQuestionText($questionText)
  {
    $this->questionText = $questionText;
  }
  /**
   * @return string
   */
  public function getQuestionText()
  {
    return $this->questionText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomLeadFormSubmissionField::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomLeadFormSubmissionField');
