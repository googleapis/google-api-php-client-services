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

namespace Google\Service\CustomerEngagementSuite;

class ConnectorToolset extends \Google\Collection
{
  protected $collection_key = 'connectorActions';
  protected $authConfigType = EndUserAuthConfig::class;
  protected $authConfigDataType = '';
  /**
   * Required. The full resource name of the referenced Integration Connectors
   * Connection. Format:
   * `projects/{project}/locations/{location}/connections/{connection}`
   *
   * @var string
   */
  public $connection;
  protected $connectorActionsType = Action::class;
  protected $connectorActionsDataType = 'array';

  /**
   * Optional. Configures how authentication is handled in Integration
   * Connectors. By default, an admin authentication is passed in the
   * Integration Connectors API requests. You can override it with a different
   * end-user authentication config. **Note**: The Connection must have
   * authentication override enabled in order to specify an EUC configuration
   * here - otherwise, the Toolset creation will fail. See:
   * https://cloud.google.com/application-integration/docs/configure-connectors-
   * task#configure-authentication-override
   *
   * @param EndUserAuthConfig $authConfig
   */
  public function setAuthConfig(EndUserAuthConfig $authConfig)
  {
    $this->authConfig = $authConfig;
  }
  /**
   * @return EndUserAuthConfig
   */
  public function getAuthConfig()
  {
    return $this->authConfig;
  }
  /**
   * Required. The full resource name of the referenced Integration Connectors
   * Connection. Format:
   * `projects/{project}/locations/{location}/connections/{connection}`
   *
   * @param string $connection
   */
  public function setConnection($connection)
  {
    $this->connection = $connection;
  }
  /**
   * @return string
   */
  public function getConnection()
  {
    return $this->connection;
  }
  /**
   * Required. The list of connector actions/entity operations to generate tools
   * for.
   *
   * @param Action[] $connectorActions
   */
  public function setConnectorActions($connectorActions)
  {
    $this->connectorActions = $connectorActions;
  }
  /**
   * @return Action[]
   */
  public function getConnectorActions()
  {
    return $this->connectorActions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConnectorToolset::class, 'Google_Service_CustomerEngagementSuite_ConnectorToolset');
