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

class GoogleAdsSearchads360V23CommonLeadFormCustomQuestionField extends \Google\Model
{
  /**
   * The exact custom question field text (for example, "What kind of vehicle do
   * you have?").
   *
   * @var string
   */
  public $customQuestionText;
  /**
   * Answer configuration for location question. If true, campaign/account level
   * location data (state, city, business name etc) will be rendered on the Lead
   * Form. Starting V13.1, has_location_answer can only be set for "What is your
   * preferred dealership?" question, for advertisers with Location Assets setup
   * at campaign/account level.
   *
   * @var bool
   */
  public $hasLocationAnswer;
  protected $singleChoiceAnswersType = GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers::class;
  protected $singleChoiceAnswersDataType = '';

  /**
   * The exact custom question field text (for example, "What kind of vehicle do
   * you have?").
   *
   * @param string $customQuestionText
   */
  public function setCustomQuestionText($customQuestionText)
  {
    $this->customQuestionText = $customQuestionText;
  }
  /**
   * @return string
   */
  public function getCustomQuestionText()
  {
    return $this->customQuestionText;
  }
  /**
   * Answer configuration for location question. If true, campaign/account level
   * location data (state, city, business name etc) will be rendered on the Lead
   * Form. Starting V13.1, has_location_answer can only be set for "What is your
   * preferred dealership?" question, for advertisers with Location Assets setup
   * at campaign/account level.
   *
   * @param bool $hasLocationAnswer
   */
  public function setHasLocationAnswer($hasLocationAnswer)
  {
    $this->hasLocationAnswer = $hasLocationAnswer;
  }
  /**
   * @return bool
   */
  public function getHasLocationAnswer()
  {
    return $this->hasLocationAnswer;
  }
  /**
   * Answer configuration for a single choice question. Minimum of 2 answers and
   * maximum of 12 allowed.
   *
   * @param GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers $singleChoiceAnswers
   */
  public function setSingleChoiceAnswers(GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers $singleChoiceAnswers)
  {
    $this->singleChoiceAnswers = $singleChoiceAnswers;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers
   */
  public function getSingleChoiceAnswers()
  {
    return $this->singleChoiceAnswers;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLeadFormCustomQuestionField::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLeadFormCustomQuestionField');
