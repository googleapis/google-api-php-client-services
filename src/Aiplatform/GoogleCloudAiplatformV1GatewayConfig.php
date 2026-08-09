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

class GoogleCloudAiplatformV1GatewayConfig extends \Google\Collection
{
  /**
   * The default value. This value is used if the state is omitted.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The Gateway is being provisioned.
   */
  public const STATE_PROVISIONING = 'PROVISIONING';
  /**
   * The Gateway is active and ready to use.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The Gateway is being de-provisioned.
   */
  public const STATE_DEPROVISIONING = 'DEPROVISIONING';
  /**
   * The Gateway is inactive.
   */
  public const STATE_INACTIVE = 'INACTIVE';
  /**
   * The Gateway failed to be provisioned.
   */
  public const STATE_FAILED = 'FAILED';
  protected $collection_key = 'allowedProjects';
  /**
   * Optional. Additional consumer projects permitted to attach their own PSC
   * endpoint to this gateway's ServiceAttachment. This is the "decoupled" mode,
   * where the customer creates the PSC endpoint in a project other than this
   * gateway's `network` project. Each listed project is VPC-SC enforced: it
   * must be within the caller's service perimeter. The owning
   * SemanticGovernancePolicyEngine's own project is always permitted implicitly
   * and need not be listed. Format: `projects/{project}` (ID or number).
   *
   * @var string[]
   */
  public $allowedProjects;
  /**
   * Output only. The fully qualified record name of the created A-record in
   * Cloud DNS.
   *
   * @var string
   */
  public $dnsRecord;
  /**
   * Optional. FQDN of the private DNS zone to create DNS record set for PSC
   * endpoint.
   *
   * @var string
   */
  public $dnsZoneName;
  /**
   * Output only. The private IP address of the PSC endpoint.
   *
   * @var string
   */
  public $ipAddress;
  /**
   * Optional. The URI of the network resource where PSC-E will be provisioned.
   * if not provided `default` network will be used. Format:
   * projects/{project}/global/networks/{network}
   *
   * @var string
   */
  public $network;
  /**
   * Output only. The self-link or name of the Private Service Connect endpoint
   * forwarding rule.
   *
   * @var string
   */
  public $pscEndpoint;
  /**
   * Output only. The state of the Gateway configuration.
   *
   * @var string
   */
  public $state;
  /**
   * Optional. The URI of the subnetwork resource where PSC-E will be
   * provisioned. if not provided `default` subnet will be used from the same
   * {location} Format:
   * projects/{project}/regions/{region}/subnetworks/{subnetwork}
   *
   * @var string
   */
  public $subnetwork;

  /**
   * Optional. Additional consumer projects permitted to attach their own PSC
   * endpoint to this gateway's ServiceAttachment. This is the "decoupled" mode,
   * where the customer creates the PSC endpoint in a project other than this
   * gateway's `network` project. Each listed project is VPC-SC enforced: it
   * must be within the caller's service perimeter. The owning
   * SemanticGovernancePolicyEngine's own project is always permitted implicitly
   * and need not be listed. Format: `projects/{project}` (ID or number).
   *
   * @param string[] $allowedProjects
   */
  public function setAllowedProjects($allowedProjects)
  {
    $this->allowedProjects = $allowedProjects;
  }
  /**
   * @return string[]
   */
  public function getAllowedProjects()
  {
    return $this->allowedProjects;
  }
  /**
   * Output only. The fully qualified record name of the created A-record in
   * Cloud DNS.
   *
   * @param string $dnsRecord
   */
  public function setDnsRecord($dnsRecord)
  {
    $this->dnsRecord = $dnsRecord;
  }
  /**
   * @return string
   */
  public function getDnsRecord()
  {
    return $this->dnsRecord;
  }
  /**
   * Optional. FQDN of the private DNS zone to create DNS record set for PSC
   * endpoint.
   *
   * @param string $dnsZoneName
   */
  public function setDnsZoneName($dnsZoneName)
  {
    $this->dnsZoneName = $dnsZoneName;
  }
  /**
   * @return string
   */
  public function getDnsZoneName()
  {
    return $this->dnsZoneName;
  }
  /**
   * Output only. The private IP address of the PSC endpoint.
   *
   * @param string $ipAddress
   */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /**
   * @return string
   */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /**
   * Optional. The URI of the network resource where PSC-E will be provisioned.
   * if not provided `default` network will be used. Format:
   * projects/{project}/global/networks/{network}
   *
   * @param string $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return string
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Output only. The self-link or name of the Private Service Connect endpoint
   * forwarding rule.
   *
   * @param string $pscEndpoint
   */
  public function setPscEndpoint($pscEndpoint)
  {
    $this->pscEndpoint = $pscEndpoint;
  }
  /**
   * @return string
   */
  public function getPscEndpoint()
  {
    return $this->pscEndpoint;
  }
  /**
   * Output only. The state of the Gateway configuration.
   *
   * Accepted values: STATE_UNSPECIFIED, PROVISIONING, ACTIVE, DEPROVISIONING,
   * INACTIVE, FAILED
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
   * Optional. The URI of the subnetwork resource where PSC-E will be
   * provisioned. if not provided `default` subnet will be used from the same
   * {location} Format:
   * projects/{project}/regions/{region}/subnetworks/{subnetwork}
   *
   * @param string $subnetwork
   */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /**
   * @return string
   */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GatewayConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GatewayConfig');
