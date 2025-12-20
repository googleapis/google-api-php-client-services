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

class GoogleCloudAiplatformV1SandboxEnvironment extends \Google\Model
{
  /**
   * The default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Runtime resources are being allocated for the sandbox environment.
   */
  public const STATE_STATE_PROVISIONING = 'STATE_PROVISIONING';
  /**
   * Sandbox runtime is ready for serving.
   */
  public const STATE_STATE_RUNNING = 'STATE_RUNNING';
  /**
   * Sandbox runtime is halted, performing tear down tasks.
   */
  public const STATE_STATE_DEPROVISIONING = 'STATE_DEPROVISIONING';
  /**
   * Sandbox has terminated with underlying runtime failure.
   */
  public const STATE_STATE_TERMINATED = 'STATE_TERMINATED';
  /**
   * Sandbox runtime has been deleted.
   */
  public const STATE_STATE_DELETED = 'STATE_DELETED';
  protected $connectionInfoType = GoogleCloudAiplatformV1SandboxEnvironmentConnectionInfo::class;
  protected $connectionInfoDataType = '';
  /**
   * Output only. The timestamp when this SandboxEnvironment was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. The display name of the SandboxEnvironment.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. Timestamp in UTC of when this SandboxEnvironment is considered
   * expired. This is *always* provided on output, regardless of what
   * `expiration` was sent on input.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Identifier. The name of the SandboxEnvironment.
   *
   * @var string
   */
  public $name;
  protected $specType = GoogleCloudAiplatformV1SandboxEnvironmentSpec::class;
  protected $specDataType = '';
  /**
   * Output only. The runtime state of the SandboxEnvironment.
   *
   * @var string
   */
  public $state;
  /**
   * Optional. Input only. The TTL for the sandbox environment. The expiration
   * time is computed: now + TTL.
   *
   * @var string
   */
  public $ttl;
  /**
   * Output only. The timestamp when this SandboxEnvironment was most recently
   * updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The connection information of the SandboxEnvironment.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentConnectionInfo $connectionInfo
   */
  public function setConnectionInfo(GoogleCloudAiplatformV1SandboxEnvironmentConnectionInfo $connectionInfo)
  {
    $this->connectionInfo = $connectionInfo;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentConnectionInfo
   */
  public function getConnectionInfo()
  {
    return $this->connectionInfo;
  }
  /**
   * Output only. The timestamp when this SandboxEnvironment was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Required. The display name of the SandboxEnvironment.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Timestamp in UTC of when this SandboxEnvironment is considered
   * expired. This is *always* provided on output, regardless of what
   * `expiration` was sent on input.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Identifier. The name of the SandboxEnvironment.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. The configuration of the SandboxEnvironment.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentSpec $spec
   */
  public function setSpec(GoogleCloudAiplatformV1SandboxEnvironmentSpec $spec)
  {
    $this->spec = $spec;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentSpec
   */
  public function getSpec()
  {
    return $this->spec;
  }
  /**
   * Output only. The runtime state of the SandboxEnvironment.
   *
   * Accepted values: STATE_UNSPECIFIED, STATE_PROVISIONING, STATE_RUNNING,
   * STATE_DEPROVISIONING, STATE_TERMINATED, STATE_DELETED
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
  /**
   * Optional. Input only. The TTL for the sandbox environment. The expiration
   * time is computed: now + TTL.
   *
   * @param string $ttl
   */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /**
   * @return string
   */
  public function getTtl()
  {
    return $this->ttl;
  }
  /**
   * Output only. The timestamp when this SandboxEnvironment was most recently
   * updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SandboxEnvironment::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironment');
