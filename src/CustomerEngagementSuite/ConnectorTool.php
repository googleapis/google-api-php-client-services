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

class ConnectorTool extends \Google\Model
{
  protected $actionType = Action::class;
  protected $actionDataType = '';
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
  /**
   * Optional. The description of the tool that can be used by the Agent to
   * decide whether to call this ConnectorTool.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The name of the tool that can be used by the Agent to decide
   * whether to call this ConnectorTool.
   *
   * @var string
   */
  public $name;

  /**
   * Required. Action for the tool to use.
   *
   * @param Action $action
   */
  public function setAction(Action $action)
  {
    $this->action = $action;
  }
  /**
   * @return Action
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Optional. Configures how authentication is handled in Integration
   * Connectors. By default, an admin authentication is passed in the
   * Integration Connectors API requests. You can override it with a different
   * end-user authentication config. **Note**: The Connection must have
   * authentication override enabled in order to specify an EUC configuration
   * here - otherwise, the ConnectorTool creation will fail. See
   * https://cloud.google.com/application-integration/docs/configure-connectors-
   * task#configure-authentication-override for details.
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
   * Optional. The description of the tool that can be used by the Agent to
   * decide whether to call this ConnectorTool.
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
   * Optional. The name of the tool that can be used by the Agent to decide
   * whether to call this ConnectorTool.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConnectorTool::class, 'Google_Service_CustomerEngagementSuite_ConnectorTool');
