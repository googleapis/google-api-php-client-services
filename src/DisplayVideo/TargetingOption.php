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

class TargetingOption extends \Google\Model
{
  /**
   * @var AgeRangeTargetingOptionDetails
   */
  public $ageRangeDetails;
  protected $ageRangeDetailsType = AgeRangeTargetingOptionDetails::class;
  protected $ageRangeDetailsDataType = '';
  /**
   * @var AppCategoryTargetingOptionDetails
   */
  public $appCategoryDetails;
  protected $appCategoryDetailsType = AppCategoryTargetingOptionDetails::class;
  protected $appCategoryDetailsDataType = '';
  /**
   * @var AudioContentTypeTargetingOptionDetails
   */
  public $audioContentTypeDetails;
  protected $audioContentTypeDetailsType = AudioContentTypeTargetingOptionDetails::class;
  protected $audioContentTypeDetailsDataType = '';
  /**
   * @var AuthorizedSellerStatusTargetingOptionDetails
   */
  public $authorizedSellerStatusDetails;
  protected $authorizedSellerStatusDetailsType = AuthorizedSellerStatusTargetingOptionDetails::class;
  protected $authorizedSellerStatusDetailsDataType = '';
  /**
   * @var BrowserTargetingOptionDetails
   */
  public $browserDetails;
  protected $browserDetailsType = BrowserTargetingOptionDetails::class;
  protected $browserDetailsDataType = '';
  /**
   * @var BusinessChainTargetingOptionDetails
   */
  public $businessChainDetails;
  protected $businessChainDetailsType = BusinessChainTargetingOptionDetails::class;
  protected $businessChainDetailsDataType = '';
  /**
   * @var CarrierAndIspTargetingOptionDetails
   */
  public $carrierAndIspDetails;
  protected $carrierAndIspDetailsType = CarrierAndIspTargetingOptionDetails::class;
  protected $carrierAndIspDetailsDataType = '';
  /**
   * @var CategoryTargetingOptionDetails
   */
  public $categoryDetails;
  protected $categoryDetailsType = CategoryTargetingOptionDetails::class;
  protected $categoryDetailsDataType = '';
  /**
   * @var ContentDurationTargetingOptionDetails
   */
  public $contentDurationDetails;
  protected $contentDurationDetailsType = ContentDurationTargetingOptionDetails::class;
  protected $contentDurationDetailsDataType = '';
  /**
   * @var ContentGenreTargetingOptionDetails
   */
  public $contentGenreDetails;
  protected $contentGenreDetailsType = ContentGenreTargetingOptionDetails::class;
  protected $contentGenreDetailsDataType = '';
  /**
   * @var ContentInstreamPositionTargetingOptionDetails
   */
  public $contentInstreamPositionDetails;
  protected $contentInstreamPositionDetailsType = ContentInstreamPositionTargetingOptionDetails::class;
  protected $contentInstreamPositionDetailsDataType = '';
  /**
   * @var ContentOutstreamPositionTargetingOptionDetails
   */
  public $contentOutstreamPositionDetails;
  protected $contentOutstreamPositionDetailsType = ContentOutstreamPositionTargetingOptionDetails::class;
  protected $contentOutstreamPositionDetailsDataType = '';
  /**
   * @var ContentStreamTypeTargetingOptionDetails
   */
  public $contentStreamTypeDetails;
  protected $contentStreamTypeDetailsType = ContentStreamTypeTargetingOptionDetails::class;
  protected $contentStreamTypeDetailsDataType = '';
  /**
   * @var DeviceMakeModelTargetingOptionDetails
   */
  public $deviceMakeModelDetails;
  protected $deviceMakeModelDetailsType = DeviceMakeModelTargetingOptionDetails::class;
  protected $deviceMakeModelDetailsDataType = '';
  /**
   * @var DeviceTypeTargetingOptionDetails
   */
  public $deviceTypeDetails;
  protected $deviceTypeDetailsType = DeviceTypeTargetingOptionDetails::class;
  protected $deviceTypeDetailsDataType = '';
  /**
   * @var DigitalContentLabelTargetingOptionDetails
   */
  public $digitalContentLabelDetails;
  protected $digitalContentLabelDetailsType = DigitalContentLabelTargetingOptionDetails::class;
  protected $digitalContentLabelDetailsDataType = '';
  /**
   * @var EnvironmentTargetingOptionDetails
   */
  public $environmentDetails;
  protected $environmentDetailsType = EnvironmentTargetingOptionDetails::class;
  protected $environmentDetailsDataType = '';
  /**
   * @var ExchangeTargetingOptionDetails
   */
  public $exchangeDetails;
  protected $exchangeDetailsType = ExchangeTargetingOptionDetails::class;
  protected $exchangeDetailsDataType = '';
  /**
   * @var GenderTargetingOptionDetails
   */
  public $genderDetails;
  protected $genderDetailsType = GenderTargetingOptionDetails::class;
  protected $genderDetailsDataType = '';
  /**
   * @var GeoRegionTargetingOptionDetails
   */
  public $geoRegionDetails;
  protected $geoRegionDetailsType = GeoRegionTargetingOptionDetails::class;
  protected $geoRegionDetailsDataType = '';
  /**
   * @var HouseholdIncomeTargetingOptionDetails
   */
  public $householdIncomeDetails;
  protected $householdIncomeDetailsType = HouseholdIncomeTargetingOptionDetails::class;
  protected $householdIncomeDetailsDataType = '';
  /**
   * @var LanguageTargetingOptionDetails
   */
  public $languageDetails;
  protected $languageDetailsType = LanguageTargetingOptionDetails::class;
  protected $languageDetailsDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var NativeContentPositionTargetingOptionDetails
   */
  public $nativeContentPositionDetails;
  protected $nativeContentPositionDetailsType = NativeContentPositionTargetingOptionDetails::class;
  protected $nativeContentPositionDetailsDataType = '';
  /**
   * @var OmidTargetingOptionDetails
   */
  public $omidDetails;
  protected $omidDetailsType = OmidTargetingOptionDetails::class;
  protected $omidDetailsDataType = '';
  /**
   * @var OnScreenPositionTargetingOptionDetails
   */
  public $onScreenPositionDetails;
  protected $onScreenPositionDetailsType = OnScreenPositionTargetingOptionDetails::class;
  protected $onScreenPositionDetailsDataType = '';
  /**
   * @var OperatingSystemTargetingOptionDetails
   */
  public $operatingSystemDetails;
  protected $operatingSystemDetailsType = OperatingSystemTargetingOptionDetails::class;
  protected $operatingSystemDetailsDataType = '';
  /**
   * @var ParentalStatusTargetingOptionDetails
   */
  public $parentalStatusDetails;
  protected $parentalStatusDetailsType = ParentalStatusTargetingOptionDetails::class;
  protected $parentalStatusDetailsDataType = '';
  /**
   * @var PoiTargetingOptionDetails
   */
  public $poiDetails;
  protected $poiDetailsType = PoiTargetingOptionDetails::class;
  protected $poiDetailsDataType = '';
  /**
   * @var SensitiveCategoryTargetingOptionDetails
   */
  public $sensitiveCategoryDetails;
  protected $sensitiveCategoryDetailsType = SensitiveCategoryTargetingOptionDetails::class;
  protected $sensitiveCategoryDetailsDataType = '';
  /**
   * @var SubExchangeTargetingOptionDetails
   */
  public $subExchangeDetails;
  protected $subExchangeDetailsType = SubExchangeTargetingOptionDetails::class;
  protected $subExchangeDetailsDataType = '';
  /**
   * @var string
   */
  public $targetingOptionId;
  /**
   * @var string
   */
  public $targetingType;
  /**
   * @var UserRewardedContentTargetingOptionDetails
   */
  public $userRewardedContentDetails;
  protected $userRewardedContentDetailsType = UserRewardedContentTargetingOptionDetails::class;
  protected $userRewardedContentDetailsDataType = '';
  /**
   * @var VideoPlayerSizeTargetingOptionDetails
   */
  public $videoPlayerSizeDetails;
  protected $videoPlayerSizeDetailsType = VideoPlayerSizeTargetingOptionDetails::class;
  protected $videoPlayerSizeDetailsDataType = '';
  /**
   * @var ViewabilityTargetingOptionDetails
   */
  public $viewabilityDetails;
  protected $viewabilityDetailsType = ViewabilityTargetingOptionDetails::class;
  protected $viewabilityDetailsDataType = '';

