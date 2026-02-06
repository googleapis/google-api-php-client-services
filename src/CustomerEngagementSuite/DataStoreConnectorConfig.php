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

class DataStoreConnectorConfig extends \Google\Model
{
  /**
   * Resource name of the collection the data store belongs to.
   *
   * @var string
   */
  public $collection;
  /**
   * Display name of the collection the data store belongs to.
   *
   * @var string
   */
  public $collectionDisplayName;
  /**
   * The name of the data source. Example: `salesforce`, `jira`, `confluence`,
   * `bigquery`.
   *
   * @var string
   */
  public $dataSource;

  /**
   * Resource name of the collection the data store belongs to.
   *
   * @param string $collection
   */
  public function setCollection($collection)
  {
    $this->collection = $collection;
  }
  /**
   * @return string
   */
  public function getCollection()
  {
    return $this->collection;
  }
  /**
   * Display name of the collection the data store belongs to.
   *
   * @param string $collectionDisplayName
   */
  public function setCollectionDisplayName($collectionDisplayName)
  {
    $this->collectionDisplayName = $collectionDisplayName;
  }
  /**
   * @return string
   */
  public function getCollectionDisplayName()
  {
    return $this->collectionDisplayName;
  }
  /**
   * The name of the data source. Example: `salesforce`, `jira`, `confluence`,
   * `bigquery`.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataStoreConnectorConfig::class, 'Google_Service_CustomerEngagementSuite_DataStoreConnectorConfig');
