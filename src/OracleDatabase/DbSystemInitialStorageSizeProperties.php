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

class DbSystemInitialStorageSizeProperties extends \Google\Collection
{
  protected $collection_key = 'storageSizeDetails';
  protected $launchFromBackupStorageSizeDetailsType = StorageSizeDetails::class;
  protected $launchFromBackupStorageSizeDetailsDataType = 'array';
  /**
   * @var string
   */
  public $shapeType;
  /**
   * @var string
   */
  public $storageManagement;
  protected $storageSizeDetailsType = StorageSizeDetails::class;
  protected $storageSizeDetailsDataType = 'array';

  /**
   * @param StorageSizeDetails[]
   */
  public function setLaunchFromBackupStorageSizeDetails($launchFromBackupStorageSizeDetails)
  {
    $this->launchFromBackupStorageSizeDetails = $launchFromBackupStorageSizeDetails;
  }
  /**
   * @return StorageSizeDetails[]
   */
  public function getLaunchFromBackupStorageSizeDetails()
  {
    return $this->launchFromBackupStorageSizeDetails;
  }
  /**
   * @param string
   */
  public function setShapeType($shapeType)
  {
    $this->shapeType = $shapeType;
  }
  /**
   * @return string
   */
  public function getShapeType()
  {
    return $this->shapeType;
  }
  /**
   * @param string
   */
  public function setStorageManagement($storageManagement)
  {
    $this->storageManagement = $storageManagement;
  }
  /**
   * @return string
   */
  public function getStorageManagement()
  {
    return $this->storageManagement;
  }
  /**
   * @param StorageSizeDetails[]
   */
  public function setStorageSizeDetails($storageSizeDetails)
  {
    $this->storageSizeDetails = $storageSizeDetails;
  }
  /**
   * @return StorageSizeDetails[]
   */
  public function getStorageSizeDetails()
  {
    return $this->storageSizeDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DbSystemInitialStorageSizeProperties::class, 'Google_Service_OracleDatabase_DbSystemInitialStorageSizeProperties');
