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

namespace Google\Service\Bigquery;

class TableChangeInsight extends \Google\Model
{
  /**
   * Output only. True if the table's column metadata index was not used in the
   * current job, but was used in a previous job with the same query hash.
   *
   * @var bool
   */
  public $metadataCacheNotUsedButUsedPreviously;
  protected $metadataCacheStalenessInsightType = MetadataCacheStalenessInsight::class;
  protected $metadataCacheStalenessInsightDataType = '';
  protected $tableReferenceType = TableReference::class;
  protected $tableReferenceDataType = '';

  /**
   * Output only. True if the table's column metadata index was not used in the
   * current job, but was used in a previous job with the same query hash.
   *
   * @param bool $metadataCacheNotUsedButUsedPreviously
   */
  public function setMetadataCacheNotUsedButUsedPreviously($metadataCacheNotUsedButUsedPreviously)
  {
    $this->metadataCacheNotUsedButUsedPreviously = $metadataCacheNotUsedButUsedPreviously;
  }
  /**
   * @return bool
   */
  public function getMetadataCacheNotUsedButUsedPreviously()
  {
    return $this->metadataCacheNotUsedButUsedPreviously;
  }
  /**
   * Output only. If present, indicates that the table's metadata column index
   * staleness has increased significantly compared to previous jobs with the
   * same query hash.
   *
   * @param MetadataCacheStalenessInsight $metadataCacheStalenessInsight
   */
  public function setMetadataCacheStalenessInsight(MetadataCacheStalenessInsight $metadataCacheStalenessInsight)
  {
    $this->metadataCacheStalenessInsight = $metadataCacheStalenessInsight;
  }
  /**
   * @return MetadataCacheStalenessInsight
   */
  public function getMetadataCacheStalenessInsight()
  {
    return $this->metadataCacheStalenessInsight;
  }
  /**
   * Output only. The table that was queried.
   *
   * @param TableReference $tableReference
   */
  public function setTableReference(TableReference $tableReference)
  {
    $this->tableReference = $tableReference;
  }
  /**
   * @return TableReference
   */
  public function getTableReference()
  {
    return $this->tableReference;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableChangeInsight::class, 'Google_Service_Bigquery_TableChangeInsight');
