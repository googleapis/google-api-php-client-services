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

class GoogleCloudDiscoveryengineV1WidgetConfigBatchAuthStatus extends \Google\Model
{
  /**
   * Output only. The batch authorization group the placeholder belongs to.
   *
   * @var string
   */
  public $batchAuthorizationGroup;
  protected $connectorAuthStateType = GoogleCloudDiscoveryengineV1WidgetConfigConnectorAuthState::class;
  protected $connectorAuthStateDataType = '';
  /**
   * Output only. It is the batch authorization group placeholder full resource
   * name. This is not a real data connector (not existed in DataConnector table
   * in spanner). It's a resource name existing only in the
   * connector_authorization in the user table. E.g. projects/{project}/location
   * s/{location}/collections/oauth_placeholder_google_workspace/dataStores/data
   * Connector.
   *
   * @var string
   */
  public $placeholder;

  /**
   * Output only. The batch authorization group the placeholder belongs to.
   *
   * @param string $batchAuthorizationGroup
   */
  public function setBatchAuthorizationGroup($batchAuthorizationGroup)
  {
    $this->batchAuthorizationGroup = $batchAuthorizationGroup;
  }
  /**
   * @return string
   */
  public function getBatchAuthorizationGroup()
  {
    return $this->batchAuthorizationGroup;
  }
  /**
   * Output only. The current authorization state for this connector.
   *
   * @param GoogleCloudDiscoveryengineV1WidgetConfigConnectorAuthState $connectorAuthState
   */
  public function setConnectorAuthState(GoogleCloudDiscoveryengineV1WidgetConfigConnectorAuthState $connectorAuthState)
  {
    $this->connectorAuthState = $connectorAuthState;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigConnectorAuthState
   */
  public function getConnectorAuthState()
  {
    return $this->connectorAuthState;
  }
  /**
   * Output only. It is the batch authorization group placeholder full resource
   * name. This is not a real data connector (not existed in DataConnector table
   * in spanner). It's a resource name existing only in the
   * connector_authorization in the user table. E.g. projects/{project}/location
   * s/{location}/collections/oauth_placeholder_google_workspace/dataStores/data
   * Connector.
   *
   * @param string $placeholder
   */
  public function setPlaceholder($placeholder)
  {
    $this->placeholder = $placeholder;
  }
  /**
   * @return string
   */
  public function getPlaceholder()
  {
    return $this->placeholder;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigBatchAuthStatus::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigBatchAuthStatus');
