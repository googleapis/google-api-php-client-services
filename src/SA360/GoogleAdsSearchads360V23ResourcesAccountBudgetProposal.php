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

class GoogleAdsSearchads360V23ResourcesAccountBudgetProposal extends \Google\Model
{
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
  public const PROPOSAL_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PROPOSAL_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Identifies a request to create a new budget.
   */
  public const PROPOSAL_TYPE_CREATE = 'CREATE';
  /**
   * Identifies a request to edit an existing budget.
   */
  public const PROPOSAL_TYPE_UPDATE = 'UPDATE';
  /**
   * Identifies a request to end a budget that has already started.
   */
  public const PROPOSAL_TYPE_END = 'END';
  /**
   * Identifies a request to remove a budget that hasn't started yet.
   */
  public const PROPOSAL_TYPE_REMOVE = 'REMOVE';
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
  public const PROPOSED_START_TIME_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PROPOSED_START_TIME_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * As soon as possible.
   */
  public const PROPOSED_START_TIME_TYPE_NOW = 'NOW';
  /**
   * An infinite point in the future.
   */
  public const PROPOSED_START_TIME_TYPE_FOREVER = 'FOREVER';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The proposal is pending approval.
   */
  public const STATUS_PENDING = 'PENDING';
  /**
   * The proposal has been approved but the corresponding billing setup has not.
   * This can occur for proposals that set up the first budget when signing up
   * for billing or when performing a change of bill-to operation.
   */
  public const STATUS_APPROVED_HELD = 'APPROVED_HELD';
  /**
   * The proposal has been approved.
   */
  public const STATUS_APPROVED = 'APPROVED';
  /**
   * The proposal has been cancelled by the user.
   */
  public const STATUS_CANCELLED = 'CANCELLED';
  /**
   * The proposal has been rejected by the user, for example, by rejecting an
   * acceptance email.
   */
  public const STATUS_REJECTED = 'REJECTED';
  /**
   * Immutable. The resource name of the account-level budget associated with
   * this proposal.
   *
   * @var string
   */
  public $accountBudget;
  /**
   * Output only. The date time when this account-level budget was approved, if
   * applicable.
   *
   * @var string
   */
  public $approvalDateTime;
  /**
   * Output only. The approved end date time in yyyy-mm-dd hh:mm:ss format.
   *
   * @var string
   */
  public $approvedEndDateTime;
  /**
   * Output only. The approved end date time as a well-defined type, for
   * example, FOREVER.
   *
   * @var string
   */
  public $approvedEndTimeType;
  /**
   * Output only. The approved spending limit in micros. One million is
   * equivalent to one unit.
   *
   * @var string
   */
  public $approvedSpendingLimitMicros;
  /**
   * Output only. The approved spending limit as a well-defined type, for
   * example, INFINITE.
   *
   * @var string
   */
  public $approvedSpendingLimitType;
  /**
   * Output only. The approved start date time in yyyy-mm-dd hh:mm:ss format.
   *
   * @var string
   */
  public $approvedStartDateTime;
  /**
   * Immutable. The resource name of the billing setup associated with this
   * proposal.
   *
   * @var string
   */
  public $billingSetup;
  /**
   * Output only. The date time when this account-level budget proposal was
   * created, which is not the same as its approval date time, if applicable.
   *
   * @var string
   */
  public $creationDateTime;
  /**
   * Output only. The ID of the proposal.
   *
   * @var string
   */
  public $id;
  /**
   * Immutable. The type of this proposal, for example, END to end the budget
   * associated with this proposal.
   *
   * @var string
   */
  public $proposalType;
  /**
   * Immutable. The proposed end date time in yyyy-mm-dd hh:mm:ss format.
   *
   * @var string
   */
  public $proposedEndDateTime;
  /**
   * Immutable. The proposed end date time as a well-defined type, for example,
   * FOREVER.
   *
   * @var string
   */
  public $proposedEndTimeType;
  /**
   * Immutable. The name to assign to the account-level budget.
   *
   * @var string
   */
  public $proposedName;
  /**
   * Immutable. Notes associated with this budget.
   *
   * @var string
   */
  public $proposedNotes;
  /**
   * Immutable. A purchase order number is a value that enables the user to help
   * them reference this budget in their monthly invoices.
   *
   * @var string
   */
  public $proposedPurchaseOrderNumber;
  /**
   * Immutable. The proposed spending limit in micros. One million is equivalent
   * to one unit.
   *
   * @var string
   */
  public $proposedSpendingLimitMicros;
  /**
   * Immutable. The proposed spending limit as a well-defined type, for example,
   * INFINITE.
   *
   * @var string
   */
  public $proposedSpendingLimitType;
  /**
   * Immutable. The proposed start date time in yyyy-mm-dd hh:mm:ss format.
   *
   * @var string
   */
  public $proposedStartDateTime;
  /**
   * Immutable. The proposed start date time as a well-defined type, for
   * example, NOW.
   *
   * @var string
   */
  public $proposedStartTimeType;
  /**
   * Immutable. The resource name of the proposal. AccountBudgetProposal
   * resource names have the form: `customers/{customer_id}/accountBudgetProposa
   * ls/{account_budget_proposal_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of this proposal. When a new proposal is created,
   * the status defaults to PENDING.
   *
   * @var string
   */
  public $status;

