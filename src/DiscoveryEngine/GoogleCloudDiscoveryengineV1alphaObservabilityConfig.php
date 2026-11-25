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

class GoogleCloudDiscoveryengineV1alphaObservabilityConfig extends \Google\Model
{
  /**
   * Optional. The Cloud Storage bucket that agent artifacts are written to.
   * Artifacts are the multi-modal content (e.g. generated images and files)
   * that an agent produces while handling an invocation. Persisting them makes
   * them available for inspection alongside the observability traces and logs
   * emitted for the same invocation. This must be a bucket URI without an
   * object path. Example value: `gs://my-observability-bucket`. The bucket must
   * be owned by the same project as the resource, and the Gemini Enterprise
   * service agent must be able to write to it. Otherwise an `INVALID_ARGUMENT`
   * or `PERMISSION_DENIED` error is returned. If unset, artifacts are only held
   * for the duration of the invocation and are not persisted. This field has no
   * effect when set on a Project; setting it there returns an
   * `INVALID_ARGUMENT` error. Configure it on an Engine or an Agent instead.
   * When set on both, the agent-level value takes precedence.
   *
   * @var string
   */
  public $artifactGcsBucket;
  /**
   * Optional. Enables observability. If `false`, all other flags are ignored.
   *
   * @var bool
   */
  public $observabilityEnabled;
  /**
   * Optional. Enables sensitive logging. Sensitive logging includes customer
   * core content (e.g. prompts, responses). If `false`, will sanitize all
   * sensitive fields.
   *
   * @var bool
   */
  public $sensitiveLoggingEnabled;
  /**
   * Optional. Logs the end user's identity on activity log entries even when
   * `sensitive_logging_enabled` is `false`. Prompt and response content stays
   * redacted. Has no effect when `sensitive_logging_enabled` is `true`. Setting
   * this field on a Project returns an `INVALID_ARGUMENT` error. Configure it
   * on an Engine or an Agent instead.
   *
   * @var bool
   */
  public $userPrincipalLoggingEnabled;

  /**
   * Optional. The Cloud Storage bucket that agent artifacts are written to.
   * Artifacts are the multi-modal content (e.g. generated images and files)
   * that an agent produces while handling an invocation. Persisting them makes
   * them available for inspection alongside the observability traces and logs
   * emitted for the same invocation. This must be a bucket URI without an
   * object path. Example value: `gs://my-observability-bucket`. The bucket must
   * be owned by the same project as the resource, and the Gemini Enterprise
   * service agent must be able to write to it. Otherwise an `INVALID_ARGUMENT`
   * or `PERMISSION_DENIED` error is returned. If unset, artifacts are only held
   * for the duration of the invocation and are not persisted. This field has no
   * effect when set on a Project; setting it there returns an
   * `INVALID_ARGUMENT` error. Configure it on an Engine or an Agent instead.
   * When set on both, the agent-level value takes precedence.
   *
   * @param string $artifactGcsBucket
   */
  public function setArtifactGcsBucket($artifactGcsBucket)
  {
    $this->artifactGcsBucket = $artifactGcsBucket;
  }
  /**
   * @return string
   */
  public function getArtifactGcsBucket()
  {
    return $this->artifactGcsBucket;
  }
  /**
   * Optional. Enables observability. If `false`, all other flags are ignored.
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
   * core content (e.g. prompts, responses). If `false`, will sanitize all
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
  /**
   * Optional. Logs the end user's identity on activity log entries even when
   * `sensitive_logging_enabled` is `false`. Prompt and response content stays
   * redacted. Has no effect when `sensitive_logging_enabled` is `true`. Setting
   * this field on a Project returns an `INVALID_ARGUMENT` error. Configure it
   * on an Engine or an Agent instead.
   *
   * @param bool $userPrincipalLoggingEnabled
   */
  public function setUserPrincipalLoggingEnabled($userPrincipalLoggingEnabled)
  {
    $this->userPrincipalLoggingEnabled = $userPrincipalLoggingEnabled;
  }
  /**
   * @return bool
   */
  public function getUserPrincipalLoggingEnabled()
  {
    return $this->userPrincipalLoggingEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaObservabilityConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaObservabilityConfig');
