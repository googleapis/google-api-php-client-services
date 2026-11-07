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

namespace Google\Service\OracleDatabase;

class IdentityConnector extends \Google\Model
{
  /**
   * Default unspecified value.
   */
  public const CONNECTION_STATE_CONNECTION_STATE_UNSPECIFIED = 'CONNECTION_STATE_UNSPECIFIED';
  /**
   * The identity pool connection is connected.
   */
  public const CONNECTION_STATE_CONNECTED = 'CONNECTED';
  /**
   * The identity pool connection is partially connected.
   */
  public const CONNECTION_STATE_PARTIALLY_CONNECTED = 'PARTIALLY_CONNECTED';
  /**
   * The identity pool connection is disconnected.
   */
  public const CONNECTION_STATE_DISCONNECTED = 'DISCONNECTED';
  /**
   * The identity pool connection is in an unknown state.
   */
  public const CONNECTION_STATE_UNKNOWN = 'UNKNOWN';
  /**
   * Output only. The connection state of the identity connector.
   *
   * @var string
   */
  public $connectionState;
  /**
   * Output only. The unique partner identifier for the Identity Connector, used
   * to establish secure cross-cloud access between Google Cloud and OCI. This
   * corresponds directly to the ID of the OracleDbGcpIdentityConnector resource
   * in Oracle Cloud Infrastructure (OCI).
   *
   * @var string
   */
  public $identityConnectorId;
  /**
   * Output only. Additional information about the current lifecycle state.
   *
   * @var string
   */
  public $lifecycleStateDetails;
  /**
   * Output only. A google managed service account on which customers can grant
   * roles to access resources in the customer project. Example:
   * `p176944527254-55-75119d87fd8f@gcp-sa-oci.iam.gserviceaccount.com`
   *
   * @var string
   */
  public $serviceAgentEmail;
  /**
   * Output only. The resource name of the Workload Identity Pool configured for
   * identity federation with OCI. This exact pool name can be used to configure
   * VPC Service Controls (VPC-SC) egress rules. Format: `projects/{project}/loc
   * ations/global/workloadIdentityPools/{workload_identity_pool}`
   *
   * @var string
   */
  public $workloadIdentityPool;

  /**
   * Output only. The connection state of the identity connector.
   *
   * Accepted values: CONNECTION_STATE_UNSPECIFIED, CONNECTED,
   * PARTIALLY_CONNECTED, DISCONNECTED, UNKNOWN
   *
   * @param self::CONNECTION_STATE_* $connectionState
   */
  public function setConnectionState($connectionState)
  {
    $this->connectionState = $connectionState;
  }
  /**
   * @return self::CONNECTION_STATE_*
   */
  public function getConnectionState()
  {
    return $this->connectionState;
  }
  /**
   * Output only. The unique partner identifier for the Identity Connector, used
   * to establish secure cross-cloud access between Google Cloud and OCI. This
   * corresponds directly to the ID of the OracleDbGcpIdentityConnector resource
   * in Oracle Cloud Infrastructure (OCI).
   *
   * @param string $identityConnectorId
   */
  public function setIdentityConnectorId($identityConnectorId)
  {
    $this->identityConnectorId = $identityConnectorId;
  }
  /**
   * @return string
   */
  public function getIdentityConnectorId()
  {
    return $this->identityConnectorId;
  }
  /**
   * Output only. Additional information about the current lifecycle state.
   *
   * @param string $lifecycleStateDetails
   */
  public function setLifecycleStateDetails($lifecycleStateDetails)
  {
    $this->lifecycleStateDetails = $lifecycleStateDetails;
  }
  /**
   * @return string
   */
  public function getLifecycleStateDetails()
  {
    return $this->lifecycleStateDetails;
  }
  /**
   * Output only. A google managed service account on which customers can grant
   * roles to access resources in the customer project. Example:
   * `p176944527254-55-75119d87fd8f@gcp-sa-oci.iam.gserviceaccount.com`
   *
   * @param string $serviceAgentEmail
   */
  public function setServiceAgentEmail($serviceAgentEmail)
  {
    $this->serviceAgentEmail = $serviceAgentEmail;
  }
  /**
   * @return string
   */
  public function getServiceAgentEmail()
  {
    return $this->serviceAgentEmail;
  }
  /**
   * Output only. The resource name of the Workload Identity Pool configured for
   * identity federation with OCI. This exact pool name can be used to configure
   * VPC Service Controls (VPC-SC) egress rules. Format: `projects/{project}/loc
   * ations/global/workloadIdentityPools/{workload_identity_pool}`
   *
   * @param string $workloadIdentityPool
   */
  public function setWorkloadIdentityPool($workloadIdentityPool)
  {
    $this->workloadIdentityPool = $workloadIdentityPool;
  }
  /**
   * @return string
   */
  public function getWorkloadIdentityPool()
  {
    return $this->workloadIdentityPool;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IdentityConnector::class, 'Google_Service_OracleDatabase_IdentityConnector');
