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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2PolicyRule extends \Google\Collection
{
  /**
   * Not used.
   */
  public const RETURN_VERDICT_CONTENT_POLICY_VERDICT_UNSPECIFIED = 'CONTENT_POLICY_VERDICT_UNSPECIFIED';
  /**
   * The policy allows the provided content to be used.
   */
  public const RETURN_VERDICT_ALLOW = 'ALLOW';
  /**
   * The policy prevents the provided content from being used. This should
   * result in a blocked file upload, exclusion from training dataset, or other
   * similar block action. (specific action will depend on the caller).
   */
  public const RETURN_VERDICT_BLOCK = 'BLOCK';
  protected $collection_key = 'conditions';
  protected $actionType = GooglePrivacyDlpV2PolicyAction::class;
  protected $actionDataType = '';
  protected $conditionsType = GooglePrivacyDlpV2PolicyCondition::class;
  protected $conditionsDataType = 'array';
  /**
   * If set, the verdict will be returned to the user. Deprecated: Use `action`
   * instead.
   *
   * @deprecated
   * @var string
   */
  public $returnVerdict;

  /**
   * Required. Action to take if this rule applies.
   *
   * @param GooglePrivacyDlpV2PolicyAction $action
   */
  public function setAction(GooglePrivacyDlpV2PolicyAction $action)
  {
    $this->action = $action;
  }
  /**
   * @return GooglePrivacyDlpV2PolicyAction
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Optional. Conditions that must match for this rule to apply. All conditions
   * must match (`AND`). For `OR` conditions, use multiple rules.
   *
   * @param GooglePrivacyDlpV2PolicyCondition[] $conditions
   */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /**
   * @return GooglePrivacyDlpV2PolicyCondition[]
   */
  public function getConditions()
  {
    return $this->conditions;
  }
  /**
   * If set, the verdict will be returned to the user. Deprecated: Use `action`
   * instead.
   *
   * Accepted values: CONTENT_POLICY_VERDICT_UNSPECIFIED, ALLOW, BLOCK
   *
   * @deprecated
   * @param self::RETURN_VERDICT_* $returnVerdict
   */
  public function setReturnVerdict($returnVerdict)
  {
    $this->returnVerdict = $returnVerdict;
  }
  /**
   * @deprecated
   * @return self::RETURN_VERDICT_*
   */
  public function getReturnVerdict()
  {
    return $this->returnVerdict;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2PolicyRule::class, 'Google_Service_DLP_GooglePrivacyDlpV2PolicyRule');
