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

class GoldengateMicrosoftSqlserverConnectionProperties extends \Google\Collection
{
  /**
   * Security type not specified.
   */
  public const SECURITY_PROTOCOL_MICROSOFT_SQLSERVER_SECURITY_PROTOCOL_UNSPECIFIED = 'MICROSOFT_SQLSERVER_SECURITY_PROTOCOL_UNSPECIFIED';
  /**
   * Plain text communication.
   */
  public const SECURITY_PROTOCOL_PLAIN = 'PLAIN';
  /**
   * Transport Layer Security.
   */
  public const SECURITY_PROTOCOL_TLS = 'TLS';
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
   * Optional. The name or address of a host.
   *
   * @var string
   */
  public $host;
  /**
   * Optional. Input only. The password Oracle Goldengate uses for Microsoft SQL
   * Server connection in plain text.
   *
   * @var string
   */
  public $password;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password Oracle Goldengate uses for Microsoft
   * SQL Server connection. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
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
   * Optional. Security Type for Microsoft SQL Server.
   *
   * @var string
   */
  public $securityProtocol;
  /**
   * Optional. If set to true, the driver validates the certificate that is sent
   * by the database server.
   *
   * @var bool
   */
  public $serverCertificateValidationRequired;
  /**
   * Optional. Database Certificate - The base64 encoded content of a .pem or
   * .crt file containing the server public key (for 1-way SSL).
   *
   * @var string
   */
  public $sslCaFile;
  /**
   * Optional. The technology type of MicrosoftSqlserverConnection.
   *
   * @var string
   */
  public $technologyType;
  /**
   * Optional. The username Oracle Goldengate uses to connect to the Microsoft
   * SQL Server.
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
   * Optional. Input only. The password Oracle Goldengate uses for Microsoft SQL
   * Server connection in plain text.
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
   * Manager which contains the password Oracle Goldengate uses for Microsoft
   * SQL Server connection. Format:
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
   * Optional. Security Type for Microsoft SQL Server.
   *
   * Accepted values: MICROSOFT_SQLSERVER_SECURITY_PROTOCOL_UNSPECIFIED, PLAIN,
   * TLS
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
   * Optional. If set to true, the driver validates the certificate that is sent
   * by the database server.
   *
   * @param bool $serverCertificateValidationRequired
   */
  public function setServerCertificateValidationRequired($serverCertificateValidationRequired)
  {
    $this->serverCertificateValidationRequired = $serverCertificateValidationRequired;
  }
  /**
   * @return bool
   */
  public function getServerCertificateValidationRequired()
  {
    return $this->serverCertificateValidationRequired;
  }
  /**
   * Optional. Database Certificate - The base64 encoded content of a .pem or
   * .crt file containing the server public key (for 1-way SSL).
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
   * Optional. The technology type of MicrosoftSqlserverConnection.
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
   * Optional. The username Oracle Goldengate uses to connect to the Microsoft
   * SQL Server.
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
class_alias(GoldengateMicrosoftSqlserverConnectionProperties::class, 'Google_Service_OracleDatabase_GoldengateMicrosoftSqlserverConnectionProperties');
