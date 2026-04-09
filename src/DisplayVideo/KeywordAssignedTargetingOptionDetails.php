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

namespace Google\Service\DisplayVideo;

class KeywordAssignedTargetingOptionDetails extends \Google\Collection
{
  protected $collection_key = 'exemptedPolicyNames';
  /**
   * Optional. The policy names to exempt the keyword from. When attempting to
   * target a keyword that violates a policy, the error returned will include
   * the name of the relevant policy. Use that name in this field to exempt the
   * targeted keyword from the policy. This field is only applicable for
   * positively-targeted keywords assigned to Demand Gen resources. Retrieval
   * and management of Demand Gen resources is currently in beta. This field is
   * only available to allowlisted users.
   *
   * @var string[]
   */
  public $exemptedPolicyNames;
  /**
   * Required. The keyword, for example `car insurance`. Positive keyword cannot
   * be offensive word. Must be UTF-8 encoded with a maximum size of 255 bytes.
   * Maximum number of characters is 80. Maximum number of words is 10.
   *
   * @var string
   */
  public $keyword;
  /**
   * Indicates if this option is being negatively targeted.
   *
   * @var bool
   */
  public $negative;

  /**
   * Optional. The policy names to exempt the keyword from. When attempting to
   * target a keyword that violates a policy, the error returned will include
   * the name of the relevant policy. Use that name in this field to exempt the
   * targeted keyword from the policy. This field is only applicable for
   * positively-targeted keywords assigned to Demand Gen resources. Retrieval
   * and management of Demand Gen resources is currently in beta. This field is
   * only available to allowlisted users.
   *
   * @param string[] $exemptedPolicyNames
   */
  public function setExemptedPolicyNames($exemptedPolicyNames)
  {
    $this->exemptedPolicyNames = $exemptedPolicyNames;
  }
  /**
   * @return string[]
   */
  public function getExemptedPolicyNames()
  {
    return $this->exemptedPolicyNames;
  }
  /**
   * Required. The keyword, for example `car insurance`. Positive keyword cannot
   * be offensive word. Must be UTF-8 encoded with a maximum size of 255 bytes.
   * Maximum number of characters is 80. Maximum number of words is 10.
   *
   * @param string $keyword
   */
  public function setKeyword($keyword)
  {
    $this->keyword = $keyword;
  }
  /**
   * @return string
   */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /**
   * Indicates if this option is being negatively targeted.
   *
   * @param bool $negative
   */
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /**
   * @return bool
   */
  public function getNegative()
  {
    return $this->negative;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_KeywordAssignedTargetingOptionDetails');
