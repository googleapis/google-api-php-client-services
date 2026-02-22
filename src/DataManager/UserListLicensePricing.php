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

class UserListLicensePricing extends \Google\Model
{
  /**
   * UNSPECIFIED.
   */
  public const BUYER_APPROVAL_STATE_USER_LIST_PRICING_BUYER_APPROVAL_STATE_UNSPECIFIED = 'USER_LIST_PRICING_BUYER_APPROVAL_STATE_UNSPECIFIED';
  /**
   * User list client has not yet accepted the pricing terms set by the user
   * list owner.
   */
  public const BUYER_APPROVAL_STATE_PENDING = 'PENDING';
  /**
   * User list client has accepted the pricing terms set by the user list owner.
   */
  public const BUYER_APPROVAL_STATE_APPROVED = 'APPROVED';
  /**
   * User list client has rejected the pricing terms set by the user list owner.
   */
  public const BUYER_APPROVAL_STATE_REJECTED = 'REJECTED';
  /**
   * Unspecified.
   */
  public const COST_TYPE_USER_LIST_PRICING_COST_TYPE_UNSPECIFIED = 'USER_LIST_PRICING_COST_TYPE_UNSPECIFIED';
  /**
   * Cost per click.
   */
  public const COST_TYPE_CPC = 'CPC';
  /**
   * Cost per mille (thousand impressions).
   */
  public const COST_TYPE_CPM = 'CPM';
  /**
   * Media share.
   */
  public const COST_TYPE_MEDIA_SHARE = 'MEDIA_SHARE';
  /**
   * Output only. The buyer approval state of this pricing. This field is read-
   * only.
   *
   * @var string
   */
  public $buyerApprovalState;
  /**
   * Optional. The cost associated with the model, in micro units (10^-6), in
   * the currency specified by the currency_code field. For example, 2000000
   * means $2 if `currency_code` is `USD`.
   *
   * @var string
   */
  public $costMicros;
  /**
   * Immutable. The cost type of this pricing. Can be set only in the `create`
   * operation. Can't be updated for an existing license.
   *
   * @var string
   */
  public $costType;
  /**
   * Optional. The currency in which cost and max_cost is specified. Must be a
   * three-letter currency code defined in ISO 4217.
   *
   * @var string
   */
  public $currencyCode;
  /**
   * Optional. End time of the pricing.
   *
   * @var string
   */
  public $endTime;
  /**
   * Optional. The maximum CPM a commerce audience can be charged when the
   * MEDIA_SHARE cost type is used. The value is in micro units (10^-6) and in
   * the currency specified by the currency_code field. For example, 2000000
   * means $2 if `currency_code` is `USD`. This is only relevant when cost_type
   * is MEDIA_SHARE. When cost_type is not MEDIA_SHARE, and this field is set, a
   * MAX_COST_NOT_ALLOWED error will be returned. If not set or set to`0`, there
   * is no cap.
   *
   * @var string
   */
  public $maxCostMicros;
  /**
   * Output only. Whether this pricing is active.
   *
   * @var bool
   */
  public $pricingActive;
  /**
   * Output only. The ID of this pricing.
   *
   * @var string
   */
  public $pricingId;
  /**
   * Output only. Start time of the pricing.
   *
   * @var string
   */
  public $startTime;

  /**
   * Output only. The buyer approval state of this pricing. This field is read-
   * only.
   *
   * Accepted values: USER_LIST_PRICING_BUYER_APPROVAL_STATE_UNSPECIFIED,
   * PENDING, APPROVED, REJECTED
   *
   * @param self::BUYER_APPROVAL_STATE_* $buyerApprovalState
   */
  public function setBuyerApprovalState($buyerApprovalState)
  {
    $this->buyerApprovalState = $buyerApprovalState;
  }
  /**
   * @return self::BUYER_APPROVAL_STATE_*
   */
  public function getBuyerApprovalState()
  {
    return $this->buyerApprovalState;
  }
  /**
   * Optional. The cost associated with the model, in micro units (10^-6), in
   * the currency specified by the currency_code field. For example, 2000000
   * means $2 if `currency_code` is `USD`.
   *
   * @param string $costMicros
   */
  public function setCostMicros($costMicros)
  {
    $this->costMicros = $costMicros;
  }
  /**
   * @return string
   */
  public function getCostMicros()
  {
    return $this->costMicros;
  }
  /**
   * Immutable. The cost type of this pricing. Can be set only in the `create`
   * operation. Can't be updated for an existing license.
   *
   * Accepted values: USER_LIST_PRICING_COST_TYPE_UNSPECIFIED, CPC, CPM,
   * MEDIA_SHARE
   *
   * @param self::COST_TYPE_* $costType
   */
  public function setCostType($costType)
  {
    $this->costType = $costType;
  }
  /**
   * @return self::COST_TYPE_*
   */
  public function getCostType()
  {
    return $this->costType;
  }
  /**
   * Optional. The currency in which cost and max_cost is specified. Must be a
   * three-letter currency code defined in ISO 4217.
   *
   * @param string $currencyCode
   */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /**
   * @return string
   */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /**
   * Optional. End time of the pricing.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Optional. The maximum CPM a commerce audience can be charged when the
   * MEDIA_SHARE cost type is used. The value is in micro units (10^-6) and in
   * the currency specified by the currency_code field. For example, 2000000
   * means $2 if `currency_code` is `USD`. This is only relevant when cost_type
   * is MEDIA_SHARE. When cost_type is not MEDIA_SHARE, and this field is set, a
   * MAX_COST_NOT_ALLOWED error will be returned. If not set or set to`0`, there
   * is no cap.
   *
   * @param string $maxCostMicros
   */
  public function setMaxCostMicros($maxCostMicros)
  {
    $this->maxCostMicros = $maxCostMicros;
  }
  /**
   * @return string
   */
  public function getMaxCostMicros()
  {
    return $this->maxCostMicros;
  }
  /**
   * Output only. Whether this pricing is active.
   *
   * @param bool $pricingActive
   */
  public function setPricingActive($pricingActive)
  {
    $this->pricingActive = $pricingActive;
  }
  /**
   * @return bool
   */
  public function getPricingActive()
  {
    return $this->pricingActive;
  }
  /**
   * Output only. The ID of this pricing.
   *
   * @param string $pricingId
   */
  public function setPricingId($pricingId)
  {
    $this->pricingId = $pricingId;
  }
  /**
   * @return string
   */
  public function getPricingId()
  {
    return $this->pricingId;
  }
  /**
   * Output only. Start time of the pricing.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListLicensePricing::class, 'Google_Service_DataManager_UserListLicensePricing');
