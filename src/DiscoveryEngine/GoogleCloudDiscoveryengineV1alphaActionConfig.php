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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaActionConfig extends \Google\Collection
{
  protected $collection_key = 'customerManagedScopes';
  /**
   * Optional. Action parameters in structured json format.
   *
   * @var array[]
   */
  public $actionParams;
  /**
   * Optional. Whether to create a BAP connection for the connector.
   *
   * @var bool
   */
  public $createBapConnection;
  /**
   * Optional. Customer-supplied OAuth scopes for connectors that opt into
   * customer- managed scopes via
   * ConnectorSource.enable_customer_managed_scopes. When non-empty on an opted-
   * in connector, this list **replaces** the connector's built-in per-tool
   * scopes: the OAuth authorization URL requests exactly these scopes for every
   * operation, and the built-in scopes are never merged in. Ignored for
   * connectors that do not opt in.
   *
   * @var string[]
   */
  public $customerManagedScopes;
  /**
   * Output only. The connector contains the necessary parameters and is
   * configured to support actions.
   *
   * @var bool
   */
  public $isActionConfigured;
  /**
   * Optional. Action parameters in json string format.
   *
   * @var string
   */
  public $jsonActionParams;
  /**
   * Optional. The Service Directory resource name
   * (projects/locations/namespaces/services) representing a VPC network
   * endpoint used to connect to the data source's `instance_uri`, defined in
   * DataConnector.params. Required when VPC Service Controls are enabled.
   *
   * @var string
   */
  public $serviceName;
  /**
   * Optional. Whether to use static secrets for the connector. If true, the
   * secrets provided in the action_params will be ignored.
   *
   * @var bool
   */
  public $useStaticSecrets;
  protected $userDefinedScopesMappingType = GoogleCloudDiscoveryengineV1alphaActionConfigScopeList::class;
  protected $userDefinedScopesMappingDataType = 'map';

  /**
   * Optional. Action parameters in structured json format.
   *
   * @param array[] $actionParams
   */
  public function setActionParams($actionParams)
  {
    $this->actionParams = $actionParams;
  }
  /**
   * @return array[]
   */
  public function getActionParams()
  {
    return $this->actionParams;
  }
  /**
   * Optional. Whether to create a BAP connection for the connector.
   *
   * @param bool $createBapConnection
   */
  public function setCreateBapConnection($createBapConnection)
  {
    $this->createBapConnection = $createBapConnection;
  }
  /**
   * @return bool
   */
  public function getCreateBapConnection()
  {
    return $this->createBapConnection;
  }
  /**
   * Optional. Customer-supplied OAuth scopes for connectors that opt into
   * customer- managed scopes via
   * ConnectorSource.enable_customer_managed_scopes. When non-empty on an opted-
   * in connector, this list **replaces** the connector's built-in per-tool
   * scopes: the OAuth authorization URL requests exactly these scopes for every
   * operation, and the built-in scopes are never merged in. Ignored for
   * connectors that do not opt in.
   *
   * @param string[] $customerManagedScopes
   */
  public function setCustomerManagedScopes($customerManagedScopes)
  {
    $this->customerManagedScopes = $customerManagedScopes;
  }
  /**
   * @return string[]
   */
  public function getCustomerManagedScopes()
  {
    return $this->customerManagedScopes;
  }
  /**
   * Output only. The connector contains the necessary parameters and is
   * configured to support actions.
   *
   * @param bool $isActionConfigured
   */
  public function setIsActionConfigured($isActionConfigured)
  {
    $this->isActionConfigured = $isActionConfigured;
  }
  /**
   * @return bool
   */
  public function getIsActionConfigured()
  {
    return $this->isActionConfigured;
  }
  /**
   * Optional. Action parameters in json string format.
   *
   * @param string $jsonActionParams
   */
  public function setJsonActionParams($jsonActionParams)
  {
    $this->jsonActionParams = $jsonActionParams;
  }
  /**
   * @return string
   */
  public function getJsonActionParams()
  {
    return $this->jsonActionParams;
  }
  /**
   * Optional. The Service Directory resource name
   * (projects/locations/namespaces/services) representing a VPC network
   * endpoint used to connect to the data source's `instance_uri`, defined in
   * DataConnector.params. Required when VPC Service Controls are enabled.
   *
   * @param string $serviceName
   */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /**
   * @return string
   */
  public function getServiceName()
  {
    return $this->serviceName;
  }
  /**
   * Optional. Whether to use static secrets for the connector. If true, the
   * secrets provided in the action_params will be ignored.
   *
   * @param bool $useStaticSecrets
   */
  public function setUseStaticSecrets($useStaticSecrets)
  {
    $this->useStaticSecrets = $useStaticSecrets;
  }
  /**
   * @return bool
   */
  public function getUseStaticSecrets()
  {
    return $this->useStaticSecrets;
  }
  /**
   * Optional. Mapping from operation name to the list of scopes. Only be
   * populated if there are user specified scopes.
   *
   * @param GoogleCloudDiscoveryengineV1alphaActionConfigScopeList[] $userDefinedScopesMapping
   */
  public function setUserDefinedScopesMapping($userDefinedScopesMapping)
  {
    $this->userDefinedScopesMapping = $userDefinedScopesMapping;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaActionConfigScopeList[]
   */
  public function getUserDefinedScopesMapping()
  {
    return $this->userDefinedScopesMapping;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaActionConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaActionConfig');