  /**
   * Immutable. The resource name of the account-level budget associated with
   * this proposal.
   *
   * @param string $accountBudget
   */
  public function setAccountBudget($accountBudget)
  {
    $this->accountBudget = $accountBudget;
  }
  /**
   * @return string
   */
  public function getAccountBudget()
  {
    return $this->accountBudget;
  }
  /**
   * Output only. The date time when this account-level budget was approved, if
   * applicable.
   *
   * @param string $approvalDateTime
   */
  public function setApprovalDateTime($approvalDateTime)
  {
    $this->approvalDateTime = $approvalDateTime;
  }
  /**
   * @return string
   */
  public function getApprovalDateTime()
  {
    return $this->approvalDateTime;
  }
  /**
   * Output only. The approved end date time in yyyy-mm-dd hh:mm:ss format.
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
   * Output only. The approved end date time as a well-defined type, for
   * example, FOREVER.
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
   * equivalent to one unit.
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
   * example, INFINITE.
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
   * Output only. The approved start date time in yyyy-mm-dd hh:mm:ss format.
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
   * Immutable. The resource name of the billing setup associated with this
   * proposal.
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
   * Output only. The date time when this account-level budget proposal was
   * created, which is not the same as its approval date time, if applicable.
   *
   * @param string $creationDateTime
   */
  public function setCreationDateTime($creationDateTime)
  {
    $this->creationDateTime = $creationDateTime;
  }
  /**
   * @return string
   */
  public function getCreationDateTime()
  {
    return $this->creationDateTime;
  }
  /**
   * Output only. The ID of the proposal.
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
   * Immutable. The type of this proposal, for example, END to end the budget
   * associated with this proposal.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CREATE, UPDATE, END, REMOVE
   *
   * @param self::PROPOSAL_TYPE_* $proposalType
   */
  public function setProposalType($proposalType)
  {
    $this->proposalType = $proposalType;
  }
  /**
   * @return self::PROPOSAL_TYPE_*
   */
  public function getProposalType()
  {
    return $this->proposalType;
  }
  /**
   * Immutable. The proposed end date time in yyyy-mm-dd hh:mm:ss format.
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
   * Immutable. The proposed end date time as a well-defined type, for example,
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
   * Immutable. The name to assign to the account-level budget.
   *
   * @param string $proposedName
   */
  public function setProposedName($proposedName)
  {
    $this->proposedName = $proposedName;
  }
  /**
   * @return string
   */
  public function getProposedName()
  {
    return $this->proposedName;
  }
  /**
   * Immutable. Notes associated with this budget.
   *
   * @param string $proposedNotes
   */
  public function setProposedNotes($proposedNotes)
  {
    $this->proposedNotes = $proposedNotes;
  }
  /**
   * @return string
   */
  public function getProposedNotes()
  {
    return $this->proposedNotes;
  }
  /**
   * Immutable. A purchase order number is a value that enables the user to help
   * them reference this budget in their monthly invoices.
   *
   * @param string $proposedPurchaseOrderNumber
   */
  public function setProposedPurchaseOrderNumber($proposedPurchaseOrderNumber)
  {
    $this->proposedPurchaseOrderNumber = $proposedPurchaseOrderNumber;
  }
  /**
   * @return string
   */
  public function getProposedPurchaseOrderNumber()
  {
    return $this->proposedPurchaseOrderNumber;
  }
  /**
   * Immutable. The proposed spending limit in micros. One million is equivalent
   * to one unit.
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
   * Immutable. The proposed spending limit as a well-defined type, for example,
   * INFINITE.
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
   * Immutable. The proposed start date time in yyyy-mm-dd hh:mm:ss format.
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
   * Immutable. The proposed start date time as a well-defined type, for
   * example, NOW.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOW, FOREVER
   *
   * @param self::PROPOSED_START_TIME_TYPE_* $proposedStartTimeType
   */
  public function setProposedStartTimeType($proposedStartTimeType)
  {
    $this->proposedStartTimeType = $proposedStartTimeType;
  }
  /**
   * @return self::PROPOSED_START_TIME_TYPE_*
   */
  public function getProposedStartTimeType()
  {
    return $this->proposedStartTimeType;
  }
  /**
   * Immutable. The resource name of the proposal. AccountBudgetProposal
   * resource names have the form: `customers/{customer_id}/accountBudgetProposa
   * ls/{account_budget_proposal_id}`
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
   * Output only. The status of this proposal. When a new proposal is created,
   * the status defaults to PENDING.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, APPROVED_HELD, APPROVED,
   * CANCELLED, REJECTED
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
class_alias(GoogleAdsSearchads360V23ResourcesAccountBudgetProposal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAccountBudgetProposal');
