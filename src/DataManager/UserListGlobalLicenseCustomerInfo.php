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

class UserListGlobalLicenseCustomerInfo extends \Google\Collection
{
  /**
   * Unknown.
   */
  public const CLIENT_ACCOUNT_TYPE_USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_UNKNOWN = 'USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_UNKNOWN';
  /**
   * Google Ads customer.
   */
  public const CLIENT_ACCOUNT_TYPE_USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_GOOGLE_ADS = 'USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_GOOGLE_ADS';
  /**
   * Display & Video 360 partner.
   */
  public const CLIENT_ACCOUNT_TYPE_USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_DISPLAY_VIDEO_PARTNER = 'USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_DISPLAY_VIDEO_PARTNER';
  /**
   * Display & Video 360 advertiser.
   */
  public const CLIENT_ACCOUNT_TYPE_USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_DISPLAY_VIDEO_ADVERTISER = 'USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_DISPLAY_VIDEO_ADVERTISER';
  /**
   * Google Ad Manager audience link.
   */
  public const CLIENT_ACCOUNT_TYPE_USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_GOOGLE_AD_MANAGER_AUDIENCE_LINK = 'USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_GOOGLE_AD_MANAGER_AUDIENCE_LINK';
  /**
   * UNSPECIFIED.
   */
  public const LICENSE_TYPE_USER_LIST_GLOBAL_LICENSE_TYPE_UNSPECIFIED = 'USER_LIST_GLOBAL_LICENSE_TYPE_UNSPECIFIED';
  /**
   * Reseller license.
   */
  public const LICENSE_TYPE_USER_LIST_GLOBAL_LICENSE_TYPE_RESELLER = 'USER_LIST_GLOBAL_LICENSE_TYPE_RESELLER';
  /**
   * DataMart Sell Side license.
   */
  public const LICENSE_TYPE_USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_SELL_SIDE = 'USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_SELL_SIDE';
  /**
   * DataMart Buy Side license.
   */
  public const LICENSE_TYPE_USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_BUY_SIDE = 'USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_BUY_SIDE';
  /**
   * Unknown.
   */
  public const STATUS_USER_LIST_LICENSE_STATUS_UNSPECIFIED = 'USER_LIST_LICENSE_STATUS_UNSPECIFIED';
  /**
   * Active status - user list is still being licensed.
   */
  public const STATUS_USER_LIST_LICENSE_STATUS_ENABLED = 'USER_LIST_LICENSE_STATUS_ENABLED';
  /**
   * Inactive status - user list is no longer being licensed.
   */
  public const STATUS_USER_LIST_LICENSE_STATUS_DISABLED = 'USER_LIST_LICENSE_STATUS_DISABLED';
  protected $collection_key = 'historicalPricings';
  /**
   * Output only. Name of client customer which the user list is being licensed
   * to.
   *
   * @var string
   */
  public $clientAccountDisplayName;
  /**
   * Output only. ID of client customer which the user list is being licensed
   * to.
   *
   * @var string
   */
  public $clientAccountId;
  /**
   * Output only. Product type of client customer which the user list is being
   * licensed to.
   *
   * @var string
   */
  public $clientAccountType;
  protected $historicalPricingsType = UserListLicensePricing::class;
  protected $historicalPricingsDataType = 'array';
  /**
   * Output only. Product type of client customer which the user list is being
   * licensed to.
   *
   * @var string
   */
  public $licenseType;
  protected $metricsType = UserListLicenseMetrics::class;
  protected $metricsDataType = '';
  /**
   * Identifier. The resource name of the user list global license customer.
   *
   * @var string
   */
  public $name;
  protected $pricingType = UserListLicensePricing::class;
  protected $pricingDataType = '';
  /**
   * Output only. Status of UserListDirectLicense - ENABLED or DISABLED.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. Name of the user list being licensed.
   *
   * @var string
   */
  public $userListDisplayName;
  /**
   * Output only. ID of the user list being licensed.
   *
   * @var string
   */
  public $userListId;

