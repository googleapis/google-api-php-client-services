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

class GoogleCloudDiscoveryengineV1WidgetConfigCollectionComponent extends \Google\Collection
{
  protected $collection_key = 'dataStoreComponents';
  protected $connectorAuthStateType = GoogleCloudDiscoveryengineV1WidgetConfigConnectorAuthState::class;
  protected $connectorAuthStateDataType = '';
  /**
   * Output only. The icon link of the connector source.
   *
   * @var string
   */
  public $connectorIconLink;
  /**
   * The name of the data source, retrieved from
   * `Collection.data_connector.data_source`.
   *
   * @var string
   */
  public $dataSource;
  /**
   * Output only. The display name of the data source.
   *
   * @var string
   */
  public $dataSourceDisplayName;
  /**
   * Output only. The end-user-facing display name of the data source, sourced
   * from `ConnectorSource.end_user_display_name`. When unset, clients fall back
   * to `data_source_display_name`.
   *
   * @var string
   */
  public $dataSourceEndUserDisplayName;
  /**
   * Output only. The version of the connector definition backing this
   * collection, mirroring `DataConnector.data_source_version`.
   *
   * @var 
   */
  public $dataSourceVersion;
  protected $dataStoreComponentsType = GoogleCloudDiscoveryengineV1WidgetConfigDataStoreComponent::class;
  protected $dataStoreComponentsDataType = 'array';
  /**
   * The display name of the collection.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. the identifier of the collection, used for widget service. For
   * now it refers to collection_id, in the future we will migrate the field to
   * encrypted collection name UUID. For synthetic placeholder entries (see
   * message-level comment) this is a synthetic placeholder id, not a real
   * collection_id.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. Whether this is a first-party (Google-owned) connector, as
   * opposed to a third-party connector. Used by the frontend to group 1P vs 3P
   * connectors.
   *
   * @var bool
   */
  public $isFirstParty;
  protected $metadataType = GoogleCloudDiscoveryengineV1DataConnectorConnectorMetadata::class;
  protected $metadataDataType = '';
  /**
   * The name of the collection. It should be collection resource name. Format:
   * `projects/{project}/locations/{location}/collections/{collection_id}`. For
   * APIs under WidgetService, such as WidgetService.LookupWidgetConfig, the
   * project number and location part is erased in this field. For synthetic
   * placeholder entries (see message-level comment) this carries a synthetic
   * placeholder collection id that does not correspond to a real collection.
   * Callers must not attempt to resolve / GET this resource until the user
   * authorizes the connector.
   *
   * @var string
   */
  public $name;

  /**
   * Output only. The auth uri of the connector source.
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
   * Output only. The icon link of the connector source.
   *
   * @param string $connectorIconLink
   */
  public function setConnectorIconLink($connectorIconLink)
  {
    $this->connectorIconLink = $connectorIconLink;
  }
  /**
   * @return string
   */
  public function getConnectorIconLink()
  {
    return $this->connectorIconLink;
  }
  /**
   * The name of the data source, retrieved from
   * `Collection.data_connector.data_source`.
   *
   * @param string $dataSource
   */
  public function setDataSource($dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /**
   * @return string
   */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /**
   * Output only. The display name of the data source.
   *
   * @param string $dataSourceDisplayName
   */
  public function setDataSourceDisplayName($dataSourceDisplayName)
  {
    $this->dataSourceDisplayName = $dataSourceDisplayName;
  }
  /**
   * @return string
   */
  public function getDataSourceDisplayName()
  {
    return $this->dataSourceDisplayName;
  }
  /**
   * Output only. The end-user-facing display name of the data source, sourced
   * from `ConnectorSource.end_user_display_name`. When unset, clients fall back
   * to `data_source_display_name`.
   *
   * @param string $dataSourceEndUserDisplayName
   */
  public function setDataSourceEndUserDisplayName($dataSourceEndUserDisplayName)
  {
    $this->dataSourceEndUserDisplayName = $dataSourceEndUserDisplayName;
  }
  /**
   * @return string
   */
  public function getDataSourceEndUserDisplayName()
  {
    return $this->dataSourceEndUserDisplayName;
  }
  public function setDataSourceVersion($dataSourceVersion)
  {
    $this->dataSourceVersion = $dataSourceVersion;
  }
  public function getDataSourceVersion()
  {
    return $this->dataSourceVersion;
  }
  /**
   * For the data store collection, list of the children data stores.
   *
   * @param GoogleCloudDiscoveryengineV1WidgetConfigDataStoreComponent[] $dataStoreComponents
   */
  public function setDataStoreComponents($dataStoreComponents)
  {
    $this->dataStoreComponents = $dataStoreComponents;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigDataStoreComponent[]
   */
  public function getDataStoreComponents()
  {
    return $this->dataStoreComponents;
  }
  /**
   * The display name of the collection.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. the identifier of the collection, used for widget service. For
   * now it refers to collection_id, in the future we will migrate the field to
   * encrypted collection name UUID. For synthetic placeholder entries (see
   * message-level comment) this is a synthetic placeholder id, not a real
   * collection_id.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. Whether this is a first-party (Google-owned) connector, as
   * opposed to a third-party connector. Used by the frontend to group 1P vs 3P
   * connectors.
   *
   * @param bool $isFirstParty
   */
  public function setIsFirstParty($isFirstParty)
  {
    $this->isFirstParty = $isFirstParty;
  }
  /**
   * @return bool
   */
  public function getIsFirstParty()
  {
    return $this->isFirstParty;
  }
  /**
   * Output only. User-facing connector metadata (`title`, `description`,
   * `short_description`, `author`, `note`), retrieved from the registry
   * `ConnectorSource.metadata` (joined by data source). Shown on the connector
   * detail page.
   *
   * @param GoogleCloudDiscoveryengineV1DataConnectorConnectorMetadata $metadata
   */
  public function setMetadata(GoogleCloudDiscoveryengineV1DataConnectorConnectorMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1DataConnectorConnectorMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * The name of the collection. It should be collection resource name. Format:
   * `projects/{project}/locations/{location}/collections/{collection_id}`. For
   * APIs under WidgetService, such as WidgetService.LookupWidgetConfig, the
   * project number and location part is erased in this field. For synthetic
   * placeholder entries (see message-level comment) this carries a synthetic
   * placeholder collection id that does not correspond to a real collection.
   * Callers must not attempt to resolve / GET this resource until the user
   * authorizes the connector.
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
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigCollectionComponent::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigCollectionComponent');
