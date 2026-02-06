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

class DataStoreToolBoostSpecs extends \Google\Collection
{
  protected $collection_key = 'spec';
  /**
   * Required. The Data Store where the boosting configuration is applied. Full
   * resource name of DataStore, such as projects/{project}/locations/{location}
   * /collections/{collection}/dataStores/{dataStore}.
   *
   * @var string[]
   */
  public $dataStores;
  protected $specType = DataStoreToolBoostSpec::class;
  protected $specDataType = 'array';

  /**
   * Required. The Data Store where the boosting configuration is applied. Full
   * resource name of DataStore, such as projects/{project}/locations/{location}
   * /collections/{collection}/dataStores/{dataStore}.
   *
   * @param string[] $dataStores
   */
  public function setDataStores($dataStores)
  {
    $this->dataStores = $dataStores;
  }
  /**
   * @return string[]
   */
  public function getDataStores()
  {
    return $this->dataStores;
  }
  /**
   * Required. A list of boosting specifications.
   *
   * @param DataStoreToolBoostSpec[] $spec
   */
  public function setSpec($spec)
  {
    $this->spec = $spec;
  }
  /**
   * @return DataStoreToolBoostSpec[]
   */
  public function getSpec()
  {
    return $this->spec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataStoreToolBoostSpecs::class, 'Google_Service_CustomerEngagementSuite_DataStoreToolBoostSpecs');
