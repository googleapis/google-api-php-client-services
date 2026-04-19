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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1ListConnectorConfigsResponse extends \Google\Collection
{
  protected $collection_key = 'connectorConfigs';
  protected $connectorConfigsType = GoogleChromeManagementVersionsV1ConnectorConfig::class;
  protected $connectorConfigsDataType = 'array';
  /**
   * The page token used to retrieve the next page of the listing request. If
   * the token is empty, there are no more pages to retrieve.
   *
   * @var string
   */
  public $nextPageToken;
  /**
   * The total size of the connector configs list.
   *
   * @var int
   */
  public $totalSize;

  /**
   * The list of connector configs returned.
   *
   * @param GoogleChromeManagementVersionsV1ConnectorConfig[] $connectorConfigs
   */
  public function setConnectorConfigs($connectorConfigs)
  {
    $this->connectorConfigs = $connectorConfigs;
  }
  /**
   * @return GoogleChromeManagementVersionsV1ConnectorConfig[]
   */
  public function getConnectorConfigs()
  {
    return $this->connectorConfigs;
  }
  /**
   * The page token used to retrieve the next page of the listing request. If
   * the token is empty, there are no more pages to retrieve.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * The total size of the connector configs list.
   *
   * @param int $totalSize
   */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /**
   * @return int
   */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ListConnectorConfigsResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ListConnectorConfigsResponse');
