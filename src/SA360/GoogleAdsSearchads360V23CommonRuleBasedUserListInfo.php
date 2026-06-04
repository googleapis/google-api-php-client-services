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

class GoogleAdsSearchads360V23CommonRuleBasedUserListInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const PREPOPULATION_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PREPOPULATION_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Prepopoulation is being requested.
   */
  public const PREPOPULATION_STATUS_REQUESTED = 'REQUESTED';
  /**
   * Prepopulation is finished.
   */
  public const PREPOPULATION_STATUS_FINISHED = 'FINISHED';
  /**
   * Prepopulation failed.
   */
  public const PREPOPULATION_STATUS_FAILED = 'FAILED';
  protected $flexibleRuleUserListType = GoogleAdsSearchads360V23CommonFlexibleRuleUserListInfo::class;
  protected $flexibleRuleUserListDataType = '';
  /**
   * The status of pre-population. The field is default to NONE if not set which
   * means the previous users will not be considered. If set to REQUESTED, past
   * site visitors or app users who match the list definition will be included
   * in the list (works on the Display Network only). This will only add past
   * users from within the last 30 days, depending on the list's membership
   * duration and the date when the remarketing tag is added. The status will be
   * updated to FINISHED once request is processed, or FAILED if the request
   * fails.
   *
   * @var string
   */
  public $prepopulationStatus;

  /**
   * Flexible rule representation of visitors with one or multiple actions. The
   * flexible user list is defined by two lists of operands – inclusive_operands
   * and exclusive_operands; each operand represents a set of users based on
   * actions they took in a given timeframe. These lists of operands are
   * combined with the AND_NOT operator, so that users represented by the
   * inclusive operands are included in the user list, minus the users
   * represented by the exclusive operands.
   *
   * @param GoogleAdsSearchads360V23CommonFlexibleRuleUserListInfo $flexibleRuleUserList
   */
  public function setFlexibleRuleUserList(GoogleAdsSearchads360V23CommonFlexibleRuleUserListInfo $flexibleRuleUserList)
  {
    $this->flexibleRuleUserList = $flexibleRuleUserList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonFlexibleRuleUserListInfo
   */
  public function getFlexibleRuleUserList()
  {
    return $this->flexibleRuleUserList;
  }
  /**
   * The status of pre-population. The field is default to NONE if not set which
   * means the previous users will not be considered. If set to REQUESTED, past
   * site visitors or app users who match the list definition will be included
   * in the list (works on the Display Network only). This will only add past
   * users from within the last 30 days, depending on the list's membership
   * duration and the date when the remarketing tag is added. The status will be
   * updated to FINISHED once request is processed, or FAILED if the request
   * fails.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, REQUESTED, FINISHED, FAILED
   *
   * @param self::PREPOPULATION_STATUS_* $prepopulationStatus
   */
  public function setPrepopulationStatus($prepopulationStatus)
  {
    $this->prepopulationStatus = $prepopulationStatus;
  }
  /**
   * @return self::PREPOPULATION_STATUS_*
   */
  public function getPrepopulationStatus()
  {
    return $this->prepopulationStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonRuleBasedUserListInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonRuleBasedUserListInfo');
