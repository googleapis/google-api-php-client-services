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

namespace Google\Service\Networkconnectivity;

class Transport extends \Google\Collection
{
  /**
   * Unspecified bandwidth.
   */
  public const BANDWIDTH_BANDWIDTH_UNSPECIFIED = 'BANDWIDTH_UNSPECIFIED';
  /**
   * 50 Megabits per second.
   */
  public const BANDWIDTH_BPS_50M = 'BPS_50M';
  /**
   * 100 Megabits per second.
   */
  public const BANDWIDTH_BPS_100M = 'BPS_100M';
  /**
   * 200 Megabits per second.
   */
  public const BANDWIDTH_BPS_200M = 'BPS_200M';
  /**
   * 300 Megabits per second.
   */
  public const BANDWIDTH_BPS_300M = 'BPS_300M';
  /**
   * 400 Megabits per second.
   */
  public const BANDWIDTH_BPS_400M = 'BPS_400M';
  /**
   * 500 Megabits per second.
   */
  public const BANDWIDTH_BPS_500M = 'BPS_500M';
  /**
   * 1 Gigabit per second.
   */
  public const BANDWIDTH_BPS_1G = 'BPS_1G';
  /**
   * 2 Gigabits per second.
   */
  public const BANDWIDTH_BPS_2G = 'BPS_2G';
  /**
   * 5 Gigabits per second.
   */
  public const BANDWIDTH_BPS_5G = 'BPS_5G';
  /**
   * 10 Gigabits per second.
   */
  public const BANDWIDTH_BPS_10G = 'BPS_10G';
  /**
   * 20 Gigabits per second.
   */
  public const BANDWIDTH_BPS_20G = 'BPS_20G';
  /**
   * 50 Gigabits per second.
   */
  public const BANDWIDTH_BPS_50G = 'BPS_50G';
  /**
   * 100 Gigabits per second.
   */
  public const BANDWIDTH_BPS_100G = 'BPS_100G';
  /**
   * Unspecified stack type.
   */
  public const STACK_TYPE_STACK_TYPE_UNSPECIFIED = 'STACK_TYPE_UNSPECIFIED';
  /**
   * Only IPv4 is supported. (default)
   */
  public const STACK_TYPE_IPV4_ONLY = 'IPV4_ONLY';
  /**
   * Both IPv4 and IPv6 are supported.
   */
  public const STACK_TYPE_IPV4_IPV6 = 'IPV4_IPV6';
  /**
   * Unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The resource exists locally and is being created / associated with the
   * resource on the remote provider’s end of the underlying connectivity.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The Transport exists on both sides of the connection, and is waiting for
   * configuration to finalize and be verified as operational.
   */
  public const STATE_PENDING_CONFIG = 'PENDING_CONFIG';
  /**
   * The Transport was created in GCP. Depending on the profile’s key
   * provisioning flow, this is either waiting for an activation key to be input
   * (the key will be validated that it uses remote resources that match the
   * Transport), or for the generated key to be input to the provider for
   * finalizing. The configured bandwidth is not yet guaranteed.
   */
  public const STATE_PENDING_KEY = 'PENDING_KEY';
  /**
   * The Transport is configured and the underlying connectivity is considered
   * operational.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The Transport is being deleted from GCP. The underlying connectivity is no
   * longer operational.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The Transport was deleted on the remote provider's end and is no longer
   * operational. GCP has insufficient information to move the resource back to
   * PENDING_KEY state.
   */
  public const STATE_DEPROVISIONED = 'DEPROVISIONED';
  protected $collection_key = 'advertisedRoutes';
  /**
   * Optional. List of IP Prefixes that will be advertised to the remote
   * provider. Both IPv4 and IPv6 addresses are supported.
   *
   * @var string[]
   */
  public $advertisedRoutes;
  /**
   * Optional. Immutable. Controls whether resources proposed by the Transport
   * are automatically accepted on behalf of the user. List of actions that can
   * be automatically accepted are: 1. VPC Peering creation 2. Routing VPC Spoke
   * creation 3. Hybrid Spoke creation
   *
   * @var bool
   */
  public $autoAccept;
  /**
   * Optional. Bandwidth of the Transport. This must be one of the supported
   * bandwidths for the remote profile, and must be set when no activation key
   * is being provided.
   *
   * @var string
   */
  public $bandwidth;
  /**
   * Output only. Create time stamp.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Description of the Transport.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Google-generated activation key. This is only output if the
   * selected profile supports an OUTPUT key flow. Inputting this to the
   * provider is only valid while the resource is in a PENDING_KEY state. Once
   * the provider has accepted the key, the resource will move to the
   * CONFIGURING state.
   *
   * @var string
   */
  public $generatedActivationKey;
  /**
   * Optional. Immutable. The NCC Hub that the Transport should attach to. The
   * hub must be in the same project as the Transport. Format: `{hub}` or
   * `projects/{project}/locations/global/hubs/{hub}`
   *
   * @var string
   */
  public $hub;
  /**
   * Optional. Labels as key value pairs.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. The maximum transmission unit (MTU) of a packet that can be
   * sent over this transport.
   *
   * @var int
   */
  public $mtuLimit;
  /**
   * Identifier. Name of the resource.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Immutable. Resource URI of the Network that will be peered with
   * this Transport. This field must be provided during resource creation and
   * cannot be changed.
   *
   * @var string
   */
  public $network;
  /**
   * Output only. VPC Network URI that was created for the VPC Peering
   * connection to the provided `network`. If VPC Peering is disconnected, this
   * can be used to re-establish.
   *
   * @var string
   */
  public $peeringNetwork;
  /**
   * Optional. Immutable. Key used for establishing a connection with the remote
   * transport. This key can only be provided if the profile supports an INPUT
   * key flow and the resource is in the PENDING_KEY state.
   *
   * @var string
   */
  public $providedActivationKey;
  /**
   * Optional. Immutable. Controls whether a Routing VPC Spoke should be created
   * and attached to the NCC Hub. This will provide Private Service Connect
   * (PSC) connectivity through NCC. This can only be set when the Transport is
   * first created.
   *
   * @var bool
   */
  public $pscRoutingEnabled;
  /**
   * Optional. Immutable. The user supplied account id for the CSP associated
   * with the remote profile.
   *
   * @var string
   */
  public $remoteAccountId;
  /**
   * Optional. Immutable. Name of the remoteTransportProfile that this Transport
   * is connecting to.
   *
   * @var string
   */
  public $remoteProfile;
  /**
   * Optional. IP version stack for the established connectivity.
   *
   * @var string
   */
  public $stackType;
  /**
   * Output only. State of the underlying connectivity.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Update time stamp.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. List of IP Prefixes that will be advertised to the remote
   * provider. Both IPv4 and IPv6 addresses are supported.
   *
   * @param string[] $advertisedRoutes
   */
  public function setAdvertisedRoutes($advertisedRoutes)
  {
    $this->advertisedRoutes = $advertisedRoutes;
  }
  /**
   * @return string[]
   */
  public function getAdvertisedRoutes()
  {
    return $this->advertisedRoutes;
  }
  /**
   * Optional. Immutable. Controls whether resources proposed by the Transport
   * are automatically accepted on behalf of the user. List of actions that can
   * be automatically accepted are: 1. VPC Peering creation 2. Routing VPC Spoke
   * creation 3. Hybrid Spoke creation
   *
   * @param bool $autoAccept
   */
  public function setAutoAccept($autoAccept)
  {
    $this->autoAccept = $autoAccept;
  }
  /**
   * @return bool
   */
  public function getAutoAccept()
  {
    return $this->autoAccept;
  }
  /**
   * Optional. Bandwidth of the Transport. This must be one of the supported
   * bandwidths for the remote profile, and must be set when no activation key
   * is being provided.
   *
   * Accepted values: BANDWIDTH_UNSPECIFIED, BPS_50M, BPS_100M, BPS_200M,
   * BPS_300M, BPS_400M, BPS_500M, BPS_1G, BPS_2G, BPS_5G, BPS_10G, BPS_20G,
   * BPS_50G, BPS_100G
   *
   * @param self::BANDWIDTH_* $bandwidth
   */
  public function setBandwidth($bandwidth)
  {
    $this->bandwidth = $bandwidth;
  }
  /**
   * @return self::BANDWIDTH_*
   */
  public function getBandwidth()
  {
    return $this->bandwidth;
  }
  /**
   * Output only. Create time stamp.
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
   * Optional. Description of the Transport.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. Google-generated activation key. This is only output if the
   * selected profile supports an OUTPUT key flow. Inputting this to the
   * provider is only valid while the resource is in a PENDING_KEY state. Once
   * the provider has accepted the key, the resource will move to the
   * CONFIGURING state.
   *
   * @param string $generatedActivationKey
   */
  public function setGeneratedActivationKey($generatedActivationKey)
  {
    $this->generatedActivationKey = $generatedActivationKey;
  }
  /**
   * @return string
   */
  public function getGeneratedActivationKey()
  {
    return $this->generatedActivationKey;
  }
  /**
   * Optional. Immutable. The NCC Hub that the Transport should attach to. The
   * hub must be in the same project as the Transport. Format: `{hub}` or
   * `projects/{project}/locations/global/hubs/{hub}`
   *
   * @param string $hub
   */
  public function setHub($hub)
  {
    $this->hub = $hub;
  }
  /**
   * @return string
   */
  public function getHub()
  {
    return $this->hub;
  }
  /**
   * Optional. Labels as key value pairs.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. The maximum transmission unit (MTU) of a packet that can be
   * sent over this transport.
   *
   * @param int $mtuLimit
   */
  public function setMtuLimit($mtuLimit)
  {
    $this->mtuLimit = $mtuLimit;
  }
  /**
   * @return int
   */
  public function getMtuLimit()
  {
    return $this->mtuLimit;
  }
  /**
   * Identifier. Name of the resource.
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
   * Optional. Immutable. Resource URI of the Network that will be peered with
   * this Transport. This field must be provided during resource creation and
   * cannot be changed.
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
   * Output only. VPC Network URI that was created for the VPC Peering
   * connection to the provided `network`. If VPC Peering is disconnected, this
   * can be used to re-establish.
   *
   * @param string $peeringNetwork
   */
  public function setPeeringNetwork($peeringNetwork)
  {
    $this->peeringNetwork = $peeringNetwork;
  }
  /**
   * @return string
   */
  public function getPeeringNetwork()
  {
    return $this->peeringNetwork;
  }
  /**
   * Optional. Immutable. Key used for establishing a connection with the remote
   * transport. This key can only be provided if the profile supports an INPUT
   * key flow and the resource is in the PENDING_KEY state.
   *
   * @param string $providedActivationKey
   */
  public function setProvidedActivationKey($providedActivationKey)
  {
    $this->providedActivationKey = $providedActivationKey;
  }
  /**
   * @return string
   */
  public function getProvidedActivationKey()
  {
    return $this->providedActivationKey;
  }
  /**
   * Optional. Immutable. Controls whether a Routing VPC Spoke should be created
   * and attached to the NCC Hub. This will provide Private Service Connect
   * (PSC) connectivity through NCC. This can only be set when the Transport is
   * first created.
   *
   * @param bool $pscRoutingEnabled
   */
  public function setPscRoutingEnabled($pscRoutingEnabled)
  {
    $this->pscRoutingEnabled = $pscRoutingEnabled;
  }
  /**
   * @return bool
   */
  public function getPscRoutingEnabled()
  {
    return $this->pscRoutingEnabled;
  }
  /**
   * Optional. Immutable. The user supplied account id for the CSP associated
   * with the remote profile.
   *
   * @param string $remoteAccountId
   */
  public function setRemoteAccountId($remoteAccountId)
  {
    $this->remoteAccountId = $remoteAccountId;
  }
  /**
   * @return string
   */
  public function getRemoteAccountId()
  {
    return $this->remoteAccountId;
  }
  /**
   * Optional. Immutable. Name of the remoteTransportProfile that this Transport
   * is connecting to.
   *
   * @param string $remoteProfile
   */
  public function setRemoteProfile($remoteProfile)
  {
    $this->remoteProfile = $remoteProfile;
  }
  /**
   * @return string
   */
  public function getRemoteProfile()
  {
    return $this->remoteProfile;
  }
  /**
   * Optional. IP version stack for the established connectivity.
   *
   * Accepted values: STACK_TYPE_UNSPECIFIED, IPV4_ONLY, IPV4_IPV6
   *
   * @param self::STACK_TYPE_* $stackType
   */
  public function setStackType($stackType)
  {
    $this->stackType = $stackType;
  }
  /**
   * @return self::STACK_TYPE_*
   */
  public function getStackType()
  {
    return $this->stackType;
  }
  /**
   * Output only. State of the underlying connectivity.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, PENDING_CONFIG, PENDING_KEY,
   * ACTIVE, DELETING, DEPROVISIONED
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
   * Output only. Update time stamp.
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
class_alias(Transport::class, 'Google_Service_Networkconnectivity_Transport');
