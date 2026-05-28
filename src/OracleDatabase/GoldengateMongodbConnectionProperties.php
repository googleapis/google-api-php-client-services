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

class GoldengateMongodbConnectionProperties extends \Google\Model
{
  /**
   * Security type not specified.
   */
  public const SECURITY_PROTOCOL_MONGODB_SECURITY_PROTOCOL_UNSPECIFIED = 'MONGODB_SECURITY_PROTOCOL_UNSPECIFIED';
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
   * Optional. MongoDB connection string. e.g.:
   * 'mongodb://mongodb0.example.com:27017/recordsrecords'
   *
   * @var string
   */
  public $connectionString;
  /**
   * Optional. The OCID of the Oracle Autonomous Json Database.
   *
   * @var string
   */
  public $databaseId;
  /**
   * Optional. Input only. The password Oracle Goldengate uses to connect the
   * Mongodb connection in plain text.
   *
   * @var string
   */
  public $password;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password Oracle Goldengate uses to connect the
   * Mongodb connection. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $passwordSecretVersion;
  /**
   * Optional. Security Type for MongoDB.
   *
   * @var string
   */
  public $securityProtocol;
  /**
   * Optional. The technology type of MongodbConnection.
   *
   * @var string
   */
  public $technologyType;
  /**
   * Optional. Database Certificate - The base64 encoded content of a .pem file,
   * containing the server public key (for 1 and 2-way SSL).
   *
   * @var string
   */
  public $tlsCaFile;
  /**
   * Optional. Client Certificate - The base64 encoded content of a .pem file,
   * containing the client public key (for 2-way SSL).
   *
   * @var string
   */
  public $tlsCertificateKeyFile;
  /**
   * Optional. Input only. The Client Certificate key file password in plain
   * text.
   *
   * @var string
   */
  public $tlsCertificateKeyFilePassword;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the Client Certificate key file password in Secret
   * Manager. Format: projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $tlsCertificateKeyFilePasswordSecretVersion;
  /**
   * Optional. The username Oracle Goldengate uses to connect to the database.
   *
   * @var string
   */
  public $username;

  /**
   * Optional. MongoDB connection string. e.g.:
   * 'mongodb://mongodb0.example.com:27017/recordsrecords'
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
   * Optional. The OCID of the Oracle Autonomous Json Database.
   *
   * @param string $databaseId
   */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /**
   * @return string
   */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /**
   * Optional. Input only. The password Oracle Goldengate uses to connect the
   * Mongodb connection in plain text.
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
   * Manager which contains the password Oracle Goldengate uses to connect the
   * Mongodb connection. Format:
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
   * Optional. Security Type for MongoDB.
   *
   * Accepted values: MONGODB_SECURITY_PROTOCOL_UNSPECIFIED, PLAIN, TLS, MTLS
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
   * Optional. The technology type of MongodbConnection.
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
   * Optional. Database Certificate - The base64 encoded content of a .pem file,
   * containing the server public key (for 1 and 2-way SSL).
   *
   * @param string $tlsCaFile
   */
  public function setTlsCaFile($tlsCaFile)
  {
    $this->tlsCaFile = $tlsCaFile;
  }
  /**
   * @return string
   */
  public function getTlsCaFile()
  {
    return $this->tlsCaFile;
  }
  /**
   * Optional. Client Certificate - The base64 encoded content of a .pem file,
   * containing the client public key (for 2-way SSL).
   *
   * @param string $tlsCertificateKeyFile
   */
  public function setTlsCertificateKeyFile($tlsCertificateKeyFile)
  {
    $this->tlsCertificateKeyFile = $tlsCertificateKeyFile;
  }
  /**
   * @return string
   */
  public function getTlsCertificateKeyFile()
  {
    return $this->tlsCertificateKeyFile;
  }
  /**
   * Optional. Input only. The Client Certificate key file password in plain
   * text.
   *
   * @param string $tlsCertificateKeyFilePassword
   */
  public function setTlsCertificateKeyFilePassword($tlsCertificateKeyFilePassword)
  {
    $this->tlsCertificateKeyFilePassword = $tlsCertificateKeyFilePassword;
  }
  /**
   * @return string
   */
  public function getTlsCertificateKeyFilePassword()
  {
    return $this->tlsCertificateKeyFilePassword;
  }
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the Client Certificate key file password in Secret
   * Manager. Format: projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @param string $tlsCertificateKeyFilePasswordSecretVersion
   */
  public function setTlsCertificateKeyFilePasswordSecretVersion($tlsCertificateKeyFilePasswordSecretVersion)
  {
    $this->tlsCertificateKeyFilePasswordSecretVersion = $tlsCertificateKeyFilePasswordSecretVersion;
  }
  /**
   * @return string
   */
  public function getTlsCertificateKeyFilePasswordSecretVersion()
  {
    return $this->tlsCertificateKeyFilePasswordSecretVersion;
  }
  /**
   * Optional. The username Oracle Goldengate uses to connect to the database.
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
class_alias(GoldengateMongodbConnectionProperties::class, 'Google_Service_OracleDatabase_GoldengateMongodbConnectionProperties');
