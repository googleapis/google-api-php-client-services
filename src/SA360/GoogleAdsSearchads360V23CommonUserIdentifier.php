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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonUserIdentifier extends \Google\Model
{
  /**
   * Not specified.
   */
  public const USER_IDENTIFIER_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version
   */
  public const USER_IDENTIFIER_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Indicates that the user identifier was provided by the first party
   * (advertiser).
   */
  public const USER_IDENTIFIER_SOURCE_FIRST_PARTY = 'FIRST_PARTY';
  /**
   * Indicates that the user identifier was provided by the third party
   * (partner).
   */
  public const USER_IDENTIFIER_SOURCE_THIRD_PARTY = 'THIRD_PARTY';
  protected $addressInfoType = GoogleAdsSearchads360V23CommonOfflineUserAddressInfo::class;
  protected $addressInfoDataType = '';
  /**
   * Hashed email address using SHA-256 hash function after normalization.
   *
   * @var string
   */
  public $hashedEmail;
  /**
   * Hashed phone number using SHA-256 hash function after normalization (E164
   * standard).
   *
   * @var string
   */
  public $hashedPhoneNumber;
  /**
   * Mobile device ID (advertising ID/IDFA).
   *
   * @var string
   */
  public $mobileId;
  /**
   * Advertiser-assigned user ID for Customer Match upload, or third-party-
   * assigned user ID for
   *
   * @var string
   */
  public $thirdPartyUserId;
  /**
   * Source of the user identifier when the upload is from Store Sales
   *
   * @var string
   */
  public $userIdentifierSource;

  /**
   * Address information.
   *
   * @param GoogleAdsSearchads360V23CommonOfflineUserAddressInfo $addressInfo
   */
  public function setAddressInfo(GoogleAdsSearchads360V23CommonOfflineUserAddressInfo $addressInfo)
  {
    $this->addressInfo = $addressInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonOfflineUserAddressInfo
   */
  public function getAddressInfo()
  {
    return $this->addressInfo;
  }
  /**
   * Hashed email address using SHA-256 hash function after normalization.
   *
   * @param string $hashedEmail
   */
  public function setHashedEmail($hashedEmail)
  {
    $this->hashedEmail = $hashedEmail;
  }
  /**
   * @return string
   */
  public function getHashedEmail()
  {
    return $this->hashedEmail;
  }
  /**
   * Hashed phone number using SHA-256 hash function after normalization (E164
   * standard).
   *
   * @param string $hashedPhoneNumber
   */
  public function setHashedPhoneNumber($hashedPhoneNumber)
  {
    $this->hashedPhoneNumber = $hashedPhoneNumber;
  }
  /**
   * @return string
   */
  public function getHashedPhoneNumber()
  {
    return $this->hashedPhoneNumber;
  }
  /**
   * Mobile device ID (advertising ID/IDFA).
   *
   * @param string $mobileId
   */
  public function setMobileId($mobileId)
  {
    $this->mobileId = $mobileId;
  }
  /**
   * @return string
   */
  public function getMobileId()
  {
    return $this->mobileId;
  }
  /**
   * Advertiser-assigned user ID for Customer Match upload, or third-party-
   * assigned user ID for
   *
   * @param string $thirdPartyUserId
   */
  public function setThirdPartyUserId($thirdPartyUserId)
  {
    $this->thirdPartyUserId = $thirdPartyUserId;
  }
  /**
   * @return string
   */
  public function getThirdPartyUserId()
  {
    return $this->thirdPartyUserId;
  }
  /**
   * Source of the user identifier when the upload is from Store Sales
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FIRST_PARTY, THIRD_PARTY
   *
   * @param self::USER_IDENTIFIER_SOURCE_* $userIdentifierSource
   */
  public function setUserIdentifierSource($userIdentifierSource)
  {
    $this->userIdentifierSource = $userIdentifierSource;
  }
  /**
   * @return self::USER_IDENTIFIER_SOURCE_*
   */
  public function getUserIdentifierSource()
  {
    return $this->userIdentifierSource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonUserIdentifier::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserIdentifier');
