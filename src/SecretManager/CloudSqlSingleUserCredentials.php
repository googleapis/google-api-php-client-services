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

namespace Google\Service\SecretManager;

class CloudSqlSingleUserCredentials extends \Google\Model
{
  /**
   * Required. Instance ID of the Cloud SQL instance.
   *
   * @var string
   */
  public $instanceId;
  /**
   * Optional. Password of the Cloud SQL instance. If this is not provided, a
   * random password will be generated.
   *
   * @var string
   */
  public $password;
  /**
   * Required. Username of the Cloud SQL instance.
   *
   * @var string
   */
  public $username;

  /**
   * Required. Instance ID of the Cloud SQL instance.
   *
   * @param string $instanceId
   */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /**
   * @return string
   */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /**
   * Optional. Password of the Cloud SQL instance. If this is not provided, a
   * random password will be generated.
   *
   * @param string $password
   */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /**
   * @return string
   */
  public function getPassword()
  {
    return $this->password;
  }
  /**
   * Required. Username of the Cloud SQL instance.
   *
   * @param string $username
   */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /**
   * @return string
   */
  public function getUsername()
  {
    return $this->username;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudSqlSingleUserCredentials::class, 'Google_Service_SecretManager_CloudSqlSingleUserCredentials');
