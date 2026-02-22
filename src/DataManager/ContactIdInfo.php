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

class ContactIdInfo extends \Google\Model
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
   * Optional. Immutable. Source of the upload data
   *
   * @var string
   */
  public $dataSourceType;
  /**
   * Output only. Match rate for customer match user lists.
   *
   * @var int
   */
  public $matchRatePercentage;

  /**
   * Optional. Immutable. Source of the upload data
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
   * Output only. Match rate for customer match user lists.
   *
   * @param int $matchRatePercentage
   */
  public function setMatchRatePercentage($matchRatePercentage)
  {
    $this->matchRatePercentage = $matchRatePercentage;
  }
  /**
   * @return int
   */
  public function getMatchRatePercentage()
  {
    return $this->matchRatePercentage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContactIdInfo::class, 'Google_Service_DataManager_ContactIdInfo');
