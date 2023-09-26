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

namespace Google\Service\CloudAlloyDBAdmin;

class StorageDatabasecenterPartnerapiV1mainDatabaseResourceFeed extends \Google\Model
{
  /**
   * @var string
   */
  public $feedTimestamp;
  /**
   * @var string
   */
  public $feedType;
  protected $resourceIdType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceId::class;
  protected $resourceIdDataType = '';
  protected $resourceMetadataType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceMetadata::class;
  protected $resourceMetadataDataType = '';

  /**
   * @param string
   */
  public function setFeedTimestamp($feedTimestamp)
  {
    $this->feedTimestamp = $feedTimestamp;
  }
  /**
   * @return string
   */
  public function getFeedTimestamp()
  {
    return $this->feedTimestamp;
  }
  /**
   * @param string
   */
  public function setFeedType($feedType)
  {
    $this->feedType = $feedType;
  }
  /**
   * @return string
   */
  public function getFeedType()
  {
    return $this->feedType;
  }
  /**
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceId
   */
  public function setResourceId(StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceId
   */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /**
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceMetadata
   */
  public function setResourceMetadata(StorageDatabasecenterPartnerapiV1mainDatabaseResourceMetadata $resourceMetadata)
  {
    $this->resourceMetadata = $resourceMetadata;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceMetadata
   */
  public function getResourceMetadata()
  {
    return $this->resourceMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainDatabaseResourceFeed::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainDatabaseResourceFeed');
