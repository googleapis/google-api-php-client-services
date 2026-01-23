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

namespace Google\Service\WorkloadManager;

class ViolationDetails extends \Google\Collection
{
  protected $collection_key = 'ruleOutput';
  /**
   * The name of the asset.
   *
   * @var string
   */
  public $asset;
  /**
   * Details of the violation.
   *
   * @var string[]
   */
  public $observed;
  protected $ruleOutputType = RuleOutput::class;
  protected $ruleOutputDataType = 'array';
  /**
   * The service account associated with the resource.
   *
   * @var string
   */
  public $serviceAccount;

  /**
   * The name of the asset.
   *
   * @param string $asset
   */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /**
   * @return string
   */
  public function getAsset()
  {
    return $this->asset;
  }
  /**
   * Details of the violation.
   *
   * @param string[] $observed
   */
  public function setObserved($observed)
  {
    $this->observed = $observed;
  }
  /**
   * @return string[]
   */
  public function getObserved()
  {
    return $this->observed;
  }
  /**
   * Output only. The rule output of the violation.
   *
   * @param RuleOutput[] $ruleOutput
   */
  public function setRuleOutput($ruleOutput)
  {
    $this->ruleOutput = $ruleOutput;
  }
  /**
   * @return RuleOutput[]
   */
  public function getRuleOutput()
  {
    return $this->ruleOutput;
  }
  /**
   * The service account associated with the resource.
   *
   * @param string $serviceAccount
   */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /**
   * @return string
   */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ViolationDetails::class, 'Google_Service_WorkloadManager_ViolationDetails');
