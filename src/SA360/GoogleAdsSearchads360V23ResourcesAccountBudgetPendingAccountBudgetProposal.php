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

class GoogleAdsSearchads360V23ResourcesAccountBudgetPendingAccountBudgetProposal extends \Google\Model
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
  public const SPENDING_LIMIT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SPENDING_LIMIT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Infinite, indicates unlimited spending power.
   */
  public const SPENDING_LIMIT_TYPE_INFINITE = 'INFINITE';
  /**
   * Output only. The resource name of the proposal. AccountBudgetProposal
   * resource names have the form: `customers/{customer_id}/accountBudgetProposa
   * ls/{account_budget_proposal_id}`
   *
   * @var string
   */
  public $accountBudgetProposal;
  /**
   * Output only. The time when this account-level budget proposal was created.
   * Formatted as yyyy-MM-dd HH:mm:ss.
   *
   * @var string
   */
  public $creationDateTime;
  /**
   * Output only. The end time in yyyy-MM-dd HH:mm:ss format.
   *
   * @var string
   */
  public $endDateTime;
  /**
   * Output only. The end time as a well-defined type, for example, FOREVER.
   *
   * @var string
   */
  public $endTimeType;
  /**
   * Output only. The name to assign to the account-level budget.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Notes associated with this budget.
   *
   * @var string
   */
  public $notes;
  /**
   * Output only. The type of this proposal, for example, END to end the budget
   * associated with this proposal.
   *
   * @var string
   */
  public $proposalType;
  /**
   * Output only. A purchase order number is a value that helps users reference
   * this budget in their monthly invoices.
   *
   * @var string
   */
  public $purchaseOrderNumber;
  /**
   * Output only. The spending limit in micros. One million is equivalent to one
   * unit.
   *
   * @var string
   */
  public $spendingLimitMicros;
  /**
   * Output only. The spending limit as a well-defined type, for example,
   * INFINITE.
   *
   * @var string
   */
  public $spendingLimitType;
  /**
   * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
   *
   * @var string
   */
  public $startDateTime;

  /**
   * Output only. The resource name of the proposal. AccountBudgetProposal
   * resource names have the form: `customers/{customer_id}/accountBudgetProposa
   * ls/{account_budget_proposal_id}`
   *
   * @param string $accountBudgetProposal
   */
  public function setAccountBudgetProposal($accountBudgetProposal)
  {
    $this->accountBudgetProposal = $accountBudgetProposal;
  }
  /**
   * @return string
   */
  public function getAccountBudgetProposal()
  {
    return $this->accountBudgetProposal;
  }
  /**
   * Output only. The time when this account-level budget proposal was created.
   * Formatted as yyyy-MM-dd HH:mm:ss.
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
   * Output only. The end time in yyyy-MM-dd HH:mm:ss format.
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
   * Output only. The end time as a well-defined type, for example, FOREVER.
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
   * Output only. The name to assign to the account-level budget.
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
   * Output only. Notes associated with this budget.
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
   * Output only. The type of this proposal, for example, END to end the budget
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
   * Output only. The spending limit in micros. One million is equivalent to one
   * unit.
   *
   * @param string $spendingLimitMicros
   */
  public function setSpendingLimitMicros($spendingLimitMicros)
  {
    $this->spendingLimitMicros = $spendingLimitMicros;
  }
  /**
   * @return string
   */
  public function getSpendingLimitMicros()
  {
    return $this->spendingLimitMicros;
  }
  /**
   * Output only. The spending limit as a well-defined type, for example,
   * INFINITE.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INFINITE
   *
   * @param self::SPENDING_LIMIT_TYPE_* $spendingLimitType
   */
  public function setSpendingLimitType($spendingLimitType)
  {
    $this->spendingLimitType = $spendingLimitType;
  }
  /**
   * @return self::SPENDING_LIMIT_TYPE_*
   */
  public function getSpendingLimitType()
  {
    return $this->spendingLimitType;
  }
  /**
   * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAccountBudgetPendingAccountBudgetProposal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAccountBudgetPendingAccountBudgetProposal');
