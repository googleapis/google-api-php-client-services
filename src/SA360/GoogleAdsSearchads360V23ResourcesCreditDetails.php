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

class GoogleAdsSearchads360V23ResourcesCreditDetails extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CREDIT_STATE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CREDIT_STATE_UNKNOWN = 'UNKNOWN';
  /**
   * A credit has been filed and is being processed by Ads backend, but has not
   * been applied to the account yet.
   */
  public const CREDIT_STATE_PENDING = 'PENDING';
  /**
   * The credit has been issued to the Ads account.
   */
  public const CREDIT_STATE_CREDITED = 'CREDITED';
  /**
   * Output only. Credit state of the lead.
   *
   * @var string
   */
  public $creditState;
  /**
   * Output only. The date time when the credit state of the lead was last
   * updated. The format is "YYYY-MM-DD HH:MM:SS" in the Google Ads account's
   * timezone. Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $creditStateLastUpdateDateTime;

  /**
   * Output only. Credit state of the lead.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, CREDITED
   *
   * @param self::CREDIT_STATE_* $creditState
   */
  public function setCreditState($creditState)
  {
    $this->creditState = $creditState;
  }
  /**
   * @return self::CREDIT_STATE_*
   */
  public function getCreditState()
  {
    return $this->creditState;
  }
  /**
   * Output only. The date time when the credit state of the lead was last
   * updated. The format is "YYYY-MM-DD HH:MM:SS" in the Google Ads account's
   * timezone. Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @param string $creditStateLastUpdateDateTime
   */
  public function setCreditStateLastUpdateDateTime($creditStateLastUpdateDateTime)
  {
    $this->creditStateLastUpdateDateTime = $creditStateLastUpdateDateTime;
  }
  /**
   * @return string
   */
  public function getCreditStateLastUpdateDateTime()
  {
    return $this->creditStateLastUpdateDateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCreditDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCreditDetails');
