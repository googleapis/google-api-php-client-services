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
   * Optional. Defines which Destination to send the audience member to.
   *
   * @var string[]
   */
  public $destinationReferences;
  protected $mobileDataType = MobileData::class;
  protected $mobileDataDataType = '';
  protected $pairDataType = PairData::class;
  protected $pairDataDataType = '';
  protected $ppidDataType = PpidData::class;
  protected $ppidDataDataType = '';
  protected $userDataType = UserData::class;
  protected $userDataDataType = '';
  protected $userIdDataType = UserIdData::class;
  protected $userIdDataDataType = '';

  /**
   * Optional. The consent setting for the user.
   *
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
  /**
   * Optional. Defines which Destination to send the audience member to.
   *
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
   * Data identifying the user's mobile devices.
   *
   * @param MobileData $mobileData
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
   * [Publisher Advertiser Identity Reconciliation (PAIR)
   * IDs](//support.google.com/admanager/answer/15067908). This feature is only
   * available to data partners.
   *
   * @param PairData $pairData
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
   * Data related to publisher provided identifiers. This feature is only
   * available to data partners.
   *
   * @param PpidData $ppidData
   */
  public function setPpidData(PpidData $ppidData)
  {
    $this->ppidData = $ppidData;
  }
  /**
   * @return PpidData
   */
  public function getPpidData()
  {
    return $this->ppidData;
  }
  /**
   * User-provided data that identifies the user.
   *
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
   * Data related to unique identifiers for a user, as defined by the
   * advertiser.
   *
   * @param UserIdData $userIdData
   */
  public function setUserIdData(UserIdData $userIdData)
  {
    $this->userIdData = $userIdData;
  }
  /**
   * @return UserIdData
   */
  public function getUserIdData()
  {
    return $this->userIdData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudienceMember::class, 'Google_Service_DataManager_AudienceMember');
