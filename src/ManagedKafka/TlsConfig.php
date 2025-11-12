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

namespace Google\Service\ManagedKafka;

class TlsConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $sslPrincipalMappingRules;
  protected $trustConfigType = TrustConfig::class;
  protected $trustConfigDataType = '';

  /**
   * @param string
   */
  public function setSslPrincipalMappingRules($sslPrincipalMappingRules)
  {
    $this->sslPrincipalMappingRules = $sslPrincipalMappingRules;
  }
  /**
   * @return string
   */
  public function getSslPrincipalMappingRules()
  {
    return $this->sslPrincipalMappingRules;
  }
  /**
   * @param TrustConfig
   */
  public function setTrustConfig(TrustConfig $trustConfig)
  {
    $this->trustConfig = $trustConfig;
  }
  /**
   * @return TrustConfig
   */
  public function getTrustConfig()
  {
    return $this->trustConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TlsConfig::class, 'Google_Service_ManagedKafka_TlsConfig');
