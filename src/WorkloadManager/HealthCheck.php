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

namespace Google\Service\WorkloadManager;

class HealthCheck extends \Google\Model
{
  /**
   * Unspecified
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * passed
   */
  public const STATE_PASSED = 'PASSED';
  /**
   * failed
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * degraded
   */
  public const STATE_DEGRADED = 'DEGRADED';
  /**
   * skipped
   */
  public const STATE_SKIPPED = 'SKIPPED';
  /**
   * unsupported
   */
  public const STATE_UNSUPPORTED = 'UNSUPPORTED';
  /**
   * Output only. The message of the health check.
   *
   * @var string
   */
  public $message;
  /**
   * Output only. The health check source metric name.
   *
   * @var string
   */
  public $metric;
  protected $resourceType = CloudResource::class;
  protected $resourceDataType = '';
  /**
   * Output only. The source of the health check.
   *
   * @var string
   */
  public $source;
  /**
   * Output only. The state of the health check.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The message of the health check.
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * Output only. The health check source metric name.
   *
   * @param string $metric
   */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /**
   * @return string
   */
  public function getMetric()
  {
    return $this->metric;
  }
  /**
   * Output only. The resource the check performs on.
   *
   * @param CloudResource $resource
   */
  public function setResource(CloudResource $resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return CloudResource
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * Output only. The source of the health check.
   *
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Output only. The state of the health check.
   *
   * Accepted values: STATE_UNSPECIFIED, PASSED, FAILED, DEGRADED, SKIPPED,
   * UNSUPPORTED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HealthCheck::class, 'Google_Service_WorkloadManager_HealthCheck');
