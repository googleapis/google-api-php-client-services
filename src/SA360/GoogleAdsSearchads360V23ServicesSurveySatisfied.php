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

class GoogleAdsSearchads360V23ServicesSurveySatisfied extends \Google\Model
{
  /**
   * Not specified.
   */
  public const SURVEY_SATISFIED_REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SURVEY_SATISFIED_REASON_UNKNOWN = 'UNKNOWN';
  /**
   * Other reasons.
   */
  public const SURVEY_SATISFIED_REASON_OTHER_SATISFIED_REASON = 'OTHER_SATISFIED_REASON';
  /**
   * Lead converted into a booked customer or client.
   */
  public const SURVEY_SATISFIED_REASON_BOOKED_CUSTOMER = 'BOOKED_CUSTOMER';
  /**
   * Lead could convert into a booked customer or client soon.
   */
  public const SURVEY_SATISFIED_REASON_LIKELY_BOOKED_CUSTOMER = 'LIKELY_BOOKED_CUSTOMER';
  /**
   * Lead was related to the services the business offers.
   */
  public const SURVEY_SATISFIED_REASON_SERVICE_RELATED = 'SERVICE_RELATED';
  /**
   * Lead was for a service that generates high value for the business.
   */
  public const SURVEY_SATISFIED_REASON_HIGH_VALUE_SERVICE = 'HIGH_VALUE_SERVICE';
  /**
   * Optional. Provider's free form comments. This field is required when
   * OTHER_SATISFIED_REASON is selected as the reason.
   *
   * @var string
   */
  public $otherReasonComment;
  /**
   * Required. Provider's reason for being satisfied with the lead.
   *
   * @var string
   */
  public $surveySatisfiedReason;

  /**
   * Optional. Provider's free form comments. This field is required when
   * OTHER_SATISFIED_REASON is selected as the reason.
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
   * Required. Provider's reason for being satisfied with the lead.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OTHER_SATISFIED_REASON,
   * BOOKED_CUSTOMER, LIKELY_BOOKED_CUSTOMER, SERVICE_RELATED,
   * HIGH_VALUE_SERVICE
   *
   * @param self::SURVEY_SATISFIED_REASON_* $surveySatisfiedReason
   */
  public function setSurveySatisfiedReason($surveySatisfiedReason)
  {
    $this->surveySatisfiedReason = $surveySatisfiedReason;
  }
  /**
   * @return self::SURVEY_SATISFIED_REASON_*
   */
  public function getSurveySatisfiedReason()
  {
    return $this->surveySatisfiedReason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSurveySatisfied::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSurveySatisfied');
