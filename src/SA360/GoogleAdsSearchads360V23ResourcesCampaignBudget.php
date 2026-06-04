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

class GoogleAdsSearchads360V23ResourcesCampaignBudget extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DELIVERY_METHOD_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const DELIVERY_METHOD_UNKNOWN = 'UNKNOWN';
  /**
   * The budget server will throttle serving evenly across the entire time
   * period.
   */
  public const DELIVERY_METHOD_STANDARD = 'STANDARD';
  /**
   * The budget server will not throttle serving, and ads will serve as fast as
   * possible.
   */
  public const DELIVERY_METHOD_ACCELERATED = 'ACCELERATED';
  /**
   * Not specified.
   */
  public const PERIOD_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PERIOD_UNKNOWN = 'UNKNOWN';
  /**
   * Daily budget.
   */
  public const PERIOD_DAILY = 'DAILY';
  /**
   * Custom budget can be used with total_amount to specify lifetime budget
   * limit.
   */
  public const PERIOD_CUSTOM_PERIOD = 'CUSTOM_PERIOD';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Budget is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Budget is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Budget type for standard Google Ads usage. Caps daily spend at two times
   * the specified budget amount. Full details:
   * https://support.google.com/google-ads/answer/6385083
   */
  public const TYPE_STANDARD = 'STANDARD';
  /**
   * Budget type with a fixed cost-per-acquisition (conversion). Full details:
   * https://support.google.com/google-ads/answer/7528254 This type is only
   * supported by campaigns with AdvertisingChannelType.DISPLAY (excluding
   * AdvertisingChannelSubType.DISPLAY_GMAIL), BiddingStrategyType.TARGET_CPA
   * and PaymentMode.CONVERSIONS.
   */
  public const TYPE_FIXED_CPA = 'FIXED_CPA';
  /**
   * Budget type for Smart Campaign. Full details:
   * https://support.google.com/google-ads/answer/7653509 This type is only
   * supported by campaigns with AdvertisingChannelType.SMART and
   * AdvertisingChannelSubType.SMART_CAMPAIGN.
   */
  public const TYPE_SMART_CAMPAIGN = 'SMART_CAMPAIGN';
  /**
   * Budget type for Local Services Campaign. Full details:
   * https://support.google.com/localservices/answer/7434558 This type is only
   * supported by campaigns with AdvertisingChannelType.LOCAL_SERVICES.
   */
  public const TYPE_LOCAL_SERVICES = 'LOCAL_SERVICES';
  /**
   * ID of the portfolio bidding strategy that this shared campaign budget is
   * aligned with. When a bidding strategy and a campaign budget are aligned,
   * they are attached to the same set of campaigns. After a campaign budget is
   * aligned with a bidding strategy, campaigns that are added to the campaign
   * budget must also use the aligned bidding strategy.
   *
   * @var string
   */
  public $alignedBiddingStrategyId;
  /**
   * The average daily amount to be spent by the campaign. This field is used
   * when the CampaignBudget `period` is set to `DAILY`, which is the default.
   * Amount is specified in micros in the account's local currency. One million
   * micros is equivalent to one currency unit. The effective monthly spend is
   * capped at 30.4 times this daily amount. This field is mutually exclusive
   * with 'total_amount_micros'. Only one of 'amount_micros' or
   * 'total_amount_micros' should be set.
   *
   * @var string
   */
  public $amountMicros;
  /**
   * The delivery method that determines the rate at which the campaign budget
   * is spent. Defaults to STANDARD if unspecified in a create operation.
   *
   * @var string
   */
  public $deliveryMethod;
  /**
   * Specifies whether the budget is explicitly shared. Defaults to true if
   * unspecified in a create operation. If true, the budget was created with the
   * purpose of sharing across one or more campaigns. If false, the budget was
   * created with the intention of only being used with a single campaign. The
   * budget's name and status will stay in sync with the campaign's name and
   * status. Attempting to share the budget with a second campaign will result
   * in an error. A non-shared budget can become an explicitly shared. The same
   * operation must also assign the budget a name. A shared campaign budget can
   * never become non-shared.
   *
   * @var bool
   */
  public $explicitlyShared;
  /**
   * Output only. Indicates whether there is a recommended budget for this
   * campaign budget. This field is read-only.
   *
   * @var bool
   */
  public $hasRecommendedBudget;
  /**
   * Output only. The ID of the campaign budget. A campaign budget is created
   * using the CampaignBudgetService create operation and is assigned a budget
   * ID. A budget ID can be shared across different campaigns; the system will
   * then allocate the campaign budget among different campaigns to get optimum
   * results.
   *
   * @var string
   */
  public $id;
  /**
   * The name of the campaign budget. When creating a campaign budget through
   * CampaignBudgetService, every explicitly shared campaign budget must have a
   * non-null, non-empty name. Campaign budgets that are not explicitly shared
   * derive their name from the attached campaign's name. The length of this
   * string must be between 1 and 255, inclusive, in UTF-8 bytes, (trimmed).
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. Period over which to spend the budget. Defaults to DAILY if not
   * specified.
   *
   * @var string
   */
  public $period;
  /**
   * Output only. The recommended budget amount. If no recommendation is
   * available, this will be set to the budget amount. Amount is specified in
   * micros, where one million is equivalent to one currency unit. This field is
   * read-only.
   *
   * @var string
   */
  public $recommendedBudgetAmountMicros;
  /**
   * Output only. The estimated change in weekly clicks if the recommended
   * budget is applied. This field is read-only.
   *
   * @var string
   */
  public $recommendedBudgetEstimatedChangeWeeklyClicks;
  /**
   * Output only. The estimated change in weekly cost in micros if the
   * recommended budget is applied. One million is equivalent to one currency
   * unit. This field is read-only.
   *
   * @var string
   */
  public $recommendedBudgetEstimatedChangeWeeklyCostMicros;
  /**
   * Output only. The estimated change in weekly interactions if the recommended
   * budget is applied. This field is read-only.
   *
   * @var string
   */
  public $recommendedBudgetEstimatedChangeWeeklyInteractions;
  /**
   * Output only. The estimated change in weekly views if the recommended budget
   * is applied. This field is read-only.
   *
   * @var string
   */
  public $recommendedBudgetEstimatedChangeWeeklyViews;
  /**
   * Output only. The number of campaigns actively using the budget. This field
   * is read-only.
   *
   * @var string
   */
  public $referenceCount;
  /**
   * Immutable. The resource name of the campaign budget. Campaign budget
   * resource names have the form:
   * `customers/{customer_id}/campaignBudgets/{campaign_budget_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of this campaign budget. This field is read-only.
   *
   * @var string
   */
  public $status;
  /**
   * The total amount to be spent by the campaign over its entire duration. This
   * field is used *only* when the CampaignBudget `period` is set to
   * `CUSTOM_PERIOD`. It represents the budget cap for the campaign's lifetime,
   * rather than a daily limit. The amount is specified in micros in the
   * account's local currency. One million micros is equivalent to one currency
   * unit. This field is mutually exclusive with 'amount_micros'. Only one of
   * 'total_amount_micros' or 'amount_micros' should be set.
   *
   * @var string
   */
  public $totalAmountMicros;
  /**
   * Immutable. The type of the campaign budget.
   *
   * @var string
   */
  public $type;

  /**
   * ID of the portfolio bidding strategy that this shared campaign budget is
   * aligned with. When a bidding strategy and a campaign budget are aligned,
   * they are attached to the same set of campaigns. After a campaign budget is
   * aligned with a bidding strategy, campaigns that are added to the campaign
   * budget must also use the aligned bidding strategy.
   *
   * @param string $alignedBiddingStrategyId
   */
  public function setAlignedBiddingStrategyId($alignedBiddingStrategyId)
  {
    $this->alignedBiddingStrategyId = $alignedBiddingStrategyId;
  }
  /**
   * @return string
   */
  public function getAlignedBiddingStrategyId()
  {
    return $this->alignedBiddingStrategyId;
  }
  /**
   * The average daily amount to be spent by the campaign. This field is used
   * when the CampaignBudget `period` is set to `DAILY`, which is the default.
   * Amount is specified in micros in the account's local currency. One million
   * micros is equivalent to one currency unit. The effective monthly spend is
   * capped at 30.4 times this daily amount. This field is mutually exclusive
   * with 'total_amount_micros'. Only one of 'amount_micros' or
   * 'total_amount_micros' should be set.
   *
   * @param string $amountMicros
   */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /**
   * @return string
   */
  public function getAmountMicros()
  {
    return $this->amountMicros;
  }
  /**
   * The delivery method that determines the rate at which the campaign budget
   * is spent. Defaults to STANDARD if unspecified in a create operation.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, STANDARD, ACCELERATED
   *
   * @param self::DELIVERY_METHOD_* $deliveryMethod
   */
  public function setDeliveryMethod($deliveryMethod)
  {
    $this->deliveryMethod = $deliveryMethod;
  }
  /**
   * @return self::DELIVERY_METHOD_*
   */
  public function getDeliveryMethod()
  {
    return $this->deliveryMethod;
  }
  /**
   * Specifies whether the budget is explicitly shared. Defaults to true if
   * unspecified in a create operation. If true, the budget was created with the
   * purpose of sharing across one or more campaigns. If false, the budget was
   * created with the intention of only being used with a single campaign. The
   * budget's name and status will stay in sync with the campaign's name and
   * status. Attempting to share the budget with a second campaign will result
   * in an error. A non-shared budget can become an explicitly shared. The same
   * operation must also assign the budget a name. A shared campaign budget can
   * never become non-shared.
   *
   * @param bool $explicitlyShared
   */
  public function setExplicitlyShared($explicitlyShared)
  {
    $this->explicitlyShared = $explicitlyShared;
  }
  /**
   * @return bool
   */
  public function getExplicitlyShared()
  {
    return $this->explicitlyShared;
  }
  /**
   * Output only. Indicates whether there is a recommended budget for this
   * campaign budget. This field is read-only.
   *
   * @param bool $hasRecommendedBudget
   */
  public function setHasRecommendedBudget($hasRecommendedBudget)
  {
    $this->hasRecommendedBudget = $hasRecommendedBudget;
  }
  /**
   * @return bool
   */
  public function getHasRecommendedBudget()
  {
    return $this->hasRecommendedBudget;
  }
  /**
   * Output only. The ID of the campaign budget. A campaign budget is created
   * using the CampaignBudgetService create operation and is assigned a budget
   * ID. A budget ID can be shared across different campaigns; the system will
   * then allocate the campaign budget among different campaigns to get optimum
   * results.
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
   * The name of the campaign budget. When creating a campaign budget through
   * CampaignBudgetService, every explicitly shared campaign budget must have a
   * non-null, non-empty name. Campaign budgets that are not explicitly shared
   * derive their name from the attached campaign's name. The length of this
   * string must be between 1 and 255, inclusive, in UTF-8 bytes, (trimmed).
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
   * Immutable. Period over which to spend the budget. Defaults to DAILY if not
   * specified.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DAILY, CUSTOM_PERIOD
   *
   * @param self::PERIOD_* $period
   */
  public function setPeriod($period)
  {
    $this->period = $period;
  }
  /**
   * @return self::PERIOD_*
   */
  public function getPeriod()
  {
    return $this->period;
  }
  /**
   * Output only. The recommended budget amount. If no recommendation is
   * available, this will be set to the budget amount. Amount is specified in
   * micros, where one million is equivalent to one currency unit. This field is
   * read-only.
   *
   * @param string $recommendedBudgetAmountMicros
   */
  public function setRecommendedBudgetAmountMicros($recommendedBudgetAmountMicros)
  {
    $this->recommendedBudgetAmountMicros = $recommendedBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getRecommendedBudgetAmountMicros()
  {
    return $this->recommendedBudgetAmountMicros;
  }
  /**
   * Output only. The estimated change in weekly clicks if the recommended
   * budget is applied. This field is read-only.
   *
   * @param string $recommendedBudgetEstimatedChangeWeeklyClicks
   */
  public function setRecommendedBudgetEstimatedChangeWeeklyClicks($recommendedBudgetEstimatedChangeWeeklyClicks)
  {
    $this->recommendedBudgetEstimatedChangeWeeklyClicks = $recommendedBudgetEstimatedChangeWeeklyClicks;
  }
  /**
   * @return string
   */
  public function getRecommendedBudgetEstimatedChangeWeeklyClicks()
  {
    return $this->recommendedBudgetEstimatedChangeWeeklyClicks;
  }
  /**
   * Output only. The estimated change in weekly cost in micros if the
   * recommended budget is applied. One million is equivalent to one currency
   * unit. This field is read-only.
   *
   * @param string $recommendedBudgetEstimatedChangeWeeklyCostMicros
   */
  public function setRecommendedBudgetEstimatedChangeWeeklyCostMicros($recommendedBudgetEstimatedChangeWeeklyCostMicros)
  {
    $this->recommendedBudgetEstimatedChangeWeeklyCostMicros = $recommendedBudgetEstimatedChangeWeeklyCostMicros;
  }
  /**
   * @return string
   */
  public function getRecommendedBudgetEstimatedChangeWeeklyCostMicros()
  {
    return $this->recommendedBudgetEstimatedChangeWeeklyCostMicros;
  }
  /**
   * Output only. The estimated change in weekly interactions if the recommended
   * budget is applied. This field is read-only.
   *
   * @param string $recommendedBudgetEstimatedChangeWeeklyInteractions
   */
  public function setRecommendedBudgetEstimatedChangeWeeklyInteractions($recommendedBudgetEstimatedChangeWeeklyInteractions)
  {
    $this->recommendedBudgetEstimatedChangeWeeklyInteractions = $recommendedBudgetEstimatedChangeWeeklyInteractions;
  }
  /**
   * @return string
   */
  public function getRecommendedBudgetEstimatedChangeWeeklyInteractions()
  {
    return $this->recommendedBudgetEstimatedChangeWeeklyInteractions;
  }
  /**
   * Output only. The estimated change in weekly views if the recommended budget
   * is applied. This field is read-only.
   *
   * @param string $recommendedBudgetEstimatedChangeWeeklyViews
   */
  public function setRecommendedBudgetEstimatedChangeWeeklyViews($recommendedBudgetEstimatedChangeWeeklyViews)
  {
    $this->recommendedBudgetEstimatedChangeWeeklyViews = $recommendedBudgetEstimatedChangeWeeklyViews;
  }
  /**
   * @return string
   */
  public function getRecommendedBudgetEstimatedChangeWeeklyViews()
  {
    return $this->recommendedBudgetEstimatedChangeWeeklyViews;
  }
  /**
   * Output only. The number of campaigns actively using the budget. This field
   * is read-only.
   *
   * @param string $referenceCount
   */
  public function setReferenceCount($referenceCount)
  {
    $this->referenceCount = $referenceCount;
  }
  /**
   * @return string
   */
  public function getReferenceCount()
  {
    return $this->referenceCount;
  }
  /**
   * Immutable. The resource name of the campaign budget. Campaign budget
   * resource names have the form:
   * `customers/{customer_id}/campaignBudgets/{campaign_budget_id}`
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
   * Output only. The status of this campaign budget. This field is read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED
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
   * The total amount to be spent by the campaign over its entire duration. This
   * field is used *only* when the CampaignBudget `period` is set to
   * `CUSTOM_PERIOD`. It represents the budget cap for the campaign's lifetime,
   * rather than a daily limit. The amount is specified in micros in the
   * account's local currency. One million micros is equivalent to one currency
   * unit. This field is mutually exclusive with 'amount_micros'. Only one of
   * 'total_amount_micros' or 'amount_micros' should be set.
   *
   * @param string $totalAmountMicros
   */
  public function setTotalAmountMicros($totalAmountMicros)
  {
    $this->totalAmountMicros = $totalAmountMicros;
  }
  /**
   * @return string
   */
  public function getTotalAmountMicros()
  {
    return $this->totalAmountMicros;
  }
  /**
   * Immutable. The type of the campaign budget.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, STANDARD, FIXED_CPA, SMART_CAMPAIGN,
   * LOCAL_SERVICES
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
class_alias(GoogleAdsSearchads360V23ResourcesCampaignBudget::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignBudget');
