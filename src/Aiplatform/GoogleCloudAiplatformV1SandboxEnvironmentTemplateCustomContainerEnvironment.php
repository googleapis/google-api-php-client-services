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

class GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerEnvironment extends \Google\Collection
{
  protected $collection_key = 'ports';
  protected $customContainerSpecType = GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerSpec::class;
  protected $customContainerSpecDataType = '';
  protected $portsType = GoogleCloudAiplatformV1SandboxEnvironmentTemplateNetworkPort::class;
  protected $portsDataType = 'array';
  protected $resourcesType = GoogleCloudAiplatformV1SandboxEnvironmentTemplateResourceRequirements::class;
  protected $resourcesDataType = '';

  /**
   * The specification of the custom container environment.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerSpec $customContainerSpec
   */
  public function setCustomContainerSpec(GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerSpec $customContainerSpec)
  {
    $this->customContainerSpec = $customContainerSpec;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerSpec
   */
  public function getCustomContainerSpec()
  {
    return $this->customContainerSpec;
  }
  /**
   * Ports to expose from the container.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentTemplateNetworkPort[] $ports
   */
  public function setPorts($ports)
  {
    $this->ports = $ports;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentTemplateNetworkPort[]
   */
  public function getPorts()
  {
    return $this->ports;
  }
  /**
   * Resource requests and limits for the container.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentTemplateResourceRequirements $resources
   */
  public function setResources(GoogleCloudAiplatformV1SandboxEnvironmentTemplateResourceRequirements $resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentTemplateResourceRequirements
   */
  public function getResources()
  {
    return $this->resources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerEnvironment::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentTemplateCustomContainerEnvironment');
