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

namespace Google\Service\Compute;

class SecurityPolicyRuleRateLimitOptions extends \Google\Model
{
  public $banDurationSec;
  protected $banThresholdType = SecurityPolicyRuleRateLimitOptionsThreshold::class;
  protected $banThresholdDataType = '';
  public $conformAction;
  public $enforceOnKey;
  public $enforceOnKeyName;
  public $exceedAction;
  protected $exceedRedirectOptionsType = SecurityPolicyRuleRedirectOptions::class;
  protected $exceedRedirectOptionsDataType = '';
  protected $rateLimitThresholdType = SecurityPolicyRuleRateLimitOptionsThreshold::class;
  protected $rateLimitThresholdDataType = '';

  public function setBanDurationSec($banDurationSec)
  {
    $this->banDurationSec = $banDurationSec;
  }
  public function getBanDurationSec()
  {
    return $this->banDurationSec;
  }
  /**
   * @param SecurityPolicyRuleRateLimitOptionsThreshold
   */
  public function setBanThreshold(SecurityPolicyRuleRateLimitOptionsThreshold $banThreshold)
  {
    $this->banThreshold = $banThreshold;
  }
  /**
   * @return SecurityPolicyRuleRateLimitOptionsThreshold
   */
  public function getBanThreshold()
  {
    return $this->banThreshold;
  }
  public function setConformAction($conformAction)
  {
    $this->conformAction = $conformAction;
  }
  public function getConformAction()
  {
    return $this->conformAction;
  }
  public function setEnforceOnKey($enforceOnKey)
  {
    $this->enforceOnKey = $enforceOnKey;
  }
  public function getEnforceOnKey()
  {
    return $this->enforceOnKey;
  }
  public function setEnforceOnKeyName($enforceOnKeyName)
  {
    $this->enforceOnKeyName = $enforceOnKeyName;
  }
  public function getEnforceOnKeyName()
  {
    return $this->enforceOnKeyName;
  }
  public function setExceedAction($exceedAction)
  {
    $this->exceedAction = $exceedAction;
  }
  public function getExceedAction()
  {
    return $this->exceedAction;
  }
  /**
   * @param SecurityPolicyRuleRedirectOptions
   */
  public function setExceedRedirectOptions(SecurityPolicyRuleRedirectOptions $exceedRedirectOptions)
  {
    $this->exceedRedirectOptions = $exceedRedirectOptions;
  }
  /**
   * @return SecurityPolicyRuleRedirectOptions
   */
  public function getExceedRedirectOptions()
  {
    return $this->exceedRedirectOptions;
  }
  /**
   * @param SecurityPolicyRuleRateLimitOptionsThreshold
   */
  public function setRateLimitThreshold(SecurityPolicyRuleRateLimitOptionsThreshold $rateLimitThreshold)
  {
    $this->rateLimitThreshold = $rateLimitThreshold;
  }
  /**
   * @return SecurityPolicyRuleRateLimitOptionsThreshold
   */
  public function getRateLimitThreshold()
  {
    return $this->rateLimitThreshold;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecurityPolicyRuleRateLimitOptions::class, 'Google_Service_Compute_SecurityPolicyRuleRateLimitOptions');
