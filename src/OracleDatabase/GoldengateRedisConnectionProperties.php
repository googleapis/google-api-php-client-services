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

namespace Google\Service\OracleDatabase;

class GoldengateRedisConnectionProperties extends \Google\Model
{
  /**
   * Authentication type not specified.
   */
  public const AUTHENTICATION_TYPE_REDIS_AUTHENTICATION_TYPE_UNSPECIFIED = 'REDIS_AUTHENTICATION_TYPE_UNSPECIFIED';
  /**
   * No authentication.
   */
  public const AUTHENTICATION_TYPE_NONE = 'NONE';
  /**
   * Basic authentication.
   */
  public const AUTHENTICATION_TYPE_BASIC = 'BASIC';
  /**
   * Security protocol not specified.
   */
  public const SECURITY_PROTOCOL_REDIS_SECURITY_PROTOCOL_UNSPECIFIED = 'REDIS_SECURITY_PROTOCOL_UNSPECIFIED';
  /**
   * Plain text communication.
   */
  public const SECURITY_PROTOCOL_PLAIN = 'PLAIN';
  /**
   * Transport Layer Security.
   */
  public const SECURITY_PROTOCOL_TLS = 'TLS';
  /**
   * Mutual Transport Layer Security.
   */
  public const SECURITY_PROTOCOL_MTLS = 'MTLS';
  /**
   * Optional. Authentication type for Redis.
   *
   * @var string
   */
  public $authenticationType;
  /**
   * Optional. The base64 encoded content of the KeyStore file.
   *
   * @var string
   */
  public $keyStoreFile;
  /**
   * Optional. Input only. The KeyStore password in plain text.
   *
   * @var string
   */
  public $keyStorePassword;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the KeyStore password. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $keyStorePasswordSecretVersion;
  /**
   * Optional. Input only. The password Oracle Goldengate uses for Redis
   * connection in plain text.
   *
   * @var string
   */
  public $password;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password Oracle Goldengate uses for Redis
   * connection. Format: projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $passwordSecretVersion;
  /**
   * Optional. The OCID of the Redis cluster.
   *
   * @var string
   */
  public $redisClusterId;
  /**
   * Optional. Security protocol for Redis.
   *
   * @var string
   */
  public $securityProtocol;
  /**
   * Optional. Comma separated list of Redis server addresses, specified as
   * host:port entries, where :port is optional. If port is not specified, it
   * defaults to 6379. Example:
   * "server1.example.com:6379,server2.example.com:6379"
   *
   * @var string
   */
  public $servers;
  /**
   * Optional. The technology type of RedisConnection.
   *
   * @var string
   */
  public $technologyType;
  /**
   * Optional. The base64 encoded content of the TrustStore file.
   *
   * @var string
   */
  public $trustStoreFile;
  /**
   * Optional. Input only. The TrustStore password in plain text.
   *
   * @var string
   */
  public $trustStorePassword;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the TrustStore password. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $trustStorePasswordSecretVersion;
  /**
   * Optional. The username Oracle Goldengate uses to connect the associated
   * system of the given technology.
   *
   * @var string
   */
  public $username;

