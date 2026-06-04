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

class GoogleAdsSearchads360V23CommonCampaignThirdPartyReachIntegrationPartner extends \Google\Model
{
  /**
   * Not specified.
   */
  public const REACH_INTEGRATION_PARTNER_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const REACH_INTEGRATION_PARTNER_UNKNOWN = 'UNKNOWN';
  /**
   * Nielsen.
   */
  public const REACH_INTEGRATION_PARTNER_NIELSEN = 'NIELSEN';
  /**
   * Comscore.
   */
  public const REACH_INTEGRATION_PARTNER_COMSCORE = 'COMSCORE';
  /**
   * Kantar.
   */
  public const REACH_INTEGRATION_PARTNER_KANTAR_MILLWARD_BROWN = 'KANTAR_MILLWARD_BROWN';
  /**
   * Video Research.
   */
  public const REACH_INTEGRATION_PARTNER_VIDEO_RESEARCH = 'VIDEO_RESEARCH';
  /**
   * Gemius.
   */
  public const REACH_INTEGRATION_PARTNER_GEMIUS = 'GEMIUS';
  /**
   * MediaScope.
   */
  public const REACH_INTEGRATION_PARTNER_MEDIA_SCOPE = 'MEDIA_SCOPE';
  /**
   * AudienceProject
   */
  public const REACH_INTEGRATION_PARTNER_AUDIENCE_PROJECT = 'AUDIENCE_PROJECT';
  /**
   * VideoAmp
   */
  public const REACH_INTEGRATION_PARTNER_VIDEO_AMP = 'VIDEO_AMP';
  /**
   * iSpot.tv
   */
  public const REACH_INTEGRATION_PARTNER_ISPOT_TV = 'ISPOT_TV';
  /**
   * Allowed third party integration partners for reach verification.
   *
   * @var string
   */
  public $reachIntegrationPartner;
  protected $reachIntegrationPartnerDataType = GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData::class;
  protected $reachIntegrationPartnerDataDataType = '';
  /**
   * If true, then cost data will be shared with this vendor.
   *
   * @var bool
   */
  public $shareCost;

  /**
   * Allowed third party integration partners for reach verification.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NIELSEN, COMSCORE,
   * KANTAR_MILLWARD_BROWN, VIDEO_RESEARCH, GEMIUS, MEDIA_SCOPE,
   * AUDIENCE_PROJECT, VIDEO_AMP, ISPOT_TV
   *
   * @param self::REACH_INTEGRATION_PARTNER_* $reachIntegrationPartner
   */
  public function setReachIntegrationPartner($reachIntegrationPartner)
  {
    $this->reachIntegrationPartner = $reachIntegrationPartner;
  }
  /**
   * @return self::REACH_INTEGRATION_PARTNER_*
   */
  public function getReachIntegrationPartner()
  {
    return $this->reachIntegrationPartner;
  }
  /**
   * Third party partner data for YouTube Reach verification. This is optional
   * metadata for partners to join or attach data to Ads campaigns.
   *
   * @param GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData $reachIntegrationPartnerData
   */
  public function setReachIntegrationPartnerData(GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData $reachIntegrationPartnerData)
  {
    $this->reachIntegrationPartnerData = $reachIntegrationPartnerData;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData
   */
  public function getReachIntegrationPartnerData()
  {
    return $this->reachIntegrationPartnerData;
  }
  /**
   * If true, then cost data will be shared with this vendor.
   *
   * @param bool $shareCost
   */
  public function setShareCost($shareCost)
  {
    $this->shareCost = $shareCost;
  }
  /**
   * @return bool
   */
  public function getShareCost()
  {
    return $this->shareCost;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCampaignThirdPartyReachIntegrationPartner::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCampaignThirdPartyReachIntegrationPartner');
