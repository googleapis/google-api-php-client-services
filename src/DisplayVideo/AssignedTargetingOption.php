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

namespace Google\Service\DisplayVideo;

class AssignedTargetingOption extends \Google\Model
{
  /**
   * @var AgeRangeAssignedTargetingOptionDetails
   */
  public $ageRangeDetails;
  protected $ageRangeDetailsType = AgeRangeAssignedTargetingOptionDetails::class;
  protected $ageRangeDetailsDataType = '';
  /**
   * @var AppCategoryAssignedTargetingOptionDetails
   */
  public $appCategoryDetails;
  protected $appCategoryDetailsType = AppCategoryAssignedTargetingOptionDetails::class;
  protected $appCategoryDetailsDataType = '';
  /**
   * @var AppAssignedTargetingOptionDetails
   */
  public $appDetails;
  protected $appDetailsType = AppAssignedTargetingOptionDetails::class;
  protected $appDetailsDataType = '';
  /**
   * @var string
   */
  public $assignedTargetingOptionId;
  /**
   * @var string
   */
  public $assignedTargetingOptionIdAlias;
  /**
   * @var AudienceGroupAssignedTargetingOptionDetails
   */
  public $audienceGroupDetails;
  protected $audienceGroupDetailsType = AudienceGroupAssignedTargetingOptionDetails::class;
  protected $audienceGroupDetailsDataType = '';
  /**
   * @var AudioContentTypeAssignedTargetingOptionDetails
   */
  public $audioContentTypeDetails;
  protected $audioContentTypeDetailsType = AudioContentTypeAssignedTargetingOptionDetails::class;
  protected $audioContentTypeDetailsDataType = '';
  /**
   * @var AuthorizedSellerStatusAssignedTargetingOptionDetails
   */
  public $authorizedSellerStatusDetails;
  protected $authorizedSellerStatusDetailsType = AuthorizedSellerStatusAssignedTargetingOptionDetails::class;
  protected $authorizedSellerStatusDetailsDataType = '';
  /**
   * @var BrowserAssignedTargetingOptionDetails
   */
  public $browserDetails;
  protected $browserDetailsType = BrowserAssignedTargetingOptionDetails::class;
  protected $browserDetailsDataType = '';
  /**
   * @var BusinessChainAssignedTargetingOptionDetails
   */
  public $businessChainDetails;
  protected $businessChainDetailsType = BusinessChainAssignedTargetingOptionDetails::class;
  protected $businessChainDetailsDataType = '';
  /**
   * @var CarrierAndIspAssignedTargetingOptionDetails
   */
  public $carrierAndIspDetails;
  protected $carrierAndIspDetailsType = CarrierAndIspAssignedTargetingOptionDetails::class;
  protected $carrierAndIspDetailsDataType = '';
  /**
   * @var CategoryAssignedTargetingOptionDetails
   */
  public $categoryDetails;
  protected $categoryDetailsType = CategoryAssignedTargetingOptionDetails::class;
  protected $categoryDetailsDataType = '';
  /**
   * @var ChannelAssignedTargetingOptionDetails
   */
  public $channelDetails;
  protected $channelDetailsType = ChannelAssignedTargetingOptionDetails::class;
  protected $channelDetailsDataType = '';
  /**
   * @var ContentDurationAssignedTargetingOptionDetails
   */
  public $contentDurationDetails;
  protected $contentDurationDetailsType = ContentDurationAssignedTargetingOptionDetails::class;
  protected $contentDurationDetailsDataType = '';
  /**
   * @var ContentGenreAssignedTargetingOptionDetails
   */
  public $contentGenreDetails;
  protected $contentGenreDetailsType = ContentGenreAssignedTargetingOptionDetails::class;
  protected $contentGenreDetailsDataType = '';
  /**
   * @var ContentInstreamPositionAssignedTargetingOptionDetails
   */
  public $contentInstreamPositionDetails;
  protected $contentInstreamPositionDetailsType = ContentInstreamPositionAssignedTargetingOptionDetails::class;
  protected $contentInstreamPositionDetailsDataType = '';
  /**
   * @var ContentOutstreamPositionAssignedTargetingOptionDetails
   */
  public $contentOutstreamPositionDetails;
  protected $contentOutstreamPositionDetailsType = ContentOutstreamPositionAssignedTargetingOptionDetails::class;
  protected $contentOutstreamPositionDetailsDataType = '';
  /**
   * @var ContentStreamTypeAssignedTargetingOptionDetails
   */
  public $contentStreamTypeDetails;
  protected $contentStreamTypeDetailsType = ContentStreamTypeAssignedTargetingOptionDetails::class;
  protected $contentStreamTypeDetailsDataType = '';
  /**
   * @var DayAndTimeAssignedTargetingOptionDetails
   */
  public $dayAndTimeDetails;
  protected $dayAndTimeDetailsType = DayAndTimeAssignedTargetingOptionDetails::class;
  protected $dayAndTimeDetailsDataType = '';
  /**
   * @var DeviceMakeModelAssignedTargetingOptionDetails
   */
  public $deviceMakeModelDetails;
  protected $deviceMakeModelDetailsType = DeviceMakeModelAssignedTargetingOptionDetails::class;
  protected $deviceMakeModelDetailsDataType = '';
  /**
   * @var DeviceTypeAssignedTargetingOptionDetails
   */
  public $deviceTypeDetails;
  protected $deviceTypeDetailsType = DeviceTypeAssignedTargetingOptionDetails::class;
  protected $deviceTypeDetailsDataType = '';
  /**
   * @var DigitalContentLabelAssignedTargetingOptionDetails
   */
  public $digitalContentLabelExclusionDetails;
  protected $digitalContentLabelExclusionDetailsType = DigitalContentLabelAssignedTargetingOptionDetails::class;
  protected $digitalContentLabelExclusionDetailsDataType = '';
  /**
   * @var EnvironmentAssignedTargetingOptionDetails
   */
  public $environmentDetails;
  protected $environmentDetailsType = EnvironmentAssignedTargetingOptionDetails::class;
  protected $environmentDetailsDataType = '';
  /**
   * @var ExchangeAssignedTargetingOptionDetails
   */
  public $exchangeDetails;
  protected $exchangeDetailsType = ExchangeAssignedTargetingOptionDetails::class;
  protected $exchangeDetailsDataType = '';
  /**
   * @var GenderAssignedTargetingOptionDetails
   */
  public $genderDetails;
  protected $genderDetailsType = GenderAssignedTargetingOptionDetails::class;
  protected $genderDetailsDataType = '';
  /**
   * @var GeoRegionAssignedTargetingOptionDetails
   */
  public $geoRegionDetails;
  protected $geoRegionDetailsType = GeoRegionAssignedTargetingOptionDetails::class;
  protected $geoRegionDetailsDataType = '';
  /**
   * @var HouseholdIncomeAssignedTargetingOptionDetails
   */
  public $householdIncomeDetails;
  protected $householdIncomeDetailsType = HouseholdIncomeAssignedTargetingOptionDetails::class;
  protected $householdIncomeDetailsDataType = '';
  /**
   * @var string
   */
  public $inheritance;
  /**
   * @var InventorySourceAssignedTargetingOptionDetails
   */
  public $inventorySourceDetails;
  protected $inventorySourceDetailsType = InventorySourceAssignedTargetingOptionDetails::class;
  protected $inventorySourceDetailsDataType = '';
  /**
   * @var InventorySourceGroupAssignedTargetingOptionDetails
   */
  public $inventorySourceGroupDetails;
  protected $inventorySourceGroupDetailsType = InventorySourceGroupAssignedTargetingOptionDetails::class;
  protected $inventorySourceGroupDetailsDataType = '';
  /**
   * @var KeywordAssignedTargetingOptionDetails
   */
  public $keywordDetails;
  protected $keywordDetailsType = KeywordAssignedTargetingOptionDetails::class;
  protected $keywordDetailsDataType = '';
  /**
   * @var LanguageAssignedTargetingOptionDetails
   */
  public $languageDetails;
  protected $languageDetailsType = LanguageAssignedTargetingOptionDetails::class;
  protected $languageDetailsDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var NativeContentPositionAssignedTargetingOptionDetails
   */
  public $nativeContentPositionDetails;
  protected $nativeContentPositionDetailsType = NativeContentPositionAssignedTargetingOptionDetails::class;
  protected $nativeContentPositionDetailsDataType = '';
  /**
   * @var NegativeKeywordListAssignedTargetingOptionDetails
   */
  public $negativeKeywordListDetails;
  protected $negativeKeywordListDetailsType = NegativeKeywordListAssignedTargetingOptionDetails::class;
  protected $negativeKeywordListDetailsDataType = '';
  /**
   * @var OmidAssignedTargetingOptionDetails
   */
  public $omidDetails;
  protected $omidDetailsType = OmidAssignedTargetingOptionDetails::class;
  protected $omidDetailsDataType = '';
  /**
   * @var OnScreenPositionAssignedTargetingOptionDetails
   */
  public $onScreenPositionDetails;
  protected $onScreenPositionDetailsType = OnScreenPositionAssignedTargetingOptionDetails::class;
  protected $onScreenPositionDetailsDataType = '';
  /**
   * @var OperatingSystemAssignedTargetingOptionDetails
   */
  public $operatingSystemDetails;
  protected $operatingSystemDetailsType = OperatingSystemAssignedTargetingOptionDetails::class;
  protected $operatingSystemDetailsDataType = '';
  /**
   * @var ParentalStatusAssignedTargetingOptionDetails
   */
  public $parentalStatusDetails;
  protected $parentalStatusDetailsType = ParentalStatusAssignedTargetingOptionDetails::class;
  protected $parentalStatusDetailsDataType = '';
  /**
   * @var PoiAssignedTargetingOptionDetails
   */
  public $poiDetails;
  protected $poiDetailsType = PoiAssignedTargetingOptionDetails::class;
  protected $poiDetailsDataType = '';
  /**
   * @var ProximityLocationListAssignedTargetingOptionDetails
   */
  public $proximityLocationListDetails;
  protected $proximityLocationListDetailsType = ProximityLocationListAssignedTargetingOptionDetails::class;
  protected $proximityLocationListDetailsDataType = '';
  /**
   * @var RegionalLocationListAssignedTargetingOptionDetails
   */
  public $regionalLocationListDetails;
  protected $regionalLocationListDetailsType = RegionalLocationListAssignedTargetingOptionDetails::class;
  protected $regionalLocationListDetailsDataType = '';
  /**
   * @var SensitiveCategoryAssignedTargetingOptionDetails
   */
  public $sensitiveCategoryExclusionDetails;
  protected $sensitiveCategoryExclusionDetailsType = SensitiveCategoryAssignedTargetingOptionDetails::class;
  protected $sensitiveCategoryExclusionDetailsDataType = '';
  /**
   * @var SessionPositionAssignedTargetingOptionDetails
   */
  public $sessionPositionDetails;
  protected $sessionPositionDetailsType = SessionPositionAssignedTargetingOptionDetails::class;
  protected $sessionPositionDetailsDataType = '';
  /**
   * @var SubExchangeAssignedTargetingOptionDetails
   */
  public $subExchangeDetails;
  protected $subExchangeDetailsType = SubExchangeAssignedTargetingOptionDetails::class;
  protected $subExchangeDetailsDataType = '';
  /**
   * @var string
   */
  public $targetingType;
  /**
   * @var ThirdPartyVerifierAssignedTargetingOptionDetails
   */
  public $thirdPartyVerifierDetails;
  protected $thirdPartyVerifierDetailsType = ThirdPartyVerifierAssignedTargetingOptionDetails::class;
  protected $thirdPartyVerifierDetailsDataType = '';
  /**
   * @var UrlAssignedTargetingOptionDetails
   */
  public $urlDetails;
  protected $urlDetailsType = UrlAssignedTargetingOptionDetails::class;
  protected $urlDetailsDataType = '';
  /**
   * @var UserRewardedContentAssignedTargetingOptionDetails
   */
  public $userRewardedContentDetails;
  protected $userRewardedContentDetailsType = UserRewardedContentAssignedTargetingOptionDetails::class;
  protected $userRewardedContentDetailsDataType = '';
  /**
   * @var VideoPlayerSizeAssignedTargetingOptionDetails
   */
  public $videoPlayerSizeDetails;
  protected $videoPlayerSizeDetailsType = VideoPlayerSizeAssignedTargetingOptionDetails::class;
  protected $videoPlayerSizeDetailsDataType = '';
  /**
   * @var ViewabilityAssignedTargetingOptionDetails
   */
  public $viewabilityDetails;
  protected $viewabilityDetailsType = ViewabilityAssignedTargetingOptionDetails::class;
  protected $viewabilityDetailsDataType = '';
  /**
   * @var YoutubeChannelAssignedTargetingOptionDetails
   */
  public $youtubeChannelDetails;
  protected $youtubeChannelDetailsType = YoutubeChannelAssignedTargetingOptionDetails::class;
  protected $youtubeChannelDetailsDataType = '';
  /**
   * @var YoutubeVideoAssignedTargetingOptionDetails
   */
  public $youtubeVideoDetails;
  protected $youtubeVideoDetailsType = YoutubeVideoAssignedTargetingOptionDetails::class;
  protected $youtubeVideoDetailsDataType = '';