  /**
   * Output only. Name of client customer which the user list is being licensed
   * to.
   *
   * @param string $clientAccountDisplayName
   */
  public function setClientAccountDisplayName($clientAccountDisplayName)
  {
    $this->clientAccountDisplayName = $clientAccountDisplayName;
  }
  /**
   * @return string
   */
  public function getClientAccountDisplayName()
  {
    return $this->clientAccountDisplayName;
  }
  /**
   * Output only. ID of client customer which the user list is being licensed
   * to.
   *
   * @param string $clientAccountId
   */
  public function setClientAccountId($clientAccountId)
  {
    $this->clientAccountId = $clientAccountId;
  }
  /**
   * @return string
   */
  public function getClientAccountId()
  {
    return $this->clientAccountId;
  }
  /**
   * Output only. Product type of client customer which the user list is being
   * licensed to.
   *
   * Accepted values: USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_UNKNOWN,
   * USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_GOOGLE_ADS,
   * USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_DISPLAY_VIDEO_PARTNER,
   * USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_DISPLAY_VIDEO_ADVERTISER,
   * USER_LIST_LICENSE_CLIENT_ACCOUNT_TYPE_GOOGLE_AD_MANAGER_AUDIENCE_LINK
   *
   * @param self::CLIENT_ACCOUNT_TYPE_* $clientAccountType
   */
  public function setClientAccountType($clientAccountType)
  {
    $this->clientAccountType = $clientAccountType;
  }
  /**
   * @return self::CLIENT_ACCOUNT_TYPE_*
   */
  public function getClientAccountType()
  {
    return $this->clientAccountType;
  }
  /**
   * Output only. Pricing history of this user list license.
   *
   * @param UserListLicensePricing[] $historicalPricings
   */
  public function setHistoricalPricings($historicalPricings)
  {
    $this->historicalPricings = $historicalPricings;
  }
  /**
   * @return UserListLicensePricing[]
   */
  public function getHistoricalPricings()
  {
    return $this->historicalPricings;
  }
  /**
   * Output only. Product type of client customer which the user list is being
   * licensed to.
   *
   * Accepted values: USER_LIST_GLOBAL_LICENSE_TYPE_UNSPECIFIED,
   * USER_LIST_GLOBAL_LICENSE_TYPE_RESELLER,
   * USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_SELL_SIDE,
   * USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_BUY_SIDE
   *
   * @param self::LICENSE_TYPE_* $licenseType
   */
  public function setLicenseType($licenseType)
  {
    $this->licenseType = $licenseType;
  }
  /**
   * @return self::LICENSE_TYPE_*
   */
  public function getLicenseType()
  {
    return $this->licenseType;
  }
  /**
   * Output only. Metrics related to this license This field is only populated
   * if the start and end dates are set in the
   * ListUserListGlobalLicenseCustomerInfos call.
   *
   * @param UserListLicenseMetrics $metrics
   */
  public function setMetrics(UserListLicenseMetrics $metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return UserListLicenseMetrics
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * Identifier. The resource name of the user list global license customer.
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
   * Output only. UserListDirectLicense pricing.
   *
   * @param UserListLicensePricing $pricing
   */
  public function setPricing(UserListLicensePricing $pricing)
  {
    $this->pricing = $pricing;
  }
  /**
   * @return UserListLicensePricing
   */
  public function getPricing()
  {
    return $this->pricing;
  }
  /**
   * Output only. Status of UserListDirectLicense - ENABLED or DISABLED.
   *
   * Accepted values: USER_LIST_LICENSE_STATUS_UNSPECIFIED,
   * USER_LIST_LICENSE_STATUS_ENABLED, USER_LIST_LICENSE_STATUS_DISABLED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. Name of the user list being licensed.
   *
   * @param string $userListDisplayName
   */
  public function setUserListDisplayName($userListDisplayName)
  {
    $this->userListDisplayName = $userListDisplayName;
  }
  /**
   * @return string
   */
  public function getUserListDisplayName()
  {
    return $this->userListDisplayName;
  }
  /**
   * Output only. ID of the user list being licensed.
   *
   * @param string $userListId
   */
  public function setUserListId($userListId)
  {
    $this->userListId = $userListId;
  }
  /**
   * @return string
   */
  public function getUserListId()
  {
    return $this->userListId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListGlobalLicenseCustomerInfo::class, 'Google_Service_DataManager_UserListGlobalLicenseCustomerInfo');
