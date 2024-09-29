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

namespace Google\Service\Walletobjects;

class TransitClass extends \Google\Collection
{
  protected $collection_key = 'valueAddedModuleData';
  protected $activationOptionsType = ActivationOptions::class;
  protected $activationOptionsDataType = '';
  /**
   * @var bool
   */
  public $allowMultipleUsersPerObject;
  protected $appLinkDataType = AppLinkData::class;
  protected $appLinkDataDataType = '';
  protected $callbackOptionsType = CallbackOptions::class;
  protected $callbackOptionsDataType = '';
  protected $classTemplateInfoType = ClassTemplateInfo::class;
  protected $classTemplateInfoDataType = '';
  /**
   * @var string
   */
  public $countryCode;
  protected $customCarriageLabelType = LocalizedString::class;
  protected $customCarriageLabelDataType = '';
  protected $customCoachLabelType = LocalizedString::class;
  protected $customCoachLabelDataType = '';
  protected $customConcessionCategoryLabelType = LocalizedString::class;
  protected $customConcessionCategoryLabelDataType = '';
  protected $customConfirmationCodeLabelType = LocalizedString::class;
  protected $customConfirmationCodeLabelDataType = '';
  protected $customDiscountMessageLabelType = LocalizedString::class;
  protected $customDiscountMessageLabelDataType = '';
  protected $customFareClassLabelType = LocalizedString::class;
  protected $customFareClassLabelDataType = '';
  protected $customFareNameLabelType = LocalizedString::class;
  protected $customFareNameLabelDataType = '';
  protected $customOtherRestrictionsLabelType = LocalizedString::class;
  protected $customOtherRestrictionsLabelDataType = '';
  protected $customPlatformLabelType = LocalizedString::class;
  protected $customPlatformLabelDataType = '';
  protected $customPurchaseFaceValueLabelType = LocalizedString::class;
  protected $customPurchaseFaceValueLabelDataType = '';
  protected $customPurchasePriceLabelType = LocalizedString::class;
  protected $customPurchasePriceLabelDataType = '';
  protected $customPurchaseReceiptNumberLabelType = LocalizedString::class;
  protected $customPurchaseReceiptNumberLabelDataType = '';
  protected $customRouteRestrictionsDetailsLabelType = LocalizedString::class;
  protected $customRouteRestrictionsDetailsLabelDataType = '';
  protected $customRouteRestrictionsLabelType = LocalizedString::class;
  protected $customRouteRestrictionsLabelDataType = '';
  protected $customSeatLabelType = LocalizedString::class;
  protected $customSeatLabelDataType = '';
  protected $customTicketNumberLabelType = LocalizedString::class;
  protected $customTicketNumberLabelDataType = '';
  protected $customTimeRestrictionsLabelType = LocalizedString::class;
  protected $customTimeRestrictionsLabelDataType = '';
  protected $customTransitTerminusNameLabelType = LocalizedString::class;
  protected $customTransitTerminusNameLabelDataType = '';
  protected $customZoneLabelType = LocalizedString::class;
  protected $customZoneLabelDataType = '';
  /**
   * @var bool
   */
  public $enableSingleLegItinerary;
  /**
   * @var bool
   */
  public $enableSmartTap;
  protected $heroImageType = Image::class;
  protected $heroImageDataType = '';
  /**
   * @var string
   */
  public $hexBackgroundColor;
  protected $homepageUriType = Uri::class;
  protected $homepageUriDataType = '';
  /**
   * @var string
   */
  public $id;
  protected $imageModulesDataType = ImageModuleData::class;
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = InfoModuleData::class;
  protected $infoModuleDataDataType = '';
  /**
   * @var string
   */
  public $issuerName;
  /**
   * @var string
   */
  public $languageOverride;
  protected $linksModuleDataType = LinksModuleData::class;
  protected $linksModuleDataDataType = '';
  protected $localizedIssuerNameType = LocalizedString::class;
  protected $localizedIssuerNameDataType = '';
  protected $locationsType = LatLongPoint::class;
  protected $locationsDataType = 'array';
  protected $logoType = Image::class;
  protected $logoDataType = '';
  protected $messagesType = Message::class;
  protected $messagesDataType = 'array';
  /**
   * @var string
   */
  public $multipleDevicesAndHoldersAllowedStatus;
  /**
   * @var string[]
   */
  public $redemptionIssuers;
  protected $reviewType = Review::class;
  protected $reviewDataType = '';
  /**
   * @var string
   */
  public $reviewStatus;
  protected $securityAnimationType = SecurityAnimation::class;
  protected $securityAnimationDataType = '';
  protected $textModulesDataType = TextModuleData::class;
  protected $textModulesDataDataType = 'array';
  protected $transitOperatorNameType = LocalizedString::class;
  protected $transitOperatorNameDataType = '';
  /**
   * @var string
   */
  public $transitType;
  protected $valueAddedModuleDataType = ValueAddedModuleData::class;
  protected $valueAddedModuleDataDataType = 'array';
  /**
   * @var string
   */
  public $version;
  /**
   * @var string
   */
  public $viewUnlockRequirement;
  protected $watermarkType = Image::class;
  protected $watermarkDataType = '';
  protected $wideLogoType = Image::class;
  protected $wideLogoDataType = '';
  protected $wordMarkType = Image::class;
  protected $wordMarkDataType = '';

