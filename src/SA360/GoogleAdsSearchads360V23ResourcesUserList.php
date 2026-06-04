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

class GoogleAdsSearchads360V23ResourcesUserList extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ACCESS_REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ACCESS_REASON_UNKNOWN = 'UNKNOWN';
  /**
   * The resource is owned by the user.
   */
  public const ACCESS_REASON_OWNED = 'OWNED';
  /**
   * The resource is shared to the user.
   */
  public const ACCESS_REASON_SHARED = 'SHARED';
  /**
   * The resource is licensed to the user.
   */
  public const ACCESS_REASON_LICENSED = 'LICENSED';
  /**
   * The user subscribed to the resource.
   */
  public const ACCESS_REASON_SUBSCRIBED = 'SUBSCRIBED';
  /**
   * The resource is accessible to the user.
   */
  public const ACCESS_REASON_AFFILIATED = 'AFFILIATED';
  /**
   * Not specified.
   */
  public const ACCOUNT_USER_LIST_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ACCOUNT_USER_LIST_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The access is enabled.
   */
  public const ACCOUNT_USER_LIST_STATUS_ENABLED = 'ENABLED';
  /**
   * The access is disabled.
   */
  public const ACCOUNT_USER_LIST_STATUS_DISABLED = 'DISABLED';
  /**
   * Not specified.
   */
  public const CLOSING_REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CLOSING_REASON_UNKNOWN = 'UNKNOWN';
  /**
   * The userlist was closed because of not being used for over one year.
   */
  public const CLOSING_REASON_UNUSED = 'UNUSED';
  /**
   * Not specified.
   */
  public const MEMBERSHIP_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const MEMBERSHIP_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Open status - List is accruing members and can be targeted to.
   */
  public const MEMBERSHIP_STATUS_OPEN = 'OPEN';
  /**
   * Closed status - No new members being added. Cannot be used for targeting.
   */
  public const MEMBERSHIP_STATUS_CLOSED = 'CLOSED';
  /**
   * Not specified.
   */
  public const SIZE_RANGE_FOR_DISPLAY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SIZE_RANGE_FOR_DISPLAY_UNKNOWN = 'UNKNOWN';
  /**
   * User list has less than 500 users.
   */
  public const SIZE_RANGE_FOR_DISPLAY_LESS_THAN_FIVE_HUNDRED = 'LESS_THAN_FIVE_HUNDRED';
  /**
   * User list has number of users in range of 500 to 1000.
   */
  public const SIZE_RANGE_FOR_DISPLAY_LESS_THAN_ONE_THOUSAND = 'LESS_THAN_ONE_THOUSAND';
  /**
   * User list has number of users in range of 1000 to 10000.
   */
  public const SIZE_RANGE_FOR_DISPLAY_ONE_THOUSAND_TO_TEN_THOUSAND = 'ONE_THOUSAND_TO_TEN_THOUSAND';
  /**
   * User list has number of users in range of 10000 to 50000.
   */
  public const SIZE_RANGE_FOR_DISPLAY_TEN_THOUSAND_TO_FIFTY_THOUSAND = 'TEN_THOUSAND_TO_FIFTY_THOUSAND';
  /**
   * User list has number of users in range of 50000 to 100000.
   */
  public const SIZE_RANGE_FOR_DISPLAY_FIFTY_THOUSAND_TO_ONE_HUNDRED_THOUSAND = 'FIFTY_THOUSAND_TO_ONE_HUNDRED_THOUSAND';
  /**
   * User list has number of users in range of 100000 to 300000.
   */
  public const SIZE_RANGE_FOR_DISPLAY_ONE_HUNDRED_THOUSAND_TO_THREE_HUNDRED_THOUSAND = 'ONE_HUNDRED_THOUSAND_TO_THREE_HUNDRED_THOUSAND';
  /**
   * User list has number of users in range of 300000 to 500000.
   */
  public const SIZE_RANGE_FOR_DISPLAY_THREE_HUNDRED_THOUSAND_TO_FIVE_HUNDRED_THOUSAND = 'THREE_HUNDRED_THOUSAND_TO_FIVE_HUNDRED_THOUSAND';
  /**
   * User list has number of users in range of 500000 to 1 million.
   */
  public const SIZE_RANGE_FOR_DISPLAY_FIVE_HUNDRED_THOUSAND_TO_ONE_MILLION = 'FIVE_HUNDRED_THOUSAND_TO_ONE_MILLION';
  /**
   * User list has number of users in range of 1 to 2 millions.
   */
  public const SIZE_RANGE_FOR_DISPLAY_ONE_MILLION_TO_TWO_MILLION = 'ONE_MILLION_TO_TWO_MILLION';
  /**
   * User list has number of users in range of 2 to 3 millions.
   */
  public const SIZE_RANGE_FOR_DISPLAY_TWO_MILLION_TO_THREE_MILLION = 'TWO_MILLION_TO_THREE_MILLION';
  /**
   * User list has number of users in range of 3 to 5 millions.
   */
  public const SIZE_RANGE_FOR_DISPLAY_THREE_MILLION_TO_FIVE_MILLION = 'THREE_MILLION_TO_FIVE_MILLION';
  /**
   * User list has number of users in range of 5 to 10 millions.
   */
  public const SIZE_RANGE_FOR_DISPLAY_FIVE_MILLION_TO_TEN_MILLION = 'FIVE_MILLION_TO_TEN_MILLION';
  /**
   * User list has number of users in range of 10 to 20 millions.
   */
  public const SIZE_RANGE_FOR_DISPLAY_TEN_MILLION_TO_TWENTY_MILLION = 'TEN_MILLION_TO_TWENTY_MILLION';
  /**
   * User list has number of users in range of 20 to 30 millions.
   */
  public const SIZE_RANGE_FOR_DISPLAY_TWENTY_MILLION_TO_THIRTY_MILLION = 'TWENTY_MILLION_TO_THIRTY_MILLION';
  /**
   * User list has number of users in range of 30 to 50 millions.
   */
  public const SIZE_RANGE_FOR_DISPLAY_THIRTY_MILLION_TO_FIFTY_MILLION = 'THIRTY_MILLION_TO_FIFTY_MILLION';
  /**
   * User list has over 50 million users.
   */
  public const SIZE_RANGE_FOR_DISPLAY_OVER_FIFTY_MILLION = 'OVER_FIFTY_MILLION';
  /**
   * Not specified.
   */
  public const SIZE_RANGE_FOR_SEARCH_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SIZE_RANGE_FOR_SEARCH_UNKNOWN = 'UNKNOWN';
  /**
   * User list has less than 500 users.
   */
  public const SIZE_RANGE_FOR_SEARCH_LESS_THAN_FIVE_HUNDRED = 'LESS_THAN_FIVE_HUNDRED';
  /**
   * User list has number of users in range of 500 to 1000.
   */
  public const SIZE_RANGE_FOR_SEARCH_LESS_THAN_ONE_THOUSAND = 'LESS_THAN_ONE_THOUSAND';
  /**
   * User list has number of users in range of 1000 to 10000.
   */
  public const SIZE_RANGE_FOR_SEARCH_ONE_THOUSAND_TO_TEN_THOUSAND = 'ONE_THOUSAND_TO_TEN_THOUSAND';
  /**
   * User list has number of users in range of 10000 to 50000.
   */
  public const SIZE_RANGE_FOR_SEARCH_TEN_THOUSAND_TO_FIFTY_THOUSAND = 'TEN_THOUSAND_TO_FIFTY_THOUSAND';
  /**
   * User list has number of users in range of 50000 to 100000.
   */
  public const SIZE_RANGE_FOR_SEARCH_FIFTY_THOUSAND_TO_ONE_HUNDRED_THOUSAND = 'FIFTY_THOUSAND_TO_ONE_HUNDRED_THOUSAND';
  /**
   * User list has number of users in range of 100000 to 300000.
   */
  public const SIZE_RANGE_FOR_SEARCH_ONE_HUNDRED_THOUSAND_TO_THREE_HUNDRED_THOUSAND = 'ONE_HUNDRED_THOUSAND_TO_THREE_HUNDRED_THOUSAND';
  /**
   * User list has number of users in range of 300000 to 500000.
   */
  public const SIZE_RANGE_FOR_SEARCH_THREE_HUNDRED_THOUSAND_TO_FIVE_HUNDRED_THOUSAND = 'THREE_HUNDRED_THOUSAND_TO_FIVE_HUNDRED_THOUSAND';
  /**
   * User list has number of users in range of 500000 to 1 million.
   */
  public const SIZE_RANGE_FOR_SEARCH_FIVE_HUNDRED_THOUSAND_TO_ONE_MILLION = 'FIVE_HUNDRED_THOUSAND_TO_ONE_MILLION';
  /**
   * User list has number of users in range of 1 to 2 millions.
   */
  public const SIZE_RANGE_FOR_SEARCH_ONE_MILLION_TO_TWO_MILLION = 'ONE_MILLION_TO_TWO_MILLION';
  /**
   * User list has number of users in range of 2 to 3 millions.
   */
  public const SIZE_RANGE_FOR_SEARCH_TWO_MILLION_TO_THREE_MILLION = 'TWO_MILLION_TO_THREE_MILLION';
  /**
   * User list has number of users in range of 3 to 5 millions.
   */
  public const SIZE_RANGE_FOR_SEARCH_THREE_MILLION_TO_FIVE_MILLION = 'THREE_MILLION_TO_FIVE_MILLION';
  /**
   * User list has number of users in range of 5 to 10 millions.
   */
  public const SIZE_RANGE_FOR_SEARCH_FIVE_MILLION_TO_TEN_MILLION = 'FIVE_MILLION_TO_TEN_MILLION';
  /**
   * User list has number of users in range of 10 to 20 millions.
   */
  public const SIZE_RANGE_FOR_SEARCH_TEN_MILLION_TO_TWENTY_MILLION = 'TEN_MILLION_TO_TWENTY_MILLION';
  /**
   * User list has number of users in range of 20 to 30 millions.
   */
  public const SIZE_RANGE_FOR_SEARCH_TWENTY_MILLION_TO_THIRTY_MILLION = 'TWENTY_MILLION_TO_THIRTY_MILLION';
  /**
   * User list has number of users in range of 30 to 50 millions.
   */
  public const SIZE_RANGE_FOR_SEARCH_THIRTY_MILLION_TO_FIFTY_MILLION = 'THIRTY_MILLION_TO_FIFTY_MILLION';
  /**
   * User list has over 50 million users.
   */
  public const SIZE_RANGE_FOR_SEARCH_OVER_FIFTY_MILLION = 'OVER_FIFTY_MILLION';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * UserList represented as a collection of conversion types.
   */
  public const TYPE_REMARKETING = 'REMARKETING';
  /**
   * UserList represented as a combination of other user lists/interests.
   */
  public const TYPE_LOGICAL = 'LOGICAL';
  /**
   * UserList created in the Google Ad Manager platform.
   */
  public const TYPE_EXTERNAL_REMARKETING = 'EXTERNAL_REMARKETING';
  /**
   * UserList associated with a rule.
   */
  public const TYPE_RULE_BASED = 'RULE_BASED';
  /**
   * UserList with users similar to users of another UserList.
   */
  public const TYPE_SIMILAR = 'SIMILAR';
  /**
   * UserList of first-party CRM data provided by advertiser in the form of
   * emails or other formats.
   */
  public const TYPE_CRM_BASED = 'CRM_BASED';
  /**
   * LookalikeUserlist, composed of users similar to those of a configurable
   * seed (set of UserLists)
   */
  public const TYPE_LOOKALIKE = 'LOOKALIKE';
  /**
   * Output only. Indicates the reason this account has been granted access to
   * the list. The reason can be SHARED, OWNED, LICENSED or SUBSCRIBED. This
   * field is read-only.
   *
   * @var string
   */
  public $accessReason;
  /**
   * Indicates if this share is still enabled. When a UserList is shared with
   * the user this field is set to ENABLED. Later the userList owner can decide
   * to revoke the share and make it DISABLED. The default value of this field
   * is set to ENABLED.
   *
   * @var string
   */
  public $accountUserListStatus;
  protected $basicUserListType = GoogleAdsSearchads360V23CommonBasicUserListInfo::class;
  protected $basicUserListDataType = '';
  /**
   * Indicating the reason why this user list membership status is closed. It is
   * only populated on lists that were automatically closed due to inactivity,
   * and will be cleared once the list membership status becomes open.
   *
   * @var string
   */
  public $closingReason;
  protected $crmBasedUserListType = GoogleAdsSearchads360V23CommonCrmBasedUserListInfo::class;
  protected $crmBasedUserListDataType = '';
  /**
   * Description of this user list.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Indicates this user list is eligible for Google Display
   * Network. This field is read-only.
   *
   * @var bool
   */
  public $eligibleForDisplay;
  /**
   * Indicates if this user list is eligible for Google Search Network.
   *
   * @var bool
   */
  public $eligibleForSearch;
  /**
   * Output only. Id of the user list.
   *
   * @var string
   */
  public $id;
  /**
   * An ID from external system. It is used by user list sellers to correlate
   * IDs on their systems.
   *
   * @var string
   */
  public $integrationCode;
  protected $logicalUserListType = GoogleAdsSearchads360V23CommonLogicalUserListInfo::class;
  protected $logicalUserListDataType = '';
  protected $lookalikeUserListType = GoogleAdsSearchads360V23CommonLookalikeUserListInfo::class;
  protected $lookalikeUserListDataType = '';
  /**
   * Output only. Indicates match rate for Customer Match lists. The range of
   * this field is [0-100]. This will be null for other list types or when it's
   * not possible to calculate the match rate. This field is read-only.
   *
   * @var int
   */
  public $matchRatePercentage;
  /**
   * Number of days a user's cookie stays on your list since its most recent
   * addition to the list. This field must be between 0 and 540 inclusive.
   * However, for CRM based userlists, this field can be set to 10000 which
   * means no expiration. Beginning on April 7, 2025, using a value of 10000 to
   * indicate no expiration will no longer be supported. This field is ignored
   * for logical_user_list and rule_based_user_list types. Membership to lists
   * of these types depends on the rules defined by the lists.
   *
   * @var string
   */
  public $membershipLifeSpan;
  /**
   * Membership status of this user list. Indicates whether a user list is open
   * or active. Only open user lists can accumulate more users and can be
   * targeted to.
   *
   * @var string
   */
  public $membershipStatus;
  /**
   * Name of this user list. Unique per user list, except in some cases where a
   * user list of the same name has `access_reason` set to `SHARED`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. An option that indicates if a user may edit a list. Depends on
   * the list ownership and list type. For example, external remarketing user
   * lists are not editable. This field is -only.
   *
   * @var bool
   */
  public $readOnly;
  /**
   * Immutable. The resource name of the user list. User list resource names
   * have the form: `customers/{customer_id}/userLists/{user_list_id}`
   *
   * @var string
   */
  public $resourceName;
  protected $ruleBasedUserListType = GoogleAdsSearchads360V23CommonRuleBasedUserListInfo::class;
  protected $ruleBasedUserListDataType = '';
  protected $similarUserListType = GoogleAdsSearchads360V23CommonSimilarUserListInfo::class;
  protected $similarUserListDataType = '';
  /**
   * Output only. Estimated number of users in this user list, on the Google
   * Display Network. This value is if the number of users has not yet been
   * determined. This field is -only.
   *
   * @var string
   */
  public $sizeForDisplay;
  /**
   * Output only. Estimated number of users in this user list in the google.com
   * domain. These are the users available for targeting in Search campaigns.
   * This value is null if the number of users has not yet been determined. This
   * field is read-only.
   *
   * @var string
   */
  public $sizeForSearch;
  /**
   * Output only. Size range in terms of number of users of the UserList, on the
   * Google Display Network. This field is read-only.
   *
   * @var string
   */
  public $sizeRangeForDisplay;
  /**
   * Output only. Size range in terms of number of users of the UserList, for
   * Search ads. This field is read-only.
   *
   * @var string
   */
  public $sizeRangeForSearch;
  /**
   * Output only. Type of this list. This field is read-only.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. Indicates the reason this account has been granted access to
   * the list. The reason can be SHARED, OWNED, LICENSED or SUBSCRIBED. This
   * field is read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OWNED, SHARED, LICENSED, SUBSCRIBED,
   * AFFILIATED
   *
   * @param self::ACCESS_REASON_* $accessReason
   */
  public function setAccessReason($accessReason)
  {
    $this->accessReason = $accessReason;
  }
  /**
   * @return self::ACCESS_REASON_*
   */
  public function getAccessReason()
  {
    return $this->accessReason;
  }
  /**
   * Indicates if this share is still enabled. When a UserList is shared with
   * the user this field is set to ENABLED. Later the userList owner can decide
   * to revoke the share and make it DISABLED. The default value of this field
   * is set to ENABLED.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, DISABLED
   *
   * @param self::ACCOUNT_USER_LIST_STATUS_* $accountUserListStatus
   */
  public function setAccountUserListStatus($accountUserListStatus)
  {
    $this->accountUserListStatus = $accountUserListStatus;
  }
  /**
   * @return self::ACCOUNT_USER_LIST_STATUS_*
   */
  public function getAccountUserListStatus()
  {
    return $this->accountUserListStatus;
  }
  /**
   * User list targeting as a collection of conversion or remarketing actions.
   *
   * @param GoogleAdsSearchads360V23CommonBasicUserListInfo $basicUserList
   */
  public function setBasicUserList(GoogleAdsSearchads360V23CommonBasicUserListInfo $basicUserList)
  {
    $this->basicUserList = $basicUserList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonBasicUserListInfo
   */
  public function getBasicUserList()
  {
    return $this->basicUserList;
  }
  /**
   * Indicating the reason why this user list membership status is closed. It is
   * only populated on lists that were automatically closed due to inactivity,
   * and will be cleared once the list membership status becomes open.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, UNUSED
   *
   * @param self::CLOSING_REASON_* $closingReason
   */
  public function setClosingReason($closingReason)
  {
    $this->closingReason = $closingReason;
  }
  /**
   * @return self::CLOSING_REASON_*
   */
  public function getClosingReason()
  {
    return $this->closingReason;
  }
  /**
   * User list of CRM users provided by the advertiser.
   *
   * @param GoogleAdsSearchads360V23CommonCrmBasedUserListInfo $crmBasedUserList
   */
  public function setCrmBasedUserList(GoogleAdsSearchads360V23CommonCrmBasedUserListInfo $crmBasedUserList)
  {
    $this->crmBasedUserList = $crmBasedUserList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCrmBasedUserListInfo
   */
  public function getCrmBasedUserList()
  {
    return $this->crmBasedUserList;
  }
  /**
   * Description of this user list.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. Indicates this user list is eligible for Google Display
   * Network. This field is read-only.
   *
   * @param bool $eligibleForDisplay
   */
  public function setEligibleForDisplay($eligibleForDisplay)
  {
    $this->eligibleForDisplay = $eligibleForDisplay;
  }
  /**
   * @return bool
   */
  public function getEligibleForDisplay()
  {
    return $this->eligibleForDisplay;
  }
  /**
   * Indicates if this user list is eligible for Google Search Network.
   *
   * @param bool $eligibleForSearch
   */
  public function setEligibleForSearch($eligibleForSearch)
  {
    $this->eligibleForSearch = $eligibleForSearch;
  }
  /**
   * @return bool
   */
  public function getEligibleForSearch()
  {
    return $this->eligibleForSearch;
  }
  /**
   * Output only. Id of the user list.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * An ID from external system. It is used by user list sellers to correlate
   * IDs on their systems.
   *
   * @param string $integrationCode
   */
  public function setIntegrationCode($integrationCode)
  {
    $this->integrationCode = $integrationCode;
  }
  /**
   * @return string
   */
  public function getIntegrationCode()
  {
    return $this->integrationCode;
  }
  /**
   * User list that is a custom combination of user lists.
   *
   * @param GoogleAdsSearchads360V23CommonLogicalUserListInfo $logicalUserList
   */
  public function setLogicalUserList(GoogleAdsSearchads360V23CommonLogicalUserListInfo $logicalUserList)
  {
    $this->logicalUserList = $logicalUserList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLogicalUserListInfo
   */
  public function getLogicalUserList()
  {
    return $this->logicalUserList;
  }
  /**
   * Immutable. Lookalike User List.
   *
   * @param GoogleAdsSearchads360V23CommonLookalikeUserListInfo $lookalikeUserList
   */
  public function setLookalikeUserList(GoogleAdsSearchads360V23CommonLookalikeUserListInfo $lookalikeUserList)
  {
    $this->lookalikeUserList = $lookalikeUserList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLookalikeUserListInfo
   */
  public function getLookalikeUserList()
  {
    return $this->lookalikeUserList;
  }
  /**
   * Output only. Indicates match rate for Customer Match lists. The range of
   * this field is [0-100]. This will be null for other list types or when it's
   * not possible to calculate the match rate. This field is read-only.
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
  /**
   * Number of days a user's cookie stays on your list since its most recent
   * addition to the list. This field must be between 0 and 540 inclusive.
   * However, for CRM based userlists, this field can be set to 10000 which
   * means no expiration. Beginning on April 7, 2025, using a value of 10000 to
   * indicate no expiration will no longer be supported. This field is ignored
   * for logical_user_list and rule_based_user_list types. Membership to lists
   * of these types depends on the rules defined by the lists.
   *
   * @param string $membershipLifeSpan
   */
  public function setMembershipLifeSpan($membershipLifeSpan)
  {
    $this->membershipLifeSpan = $membershipLifeSpan;
  }
  /**
   * @return string
   */
  public function getMembershipLifeSpan()
  {
    return $this->membershipLifeSpan;
  }
  /**
   * Membership status of this user list. Indicates whether a user list is open
   * or active. Only open user lists can accumulate more users and can be
   * targeted to.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OPEN, CLOSED
   *
   * @param self::MEMBERSHIP_STATUS_* $membershipStatus
   */
  public function setMembershipStatus($membershipStatus)
  {
    $this->membershipStatus = $membershipStatus;
  }
  /**
   * @return self::MEMBERSHIP_STATUS_*
   */
  public function getMembershipStatus()
  {
    return $this->membershipStatus;
  }
  /**
   * Name of this user list. Unique per user list, except in some cases where a
   * user list of the same name has `access_reason` set to `SHARED`.
   *
   * @param string $name
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
   * Output only. An option that indicates if a user may edit a list. Depends on
   * the list ownership and list type. For example, external remarketing user
   * lists are not editable. This field is -only.
   *
   * @param bool $readOnly
   */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /**
   * @return bool
   */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  /**
   * Immutable. The resource name of the user list. User list resource names
   * have the form: `customers/{customer_id}/userLists/{user_list_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * User list generated by a rule.
   *
   * @param GoogleAdsSearchads360V23CommonRuleBasedUserListInfo $ruleBasedUserList
   */
  public function setRuleBasedUserList(GoogleAdsSearchads360V23CommonRuleBasedUserListInfo $ruleBasedUserList)
  {
    $this->ruleBasedUserList = $ruleBasedUserList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonRuleBasedUserListInfo
   */
  public function getRuleBasedUserList()
  {
    return $this->ruleBasedUserList;
  }
  /**
   * Output only. User list which are similar to users from another UserList.
   * These lists are readonly and automatically created by google.
   *
   * @param GoogleAdsSearchads360V23CommonSimilarUserListInfo $similarUserList
   */
  public function setSimilarUserList(GoogleAdsSearchads360V23CommonSimilarUserListInfo $similarUserList)
  {
    $this->similarUserList = $similarUserList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonSimilarUserListInfo
   */
  public function getSimilarUserList()
  {
    return $this->similarUserList;
  }
  /**
   * Output only. Estimated number of users in this user list, on the Google
   * Display Network. This value is if the number of users has not yet been
   * determined. This field is -only.
   *
   * @param string $sizeForDisplay
   */
  public function setSizeForDisplay($sizeForDisplay)
  {
    $this->sizeForDisplay = $sizeForDisplay;
  }
  /**
   * @return string
   */
  public function getSizeForDisplay()
  {
    return $this->sizeForDisplay;
  }
  /**
   * Output only. Estimated number of users in this user list in the google.com
   * domain. These are the users available for targeting in Search campaigns.
   * This value is null if the number of users has not yet been determined. This
   * field is read-only.
   *
   * @param string $sizeForSearch
   */
  public function setSizeForSearch($sizeForSearch)
  {
    $this->sizeForSearch = $sizeForSearch;
  }
  /**
   * @return string
   */
  public function getSizeForSearch()
  {
    return $this->sizeForSearch;
  }
  /**
   * Output only. Size range in terms of number of users of the UserList, on the
   * Google Display Network. This field is read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, LESS_THAN_FIVE_HUNDRED,
   * LESS_THAN_ONE_THOUSAND, ONE_THOUSAND_TO_TEN_THOUSAND,
   * TEN_THOUSAND_TO_FIFTY_THOUSAND, FIFTY_THOUSAND_TO_ONE_HUNDRED_THOUSAND,
   * ONE_HUNDRED_THOUSAND_TO_THREE_HUNDRED_THOUSAND,
   * THREE_HUNDRED_THOUSAND_TO_FIVE_HUNDRED_THOUSAND,
   * FIVE_HUNDRED_THOUSAND_TO_ONE_MILLION, ONE_MILLION_TO_TWO_MILLION,
   * TWO_MILLION_TO_THREE_MILLION, THREE_MILLION_TO_FIVE_MILLION,
   * FIVE_MILLION_TO_TEN_MILLION, TEN_MILLION_TO_TWENTY_MILLION,
   * TWENTY_MILLION_TO_THIRTY_MILLION, THIRTY_MILLION_TO_FIFTY_MILLION,
   * OVER_FIFTY_MILLION
   *
   * @param self::SIZE_RANGE_FOR_DISPLAY_* $sizeRangeForDisplay
   */
  public function setSizeRangeForDisplay($sizeRangeForDisplay)
  {
    $this->sizeRangeForDisplay = $sizeRangeForDisplay;
  }
  /**
   * @return self::SIZE_RANGE_FOR_DISPLAY_*
   */
  public function getSizeRangeForDisplay()
  {
    return $this->sizeRangeForDisplay;
  }
  /**
   * Output only. Size range in terms of number of users of the UserList, for
   * Search ads. This field is read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, LESS_THAN_FIVE_HUNDRED,
   * LESS_THAN_ONE_THOUSAND, ONE_THOUSAND_TO_TEN_THOUSAND,
   * TEN_THOUSAND_TO_FIFTY_THOUSAND, FIFTY_THOUSAND_TO_ONE_HUNDRED_THOUSAND,
   * ONE_HUNDRED_THOUSAND_TO_THREE_HUNDRED_THOUSAND,
   * THREE_HUNDRED_THOUSAND_TO_FIVE_HUNDRED_THOUSAND,
   * FIVE_HUNDRED_THOUSAND_TO_ONE_MILLION, ONE_MILLION_TO_TWO_MILLION,
   * TWO_MILLION_TO_THREE_MILLION, THREE_MILLION_TO_FIVE_MILLION,
   * FIVE_MILLION_TO_TEN_MILLION, TEN_MILLION_TO_TWENTY_MILLION,
   * TWENTY_MILLION_TO_THIRTY_MILLION, THIRTY_MILLION_TO_FIFTY_MILLION,
   * OVER_FIFTY_MILLION
   *
   * @param self::SIZE_RANGE_FOR_SEARCH_* $sizeRangeForSearch
   */
  public function setSizeRangeForSearch($sizeRangeForSearch)
  {
    $this->sizeRangeForSearch = $sizeRangeForSearch;
  }
  /**
   * @return self::SIZE_RANGE_FOR_SEARCH_*
   */
  public function getSizeRangeForSearch()
  {
    return $this->sizeRangeForSearch;
  }
  /**
   * Output only. Type of this list. This field is read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, REMARKETING, LOGICAL,
   * EXTERNAL_REMARKETING, RULE_BASED, SIMILAR, CRM_BASED, LOOKALIKE
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesUserList::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesUserList');
