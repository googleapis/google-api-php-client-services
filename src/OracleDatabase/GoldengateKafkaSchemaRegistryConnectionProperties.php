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

class GoldengateKafkaSchemaRegistryConnectionProperties extends \Google\Model
{
  /**
   * Authentication type not specified.
   */
  public const AUTHENTICATION_TYPE_AUTHENTICATION_TYPE_UNSPECIFIED = 'AUTHENTICATION_TYPE_UNSPECIFIED';
  /**
   * No authentication.
   */
  public const AUTHENTICATION_TYPE_NONE = 'NONE';
  /**
   * Basic authentication.
   */
  public const AUTHENTICATION_TYPE_BASIC = 'BASIC';
  /**
   * Mutual authentication.
   */
  public const AUTHENTICATION_TYPE_MUTUAL = 'MUTUAL';
  /**
   * Optional. Used authentication mechanism to access Schema Registry.
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
   * Optional. Input only. The password to access Schema Registry in plain text.
   *
   * @var string
   */
  public $password;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password to access Schema Registry using basic
   * authentication. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $passwordSecretVersion;
  /**
   * Optional. Input only. The password for the cert inside the KeyStore in
   * plain text.
   *
   * @var string
   */
  public $sslKeyPassword;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password for the cert inside the KeyStore.
   * Format: projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $sslKeyPasswordSecretVersion;
  /**
   * Optional. The technology type of KafkaSchemaRegistryConnection.
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
   * Optional. Kafka Schema Registry URL. e.g.:
   * 'https://server1.us.oracle.com:8081'
   *
   * @var string
   */
  public $url;
  /**
   * Optional. The username to access Schema Registry using basic
   * authentication. This value is injected into
   * 'schema.registry.basic.auth.user.info=user:password' configuration
   * property.
   *
   * @var string
   */
  public $username;

  /**
   * Optional. Used authentication mechanism to access Schema Registry.
   *
   * Accepted values: AUTHENTICATION_TYPE_UNSPECIFIED, NONE, BASIC, MUTUAL
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
   * Optional. Input only. The password to access Schema Registry in plain text.
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
   * Manager which contains the password to access Schema Registry using basic
   * authentication. Format:
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
   * Optional. Input only. The password for the cert inside the KeyStore in
   * plain text.
   *
   * @param string $sslKeyPassword
   */
  public function setSslKeyPassword($sslKeyPassword)
  {
    $this->sslKeyPassword = $sslKeyPassword;
  }
  /**
   * @return string
   */
  public function getSslKeyPassword()
  {
    return $this->sslKeyPassword;
  }
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password for the cert inside the KeyStore.
   * Format: projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @param string $sslKeyPasswordSecretVersion
   */
  public function setSslKeyPasswordSecretVersion($sslKeyPasswordSecretVersion)
  {
    $this->sslKeyPasswordSecretVersion = $sslKeyPasswordSecretVersion;
  }
  /**
   * @return string
   */
  public function getSslKeyPasswordSecretVersion()
  {
    return $this->sslKeyPasswordSecretVersion;
  }
  /**
   * Optional. The technology type of KafkaSchemaRegistryConnection.
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
   * Optional. Kafka Schema Registry URL. e.g.:
   * 'https://server1.us.oracle.com:8081'
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
  /**
   * Optional. The username to access Schema Registry using basic
   * authentication. This value is injected into
   * 'schema.registry.basic.auth.user.info=user:password' configuration
   * property.
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
class_alias(GoldengateKafkaSchemaRegistryConnectionProperties::class, 'Google_Service_OracleDatabase_GoldengateKafkaSchemaRegistryConnectionProperties');
