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

namespace Google\Service\SQLAdmin;

class PscAutoConnectionConfig extends \Google\Model
{
  /**
   * Unspecified status. This means status is missing from dependency service.
   */
  public const INSTANCE_AUTO_DNS_STATUS_AUTO_DNS_STATUS_UNSPECIFIED = 'AUTO_DNS_STATUS_UNSPECIFIED';
  /**
   * DNS provisioning is OK.
   */
  public const INSTANCE_AUTO_DNS_STATUS_AUTO_DNS_OK = 'AUTO_DNS_OK';
  /**
   * DNS provisioning failed.
   */
  public const INSTANCE_AUTO_DNS_STATUS_AUTO_DNS_FAILED = 'AUTO_DNS_FAILED';
  /**
   * DNS provisioning status is not recognized by Cloud SQL.
   */
  public const INSTANCE_AUTO_DNS_STATUS_AUTO_DNS_UNKNOWN = 'AUTO_DNS_UNKNOWN';
  /**
   * Unspecified status. This means status is missing from dependency service.
   */
  public const WRITE_ENDPOINT_AUTO_DNS_STATUS_AUTO_DNS_STATUS_UNSPECIFIED = 'AUTO_DNS_STATUS_UNSPECIFIED';
  /**
   * DNS provisioning is OK.
   */
  public const WRITE_ENDPOINT_AUTO_DNS_STATUS_AUTO_DNS_OK = 'AUTO_DNS_OK';
  /**
   * DNS provisioning failed.
   */
  public const WRITE_ENDPOINT_AUTO_DNS_STATUS_AUTO_DNS_FAILED = 'AUTO_DNS_FAILED';
  /**
   * DNS provisioning status is not recognized by Cloud SQL.
   */
  public const WRITE_ENDPOINT_AUTO_DNS_STATUS_AUTO_DNS_UNKNOWN = 'AUTO_DNS_UNKNOWN';
  /**
   * Optional. The consumer network of this consumer endpoint. This must be a
   * resource path that includes both the host project and the network name. For
   * example, `projects/project1/global/networks/network1`. The consumer host
   * project of this network might be different from the consumer service
   * project.
   *
   * @var string
   */
  public $consumerNetwork;
  /**
   * The connection policy status of the consumer network.
   *
   * @var string
   */
  public $consumerNetworkStatus;
  /**
   * Optional. This is the project ID of consumer service project of this
   * consumer endpoint. This is only applicable if `consumer_network` is a
   * shared VPC network.
   *
   * @var string
   */
  public $consumerProject;
  /**
   * Output only. The status of automated DNS provisioning.
   *
   * @var string
   */
  public $instanceAutoDnsStatus;
  /**
   * The IP address of the consumer endpoint.
   *
   * @var string
   */
  public $ipAddress;
  /**
   * Output only. The service connection policy created automatically for the
   * consumer network when `psc_auto_connection_policy_enabled` is true. It is
   * in the format of:
   * `projects/{project}/regions/{region}/serviceConnectionPolicies/{policy_id}`
   * The `policy_id` is in format of `$NETWORK-$RANDOM`.
   *
   * @var string
   */
  public $serviceConnectionPolicy;
  /**
   * Output only. The status of service connection policy creation.
   *
   * @var string
   */
  public $serviceConnectionPolicyCreationResult;
  /**
   * The connection status of the consumer endpoint.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. The status of automated DNS provisioning for the write
   * endpoint.
   *
   * @var string
   */
  public $writeEndpointAutoDnsStatus;

  /**
   * Optional. The consumer network of this consumer endpoint. This must be a
   * resource path that includes both the host project and the network name. For
   * example, `projects/project1/global/networks/network1`. The consumer host
   * project of this network might be different from the consumer service
   * project.
   *
   * @param string $consumerNetwork
   */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /**
   * @return string
   */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /**
   * The connection policy status of the consumer network.
   *
   * @param string $consumerNetworkStatus
   */
  public function setConsumerNetworkStatus($consumerNetworkStatus)
  {
    $this->consumerNetworkStatus = $consumerNetworkStatus;
  }
  /**
   * @return string
   */
  public function getConsumerNetworkStatus()
  {
    return $this->consumerNetworkStatus;
  }
  /**
   * Optional. This is the project ID of consumer service project of this
   * consumer endpoint. This is only applicable if `consumer_network` is a
   * shared VPC network.
   *
   * @param string $consumerProject
   */
  public function setConsumerProject($consumerProject)
  {
    $this->consumerProject = $consumerProject;
  }
  /**
   * @return string
   */
  public function getConsumerProject()
  {
    return $this->consumerProject;
  }
  /**
   * Output only. The status of automated DNS provisioning.
   *
   * Accepted values: AUTO_DNS_STATUS_UNSPECIFIED, AUTO_DNS_OK, AUTO_DNS_FAILED,
   * AUTO_DNS_UNKNOWN
   *
   * @param self::INSTANCE_AUTO_DNS_STATUS_* $instanceAutoDnsStatus
   */
  public function setInstanceAutoDnsStatus($instanceAutoDnsStatus)
  {
    $this->instanceAutoDnsStatus = $instanceAutoDnsStatus;
  }
  /**
   * @return self::INSTANCE_AUTO_DNS_STATUS_*
   */
  public function getInstanceAutoDnsStatus()
  {
    return $this->instanceAutoDnsStatus;
  }
  /**
   * The IP address of the consumer endpoint.
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
   * Output only. The service connection policy created automatically for the
   * consumer network when `psc_auto_connection_policy_enabled` is true. It is
   * in the format of:
   * `projects/{project}/regions/{region}/serviceConnectionPolicies/{policy_id}`
   * The `policy_id` is in format of `$NETWORK-$RANDOM`.
   *
   * @param string $serviceConnectionPolicy
   */
  public function setServiceConnectionPolicy($serviceConnectionPolicy)
  {
    $this->serviceConnectionPolicy = $serviceConnectionPolicy;
  }
  /**
   * @return string
   */
  public function getServiceConnectionPolicy()
  {
    return $this->serviceConnectionPolicy;
  }
  /**
   * Output only. The status of service connection policy creation.
   *
   * @param string $serviceConnectionPolicyCreationResult
   */
  public function setServiceConnectionPolicyCreationResult($serviceConnectionPolicyCreationResult)
  {
    $this->serviceConnectionPolicyCreationResult = $serviceConnectionPolicyCreationResult;
  }
  /**
   * @return string
   */
  public function getServiceConnectionPolicyCreationResult()
  {
    return $this->serviceConnectionPolicyCreationResult;
  }
  /**
   * The connection status of the consumer endpoint.
   *
   * @param string $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. The status of automated DNS provisioning for the write
   * endpoint.
   *
   * Accepted values: AUTO_DNS_STATUS_UNSPECIFIED, AUTO_DNS_OK, AUTO_DNS_FAILED,
   * AUTO_DNS_UNKNOWN
   *
   * @param self::WRITE_ENDPOINT_AUTO_DNS_STATUS_* $writeEndpointAutoDnsStatus
   */
  public function setWriteEndpointAutoDnsStatus($writeEndpointAutoDnsStatus)
  {
    $this->writeEndpointAutoDnsStatus = $writeEndpointAutoDnsStatus;
  }
  /**
   * @return self::WRITE_ENDPOINT_AUTO_DNS_STATUS_*
   */
  public function getWriteEndpointAutoDnsStatus()
  {
    return $this->writeEndpointAutoDnsStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PscAutoConnectionConfig::class, 'Google_Service_SQLAdmin_PscAutoConnectionConfig');
