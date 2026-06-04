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

class GoogleAdsSearchads360V23ServicesAccountBudgetProposalOperation extends \Google\Model
{
  protected $createType = GoogleAdsSearchads360V23ResourcesAccountBudgetProposal::class;
  protected $createDataType = '';
  /**
   * Remove operation: A resource name for the removed proposal is expected, in
   * this format: `customers/{customer_id}/accountBudgetProposals/{account_budge
   * t_proposal_id}` A request may be cancelled iff it is pending.
   *
   * @var string
   */
  public $remove;
  /**
   * FieldMask that determines which budget fields are modified. While budgets
   * may be modified, proposals that propose such modifications are final.
   * Therefore, update operations are not supported for proposals. Proposals
   * that modify budgets have the 'update' proposal type. Specifying a mask for
   * any other proposal type is considered an error.
   *
   * @var string
   */
  public $updateMask;

  /**
   * Create operation: A new proposal to create a new budget, edit an existing
   * budget, end an actively running budget, or remove an approved budget
   * scheduled to start in the future. No resource name is expected for the new
   * proposal.
   *
   * @param GoogleAdsSearchads360V23ResourcesAccountBudgetProposal $create
   */
  public function setCreate(GoogleAdsSearchads360V23ResourcesAccountBudgetProposal $create)
  {
    $this->create = $create;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAccountBudgetProposal
   */
  public function getCreate()
  {
    return $this->create;
  }
  /**
   * Remove operation: A resource name for the removed proposal is expected, in
   * this format: `customers/{customer_id}/accountBudgetProposals/{account_budge
   * t_proposal_id}` A request may be cancelled iff it is pending.
   *
   * @param string $remove
   */
  public function setRemove($remove)
  {
    $this->remove = $remove;
  }
  /**
   * @return string
   */
  public function getRemove()
  {
    return $this->remove;
  }
  /**
   * FieldMask that determines which budget fields are modified. While budgets
   * may be modified, proposals that propose such modifications are final.
   * Therefore, update operations are not supported for proposals. Proposals
   * that modify budgets have the 'update' proposal type. Specifying a mask for
   * any other proposal type is considered an error.
   *
   * @param string $updateMask
   */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /**
   * @return string
   */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAccountBudgetProposalOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAccountBudgetProposalOperation');
