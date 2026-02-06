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

class DataStoreToolEngineSource extends \Google\Collection
{
  protected $collection_key = 'dataStoreSources';
  protected $dataStoreSourcesType = DataStoreToolDataStoreSource::class;
  protected $dataStoreSourcesDataType = 'array';
  /**
   * Required. Full resource name of the Engine. Format: `projects/{project}/loc
   * ations/{location}/collections/{collection}/engines/{engine}`
   *
   * @var string
   */
  public $engine;
  /**
   * Optional. A filter applied to the search across the Engine. Not relevant
   * and not used if 'data_store_sources' is provided. See:
   * https://cloud.google.com/generative-ai-app-builder/docs/filter-search-
   * metadata
   *
   * @var string
   */
  public $filter;

  /**
   * Optional. Use to target specific DataStores within the Engine. If empty,
   * the search applies to all DataStores associated with the Engine.
   *
   * @param DataStoreToolDataStoreSource[] $dataStoreSources
   */
  public function setDataStoreSources($dataStoreSources)
  {
    $this->dataStoreSources = $dataStoreSources;
  }
  /**
   * @return DataStoreToolDataStoreSource[]
   */
  public function getDataStoreSources()
  {
    return $this->dataStoreSources;
  }
  /**
   * Required. Full resource name of the Engine. Format: `projects/{project}/loc
   * ations/{location}/collections/{collection}/engines/{engine}`
   *
   * @param string $engine
   */
  public function setEngine($engine)
  {
    $this->engine = $engine;
  }
  /**
   * @return string
   */
  public function getEngine()
  {
    return $this->engine;
  }
  /**
   * Optional. A filter applied to the search across the Engine. Not relevant
   * and not used if 'data_store_sources' is provided. See:
   * https://cloud.google.com/generative-ai-app-builder/docs/filter-search-
   * metadata
   *
   * @param string $filter
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return string
   */
  public function getFilter()
  {
    return $this->filter;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataStoreToolEngineSource::class, 'Google_Service_CustomerEngagementSuite_DataStoreToolEngineSource');
