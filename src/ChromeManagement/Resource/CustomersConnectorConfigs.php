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

namespace Google\Service\ChromeManagement\Resource;

use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1ConnectorConfig;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1ListConnectorConfigsResponse;
use Google\Service\ChromeManagement\GoogleProtobufEmpty;

/**
 * The "connectorConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chromemanagementService = new Google\Service\ChromeManagement(...);
 *   $connectorConfigs = $chromemanagementService->customers_connectorConfigs;
 *  </code>
 */
class CustomersConnectorConfigs extends \Google\Service\Resource
{
  /**
   * Creates a connector config. (connectorConfigs.create)
   *
   * @param string $parent Required. Format: customers/{customer}
   * @param GoogleChromeManagementVersionsV1ConnectorConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string connectorConfigId Optional. ID to use for the connector
   * config, which becomes the final component of the connector config's resource
   * name. If provided, the ID must be 1-63 characters long, and contain only
   * lowercase letters, digits, and hyphens. It must start with a letter, and end
   * with a letter or number. If not provided, the connector config will be
   * assigned a random UUID.
   * @return GoogleChromeManagementVersionsV1ConnectorConfig
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleChromeManagementVersionsV1ConnectorConfig $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleChromeManagementVersionsV1ConnectorConfig::class);
  }
  /**
   * Deletes a connector config. (connectorConfigs.delete)
   *
   * @param string $name Required. Format:
   * customers/{customer}/connectorConfigs/{connector_config}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The etag of the connector config. If an etag
   * is provided and does not match the current etag of the connector config,
   * deletion will be blocked and an ABORTED error will be returned.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Gets a connector config with customer ID and config ID.
   * (connectorConfigs.get)
   *
   * @param string $name Required. Format:
   * customers/{customer}/connectorConfigs/{connector_config}
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1ConnectorConfig
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleChromeManagementVersionsV1ConnectorConfig::class);
  }
  /**
   * Lists connector configs of a customer.
   * (connectorConfigs.listCustomersConnectorConfigs)
   *
   * @param string $parent Required. Format: customers/{customer}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of connector configs to
   * return. The default page size is 50 if page_size is unspecified, and the
   * maximum page size allowed is 100. Values above 100 will be capped at 100.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListConnectorConfigs` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListConnectorConfigs` must
   * match the call that provided the page token.
   * @return GoogleChromeManagementVersionsV1ListConnectorConfigsResponse
   * @throws \Google\Service\Exception
   */
  public function listCustomersConnectorConfigs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleChromeManagementVersionsV1ListConnectorConfigsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersConnectorConfigs::class, 'Google_Service_ChromeManagement_Resource_CustomersConnectorConfigs');
