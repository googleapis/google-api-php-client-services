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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1betaIdpConfig extends \Google\Model
{
  protected $externalIdpConfigType = GoogleCloudDiscoveryengineV1betaIdpConfigExternalIdpConfig::class;
  protected $externalIdpConfigDataType = '';
  /**
   * @var string
   */
  public $idpType;

  /**
   * @param GoogleCloudDiscoveryengineV1betaIdpConfigExternalIdpConfig
   */
  public function setExternalIdpConfig(GoogleCloudDiscoveryengineV1betaIdpConfigExternalIdpConfig $externalIdpConfig)
  {
    $this->externalIdpConfig = $externalIdpConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1betaIdpConfigExternalIdpConfig
   */
  public function getExternalIdpConfig()
  {
    return $this->externalIdpConfig;
  }
  /**
   * @param string
   */
  public function setIdpType($idpType)
  {
    $this->idpType = $idpType;
  }
  /**
   * @return string
   */
  public function getIdpType()
  {
    return $this->idpType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaIdpConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaIdpConfig');
