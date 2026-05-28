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

class GoldengateMysqlConnectionProperties extends \Google\Collection
{
  /**
   * Security type not specified.
   */
  public const SECURITY_PROTOCOL_MYSQL_SECURITY_PROTOCOL_UNSPECIFIED = 'MYSQL_SECURITY_PROTOCOL_UNSPECIFIED';
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
   * SSL mode not specified.
   */
  public const SSL_MODE_SSL_MODE_UNSPECIFIED = 'SSL_MODE_UNSPECIFIED';
  /**
   * SSL is disabled.
   */
  public const SSL_MODE_DISABLED = 'DISABLED';
  /**
   * SSL is preferred.
   */
  public const SSL_MODE_PREFERRED = 'PREFERRED';
  /**
   * SSL is required.
   */
  public const SSL_MODE_REQUIRED = 'REQUIRED';
  /**
   * SSL is required and certificate is verified.
   */
  public const SSL_MODE_VERIFY_CA = 'VERIFY_CA';
  /**
   * SSL is required and certificate and hostname are verified.
   */
  public const SSL_MODE_VERIFY_IDENTITY = 'VERIFY_IDENTITY';
  protected $collection_key = 'additionalAttributes';
  protected $additionalAttributesType = NameValuePair::class;
  protected $additionalAttributesDataType = 'array';
  /**
   * Optional. The name of the database.
   *
   * @var string
   */
  public $database;
  /**
   * Optional. The OCID of the database system being referenced.
   *
   * @var string
   */
  public $dbSystemId;
  /**
   * Optional. The name or address of a host.
   *
   * @var string
   */
  public $host;
  /**
   * Optional. Input only. The password Oracle Goldengate uses to connect to
   * MySQL in plain text.
   *
   * @var string
   */
  public $password;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password Oracle Goldengate uses to connect to
   * MySQL. Format: projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $passwordSecretVersion;
  /**
   * Optional. The port of an endpoint usually specified for a connection.
   *
   * @var int
   */
  public $port;
  /**
   * Optional. Security Type for MySQL.
   *
   * @var string
   */
  public $securityProtocol;
  /**
   * Optional. Database Certificate - The base64 encoded content of a .pem or
   * .crt file containing the server public key (for 1 and 2-way SSL).
   *
   * @var string
   */
  public $sslCaFile;
  /**
   * Optional. Client Certificate - The base64 encoded content of a .pem or .crt
   * file containing the client public key (for 2-way SSL).
   *
   * @var string
   */
  public $sslCertFile;
  /**
   * Optional. The base64 encoded list of certificates revoked by the trusted
   * certificate authorities (Trusted CA).
   *
   * @var string
   */
  public $sslCrlFile;
  /**
   * Optional. Client Key - The base64 encoded content of a .pem or .crt file
   * containing the client private key (for 2-way SSL).
   *
   * @var string
   */
  public $sslKeyFile;
  /**
   * Optional. SSL modes for MySQL.
   *
   * @var string
   */
  public $sslMode;
  /**
   * Optional. The technology type of MysqlConnection.
   *
   * @var string
   */
  public $technologyType;
  /**
   * Optional. The username Oracle Goldengate uses to connect the associated
   * system of the given technology.
   *
   * @var string
   */
  public $username;

  /**
   * Optional. An array of name-value pair attribute entries. Used as additional
   * parameters in connection string.
   *
   * @param NameValuePair[] $additionalAttributes
   */
  public function setAdditionalAttributes($additionalAttributes)
  {
    $this->additionalAttributes = $additionalAttributes;
  }
  /**
   * @return NameValuePair[]
   */
  public function getAdditionalAttributes()
  {
    return $this->additionalAttributes;
  }
  /**
   * Optional. The name of the database.
   *
   * @param string $database
   */
  public function setDatabase($database)
  {
    $this->database = $database;
  }
  /**
   * @return string
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
   * Optional. The OCID of the database system being referenced.
   *
   * @param string $dbSystemId
   */
  public function setDbSystemId($dbSystemId)
  {
    $this->dbSystemId = $dbSystemId;
  }
  /**
   * @return string
   */
  public function getDbSystemId()
  {
    return $this->dbSystemId;
  }
  /**
   * Optional. The name or address of a host.
   *
   * @param string $host
   */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /**
   * @return string
   */
  public function getHost()
  {
    return $this->host;
  }
  /**
   * Optional. Input only. The password Oracle Goldengate uses to connect to
   * MySQL in plain text.
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
   * Manager which contains the password Oracle Goldengate uses to connect to
   * MySQL. Format: projects/{project}/secrets/{secret}/versions/{version}.
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
   * Optional. The port of an endpoint usually specified for a connection.
   *
   * @param int $port
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
   * Optional. Security Type for MySQL.
   *
   * Accepted values: MYSQL_SECURITY_PROTOCOL_UNSPECIFIED, PLAIN, TLS, MTLS
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
   * Optional. Database Certificate - The base64 encoded content of a .pem or
   * .crt file containing the server public key (for 1 and 2-way SSL).
   *
   * @param string $sslCaFile
   */
  public function setSslCaFile($sslCaFile)
  {
    $this->sslCaFile = $sslCaFile;
  }
  /**
   * @return string
   */
  public function getSslCaFile()
  {
    return $this->sslCaFile;
  }
  /**
   * Optional. Client Certificate - The base64 encoded content of a .pem or .crt
   * file containing the client public key (for 2-way SSL).
   *
   * @param string $sslCertFile
   */
  public function setSslCertFile($sslCertFile)
  {
    $this->sslCertFile = $sslCertFile;
  }
  /**
   * @return string
   */
  public function getSslCertFile()
  {
    return $this->sslCertFile;
  }
  /**
   * Optional. The base64 encoded list of certificates revoked by the trusted
   * certificate authorities (Trusted CA).
   *
   * @param string $sslCrlFile
   */
  public function setSslCrlFile($sslCrlFile)
  {
    $this->sslCrlFile = $sslCrlFile;
  }
  /**
   * @return string
   */
  public function getSslCrlFile()
  {
    return $this->sslCrlFile;
  }
  /**
   * Optional. Client Key - The base64 encoded content of a .pem or .crt file
   * containing the client private key (for 2-way SSL).
   *
   * @param string $sslKeyFile
   */
  public function setSslKeyFile($sslKeyFile)
  {
    $this->sslKeyFile = $sslKeyFile;
  }
  /**
   * @return string
   */
  public function getSslKeyFile()
  {
    return $this->sslKeyFile;
  }
  /**
   * Optional. SSL modes for MySQL.
   *
   * Accepted values: SSL_MODE_UNSPECIFIED, DISABLED, PREFERRED, REQUIRED,
   * VERIFY_CA, VERIFY_IDENTITY
   *
   * @param self::SSL_MODE_* $sslMode
   */
  public function setSslMode($sslMode)
  {
    $this->sslMode = $sslMode;
  }
  /**
   * @return self::SSL_MODE_*
   */
  public function getSslMode()
  {
    return $this->sslMode;
  }
  /**
   * Optional. The technology type of MysqlConnection.
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
class_alias(GoldengateMysqlConnectionProperties::class, 'Google_Service_OracleDatabase_GoldengateMysqlConnectionProperties');
