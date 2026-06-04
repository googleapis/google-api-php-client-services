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

class GoogleAdsSearchads360V23ServicesSmartCampaignEligibleDetails extends \Google\Model
{
  /**
   * The timestamp of when the campaign will end, if applicable. The timestamp
   * is in the customer’s timezone and in “yyyy-MM-dd HH:mm:ss” format.
   *
   * @var string
   */
  public $endDateTime;
  /**
   * The timestamp of the last impression observed in the last 48 hours for this
   * campaign. The timestamp is in the customer’s timezone and in “yyyy-MM-dd
   * HH:mm:ss” format.
   *
   * @var string
   */
  public $lastImpressionDateTime;

  /**
   * The timestamp of when the campaign will end, if applicable. The timestamp
   * is in the customer’s timezone and in “yyyy-MM-dd HH:mm:ss” format.
   *
   * @param string $endDateTime
   */
  public function setEndDateTime($endDateTime)
  {
    $this->endDateTime = $endDateTime;
  }
  /**
   * @return string
   */
  public function getEndDateTime()
  {
    return $this->endDateTime;
  }
  /**
   * The timestamp of the last impression observed in the last 48 hours for this
   * campaign. The timestamp is in the customer’s timezone and in “yyyy-MM-dd
   * HH:mm:ss” format.
   *
   * @param string $lastImpressionDateTime
   */
  public function setLastImpressionDateTime($lastImpressionDateTime)
  {
    $this->lastImpressionDateTime = $lastImpressionDateTime;
  }
  /**
   * @return string
   */
  public function getLastImpressionDateTime()
  {
    return $this->lastImpressionDateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSmartCampaignEligibleDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSmartCampaignEligibleDetails');
