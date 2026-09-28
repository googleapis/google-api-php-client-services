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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ObservabilityConfig extends \Google\Model
{
  /**
   * Optional. Enables observability for this agent's sessions: OpenTelemetry
   * span emission covering tool names, model names, token counts, latencies and
   * status. If `false`, the other fields here are ignored.
   *
   * @var bool
   */
  public $observabilityEnabled;
  /**
   * Optional. Enables sensitive logging. Sensitive logging includes customer
   * core content (prompts, model completions, tool argument payloads and tool
   * responses). If `false`, those are sanitized and only structural attributes
   * are recorded. No effect unless `observability_enabled` is true. Settable
   * and returned, but NOT YET ENFORCED. Nothing reads it at runtime, so `true`
   * does not currently cause content to be captured, and `false` is not what
   * keeps content from being captured. Treat it as a recorded intention that
   * takes effect when enforcement lands.
   *
   * @var bool
   */
  public $sensitiveLoggingEnabled;

  /**
   * Optional. Enables observability for this agent's sessions: OpenTelemetry
   * span emission covering tool names, model names, token counts, latencies and
   * status. If `false`, the other fields here are ignored.
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
   * core content (prompts, model completions, tool argument payloads and tool
   * responses). If `false`, those are sanitized and only structural attributes
   * are recorded. No effect unless `observability_enabled` is true. Settable
   * and returned, but NOT YET ENFORCED. Nothing reads it at runtime, so `true`
   * does not currently cause content to be captured, and `false` is not what
   * keeps content from being captured. Treat it as a recorded intention that
   * takes effect when enforcement lands.
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
class_alias(GoogleCloudAiplatformV1ObservabilityConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ObservabilityConfig');
