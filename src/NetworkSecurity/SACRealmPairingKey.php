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

namespace Google\Service\NetworkSecurity;

class SACRealmPairingKey extends \Google\Model
{
  /**
   * Output only. Timestamp in UTC of when this resource is considered expired.
   * It expires 7 days after creation.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Output only. Key value.
   *
   * @var string
   */
  public $key;

  /**
   * Output only. Timestamp in UTC of when this resource is considered expired.
   * It expires 7 days after creation.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Output only. Key value.
   *
   * @param string $key
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SACRealmPairingKey::class, 'Google_Service_NetworkSecurity_SACRealmPairingKey');
