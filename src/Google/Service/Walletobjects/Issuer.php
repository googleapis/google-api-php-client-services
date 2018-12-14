<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:32
 */

class Google_Service_Walletobjects_Issuer extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $contactInfoType = 'Google_Service_Walletobjects_IssuerContactInfo';
    protected $contactInfoDataType = '';
    public $homepageUrl;
    public $issuerId;
    protected $locationIdentifiersType = 'Google_Service_Walletobjects_LocationIdentifiers';
    protected $locationIdentifiersDataType = '';
    public $name;
    protected $smartTapMerchantDataType = 'Google_Service_Walletobjects_SmartTapMerchantData';
    protected $smartTapMerchantDataDataType = '';


    public function setContactInfo(Google_Service_Walletobjects_IssuerContactInfo $contactInfo)
    {
        $this->contactInfo = $contactInfo;
    }
    public function getContactInfo()
    {
        return $this->contactInfo;
    }
    public function setHomepageUrl($homepageUrl)
    {
        $this->homepageUrl = $homepageUrl;
    }
    public function getHomepageUrl()
    {
        return $this->homepageUrl;
    }
    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;
    }
    public function getIssuerId()
    {
        return $this->issuerId;
    }
    public function setLocationIdentifiers(Google_Service_Walletobjects_LocationIdentifiers $locationIdentifiers)
    {
        $this->locationIdentifiers = $locationIdentifiers;
    }
    public function getLocationIdentifiers()
    {
        return $this->locationIdentifiers;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSmartTapMerchantData(Google_Service_Walletobjects_SmartTapMerchantData $smartTapMerchantData)
    {
        $this->smartTapMerchantData = $smartTapMerchantData;
    }
    public function getSmartTapMerchantData()
    {
        return $this->smartTapMerchantData;
    }
}