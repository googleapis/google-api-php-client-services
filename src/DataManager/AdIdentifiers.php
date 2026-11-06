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
   * @var string
   */
  public $dclid;
  protected $encryptedUserIdsType = EncryptedUserId::class;
  protected $encryptedUserIdsDataType = 'array';
  /**
   * @var string
   */
  public $gbraid;
  /**
   * @var string
   */
  public $gclid;
  /**
   * @var string
   */
  public $impressionId;
  protected $landingPageDeviceInfoType = DeviceInfo::class;
  protected $landingPageDeviceInfoDataType = '';
  /**
   * @var string
   */
  public $leadId;
  /**
   * @var string
   */
  public $matchId;
  /**
   * @var string
   */
  public $mobileDeviceId;
  /**
   * @var string
   */
  public $ppid;
  /**
   * @var string
   */
  public $sessionAttributes;
  /**
   * @var string
   */
  public $visitorPpid;
  /**
   * @var string
   */
  public $wbraid;

  /**
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
   * @param string $leadId
   */
  public function setLeadId($leadId)
  {
    $this->leadId = $leadId;
  }
  /**
   * @return string
   */
  public function getLeadId()
  {
    return $this->leadId;
  }
  /**
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
   * @param string $ppid
   */
  public function setPpid($ppid)
  {
    $this->ppid = $ppid;
  }
  /**
   * @return string
   */
  public function getPpid()
  {
    return $this->ppid;
  }
  /**
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
   * @param string $visitorPpid
   */
  public function setVisitorPpid($visitorPpid)
  {
    $this->visitorPpid = $visitorPpid;
  }
  /**
   * @return string
   */
  public function getVisitorPpid()
  {
    return $this->visitorPpid;
  }
  /**
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
