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

class AuxiliaryVersionConfig extends \Google\Model
{
  /**
   * Optional. A mapping of Hive metastore configuration key-value pairs to
   * apply to the auxiliary Hive metastore (configured in hive-site.xml) in
   * addition to the primary version's overrides. If keys are present in both
   * the auxiliary version's overrides and the primary version's overrides, the
   * value from the auxiliary version's overrides takes precedence.
   *
   * @var string[]
   */
  public $configOverrides;
  protected $networkConfigType = NetworkConfig::class;
  protected $networkConfigDataType = '';
  /**
   * Optional. The Hive metastore version of the auxiliary service. It must be
   * less than the primary Hive metastore service's version.
   *
   * @var string
   */
  public $version;

  /**
   * Optional. A mapping of Hive metastore configuration key-value pairs to
   * apply to the auxiliary Hive metastore (configured in hive-site.xml) in
   * addition to the primary version's overrides. If keys are present in both
   * the auxiliary version's overrides and the primary version's overrides, the
   * value from the auxiliary version's overrides takes precedence.
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
   * Output only. The network configuration contains the endpoint URI(s) of the
   * auxiliary Hive metastore service.
   *
   * @param NetworkConfig $networkConfig
   */
  public function setNetworkConfig(NetworkConfig $networkConfig)
  {
    $this->networkConfig = $networkConfig;
  }
  /**
   * @return NetworkConfig
   */
  public function getNetworkConfig()
  {
    return $this->networkConfig;
  }
  /**
   * Optional. The Hive metastore version of the auxiliary service. It must be
   * less than the primary Hive metastore service's version.
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
class_alias(AuxiliaryVersionConfig::class, 'Google_Service_DataprocMetastore_AuxiliaryVersionConfig');
