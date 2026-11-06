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
  public const EVENT_SOURCE_EVENT_SOURCE_UNSPECIFIED = 'EVENT_SOURCE_UNSPECIFIED';
  public const EVENT_SOURCE_WEB = 'WEB';
  public const EVENT_SOURCE_APP = 'APP';
  public const EVENT_SOURCE_IN_STORE = 'IN_STORE';
  public const EVENT_SOURCE_PHONE = 'PHONE';
  public const EVENT_SOURCE_MESSAGE = 'MESSAGE';
  public const EVENT_SOURCE_OTHER = 'OTHER';
  protected $collection_key = 'experimentalFields';
  protected $adIdentifiersType = AdIdentifiers::class;
  protected $adIdentifiersDataType = '';
  protected $additionalEventParametersType = EventParameter::class;
  protected $additionalEventParametersDataType = 'array';
  /**
   * @var string
   */
  public $appInstanceId;
  protected $callInfoType = CallInfo::class;
  protected $callInfoDataType = '';
  protected $cartDataType = CartData::class;
  protected $cartDataDataType = '';
  /**
   * @var string
   */
  public $clientId;
  protected $consentType = Consent::class;
  protected $consentDataType = '';
  public $conversionCount;
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
  protected $eventLocationType = EventLocation::class;
  protected $eventLocationDataType = '';
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
  protected $thirdPartyUserDataType = UserData::class;
  protected $thirdPartyUserDataDataType = '';
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
   * @param AdIdentifiers $adIdentifiers
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
   * @param EventParameter[] $additionalEventParameters
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
   * @param string $appInstanceId
   */
  public function setAppInstanceId($appInstanceId)
  {
    $this->appInstanceId = $appInstanceId;
  }
  /**
   * @return string
   */
  public function getAppInstanceId()
  {
    return $this->appInstanceId;
  }
  /**
   * @param CallInfo $callInfo
   */
  public function setCallInfo(CallInfo $callInfo)
  {
    $this->callInfo = $callInfo;
  }
  /**
   * @return CallInfo
   */
  public function getCallInfo()
  {
    return $this->callInfo;
  }
  /**
   * @param CartData $cartData
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
   * @param string $clientId
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
   * @param Consent $consent
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
  public function setConversionCount($conversionCount)
  {
    $this->conversionCount = $conversionCount;
  }
  public function getConversionCount()
  {
    return $this->conversionCount;
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
   * @param string $currency
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
   * @param CustomVariable[] $customVariables
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
   * @param string[] $destinationReferences
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
   * @param DeviceInfo $eventDeviceInfo
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
   * @param EventLocation $eventLocation
   */
  public function setEventLocation(EventLocation $eventLocation)
  {
    $this->eventLocation = $eventLocation;
  }
  /**
   * @return EventLocation
   */
  public function getEventLocation()
  {
    return $this->eventLocation;
  }
  /**
   * @param string $eventName
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
   * @param self::EVENT_SOURCE_* $eventSource
   */
  public function setEventSource($eventSource)
  {
    $this->eventSource = $eventSource;
  }
  /**
   * @return self::EVENT_SOURCE_*
   */
  public function getEventSource()
  {
    return $this->eventSource;
  }
  /**
   * @param string $eventTimestamp
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
   * @param ExperimentalField[] $experimentalFields
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
   * @param string $lastUpdatedTimestamp
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
   * @param UserData $thirdPartyUserData
   */
  public function setThirdPartyUserData(UserData $thirdPartyUserData)
  {
    $this->thirdPartyUserData = $thirdPartyUserData;
  }
  /**
   * @return UserData
   */
  public function getThirdPartyUserData()
  {
    return $this->thirdPartyUserData;
  }
  /**
   * @param string $transactionId
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
   * @param UserData $userData
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
   * @param string $userId
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
   * @param UserProperties $userProperties
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