  /**
   * @param AgeRangeAssignedTargetingOptionDetails
   */
  public function setAgeRangeDetails(AgeRangeAssignedTargetingOptionDetails $ageRangeDetails)
  {
    $this->ageRangeDetails = $ageRangeDetails;
  }
  /**
   * @return AgeRangeAssignedTargetingOptionDetails
   */
  public function getAgeRangeDetails()
  {
    return $this->ageRangeDetails;
  }
  /**
   * @param AppCategoryAssignedTargetingOptionDetails
   */
  public function setAppCategoryDetails(AppCategoryAssignedTargetingOptionDetails $appCategoryDetails)
  {
    $this->appCategoryDetails = $appCategoryDetails;
  }
  /**
   * @return AppCategoryAssignedTargetingOptionDetails
   */
  public function getAppCategoryDetails()
  {
    return $this->appCategoryDetails;
  }
  /**
   * @param AppAssignedTargetingOptionDetails
   */
  public function setAppDetails(AppAssignedTargetingOptionDetails $appDetails)
  {
    $this->appDetails = $appDetails;
  }
  /**
   * @return AppAssignedTargetingOptionDetails
   */
  public function getAppDetails()
  {
    return $this->appDetails;
  }
  /**
   * @param string
   */
  public function setAssignedTargetingOptionId($assignedTargetingOptionId)
  {
    $this->assignedTargetingOptionId = $assignedTargetingOptionId;
  }
  /**
   * @return string
   */
  public function getAssignedTargetingOptionId()
  {
    return $this->assignedTargetingOptionId;
  }
  /**
   * @param string
   */
  public function setAssignedTargetingOptionIdAlias($assignedTargetingOptionIdAlias)
  {
    $this->assignedTargetingOptionIdAlias = $assignedTargetingOptionIdAlias;
  }
  /**
   * @return string
   */
  public function getAssignedTargetingOptionIdAlias()
  {
    return $this->assignedTargetingOptionIdAlias;
  }
  /**
   * @param AudienceGroupAssignedTargetingOptionDetails
   */
  public function setAudienceGroupDetails(AudienceGroupAssignedTargetingOptionDetails $audienceGroupDetails)
  {
    $this->audienceGroupDetails = $audienceGroupDetails;
  }
  /**
   * @return AudienceGroupAssignedTargetingOptionDetails
   */
  public function getAudienceGroupDetails()
  {
    return $this->audienceGroupDetails;
  }
  /**
   * @param AudioContentTypeAssignedTargetingOptionDetails
   */
  public function setAudioContentTypeDetails(AudioContentTypeAssignedTargetingOptionDetails $audioContentTypeDetails)
  {
    $this->audioContentTypeDetails = $audioContentTypeDetails;
  }
  /**
   * @return AudioContentTypeAssignedTargetingOptionDetails
   */
  public function getAudioContentTypeDetails()
  {
    return $this->audioContentTypeDetails;
  }
  /**
   * @param AuthorizedSellerStatusAssignedTargetingOptionDetails
   */
  public function setAuthorizedSellerStatusDetails(AuthorizedSellerStatusAssignedTargetingOptionDetails $authorizedSellerStatusDetails)
  {
    $this->authorizedSellerStatusDetails = $authorizedSellerStatusDetails;
  }
  /**
   * @return AuthorizedSellerStatusAssignedTargetingOptionDetails
   */
  public function getAuthorizedSellerStatusDetails()
  {
    return $this->authorizedSellerStatusDetails;
  }
  /**
   * @param BrowserAssignedTargetingOptionDetails
   */
  public function setBrowserDetails(BrowserAssignedTargetingOptionDetails $browserDetails)
  {
    $this->browserDetails = $browserDetails;
  }
  /**
   * @return BrowserAssignedTargetingOptionDetails
   */
  public function getBrowserDetails()
  {
    return $this->browserDetails;
  }
  /**
   * @param BusinessChainAssignedTargetingOptionDetails
   */
  public function setBusinessChainDetails(BusinessChainAssignedTargetingOptionDetails $businessChainDetails)
  {
    $this->businessChainDetails = $businessChainDetails;
  }
  /**
   * @return BusinessChainAssignedTargetingOptionDetails
   */
  public function getBusinessChainDetails()
  {
    return $this->businessChainDetails;
  }
  /**
   * @param CarrierAndIspAssignedTargetingOptionDetails
   */
  public function setCarrierAndIspDetails(CarrierAndIspAssignedTargetingOptionDetails $carrierAndIspDetails)
  {
    $this->carrierAndIspDetails = $carrierAndIspDetails;
  }
  /**
   * @return CarrierAndIspAssignedTargetingOptionDetails
   */
  public function getCarrierAndIspDetails()
  {
    return $this->carrierAndIspDetails;
  }
  /**
   * @param CategoryAssignedTargetingOptionDetails
   */
  public function setCategoryDetails(CategoryAssignedTargetingOptionDetails $categoryDetails)
  {
    $this->categoryDetails = $categoryDetails;
  }
  /**
   * @return CategoryAssignedTargetingOptionDetails
   */
  public function getCategoryDetails()
  {
    return $this->categoryDetails;
  }
  /**
   * @param ChannelAssignedTargetingOptionDetails
   */
  public function setChannelDetails(ChannelAssignedTargetingOptionDetails $channelDetails)
  {
    $this->channelDetails = $channelDetails;
  }
  /**
   * @return ChannelAssignedTargetingOptionDetails
   */
  public function getChannelDetails()
  {
    return $this->channelDetails;
  }
  /**
   * @param ContentDurationAssignedTargetingOptionDetails
   */
  public function setContentDurationDetails(ContentDurationAssignedTargetingOptionDetails $contentDurationDetails)
  {
    $this->contentDurationDetails = $contentDurationDetails;
  }
  /**
   * @return ContentDurationAssignedTargetingOptionDetails
   */
  public function getContentDurationDetails()
  {
    return $this->contentDurationDetails;
  }
  /**
   * @param ContentGenreAssignedTargetingOptionDetails
   */
  public function setContentGenreDetails(ContentGenreAssignedTargetingOptionDetails $contentGenreDetails)
  {
    $this->contentGenreDetails = $contentGenreDetails;
  }
  /**
   * @return ContentGenreAssignedTargetingOptionDetails
   */
  public function getContentGenreDetails()
  {
    return $this->contentGenreDetails;
  }
  /**
   * @param ContentInstreamPositionAssignedTargetingOptionDetails
   */
  public function setContentInstreamPositionDetails(ContentInstreamPositionAssignedTargetingOptionDetails $contentInstreamPositionDetails)
  {
    $this->contentInstreamPositionDetails = $contentInstreamPositionDetails;
  }
  /**
   * @return ContentInstreamPositionAssignedTargetingOptionDetails
   */
  public function getContentInstreamPositionDetails()
  {
    return $this->contentInstreamPositionDetails;
  }
  /**
   * @param ContentOutstreamPositionAssignedTargetingOptionDetails
   */
  public function setContentOutstreamPositionDetails(ContentOutstreamPositionAssignedTargetingOptionDetails $contentOutstreamPositionDetails)
  {
    $this->contentOutstreamPositionDetails = $contentOutstreamPositionDetails;
  }
  /**
   * @return ContentOutstreamPositionAssignedTargetingOptionDetails
   */
  public function getContentOutstreamPositionDetails()
  {
    return $this->contentOutstreamPositionDetails;
  }
  /**
   * @param ContentStreamTypeAssignedTargetingOptionDetails
   */
  public function setContentStreamTypeDetails(ContentStreamTypeAssignedTargetingOptionDetails $contentStreamTypeDetails)
  {
    $this->contentStreamTypeDetails = $contentStreamTypeDetails;
  }
  /**
   * @return ContentStreamTypeAssignedTargetingOptionDetails
   */
  public function getContentStreamTypeDetails()
  {
    return $this->contentStreamTypeDetails;
  }
  /**
   * @param DayAndTimeAssignedTargetingOptionDetails
   */
  public function setDayAndTimeDetails(DayAndTimeAssignedTargetingOptionDetails $dayAndTimeDetails)
  {
    $this->dayAndTimeDetails = $dayAndTimeDetails;
  }
  /**
   * @return DayAndTimeAssignedTargetingOptionDetails
   */
  public function getDayAndTimeDetails()
  {
    return $this->dayAndTimeDetails;
  }
  /**
   * @param DeviceMakeModelAssignedTargetingOptionDetails
   */
  public function setDeviceMakeModelDetails(DeviceMakeModelAssignedTargetingOptionDetails $deviceMakeModelDetails)
  {
    $this->deviceMakeModelDetails = $deviceMakeModelDetails;
  }
  /**
   * @return DeviceMakeModelAssignedTargetingOptionDetails
   */
  public function getDeviceMakeModelDetails()
  {
    return $this->deviceMakeModelDetails;
  }
  /**
   * @param DeviceTypeAssignedTargetingOptionDetails
   */
  public function setDeviceTypeDetails(DeviceTypeAssignedTargetingOptionDetails $deviceTypeDetails)
  {
    $this->deviceTypeDetails = $deviceTypeDetails;
  }
  /**
   * @return DeviceTypeAssignedTargetingOptionDetails
   */
  public function getDeviceTypeDetails()
  {
    return $this->deviceTypeDetails;
  }
  /**
   * @param DigitalContentLabelAssignedTargetingOptionDetails
   */
  public function setDigitalContentLabelExclusionDetails(DigitalContentLabelAssignedTargetingOptionDetails $digitalContentLabelExclusionDetails)
  {
    $this->digitalContentLabelExclusionDetails = $digitalContentLabelExclusionDetails;
  }
  /**
   * @return DigitalContentLabelAssignedTargetingOptionDetails
   */
  public function getDigitalContentLabelExclusionDetails()
  {
    return $this->digitalContentLabelExclusionDetails;
  }
  /**
   * @param EnvironmentAssignedTargetingOptionDetails
   */
  public function setEnvironmentDetails(EnvironmentAssignedTargetingOptionDetails $environmentDetails)
  {
    $this->environmentDetails = $environmentDetails;
  }
  /**
   * @return EnvironmentAssignedTargetingOptionDetails
   */
  public function getEnvironmentDetails()
  {
    return $this->environmentDetails;
  }
  /**
   * @param ExchangeAssignedTargetingOptionDetails
   */
  public function setExchangeDetails(ExchangeAssignedTargetingOptionDetails $exchangeDetails)
  {
    $this->exchangeDetails = $exchangeDetails;
  }
  /**
   * @return ExchangeAssignedTargetingOptionDetails
   */
  public function getExchangeDetails()
  {
    return $this->exchangeDetails;
  }
  /**
   * @param GenderAssignedTargetingOptionDetails
   */
  public function setGenderDetails(GenderAssignedTargetingOptionDetails $genderDetails)
  {
    $this->genderDetails = $genderDetails;
  }
  /**
   * @return GenderAssignedTargetingOptionDetails
   */
  public function getGenderDetails()
  {
    return $this->genderDetails;
  }
  /**
   * @param GeoRegionAssignedTargetingOptionDetails
   */
  public function setGeoRegionDetails(GeoRegionAssignedTargetingOptionDetails $geoRegionDetails)
  {
    $this->geoRegionDetails = $geoRegionDetails;
  }
  /**
   * @return GeoRegionAssignedTargetingOptionDetails
   */
  public function getGeoRegionDetails()
  {
    return $this->geoRegionDetails;
  }
  /**
   * @param HouseholdIncomeAssignedTargetingOptionDetails
   */
  public function setHouseholdIncomeDetails(HouseholdIncomeAssignedTargetingOptionDetails $householdIncomeDetails)
  {
    $this->householdIncomeDetails = $householdIncomeDetails;
  }
  /**
   * @return HouseholdIncomeAssignedTargetingOptionDetails
   */
  public function getHouseholdIncomeDetails()
  {
    return $this->householdIncomeDetails;
  }
  /**
   * @param string
   */
  public function setInheritance($inheritance)
  {
    $this->inheritance = $inheritance;
  }
  /**
   * @return string
   */
  public function getInheritance()
  {
    return $this->inheritance;
  }
  /**
   * @param InventorySourceAssignedTargetingOptionDetails
   */
  public function setInventorySourceDetails(InventorySourceAssignedTargetingOptionDetails $inventorySourceDetails)
  {
    $this->inventorySourceDetails = $inventorySourceDetails;
  }
  /**
   * @return InventorySourceAssignedTargetingOptionDetails
   */
  public function getInventorySourceDetails()
  {
    return $this->inventorySourceDetails;
  }
  /**
   * @param InventorySourceGroupAssignedTargetingOptionDetails
   */
  public function setInventorySourceGroupDetails(InventorySourceGroupAssignedTargetingOptionDetails $inventorySourceGroupDetails)
  {
    $this->inventorySourceGroupDetails = $inventorySourceGroupDetails;
  }
  /**
   * @return InventorySourceGroupAssignedTargetingOptionDetails
   */
  public function getInventorySourceGroupDetails()
  {
    return $this->inventorySourceGroupDetails;
  }
  /**
   * @param KeywordAssignedTargetingOptionDetails
   */
  public function setKeywordDetails(KeywordAssignedTargetingOptionDetails $keywordDetails)
  {
    $this->keywordDetails = $keywordDetails;
  }
  /**
   * @return KeywordAssignedTargetingOptionDetails
   */
  public function getKeywordDetails()
  {
    return $this->keywordDetails;
  }
  /**
   * @param LanguageAssignedTargetingOptionDetails
   */
  public function setLanguageDetails(LanguageAssignedTargetingOptionDetails $languageDetails)
  {
    $this->languageDetails = $languageDetails;
  }
  /**
   * @return LanguageAssignedTargetingOptionDetails
   */
  public function getLanguageDetails()
  {
    return $this->languageDetails;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param NativeContentPositionAssignedTargetingOptionDetails
   */
  public function setNativeContentPositionDetails(NativeContentPositionAssignedTargetingOptionDetails $nativeContentPositionDetails)
  {
    $this->nativeContentPositionDetails = $nativeContentPositionDetails;
  }
  /**
   * @return NativeContentPositionAssignedTargetingOptionDetails
   */
  public function getNativeContentPositionDetails()
  {
    return $this->nativeContentPositionDetails;
  }
  /**
   * @param NegativeKeywordListAssignedTargetingOptionDetails
   */
  public function setNegativeKeywordListDetails(NegativeKeywordListAssignedTargetingOptionDetails $negativeKeywordListDetails)
  {
    $this->negativeKeywordListDetails = $negativeKeywordListDetails;
  }
  /**
   * @return NegativeKeywordListAssignedTargetingOptionDetails
   */
  public function getNegativeKeywordListDetails()
  {
    return $this->negativeKeywordListDetails;
  }
  /**
   * @param OmidAssignedTargetingOptionDetails
   */
  public function setOmidDetails(OmidAssignedTargetingOptionDetails $omidDetails)
  {
    $this->omidDetails = $omidDetails;
  }
  /**
   * @return OmidAssignedTargetingOptionDetails
   */
  public function getOmidDetails()
  {
    return $this->omidDetails;
  }
  /**
   * @param OnScreenPositionAssignedTargetingOptionDetails
   */
  public function setOnScreenPositionDetails(OnScreenPositionAssignedTargetingOptionDetails $onScreenPositionDetails)
  {
    $this->onScreenPositionDetails = $onScreenPositionDetails;
  }
  /**
   * @return OnScreenPositionAssignedTargetingOptionDetails
   */
  public function getOnScreenPositionDetails()
  {
    return $this->onScreenPositionDetails;
  }
  /**
   * @param OperatingSystemAssignedTargetingOptionDetails
   */
  public function setOperatingSystemDetails(OperatingSystemAssignedTargetingOptionDetails $operatingSystemDetails)
  {
    $this->operatingSystemDetails = $operatingSystemDetails;
  }
  /**
   * @return OperatingSystemAssignedTargetingOptionDetails
   */
  public function getOperatingSystemDetails()
  {
    return $this->operatingSystemDetails;
  }
  /**
   * @param ParentalStatusAssignedTargetingOptionDetails
   */
  public function setParentalStatusDetails(ParentalStatusAssignedTargetingOptionDetails $parentalStatusDetails)
  {
    $this->parentalStatusDetails = $parentalStatusDetails;
  }
  /**
   * @return ParentalStatusAssignedTargetingOptionDetails
   */
  public function getParentalStatusDetails()
  {
    return $this->parentalStatusDetails;
  }
  /**
   * @param PoiAssignedTargetingOptionDetails
   */
  public function setPoiDetails(PoiAssignedTargetingOptionDetails $poiDetails)
  {
    $this->poiDetails = $poiDetails;
  }
  /**
   * @return PoiAssignedTargetingOptionDetails
   */
  public function getPoiDetails()
  {
    return $this->poiDetails;
  }
  /**
   * @param ProximityLocationListAssignedTargetingOptionDetails
   */
  public function setProximityLocationListDetails(ProximityLocationListAssignedTargetingOptionDetails $proximityLocationListDetails)
  {
    $this->proximityLocationListDetails = $proximityLocationListDetails;
  }
  /**
   * @return ProximityLocationListAssignedTargetingOptionDetails
   */
  public function getProximityLocationListDetails()
  {
    return $this->proximityLocationListDetails;
  }
  /**
   * @param RegionalLocationListAssignedTargetingOptionDetails
   */
  public function setRegionalLocationListDetails(RegionalLocationListAssignedTargetingOptionDetails $regionalLocationListDetails)
  {
    $this->regionalLocationListDetails = $regionalLocationListDetails;
  }
  /**
   * @return RegionalLocationListAssignedTargetingOptionDetails
   */
  public function getRegionalLocationListDetails()
  {
    return $this->regionalLocationListDetails;
  }
  /**
   * @param SensitiveCategoryAssignedTargetingOptionDetails
   */
  public function setSensitiveCategoryExclusionDetails(SensitiveCategoryAssignedTargetingOptionDetails $sensitiveCategoryExclusionDetails)
  {
    $this->sensitiveCategoryExclusionDetails = $sensitiveCategoryExclusionDetails;
  }
  /**
   * @return SensitiveCategoryAssignedTargetingOptionDetails
   */
  public function getSensitiveCategoryExclusionDetails()
  {
    return $this->sensitiveCategoryExclusionDetails;
  }
  /**
   * @param SessionPositionAssignedTargetingOptionDetails
   */
  public function setSessionPositionDetails(SessionPositionAssignedTargetingOptionDetails $sessionPositionDetails)
  {
    $this->sessionPositionDetails = $sessionPositionDetails;
  }
  /**
   * @return SessionPositionAssignedTargetingOptionDetails
   */
  public function getSessionPositionDetails()
  {
    return $this->sessionPositionDetails;
  }
  /**
   * @param SubExchangeAssignedTargetingOptionDetails
   */
  public function setSubExchangeDetails(SubExchangeAssignedTargetingOptionDetails $subExchangeDetails)
  {
    $this->subExchangeDetails = $subExchangeDetails;
  }
  /**
   * @return SubExchangeAssignedTargetingOptionDetails
   */
  public function getSubExchangeDetails()
  {
    return $this->subExchangeDetails;
  }
  /**
   * @param string
   */
  public function setTargetingType($targetingType)
  {
    $this->targetingType = $targetingType;
  }
  /**
   * @return string
   */
  public function getTargetingType()
  {
    return $this->targetingType;
  }
  /**
   * @param ThirdPartyVerifierAssignedTargetingOptionDetails
   */
  public function setThirdPartyVerifierDetails(ThirdPartyVerifierAssignedTargetingOptionDetails $thirdPartyVerifierDetails)
  {
    $this->thirdPartyVerifierDetails = $thirdPartyVerifierDetails;
  }
  /**
   * @return ThirdPartyVerifierAssignedTargetingOptionDetails
   */
  public function getThirdPartyVerifierDetails()
  {
    return $this->thirdPartyVerifierDetails;
  }
  /**
   * @param UrlAssignedTargetingOptionDetails
   */
  public function setUrlDetails(UrlAssignedTargetingOptionDetails $urlDetails)
  {
    $this->urlDetails = $urlDetails;
  }
  /**
   * @return UrlAssignedTargetingOptionDetails
   */
  public function getUrlDetails()
  {
    return $this->urlDetails;
  }
  /**
   * @param UserRewardedContentAssignedTargetingOptionDetails
   */
  public function setUserRewardedContentDetails(UserRewardedContentAssignedTargetingOptionDetails $userRewardedContentDetails)
  {
    $this->userRewardedContentDetails = $userRewardedContentDetails;
  }
  /**
   * @return UserRewardedContentAssignedTargetingOptionDetails
   */
  public function getUserRewardedContentDetails()
  {
    return $this->userRewardedContentDetails;
  }
  /**
   * @param VideoPlayerSizeAssignedTargetingOptionDetails
   */
  public function setVideoPlayerSizeDetails(VideoPlayerSizeAssignedTargetingOptionDetails $videoPlayerSizeDetails)
  {
    $this->videoPlayerSizeDetails = $videoPlayerSizeDetails;
  }
  /**
   * @return VideoPlayerSizeAssignedTargetingOptionDetails
   */
  public function getVideoPlayerSizeDetails()
  {
    return $this->videoPlayerSizeDetails;
  }
  /**
   * @param ViewabilityAssignedTargetingOptionDetails
   */
  public function setViewabilityDetails(ViewabilityAssignedTargetingOptionDetails $viewabilityDetails)
  {
    $this->viewabilityDetails = $viewabilityDetails;
  }
  /**
   * @return ViewabilityAssignedTargetingOptionDetails
   */
  public function getViewabilityDetails()
  {
    return $this->viewabilityDetails;
  }
  /**
   * @param YoutubeChannelAssignedTargetingOptionDetails
   */
  public function setYoutubeChannelDetails(YoutubeChannelAssignedTargetingOptionDetails $youtubeChannelDetails)
  {
    $this->youtubeChannelDetails = $youtubeChannelDetails;
  }
  /**
   * @return YoutubeChannelAssignedTargetingOptionDetails
   */
  public function getYoutubeChannelDetails()
  {
    return $this->youtubeChannelDetails;
  }
  /**
   * @param YoutubeVideoAssignedTargetingOptionDetails
   */
  public function setYoutubeVideoDetails(YoutubeVideoAssignedTargetingOptionDetails $youtubeVideoDetails)
  {
    $this->youtubeVideoDetails = $youtubeVideoDetails;
  }
  /**
   * @return YoutubeVideoAssignedTargetingOptionDetails
   */
  public function getYoutubeVideoDetails()
  {
    return $this->youtubeVideoDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssignedTargetingOption::class, 'Google_Service_DisplayVideo_AssignedTargetingOption');
