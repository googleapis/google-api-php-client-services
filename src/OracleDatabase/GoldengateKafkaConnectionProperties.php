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

class GoldengateKafkaConnectionProperties extends \Google\Collection
{
  /**
   * Security type not specified.
   */
  public const SECURITY_PROTOCOL_KAFKA_SECURITY_PROTOCOL_UNSPECIFIED = 'KAFKA_SECURITY_PROTOCOL_UNSPECIFIED';
  /**
   * SSL security protocol.
   */
  public const SECURITY_PROTOCOL_SSL = 'SSL';
  /**
   * SASL SSL security protocol.
   */
  public const SECURITY_PROTOCOL_SASL_SSL = 'SASL_SSL';
  /**
   * Plaintext security protocol.
   */
  public const SECURITY_PROTOCOL_PLAINTEXT = 'PLAINTEXT';
  /**
   * SASL Plaintext security protocol.
   */
  public const SECURITY_PROTOCOL_SASL_PLAINTEXT = 'SASL_PLAINTEXT';
  protected $collection_key = 'bootstrapServers';
  protected $bootstrapServersType = KafkaBootstrapServer::class;
  protected $bootstrapServersDataType = 'array';
  /**
   * Optional. The OCID of the Kafka cluster being referenced from OCI Streaming
   * with Apache Kafka.
   *
   * @var string
   */
  public $clusterId;
  /**
   * Optional. The base64 encoded content of the consumer.properties file.
   *
   * @var string
   */
  public $consumerPropertiesFile;
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
   * Optional. Input only. The password for Kafka basic/SASL auth in plain text.
   *
   * @var string
   */
  public $password;
  /**
   * Optional. Input only. The resource name of a secret version in Secret
   * Manager which contains the password for Kafka basic/SASL auth. Format:
   * projects/{project}/secrets/{secret}/versions/{version}.
   *
   * @var string
   */
  public $passwordSecretVersion;
  /**
   * Optional. The base64 encoded content of the producer.properties file.
   *
   * @var string
   */
  public $producerPropertiesFile;
  /**
   * Optional. Security Type for Kafka.
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
   * Optional. The OCID of the stream pool being referenced.
   *
   * @var string
   */
  public $streamPoolId;
  /**
   * Optional. The technology type of KafkaConnection.
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
   * Optional. Specifies that the user intends to authenticate to the instance
   * using a resource principal. Applicable only for OCI Streaming connections.
   *
   * @var bool
   */
  public $useResourcePrincipal;
  /**
   * Optional. The username Oracle Goldengate uses to connect the associated
   * system of the given technology.
   *
   * @var string
   */
  public $username;

  /**
   * Optional. Kafka bootstrap. Equivalent of bootstrap.servers configuration
   * property in Kafka: list of KafkaBootstrapServer objects specified by
   * host/port. Used for establishing the initial connection to the Kafka
   * cluster. Example: "server1.example.com:9092,server2.example.com:9092"
   *
   * @param KafkaBootstrapServer[] $bootstrapServers
   */
  public function setBootstrapServers($bootstrapServers)
  {
    $this->bootstrapServers = $bootstrapServers;
  }
  /**
   * @return KafkaBootstrapServer[]
   */
  public function getBootstrapServers()
  {
    return $this->bootstrapServers;
  }
  /**
   * Optional. The OCID of the Kafka cluster being referenced from OCI Streaming
   * with Apache Kafka.
   *
   * @param string $clusterId
   */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /**
   * @return string
   */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /**
   * Optional. The base64 encoded content of the consumer.properties file.
   *
   * @param string $consumerPropertiesFile
   */
  public function setConsumerPropertiesFile($consumerPropertiesFile)
  {
    $this->consumerPropertiesFile = $consumerPropertiesFile;
  }
  /**
   * @return string
   */
  public function getConsumerPropertiesFile()
  {
    return $this->consumerPropertiesFile;
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
   * Optional. Input only. The password for Kafka basic/SASL auth in plain text.
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
   * Manager which contains the password for Kafka basic/SASL auth. Format:
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
   * Optional. The base64 encoded content of the producer.properties file.
   *
   * @param string $producerPropertiesFile
   */
  public function setProducerPropertiesFile($producerPropertiesFile)
  {
    $this->producerPropertiesFile = $producerPropertiesFile;
  }
  /**
   * @return string
   */
  public function getProducerPropertiesFile()
  {
    return $this->producerPropertiesFile;
  }
  /**
   * Optional. Security Type for Kafka.
   *
   * Accepted values: KAFKA_SECURITY_PROTOCOL_UNSPECIFIED, SSL, SASL_SSL,
   * PLAINTEXT, SASL_PLAINTEXT
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
   * Optional. The OCID of the stream pool being referenced.
   *
   * @param string $streamPoolId
   */
  public function setStreamPoolId($streamPoolId)
  {
    $this->streamPoolId = $streamPoolId;
  }
  /**
   * @return string
   */
  public function getStreamPoolId()
  {
    return $this->streamPoolId;
  }
  /**
   * Optional. The technology type of KafkaConnection.
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
   * Optional. Specifies that the user intends to authenticate to the instance
   * using a resource principal. Applicable only for OCI Streaming connections.
   *
   * @param bool $useResourcePrincipal
   */
  public function setUseResourcePrincipal($useResourcePrincipal)
  {
    $this->useResourcePrincipal = $useResourcePrincipal;
  }
  /**
   * @return bool
   */
  public function getUseResourcePrincipal()
  {
    return $this->useResourcePrincipal;
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
class_alias(GoldengateKafkaConnectionProperties::class, 'Google_Service_OracleDatabase_GoldengateKafkaConnectionProperties');
