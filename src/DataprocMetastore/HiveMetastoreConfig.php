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

namespace Google\Service\DataprocMetastore;

class HiveMetastoreConfig extends \Google\Model
{
  /**
   * The protocol is not set.
   */
  public const ENDPOINT_PROTOCOL_ENDPOINT_PROTOCOL_UNSPECIFIED = 'ENDPOINT_PROTOCOL_UNSPECIFIED';
  /**
   * Use the legacy Apache Thrift protocol for the metastore service endpoint.
   */
  public const ENDPOINT_PROTOCOL_THRIFT = 'THRIFT';
  /**
   * Use the modernized gRPC protocol for the metastore service endpoint.
   */
  public const ENDPOINT_PROTOCOL_GRPC = 'GRPC';
  protected $auxiliaryVersionsType = AuxiliaryVersionConfig::class;
  protected $auxiliaryVersionsDataType = 'map';
  /**
   * Optional. A mapping of Hive metastore configuration key-value pairs to
   * apply to the Hive metastore (configured in hive-site.xml). The mappings
   * override system defaults (some keys cannot be overridden). These overrides
   * are also applied to auxiliary versions and can be further customized in the
   * auxiliary version's AuxiliaryVersionConfig.
   *
   * @var string[]
   */
  public $configOverrides;
  /**
   * Optional. The protocol to use for the metastore service endpoint. If
   * unspecified, defaults to THRIFT.
   *
   * @var string
   */
  public $endpointProtocol;
  protected $kerberosConfigType = KerberosConfig::class;
  protected $kerberosConfigDataType = '';
  /**
   * Immutable. The Hive metastore schema version.
   *
   * @var string
   */
  public $version;

  /**
   * Optional. A mapping of Hive metastore version to the auxiliary version
   * configuration. When specified, a secondary Hive metastore service is
   * created along with the primary service. All auxiliary versions must be less
   * than the service's primary version. The key is the auxiliary service name
   * and it must match the regular expression a-z?. This means that the first
   * character must be a lowercase letter, and all the following characters must
   * be hyphens, lowercase letters, or digits, except the last character, which
   * cannot be a hyphen.
   *
   * @param AuxiliaryVersionConfig[] $auxiliaryVersions
   */
  public function setAuxiliaryVersions($auxiliaryVersions)
  {
    $this->auxiliaryVersions = $auxiliaryVersions;
  }
  /**
   * @return AuxiliaryVersionConfig[]
   */
  public function getAuxiliaryVersions()
  {
    return $this->auxiliaryVersions;
  }
  /**
   * Optional. A mapping of Hive metastore configuration key-value pairs to
   * apply to the Hive metastore (configured in hive-site.xml). The mappings
   * override system defaults (some keys cannot be overridden). These overrides
   * are also applied to auxiliary versions and can be further customized in the
   * auxiliary version's AuxiliaryVersionConfig.
   *
   * @param string[] $configOverrides
   */
  public function setConfigOverrides($configOverrides)
  {
    $this->configOverrides = $configOverrides;
  }
  /**
   * @return string[]
   */
  public function getConfigOverrides()
  {
    return $this->configOverrides;
  }
  /**
   * Optional. The protocol to use for the metastore service endpoint. If
   * unspecified, defaults to THRIFT.
   *
   * Accepted values: ENDPOINT_PROTOCOL_UNSPECIFIED, THRIFT, GRPC
   *
   * @param self::ENDPOINT_PROTOCOL_* $endpointProtocol
   */
  public function setEndpointProtocol($endpointProtocol)
  {
    $this->endpointProtocol = $endpointProtocol;
  }
  /**
   * @return self::ENDPOINT_PROTOCOL_*
   */
  public function getEndpointProtocol()
  {
    return $this->endpointProtocol;
  }
  /**
   * Optional. Information used to configure the Hive metastore service as a
   * service principal in a Kerberos realm. To disable Kerberos, use the
   * UpdateService method and specify this field's path
   * (hive_metastore_config.kerberos_config) in the request's update_mask while
   * omitting this field from the request's service.
   *
   * @param KerberosConfig $kerberosConfig
   */
  public function setKerberosConfig(KerberosConfig $kerberosConfig)
  {
    $this->kerberosConfig = $kerberosConfig;
  }
  /**
   * @return KerberosConfig
   */
  public function getKerberosConfig()
  {
    return $this->kerberosConfig;
  }
  /**
   * Immutable. The Hive metastore schema version.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HiveMetastoreConfig::class, 'Google_Service_DataprocMetastore_HiveMetastoreConfig');
