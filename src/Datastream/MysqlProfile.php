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

namespace Google\Service\Datastream;

class MysqlProfile extends \Google\Model
{
  /**
   * @var string
   */
  public $hostname;
  /**
   * @var string
   */
  public $password;
  /**
   * @var int
   */
  public $port;
  /**
   * @var string
   */
  public $secretManagerStoredPassword;
  protected $sslConfigType = MysqlSslConfig::class;
  protected $sslConfigDataType = '';
  /**
   * @var string
   */
  public $username;

  /**
   * @param string
   */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /**
   * @return string
   */
  public function getHostname()
  {
    return $this->hostname;
  }
  /**
   * @param string
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
   * @param int
   */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /**
   * @return int
   */
  public function getPort()
  {
    return $this->port;
  }
  /**
   * @param string
   */
  public function setSecretManagerStoredPassword($secretManagerStoredPassword)
  {
    $this->secretManagerStoredPassword = $secretManagerStoredPassword;
  }
  /**
   * @return string
   */
  public function getSecretManagerStoredPassword()
  {
    return $this->secretManagerStoredPassword;
  }
  /**
   * @param MysqlSslConfig
   */
  public function setSslConfig(MysqlSslConfig $sslConfig)
  {
    $this->sslConfig = $sslConfig;
  }
  /**
   * @return MysqlSslConfig
   */
  public function getSslConfig()
  {
    return $this->sslConfig;
  }
  /**
   * @param string
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
class_alias(MysqlProfile::class, 'Google_Service_Datastream_MysqlProfile');
