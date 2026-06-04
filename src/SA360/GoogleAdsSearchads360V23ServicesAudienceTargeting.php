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

class GoogleAdsSearchads360V23ServicesAudienceTargeting extends \Google\Collection
{
  protected $collection_key = 'userLists';
  protected $userInterestType = GoogleAdsSearchads360V23CommonUserInterestInfo::class;
  protected $userInterestDataType = 'array';
  protected $userListsType = GoogleAdsSearchads360V23CommonUserListInfo::class;
  protected $userListsDataType = 'array';

  /**
   * List of audiences based on user interests to be targeted.
   *
   * @param GoogleAdsSearchads360V23CommonUserInterestInfo[] $userInterest
   */
  public function setUserInterest($userInterest)
  {
    $this->userInterest = $userInterest;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserInterestInfo[]
   */
  public function getUserInterest()
  {
    return $this->userInterest;
  }
  /**
   * List of audiences based on user lists to be targeted.
   *
   * @param GoogleAdsSearchads360V23CommonUserListInfo[] $userLists
   */
  public function setUserLists($userLists)
  {
    $this->userLists = $userLists;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListInfo[]
   */
  public function getUserLists()
  {
    return $this->userLists;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAudienceTargeting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAudienceTargeting');
