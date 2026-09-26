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

class RemoveUsersRequest extends \Google\Collection
{
  public const ENCODING_ENCODING_UNSPECIFIED = 'ENCODING_UNSPECIFIED';
  public const ENCODING_HEX = 'HEX';
  public const ENCODING_BASE64 = 'BASE64';
  protected $collection_key = 'userData';
  protected $destinationsType = Destination::class;
  protected $destinationsDataType = 'array';
  /**
   * @var string
   */
  public $encoding;
  protected $encryptionInfoType = EncryptionInfo::class;
  protected $encryptionInfoDataType = '';
  protected $userDataType = UserData::class;
  protected $userDataDataType = 'array';
  /**
   * @var bool
   */
  public $validateOnly;

  /**
   * @param Destination[] $destinations
   */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /**
   * @return Destination[]
   */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /**
   * @param self::ENCODING_* $encoding
   */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /**
   * @return self::ENCODING_*
   */
  public function getEncoding()
  {
    return $this->encoding;
  }
  /**
   * @param EncryptionInfo $encryptionInfo
   */
  public function setEncryptionInfo(EncryptionInfo $encryptionInfo)
  {
    $this->encryptionInfo = $encryptionInfo;
  }
  /**
   * @return EncryptionInfo
   */
  public function getEncryptionInfo()
  {
    return $this->encryptionInfo;
  }
  /**
   * @param UserData[] $userData
   */
  public function setUserData($userData)
  {
    $this->userData = $userData;
  }
  /**
   * @return UserData[]
   */
  public function getUserData()
  {
    return $this->userData;
  }
  /**
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RemoveUsersRequest::class, 'Google_Service_DataManager_RemoveUsersRequest');
