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

namespace Google\Service\BigQueryDataTransfer;

class TransferResource extends \Google\Model
{
  /**
   * Default value.
   */
  public const DESTINATION_RESOURCE_DESTINATION_UNSPECIFIED = 'RESOURCE_DESTINATION_UNSPECIFIED';
  /**
   * BigQuery.
   */
  public const DESTINATION_RESOURCE_DESTINATION_BIGQUERY = 'RESOURCE_DESTINATION_BIGQUERY';
  /**
   * Dataproc Metastore.
   */
  public const DESTINATION_RESOURCE_DESTINATION_DATAPROC_METASTORE = 'RESOURCE_DESTINATION_DATAPROC_METASTORE';
  /**
   * BigLake Metastore.
   */
  public const DESTINATION_RESOURCE_DESTINATION_BIGLAKE_METASTORE = 'RESOURCE_DESTINATION_BIGLAKE_METASTORE';
  /**
   * BigLake REST Catalog.
   */
  public const DESTINATION_RESOURCE_DESTINATION_BIGLAKE_REST_CATALOG = 'RESOURCE_DESTINATION_BIGLAKE_REST_CATALOG';
  /**
   * BigLake Hive Catalog.
   */
  public const DESTINATION_RESOURCE_DESTINATION_BIGLAKE_HIVE_CATALOG = 'RESOURCE_DESTINATION_BIGLAKE_HIVE_CATALOG';
  /**
   * Default value.
   */
  public const TYPE_RESOURCE_TYPE_UNSPECIFIED = 'RESOURCE_TYPE_UNSPECIFIED';
  /**
   * Table resource type.
   */
  public const TYPE_RESOURCE_TYPE_TABLE = 'RESOURCE_TYPE_TABLE';
  /**
   * Partition resource type.
   */
  public const TYPE_RESOURCE_TYPE_PARTITION = 'RESOURCE_TYPE_PARTITION';
  /**
   * Optional. Resource destination.
   *
   * @var string
   */
  public $destination;
  protected $hierarchyDetailType = HierarchyDetail::class;
  protected $hierarchyDetailDataType = '';
  protected $lastSuccessfulRunType = TransferRunBrief::class;
  protected $lastSuccessfulRunDataType = '';
  protected $latestRunType = TransferRunBrief::class;
  protected $latestRunDataType = '';
  protected $latestStatusDetailType = TransferResourceStatusDetail::class;
  protected $latestStatusDetailDataType = '';
  /**
   * Identifier. Resource name.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Resource type.
   *
   * @var string
   */
  public $type;
  /**
   * Output only. Time when the resource was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. Resource destination.
   *
   * Accepted values: RESOURCE_DESTINATION_UNSPECIFIED,
   * RESOURCE_DESTINATION_BIGQUERY, RESOURCE_DESTINATION_DATAPROC_METASTORE,
   * RESOURCE_DESTINATION_BIGLAKE_METASTORE,
   * RESOURCE_DESTINATION_BIGLAKE_REST_CATALOG,
   * RESOURCE_DESTINATION_BIGLAKE_HIVE_CATALOG
   *
   * @param self::DESTINATION_* $destination
   */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /**
   * @return self::DESTINATION_*
   */
  public function getDestination()
  {
    return $this->destination;
  }
  /**
   * Optional. Details about the hierarchy.
   *
   * @param HierarchyDetail $hierarchyDetail
   */
  public function setHierarchyDetail(HierarchyDetail $hierarchyDetail)
  {
    $this->hierarchyDetail = $hierarchyDetail;
  }
  /**
   * @return HierarchyDetail
   */
  public function getHierarchyDetail()
  {
    return $this->hierarchyDetail;
  }
  /**
   * Output only. Run details for the last successful run.
   *
   * @param TransferRunBrief $lastSuccessfulRun
   */
  public function setLastSuccessfulRun(TransferRunBrief $lastSuccessfulRun)
  {
    $this->lastSuccessfulRun = $lastSuccessfulRun;
  }
  /**
   * @return TransferRunBrief
   */
  public function getLastSuccessfulRun()
  {
    return $this->lastSuccessfulRun;
  }
  /**
   * Optional. Run details for the latest run.
   *
   * @param TransferRunBrief $latestRun
   */
  public function setLatestRun(TransferRunBrief $latestRun)
  {
    $this->latestRun = $latestRun;
  }
  /**
   * @return TransferRunBrief
   */
  public function getLatestRun()
  {
    return $this->latestRun;
  }
  /**
   * Optional. Status details for the latest run.
   *
   * @param TransferResourceStatusDetail $latestStatusDetail
   */
  public function setLatestStatusDetail(TransferResourceStatusDetail $latestStatusDetail)
  {
    $this->latestStatusDetail = $latestStatusDetail;
  }
  /**
   * @return TransferResourceStatusDetail
   */
  public function getLatestStatusDetail()
  {
    return $this->latestStatusDetail;
  }
  /**
   * Identifier. Resource name.
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
   * Optional. Resource type.
   *
   * Accepted values: RESOURCE_TYPE_UNSPECIFIED, RESOURCE_TYPE_TABLE,
   * RESOURCE_TYPE_PARTITION
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Output only. Time when the resource was last updated.
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
class_alias(TransferResource::class, 'Google_Service_BigQueryDataTransfer_TransferResource');
