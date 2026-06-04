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

class GoogleAdsSearchads360V23ServicesProvideLeadFeedbackRequest extends \Google\Model
{
  /**
   * Not specified.
   */
  public const SURVEY_ANSWER_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SURVEY_ANSWER_UNKNOWN = 'UNKNOWN';
  /**
   * Very satisfied with the lead.
   */
  public const SURVEY_ANSWER_VERY_SATISFIED = 'VERY_SATISFIED';
  /**
   * Satisfied with the lead.
   */
  public const SURVEY_ANSWER_SATISFIED = 'SATISFIED';
  /**
   * Neutral with the lead.
   */
  public const SURVEY_ANSWER_NEUTRAL = 'NEUTRAL';
  /**
   * Dissatisfied with the lead.
   */
  public const SURVEY_ANSWER_DISSATISFIED = 'DISSATISFIED';
  /**
   * Very dissatisfied with the lead.
   */
  public const SURVEY_ANSWER_VERY_DISSATISFIED = 'VERY_DISSATISFIED';
  /**
   * Required. Survey answer for Local Services Ads Lead.
   *
   * @var string
   */
  public $surveyAnswer;
  protected $surveyDissatisfiedType = GoogleAdsSearchads360V23ServicesSurveyDissatisfied::class;
  protected $surveyDissatisfiedDataType = '';
  protected $surveySatisfiedType = GoogleAdsSearchads360V23ServicesSurveySatisfied::class;
  protected $surveySatisfiedDataType = '';

  /**
   * Required. Survey answer for Local Services Ads Lead.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, VERY_SATISFIED, SATISFIED, NEUTRAL,
   * DISSATISFIED, VERY_DISSATISFIED
   *
   * @param self::SURVEY_ANSWER_* $surveyAnswer
   */
  public function setSurveyAnswer($surveyAnswer)
  {
    $this->surveyAnswer = $surveyAnswer;
  }
  /**
   * @return self::SURVEY_ANSWER_*
   */
  public function getSurveyAnswer()
  {
    return $this->surveyAnswer;
  }
  /**
   * Details about various factors for not being satisfied with the lead.
   *
   * @param GoogleAdsSearchads360V23ServicesSurveyDissatisfied $surveyDissatisfied
   */
  public function setSurveyDissatisfied(GoogleAdsSearchads360V23ServicesSurveyDissatisfied $surveyDissatisfied)
  {
    $this->surveyDissatisfied = $surveyDissatisfied;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSurveyDissatisfied
   */
  public function getSurveyDissatisfied()
  {
    return $this->surveyDissatisfied;
  }
  /**
   * Details about various factors for being satisfied with the lead.
   *
   * @param GoogleAdsSearchads360V23ServicesSurveySatisfied $surveySatisfied
   */
  public function setSurveySatisfied(GoogleAdsSearchads360V23ServicesSurveySatisfied $surveySatisfied)
  {
    $this->surveySatisfied = $surveySatisfied;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSurveySatisfied
   */
  public function getSurveySatisfied()
  {
    return $this->surveySatisfied;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesProvideLeadFeedbackRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesProvideLeadFeedbackRequest');
