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

class GoldengateJavaMessageServiceConnectionProperties extends \Google\Model
{
  /**
   * Authentication type not specified.
   */
  public const AUTHENTICATION_TYPE_JMS_AUTHENTICATION_TYPE_UNSPECIFIED = 'JMS_AUTHENTICATION_TYPE_UNSPECIFIED';
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
  public const SECURITY_PROTOCOL_JMS_SECURITY_PROTOCOL_UNSPECIFIED = 'JMS_SECURITY_PROTOCOL_UNSPECIFIED';
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
   * Optional. Authentication type for Java Message Service.
   *
   * @var string
   */
  public $authenticationType;
  /**
   * Optional. The Java class implementing javax.jms.ConnectionFactory interface
   * supplied by the JMS provider.
   *
   * @var string
   */
  public $connectionFactory;
  /**
   * Optional. Connection URL of the Java Message Service, specifying the
   * protocol, host, and port. e.g.: 'mq://myjms.host.domain:7676'
   *
   * @var string
   */
  public $connectionUrl;
  /**
   * Optional. The Connection Factory can be looked up using this name. e.g.:
   * 'ConnectionFactory'
   *
   * @var string
   */
  public $jndiConnectionFactory;
  /**
   * Optional. The implementation of javax.naming.spi.InitialContextFactory
   * interface used to obtain initial naming context.
   *
   * @var string
   */
  public $jndiInitialContextFactory;
  /**
   * Optional. The URL that Java Message Service will use to contact the JNDI
   * provider. e.g.: 'tcp://myjms.host.domain:61616?jms.prefetchPolicy.all=1000'
   *
   * @var string
   */
  public $jndiProviderUrl;
  /**
   * Optional. The password associated to the principal.
   *
   * @var string
   */
  public $jndiSecurityCredentialsSecret;
  /**
   * Optional. Specifies the identity of the principal (user) to be
   * authenticated.
   *
   * @var string
   */
  public $jndiSecurityPrincipal;
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
   * Optional. Input only. The password Oracle Goldengate uses to connect the
   * Java Message Service in plain text.
   *
   * @var string
   */
  public $password;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password Oracle Goldengate uses to connect the
   * associated Java Message Service. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $passwordSecretVersion;
  /**
   * Optional. Security protocol for Java Message Service.
   *
   * @var string
   */
  public $securityProtocol;
  /**
   * Optional. Input only. The password for the cert inside of the KeyStore in
   * plain text.
   *
   * @var string
   */
  public $sslKeyPassword;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password for the cert inside of the KeyStore.
   * Format: projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $sslKeyPasswordSecretVersion;
  /**
   * Optional. The technology type of JavaMessageServiceConnection.
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
   * Optional. If set to true, Java Naming and Directory Interface (JNDI)
   * properties should be provided.
   *
   * @var bool
   */
  public $useJndi;
  /**
   * Optional. The username Oracle Goldengate uses to connect to the Java
   * Message Service.
   *
   * @var string
   */
  public $username;

  /**
   * Optional. Authentication type for Java Message Service.
   *
   * Accepted values: JMS_AUTHENTICATION_TYPE_UNSPECIFIED, NONE, BASIC
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
   * Optional. The Java class implementing javax.jms.ConnectionFactory interface
   * supplied by the JMS provider.
   *
   * @param string $connectionFactory
   */
  public function setConnectionFactory($connectionFactory)
  {
    $this->connectionFactory = $connectionFactory;
  }
  /**
   * @return string
   */
  public function getConnectionFactory()
  {
    return $this->connectionFactory;
  }
  /**
   * Optional. Connection URL of the Java Message Service, specifying the
   * protocol, host, and port. e.g.: 'mq://myjms.host.domain:7676'
   *
   * @param string $connectionUrl
   */
  public function setConnectionUrl($connectionUrl)
  {
    $this->connectionUrl = $connectionUrl;
  }
  /**
   * @return string
   */
  public function getConnectionUrl()
  {
    return $this->connectionUrl;
  }
  /**
   * Optional. The Connection Factory can be looked up using this name. e.g.:
   * 'ConnectionFactory'
   *
   * @param string $jndiConnectionFactory
   */
  public function setJndiConnectionFactory($jndiConnectionFactory)
  {
    $this->jndiConnectionFactory = $jndiConnectionFactory;
  }
  /**
   * @return string
   */
  public function getJndiConnectionFactory()
  {
    return $this->jndiConnectionFactory;
  }
  /**
   * Optional. The implementation of javax.naming.spi.InitialContextFactory
   * interface used to obtain initial naming context.
   *
   * @param string $jndiInitialContextFactory
   */
  public function setJndiInitialContextFactory($jndiInitialContextFactory)
  {
    $this->jndiInitialContextFactory = $jndiInitialContextFactory;
  }
  /**
   * @return string
   */
  public function getJndiInitialContextFactory()
  {
    return $this->jndiInitialContextFactory;
  }
  /**
   * Optional. The URL that Java Message Service will use to contact the JNDI
   * provider. e.g.: 'tcp://myjms.host.domain:61616?jms.prefetchPolicy.all=1000'
   *
   * @param string $jndiProviderUrl
   */
  public function setJndiProviderUrl($jndiProviderUrl)
  {
    $this->jndiProviderUrl = $jndiProviderUrl;
  }
  /**
   * @return string
   */
  public function getJndiProviderUrl()
  {
    return $this->jndiProviderUrl;
  }
  /**
   * Optional. The password associated to the principal.
   *
   * @param string $jndiSecurityCredentialsSecret
   */
  public function setJndiSecurityCredentialsSecret($jndiSecurityCredentialsSecret)
  {
    $this->jndiSecurityCredentialsSecret = $jndiSecurityCredentialsSecret;
  }
  /**
   * @return string
   */
  public function getJndiSecurityCredentialsSecret()
  {
    return $this->jndiSecurityCredentialsSecret;
  }
  /**
   * Optional. Specifies the identity of the principal (user) to be
   * authenticated.
   *
   * @param string $jndiSecurityPrincipal
   */
  public function setJndiSecurityPrincipal($jndiSecurityPrincipal)
  {
    $this->jndiSecurityPrincipal = $jndiSecurityPrincipal;
  }
  /**
   * @return string
   */
  public function getJndiSecurityPrincipal()
  {
    return $this->jndiSecurityPrincipal;
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
   * Optional. Input only. The password Oracle Goldengate uses to connect the
   * Java Message Service in plain text.
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
   * associated Java Message Service. Format:
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
   * Optional. Security protocol for Java Message Service.
   *
   * Accepted values: JMS_SECURITY_PROTOCOL_UNSPECIFIED, PLAIN, TLS, MTLS
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
   * Optional. Input only. The password for the cert inside of the KeyStore in
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
   * Manager which contains the password for the cert inside of the KeyStore.
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
   * Optional. The technology type of JavaMessageServiceConnection.
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
   * Optional. If set to true, Java Naming and Directory Interface (JNDI)
   * properties should be provided.
   *
   * @param bool $useJndi
   */
  public function setUseJndi($useJndi)
  {
    $this->useJndi = $useJndi;
  }
  /**
   * @return bool
   */
  public function getUseJndi()
  {
    return $this->useJndi;
  }
  /**
   * Optional. The username Oracle Goldengate uses to connect to the Java
   * Message Service.
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
class_alias(GoldengateJavaMessageServiceConnectionProperties::class, 'Google_Service_OracleDatabase_GoldengateJavaMessageServiceConnectionProperties');
