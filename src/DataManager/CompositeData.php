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

class CompositeData extends \Google\Collection
{
  protected $collection_key = 'ipData';
  protected $ipDataType = IpData::class;
  protected $ipDataDataType = 'array';
  protected $userDataType = UserData::class;
  protected $userDataDataType = '';

  /**
   * Optional. IP address data representing customer interaction used to build
   * the audience.
   *
   * @param IpData[] $ipData
   */
  public function setIpData($ipData)
  {
    $this->ipData = $ipData;
  }
  /**
   * @return IpData[]
   */
  public function getIpData()
  {
    return $this->ipData;
  }
  /**
   * Optional. User-provided data that identifies the user.
   *
   * @param UserData $userData
   */
  public function setUserData(UserData $userData)
  {
    $this->userData = $userData;
  }
  /**
   * @return UserData
   */
  public function getUserData()
  {
    return $this->userData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompositeData::class, 'Google_Service_DataManager_CompositeData');
