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

class GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfo extends \Google\Collection
{
  protected $collection_key = 'keywordThemes';
  protected $adSchedulesType = GoogleAdsSearchads360V23CommonAdScheduleInfo::class;
  protected $adSchedulesDataType = 'array';
  protected $businessContextType = GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfoBusinessContext::class;
  protected $businessContextDataType = '';
  /**
   * Optional. The resource name of a Business Profile location. Business
   * Profile location resource names can be fetched through the Business Profile
   * API and adhere to the following format: `locations/{locationId}`. See the
   * [Business Profile API] (https://developers.google.com/my-
   * business/reference/businessinformation/rest/v1/accounts.locations) for
   * additional details.
   *
   * @var string
   */
  public $businessProfileLocation;
  /**
   * Optional. Landing page URL of the campaign.
   *
   * @var string
   */
  public $finalUrl;
  protected $keywordThemesType = GoogleAdsSearchads360V23CommonKeywordThemeInfo::class;
  protected $keywordThemesDataType = 'array';
  /**
   * Optional. The two letter advertising language for the Smart campaign to be
   * constructed, default to 'en' if not set.
   *
   * @var string
   */
  public $languageCode;
  protected $locationListType = GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfoLocationList::class;
  protected $locationListDataType = '';
  protected $proximityType = GoogleAdsSearchads360V23CommonProximityInfo::class;
  protected $proximityDataType = '';

  /**
   * Optional. The business ad schedule.
   *
   * @param GoogleAdsSearchads360V23CommonAdScheduleInfo[] $adSchedules
   */
  public function setAdSchedules($adSchedules)
  {
    $this->adSchedules = $adSchedules;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdScheduleInfo[]
   */
  public function getAdSchedules()
  {
    return $this->adSchedules;
  }
  /**
   * Optional. Context describing the business to advertise.
   *
   * @param GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfoBusinessContext $businessContext
   */
  public function setBusinessContext(GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfoBusinessContext $businessContext)
  {
    $this->businessContext = $businessContext;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfoBusinessContext
   */
  public function getBusinessContext()
  {
    return $this->businessContext;
  }
  /**
   * Optional. The resource name of a Business Profile location. Business
   * Profile location resource names can be fetched through the Business Profile
   * API and adhere to the following format: `locations/{locationId}`. See the
   * [Business Profile API] (https://developers.google.com/my-
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
   * Optional. Landing page URL of the campaign.
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
   * Optional. Smart campaign keyword themes. This field may greatly improve
   * suggestion accuracy and we recommend always setting it if possible.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordThemeInfo[] $keywordThemes
   */
  public function setKeywordThemes($keywordThemes)
  {
    $this->keywordThemes = $keywordThemes;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordThemeInfo[]
   */
  public function getKeywordThemes()
  {
    return $this->keywordThemes;
  }
  /**
   * Optional. The two letter advertising language for the Smart campaign to be
   * constructed, default to 'en' if not set.
   *
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * Optional. The targeting geo location by locations.
   *
   * @param GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfoLocationList $locationList
   */
  public function setLocationList(GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfoLocationList $locationList)
  {
    $this->locationList = $locationList;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfoLocationList
   */
  public function getLocationList()
  {
    return $this->locationList;
  }
  /**
   * Optional. The targeting geo location by proximity.
   *
   * @param GoogleAdsSearchads360V23CommonProximityInfo $proximity
   */
  public function setProximity(GoogleAdsSearchads360V23CommonProximityInfo $proximity)
  {
    $this->proximity = $proximity;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProximityInfo
   */
  public function getProximity()
  {
    return $this->proximity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfo');
