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

class GoogleAdsSearchads360V23ResourcesBillingSetup extends \Google\Model
{
  /**
   * Not specified.
   */
  public const END_TIME_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const END_TIME_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * As soon as possible.
   */
  public const END_TIME_TYPE_NOW = 'NOW';
  /**
   * An infinite point in the future.
   */
  public const END_TIME_TYPE_FOREVER = 'FOREVER';
  /**
   * Not specified.
   */
  public const START_TIME_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const START_TIME_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * As soon as possible.
   */
  public const START_TIME_TYPE_NOW = 'NOW';
  /**
   * An infinite point in the future.
   */
  public const START_TIME_TYPE_FOREVER = 'FOREVER';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The billing setup is pending approval.
   */
  public const STATUS_PENDING = 'PENDING';
  /**
   * The billing setup has been approved but the corresponding first budget has
   * not. This can only occur for billing setups configured for monthly
   * invoicing.
   */
  public const STATUS_APPROVED_HELD = 'APPROVED_HELD';
  /**
   * The billing setup has been approved.
   */
  public const STATUS_APPROVED = 'APPROVED';
  /**
   * The billing setup was cancelled by the user prior to approval.
   */
  public const STATUS_CANCELLED = 'CANCELLED';
  /**
   * Output only. The end date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format.
   *
   * @var string
   */
  public $endDateTime;
  /**
   * Output only. The end time as a type. The only possible value is FOREVER.
   *
   * @var string
   */
  public $endTimeType;
  /**
   * Output only. The ID of the billing setup.
   *
   * @var string
   */
  public $id;
  /**
   * Immutable. The resource name of the payments account associated with this
   * billing setup. Payments resource names have the form:
   * `customers/{customer_id}/paymentsAccounts/{payments_account_id}` When
   * setting up billing, this is used to signup with an existing payments
   * account (and then payments_account_info should not be set). When getting a
   * billing setup, this and payments_account_info will be populated.
   *
   * @var string
   */
  public $paymentsAccount;
  protected $paymentsAccountInfoType = GoogleAdsSearchads360V23ResourcesBillingSetupPaymentsAccountInfo::class;
  protected $paymentsAccountInfoDataType = '';
  /**
   * Immutable. The resource name of the billing setup. BillingSetup resource
   * names have the form:
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Immutable. The start date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format.
   * Only a future time is allowed.
   *
   * @var string
   */
  public $startDateTime;
  /**
   * Immutable. The start time as a type. Only NOW is allowed.
   *
   * @var string
   */
  public $startTimeType;
  /**
   * Output only. The status of the billing setup.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. The end date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format.
   *
   * @param string $endDateTime
   */
  public function setEndDateTime($endDateTime)
  {
    $this->endDateTime = $endDateTime;
  }
  /**
   * @return string
   */
  public function getEndDateTime()
  {
    return $this->endDateTime;
  }
  /**
   * Output only. The end time as a type. The only possible value is FOREVER.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOW, FOREVER
   *
   * @param self::END_TIME_TYPE_* $endTimeType
   */
  public function setEndTimeType($endTimeType)
  {
    $this->endTimeType = $endTimeType;
  }
  /**
   * @return self::END_TIME_TYPE_*
   */
  public function getEndTimeType()
  {
    return $this->endTimeType;
  }
  /**
   * Output only. The ID of the billing setup.
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
   * Immutable. The resource name of the payments account associated with this
   * billing setup. Payments resource names have the form:
   * `customers/{customer_id}/paymentsAccounts/{payments_account_id}` When
   * setting up billing, this is used to signup with an existing payments
   * account (and then payments_account_info should not be set). When getting a
   * billing setup, this and payments_account_info will be populated.
   *
   * @param string $paymentsAccount
   */
  public function setPaymentsAccount($paymentsAccount)
  {
    $this->paymentsAccount = $paymentsAccount;
  }
  /**
   * @return string
   */
  public function getPaymentsAccount()
  {
    return $this->paymentsAccount;
  }
  /**
   * Immutable. The payments account information associated with this billing
   * setup. When setting up billing, this is used to signup with a new payments
   * account (and then payments_account should not be set). When getting a
   * billing setup, this and payments_account will be populated.
   *
   * @param GoogleAdsSearchads360V23ResourcesBillingSetupPaymentsAccountInfo $paymentsAccountInfo
   */
  public function setPaymentsAccountInfo(GoogleAdsSearchads360V23ResourcesBillingSetupPaymentsAccountInfo $paymentsAccountInfo)
  {
    $this->paymentsAccountInfo = $paymentsAccountInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBillingSetupPaymentsAccountInfo
   */
  public function getPaymentsAccountInfo()
  {
    return $this->paymentsAccountInfo;
  }
  /**
   * Immutable. The resource name of the billing setup. BillingSetup resource
   * names have the form:
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
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
   * Immutable. The start date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format.
   * Only a future time is allowed.
   *
   * @param string $startDateTime
   */
  public function setStartDateTime($startDateTime)
  {
    $this->startDateTime = $startDateTime;
  }
  /**
   * @return string
   */
  public function getStartDateTime()
  {
    return $this->startDateTime;
  }
  /**
   * Immutable. The start time as a type. Only NOW is allowed.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOW, FOREVER
   *
   * @param self::START_TIME_TYPE_* $startTimeType
   */
  public function setStartTimeType($startTimeType)
  {
    $this->startTimeType = $startTimeType;
  }
  /**
   * @return self::START_TIME_TYPE_*
   */
  public function getStartTimeType()
  {
    return $this->startTimeType;
  }
  /**
   * Output only. The status of the billing setup.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, APPROVED_HELD, APPROVED,
   * CANCELLED
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesBillingSetup::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesBillingSetup');
