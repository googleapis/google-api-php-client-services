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

class GoogleAdsSearchads360V23ServicesGetSmartCampaignStatusResponse extends \Google\Model
{
  /**
   * The status has not been specified.
   */
  public const SMART_CAMPAIGN_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const SMART_CAMPAIGN_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The campaign was paused.
   */
  public const SMART_CAMPAIGN_STATUS_PAUSED = 'PAUSED';
  /**
   * The campaign is not eligible to serve and has issues that may require
   * intervention.
   */
  public const SMART_CAMPAIGN_STATUS_NOT_ELIGIBLE = 'NOT_ELIGIBLE';
  /**
   * The campaign is pending the approval of at least one ad.
   */
  public const SMART_CAMPAIGN_STATUS_PENDING = 'PENDING';
  /**
   * The campaign is eligible to serve.
   */
  public const SMART_CAMPAIGN_STATUS_ELIGIBLE = 'ELIGIBLE';
  /**
   * The campaign has been removed.
   */
  public const SMART_CAMPAIGN_STATUS_REMOVED = 'REMOVED';
  /**
   * The campaign has ended.
   */
  public const SMART_CAMPAIGN_STATUS_ENDED = 'ENDED';
  protected $eligibleDetailsType = GoogleAdsSearchads360V23ServicesSmartCampaignEligibleDetails::class;
  protected $eligibleDetailsDataType = '';
  protected $endedDetailsType = GoogleAdsSearchads360V23ServicesSmartCampaignEndedDetails::class;
  protected $endedDetailsDataType = '';
  protected $notEligibleDetailsType = GoogleAdsSearchads360V23ServicesSmartCampaignNotEligibleDetails::class;
  protected $notEligibleDetailsDataType = '';
  protected $pausedDetailsType = GoogleAdsSearchads360V23ServicesSmartCampaignPausedDetails::class;
  protected $pausedDetailsDataType = '';
  protected $removedDetailsType = GoogleAdsSearchads360V23ServicesSmartCampaignRemovedDetails::class;
  protected $removedDetailsDataType = '';
  /**
   * The status of this Smart campaign.
   *
   * @var string
   */
  public $smartCampaignStatus;

  /**
   * Details related to Smart campaigns that are eligible to serve.
   *
   * @param GoogleAdsSearchads360V23ServicesSmartCampaignEligibleDetails $eligibleDetails
   */
  public function setEligibleDetails(GoogleAdsSearchads360V23ServicesSmartCampaignEligibleDetails $eligibleDetails)
  {
    $this->eligibleDetails = $eligibleDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSmartCampaignEligibleDetails
   */
  public function getEligibleDetails()
  {
    return $this->eligibleDetails;
  }
  /**
   * Details related to Smart campaigns that have ended.
   *
   * @param GoogleAdsSearchads360V23ServicesSmartCampaignEndedDetails $endedDetails
   */
  public function setEndedDetails(GoogleAdsSearchads360V23ServicesSmartCampaignEndedDetails $endedDetails)
  {
    $this->endedDetails = $endedDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSmartCampaignEndedDetails
   */
  public function getEndedDetails()
  {
    return $this->endedDetails;
  }
  /**
   * Details related to Smart campaigns that are ineligible to serve.
   *
   * @param GoogleAdsSearchads360V23ServicesSmartCampaignNotEligibleDetails $notEligibleDetails
   */
  public function setNotEligibleDetails(GoogleAdsSearchads360V23ServicesSmartCampaignNotEligibleDetails $notEligibleDetails)
  {
    $this->notEligibleDetails = $notEligibleDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSmartCampaignNotEligibleDetails
   */
  public function getNotEligibleDetails()
  {
    return $this->notEligibleDetails;
  }
  /**
   * Details related to paused Smart campaigns.
   *
   * @param GoogleAdsSearchads360V23ServicesSmartCampaignPausedDetails $pausedDetails
   */
  public function setPausedDetails(GoogleAdsSearchads360V23ServicesSmartCampaignPausedDetails $pausedDetails)
  {
    $this->pausedDetails = $pausedDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSmartCampaignPausedDetails
   */
  public function getPausedDetails()
  {
    return $this->pausedDetails;
  }
  /**
   * Details related to removed Smart campaigns.
   *
   * @param GoogleAdsSearchads360V23ServicesSmartCampaignRemovedDetails $removedDetails
   */
  public function setRemovedDetails(GoogleAdsSearchads360V23ServicesSmartCampaignRemovedDetails $removedDetails)
  {
    $this->removedDetails = $removedDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSmartCampaignRemovedDetails
   */
  public function getRemovedDetails()
  {
    return $this->removedDetails;
  }
  /**
   * The status of this Smart campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PAUSED, NOT_ELIGIBLE, PENDING,
   * ELIGIBLE, REMOVED, ENDED
   *
   * @param self::SMART_CAMPAIGN_STATUS_* $smartCampaignStatus
   */
  public function setSmartCampaignStatus($smartCampaignStatus)
  {
    $this->smartCampaignStatus = $smartCampaignStatus;
  }
  /**
   * @return self::SMART_CAMPAIGN_STATUS_*
   */
  public function getSmartCampaignStatus()
  {
    return $this->smartCampaignStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGetSmartCampaignStatusResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGetSmartCampaignStatusResponse');
