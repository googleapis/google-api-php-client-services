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

class GoogleAdsSearchads360V23ResourcesAccountBudget extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ADJUSTED_SPENDING_LIMIT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ADJUSTED_SPENDING_LIMIT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Infinite, indicates unlimited spending power.
   */
  public const ADJUSTED_SPENDING_LIMIT_TYPE_INFINITE = 'INFINITE';
  /**
   * Not specified.
   */
  public const APPROVED_END_TIME_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const APPROVED_END_TIME_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * As soon as possible.
   */
  public const APPROVED_END_TIME_TYPE_NOW = 'NOW';
  /**
   * An infinite point in the future.
   */
  public const APPROVED_END_TIME_TYPE_FOREVER = 'FOREVER';
  /**
   * Not specified.
   */
  public const APPROVED_SPENDING_LIMIT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const APPROVED_SPENDING_LIMIT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Infinite, indicates unlimited spending power.
   */
  public const APPROVED_SPENDING_LIMIT_TYPE_INFINITE = 'INFINITE';
  /**
   * Not specified.
   */
  public const PROPOSED_END_TIME_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PROPOSED_END_TIME_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * As soon as possible.
   */
  public const PROPOSED_END_TIME_TYPE_NOW = 'NOW';
  /**
   * An infinite point in the future.
   */
  public const PROPOSED_END_TIME_TYPE_FOREVER = 'FOREVER';
  /**
   * Not specified.
   */
  public const PROPOSED_SPENDING_LIMIT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PROPOSED_SPENDING_LIMIT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Infinite, indicates unlimited spending power.
   */
  public const PROPOSED_SPENDING_LIMIT_TYPE_INFINITE = 'INFINITE';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The account budget is pending approval.
   */
  public const STATUS_PENDING = 'PENDING';
  /**
   * The account budget has been approved.
   */
  public const STATUS_APPROVED = 'APPROVED';
  /**
   * The account budget has been cancelled by the user.
   */
  public const STATUS_CANCELLED = 'CANCELLED';
  /**
   * Output only. The adjusted spending limit in micros. One million is
   * equivalent to one unit. If the approved spending limit is finite, the
   * adjusted spending limit may vary depending on the types of adjustments
   * applied to this budget, if applicable. The different kinds of adjustments
   * are described here: https://support.google.com/google-ads/answer/1704323
   * For example, a debit adjustment reduces how much the account is allowed to
   * spend.
   *
   * @var string
   */
  public $adjustedSpendingLimitMicros;
  /**
   * Output only. The adjusted spending limit as a well-defined type, for
   * example, INFINITE. This will only be populated if the adjusted spending
   * limit is INFINITE, which is guaranteed to be true if the approved spending
   * limit is INFINITE.
   *
   * @var string
   */
  public $adjustedSpendingLimitType;
  /**
   * Output only. The value of Ads that have been served, in micros. This
   * includes overdelivery costs, in which case a credit might be automatically
   * applied to the budget (see total_adjustments_micros).
   *
   * @var string
   */
  public $amountServedMicros;
  /**
   * Output only. The approved end time in yyyy-MM-dd HH:mm:ss format.
   *
   * @var string
   */
  public $approvedEndDateTime;
  /**
   * Output only. The approved end time as a well-defined type, for example,
   * FOREVER.
   *
   * @var string
   */
  public $approvedEndTimeType;
  /**
   * Output only. The approved spending limit in micros. One million is
   * equivalent to one unit. This will only be populated if the proposed
   * spending limit is finite, and will always be greater than or equal to the
   * proposed spending limit.
   *
   * @var string
   */
  public $approvedSpendingLimitMicros;
  /**
   * Output only. The approved spending limit as a well-defined type, for
   * example, INFINITE. This will only be populated if the approved spending
   * limit is INFINITE.
   *
   * @var string
   */
  public $approvedSpendingLimitType;
  /**
   * Output only. The approved start time of the account-level budget in yyyy-
   * MM-dd HH:mm:ss format. For example, if a new budget is approved after the
   * proposed start time, the approved start time is the time of approval.
   *
   * @var string
   */
  public $approvedStartDateTime;
  /**
   * Output only. The resource name of the billing setup associated with this
   * account-level budget. BillingSetup resource names have the form:
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
   *
   * @var string
   */
  public $billingSetup;
  /**
   * Output only. The ID of the account-level budget.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The name of the account-level budget.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Notes associated with the budget.
   *
   * @var string
   */
  public $notes;
  protected $pendingProposalType = GoogleAdsSearchads360V23ResourcesAccountBudgetPendingAccountBudgetProposal::class;
  protected $pendingProposalDataType = '';
  /**
   * Output only. The proposed end time in yyyy-MM-dd HH:mm:ss format.
   *
   * @var string
   */
  public $proposedEndDateTime;
  /**
   * Output only. The proposed end time as a well-defined type, for example,
   * FOREVER.
   *
   * @var string
   */
  public $proposedEndTimeType;
  /**
   * Output only. The proposed spending limit in micros. One million is
   * equivalent to one unit.
   *
   * @var string
   */
  public $proposedSpendingLimitMicros;
  /**
   * Output only. The proposed spending limit as a well-defined type, for
   * example, INFINITE.
   *
   * @var string
   */
  public $proposedSpendingLimitType;
  /**
   * Output only. The proposed start time of the account-level budget in yyyy-
   * MM-dd HH:mm:ss format. If a start time type of NOW was proposed, this is
   * the time of request.
   *
   * @var string
   */
  public $proposedStartDateTime;
  /**
   * Output only. A purchase order number is a value that helps users reference
   * this budget in their monthly invoices.
   *
   * @var string
   */
  public $purchaseOrderNumber;
  /**
   * Output only. The resource name of the account-level budget. AccountBudget
   * resource names have the form:
   * `customers/{customer_id}/accountBudgets/{account_budget_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of this account-level budget.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. The total adjustments amount. An example of an adjustment is
   * courtesy credits.
   *
   * @var string
   */
  public $totalAdjustmentsMicros;

  /**
   * Output only. The adjusted spending limit in micros. One million is
   * equivalent to one unit. If the approved spending limit is finite, the
   * adjusted spending limit may vary depending on the types of adjustments
   * applied to this budget, if applicable. The different kinds of adjustments
   * are described here: https://support.google.com/google-ads/answer/1704323
   * For example, a debit adjustment reduces how much the account is allowed to
   * spend.
   *
   * @param string $adjustedSpendingLimitMicros
   */
  public function setAdjustedSpendingLimitMicros($adjustedSpendingLimitMicros)
  {
    $this->adjustedSpendingLimitMicros = $adjustedSpendingLimitMicros;
  }
  /**
   * @return string
   */
  public function getAdjustedSpendingLimitMicros()
  {
    return $this->adjustedSpendingLimitMicros;
  }
  /**
   * Output only. The adjusted spending limit as a well-defined type, for
   * example, INFINITE. This will only be populated if the adjusted spending
   * limit is INFINITE, which is guaranteed to be true if the approved spending
   * limit is INFINITE.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INFINITE
   *
   * @param self::ADJUSTED_SPENDING_LIMIT_TYPE_* $adjustedSpendingLimitType
   */
  public function setAdjustedSpendingLimitType($adjustedSpendingLimitType)
  {
    $this->adjustedSpendingLimitType = $adjustedSpendingLimitType;
  }
  /**
   * @return self::ADJUSTED_SPENDING_LIMIT_TYPE_*
   */
  public function getAdjustedSpendingLimitType()
  {
    return $this->adjustedSpendingLimitType;
  }
  /**
   * Output only. The value of Ads that have been served, in micros. This
   * includes overdelivery costs, in which case a credit might be automatically
   * applied to the budget (see total_adjustments_micros).
   *
   * @param string $amountServedMicros
   */
  public function setAmountServedMicros($amountServedMicros)
  {
    $this->amountServedMicros = $amountServedMicros;
  }
  /**
   * @return string
   */
  public function getAmountServedMicros()
  {
    return $this->amountServedMicros;
  }
  /**
   * Output only. The approved end time in yyyy-MM-dd HH:mm:ss format.
   *
   * @param string $approvedEndDateTime
   */
  public function setApprovedEndDateTime($approvedEndDateTime)
  {
    $this->approvedEndDateTime = $approvedEndDateTime;
  }
  /**
   * @return string
   */
  public function getApprovedEndDateTime()
  {
    return $this->approvedEndDateTime;
  }
  /**
   * Output only. The approved end time as a well-defined type, for example,
   * FOREVER.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOW, FOREVER
   *
   * @param self::APPROVED_END_TIME_TYPE_* $approvedEndTimeType
   */
  public function setApprovedEndTimeType($approvedEndTimeType)
  {
    $this->approvedEndTimeType = $approvedEndTimeType;
  }
  /**
   * @return self::APPROVED_END_TIME_TYPE_*
   */
  public function getApprovedEndTimeType()
  {
    return $this->approvedEndTimeType;
  }
  /**
   * Output only. The approved spending limit in micros. One million is
   * equivalent to one unit. This will only be populated if the proposed
   * spending limit is finite, and will always be greater than or equal to the
   * proposed spending limit.
   *
   * @param string $approvedSpendingLimitMicros
   */
  public function setApprovedSpendingLimitMicros($approvedSpendingLimitMicros)
  {
    $this->approvedSpendingLimitMicros = $approvedSpendingLimitMicros;
  }
  /**
   * @return string
   */
  public function getApprovedSpendingLimitMicros()
  {
    return $this->approvedSpendingLimitMicros;
  }
  /**
   * Output only. The approved spending limit as a well-defined type, for
   * example, INFINITE. This will only be populated if the approved spending
   * limit is INFINITE.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INFINITE
   *
   * @param self::APPROVED_SPENDING_LIMIT_TYPE_* $approvedSpendingLimitType
   */
  public function setApprovedSpendingLimitType($approvedSpendingLimitType)
  {
    $this->approvedSpendingLimitType = $approvedSpendingLimitType;
  }
  /**
   * @return self::APPROVED_SPENDING_LIMIT_TYPE_*
   */
  public function getApprovedSpendingLimitType()
  {
    return $this->approvedSpendingLimitType;
  }
  /**
   * Output only. The approved start time of the account-level budget in yyyy-
   * MM-dd HH:mm:ss format. For example, if a new budget is approved after the
   * proposed start time, the approved start time is the time of approval.
   *
   * @param string $approvedStartDateTime
   */
  public function setApprovedStartDateTime($approvedStartDateTime)
  {
    $this->approvedStartDateTime = $approvedStartDateTime;
  }
  /**
   * @return string
   */
  public function getApprovedStartDateTime()
  {
    return $this->approvedStartDateTime;
  }
  /**
   * Output only. The resource name of the billing setup associated with this
   * account-level budget. BillingSetup resource names have the form:
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
   *
   * @param string $billingSetup
   */
  public function setBillingSetup($billingSetup)
  {
    $this->billingSetup = $billingSetup;
  }
  /**
   * @return string
   */
  public function getBillingSetup()
  {
    return $this->billingSetup;
  }
  /**
   * Output only. The ID of the account-level budget.
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
   * Output only. The name of the account-level budget.
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
   * Output only. Notes associated with the budget.
   *
   * @param string $notes
   */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /**
   * @return string
   */
  public function getNotes()
  {
    return $this->notes;
  }
  /**
   * Output only. The pending proposal to modify this budget, if applicable.
   *
   * @param GoogleAdsSearchads360V23ResourcesAccountBudgetPendingAccountBudgetProposal $pendingProposal
   */
  public function setPendingProposal(GoogleAdsSearchads360V23ResourcesAccountBudgetPendingAccountBudgetProposal $pendingProposal)
  {
    $this->pendingProposal = $pendingProposal;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAccountBudgetPendingAccountBudgetProposal
   */
  public function getPendingProposal()
  {
    return $this->pendingProposal;
  }
  /**
   * Output only. The proposed end time in yyyy-MM-dd HH:mm:ss format.
   *
   * @param string $proposedEndDateTime
   */
  public function setProposedEndDateTime($proposedEndDateTime)
  {
    $this->proposedEndDateTime = $proposedEndDateTime;
  }
  /**
   * @return string
   */
  public function getProposedEndDateTime()
  {
    return $this->proposedEndDateTime;
  }
  /**
   * Output only. The proposed end time as a well-defined type, for example,
   * FOREVER.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOW, FOREVER
   *
   * @param self::PROPOSED_END_TIME_TYPE_* $proposedEndTimeType
   */
  public function setProposedEndTimeType($proposedEndTimeType)
  {
    $this->proposedEndTimeType = $proposedEndTimeType;
  }
  /**
   * @return self::PROPOSED_END_TIME_TYPE_*
   */
  public function getProposedEndTimeType()
  {
    return $this->proposedEndTimeType;
  }
  /**
   * Output only. The proposed spending limit in micros. One million is
   * equivalent to one unit.
   *
   * @param string $proposedSpendingLimitMicros
   */
  public function setProposedSpendingLimitMicros($proposedSpendingLimitMicros)
  {
    $this->proposedSpendingLimitMicros = $proposedSpendingLimitMicros;
  }
  /**
   * @return string
   */
  public function getProposedSpendingLimitMicros()
  {
    return $this->proposedSpendingLimitMicros;
  }
  /**
   * Output only. The proposed spending limit as a well-defined type, for
   * example, INFINITE.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INFINITE
   *
   * @param self::PROPOSED_SPENDING_LIMIT_TYPE_* $proposedSpendingLimitType
   */
  public function setProposedSpendingLimitType($proposedSpendingLimitType)
  {
    $this->proposedSpendingLimitType = $proposedSpendingLimitType;
  }
  /**
   * @return self::PROPOSED_SPENDING_LIMIT_TYPE_*
   */
  public function getProposedSpendingLimitType()
  {
    return $this->proposedSpendingLimitType;
  }
  /**
   * Output only. The proposed start time of the account-level budget in yyyy-
   * MM-dd HH:mm:ss format. If a start time type of NOW was proposed, this is
   * the time of request.
   *
   * @param string $proposedStartDateTime
   */
  public function setProposedStartDateTime($proposedStartDateTime)
  {
    $this->proposedStartDateTime = $proposedStartDateTime;
  }
  /**
   * @return string
   */
  public function getProposedStartDateTime()
  {
    return $this->proposedStartDateTime;
  }
  /**
   * Output only. A purchase order number is a value that helps users reference
   * this budget in their monthly invoices.
   *
   * @param string $purchaseOrderNumber
   */
  public function setPurchaseOrderNumber($purchaseOrderNumber)
  {
    $this->purchaseOrderNumber = $purchaseOrderNumber;
  }
  /**
   * @return string
   */
  public function getPurchaseOrderNumber()
  {
    return $this->purchaseOrderNumber;
  }
  /**
   * Output only. The resource name of the account-level budget. AccountBudget
   * resource names have the form:
   * `customers/{customer_id}/accountBudgets/{account_budget_id}`
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
   * Output only. The status of this account-level budget.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, APPROVED, CANCELLED
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
   * Output only. The total adjustments amount. An example of an adjustment is
   * courtesy credits.
   *
   * @param string $totalAdjustmentsMicros
   */
  public function setTotalAdjustmentsMicros($totalAdjustmentsMicros)
  {
    $this->totalAdjustmentsMicros = $totalAdjustmentsMicros;
  }
  /**
   * @return string
   */
  public function getTotalAdjustmentsMicros()
  {
    return $this->totalAdjustmentsMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAccountBudget::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAccountBudget');
