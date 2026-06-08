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

class MulticastConsumerAssociation extends \Google\Model
{
  /**
   * The consumer resource state is not specified.
   */
  public const RESOURCE_STATE_CONSUMER_RESOURCE_STATE_UNSPECIFIED = 'CONSUMER_RESOURCE_STATE_UNSPECIFIED';
  /**
   * The consumer resource state is active.
   */
  public const RESOURCE_STATE_ACTIVE = 'ACTIVE';
  /**
   * The associated admin resource has been deleted. The consumer resource state
   * becomes obsolete.
   */
  public const RESOURCE_STATE_OBSOLETE = 'OBSOLETE';
  /**
   * Output only. [Output only] The timestamp when the multicast consumer
   * association was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. An optional text description of the multicast consumer
   * association.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Labels as key-value pairs
   *
   * @var string[]
   */
  public $labels;
  /**
   * Optional. The resource name of the multicast domain activation that is in
   * the same zone as this multicast consumer association. Use the following
   * format: `projects/locations/multicastDomainActivations`.
   *
   * @var string
   */
  public $multicastDomainActivation;
  /**
   * Identifier. The resource name of the multicast consumer association. Use
   * the following format: `projects/locations/multicastConsumerAssociations`.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The resource name of the multicast consumer VPC network. Use
   * following format: `projects/{project}/locations/global/networks/{network}`.
   *
   * @var string
   */
  public $network;
  /**
   * Output only. [Output only] A Compute Engine (placement
   * policy)[https://cloud.google.com/compute/docs/instances/placement-policies-
   * overview] that can be used to place virtual machine (VM) instances as
   * multicast consumers close to the multicast infrastructure created for this
   * domain, on a best effort basis.
   *
   * @var string
   */
  public $placementPolicy;
  /**
   * Output only. [Deprecated] The resource state of the multicast consumer
   * association. Use the state field instead.
   *
   * @deprecated
   * @var string
   */
  public $resourceState;
  protected $stateType = MulticastResourceState::class;
  protected $stateDataType = '';
  /**
   * Output only. [Output only] The Google-generated UUID for the resource. This
   * value is unique across all multicast consumer association resources. If a
   * consumer association is deleted and another with the same name is created,
   * the new consumer association is assigned a different unique_id.
   *
   * @var string
   */
  public $uniqueId;
  /**
   * Output only. [Output only] The timestamp when the Multicast Consumer
   * Association was most recently updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. [Output only] The timestamp when the multicast consumer
   * association was created.
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
   * Optional. An optional text description of the multicast consumer
   * association.
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
   * Optional. Labels as key-value pairs
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
   * Optional. The resource name of the multicast domain activation that is in
   * the same zone as this multicast consumer association. Use the following
   * format: `projects/locations/multicastDomainActivations`.
   *
   * @param string $multicastDomainActivation
   */
  public function setMulticastDomainActivation($multicastDomainActivation)
  {
    $this->multicastDomainActivation = $multicastDomainActivation;
  }
  /**
   * @return string
   */
  public function getMulticastDomainActivation()
  {
    return $this->multicastDomainActivation;
  }
  /**
   * Identifier. The resource name of the multicast consumer association. Use
   * the following format: `projects/locations/multicastConsumerAssociations`.
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
   * Required. The resource name of the multicast consumer VPC network. Use
   * following format: `projects/{project}/locations/global/networks/{network}`.
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
   * Output only. [Output only] A Compute Engine (placement
   * policy)[https://cloud.google.com/compute/docs/instances/placement-policies-
   * overview] that can be used to place virtual machine (VM) instances as
   * multicast consumers close to the multicast infrastructure created for this
   * domain, on a best effort basis.
   *
   * @param string $placementPolicy
   */
  public function setPlacementPolicy($placementPolicy)
  {
    $this->placementPolicy = $placementPolicy;
  }
  /**
   * @return string
   */
  public function getPlacementPolicy()
  {
    return $this->placementPolicy;
  }
  /**
   * Output only. [Deprecated] The resource state of the multicast consumer
   * association. Use the state field instead.
   *
   * Accepted values: CONSUMER_RESOURCE_STATE_UNSPECIFIED, ACTIVE, OBSOLETE
   *
   * @deprecated
   * @param self::RESOURCE_STATE_* $resourceState
   */
  public function setResourceState($resourceState)
  {
    $this->resourceState = $resourceState;
  }
  /**
   * @deprecated
   * @return self::RESOURCE_STATE_*
   */
  public function getResourceState()
  {
    return $this->resourceState;
  }
  /**
   * Output only. [Output only] The state of the resource.
   *
   * @param MulticastResourceState $state
   */
  public function setState(MulticastResourceState $state)
  {
    $this->state = $state;
  }
  /**
   * @return MulticastResourceState
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. [Output only] The Google-generated UUID for the resource. This
   * value is unique across all multicast consumer association resources. If a
   * consumer association is deleted and another with the same name is created,
   * the new consumer association is assigned a different unique_id.
   *
   * @param string $uniqueId
   */
  public function setUniqueId($uniqueId)
  {
    $this->uniqueId = $uniqueId;
  }
  /**
   * @return string
   */
  public function getUniqueId()
  {
    return $this->uniqueId;
  }
  /**
   * Output only. [Output only] The timestamp when the Multicast Consumer
   * Association was most recently updated.
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
class_alias(MulticastConsumerAssociation::class, 'Google_Service_NetworkServices_MulticastConsumerAssociation');
