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

class GoldengateOracleConnectionProperties extends \Google\Model
{
  /**
   * Authentication mode not specified.
   */
  public const AUTHENTICATION_MODE_ORACLE_AUTHENTICATION_MODE_UNSPECIFIED = 'ORACLE_AUTHENTICATION_MODE_UNSPECIFIED';
  /**
   * TLS authentication mode.
   */
  public const AUTHENTICATION_MODE_TLS = 'TLS';
  /**
   * MTLS authentication mode.
   */
  public const AUTHENTICATION_MODE_MTLS = 'MTLS';
  /**
   * Default unspecified value.
   */
  public const SESSION_MODE_SESSION_MODE_UNSPECIFIED = 'SESSION_MODE_UNSPECIFIED';
  /**
   * Indicates that the resource is using direct session mode.
   */
  public const SESSION_MODE_DIRECT = 'DIRECT';
  /**
   * Indicates that the resource is using redirect session mode.
   */
  public const SESSION_MODE_REDIRECT = 'REDIRECT';
  /**
   * Optional. Authentication mode.
   *
   * @var string
   */
  public $authenticationMode;
  /**
   * Optional. Connect descriptor or Easy Connect Naming method used to connect
   * to a database.
   *
   * @var string
   */
  public $connectionString;
  /**
   * Optional. Autonomous AI Database instance id of database in Oracle Database
   * @ Google Cloud. If gcp_oracle_database_id is provided, connection_string
   * must be empty. Format: projects/{project}/locations/{location}/autonomousDa
   * tabases/{autonomous_database}
   *
   * @var string
   */
  public $gcpOracleDatabaseId;
  /**
   * Optional. Input only. The password Oracle Goldengate uses in plain text.
   *
   * @var string
   */
  public $password;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password Oracle Goldengate uses. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $passwordSecretVersion;
  /**
   * Optional. The mode of the database connection session to be established by
   * the data client.
   *
   * @var string
   */
  public $sessionMode;
  /**
   * Optional. The technology type.
   *
   * @var string
   */
  public $technologyType;
  /**
   * Optional. The username Oracle Goldengate uses to connect.
   *
   * @var string
   */
  public $username;
  /**
   * Optional. The wallet contents Oracle Goldengate uses to make connections to
   * a database. This attribute is expected to be base64 encoded.
   *
   * @var string
   */
  public $walletFile;

  /**
   * Optional. Authentication mode.
   *
   * Accepted values: ORACLE_AUTHENTICATION_MODE_UNSPECIFIED, TLS, MTLS
   *
   * @param self::AUTHENTICATION_MODE_* $authenticationMode
   */
  public function setAuthenticationMode($authenticationMode)
  {
    $this->authenticationMode = $authenticationMode;
  }
  /**
   * @return self::AUTHENTICATION_MODE_*
   */
  public function getAuthenticationMode()
  {
    return $this->authenticationMode;
  }
  /**
   * Optional. Connect descriptor or Easy Connect Naming method used to connect
   * to a database.
   *
   * @param string $connectionString
   */
  public function setConnectionString($connectionString)
  {
    $this->connectionString = $connectionString;
  }
  /**
   * @return string
   */
  public function getConnectionString()
  {
    return $this->connectionString;
  }
  /**
   * Optional. Autonomous AI Database instance id of database in Oracle Database
   * @ Google Cloud. If gcp_oracle_database_id is provided, connection_string
   * must be empty. Format: projects/{project}/locations/{location}/autonomousDa
   * tabases/{autonomous_database}
   *
   * @param string $gcpOracleDatabaseId
   */
  public function setGcpOracleDatabaseId($gcpOracleDatabaseId)
  {
    $this->gcpOracleDatabaseId = $gcpOracleDatabaseId;
  }
  /**
   * @return string
   */
  public function getGcpOracleDatabaseId()
  {
    return $this->gcpOracleDatabaseId;
  }
  /**
   * Optional. Input only. The password Oracle Goldengate uses in plain text.
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
   * Manager which contains the password Oracle Goldengate uses. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
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
   * Optional. The mode of the database connection session to be established by
   * the data client.
   *
   * Accepted values: SESSION_MODE_UNSPECIFIED, DIRECT, REDIRECT
   *
   * @param self::SESSION_MODE_* $sessionMode
   */
  public function setSessionMode($sessionMode)
  {
    $this->sessionMode = $sessionMode;
  }
  /**
   * @return self::SESSION_MODE_*
   */
  public function getSessionMode()
  {
    return $this->sessionMode;
  }
  /**
   * Optional. The technology type.
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
   * Optional. The username Oracle Goldengate uses to connect.
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
  /**
   * Optional. The wallet contents Oracle Goldengate uses to make connections to
   * a database. This attribute is expected to be base64 encoded.
   *
   * @param string $walletFile
   */
  public function setWalletFile($walletFile)
  {
    $this->walletFile = $walletFile;
  }
  /**
   * @return string
   */
  public function getWalletFile()
  {
    return $this->walletFile;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoldengateOracleConnectionProperties::class, 'Google_Service_OracleDatabase_GoldengateOracleConnectionProperties');