  /**
   * Optional. Authentication type for Redis.
   *
   * Accepted values: REDIS_AUTHENTICATION_TYPE_UNSPECIFIED, NONE, BASIC
   *
   * @param self::AUTHENTICATION_TYPE_* $authenticationType
   */
  public function setAuthenticationType($authenticationType)
  {
    $this->authenticationType = $authenticationType;
  }
  /**
   * @return self::AUTHENTICATION_TYPE_*
   */
  public function getAuthenticationType()
  {
    return $this->authenticationType;
  }
  /**
   * Optional. The base64 encoded content of the KeyStore file.
   *
   * @param string $keyStoreFile
   */
  public function setKeyStoreFile($keyStoreFile)
  {
    $this->keyStoreFile = $keyStoreFile;
  }
  /**
   * @return string
   */
  public function getKeyStoreFile()
  {
    return $this->keyStoreFile;
  }
  /**
   * Optional. Input only. The KeyStore password in plain text.
   *
   * @param string $keyStorePassword
   */
  public function setKeyStorePassword($keyStorePassword)
  {
    $this->keyStorePassword = $keyStorePassword;
  }
  /**
   * @return string
   */
  public function getKeyStorePassword()
  {
    return $this->keyStorePassword;
  }
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the KeyStore password. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @param string $keyStorePasswordSecretVersion
   */
  public function setKeyStorePasswordSecretVersion($keyStorePasswordSecretVersion)
  {
    $this->keyStorePasswordSecretVersion = $keyStorePasswordSecretVersion;
  }
  /**
   * @return string
   */
  public function getKeyStorePasswordSecretVersion()
  {
    return $this->keyStorePasswordSecretVersion;
  }
  /**
   * Optional. Input only. The password Oracle Goldengate uses for Redis
   * connection in plain text.
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
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password Oracle Goldengate uses for Redis
   * connection. Format: projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @param string $passwordSecretVersion
   */
  public function setPasswordSecretVersion($passwordSecretVersion)
  {
    $this->passwordSecretVersion = $passwordSecretVersion;
  }
  /**
   * @return string
   */
  public function getPasswordSecretVersion()
  {
    return $this->passwordSecretVersion;
  }
  /**
   * Optional. The OCID of the Redis cluster.
   *
   * @param string $redisClusterId
   */
  public function setRedisClusterId($redisClusterId)
  {
    $this->redisClusterId = $redisClusterId;
  }
  /**
   * @return string
   */
  public function getRedisClusterId()
  {
    return $this->redisClusterId;
  }
  /**
   * Optional. Security protocol for Redis.
   *
   * Accepted values: REDIS_SECURITY_PROTOCOL_UNSPECIFIED, PLAIN, TLS, MTLS
   *
   * @param self::SECURITY_PROTOCOL_* $securityProtocol
   */
  public function setSecurityProtocol($securityProtocol)
  {
    $this->securityProtocol = $securityProtocol;
  }
  /**
   * @return self::SECURITY_PROTOCOL_*
   */
  public function getSecurityProtocol()
  {
    return $this->securityProtocol;
  }
  /**
   * Optional. Comma separated list of Redis server addresses, specified as
   * host:port entries, where :port is optional. If port is not specified, it
   * defaults to 6379. Example:
   * "server1.example.com:6379,server2.example.com:6379"
   *
   * @param string $servers
   */
  public function setServers($servers)
  {
    $this->servers = $servers;
  }
  /**
   * @return string
   */
  public function getServers()
  {
    return $this->servers;
  }
  /**
   * Optional. The technology type of RedisConnection.
   *
   * @param string $technologyType
   */
  public function setTechnologyType($technologyType)
  {
    $this->technologyType = $technologyType;
  }
  /**
   * @return string
   */
  public function getTechnologyType()
  {
    return $this->technologyType;
  }
  /**
   * Optional. The base64 encoded content of the TrustStore file.
   *
   * @param string $trustStoreFile
   */
  public function setTrustStoreFile($trustStoreFile)
  {
    $this->trustStoreFile = $trustStoreFile;
  }
  /**
   * @return string
   */
  public function getTrustStoreFile()
  {
    return $this->trustStoreFile;
  }
  /**
   * Optional. Input only. The TrustStore password in plain text.
   *
   * @param string $trustStorePassword
   */
  public function setTrustStorePassword($trustStorePassword)
  {
    $this->trustStorePassword = $trustStorePassword;
  }
  /**
   * @return string
   */
  public function getTrustStorePassword()
  {
    return $this->trustStorePassword;
  }
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the TrustStore password. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @param string $trustStorePasswordSecretVersion
   */
  public function setTrustStorePasswordSecretVersion($trustStorePasswordSecretVersion)
  {
    $this->trustStorePasswordSecretVersion = $trustStorePasswordSecretVersion;
  }
  /**
   * @return string
   */
  public function getTrustStorePasswordSecretVersion()
  {
    return $this->trustStorePasswordSecretVersion;
  }
  /**
   * Optional. The username Oracle Goldengate uses to connect the associated
   * system of the given technology.
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
class_alias(GoldengateRedisConnectionProperties::class, 'Google_Service_OracleDatabase_GoldengateRedisConnectionProperties');
