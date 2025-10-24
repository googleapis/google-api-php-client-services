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

namespace Google\Service\CloudFilestore;

class LdapConfig extends \Google\Collection
{
  protected $collection_key = 'servers';
  /**
   * @var string
   */
  public $domain;
  /**
   * @var string
   */
  public $groupsOu;
  /**
   * @var string[]
   */
  public $servers;
  /**
   * @var string
   */
  public $usersOu;

  /**
   * @param string
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * @param string
   */
  public function setGroupsOu($groupsOu)
  {
    $this->groupsOu = $groupsOu;
  }
  /**
   * @return string
   */
  public function getGroupsOu()
  {
    return $this->groupsOu;
  }
  /**
   * @param string[]
   */
  public function setServers($servers)
  {
    $this->servers = $servers;
  }
  /**
   * @return string[]
   */
  public function getServers()
  {
    return $this->servers;
  }
  /**
   * @param string
   */
  public function setUsersOu($usersOu)
  {
    $this->usersOu = $usersOu;
  }
  /**
   * @return string
   */
  public function getUsersOu()
  {
    return $this->usersOu;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LdapConfig::class, 'Google_Service_CloudFilestore_LdapConfig');