  /**
   * @param AgeRangeTargetingOptionDetails
   */
  public function setAgeRangeDetails(AgeRangeTargetingOptionDetails $ageRangeDetails)
  {
    $this->ageRangeDetails = $ageRangeDetails;
  }
  /**
   * @return AgeRangeTargetingOptionDetails
   */
  public function getAgeRangeDetails()
  {
    return $this->ageRangeDetails;
  }
  /**
   * @param AppCategoryTargetingOptionDetails
   */
  public function setAppCategoryDetails(AppCategoryTargetingOptionDetails $appCategoryDetails)
  {
    $this->appCategoryDetails = $appCategoryDetails;
  }
  /**
   * @return AppCategoryTargetingOptionDetails
   */
  public function getAppCategoryDetails()
  {
    return $this->appCategoryDetails;
  }
  /**
   * @param AudioContentTypeTargetingOptionDetails
   */
  public function setAudioContentTypeDetails(AudioContentTypeTargetingOptionDetails $audioContentTypeDetails)
  {
    $this->audioContentTypeDetails = $audioContentTypeDetails;
  }
  /**
   * @return AudioContentTypeTargetingOptionDetails
   */
  public function getAudioContentTypeDetails()
  {
    return $this->audioContentTypeDetails;
  }
  /**
   * @param AuthorizedSellerStatusTargetingOptionDetails
   */
  public function setAuthorizedSellerStatusDetails(AuthorizedSellerStatusTargetingOptionDetails $authorizedSellerStatusDetails)
  {
    $this->authorizedSellerStatusDetails = $authorizedSellerStatusDetails;
  }
  /**
   * @return AuthorizedSellerStatusTargetingOptionDetails
   */
  public function getAuthorizedSellerStatusDetails()
  {
    return $this->authorizedSellerStatusDetails;
  }
  /**
   * @param BrowserTargetingOptionDetails
   */
  public function setBrowserDetails(BrowserTargetingOptionDetails $browserDetails)
  {
    $this->browserDetails = $browserDetails;
  }
  /**
   * @return BrowserTargetingOptionDetails
   */
  public function getBrowserDetails()
  {
    return $this->browserDetails;
  }
  /**
   * @param BusinessChainTargetingOptionDetails
   */
  public function setBusinessChainDetails(BusinessChainTargetingOptionDetails $businessChainDetails)
  {
    $this->businessChainDetails = $businessChainDetails;
  }
  /**
   * @return BusinessChainTargetingOptionDetails
   */
  public function getBusinessChainDetails()
  {
    return $this->businessChainDetails;
  }
  /**
   * @param CarrierAndIspTargetingOptionDetails
   */
  public function setCarrierAndIspDetails(CarrierAndIspTargetingOptionDetails $carrierAndIspDetails)
  {
    $this->carrierAndIspDetails = $carrierAndIspDetails;
  }
  /**
   * @return CarrierAndIspTargetingOptionDetails
   */
  public function getCarrierAndIspDetails()
  {
    return $this->carrierAndIspDetails;
  }
  /**
   * @param CategoryTargetingOptionDetails
   */
  public function setCategoryDetails(CategoryTargetingOptionDetails $categoryDetails)
  {
    $this->categoryDetails = $categoryDetails;
  }
  /**
   * @return CategoryTargetingOptionDetails
   */
  public function getCategoryDetails()
  {
    return $this->categoryDetails;
  }
  /**
   * @param ContentDurationTargetingOptionDetails
   */
  public function setContentDurationDetails(ContentDurationTargetingOptionDetails $contentDurationDetails)
  {
    $this->contentDurationDetails = $contentDurationDetails;
  }
  /**
   * @return ContentDurationTargetingOptionDetails
   */
  public function getContentDurationDetails()
  {
    return $this->contentDurationDetails;
  }
  /**
   * @param ContentGenreTargetingOptionDetails
   */
  public function setContentGenreDetails(ContentGenreTargetingOptionDetails $contentGenreDetails)
  {
    $this->contentGenreDetails = $contentGenreDetails;
  }
  /**
   * @return ContentGenreTargetingOptionDetails
   */
  public function getContentGenreDetails()
  {
    return $this->contentGenreDetails;
  }
  /**
   * @param ContentInstreamPositionTargetingOptionDetails
   */
  public function setContentInstreamPositionDetails(ContentInstreamPositionTargetingOptionDetails $contentInstreamPositionDetails)
  {
    $this->contentInstreamPositionDetails = $contentInstreamPositionDetails;
  }
  /**
   * @return ContentInstreamPositionTargetingOptionDetails
   */
  public function getContentInstreamPositionDetails()
  {
    return $this->contentInstreamPositionDetails;
  }
  /**
   * @param ContentOutstreamPositionTargetingOptionDetails
   */
  public function setContentOutstreamPositionDetails(ContentOutstreamPositionTargetingOptionDetails $contentOutstreamPositionDetails)
  {
    $this->contentOutstreamPositionDetails = $contentOutstreamPositionDetails;
  }
  /**
   * @return ContentOutstreamPositionTargetingOptionDetails
   */
  public function getContentOutstreamPositionDetails()
  {
    return $this->contentOutstreamPositionDetails;
  }
  /**
   * @param ContentStreamTypeTargetingOptionDetails
   */
  public function setContentStreamTypeDetails(ContentStreamTypeTargetingOptionDetails $contentStreamTypeDetails)
  {
    $this->contentStreamTypeDetails = $contentStreamTypeDetails;
  }
  /**
   * @return ContentStreamTypeTargetingOptionDetails
   */
  public function getContentStreamTypeDetails()
  {
    return $this->contentStreamTypeDetails;
  }
  /**
   * @param DeviceMakeModelTargetingOptionDetails
   */
  public function setDeviceMakeModelDetails(DeviceMakeModelTargetingOptionDetails $deviceMakeModelDetails)
  {
    $this->deviceMakeModelDetails = $deviceMakeModelDetails;
  }
  /**
   * @return DeviceMakeModelTargetingOptionDetails
   */
  public function getDeviceMakeModelDetails()
  {
    return $this->deviceMakeModelDetails;
  }
  /**
   * @param DeviceTypeTargetingOptionDetails
   */
  public function setDeviceTypeDetails(DeviceTypeTargetingOptionDetails $deviceTypeDetails)
  {
    $this->deviceTypeDetails = $deviceTypeDetails;
  }
  /**
   * @return DeviceTypeTargetingOptionDetails
   */
  public function getDeviceTypeDetails()
  {
    return $this->deviceTypeDetails;
  }
  /**
   * @param DigitalContentLabelTargetingOptionDetails
   */
  public function setDigitalContentLabelDetails(DigitalContentLabelTargetingOptionDetails $digitalContentLabelDetails)
  {
    $this->digitalContentLabelDetails = $digitalContentLabelDetails;
  }
  /**
   * @return DigitalContentLabelTargetingOptionDetails
   */
  public function getDigitalContentLabelDetails()
  {
    return $this->digitalContentLabelDetails;
  }
  /**
   * @param EnvironmentTargetingOptionDetails
   */
  public function setEnvironmentDetails(EnvironmentTargetingOptionDetails $environmentDetails)
  {
    $this->environmentDetails = $environmentDetails;
  }
  /**
   * @return EnvironmentTargetingOptionDetails
   */
  public function getEnvironmentDetails()
  {
    return $this->environmentDetails;
  }
  /**
   * @param ExchangeTargetingOptionDetails
   */
  public function setExchangeDetails(ExchangeTargetingOptionDetails $exchangeDetails)
  {
    $this->exchangeDetails = $exchangeDetails;
  }
  /**
   * @return ExchangeTargetingOptionDetails
   */
  public function getExchangeDetails()
  {
    return $this->exchangeDetails;
  }
  /**
   * @param GenderTargetingOptionDetails
   */
  public function setGenderDetails(GenderTargetingOptionDetails $genderDetails)
  {
    $this->genderDetails = $genderDetails;
  }
  /**
   * @return GenderTargetingOptionDetails
   */
  public function getGenderDetails()
  {
    return $this->genderDetails;
  }
  /**
   * @param GeoRegionTargetingOptionDetails
   */
  public function setGeoRegionDetails(GeoRegionTargetingOptionDetails $geoRegionDetails)
  {
    $this->geoRegionDetails = $geoRegionDetails;
  }
  /**
   * @return GeoRegionTargetingOptionDetails
   */
  public function getGeoRegionDetails()
  {
    return $this->geoRegionDetails;
  }
  /**
   * @param HouseholdIncomeTargetingOptionDetails
   */
  public function setHouseholdIncomeDetails(HouseholdIncomeTargetingOptionDetails $householdIncomeDetails)
  {
    $this->householdIncomeDetails = $householdIncomeDetails;
  }
  /**
   * @return HouseholdIncomeTargetingOptionDetails
   */
  public function getHouseholdIncomeDetails()
  {
    return $this->householdIncomeDetails;
  }
  /**
   * @param LanguageTargetingOptionDetails
   */
  public function setLanguageDetails(LanguageTargetingOptionDetails $languageDetails)
  {
    $this->languageDetails = $languageDetails;
  }
  /**
   * @return LanguageTargetingOptionDetails
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
   * @param NativeContentPositionTargetingOptionDetails
   */
  public function setNativeContentPositionDetails(NativeContentPositionTargetingOptionDetails $nativeContentPositionDetails)
  {
    $this->nativeContentPositionDetails = $nativeContentPositionDetails;
  }
  /**
   * @return NativeContentPositionTargetingOptionDetails
   */
  public function getNativeContentPositionDetails()
  {
    return $this->nativeContentPositionDetails;
  }
  /**
   * @param OmidTargetingOptionDetails
   */
  public function setOmidDetails(OmidTargetingOptionDetails $omidDetails)
  {
    $this->omidDetails = $omidDetails;
  }
  /**
   * @return OmidTargetingOptionDetails
   */
  public function getOmidDetails()
  {
    return $this->omidDetails;
  }
  /**
   * @param OnScreenPositionTargetingOptionDetails
   */
  public function setOnScreenPositionDetails(OnScreenPositionTargetingOptionDetails $onScreenPositionDetails)
  {
    $this->onScreenPositionDetails = $onScreenPositionDetails;
  }
  /**
   * @return OnScreenPositionTargetingOptionDetails
   */
  public function getOnScreenPositionDetails()
  {
    return $this->onScreenPositionDetails;
  }
  /**
   * @param OperatingSystemTargetingOptionDetails
   */
  public function setOperatingSystemDetails(OperatingSystemTargetingOptionDetails $operatingSystemDetails)
  {
    $this->operatingSystemDetails = $operatingSystemDetails;
  }
  /**
   * @return OperatingSystemTargetingOptionDetails
   */
  public function getOperatingSystemDetails()
  {
    return $this->operatingSystemDetails;
  }
  /**
   * @param ParentalStatusTargetingOptionDetails
   */
  public function setParentalStatusDetails(ParentalStatusTargetingOptionDetails $parentalStatusDetails)
  {
    $this->parentalStatusDetails = $parentalStatusDetails;
  }
  /**
   * @return ParentalStatusTargetingOptionDetails
   */
  public function getParentalStatusDetails()
  {
    return $this->parentalStatusDetails;
  }
  /**
   * @param PoiTargetingOptionDetails
   */
  public function setPoiDetails(PoiTargetingOptionDetails $poiDetails)
  {
    $this->poiDetails = $poiDetails;
  }
  /**
   * @return PoiTargetingOptionDetails
   */
  public function getPoiDetails()
  {
    return $this->poiDetails;
  }
  /**
   * @param SensitiveCategoryTargetingOptionDetails
   */
  public function setSensitiveCategoryDetails(SensitiveCategoryTargetingOptionDetails $sensitiveCategoryDetails)
  {
    $this->sensitiveCategoryDetails = $sensitiveCategoryDetails;
  }
  /**
   * @return SensitiveCategoryTargetingOptionDetails
   */
  public function getSensitiveCategoryDetails()
  {
    return $this->sensitiveCategoryDetails;
  }
  /**
   * @param SubExchangeTargetingOptionDetails
   */
  public function setSubExchangeDetails(SubExchangeTargetingOptionDetails $subExchangeDetails)
  {
    $this->subExchangeDetails = $subExchangeDetails;
  }
  /**
   * @return SubExchangeTargetingOptionDetails
   */
  public function getSubExchangeDetails()
  {
    return $this->subExchangeDetails;
  }
  /**
   * @param string
   */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /**
   * @return string
   */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
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
   * @param UserRewardedContentTargetingOptionDetails
   */
  public function setUserRewardedContentDetails(UserRewardedContentTargetingOptionDetails $userRewardedContentDetails)
  {
    $this->userRewardedContentDetails = $userRewardedContentDetails;
  }
  /**
   * @return UserRewardedContentTargetingOptionDetails
   */
  public function getUserRewardedContentDetails()
  {
    return $this->userRewardedContentDetails;
  }
  /**
   * @param VideoPlayerSizeTargetingOptionDetails
   */
  public function setVideoPlayerSizeDetails(VideoPlayerSizeTargetingOptionDetails $videoPlayerSizeDetails)
  {
    $this->videoPlayerSizeDetails = $videoPlayerSizeDetails;
  }
  /**
   * @return VideoPlayerSizeTargetingOptionDetails
   */
  public function getVideoPlayerSizeDetails()
  {
    return $this->videoPlayerSizeDetails;
  }
  /**
   * @param ViewabilityTargetingOptionDetails
   */
  public function setViewabilityDetails(ViewabilityTargetingOptionDetails $viewabilityDetails)
  {
    $this->viewabilityDetails = $viewabilityDetails;
  }
  /**
   * @return ViewabilityTargetingOptionDetails
   */
  public function getViewabilityDetails()
  {
    return $this->viewabilityDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetingOption::class, 'Google_Service_DisplayVideo_TargetingOption');
