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

namespace Google\Service\Firebaseappcheck;

class GoogleFirebaseAppcheckV1PlayIntegrityConfig extends \Google\Model
{
  protected $accountDetailsType = GoogleFirebaseAppcheckV1PlayIntegrityConfigAccountDetails::class;
  protected $accountDetailsDataType = '';
  protected $appIntegrityType = GoogleFirebaseAppcheckV1PlayIntegrityConfigAppIntegrity::class;
  protected $appIntegrityDataType = '';
  protected $deviceIntegrityType = GoogleFirebaseAppcheckV1PlayIntegrityConfigDeviceIntegrity::class;
  protected $deviceIntegrityDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $tokenTtl;

  /**
   * @param GoogleFirebaseAppcheckV1PlayIntegrityConfigAccountDetails
   */
  public function setAccountDetails(GoogleFirebaseAppcheckV1PlayIntegrityConfigAccountDetails $accountDetails)
  {
    $this->accountDetails = $accountDetails;
  }
  /**
   * @return GoogleFirebaseAppcheckV1PlayIntegrityConfigAccountDetails
   */
  public function getAccountDetails()
  {
    return $this->accountDetails;
  }
  /**
   * @param GoogleFirebaseAppcheckV1PlayIntegrityConfigAppIntegrity
   */
  public function setAppIntegrity(GoogleFirebaseAppcheckV1PlayIntegrityConfigAppIntegrity $appIntegrity)
  {
    $this->appIntegrity = $appIntegrity;
  }
  /**
   * @return GoogleFirebaseAppcheckV1PlayIntegrityConfigAppIntegrity
   */
  public function getAppIntegrity()
  {
    return $this->appIntegrity;
  }
  /**
   * @param GoogleFirebaseAppcheckV1PlayIntegrityConfigDeviceIntegrity
   */
  public function setDeviceIntegrity(GoogleFirebaseAppcheckV1PlayIntegrityConfigDeviceIntegrity $deviceIntegrity)
  {
    $this->deviceIntegrity = $deviceIntegrity;
  }
  /**
   * @return GoogleFirebaseAppcheckV1PlayIntegrityConfigDeviceIntegrity
   */
  public function getDeviceIntegrity()
  {
    return $this->deviceIntegrity;
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
   * @param string
   */
  public function setTokenTtl($tokenTtl)
  {
    $this->tokenTtl = $tokenTtl;
  }
  /**
   * @return string
   */
  public function getTokenTtl()
  {
    return $this->tokenTtl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirebaseAppcheckV1PlayIntegrityConfig::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1PlayIntegrityConfig');
