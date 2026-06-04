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

class GoogleAdsSearchads360V23ResourcesUserListCustomerType extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CUSTOMER_TYPE_CATEGORY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Unknown type.
   */
  public const CUSTOMER_TYPE_CATEGORY_UNKNOWN = 'UNKNOWN';
  /**
   * Customer type category for all customers.
   */
  public const CUSTOMER_TYPE_CATEGORY_ALL_CUSTOMERS = 'ALL_CUSTOMERS';
  /**
   * Customer type category for all purchasers.
   */
  public const CUSTOMER_TYPE_CATEGORY_PURCHASERS = 'PURCHASERS';
  /**
   * Customer type category for high value purchasers.
   */
  public const CUSTOMER_TYPE_CATEGORY_HIGH_VALUE_CUSTOMERS = 'HIGH_VALUE_CUSTOMERS';
  /**
   * Customer type category for disengaged purchasers.
   */
  public const CUSTOMER_TYPE_CATEGORY_DISENGAGED_CUSTOMERS = 'DISENGAGED_CUSTOMERS';
  /**
   * Customer type category for qualified leads.
   */
  public const CUSTOMER_TYPE_CATEGORY_QUALIFIED_LEADS = 'QUALIFIED_LEADS';
  /**
   * Customer type category for converted leads.
   */
  public const CUSTOMER_TYPE_CATEGORY_CONVERTED_LEADS = 'CONVERTED_LEADS';
  /**
   * Customer type category for paid subscribers.
   */
  public const CUSTOMER_TYPE_CATEGORY_PAID_SUBSCRIBERS = 'PAID_SUBSCRIBERS';
  /**
   * Customer type category for loyalty signups.
   */
  public const CUSTOMER_TYPE_CATEGORY_LOYALTY_SIGN_UPS = 'LOYALTY_SIGN_UPS';
  /**
   * Customer type category for cart abandoners.
   */
  public const CUSTOMER_TYPE_CATEGORY_CART_ABANDONERS = 'CART_ABANDONERS';
  /**
   * Customer type category for loyalty tier 1 members.
   */
  public const CUSTOMER_TYPE_CATEGORY_LOYALTY_TIER_1_MEMBERS = 'LOYALTY_TIER_1_MEMBERS';
  /**
   * Customer type category for loyalty tier 2 members.
   */
  public const CUSTOMER_TYPE_CATEGORY_LOYALTY_TIER_2_MEMBERS = 'LOYALTY_TIER_2_MEMBERS';
  /**
   * Customer type category for loyalty tier 3 members.
   */
  public const CUSTOMER_TYPE_CATEGORY_LOYALTY_TIER_3_MEMBERS = 'LOYALTY_TIER_3_MEMBERS';
  /**
   * Customer type category for loyalty tier 4 members.
   */
  public const CUSTOMER_TYPE_CATEGORY_LOYALTY_TIER_4_MEMBERS = 'LOYALTY_TIER_4_MEMBERS';
  /**
   * Customer type category for loyalty tier 5 members.
   */
  public const CUSTOMER_TYPE_CATEGORY_LOYALTY_TIER_5_MEMBERS = 'LOYALTY_TIER_5_MEMBERS';
  /**
   * Customer type category for loyalty tier 6 members.
   */
  public const CUSTOMER_TYPE_CATEGORY_LOYALTY_TIER_6_MEMBERS = 'LOYALTY_TIER_6_MEMBERS';
  /**
   * Customer type category for loyalty tier 7 members.
   */
  public const CUSTOMER_TYPE_CATEGORY_LOYALTY_TIER_7_MEMBERS = 'LOYALTY_TIER_7_MEMBERS';
  /**
   * Immutable. The user list customer type category
   *
   * @var string
   */
  public $customerTypeCategory;
  /**
   * Immutable. The resource name of the user list customer type User list
   * customer type resource names have the form: `customers/{customer_id}/userLi
   * stCustomerTypes/{user_list_id}~{customer_type_category}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Immutable. The resource name for the user list this user list customer type
   * is associated with
   *
   * @var string
   */
  public $userList;

  /**
   * Immutable. The user list customer type category
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ALL_CUSTOMERS, PURCHASERS,
   * HIGH_VALUE_CUSTOMERS, DISENGAGED_CUSTOMERS, QUALIFIED_LEADS,
   * CONVERTED_LEADS, PAID_SUBSCRIBERS, LOYALTY_SIGN_UPS, CART_ABANDONERS,
   * LOYALTY_TIER_1_MEMBERS, LOYALTY_TIER_2_MEMBERS, LOYALTY_TIER_3_MEMBERS,
   * LOYALTY_TIER_4_MEMBERS, LOYALTY_TIER_5_MEMBERS, LOYALTY_TIER_6_MEMBERS,
   * LOYALTY_TIER_7_MEMBERS
   *
   * @param self::CUSTOMER_TYPE_CATEGORY_* $customerTypeCategory
   */
  public function setCustomerTypeCategory($customerTypeCategory)
  {
    $this->customerTypeCategory = $customerTypeCategory;
  }
  /**
   * @return self::CUSTOMER_TYPE_CATEGORY_*
   */
  public function getCustomerTypeCategory()
  {
    return $this->customerTypeCategory;
  }
  /**
   * Immutable. The resource name of the user list customer type User list
   * customer type resource names have the form: `customers/{customer_id}/userLi
   * stCustomerTypes/{user_list_id}~{customer_type_category}`
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
   * Immutable. The resource name for the user list this user list customer type
   * is associated with
   *
   * @param string $userList
   */
  public function setUserList($userList)
  {
    $this->userList = $userList;
  }
  /**
   * @return string
   */
  public function getUserList()
  {
    return $this->userList;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesUserListCustomerType::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesUserListCustomerType');
