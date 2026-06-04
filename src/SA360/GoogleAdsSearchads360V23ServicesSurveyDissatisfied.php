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

class GoogleAdsSearchads360V23ServicesSurveyDissatisfied extends \Google\Model
{
  /**
   * Not specified.
   */
  public const SURVEY_DISSATISFIED_REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SURVEY_DISSATISFIED_REASON_UNKNOWN = 'UNKNOWN';
  /**
   * Other reasons.
   */
  public const SURVEY_DISSATISFIED_REASON_OTHER_DISSATISFIED_REASON = 'OTHER_DISSATISFIED_REASON';
  /**
   * Lead was for a service that does not match the business' service area.
   */
  public const SURVEY_DISSATISFIED_REASON_GEO_MISMATCH = 'GEO_MISMATCH';
  /**
   * Lead was for a service that is not offered by the business.
   */
  public const SURVEY_DISSATISFIED_REASON_JOB_TYPE_MISMATCH = 'JOB_TYPE_MISMATCH';
  /**
   * Lead was by a customer that was not ready to book.
   */
  public const SURVEY_DISSATISFIED_REASON_NOT_READY_TO_BOOK = 'NOT_READY_TO_BOOK';
  /**
   * Lead was a spam. Example: lead was from a bot, silent called, scam, etc.
   */
  public const SURVEY_DISSATISFIED_REASON_SPAM = 'SPAM';
  /**
   * Lead was a duplicate of another lead that is, customer contacted the
   * business more than once.
   */
  public const SURVEY_DISSATISFIED_REASON_DUPLICATE = 'DUPLICATE';
  /**
   * Lead due to solicitation. Example: a person trying to get a job or selling
   * a product, etc.
   */
  public const SURVEY_DISSATISFIED_REASON_SOLICITATION = 'SOLICITATION';
  /**
   * Optional. Provider's free form comments. This field is required when
   * OTHER_DISSATISFIED_REASON is selected as the reason.
   *
   * @var string
   */
  public $otherReasonComment;
  /**
   * Required. Provider's reason for not being satisfied with the lead.
   *
   * @var string
   */
  public $surveyDissatisfiedReason;

  /**
   * Optional. Provider's free form comments. This field is required when
   * OTHER_DISSATISFIED_REASON is selected as the reason.
   *
   * @param string $otherReasonComment
   */
  public function setOtherReasonComment($otherReasonComment)
  {
    $this->otherReasonComment = $otherReasonComment;
  }
  /**
   * @return string
   */
  public function getOtherReasonComment()
  {
    return $this->otherReasonComment;
  }
  /**
   * Required. Provider's reason for not being satisfied with the lead.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OTHER_DISSATISFIED_REASON,
   * GEO_MISMATCH, JOB_TYPE_MISMATCH, NOT_READY_TO_BOOK, SPAM, DUPLICATE,
   * SOLICITATION
   *
   * @param self::SURVEY_DISSATISFIED_REASON_* $surveyDissatisfiedReason
   */
  public function setSurveyDissatisfiedReason($surveyDissatisfiedReason)
  {
    $this->surveyDissatisfiedReason = $surveyDissatisfiedReason;
  }
  /**
   * @return self::SURVEY_DISSATISFIED_REASON_*
   */
  public function getSurveyDissatisfiedReason()
  {
    return $this->surveyDissatisfiedReason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSurveyDissatisfied::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSurveyDissatisfied');
