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

class MulticastGroupConsumerActivation extends \Google\Model
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
   * Output only. [Output only] The timestamp when the multicast group consumer
   * activation was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. An optional text description of the multicast group consumer
   * activation.
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
  protected $logConfigType = MulticastLogConfig::class;
  protected $logConfigDataType = '';
  /**
   * Required. The resource name of the multicast consumer association that is
   * in the same zone as this multicast group consumer activation. Use the
   * following format: `projects/locations/multicastConsumerAssociations`.
   *
   * @var string
   */
  public $multicastConsumerAssociation;
  /**
   * Optional. The resource name of the multicast group created by the admin in
   * the same zone as this multicast group consumer activation. Use the
   * following format: // `projects/locations/multicastGroups`. This field is
   * deprecated. Use multicast_group_range_activation instead.
   *
   * @deprecated
   * @var string
   */
  public $multicastGroup;
  /**
   * Required. The resource name of the multicast group range activation created
   * by the admin in the same zone as this multicast group consumer activation.
   * Use the following format: //
   * `projects/locations/multicastGroupRangeActivations`.
   *
   * @var string
   */
  public $multicastGroupRangeActivation;
  /**
   * Identifier. The resource name of the multicast group consumer activation.
   * Use the following format:
   * `projects/locations/multicastGroupConsumerActivations`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. [Deprecated] The resource state of the multicast group
   * consumer activation. Use the state field instead.
   *
   * @deprecated
   * @var string
   */
  public $resourceState;
  protected $stateType = MulticastResourceState::class;
  protected $stateDataType = '';
  /**
   * Output only. [Output only] The Google-generated UUID for the resource. This
   * value is unique across all multicast group consumer activation resources.
   * If a group consumer activation is deleted and another with the same name is
   * created, the new group consumer activation is assigned a different
   * unique_id.
   *
   * @var string
   */
  public $uniqueId;
  /**
   * Output only. [Output only] The timestamp when the multicast group consumer
   * activation was most recently updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. [Output only] The timestamp when the multicast group consumer
   * activation was created.
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
   * Optional. An optional text description of the multicast group consumer
   * activation.
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
   * Optional. Specifies the logging options for the activities performed
   * related to the multicast group consumer activation. Defaults to false. If
   * logging is enabled, logs are exported to Cloud Logging.
   *
   * @param MulticastLogConfig $logConfig
   */
  public function setLogConfig(MulticastLogConfig $logConfig)
  {
    $this->logConfig = $logConfig;
  }
  /**
   * @return MulticastLogConfig
   */
  public function getLogConfig()
  {
    return $this->logConfig;
  }
  /**
   * Required. The resource name of the multicast consumer association that is
   * in the same zone as this multicast group consumer activation. Use the
   * following format: `projects/locations/multicastConsumerAssociations`.
   *
   * @param string $multicastConsumerAssociation
   */
  public function setMulticastConsumerAssociation($multicastConsumerAssociation)
  {
    $this->multicastConsumerAssociation = $multicastConsumerAssociation;
  }
  /**
   * @return string
   */
  public function getMulticastConsumerAssociation()
  {
    return $this->multicastConsumerAssociation;
  }
  /**
   * Optional. The resource name of the multicast group created by the admin in
   * the same zone as this multicast group consumer activation. Use the
   * following format: // `projects/locations/multicastGroups`. This field is
   * deprecated. Use multicast_group_range_activation instead.
   *
   * @deprecated
   * @param string $multicastGroup
   */
  public function setMulticastGroup($multicastGroup)
  {
    $this->multicastGroup = $multicastGroup;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getMulticastGroup()
  {
    return $this->multicastGroup;
  }
  /**
   * Required. The resource name of the multicast group range activation created
   * by the admin in the same zone as this multicast group consumer activation.
   * Use the following format: //
   * `projects/locations/multicastGroupRangeActivations`.
   *
   * @param string $multicastGroupRangeActivation
   */
  public function setMulticastGroupRangeActivation($multicastGroupRangeActivation)
  {
    $this->multicastGroupRangeActivation = $multicastGroupRangeActivation;
  }
  /**
   * @return string
   */
  public function getMulticastGroupRangeActivation()
  {
    return $this->multicastGroupRangeActivation;
  }
  /**
   * Identifier. The resource name of the multicast group consumer activation.
   * Use the following format:
   * `projects/locations/multicastGroupConsumerActivations`.
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
   * Output only. [Deprecated] The resource state of the multicast group
   * consumer activation. Use the state field instead.
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
   * value is unique across all multicast group consumer activation resources.
   * If a group consumer activation is deleted and another with the same name is
   * created, the new group consumer activation is assigned a different
   * unique_id.
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
   * Output only. [Output only] The timestamp when the multicast group consumer
   * activation was most recently updated.
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
class_alias(MulticastGroupConsumerActivation::class, 'Google_Service_NetworkServices_MulticastGroupConsumerActivation');
