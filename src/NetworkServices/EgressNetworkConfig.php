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

namespace Google\Service\NetworkServices;

class EgressNetworkConfig extends \Google\Model
{
  /**
   * Unspecified
   */
  public const VPC_EGRESS_VPC_EGRESS_UNSPECIFIED = 'VPC_EGRESS_UNSPECIFIED';
  /**
   * All outbound traffic is routed through the VPC connector.
   */
  public const VPC_EGRESS_ALL_TRAFFIC = 'ALL_TRAFFIC';
  /**
   * Only private IP ranges are routed through the VPC connector.
   */
  public const VPC_EGRESS_PRIVATE_RANGES_ONLY = 'PRIVATE_RANGES_ONLY';
  protected $dnsPeeringConfigType = DnsPeeringConfig::class;
  protected $dnsPeeringConfigDataType = '';
  /**
   * Optional. The network attachment resource name. Format: projects/{project}/
   * regions/{region}/networkAttachments/{network_attachment_id}
   *
   * @var string
   */
  public $networkAttachment;
  /**
   * Optional. Deprecated: Use tls_config instead. The trust config resource
   * name. Format:
   * projects/{project}/locations/{location}/trustConfigs/{trust_config}
   *
   * @deprecated
   * @var string
   */
  public $trustConfig;
  /**
   * Optional. The VPC egress setting.
   *
   * @var string
   */
  public $vpcEgress;

  /**
   * Optional. DNS Peering configuration.
   *
   * @param DnsPeeringConfig $dnsPeeringConfig
   */
  public function setDnsPeeringConfig(DnsPeeringConfig $dnsPeeringConfig)
  {
    $this->dnsPeeringConfig = $dnsPeeringConfig;
  }
  /**
   * @return DnsPeeringConfig
   */
  public function getDnsPeeringConfig()
  {
    return $this->dnsPeeringConfig;
  }
  /**
   * Optional. The network attachment resource name. Format: projects/{project}/
   * regions/{region}/networkAttachments/{network_attachment_id}
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
  /**
   * Optional. Deprecated: Use tls_config instead. The trust config resource
   * name. Format:
   * projects/{project}/locations/{location}/trustConfigs/{trust_config}
   *
   * @deprecated
   * @param string $trustConfig
   */
  public function setTrustConfig($trustConfig)
  {
    $this->trustConfig = $trustConfig;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getTrustConfig()
  {
    return $this->trustConfig;
  }
  /**
   * Optional. The VPC egress setting.
   *
   * Accepted values: VPC_EGRESS_UNSPECIFIED, ALL_TRAFFIC, PRIVATE_RANGES_ONLY
   *
   * @param self::VPC_EGRESS_* $vpcEgress
   */
  public function setVpcEgress($vpcEgress)
  {
    $this->vpcEgress = $vpcEgress;
  }
  /**
   * @return self::VPC_EGRESS_*
   */
  public function getVpcEgress()
  {
    return $this->vpcEgress;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EgressNetworkConfig::class, 'Google_Service_NetworkServices_EgressNetworkConfig');
