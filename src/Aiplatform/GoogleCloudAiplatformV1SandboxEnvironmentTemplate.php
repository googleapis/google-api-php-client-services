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

class GoogleCloudAiplatformV1SandboxEnvironmentTemplate extends \Google\Model
{
  /**
   * The default value. This value is unused.
   */
  public const STATE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Runtime resources are being allocated for the sandbox environment.
   */
  public const STATE_PROVISIONING = 'PROVISIONING';
  /**
   * Sandbox runtime is ready for serving.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Sandbox runtime is halted, performing tear down tasks.
   */
  public const STATE_DEPROVISIONING = 'DEPROVISIONING';
  /**
   * Sandbox has terminated with underlying runtime failure.
   */
  public const STATE_DELETED = 'DELETED';
  /**
   * Sandbox has failed to provision.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Output only. The timestamp when this SandboxEnvironmentTemplate was
   * created.
   *
   * @var string
   */
  public $createTime;
  protected $customContainerEnvironmentType = GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerEnvironment::class;
  protected $customContainerEnvironmentDataType = '';
  protected $defaultContainerEnvironmentType = GoogleCloudAiplatformV1SandboxEnvironmentTemplateDefaultContainerEnvironment::class;
  protected $defaultContainerEnvironmentDataType = '';
  /**
   * Required. The display name of the SandboxEnvironmentTemplate.
   *
   * @var string
   */
  public $displayName;
  protected $egressControlConfigType = GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfig::class;
  protected $egressControlConfigDataType = '';
  protected $ingressControlConfigType = GoogleCloudAiplatformV1PrivateServiceConnectConfig::class;
  protected $ingressControlConfigDataType = '';
  /**
   * Identifier. The resource name of the SandboxEnvironmentTemplate. Format: `p
   * rojects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}/
   * sandboxEnvironmentTemplates/{sandbox_environment_template}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The state of the sandbox environment template.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The timestamp when this SandboxEnvironmentTemplate was most
   * recently updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The timestamp when this SandboxEnvironmentTemplate was
   * created.
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
   * The sandbox environment for custom container workloads.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerEnvironment $customContainerEnvironment
   */
  public function setCustomContainerEnvironment(GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerEnvironment $customContainerEnvironment)
  {
    $this->customContainerEnvironment = $customContainerEnvironment;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerEnvironment
   */
  public function getCustomContainerEnvironment()
  {
    return $this->customContainerEnvironment;
  }
  /**
   * The sandbox environment for default container workloads.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentTemplateDefaultContainerEnvironment $defaultContainerEnvironment
   */
  public function setDefaultContainerEnvironment(GoogleCloudAiplatformV1SandboxEnvironmentTemplateDefaultContainerEnvironment $defaultContainerEnvironment)
  {
    $this->defaultContainerEnvironment = $defaultContainerEnvironment;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentTemplateDefaultContainerEnvironment
   */
  public function getDefaultContainerEnvironment()
  {
    return $this->defaultContainerEnvironment;
  }
  /**
   * Required. The display name of the SandboxEnvironmentTemplate.
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
   * Optional. The configuration for egress control of this template.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfig $egressControlConfig
   */
  public function setEgressControlConfig(GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfig $egressControlConfig)
  {
    $this->egressControlConfig = $egressControlConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfig
   */
  public function getEgressControlConfig()
  {
    return $this->egressControlConfig;
  }
  /**
   * Optional. The configuration for private ingress (PSC-E) of this template.
   * When set, the sandbox router is exposed privately via a PSC service
   * attachment so VPC-SC customers can connect from their VPC over a private
   * endpoint instead of the public internet. The resulting service attachment
   * is surfaced on `SandboxEnvironment.connection_info.service_attachment`.
   * Only the PSC-E (service-attachment/ingress) portion of
   * `PrivateServiceConnectConfig` applies here:
   * `enable_private_service_connect` and `project_allowlist` (the consumer
   * projects allowed to connect). The nested `psc_interface_config` (PSC-I /
   * egress) is not used for sandbox ingress; sandbox egress is configured via
   * `egress_control_config` instead.
   *
   * @param GoogleCloudAiplatformV1PrivateServiceConnectConfig $ingressControlConfig
   */
  public function setIngressControlConfig(GoogleCloudAiplatformV1PrivateServiceConnectConfig $ingressControlConfig)
  {
    $this->ingressControlConfig = $ingressControlConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1PrivateServiceConnectConfig
   */
  public function getIngressControlConfig()
  {
    return $this->ingressControlConfig;
  }
  /**
   * Identifier. The resource name of the SandboxEnvironmentTemplate. Format: `p
   * rojects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}/
   * sandboxEnvironmentTemplates/{sandbox_environment_template}`
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
   * Output only. The state of the sandbox environment template.
   *
   * Accepted values: UNSPECIFIED, PROVISIONING, ACTIVE, DEPROVISIONING,
   * DELETED, FAILED
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
   * Output only. The timestamp when this SandboxEnvironmentTemplate was most
   * recently updated.
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
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentTemplate::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentTemplate');
