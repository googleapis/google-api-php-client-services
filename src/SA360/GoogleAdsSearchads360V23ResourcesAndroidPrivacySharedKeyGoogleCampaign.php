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

class GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleCampaign extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ANDROID_PRIVACY_INTERACTION_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const ANDROID_PRIVACY_INTERACTION_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The physical click interaction type.
   */
  public const ANDROID_PRIVACY_INTERACTION_TYPE_CLICK = 'CLICK';
  /**
   * The 10 seconds engaged view interaction type.
   */
  public const ANDROID_PRIVACY_INTERACTION_TYPE_ENGAGED_VIEW = 'ENGAGED_VIEW';
  /**
   * The view (ad impression) interaction type.
   */
  public const ANDROID_PRIVACY_INTERACTION_TYPE_VIEW = 'VIEW';
  /**
   * Output only. The interaction date used in the shared key encoding in the
   * format of "YYYY-MM-DD" in UTC timezone.
   *
   * @var string
   */
  public $androidPrivacyInteractionDate;
  /**
   * Output only. The interaction type enum used in the share key encoding.
   *
   * @var string
   */
  public $androidPrivacyInteractionType;
  /**
   * Output only. The campaign ID used in the share key encoding.
   *
   * @var string
   */
  public $campaignId;
  /**
   * Output only. The resource name of the Android privacy shared key. Android
   * privacy shared key resource names have the form: `customers/{customer_id}/a
   * ndroidPrivacySharedKeyGoogleCampaigns/{campaign_id}~{android_privacy_intera
   * ction_type}~{android_privacy_interaction_date(yyyy-mm-dd)}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. 128 bit hex string of the encoded shared campaign key,
   * including a '0x' prefix. This key can be used to do a bitwise OR operator
   * with the aggregate conversion key to create a full aggregation key to
   * retrieve the Aggregate API Report in Android Privacy Sandbox.
   *
   * @var string
   */
  public $sharedCampaignKey;

  /**
   * Output only. The interaction date used in the shared key encoding in the
   * format of "YYYY-MM-DD" in UTC timezone.
   *
   * @param string $androidPrivacyInteractionDate
   */
  public function setAndroidPrivacyInteractionDate($androidPrivacyInteractionDate)
  {
    $this->androidPrivacyInteractionDate = $androidPrivacyInteractionDate;
  }
  /**
   * @return string
   */
  public function getAndroidPrivacyInteractionDate()
  {
    return $this->androidPrivacyInteractionDate;
  }
  /**
   * Output only. The interaction type enum used in the share key encoding.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CLICK, ENGAGED_VIEW, VIEW
   *
   * @param self::ANDROID_PRIVACY_INTERACTION_TYPE_* $androidPrivacyInteractionType
   */
  public function setAndroidPrivacyInteractionType($androidPrivacyInteractionType)
  {
    $this->androidPrivacyInteractionType = $androidPrivacyInteractionType;
  }
  /**
   * @return self::ANDROID_PRIVACY_INTERACTION_TYPE_*
   */
  public function getAndroidPrivacyInteractionType()
  {
    return $this->androidPrivacyInteractionType;
  }
  /**
   * Output only. The campaign ID used in the share key encoding.
   *
   * @param string $campaignId
   */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /**
   * @return string
   */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /**
   * Output only. The resource name of the Android privacy shared key. Android
   * privacy shared key resource names have the form: `customers/{customer_id}/a
   * ndroidPrivacySharedKeyGoogleCampaigns/{campaign_id}~{android_privacy_intera
   * ction_type}~{android_privacy_interaction_date(yyyy-mm-dd)}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. 128 bit hex string of the encoded shared campaign key,
   * including a '0x' prefix. This key can be used to do a bitwise OR operator
   * with the aggregate conversion key to create a full aggregation key to
   * retrieve the Aggregate API Report in Android Privacy Sandbox.
   *
   * @param string $sharedCampaignKey
   */
  public function setSharedCampaignKey($sharedCampaignKey)
  {
    $this->sharedCampaignKey = $sharedCampaignKey;
  }
  /**
   * @return string
   */
  public function getSharedCampaignKey()
  {
    return $this->sharedCampaignKey;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleCampaign::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleCampaign');