  /**
   * @param ActivationOptions
   */
  public function setActivationOptions(ActivationOptions $activationOptions)
  {
    $this->activationOptions = $activationOptions;
  }
  /**
   * @return ActivationOptions
   */
  public function getActivationOptions()
  {
    return $this->activationOptions;
  }
  /**
   * @param bool
   */
  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  /**
   * @return bool
   */
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  /**
   * @param AppLinkData
   */
  public function setAppLinkData(AppLinkData $appLinkData)
  {
    $this->appLinkData = $appLinkData;
  }
  /**
   * @return AppLinkData
   */
  public function getAppLinkData()
  {
    return $this->appLinkData;
  }
  /**
   * @param CallbackOptions
   */
  public function setCallbackOptions(CallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  /**
   * @return CallbackOptions
   */
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  /**
   * @param ClassTemplateInfo
   */
  public function setClassTemplateInfo(ClassTemplateInfo $classTemplateInfo)
  {
    $this->classTemplateInfo = $classTemplateInfo;
  }
  /**
   * @return ClassTemplateInfo
   */
  public function getClassTemplateInfo()
  {
    return $this->classTemplateInfo;
  }
  /**
   * @param string
   */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /**
   * @return string
   */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomCarriageLabel(LocalizedString $customCarriageLabel)
  {
    $this->customCarriageLabel = $customCarriageLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomCarriageLabel()
  {
    return $this->customCarriageLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomCoachLabel(LocalizedString $customCoachLabel)
  {
    $this->customCoachLabel = $customCoachLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomCoachLabel()
  {
    return $this->customCoachLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomConcessionCategoryLabel(LocalizedString $customConcessionCategoryLabel)
  {
    $this->customConcessionCategoryLabel = $customConcessionCategoryLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomConcessionCategoryLabel()
  {
    return $this->customConcessionCategoryLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomConfirmationCodeLabel(LocalizedString $customConfirmationCodeLabel)
  {
    $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomConfirmationCodeLabel()
  {
    return $this->customConfirmationCodeLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomDiscountMessageLabel(LocalizedString $customDiscountMessageLabel)
  {
    $this->customDiscountMessageLabel = $customDiscountMessageLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomDiscountMessageLabel()
  {
    return $this->customDiscountMessageLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomFareClassLabel(LocalizedString $customFareClassLabel)
  {
    $this->customFareClassLabel = $customFareClassLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomFareClassLabel()
  {
    return $this->customFareClassLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomFareNameLabel(LocalizedString $customFareNameLabel)
  {
    $this->customFareNameLabel = $customFareNameLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomFareNameLabel()
  {
    return $this->customFareNameLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomOtherRestrictionsLabel(LocalizedString $customOtherRestrictionsLabel)
  {
    $this->customOtherRestrictionsLabel = $customOtherRestrictionsLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomOtherRestrictionsLabel()
  {
    return $this->customOtherRestrictionsLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomPlatformLabel(LocalizedString $customPlatformLabel)
  {
    $this->customPlatformLabel = $customPlatformLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomPlatformLabel()
  {
    return $this->customPlatformLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomPurchaseFaceValueLabel(LocalizedString $customPurchaseFaceValueLabel)
  {
    $this->customPurchaseFaceValueLabel = $customPurchaseFaceValueLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomPurchaseFaceValueLabel()
  {
    return $this->customPurchaseFaceValueLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomPurchasePriceLabel(LocalizedString $customPurchasePriceLabel)
  {
    $this->customPurchasePriceLabel = $customPurchasePriceLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomPurchasePriceLabel()
  {
    return $this->customPurchasePriceLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomPurchaseReceiptNumberLabel(LocalizedString $customPurchaseReceiptNumberLabel)
  {
    $this->customPurchaseReceiptNumberLabel = $customPurchaseReceiptNumberLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomPurchaseReceiptNumberLabel()
  {
    return $this->customPurchaseReceiptNumberLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomRouteRestrictionsDetailsLabel(LocalizedString $customRouteRestrictionsDetailsLabel)
  {
    $this->customRouteRestrictionsDetailsLabel = $customRouteRestrictionsDetailsLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomRouteRestrictionsDetailsLabel()
  {
    return $this->customRouteRestrictionsDetailsLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomRouteRestrictionsLabel(LocalizedString $customRouteRestrictionsLabel)
  {
    $this->customRouteRestrictionsLabel = $customRouteRestrictionsLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomRouteRestrictionsLabel()
  {
    return $this->customRouteRestrictionsLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomSeatLabel(LocalizedString $customSeatLabel)
  {
    $this->customSeatLabel = $customSeatLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomSeatLabel()
  {
    return $this->customSeatLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomTicketNumberLabel(LocalizedString $customTicketNumberLabel)
  {
    $this->customTicketNumberLabel = $customTicketNumberLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomTicketNumberLabel()
  {
    return $this->customTicketNumberLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomTimeRestrictionsLabel(LocalizedString $customTimeRestrictionsLabel)
  {
    $this->customTimeRestrictionsLabel = $customTimeRestrictionsLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomTimeRestrictionsLabel()
  {
    return $this->customTimeRestrictionsLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomTransitTerminusNameLabel(LocalizedString $customTransitTerminusNameLabel)
  {
    $this->customTransitTerminusNameLabel = $customTransitTerminusNameLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomTransitTerminusNameLabel()
  {
    return $this->customTransitTerminusNameLabel;
  }
  /**
   * @param LocalizedString
   */
  public function setCustomZoneLabel(LocalizedString $customZoneLabel)
  {
    $this->customZoneLabel = $customZoneLabel;
  }
  /**
   * @return LocalizedString
   */
  public function getCustomZoneLabel()
  {
    return $this->customZoneLabel;
  }
  /**
   * @param bool
   */
  public function setEnableSingleLegItinerary($enableSingleLegItinerary)
  {
    $this->enableSingleLegItinerary = $enableSingleLegItinerary;
  }
  /**
   * @return bool
   */
  public function getEnableSingleLegItinerary()
  {
    return $this->enableSingleLegItinerary;
  }
  /**
   * @param bool
   */
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  /**
   * @return bool
   */
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  /**
   * @param Image
   */
  public function setHeroImage(Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  /**
   * @return Image
   */
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  /**
   * @param string
   */
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  /**
   * @return string
   */
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  /**
   * @param Uri
   */
  public function setHomepageUri(Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  /**
   * @return Uri
   */
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param ImageModuleData[]
   */
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  /**
   * @return ImageModuleData[]
   */
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  /**
   * @param InfoModuleData
   */
  public function setInfoModuleData(InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  /**
   * @return InfoModuleData
   */
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  /**
   * @param string
   */
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  /**
   * @return string
   */
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  /**
   * @param string
   */
  public function setLanguageOverride($languageOverride)
  {
    $this->languageOverride = $languageOverride;
  }
  /**
   * @return string
   */
  public function getLanguageOverride()
  {
    return $this->languageOverride;
  }
  /**
   * @param LinksModuleData
   */
  public function setLinksModuleData(LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  /**
   * @return LinksModuleData
   */
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  /**
   * @param LocalizedString
   */
  public function setLocalizedIssuerName(LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  /**
   * @return LocalizedString
   */
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  /**
   * @param LatLongPoint[]
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return LatLongPoint[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * @param Image
   */
  public function setLogo(Image $logo)
  {
    $this->logo = $logo;
  }
  /**
   * @return Image
   */
  public function getLogo()
  {
    return $this->logo;
  }
  /**
   * @param Message[]
   */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /**
   * @return Message[]
   */
  public function getMessages()
  {
    return $this->messages;
  }
  /**
   * @param string
   */
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  /**
   * @return string
   */
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  /**
   * @param string[]
   */
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  /**
   * @return string[]
   */
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  /**
   * @param Review
   */
  public function setReview(Review $review)
  {
    $this->review = $review;
  }
  /**
   * @return Review
   */
  public function getReview()
  {
    return $this->review;
  }
  /**
   * @param string
   */
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  /**
   * @return string
   */
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  /**
   * @param SecurityAnimation
   */
  public function setSecurityAnimation(SecurityAnimation $securityAnimation)
  {
    $this->securityAnimation = $securityAnimation;
  }
  /**
   * @return SecurityAnimation
   */
  public function getSecurityAnimation()
  {
    return $this->securityAnimation;
  }
  /**
   * @param TextModuleData[]
   */
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  /**
   * @return TextModuleData[]
   */
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  /**
   * @param LocalizedString
   */
  public function setTransitOperatorName(LocalizedString $transitOperatorName)
  {
    $this->transitOperatorName = $transitOperatorName;
  }
  /**
   * @return LocalizedString
   */
  public function getTransitOperatorName()
  {
    return $this->transitOperatorName;
  }
  /**
   * @param string
   */
  public function setTransitType($transitType)
  {
    $this->transitType = $transitType;
  }
  /**
   * @return string
   */
  public function getTransitType()
  {
    return $this->transitType;
  }
  /**
   * @param ValueAddedModuleData[]
   */
  public function setValueAddedModuleData($valueAddedModuleData)
  {
    $this->valueAddedModuleData = $valueAddedModuleData;
  }
  /**
   * @return ValueAddedModuleData[]
   */
  public function getValueAddedModuleData()
  {
    return $this->valueAddedModuleData;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
  /**
   * @param string
   */
  public function setViewUnlockRequirement($viewUnlockRequirement)
  {
    $this->viewUnlockRequirement = $viewUnlockRequirement;
  }
  /**
   * @return string
   */
  public function getViewUnlockRequirement()
  {
    return $this->viewUnlockRequirement;
  }
  /**
   * @param Image
   */
  public function setWatermark(Image $watermark)
  {
    $this->watermark = $watermark;
  }
  /**
   * @return Image
   */
  public function getWatermark()
  {
    return $this->watermark;
  }
  /**
   * @param Image
   */
  public function setWideLogo(Image $wideLogo)
  {
    $this->wideLogo = $wideLogo;
  }
  /**
   * @return Image
   */
  public function getWideLogo()
  {
    return $this->wideLogo;
  }
  /**
   * @param Image
   */
  public function setWordMark(Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  /**
   * @return Image
   */
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransitClass::class, 'Google_Service_Walletobjects_TransitClass');
