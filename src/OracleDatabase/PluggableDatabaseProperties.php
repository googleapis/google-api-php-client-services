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

namespace Google\Service\OracleDatabase;

class PluggableDatabaseProperties extends \Google\Collection
{
  protected $collection_key = 'pdbNodeLevelDetails';
  /**
   * @var string
   */
  public $compartmentId;
  protected $connectionStringsType = PluggableDatabaseConnectionStrings::class;
  protected $connectionStringsDataType = '';
  /**
   * @var string
   */
  public $containerDatabaseOcid;
  protected $databaseManagementConfigType = DatabaseManagementConfig::class;
  protected $databaseManagementConfigDataType = '';
  protected $definedTagsType = DefinedTagValue::class;
  protected $definedTagsDataType = 'map';
  /**
   * @var string[]
   */
  public $freeformTags;
  /**
   * @var bool
   */
  public $isRestricted;
  /**
   * @var string
   */
  public $lifecycleDetails;
  /**
   * @var string
   */
  public $lifecycleState;
  /**
   * @var string
   */
  public $ocid;
  /**
   * @var string
   */
  public $operationsInsightsState;
  /**
   * @var string
   */
  public $pdbName;
  protected $pdbNodeLevelDetailsType = PluggableDatabaseNodeLevelDetails::class;
  protected $pdbNodeLevelDetailsDataType = 'array';

  /**
   * @param string
   */
  public function setCompartmentId($compartmentId)
  {
    $this->compartmentId = $compartmentId;
  }
  /**
   * @return string
   */
  public function getCompartmentId()
  {
    return $this->compartmentId;
  }
  /**
   * @param PluggableDatabaseConnectionStrings
   */
  public function setConnectionStrings(PluggableDatabaseConnectionStrings $connectionStrings)
  {
    $this->connectionStrings = $connectionStrings;
  }
  /**
   * @return PluggableDatabaseConnectionStrings
   */
  public function getConnectionStrings()
  {
    return $this->connectionStrings;
  }
  /**
   * @param string
   */
  public function setContainerDatabaseOcid($containerDatabaseOcid)
  {
    $this->containerDatabaseOcid = $containerDatabaseOcid;
  }
  /**
   * @return string
   */
  public function getContainerDatabaseOcid()
  {
    return $this->containerDatabaseOcid;
  }
  /**
   * @param DatabaseManagementConfig
   */
  public function setDatabaseManagementConfig(DatabaseManagementConfig $databaseManagementConfig)
  {
    $this->databaseManagementConfig = $databaseManagementConfig;
  }
  /**
   * @return DatabaseManagementConfig
   */
  public function getDatabaseManagementConfig()
  {
    return $this->databaseManagementConfig;
  }
  /**
   * @param DefinedTagValue[]
   */
  public function setDefinedTags($definedTags)
  {
    $this->definedTags = $definedTags;
  }
  /**
   * @return DefinedTagValue[]
   */
  public function getDefinedTags()
  {
    return $this->definedTags;
  }
  /**
   * @param string[]
   */
  public function setFreeformTags($freeformTags)
  {
    $this->freeformTags = $freeformTags;
  }
  /**
   * @return string[]
   */
  public function getFreeformTags()
  {
    return $this->freeformTags;
  }
  /**
   * @param bool
   */
  public function setIsRestricted($isRestricted)
  {
    $this->isRestricted = $isRestricted;
  }
  /**
   * @return bool
   */
  public function getIsRestricted()
  {
    return $this->isRestricted;
  }
  /**
   * @param string
   */
  public function setLifecycleDetails($lifecycleDetails)
  {
    $this->lifecycleDetails = $lifecycleDetails;
  }
  /**
   * @return string
   */
  public function getLifecycleDetails()
  {
    return $this->lifecycleDetails;
  }
  /**
   * @param string
   */
  public function setLifecycleState($lifecycleState)
  {
    $this->lifecycleState = $lifecycleState;
  }
  /**
   * @return string
   */
  public function getLifecycleState()
  {
    return $this->lifecycleState;
  }
  /**
   * @param string
   */
  public function setOcid($ocid)
  {
    $this->ocid = $ocid;
  }
  /**
   * @return string
   */
  public function getOcid()
  {
    return $this->ocid;
  }
  /**
   * @param string
   */
  public function setOperationsInsightsState($operationsInsightsState)
  {
    $this->operationsInsightsState = $operationsInsightsState;
  }
  /**
   * @return string
   */
  public function getOperationsInsightsState()
  {
    return $this->operationsInsightsState;
  }
  /**
   * @param string
   */
  public function setPdbName($pdbName)
  {
    $this->pdbName = $pdbName;
  }
  /**
   * @return string
   */
  public function getPdbName()
  {
    return $this->pdbName;
  }
  /**
   * @param PluggableDatabaseNodeLevelDetails[]
   */
  public function setPdbNodeLevelDetails($pdbNodeLevelDetails)
  {
    $this->pdbNodeLevelDetails = $pdbNodeLevelDetails;
  }
  /**
   * @return PluggableDatabaseNodeLevelDetails[]
   */
  public function getPdbNodeLevelDetails()
  {
    return $this->pdbNodeLevelDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PluggableDatabaseProperties::class, 'Google_Service_OracleDatabase_PluggableDatabaseProperties');
