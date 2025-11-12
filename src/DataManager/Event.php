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

namespace Google\Service\DataManager;

class Event extends \Google\Collection
{
  protected $collection_key = 'experimentalFields';
  protected $adIdentifiersType = AdIdentifiers::class;
  protected $adIdentifiersDataType = '';
  protected $additionalEventParametersType = EventParameter::class;
  protected $additionalEventParametersDataType = 'array';
  protected $cartDataType = CartData::class;
  protected $cartDataDataType = '';
  /**
   * @var string
   */
  public $clientId;
  protected $consentType = Consent::class;
  protected $consentDataType = '';
  public $conversionValue;
  /**
   * @var string
   */
  public $currency;
  protected $customVariablesType = CustomVariable::class;
  protected $customVariablesDataType = 'array';
  /**
   * @var string[]
   */
  public $destinationReferences;
  protected $eventDeviceInfoType = DeviceInfo::class;
  protected $eventDeviceInfoDataType = '';
  /**
   * @var string
   */
  public $eventName;
  /**
   * @var string
   */
  public $eventSource;
  /**
   * @var string
   */
  public $eventTimestamp;
  protected $experimentalFieldsType = ExperimentalField::class;
  protected $experimentalFieldsDataType = 'array';
  /**
   * @var string
   */
  public $lastUpdatedTimestamp;
  /**
   * @var string
   */
  public $transactionId;
  protected $userDataType = UserData::class;
  protected $userDataDataType = '';
  /**
   * @var string
   */
  public $userId;
  protected $userPropertiesType = UserProperties::class;
  protected $userPropertiesDataType = '';

  /**
   * @param AdIdentifiers
   */
  public function setAdIdentifiers(AdIdentifiers $adIdentifiers)
  {
    $this->adIdentifiers = $adIdentifiers;
  }
  /**
   * @return AdIdentifiers
   */
  public function getAdIdentifiers()
  {
    return $this->adIdentifiers;
  }
  /**
   * @param EventParameter[]
   */
  public function setAdditionalEventParameters($additionalEventParameters)
  {
    $this->additionalEventParameters = $additionalEventParameters;
  }
  /**
   * @return EventParameter[]
   */
  public function getAdditionalEventParameters()
  {
    return $this->additionalEventParameters;
  }
  /**
   * @param CartData
   */
  public function setCartData(CartData $cartData)
  {
    $this->cartData = $cartData;
  }
  /**
   * @return CartData
   */
  public function getCartData()
  {
    return $this->cartData;
  }
  /**
   * @param string
   */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /**
   * @return string
   */
  public function getClientId()
  {
    return $this->clientId;
  }
  /**
   * @param Consent
   */
  public function setConsent(Consent $consent)
  {
    $this->consent = $consent;
  }
  /**
   * @return Consent
   */
  public function getConsent()
  {
    return $this->consent;
  }
  public function setConversionValue($conversionValue)
  {
    $this->conversionValue = $conversionValue;
  }
  public function getConversionValue()
  {
    return $this->conversionValue;
  }
  /**
   * @param string
   */
  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  /**
   * @return string
   */
  public function getCurrency()
  {
    return $this->currency;
  }
  /**
   * @param CustomVariable[]
   */
  public function setCustomVariables($customVariables)
  {
    $this->customVariables = $customVariables;
  }
  /**
   * @return CustomVariable[]
   */
  public function getCustomVariables()
  {
    return $this->customVariables;
  }
  /**
   * @param string[]
   */
  public function setDestinationReferences($destinationReferences)
  {
    $this->destinationReferences = $destinationReferences;
  }
  /**
   * @return string[]
   */
  public function getDestinationReferences()
  {
    return $this->destinationReferences;
  }
  /**
   * @param DeviceInfo
   */
  public function setEventDeviceInfo(DeviceInfo $eventDeviceInfo)
  {
    $this->eventDeviceInfo = $eventDeviceInfo;
  }
  /**
   * @return DeviceInfo
   */
  public function getEventDeviceInfo()
  {
    return $this->eventDeviceInfo;
  }
  /**
   * @param string
   */
  public function setEventName($eventName)
  {
    $this->eventName = $eventName;
  }
  /**
   * @return string
   */
  public function getEventName()
  {
    return $this->eventName;
  }
  /**
   * @param string
   */
  public function setEventSource($eventSource)
  {
    $this->eventSource = $eventSource;
  }
  /**
   * @return string
   */
  public function getEventSource()
  {
    return $this->eventSource;
  }
  /**
   * @param string
   */
  public function setEventTimestamp($eventTimestamp)
  {
    $this->eventTimestamp = $eventTimestamp;
  }
  /**
   * @return string
   */
  public function getEventTimestamp()
  {
    return $this->eventTimestamp;
  }
  /**
   * @param ExperimentalField[]
   */
  public function setExperimentalFields($experimentalFields)
  {
    $this->experimentalFields = $experimentalFields;
  }
  /**
   * @return ExperimentalField[]
   */
  public function getExperimentalFields()
  {
    return $this->experimentalFields;
  }
  /**
   * @param string
   */
  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }
  /**
   * @return string
   */
  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }
  /**
   * @param string
   */
  public function setTransactionId($transactionId)
  {
    $this->transactionId = $transactionId;
  }
  /**
   * @return string
   */
  public function getTransactionId()
  {
    return $this->transactionId;
  }
  /**
   * @param UserData
   */
  public function setUserData(UserData $userData)
  {
    $this->userData = $userData;
  }
  /**
   * @return UserData
   */
  public function getUserData()
  {
    return $this->userData;
  }
  /**
   * @param string
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
  /**
   * @param UserProperties
   */
  public function setUserProperties(UserProperties $userProperties)
  {
    $this->userProperties = $userProperties;
  }
  /**
   * @return UserProperties
   */
  public function getUserProperties()
  {
    return $this->userProperties;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Event::class, 'Google_Service_DataManager_Event');
