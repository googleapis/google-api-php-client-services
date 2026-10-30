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

class SurveyConfig extends \Google\Collection
{
  protected $collection_key = 'questions';
  /**
   * Optional. Header prompt shown to readers. If omitted, the server populates
   * the default prompt localized to the parent publication's configured primary
   * language.
   *
   * @var string
   */
  public $customMessage;
  protected $questionsType = SurveyQuestion::class;
  protected $questionsDataType = 'array';
  /**
   * Output only. Link to the Looker Studio dashboard.
   *
   * @var string
   */
  public $reportUrl;

  /**
   * Optional. Header prompt shown to readers. If omitted, the server populates
   * the default prompt localized to the parent publication's configured primary
   * language.
   *
   * @param string $customMessage
   */
  public function setCustomMessage($customMessage)
  {
    $this->customMessage = $customMessage;
  }
  /**
   * @return string
   */
  public function getCustomMessage()
  {
    return $this->customMessage;
  }
  /**
   * Optional. Ordered list of questions presented in the survey (1-3 items when
   * `ACTIVE`; 0-3 when `DRAFT`).
   *
   * @param SurveyQuestion[] $questions
   */
  public function setQuestions($questions)
  {
    $this->questions = $questions;
  }
  /**
   * @return SurveyQuestion[]
   */
  public function getQuestions()
  {
    return $this->questions;
  }
  /**
   * Output only. Link to the Looker Studio dashboard.
   *
   * @param string $reportUrl
   */
  public function setReportUrl($reportUrl)
  {
    $this->reportUrl = $reportUrl;
  }
  /**
   * @return string
   */
  public function getReportUrl()
  {
    return $this->reportUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SurveyConfig::class, 'Google_Service_WebContentPublisher_SurveyConfig');
