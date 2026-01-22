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

namespace Google\Service\DataprocMetastore;

class Service extends \Google\Model
{
  /**
   * The DATABASE_TYPE is not set.
   */
  public const DATABASE_TYPE_DATABASE_TYPE_UNSPECIFIED = 'DATABASE_TYPE_UNSPECIFIED';
  /**
   * MySQL is used to persist the metastore data.
   */
  public const DATABASE_TYPE_MYSQL = 'MYSQL';
  /**
   * Spanner is used to persist the metastore data.
   */
  public const DATABASE_TYPE_SPANNER = 'SPANNER';
  /**
   * Release channel is not specified.
   */
  public const RELEASE_CHANNEL_RELEASE_CHANNEL_UNSPECIFIED = 'RELEASE_CHANNEL_UNSPECIFIED';
  /**
   * The CANARY release channel contains the newest features, which may be
   * unstable and subject to unresolved issues with no known workarounds.
   * Services using the CANARY release channel are not subject to any SLAs.
   */
  public const RELEASE_CHANNEL_CANARY = 'CANARY';
  /**
   * The STABLE release channel contains features that are considered stable and
   * have been validated for production use.
   */
  public const RELEASE_CHANNEL_STABLE = 'STABLE';
  /**
   * The state of the metastore service is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The metastore service is in the process of being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The metastore service is running and ready to serve queries.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The metastore service is entering suspension. Its query-serving
   * availability may cease unexpectedly.
   */
  public const STATE_SUSPENDING = 'SUSPENDING';
  /**
   * The metastore service is suspended and unable to serve queries.
   */
  public const STATE_SUSPENDED = 'SUSPENDED';
  /**
   * The metastore service is being updated. It remains usable but cannot accept
   * additional update requests or be deleted at this time.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The metastore service is undergoing deletion. It cannot be used.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The metastore service has encountered an error and cannot be used. The
   * metastore service should be deleted.
   */
  public const STATE_ERROR = 'ERROR';
  /**
   * The Dataproc Metastore service 2 is being scaled up or down.
   */
  public const STATE_AUTOSCALING = 'AUTOSCALING';
  /**
   * The metastore service is processing a managed migration.
   */
  public const STATE_MIGRATING = 'MIGRATING';
  /**
   * The tier is not set.
   */
  public const TIER_TIER_UNSPECIFIED = 'TIER_UNSPECIFIED';
  /**
   * The developer tier provides limited scalability and no fault tolerance.
   * Good for low-cost proof-of-concept.
   */
  public const TIER_DEVELOPER = 'DEVELOPER';
  /**
   * The enterprise tier provides multi-zone high availability, and sufficient
   * scalability for enterprise-level Dataproc Metastore workloads.
   */
  public const TIER_ENTERPRISE = 'ENTERPRISE';
  /**
   * Output only. A Cloud Storage URI (starting with gs://) that specifies where
   * artifacts related to the metastore service are stored.
   *
   * @var string
   */
  public $artifactGcsUri;
  /**
   * Output only. The time when the metastore service was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Immutable. The database type that the Metastore service stores its data.
   *
   * @var string
   */
  public $databaseType;
  /**
   * Optional. Indicates if the dataproc metastore should be protected against
   * accidental deletions.
   *
   * @var bool
   */
  public $deletionProtection;
  protected $encryptionConfigType = EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  /**
   * Output only. The URI of the endpoint used to access the metastore service.
   *
   * @var string
   */
  public $endpointUri;
  protected $hiveMetastoreConfigType = HiveMetastoreConfig::class;
  protected $hiveMetastoreConfigDataType = '';
  /**
   * User-defined labels for the metastore service.
   *
   * @var string[]
   */
  public $labels;
  protected $maintenanceWindowType = MaintenanceWindow::class;
  protected $maintenanceWindowDataType = '';
  protected $metadataIntegrationType = MetadataIntegration::class;
  protected $metadataIntegrationDataType = '';
  protected $metadataManagementActivityType = MetadataManagementActivity::class;
  protected $metadataManagementActivityDataType = '';
  /**
   * Immutable. Identifier. The relative resource name of the metastore service,
   * in the following format:projects/{project_number}/locations/{location_id}/s
   * ervices/{service_id}.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The relative resource name of the VPC network on which the
   * instance can be accessed. It is specified in the following
   * form:projects/{project_number}/global/networks/{network_id}.
   *
   * @var string
   */
  public $network;
  protected $networkConfigType = NetworkConfig::class;
  protected $networkConfigDataType = '';
  /**
   * Optional. The TCP port at which the metastore service is reached. Default:
   * 9083.
   *
   * @var int
   */
  public $port;
  /**
   * Immutable. The release channel of the service. If unspecified, defaults to
   * STABLE.
   *
   * @var string
   */
  public $releaseChannel;
  protected $scalingConfigType = ScalingConfig::class;
  protected $scalingConfigDataType = '';
  protected $scheduledBackupType = ScheduledBackup::class;
  protected $scheduledBackupDataType = '';
  /**
   * Output only. The current state of the metastore service.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Additional information about the current state of the
   * metastore service, if available.
   *
   * @var string
   */
  public $stateMessage;
  /**
   * Optional. Input only. Immutable. Tag keys/values directly bound to this
   * resource. For example: "123/environment": "production", "123/costCenter":
   * "marketing"
   *
   * @var string[]
   */
  public $tags;
  protected $telemetryConfigType = TelemetryConfig::class;
  protected $telemetryConfigDataType = '';
  /**
   * Optional. The tier of the service.
   *
   * @var string
   */
  public $tier;
  /**
   * Output only. The globally unique resource identifier of the metastore
   * service.
   *
   * @var string
   */
  public $uid;
  /**
   * Output only. The time when the metastore service was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. A Cloud Storage URI (starting with gs://) that specifies where
   * artifacts related to the metastore service are stored.
   *
   * @param string $artifactGcsUri
   */
  public function setArtifactGcsUri($artifactGcsUri)
  {
    $this->artifactGcsUri = $artifactGcsUri;
  }
  /**
   * @return string
   */
  public function getArtifactGcsUri()
  {
    return $this->artifactGcsUri;
  }
  /**
   * Output only. The time when the metastore service was created.
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
   * Immutable. The database type that the Metastore service stores its data.
   *
   * Accepted values: DATABASE_TYPE_UNSPECIFIED, MYSQL, SPANNER
   *
   * @param self::DATABASE_TYPE_* $databaseType
   */
  public function setDatabaseType($databaseType)
  {
    $this->databaseType = $databaseType;
  }
  /**
   * @return self::DATABASE_TYPE_*
   */
  public function getDatabaseType()
  {
    return $this->databaseType;
  }
  /**
   * Optional. Indicates if the dataproc metastore should be protected against
   * accidental deletions.
   *
   * @param bool $deletionProtection
   */
  public function setDeletionProtection($deletionProtection)
  {
    $this->deletionProtection = $deletionProtection;
  }
  /**
   * @return bool
   */
  public function getDeletionProtection()
  {
    return $this->deletionProtection;
  }
  /**
   * Immutable. Information used to configure the Dataproc Metastore service to
   * encrypt customer data at rest. Cannot be updated.
   *
   * @param EncryptionConfig $encryptionConfig
   */
  public function setEncryptionConfig(EncryptionConfig $encryptionConfig)
  {
    $this->encryptionConfig = $encryptionConfig;
  }
  /**
   * @return EncryptionConfig
   */
  public function getEncryptionConfig()
  {
    return $this->encryptionConfig;
  }
  /**
   * Output only. The URI of the endpoint used to access the metastore service.
   *
   * @param string $endpointUri
   */
  public function setEndpointUri($endpointUri)
  {
    $this->endpointUri = $endpointUri;
  }
  /**
   * @return string
   */
  public function getEndpointUri()
  {
    return $this->endpointUri;
  }
  /**
   * Configuration information specific to running Hive metastore software as
   * the metastore service.
   *
   * @param HiveMetastoreConfig $hiveMetastoreConfig
   */
  public function setHiveMetastoreConfig(HiveMetastoreConfig $hiveMetastoreConfig)
  {
    $this->hiveMetastoreConfig = $hiveMetastoreConfig;
  }
  /**
   * @return HiveMetastoreConfig
   */
  public function getHiveMetastoreConfig()
  {
    return $this->hiveMetastoreConfig;
  }
  /**
   * User-defined labels for the metastore service.
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
   * Optional. The one hour maintenance window of the metastore service. This
   * specifies when the service can be restarted for maintenance purposes in UTC
   * time. Maintenance window is not needed for services with the SPANNER
   * database type.
   *
   * @param MaintenanceWindow $maintenanceWindow
   */
  public function setMaintenanceWindow(MaintenanceWindow $maintenanceWindow)
  {
    $this->maintenanceWindow = $maintenanceWindow;
  }
  /**
   * @return MaintenanceWindow
   */
  public function getMaintenanceWindow()
  {
    return $this->maintenanceWindow;
  }
  /**
   * Optional. The setting that defines how metastore metadata should be
   * integrated with external services and systems.
   *
   * @param MetadataIntegration $metadataIntegration
   */
  public function setMetadataIntegration(MetadataIntegration $metadataIntegration)
  {
    $this->metadataIntegration = $metadataIntegration;
  }
  /**
   * @return MetadataIntegration
   */
  public function getMetadataIntegration()
  {
    return $this->metadataIntegration;
  }
  /**
   * Output only. The metadata management activities of the metastore service.
   *
   * @param MetadataManagementActivity $metadataManagementActivity
   */
  public function setMetadataManagementActivity(MetadataManagementActivity $metadataManagementActivity)
  {
    $this->metadataManagementActivity = $metadataManagementActivity;
  }
  /**
   * @return MetadataManagementActivity
   */
  public function getMetadataManagementActivity()
  {
    return $this->metadataManagementActivity;
  }
  /**
   * Immutable. Identifier. The relative resource name of the metastore service,
   * in the following format:projects/{project_number}/locations/{location_id}/s
   * ervices/{service_id}.
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
   * Immutable. The relative resource name of the VPC network on which the
   * instance can be accessed. It is specified in the following
   * form:projects/{project_number}/global/networks/{network_id}.
   *
   * @param string $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return string
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Optional. The configuration specifying the network settings for the
   * Dataproc Metastore service.
   *
   * @param NetworkConfig $networkConfig
   */
  public function setNetworkConfig(NetworkConfig $networkConfig)
  {
    $this->networkConfig = $networkConfig;
  }
  /**
   * @return NetworkConfig
   */
  public function getNetworkConfig()
  {
    return $this->networkConfig;
  }
  /**
   * Optional. The TCP port at which the metastore service is reached. Default:
   * 9083.
   *
   * @param int $port
   */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /**
   * @return int
   */
  public function getPort()
  {
    return $this->port;
  }
  /**
   * Immutable. The release channel of the service. If unspecified, defaults to
   * STABLE.
   *
   * Accepted values: RELEASE_CHANNEL_UNSPECIFIED, CANARY, STABLE
   *
   * @param self::RELEASE_CHANNEL_* $releaseChannel
   */
  public function setReleaseChannel($releaseChannel)
  {
    $this->releaseChannel = $releaseChannel;
  }
  /**
   * @return self::RELEASE_CHANNEL_*
   */
  public function getReleaseChannel()
  {
    return $this->releaseChannel;
  }
  /**
   * Optional. Scaling configuration of the metastore service.
   *
   * @param ScalingConfig $scalingConfig
   */
  public function setScalingConfig(ScalingConfig $scalingConfig)
  {
    $this->scalingConfig = $scalingConfig;
  }
  /**
   * @return ScalingConfig
   */
  public function getScalingConfig()
  {
    return $this->scalingConfig;
  }
  /**
   * Optional. The configuration of scheduled backup for the metastore service.
   *
   * @param ScheduledBackup $scheduledBackup
   */
  public function setScheduledBackup(ScheduledBackup $scheduledBackup)
  {
    $this->scheduledBackup = $scheduledBackup;
  }
  /**
   * @return ScheduledBackup
   */
  public function getScheduledBackup()
  {
    return $this->scheduledBackup;
  }
  /**
   * Output only. The current state of the metastore service.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, SUSPENDING,
   * SUSPENDED, UPDATING, DELETING, ERROR, AUTOSCALING, MIGRATING
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Additional information about the current state of the
   * metastore service, if available.
   *
   * @param string $stateMessage
   */
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /**
   * @return string
   */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
  /**
   * Optional. Input only. Immutable. Tag keys/values directly bound to this
   * resource. For example: "123/environment": "production", "123/costCenter":
   * "marketing"
   *
   * @param string[] $tags
   */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /**
   * @return string[]
   */
  public function getTags()
  {
    return $this->tags;
  }
  /**
   * Optional. The configuration specifying telemetry settings for the Dataproc
   * Metastore service. If unspecified defaults to JSON.
   *
   * @param TelemetryConfig $telemetryConfig
   */
  public function setTelemetryConfig(TelemetryConfig $telemetryConfig)
  {
    $this->telemetryConfig = $telemetryConfig;
  }
  /**
   * @return TelemetryConfig
   */
  public function getTelemetryConfig()
  {
    return $this->telemetryConfig;
  }
  /**
   * Optional. The tier of the service.
   *
   * Accepted values: TIER_UNSPECIFIED, DEVELOPER, ENTERPRISE
   *
   * @param self::TIER_* $tier
   */
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /**
   * @return self::TIER_*
   */
  public function getTier()
  {
    return $this->tier;
  }
  /**
   * Output only. The globally unique resource identifier of the metastore
   * service.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * Output only. The time when the metastore service was last updated.
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
class_alias(Service::class, 'Google_Service_DataprocMetastore_Service');
