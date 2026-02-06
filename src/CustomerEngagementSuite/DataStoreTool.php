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

class DataStoreTool extends \Google\Collection
{
  /**
   * Default filter behavior. Include filter parameter for connector datastores.
   * For the rest of the datastore types, the filter input parameter is omitted.
   */
  public const FILTER_PARAMETER_BEHAVIOR_FILTER_PARAMETER_BEHAVIOR_UNSPECIFIED = 'FILTER_PARAMETER_BEHAVIOR_UNSPECIFIED';
  /**
   * Always include filter parameter for all datastore types.
   */
  public const FILTER_PARAMETER_BEHAVIOR_ALWAYS_INCLUDE = 'ALWAYS_INCLUDE';
  /**
   * The filter parameter is never included in the list of tool parameters,
   * regardless of the datastore type.
   */
  public const FILTER_PARAMETER_BEHAVIOR_NEVER_INCLUDE = 'NEVER_INCLUDE';
  protected $collection_key = 'modalityConfigs';
  protected $boostSpecsType = DataStoreToolBoostSpecs::class;
  protected $boostSpecsDataType = 'array';
  protected $dataStoreSourceType = DataStoreToolDataStoreSource::class;
  protected $dataStoreSourceDataType = '';
  /**
   * Optional. The tool description.
   *
   * @var string
   */
  public $description;
  protected $engineSourceType = DataStoreToolEngineSource::class;
  protected $engineSourceDataType = '';
  /**
   * Optional. The filter parameter behavior.
   *
   * @var string
   */
  public $filterParameterBehavior;
  protected $modalityConfigsType = DataStoreToolModalityConfig::class;
  protected $modalityConfigsDataType = 'array';
  /**
   * Required. The data store tool name.
   *
   * @var string
   */
  public $name;

  /**
   * Optional. Boost specification to boost certain documents.
   *
   * @param DataStoreToolBoostSpecs[] $boostSpecs
   */
  public function setBoostSpecs($boostSpecs)
  {
    $this->boostSpecs = $boostSpecs;
  }
  /**
   * @return DataStoreToolBoostSpecs[]
   */
  public function getBoostSpecs()
  {
    return $this->boostSpecs;
  }
  /**
   * Optional. Search within a single specific DataStore.
   *
   * @param DataStoreToolDataStoreSource $dataStoreSource
   */
  public function setDataStoreSource(DataStoreToolDataStoreSource $dataStoreSource)
  {
    $this->dataStoreSource = $dataStoreSource;
  }
  /**
   * @return DataStoreToolDataStoreSource
   */
  public function getDataStoreSource()
  {
    return $this->dataStoreSource;
  }
  /**
   * Optional. The tool description.
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
   * Optional. Search within an Engine (potentially across multiple DataStores).
   *
   * @param DataStoreToolEngineSource $engineSource
   */
  public function setEngineSource(DataStoreToolEngineSource $engineSource)
  {
    $this->engineSource = $engineSource;
  }
  /**
   * @return DataStoreToolEngineSource
   */
  public function getEngineSource()
  {
    return $this->engineSource;
  }
  /**
   * Optional. The filter parameter behavior.
   *
   * Accepted values: FILTER_PARAMETER_BEHAVIOR_UNSPECIFIED, ALWAYS_INCLUDE,
   * NEVER_INCLUDE
   *
   * @param self::FILTER_PARAMETER_BEHAVIOR_* $filterParameterBehavior
   */
  public function setFilterParameterBehavior($filterParameterBehavior)
  {
    $this->filterParameterBehavior = $filterParameterBehavior;
  }
  /**
   * @return self::FILTER_PARAMETER_BEHAVIOR_*
   */
  public function getFilterParameterBehavior()
  {
    return $this->filterParameterBehavior;
  }
  /**
   * Optional. The modality configs for the data store.
   *
   * @param DataStoreToolModalityConfig[] $modalityConfigs
   */
  public function setModalityConfigs($modalityConfigs)
  {
    $this->modalityConfigs = $modalityConfigs;
  }
  /**
   * @return DataStoreToolModalityConfig[]
   */
  public function getModalityConfigs()
  {
    return $this->modalityConfigs;
  }
  /**
   * Required. The data store tool name.
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
class_alias(DataStoreTool::class, 'Google_Service_CustomerEngagementSuite_DataStoreTool');
