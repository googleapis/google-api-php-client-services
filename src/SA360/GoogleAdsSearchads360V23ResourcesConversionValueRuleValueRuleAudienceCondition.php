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

class GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAudienceCondition extends \Google\Collection
{
  protected $collection_key = 'userLists';
  /**
   * User Interests.
   *
   * @var string[]
   */
  public $userInterests;
  /**
   * User Lists.
   *
   * @var string[]
   */
  public $userLists;

  /**
   * User Interests.
   *
   * @param string[] $userInterests
   */
  public function setUserInterests($userInterests)
  {
    $this->userInterests = $userInterests;
  }
  /**
   * @return string[]
   */
  public function getUserInterests()
  {
    return $this->userInterests;
  }
  /**
   * User Lists.
   *
   * @param string[] $userLists
   */
  public function setUserLists($userLists)
  {
    $this->userLists = $userLists;
  }
  /**
   * @return string[]
   */
  public function getUserLists()
  {
    return $this->userLists;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAudienceCondition::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAudienceCondition');
