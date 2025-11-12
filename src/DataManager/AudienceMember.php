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

class AudienceMember extends \Google\Collection
{
  protected $collection_key = 'destinationReferences';
  protected $consentType = Consent::class;
  protected $consentDataType = '';
  /**
   * @var string[]
   */
  public $destinationReferences;
  protected $mobileDataType = MobileData::class;
  protected $mobileDataDataType = '';
  protected $pairDataType = PairData::class;
  protected $pairDataDataType = '';
  protected $userDataType = UserData::class;
  protected $userDataDataType = '';

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
   * @param MobileData
   */
  public function setMobileData(MobileData $mobileData)
  {
    $this->mobileData = $mobileData;
  }
  /**
   * @return MobileData
   */
  public function getMobileData()
  {
    return $this->mobileData;
  }
  /**
   * @param PairData
   */
  public function setPairData(PairData $pairData)
  {
    $this->pairData = $pairData;
  }
  /**
   * @return PairData
   */
  public function getPairData()
  {
    return $this->pairData;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudienceMember::class, 'Google_Service_DataManager_AudienceMember');
