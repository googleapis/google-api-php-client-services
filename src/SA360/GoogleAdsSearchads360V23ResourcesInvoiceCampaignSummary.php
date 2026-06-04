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

class GoogleAdsSearchads360V23ResourcesInvoiceCampaignSummary extends \Google\Model
{
  /**
   * Not specified.
   */
  public const UNIT_OF_MEASURE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const UNIT_OF_MEASURE_UNKNOWN = 'UNKNOWN';
  /**
   * Clicks as unit of measure.
   */
  public const UNIT_OF_MEASURE_CLICKS = 'CLICKS';
  /**
   * Impressions as unit of measure.
   */
  public const UNIT_OF_MEASURE_IMPRESSIONS = 'IMPRESSIONS';
  /**
   * Acquisitions as unit of measure.
   */
  public const UNIT_OF_MEASURE_ACQUISITIONS = 'ACQUISITIONS';
  /**
   * Phone calls as unit of measure.
   */
  public const UNIT_OF_MEASURE_PHONE_CALLS = 'PHONE_CALLS';
  /**
   * Video plays as unit of measure.
   */
  public const UNIT_OF_MEASURE_VIDEO_PLAYS = 'VIDEO_PLAYS';
  /**
   * Days as unit of measure.
   */
  public const UNIT_OF_MEASURE_DAYS = 'DAYS';
  /**
   * Audio plays as unit of measure.
   */
  public const UNIT_OF_MEASURE_AUDIO_PLAYS = 'AUDIO_PLAYS';
  /**
   * Engagements as unit of measure.
   */
  public const UNIT_OF_MEASURE_ENGAGEMENTS = 'ENGAGEMENTS';
  /**
   * Seconds as unit of measure.
   */
  public const UNIT_OF_MEASURE_SECONDS = 'SECONDS';
  /**
   * Leads as unit of measure.
   */
  public const UNIT_OF_MEASURE_LEADS = 'LEADS';
  /**
   * Guest stays as unit of measure.
   */
  public const UNIT_OF_MEASURE_GUEST_STAYS = 'GUEST_STAYS';
  /**
   * Hours as unit of measure.
   */
  public const UNIT_OF_MEASURE_HOURS = 'HOURS';
  /**
   * Output only. The amount attributable to this campaign for the given unit of
   * measure during the service period, in micros. The currency code for this
   * amount is the same as the Invoice.currency_code.
   *
   * @var string
   */
  public $amountMicros;
  /**
   * Output only. The description of the campaign. This is generally the same as
   * the campaign name, but may differ.
   *
   * @var string
   */
  public $campaignDescription;
  /**
   * Output only. The quantity served for the given unit of measure.
   *
   * @var string
   */
  public $quantity;
  /**
   * Output only. The unit of measure for the quantity served.
   *
   * @var string
   */
  public $unitOfMeasure;

  /**
   * Output only. The amount attributable to this campaign for the given unit of
   * measure during the service period, in micros. The currency code for this
   * amount is the same as the Invoice.currency_code.
   *
   * @param string $amountMicros
   */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /**
   * @return string
   */
  public function getAmountMicros()
  {
    return $this->amountMicros;
  }
  /**
   * Output only. The description of the campaign. This is generally the same as
   * the campaign name, but may differ.
   *
   * @param string $campaignDescription
   */
  public function setCampaignDescription($campaignDescription)
  {
    $this->campaignDescription = $campaignDescription;
  }
  /**
   * @return string
   */
  public function getCampaignDescription()
  {
    return $this->campaignDescription;
  }
  /**
   * Output only. The quantity served for the given unit of measure.
   *
   * @param string $quantity
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /**
   * @return string
   */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /**
   * Output only. The unit of measure for the quantity served.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CLICKS, IMPRESSIONS, ACQUISITIONS,
   * PHONE_CALLS, VIDEO_PLAYS, DAYS, AUDIO_PLAYS, ENGAGEMENTS, SECONDS, LEADS,
   * GUEST_STAYS, HOURS
   *
   * @param self::UNIT_OF_MEASURE_* $unitOfMeasure
   */
  public function setUnitOfMeasure($unitOfMeasure)
  {
    $this->unitOfMeasure = $unitOfMeasure;
  }
  /**
   * @return self::UNIT_OF_MEASURE_*
   */
  public function getUnitOfMeasure()
  {
    return $this->unitOfMeasure;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesInvoiceCampaignSummary::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesInvoiceCampaignSummary');
