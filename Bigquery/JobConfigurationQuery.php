<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Bigquery_JobConfigurationQuery extends Google_Collection
{
  protected $collection_key = 'userDefinedFunctionResources';
  public $allowLargeResults;
  public $createDisposition;
  public $defaultDataset;
  public $destinationTable;
  public $flattenResults;
  public $maximumBillingTier;
  public $maximumBytesBilled;
  public $preserveNulls;
  public $priority;
  public $query;
  public $tableDefinitions;
  public $useLegacySql;
  public $useQueryCache;
  public $userDefinedFunctionResources;
  public $writeDisposition;

  public function setAllowLargeResults($allowLargeResults)
  {
    $this->allowLargeResults = $allowLargeResults;
  }
  public function getAllowLargeResults()
  {
    return $this->allowLargeResults;
  }
  public function setCreateDisposition($createDisposition)
  {
    $this->createDisposition = $createDisposition;
  }
  public function getCreateDisposition()
  {
    return $this->createDisposition;
  }
  public function setDefaultDataset(Google_Service_Bigquery_DatasetReference $defaultDataset)
  {
    $this->defaultDataset = $defaultDataset;
  }
  public function getDefaultDataset()
  {
    return $this->defaultDataset;
  }
  public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
  {
    $this->destinationTable = $destinationTable;
  }
  public function getDestinationTable()
  {
    return $this->destinationTable;
  }
  public function setFlattenResults($flattenResults)
  {
    $this->flattenResults = $flattenResults;
  }
  public function getFlattenResults()
  {
    return $this->flattenResults;
  }
  public function setMaximumBillingTier($maximumBillingTier)
  {
    $this->maximumBillingTier = $maximumBillingTier;
  }
  public function getMaximumBillingTier()
  {
    return $this->maximumBillingTier;
  }
  public function setMaximumBytesBilled($maximumBytesBilled)
  {
    $this->maximumBytesBilled = $maximumBytesBilled;
  }
  public function getMaximumBytesBilled()
  {
    return $this->maximumBytesBilled;
  }
  public function setPreserveNulls($preserveNulls)
  {
    $this->preserveNulls = $preserveNulls;
  }
  public function getPreserveNulls()
  {
    return $this->preserveNulls;
  }
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  public function getPriority()
  {
    return $this->priority;
  }
  public function setQuery($query)
  {
    $this->query = $query;
  }
  public function getQuery()
  {
    return $this->query;
  }
  public function setTableDefinitions(array $tableDefinitions)
  {
    $this->tableDefinitions = $tableDefinitions;
  }
  public function getTableDefinitions()
  {
    return $this->tableDefinitions;
  }
  public function setUseLegacySql($useLegacySql)
  {
    $this->useLegacySql = $useLegacySql;
  }
  public function getUseLegacySql()
  {
    return $this->useLegacySql;
  }
  public function setUseQueryCache($useQueryCache)
  {
    $this->useQueryCache = $useQueryCache;
  }
  public function getUseQueryCache()
  {
    return $this->useQueryCache;
  }
  public function setUserDefinedFunctionResources(array $userDefinedFunctionResources)
  {
    foreach ($userDefinedFunctionResources as $u) {
      if (!$u instanceof Google_Service_Bigquery_UserDefinedFunctionResource) {
        throw new InvalidArgumentException('First argument to setUserDefinedFunctionResources must be an array of Google_Service_Bigquery_UserDefinedFunctionResource');
      }
    }
    $this->userDefinedFunctionResources = $userDefinedFunctionResources;
  }
  public function getUserDefinedFunctionResources()
  {
    return $this->userDefinedFunctionResources;
  }
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}
