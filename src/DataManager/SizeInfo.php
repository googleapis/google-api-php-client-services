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

namespace Google\Service\DataManager;

class SizeInfo extends \Google\Model
{
  /**
   * Output only. Estimated number of members in this user list, on the Google
   * Display Network.
   *
   * @var string
   */
  public $displayNetworkMembersCount;
  /**
   * Output only. Estimated number of members in this user list in the
   * google.com domain. These are the members available for targeting in Search
   * campaigns.
   *
   * @var string
   */
  public $searchNetworkMembersCount;

  /**
   * Output only. Estimated number of members in this user list, on the Google
   * Display Network.
   *
   * @param string $displayNetworkMembersCount
   */
  public function setDisplayNetworkMembersCount($displayNetworkMembersCount)
  {
    $this->displayNetworkMembersCount = $displayNetworkMembersCount;
  }
  /**
   * @return string
   */
  public function getDisplayNetworkMembersCount()
  {
    return $this->displayNetworkMembersCount;
  }
  /**
   * Output only. Estimated number of members in this user list in the
   * google.com domain. These are the members available for targeting in Search
   * campaigns.
   *
   * @param string $searchNetworkMembersCount
   */
  public function setSearchNetworkMembersCount($searchNetworkMembersCount)
  {
    $this->searchNetworkMembersCount = $searchNetworkMembersCount;
  }
  /**
   * @return string
   */
  public function getSearchNetworkMembersCount()
  {
    return $this->searchNetworkMembersCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SizeInfo::class, 'Google_Service_DataManager_SizeInfo');
