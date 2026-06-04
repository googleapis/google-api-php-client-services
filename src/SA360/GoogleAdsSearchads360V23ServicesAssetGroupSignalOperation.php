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

class GoogleAdsSearchads360V23ServicesAssetGroupSignalOperation extends \Google\Collection
{
  protected $collection_key = 'exemptPolicyViolationKeys';
  protected $createType = GoogleAdsSearchads360V23ResourcesAssetGroupSignal::class;
  protected $createDataType = '';
  protected $exemptPolicyViolationKeysType = GoogleAdsSearchads360V23CommonPolicyViolationKey::class;
  protected $exemptPolicyViolationKeysDataType = 'array';
  /**
   * Remove operation: A resource name for the removed asset group signal is
   * expected, in this format:
   * `customers/{customer_id}/assetGroupSignals/{asset_group_id}~{criterion_id}`
   *
   * @var string
   */
  public $remove;

  /**
   * Create operation: No resource name is expected for the new asset group
   * signal.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetGroupSignal $create
   */
  public function setCreate(GoogleAdsSearchads360V23ResourcesAssetGroupSignal $create)
  {
    $this->create = $create;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetGroupSignal
   */
  public function getCreate()
  {
    return $this->create;
  }
  /**
   * Optional. The list of policy violation keys that should not cause a
   * PolicyViolationError to be reported. Not all policy violations are
   * exemptable, refer to the is_exemptible field in the returned
   * PolicyViolationError. Resources violating these polices will be saved, but
   * will not be eligible to serve. They may begin serving at a later time due
   * to a change in policies, re-review of the resource, or a change in
   * advertiser certificates.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyViolationKey[] $exemptPolicyViolationKeys
   */
  public function setExemptPolicyViolationKeys($exemptPolicyViolationKeys)
  {
    $this->exemptPolicyViolationKeys = $exemptPolicyViolationKeys;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyViolationKey[]
   */
  public function getExemptPolicyViolationKeys()
  {
    return $this->exemptPolicyViolationKeys;
  }
  /**
   * Remove operation: A resource name for the removed asset group signal is
   * expected, in this format:
   * `customers/{customer_id}/assetGroupSignals/{asset_group_id}~{criterion_id}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAssetGroupSignalOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAssetGroupSignalOperation');
