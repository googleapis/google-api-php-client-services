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

class MobileIdInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DATA_SOURCE_TYPE_DATA_SOURCE_TYPE_UNSPECIFIED = 'DATA_SOURCE_TYPE_UNSPECIFIED';
  /**
   * The uploaded data is first-party data.
   */
  public const DATA_SOURCE_TYPE_DATA_SOURCE_TYPE_FIRST_PARTY = 'DATA_SOURCE_TYPE_FIRST_PARTY';
  /**
   * The uploaded data is from a third-party credit bureau.
   */
  public const DATA_SOURCE_TYPE_DATA_SOURCE_TYPE_THIRD_PARTY_CREDIT_BUREAU = 'DATA_SOURCE_TYPE_THIRD_PARTY_CREDIT_BUREAU';
  /**
   * The uploaded data is from a third-party voter file.
   */
  public const DATA_SOURCE_TYPE_DATA_SOURCE_TYPE_THIRD_PARTY_VOTER_FILE = 'DATA_SOURCE_TYPE_THIRD_PARTY_VOTER_FILE';
  /**
   * The uploaded data is third party partner data.
   */
  public const DATA_SOURCE_TYPE_DATA_SOURCE_TYPE_THIRD_PARTY_PARTNER_DATA = 'DATA_SOURCE_TYPE_THIRD_PARTY_PARTNER_DATA';
  /**
   * Not specified.
   */
  public const KEY_SPACE_KEY_SPACE_UNSPECIFIED = 'KEY_SPACE_UNSPECIFIED';
  /**
   * The iOS keyspace.
   */
  public const KEY_SPACE_IOS = 'IOS';
  /**
   * The Android keyspace.
   */
  public const KEY_SPACE_ANDROID = 'ANDROID';
  /**
   * Required. Immutable. A string that uniquely identifies a mobile application
   * from which the data was collected.
   *
   * @var string
   */
  public $appId;
  /**
   * Optional. Immutable. Source of the upload data.
   *
   * @var string
   */
  public $dataSourceType;
  /**
   * Required. Immutable. The key space of mobile IDs.
   *
   * @var string
   */
  public $keySpace;

  /**
   * Required. Immutable. A string that uniquely identifies a mobile application
   * from which the data was collected.
   *
   * @param string $appId
   */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /**
   * @return string
   */
  public function getAppId()
  {
    return $this->appId;
  }
  /**
   * Optional. Immutable. Source of the upload data.
   *
   * Accepted values: DATA_SOURCE_TYPE_UNSPECIFIED,
   * DATA_SOURCE_TYPE_FIRST_PARTY, DATA_SOURCE_TYPE_THIRD_PARTY_CREDIT_BUREAU,
   * DATA_SOURCE_TYPE_THIRD_PARTY_VOTER_FILE,
   * DATA_SOURCE_TYPE_THIRD_PARTY_PARTNER_DATA
   *
   * @param self::DATA_SOURCE_TYPE_* $dataSourceType
   */
  public function setDataSourceType($dataSourceType)
  {
    $this->dataSourceType = $dataSourceType;
  }
  /**
   * @return self::DATA_SOURCE_TYPE_*
   */
  public function getDataSourceType()
  {
    return $this->dataSourceType;
  }
  /**
   * Required. Immutable. The key space of mobile IDs.
   *
   * Accepted values: KEY_SPACE_UNSPECIFIED, IOS, ANDROID
   *
   * @param self::KEY_SPACE_* $keySpace
   */
  public function setKeySpace($keySpace)
  {
    $this->keySpace = $keySpace;
  }
  /**
   * @return self::KEY_SPACE_*
   */
  public function getKeySpace()
  {
    return $this->keySpace;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MobileIdInfo::class, 'Google_Service_DataManager_MobileIdInfo');
