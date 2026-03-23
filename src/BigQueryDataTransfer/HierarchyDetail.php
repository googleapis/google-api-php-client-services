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

class HierarchyDetail extends \Google\Model
{
  protected $partitionDetailType = PartitionDetail::class;
  protected $partitionDetailDataType = '';
  protected $tableDetailType = TableDetail::class;
  protected $tableDetailDataType = '';

  /**
   * Optional. Partition details related to hierarchy.
   *
   * @param PartitionDetail $partitionDetail
   */
  public function setPartitionDetail(PartitionDetail $partitionDetail)
  {
    $this->partitionDetail = $partitionDetail;
  }
  /**
   * @return PartitionDetail
   */
  public function getPartitionDetail()
  {
    return $this->partitionDetail;
  }
  /**
   * Optional. Table details related to hierarchy.
   *
   * @param TableDetail $tableDetail
   */
  public function setTableDetail(TableDetail $tableDetail)
  {
    $this->tableDetail = $tableDetail;
  }
  /**
   * @return TableDetail
   */
  public function getTableDetail()
  {
    return $this->tableDetail;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HierarchyDetail::class, 'Google_Service_BigQueryDataTransfer_HierarchyDetail');
