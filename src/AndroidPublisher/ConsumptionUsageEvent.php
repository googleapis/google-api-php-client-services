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

namespace Google\Service\AndroidPublisher;

class ConsumptionUsageEvent extends \Google\Model
{
  /**
   * Optional. Free form text that allows developers to provide more info on the
   * item consumed. Maximum length is 5000 characters.
   *
   * @var string
   */
  public $consumptionItemDescription;
  /**
   * Optional. Time when the user consumed, used, downloaded, opened, or
   * streamed the content.
   *
   * @var string
   */
  public $consumptionTime;
  /**
   * Optional. The IP address from which the consumption occurred.
   *
   * @var string
   */
  public $ipAddress;
  protected $locationType = CoarseLocation::class;
  protected $locationDataType = '';
  /**
   * Optional. Obfuscated string that is uniquely associated with the
   * purchaser's user account in the app. https://developer.android.com/referenc
   * e/com/android/billingclient/api/BillingFlowParams.Builder#setObfuscatedAcco
   * untId(java.lang.String)
   *
   * @var string
   */
  public $obfuscatedAccountId;
  /**
   * Optional. Obfuscated string that is uniquely associated with the
   * purchaser's user profile in the app. https://developer.android.com/referenc
   * e/com/android/billingclient/api/BillingFlowParams.Builder#setObfuscatedProf
   * ileId(java.lang.String)
   *
   * @var string
   */
  public $obfuscatedProfileId;

  /**
   * Optional. Free form text that allows developers to provide more info on the
   * item consumed. Maximum length is 5000 characters.
   *
   * @param string $consumptionItemDescription
   */
  public function setConsumptionItemDescription($consumptionItemDescription)
  {
    $this->consumptionItemDescription = $consumptionItemDescription;
  }
  /**
   * @return string
   */
  public function getConsumptionItemDescription()
  {
    return $this->consumptionItemDescription;
  }
  /**
   * Optional. Time when the user consumed, used, downloaded, opened, or
   * streamed the content.
   *
   * @param string $consumptionTime
   */
  public function setConsumptionTime($consumptionTime)
  {
    $this->consumptionTime = $consumptionTime;
  }
  /**
   * @return string
   */
  public function getConsumptionTime()
  {
    return $this->consumptionTime;
  }
  /**
   * Optional. The IP address from which the consumption occurred.
   *
   * @param string $ipAddress
   */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /**
   * @return string
   */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /**
   * Optional. Geographic location where the consumption occurred.
   *
   * @param CoarseLocation $location
   */
  public function setLocation(CoarseLocation $location)
  {
    $this->location = $location;
  }
  /**
   * @return CoarseLocation
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Optional. Obfuscated string that is uniquely associated with the
   * purchaser's user account in the app. https://developer.android.com/referenc
   * e/com/android/billingclient/api/BillingFlowParams.Builder#setObfuscatedAcco
   * untId(java.lang.String)
   *
   * @param string $obfuscatedAccountId
   */
  public function setObfuscatedAccountId($obfuscatedAccountId)
  {
    $this->obfuscatedAccountId = $obfuscatedAccountId;
  }
  /**
   * @return string
   */
  public function getObfuscatedAccountId()
  {
    return $this->obfuscatedAccountId;
  }
  /**
   * Optional. Obfuscated string that is uniquely associated with the
   * purchaser's user profile in the app. https://developer.android.com/referenc
   * e/com/android/billingclient/api/BillingFlowParams.Builder#setObfuscatedProf
   * ileId(java.lang.String)
   *
   * @param string $obfuscatedProfileId
   */
  public function setObfuscatedProfileId($obfuscatedProfileId)
  {
    $this->obfuscatedProfileId = $obfuscatedProfileId;
  }
  /**
   * @return string
   */
  public function getObfuscatedProfileId()
  {
    return $this->obfuscatedProfileId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConsumptionUsageEvent::class, 'Google_Service_AndroidPublisher_ConsumptionUsageEvent');
