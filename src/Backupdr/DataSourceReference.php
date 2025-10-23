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

namespace Google\Service\Backupdr;

class DataSourceReference extends \Google\Model
{
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $dataSource;
  protected $dataSourceBackupConfigInfoType = DataSourceBackupConfigInfo::class;
  protected $dataSourceBackupConfigInfoDataType = '';
  /**
   * @var string
   */
  public $dataSourceBackupConfigState;
  /**
   * @var string
   */
  public $dataSourceBackupCount;
  protected $dataSourceGcpResourceInfoType = DataSourceGcpResourceInfo::class;
  protected $dataSourceGcpResourceInfoDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $totalStoredBytes;

  /**
   * @param string
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
   * @param string
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
  /**
   * @param DataSourceBackupConfigInfo
   */
  public function setDataSourceBackupConfigInfo(DataSourceBackupConfigInfo $dataSourceBackupConfigInfo)
  {
    $this->dataSourceBackupConfigInfo = $dataSourceBackupConfigInfo;
  }
  /**
   * @return DataSourceBackupConfigInfo
   */
  public function getDataSourceBackupConfigInfo()
  {
    return $this->dataSourceBackupConfigInfo;
  }
  /**
   * @param string
   */
  public function setDataSourceBackupConfigState($dataSourceBackupConfigState)
  {
    $this->dataSourceBackupConfigState = $dataSourceBackupConfigState;
  }
  /**
   * @return string
   */
  public function getDataSourceBackupConfigState()
  {
    return $this->dataSourceBackupConfigState;
  }
  /**
   * @param string
   */
  public function setDataSourceBackupCount($dataSourceBackupCount)
  {
    $this->dataSourceBackupCount = $dataSourceBackupCount;
  }
  /**
   * @return string
   */
  public function getDataSourceBackupCount()
  {
    return $this->dataSourceBackupCount;
  }
  /**
   * @param DataSourceGcpResourceInfo
   */
  public function setDataSourceGcpResourceInfo(DataSourceGcpResourceInfo $dataSourceGcpResourceInfo)
  {
    $this->dataSourceGcpResourceInfo = $dataSourceGcpResourceInfo;
  }
  /**
   * @return DataSourceGcpResourceInfo
   */
  public function getDataSourceGcpResourceInfo()
  {
    return $this->dataSourceGcpResourceInfo;
  }
  /**
   * @param string
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
   * @param string
   */
  public function setTotalStoredBytes($totalStoredBytes)
  {
    $this->totalStoredBytes = $totalStoredBytes;
  }
  /**
   * @return string
   */
  public function getTotalStoredBytes()
  {
    return $this->totalStoredBytes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataSourceReference::class, 'Google_Service_Backupdr_DataSourceReference');
