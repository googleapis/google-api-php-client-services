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

class GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfig extends \Google\Collection
{
  protected $collection_key = 'dnsPeeringConfigs';
  /**
   * Optional. The customer VPC network that sandbox egress is routed into.
   *
   * @var string
   */
  public $customerVpcNetwork;
  protected $dnsPeeringConfigsType = GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfigDnsPeeringConfig::class;
  protected $dnsPeeringConfigsDataType = 'array';
  /**
   * Optional. Whether to allow internet access.
   *
   * @var bool
   */
  public $internetAccess;
  /**
   * Optional. The name of the customer VPC `NetworkAttachment` used to draw a
   * PSC interface IP into the customer VPC for sandbox egress.
   *
   * @var string
   */
  public $networkAttachment;

  /**
   * Optional. The customer VPC network that sandbox egress is routed into.
   *
   * @param string $customerVpcNetwork
   */
  public function setCustomerVpcNetwork($customerVpcNetwork)
  {
    $this->customerVpcNetwork = $customerVpcNetwork;
  }
  /**
   * @return string
   */
  public function getCustomerVpcNetwork()
  {
    return $this->customerVpcNetwork;
  }
  /**
   * Optional. DNS peering configurations that allow sandbox egress to resolve
   * customer-internal domains via the customer VPC.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfigDnsPeeringConfig[] $dnsPeeringConfigs
   */
  public function setDnsPeeringConfigs($dnsPeeringConfigs)
  {
    $this->dnsPeeringConfigs = $dnsPeeringConfigs;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfigDnsPeeringConfig[]
   */
  public function getDnsPeeringConfigs()
  {
    return $this->dnsPeeringConfigs;
  }
  /**
   * Optional. Whether to allow internet access.
   *
   * @param bool $internetAccess
   */
  public function setInternetAccess($internetAccess)
  {
    $this->internetAccess = $internetAccess;
  }
  /**
   * @return bool
   */
  public function getInternetAccess()
  {
    return $this->internetAccess;
  }
  /**
   * Optional. The name of the customer VPC `NetworkAttachment` used to draw a
   * PSC interface IP into the customer VPC for sandbox egress.
   *
   * @param string $networkAttachment
   */
  public function setNetworkAttachment($networkAttachment)
  {
    $this->networkAttachment = $networkAttachment;
  }
  /**
   * @return string
   */
  public function getNetworkAttachment()
  {
    return $this->networkAttachment;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentTemplateEgressControlConfig');
