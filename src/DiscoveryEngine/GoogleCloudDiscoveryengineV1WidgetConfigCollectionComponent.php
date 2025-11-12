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
  /**
   * @var string
   */
  public $connectorIconLink;
  /**
   * @var string
   */
  public $dataSource;
  /**
   * @var string
   */
  public $dataSourceDisplayName;
  protected $dataStoreComponentsType = GoogleCloudDiscoveryengineV1WidgetConfigDataStoreComponent::class;
  protected $dataStoreComponentsDataType = 'array';
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $name;

  /**
   * @param string
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
   * @param string
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
   * @param string
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
   * @param GoogleCloudDiscoveryengineV1WidgetConfigDataStoreComponent[]
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
   * @param string
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
   * @param string
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
   * @param string
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
