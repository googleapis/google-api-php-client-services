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

namespace Google\Service\MigrationCenterAPI;

class AssetsExportJob extends \Google\Collection
{
  protected $collection_key = 'recentExecutions';
  protected $conditionType = AssetsExportJobExportCondition::class;
  protected $conditionDataType = '';
  /**
   * Output only. Resource creation time.
   *
   * @var string
   */
  public $createTime;
  protected $inventoryType = AssetsExportJobInventory::class;
  protected $inventoryDataType = '';
  /**
   * Optional. Labels as key value pairs. Labels must meet the following
   * constraints: * Keys and values can contain only lowercase letters, numeric
   * characters, underscores, and dashes. * All characters must use UTF-8
   * encoding, and international characters are allowed. * Keys must start with
   * a lowercase letter or international character. * Each resource is limited
   * to a maximum of 64 labels. Both keys and values are additionally
   * constrained to be <= 128 bytes.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. Identifier. Resource name.
   *
   * @var string
   */
  public $name;
  protected $networkDependenciesType = AssetsExportJobNetworkDependencies::class;
  protected $networkDependenciesDataType = '';
  protected $performanceDataType = AssetsExportJobPerformanceData::class;
  protected $performanceDataDataType = '';
  protected $recentExecutionsType = AssetsExportJobExecution::class;
  protected $recentExecutionsDataType = 'array';
  /**
   * Optional. When this value is set to 'true' the response will include all
   * assets, including those that are hidden.
   *
   * @var bool
   */
  public $showHidden;
  protected $signedUriDestinationType = SignedUriDestination::class;
  protected $signedUriDestinationDataType = '';
  /**
   * Output only. Resource update time.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. Conditions for selecting assets to export.
   *
   * @param AssetsExportJobExportCondition $condition
   */
  public function setCondition(AssetsExportJobExportCondition $condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return AssetsExportJobExportCondition
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * Output only. Resource creation time.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Export asset inventory details.
   *
   * @param AssetsExportJobInventory $inventory
   */
  public function setInventory(AssetsExportJobInventory $inventory)
  {
    $this->inventory = $inventory;
  }
  /**
   * @return AssetsExportJobInventory
   */
  public function getInventory()
  {
    return $this->inventory;
  }
  /**
   * Optional. Labels as key value pairs. Labels must meet the following
   * constraints: * Keys and values can contain only lowercase letters, numeric
   * characters, underscores, and dashes. * All characters must use UTF-8
   * encoding, and international characters are allowed. * Keys must start with
   * a lowercase letter or international character. * Each resource is limited
   * to a maximum of 64 labels. Both keys and values are additionally
   * constrained to be <= 128 bytes.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. Identifier. Resource name.
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
  /**
   * Export data regarding asset network dependencies.
   *
   * @param AssetsExportJobNetworkDependencies $networkDependencies
   */
  public function setNetworkDependencies(AssetsExportJobNetworkDependencies $networkDependencies)
  {
    $this->networkDependencies = $networkDependencies;
  }
  /**
   * @return AssetsExportJobNetworkDependencies
   */
  public function getNetworkDependencies()
  {
    return $this->networkDependencies;
  }
  /**
   * Export asset with performance data.
   *
   * @param AssetsExportJobPerformanceData $performanceData
   */
  public function setPerformanceData(AssetsExportJobPerformanceData $performanceData)
  {
    $this->performanceData = $performanceData;
  }
  /**
   * @return AssetsExportJobPerformanceData
   */
  public function getPerformanceData()
  {
    return $this->performanceData;
  }
  /**
   * Output only. Recent non expired executions of the job.
   *
   * @param AssetsExportJobExecution[] $recentExecutions
   */
  public function setRecentExecutions($recentExecutions)
  {
    $this->recentExecutions = $recentExecutions;
  }
  /**
   * @return AssetsExportJobExecution[]
   */
  public function getRecentExecutions()
  {
    return $this->recentExecutions;
  }
  /**
   * Optional. When this value is set to 'true' the response will include all
   * assets, including those that are hidden.
   *
   * @param bool $showHidden
   */
  public function setShowHidden($showHidden)
  {
    $this->showHidden = $showHidden;
  }
  /**
   * @return bool
   */
  public function getShowHidden()
  {
    return $this->showHidden;
  }
  /**
   * Export to Cloud Storage files downloadable using signed URIs.
   *
   * @param SignedUriDestination $signedUriDestination
   */
  public function setSignedUriDestination(SignedUriDestination $signedUriDestination)
  {
    $this->signedUriDestination = $signedUriDestination;
  }
  /**
   * @return SignedUriDestination
   */
  public function getSignedUriDestination()
  {
    return $this->signedUriDestination;
  }
  /**
   * Output only. Resource update time.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetsExportJob::class, 'Google_Service_MigrationCenterAPI_AssetsExportJob');
