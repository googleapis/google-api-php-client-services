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

class AdIdentifiers extends \Google\Collection
{
  protected $collection_key = 'encryptedUserIds';
  /**
   * Optional. The display click ID associated with this event.
   *
   * @var string
   */
  public $dclid;
  protected $encryptedUserIdsType = EncryptedUserId::class;
  protected $encryptedUserIdsDataType = 'array';
  /**
   * Optional. The click identifier for clicks associated with app events and
   * originating from iOS devices starting with iOS14.
   *
   * @var string
   */
  public $gbraid;
  /**
   * Optional. The Google click ID (gclid) associated with this event.
   *
   * @var string
   */
  public $gclid;
  /**
   * Optional. The impression ID associated with this event.
   *
   * @var string
   */
  public $impressionId;
  protected $landingPageDeviceInfoType = DeviceInfo::class;
  protected $landingPageDeviceInfoDataType = '';
  /**
   * Optional. The match ID field used to join this event with a previous event.
   *
   * @var string
   */
  public $matchId;
  /**
   * Optional. The mobile identifier for advertisers. This would be IDFA on iOS,
   * AdID on Android, or other platforms’ identifiers for advertisers.
   *
   * @var string
   */
  public $mobileDeviceId;
  /**
   * Optional. Session attributes for event attribution and modeling.
   *
   * @var string
   */
  public $sessionAttributes;
  /**
   * Optional. The click identifier for clicks associated with web events and
   * originating from iOS devices starting with iOS14.
   *
   * @var string
   */
  public $wbraid;

  /**
   * Optional. The display click ID associated with this event.
   *
   * @param string $dclid
   */
  public function setDclid($dclid)
  {
    $this->dclid = $dclid;
  }
  /**
   * @return string
   */
  public function getDclid()
  {
    return $this->dclid;
  }
  /**
   * Optional. Any number of encrypted user IDs.
   *
   * @param EncryptedUserId[] $encryptedUserIds
   */
  public function setEncryptedUserIds($encryptedUserIds)
  {
    $this->encryptedUserIds = $encryptedUserIds;
  }
  /**
   * @return EncryptedUserId[]
   */
  public function getEncryptedUserIds()
  {
    return $this->encryptedUserIds;
  }
  /**
   * Optional. The click identifier for clicks associated with app events and
   * originating from iOS devices starting with iOS14.
   *
   * @param string $gbraid
   */
  public function setGbraid($gbraid)
  {
    $this->gbraid = $gbraid;
  }
  /**
   * @return string
   */
  public function getGbraid()
  {
    return $this->gbraid;
  }
  /**
   * Optional. The Google click ID (gclid) associated with this event.
   *
   * @param string $gclid
   */
  public function setGclid($gclid)
  {
    $this->gclid = $gclid;
  }
  /**
   * @return string
   */
  public function getGclid()
  {
    return $this->gclid;
  }
  /**
   * Optional. The impression ID associated with this event.
   *
   * @param string $impressionId
   */
  public function setImpressionId($impressionId)
  {
    $this->impressionId = $impressionId;
  }
  /**
   * @return string
   */
  public function getImpressionId()
  {
    return $this->impressionId;
  }
  /**
   * Optional. Information gathered about the device being used (if any) at the
   * time of landing onto the advertiser’s site after interacting with the ad.
   *
   * @param DeviceInfo $landingPageDeviceInfo
   */
  public function setLandingPageDeviceInfo(DeviceInfo $landingPageDeviceInfo)
  {
    $this->landingPageDeviceInfo = $landingPageDeviceInfo;
  }
  /**
   * @return DeviceInfo
   */
  public function getLandingPageDeviceInfo()
  {
    return $this->landingPageDeviceInfo;
  }
  /**
   * Optional. The match ID field used to join this event with a previous event.
   *
   * @param string $matchId
   */
  public function setMatchId($matchId)
  {
    $this->matchId = $matchId;
  }
  /**
   * @return string
   */
  public function getMatchId()
  {
    return $this->matchId;
  }
  /**
   * Optional. The mobile identifier for advertisers. This would be IDFA on iOS,
   * AdID on Android, or other platforms’ identifiers for advertisers.
   *
   * @param string $mobileDeviceId
   */
  public function setMobileDeviceId($mobileDeviceId)
  {
    $this->mobileDeviceId = $mobileDeviceId;
  }
  /**
   * @return string
   */
  public function getMobileDeviceId()
  {
    return $this->mobileDeviceId;
  }
  /**
   * Optional. Session attributes for event attribution and modeling.
   *
   * @param string $sessionAttributes
   */
  public function setSessionAttributes($sessionAttributes)
  {
    $this->sessionAttributes = $sessionAttributes;
  }
  /**
   * @return string
   */
  public function getSessionAttributes()
  {
    return $this->sessionAttributes;
  }
  /**
   * Optional. The click identifier for clicks associated with web events and
   * originating from iOS devices starting with iOS14.
   *
   * @param string $wbraid
   */
  public function setWbraid($wbraid)
  {
    $this->wbraid = $wbraid;
  }
  /**
   * @return string
   */
  public function getWbraid()
  {
    return $this->wbraid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdIdentifiers::class, 'Google_Service_DataManager_AdIdentifiers');
