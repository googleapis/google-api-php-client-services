<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:40
 */

class Google_Service_Walletobjects_EventTicketClass extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array(
    );
    public $allowMultipleUsersPerObject;
    public $confirmationCodeLabel;
    public $countryCode;
    protected $customConfirmationCodeLabelType = 'Google_Service_Walletobjects_LocalizedString';
    protected $customConfirmationCodeLabelDataType = '';
    protected $customGateLabelType = 'Google_Service_Walletobjects_LocalizedString';
    protected $customGateLabelDataType = '';
    protected $customRowLabelType = 'Google_Service_Walletobjects_LocalizedString';
    protected $customRowLabelDataType = '';
    protected $customSeatLabelType = 'Google_Service_Walletobjects_LocalizedString';
    protected $customSeatLabelDataType = '';
    protected $customSectionLabelType = 'Google_Service_Walletobjects_LocalizedString';
    protected $customSectionLabelDataType = '';
    protected $dateTimeType = 'Google_Service_Walletobjects_EventDateTime';
    protected $dateTimeDataType = '';
    public $eventId;
    protected $eventNameType = 'Google_Service_Walletobjects_LocalizedString';
    protected $eventNameDataType = '';
    protected $finePrintType = 'Google_Service_Walletobjects_LocalizedString';
    protected $finePrintDataType = '';
    public $gateLabel;
    protected $heroImageType = 'Google_Service_Walletobjects_Image';
    protected $heroImageDataType = '';
    public $hexBackgroundColor;
    public $hideBarcode;
    protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
    protected $homepageUriDataType = '';
    public $id;
    protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
    protected $infoModuleDataDataType = '';
    public $issuerName;
    public $kind;
    protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
    protected $linksModuleDataDataType = '';
    protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
    protected $localizedIssuerNameDataType = '';
    protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    protected $logoType = 'Google_Service_Walletobjects_Image';
    protected $logoDataType = '';
    protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
    protected $reviewDataType = '';
    public $reviewStatus;
    public $rowLabel;
    public $seatLabel;
    public $sectionLabel;
    protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
    protected $venueType = 'Google_Service_Walletobjects_EventVenue';
    protected $venueDataType = '';
    public $version;
    protected $wordMarkType = 'Google_Service_Walletobjects_Image';
    protected $wordMarkDataType = '';


    public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
    {
        $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
    }
    public function getAllowMultipleUsersPerObject()
    {
        return $this->allowMultipleUsersPerObject;
    }
    public function setConfirmationCodeLabel($confirmationCodeLabel)
    {
        $this->confirmationCodeLabel = $confirmationCodeLabel;
    }
    public function getConfirmationCodeLabel()
    {
        return $this->confirmationCodeLabel;
    }
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    public function setCustomConfirmationCodeLabel(Google_Service_Walletobjects_LocalizedString $customConfirmationCodeLabel)
    {
        $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
    }
    public function getCustomConfirmationCodeLabel()
    {
        return $this->customConfirmationCodeLabel;
    }
    public function setCustomGateLabel(Google_Service_Walletobjects_LocalizedString $customGateLabel)
    {
        $this->customGateLabel = $customGateLabel;
    }
    public function getCustomGateLabel()
    {
        return $this->customGateLabel;
    }
    public function setCustomRowLabel(Google_Service_Walletobjects_LocalizedString $customRowLabel)
    {
        $this->customRowLabel = $customRowLabel;
    }
    public function getCustomRowLabel()
    {
        return $this->customRowLabel;
    }
    public function setCustomSeatLabel(Google_Service_Walletobjects_LocalizedString $customSeatLabel)
    {
        $this->customSeatLabel = $customSeatLabel;
    }
    public function getCustomSeatLabel()
    {
        return $this->customSeatLabel;
    }
    public function setCustomSectionLabel(Google_Service_Walletobjects_LocalizedString $customSectionLabel)
    {
        $this->customSectionLabel = $customSectionLabel;
    }
    public function getCustomSectionLabel()
    {
        return $this->customSectionLabel;
    }
    public function setDateTime(Google_Service_Walletobjects_EventDateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }
    public function getDateTime()
    {
        return $this->dateTime;
    }
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }
    public function getEventId()
    {
        return $this->eventId;
    }
    public function setEventName(Google_Service_Walletobjects_LocalizedString $eventName)
    {
        $this->eventName = $eventName;
    }
    public function getEventName()
    {
        return $this->eventName;
    }
    public function setFinePrint(Google_Service_Walletobjects_LocalizedString $finePrint)
    {
        $this->finePrint = $finePrint;
    }
    public function getFinePrint()
    {
        return $this->finePrint;
    }
    public function setGateLabel($gateLabel)
    {
        $this->gateLabel = $gateLabel;
    }
    public function getGateLabel()
    {
        return $this->gateLabel;
    }
    public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
    {
        $this->heroImage = $heroImage;
    }
    public function getHeroImage()
    {
        return $this->heroImage;
    }
    public function setHexBackgroundColor($hexBackgroundColor)
    {
        $this->hexBackgroundColor = $hexBackgroundColor;
    }
    public function getHexBackgroundColor()
    {
        return $this->hexBackgroundColor;
    }
    public function setHideBarcode($hideBarcode)
    {
        $this->hideBarcode = $hideBarcode;
    }
    public function getHideBarcode()
    {
        return $this->hideBarcode;
    }
    public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
    {
        $this->homepageUri = $homepageUri;
    }
    public function getHomepageUri()
    {
        return $this->homepageUri;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImageModulesData($imageModulesData)
    {
        $this->imageModulesData = $imageModulesData;
    }
    public function getImageModulesData()
    {
        return $this->imageModulesData;
    }
    public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
    {
        $this->infoModuleData = $infoModuleData;
    }
    public function getInfoModuleData()
    {
        return $this->infoModuleData;
    }
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
    }
    public function getIssuerName()
    {
        return $this->issuerName;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }
    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }
    public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }
    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setLogo(Google_Service_Walletobjects_Image $logo)
    {
        $this->logo = $logo;
    }
    public function getLogo()
    {
        return $this->logo;
    }
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
    {
        $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
    }
    public function getMultipleDevicesAndHoldersAllowedStatus()
    {
        return $this->multipleDevicesAndHoldersAllowedStatus;
    }
    public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
    {
        $this->review = $review;
    }
    public function getReview()
    {
        return $this->review;
    }
    public function setReviewStatus($reviewStatus)
    {
        $this->reviewStatus = $reviewStatus;
    }
    public function getReviewStatus()
    {
        return $this->reviewStatus;
    }
    public function setRowLabel($rowLabel)
    {
        $this->rowLabel = $rowLabel;
    }
    public function getRowLabel()
    {
        return $this->rowLabel;
    }
    public function setSeatLabel($seatLabel)
    {
        $this->seatLabel = $seatLabel;
    }
    public function getSeatLabel()
    {
        return $this->seatLabel;
    }
    public function setSectionLabel($sectionLabel)
    {
        $this->sectionLabel = $sectionLabel;
    }
    public function getSectionLabel()
    {
        return $this->sectionLabel;
    }
    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setVenue(Google_Service_Walletobjects_EventVenue $venue)
    {
        $this->venue = $venue;
    }
    public function getVenue()
    {
        return $this->venue;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
    public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
    {
        $this->wordMark = $wordMark;
    }
    public function getWordMark()
    {
        return $this->wordMark;
    }
}