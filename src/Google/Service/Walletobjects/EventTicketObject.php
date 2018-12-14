<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:55
 */

class Google_Service_Walletobjects_EventTicketObject extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array(
    );
    protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
    protected $barcodeDataType = '';
    public $classId;
    protected $classReferenceType = 'Google_Service_Walletobjects_EventTicketClass';
    protected $classReferenceDataType = '';
    public $disableExpirationNotification;
    protected $faceValueType = 'Google_Service_Walletobjects_Money';
    protected $faceValueDataType = '';
    public $hasLinkedDevice;
    public $hasUsers;
    public $id;
    protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
    protected $infoModuleDataDataType = '';
    public $kind;
    protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
    protected $linksModuleDataDataType = '';
    protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
    protected $messagesDataType = 'array';
    protected $reservationInfoType = 'Google_Service_Walletobjects_EventReservationInfo';
    protected $reservationInfoDataType = '';
    protected $seatInfoType = 'Google_Service_Walletobjects_EventSeat';
    protected $seatInfoDataType = '';
    public $smartTapRedemptionValue;
    public $state;
    protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
    public $ticketHolderName;
    public $ticketNumber;
    protected $ticketTypeType = 'Google_Service_Walletobjects_LocalizedString';
    protected $ticketTypeDataType = '';
    protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
    protected $validTimeIntervalDataType = '';
    public $version;


    public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
    {
        $this->barcode = $barcode;
    }
    public function getBarcode()
    {
        return $this->barcode;
    }
    public function setClassId($classId)
    {
        $this->classId = $classId;
    }
    public function getClassId()
    {
        return $this->classId;
    }
    public function setClassReference(Google_Service_Walletobjects_EventTicketClass $classReference)
    {
        $this->classReference = $classReference;
    }
    public function getClassReference()
    {
        return $this->classReference;
    }
    public function setDisableExpirationNotification($disableExpirationNotification)
    {
        $this->disableExpirationNotification = $disableExpirationNotification;
    }
    public function getDisableExpirationNotification()
    {
        return $this->disableExpirationNotification;
    }
    public function setFaceValue(Google_Service_Walletobjects_Money $faceValue)
    {
        $this->faceValue = $faceValue;
    }
    public function getFaceValue()
    {
        return $this->faceValue;
    }
    public function setHasLinkedDevice($hasLinkedDevice)
    {
        $this->hasLinkedDevice = $hasLinkedDevice;
    }
    public function getHasLinkedDevice()
    {
        return $this->hasLinkedDevice;
    }
    public function setHasUsers($hasUsers)
    {
        $this->hasUsers = $hasUsers;
    }
    public function getHasUsers()
    {
        return $this->hasUsers;
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
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setReservationInfo(Google_Service_Walletobjects_EventReservationInfo $reservationInfo)
    {
        $this->reservationInfo = $reservationInfo;
    }
    public function getReservationInfo()
    {
        return $this->reservationInfo;
    }
    public function setSeatInfo(Google_Service_Walletobjects_EventSeat $seatInfo)
    {
        $this->seatInfo = $seatInfo;
    }
    public function getSeatInfo()
    {
        return $this->seatInfo;
    }
    public function setSmartTapRedemptionValue($smartTapRedemptionValue)
    {
        $this->smartTapRedemptionValue = $smartTapRedemptionValue;
    }
    public function getSmartTapRedemptionValue()
    {
        return $this->smartTapRedemptionValue;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setTicketHolderName($ticketHolderName)
    {
        $this->ticketHolderName = $ticketHolderName;
    }
    public function getTicketHolderName()
    {
        return $this->ticketHolderName;
    }
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;
    }
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }
    public function setTicketType(Google_Service_Walletobjects_LocalizedString $ticketType)
    {
        $this->ticketType = $ticketType;
    }
    public function getTicketType()
    {
        return $this->ticketType;
    }
    public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
    {
        $this->validTimeInterval = $validTimeInterval;
    }
    public function getValidTimeInterval()
    {
        return $this->validTimeInterval;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
}