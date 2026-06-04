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

class GoogleAdsSearchads360V23ResourcesSmartCampaignSetting extends \Google\Model
{
  protected $adOptimizedBusinessProfileSettingType = GoogleAdsSearchads360V23ResourcesSmartCampaignSettingAdOptimizedBusinessProfileSetting::class;
  protected $adOptimizedBusinessProfileSettingDataType = '';
  /**
   * The language code to advertise in from the set of [supported language
   * codes] (https://developers.google.com/google-ads/api/reference/data/codes-
   * formats#languages).
   *
   * @var string
   */
  public $advertisingLanguageCode;
  /**
   * The name of the business.
   *
   * @var string
   */
  public $businessName;
  /**
   * The resource name of a Business Profile location. Business Profile location
   * resource names can be fetched through the Business Profile API and adhere
   * to the following format: `locations/{locationId}`. See the [Business
   * Profile API] (https://developers.google.com/my-
   * business/reference/businessinformation/rest/v1/accounts.locations) for
   * additional details.
   *
   * @var string
   */
  public $businessProfileLocation;
  /**
   * Output only. The campaign to which these settings apply.
   *
   * @var string
   */
  public $campaign;
  /**
   * The user-provided landing page URL for this Campaign.
   *
   * @var string
   */
  public $finalUrl;
  protected $phoneNumberType = GoogleAdsSearchads360V23ResourcesSmartCampaignSettingPhoneNumber::class;
  protected $phoneNumberDataType = '';
  /**
   * Immutable. The resource name of the Smart campaign setting. Smart campaign
   * setting resource names have the form:
   * `customers/{customer_id}/smartCampaignSettings/{campaign_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Settings for configuring a business profile optimized for ads as this
   * campaign's landing page. This campaign must be linked to a business profile
   * to use this option. For more information on this feature, consult
   * https://support.google.com/google-ads/answer/9827068.
   *
   * @param GoogleAdsSearchads360V23ResourcesSmartCampaignSettingAdOptimizedBusinessProfileSetting $adOptimizedBusinessProfileSetting
   */
  public function setAdOptimizedBusinessProfileSetting(GoogleAdsSearchads360V23ResourcesSmartCampaignSettingAdOptimizedBusinessProfileSetting $adOptimizedBusinessProfileSetting)
  {
    $this->adOptimizedBusinessProfileSetting = $adOptimizedBusinessProfileSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesSmartCampaignSettingAdOptimizedBusinessProfileSetting
   */
  public function getAdOptimizedBusinessProfileSetting()
  {
    return $this->adOptimizedBusinessProfileSetting;
  }
  /**
   * The language code to advertise in from the set of [supported language
   * codes] (https://developers.google.com/google-ads/api/reference/data/codes-
   * formats#languages).
   *
   * @param string $advertisingLanguageCode
   */
  public function setAdvertisingLanguageCode($advertisingLanguageCode)
  {
    $this->advertisingLanguageCode = $advertisingLanguageCode;
  }
  /**
   * @return string
   */
  public function getAdvertisingLanguageCode()
  {
    return $this->advertisingLanguageCode;
  }
  /**
   * The name of the business.
   *
   * @param string $businessName
   */
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  /**
   * @return string
   */
  public function getBusinessName()
  {
    return $this->businessName;
  }
  /**
   * The resource name of a Business Profile location. Business Profile location
   * resource names can be fetched through the Business Profile API and adhere
   * to the following format: `locations/{locationId}`. See the [Business
   * Profile API] (https://developers.google.com/my-
   * business/reference/businessinformation/rest/v1/accounts.locations) for
   * additional details.
   *
   * @param string $businessProfileLocation
   */
  public function setBusinessProfileLocation($businessProfileLocation)
  {
    $this->businessProfileLocation = $businessProfileLocation;
  }
  /**
   * @return string
   */
  public function getBusinessProfileLocation()
  {
    return $this->businessProfileLocation;
  }
  /**
   * Output only. The campaign to which these settings apply.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * The user-provided landing page URL for this Campaign.
   *
   * @param string $finalUrl
   */
  public function setFinalUrl($finalUrl)
  {
    $this->finalUrl = $finalUrl;
  }
  /**
   * @return string
   */
  public function getFinalUrl()
  {
    return $this->finalUrl;
  }
  /**
   * Phone number and country code.
   *
   * @param GoogleAdsSearchads360V23ResourcesSmartCampaignSettingPhoneNumber $phoneNumber
   */
  public function setPhoneNumber(GoogleAdsSearchads360V23ResourcesSmartCampaignSettingPhoneNumber $phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesSmartCampaignSettingPhoneNumber
   */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /**
   * Immutable. The resource name of the Smart campaign setting. Smart campaign
   * setting resource names have the form:
   * `customers/{customer_id}/smartCampaignSettings/{campaign_id}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesSmartCampaignSetting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesSmartCampaignSetting');
