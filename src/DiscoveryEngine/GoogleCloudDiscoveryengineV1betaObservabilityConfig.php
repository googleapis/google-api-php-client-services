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

class GoogleCloudDiscoveryengineV1betaObservabilityConfig extends \Google\Model
{
  /**
   * Optional. Enables observability. If false, all other flags are ignored.
   *
   * @var bool
   */
  public $observabilityEnabled;
  /**
   * Optional. Enables sensitive logging. Sensitive logging includes customer
   * core content (e.g. prompts, responses). If false, will sanitize all
   * sensitive fields.
   *
   * @var bool
   */
  public $sensitiveLoggingEnabled;

  /**
   * Optional. Enables observability. If false, all other flags are ignored.
   *
   * @param bool $observabilityEnabled
   */
  public function setObservabilityEnabled($observabilityEnabled)
  {
    $this->observabilityEnabled = $observabilityEnabled;
  }
  /**
   * @return bool
   */
  public function getObservabilityEnabled()
  {
    return $this->observabilityEnabled;
  }
  /**
   * Optional. Enables sensitive logging. Sensitive logging includes customer
   * core content (e.g. prompts, responses). If false, will sanitize all
   * sensitive fields.
   *
   * @param bool $sensitiveLoggingEnabled
   */
  public function setSensitiveLoggingEnabled($sensitiveLoggingEnabled)
  {
    $this->sensitiveLoggingEnabled = $sensitiveLoggingEnabled;
  }
  /**
   * @return bool
   */
  public function getSensitiveLoggingEnabled()
  {
    return $this->sensitiveLoggingEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaObservabilityConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaObservabilityConfig');
