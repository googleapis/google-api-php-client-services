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
   * Disable validation warnings
   */
  public const FEED_TYPE_FEEDTYPE_UNSPECIFIED = 'FEEDTYPE_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const FEED_TYPE_RESOURCE_METADATA = 'RESOURCE_METADATA';
  /**
   * Disable validation warnings
   */
  public const FEED_TYPE_OBSERVABILITY_DATA = 'OBSERVABILITY_DATA';
  /**
   * Disable validation warnings
   */
  public const FEED_TYPE_SECURITY_FINDING_DATA = 'SECURITY_FINDING_DATA';
  /**
   * Disable validation warnings
   */
  public const FEED_TYPE_RECOMMENDATION_SIGNAL_DATA = 'RECOMMENDATION_SIGNAL_DATA';
  /**
   * Disable validation warnings
   */
  public const FEED_TYPE_CONFIG_BASED_SIGNAL_DATA = 'CONFIG_BASED_SIGNAL_DATA';
  /**
   * Disable validation warnings
   */
  public const FEED_TYPE_BACKUPDR_METADATA = 'BACKUPDR_METADATA';
  /**
   * Disable validation warnings
   */
  public const FEED_TYPE_DATABASE_RESOURCE_SIGNAL_DATA = 'DATABASE_RESOURCE_SIGNAL_DATA';
  protected $backupdrMetadataType = StorageDatabasecenterPartnerapiV1mainBackupDRMetadata::class;
  protected $backupdrMetadataDataType = '';
  protected $configBasedSignalDataType = StorageDatabasecenterPartnerapiV1mainConfigBasedSignalData::class;
  protected $configBasedSignalDataDataType = '';
  protected $databaseResourceSignalDataType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData::class;
  protected $databaseResourceSignalDataDataType = '';
  /**
   * Required. Disable validation warnings
   *
   * @var string
   */
  public $feedTimestamp;
  /**
   * Required. Disable validation warnings
   *
   * @var string
   */
  public $feedType;
  protected $observabilityMetricDataType = StorageDatabasecenterPartnerapiV1mainObservabilityMetricData::class;
  protected $observabilityMetricDataDataType = '';
  protected $recommendationSignalDataType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceRecommendationSignalData::class;
  protected $recommendationSignalDataDataType = '';
  protected $resourceHealthSignalDataType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceHealthSignalData::class;
  protected $resourceHealthSignalDataDataType = '';
  protected $resourceIdType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceId::class;
  protected $resourceIdDataType = '';
  protected $resourceMetadataType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceMetadata::class;
  protected $resourceMetadataDataType = '';
  /**
   * Optional. Disable validation warnings
   *
   * @var bool
   */
  public $skipIngestion;

  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainBackupDRMetadata $backupdrMetadata
   */
  public function setBackupdrMetadata(StorageDatabasecenterPartnerapiV1mainBackupDRMetadata $backupdrMetadata)
  {
    $this->backupdrMetadata = $backupdrMetadata;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainBackupDRMetadata
   */
  public function getBackupdrMetadata()
  {
    return $this->backupdrMetadata;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainConfigBasedSignalData $configBasedSignalData
   */
  public function setConfigBasedSignalData(StorageDatabasecenterPartnerapiV1mainConfigBasedSignalData $configBasedSignalData)
  {
    $this->configBasedSignalData = $configBasedSignalData;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainConfigBasedSignalData
   */
  public function getConfigBasedSignalData()
  {
    return $this->configBasedSignalData;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData $databaseResourceSignalData
   */
  public function setDatabaseResourceSignalData(StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData $databaseResourceSignalData)
  {
    $this->databaseResourceSignalData = $databaseResourceSignalData;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData
   */
  public function getDatabaseResourceSignalData()
  {
    return $this->databaseResourceSignalData;
  }
  /**
   * Required. Disable validation warnings
   *
   * @param string $feedTimestamp
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
   * Required. Disable validation warnings
   *
   * Accepted values: FEEDTYPE_UNSPECIFIED, RESOURCE_METADATA,
   * OBSERVABILITY_DATA, SECURITY_FINDING_DATA, RECOMMENDATION_SIGNAL_DATA,
   * CONFIG_BASED_SIGNAL_DATA, BACKUPDR_METADATA, DATABASE_RESOURCE_SIGNAL_DATA
   *
   * @param self::FEED_TYPE_* $feedType
   */
  public function setFeedType($feedType)
  {
    $this->feedType = $feedType;
  }
  /**
   * @return self::FEED_TYPE_*
   */
  public function getFeedType()
  {
    return $this->feedType;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainObservabilityMetricData $observabilityMetricData
   */
  public function setObservabilityMetricData(StorageDatabasecenterPartnerapiV1mainObservabilityMetricData $observabilityMetricData)
  {
    $this->observabilityMetricData = $observabilityMetricData;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainObservabilityMetricData
   */
  public function getObservabilityMetricData()
  {
    return $this->observabilityMetricData;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceRecommendationSignalData $recommendationSignalData
   */
  public function setRecommendationSignalData(StorageDatabasecenterPartnerapiV1mainDatabaseResourceRecommendationSignalData $recommendationSignalData)
  {
    $this->recommendationSignalData = $recommendationSignalData;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceRecommendationSignalData
   */
  public function getRecommendationSignalData()
  {
    return $this->recommendationSignalData;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceHealthSignalData $resourceHealthSignalData
   */
  public function setResourceHealthSignalData(StorageDatabasecenterPartnerapiV1mainDatabaseResourceHealthSignalData $resourceHealthSignalData)
  {
    $this->resourceHealthSignalData = $resourceHealthSignalData;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceHealthSignalData
   */
  public function getResourceHealthSignalData()
  {
    return $this->resourceHealthSignalData;
  }
  /**
   * Disable validation warnings
   *
   * @deprecated
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $resourceId
   */
  public function setResourceId(StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /**
   * @deprecated
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceId
   */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceMetadata $resourceMetadata
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
  /**
   * Optional. Disable validation warnings
   *
   * @param bool $skipIngestion
   */
  public function setSkipIngestion($skipIngestion)
  {
    $this->skipIngestion = $skipIngestion;
  }
  /**
   * @return bool
   */
  public function getSkipIngestion()
  {
    return $this->skipIngestion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainDatabaseResourceFeed::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainDatabaseResourceFeed');
