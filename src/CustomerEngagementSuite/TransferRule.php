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

namespace Google\Service\CustomerEngagementSuite;

class TransferRule extends \Google\Model
{
  /**
   * Unspecified direction.
   */
  public const DIRECTION_DIRECTION_UNSPECIFIED = 'DIRECTION_UNSPECIFIED';
  /**
   * Transfer from the parent agent to the child agent.
   */
  public const DIRECTION_PARENT_TO_CHILD = 'PARENT_TO_CHILD';
  /**
   * Transfer from the child agent to the parent agent.
   */
  public const DIRECTION_CHILD_TO_PARENT = 'CHILD_TO_PARENT';
  /**
   * Required. The resource name of the child agent the rule applies to. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @var string
   */
  public $childAgent;
  protected $deterministicTransferType = TransferRuleDeterministicTransfer::class;
  protected $deterministicTransferDataType = '';
  /**
   * Required. The direction of the transfer.
   *
   * @var string
   */
  public $direction;
  protected $disablePlannerTransferType = TransferRuleDisablePlannerTransfer::class;
  protected $disablePlannerTransferDataType = '';

  /**
   * Required. The resource name of the child agent the rule applies to. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @param string $childAgent
   */
  public function setChildAgent($childAgent)
  {
    $this->childAgent = $childAgent;
  }
  /**
   * @return string
   */
  public function getChildAgent()
  {
    return $this->childAgent;
  }
  /**
   * Optional. A rule that immediately transfers to the target agent when the
   * condition is met.
   *
   * @param TransferRuleDeterministicTransfer $deterministicTransfer
   */
  public function setDeterministicTransfer(TransferRuleDeterministicTransfer $deterministicTransfer)
  {
    $this->deterministicTransfer = $deterministicTransfer;
  }
  /**
   * @return TransferRuleDeterministicTransfer
   */
  public function getDeterministicTransfer()
  {
    return $this->deterministicTransfer;
  }
  /**
   * Required. The direction of the transfer.
   *
   * Accepted values: DIRECTION_UNSPECIFIED, PARENT_TO_CHILD, CHILD_TO_PARENT
   *
   * @param self::DIRECTION_* $direction
   */
  public function setDirection($direction)
  {
    $this->direction = $direction;
  }
  /**
   * @return self::DIRECTION_*
   */
  public function getDirection()
  {
    return $this->direction;
  }
  /**
   * Optional. Rule that prevents the planner from transferring to the target
   * agent.
   *
   * @param TransferRuleDisablePlannerTransfer $disablePlannerTransfer
   */
  public function setDisablePlannerTransfer(TransferRuleDisablePlannerTransfer $disablePlannerTransfer)
  {
    $this->disablePlannerTransfer = $disablePlannerTransfer;
  }
  /**
   * @return TransferRuleDisablePlannerTransfer
   */
  public function getDisablePlannerTransfer()
  {
    return $this->disablePlannerTransfer;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransferRule::class, 'Google_Service_CustomerEngagementSuite_TransferRule');
