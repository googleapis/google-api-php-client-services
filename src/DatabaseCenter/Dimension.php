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

namespace Google\Service\DatabaseCenter;

class Dimension extends \Google\Model
{
  /**
   * Default, to make it consistent with instance edition enum.
   */
  public const EDITION_EDITION_UNSPECIFIED = 'EDITION_UNSPECIFIED';
  /**
   * Represents the enterprise edition.
   */
  public const EDITION_EDITION_ENTERPRISE = 'EDITION_ENTERPRISE';
  /**
   * Represents the enterprise plus edition.
   */
  public const EDITION_EDITION_ENTERPRISE_PLUS = 'EDITION_ENTERPRISE_PLUS';
  /**
   * Represents the standard edition.
   */
  public const EDITION_EDITION_STANDARD = 'EDITION_STANDARD';
  /**
   * Unspecified.
   */
  public const MANAGEMENT_TYPE_MANAGEMENT_TYPE_UNSPECIFIED = 'MANAGEMENT_TYPE_UNSPECIFIED';
  /**
   * Google-managed resource.
   */
  public const MANAGEMENT_TYPE_MANAGEMENT_TYPE_GCP_MANAGED = 'MANAGEMENT_TYPE_GCP_MANAGED';
  /**
   * Self-managed resource.
   */
  public const MANAGEMENT_TYPE_MANAGEMENT_TYPE_SELF_MANAGED = 'MANAGEMENT_TYPE_SELF_MANAGED';
  /**
   * UNSPECIFIED means engine type is not known or available.
   */
  public const PRODUCT_ENGINE_ENGINE_UNSPECIFIED = 'ENGINE_UNSPECIFIED';
  /**
   * MySQL binary running as an engine in the database instance.
   */
  public const PRODUCT_ENGINE_ENGINE_MYSQL = 'ENGINE_MYSQL';
  /**
   * Postgres binary running as engine in database instance.
   */
  public const PRODUCT_ENGINE_ENGINE_POSTGRES = 'ENGINE_POSTGRES';
  /**
   * SQLServer binary running as engine in database instance.
   */
  public const PRODUCT_ENGINE_ENGINE_SQL_SERVER = 'ENGINE_SQL_SERVER';
  /**
   * Native database binary running as engine in instance.
   */
  public const PRODUCT_ENGINE_ENGINE_NATIVE = 'ENGINE_NATIVE';
  /**
   * Memorystore with Redis dialect.
   */
  public const PRODUCT_ENGINE_ENGINE_MEMORYSTORE_FOR_REDIS = 'ENGINE_MEMORYSTORE_FOR_REDIS';
  /**
   * Memorystore with Redis cluster dialect.
   */
  public const PRODUCT_ENGINE_ENGINE_MEMORYSTORE_FOR_REDIS_CLUSTER = 'ENGINE_MEMORYSTORE_FOR_REDIS_CLUSTER';
  /**
   * Deprecated: Use ENGINE_MEMORYSTORE_FOR_VALKEY instead.
   *
   * @deprecated
   */
  public const PRODUCT_ENGINE_ENGINE_MEMORSTORE_FOR_VALKEY = 'ENGINE_MEMORSTORE_FOR_VALKEY';
  /**
   * Memorystore with Valkey dialect.
   */
  public const PRODUCT_ENGINE_ENGINE_MEMORYSTORE_FOR_VALKEY = 'ENGINE_MEMORYSTORE_FOR_VALKEY';
  /**
   * Firestore with native mode.
   */
  public const PRODUCT_ENGINE_ENGINE_FIRESTORE_WITH_NATIVE_MODE = 'ENGINE_FIRESTORE_WITH_NATIVE_MODE';
  /**
   * Firestore with datastore mode.
   */
  public const PRODUCT_ENGINE_ENGINE_FIRESTORE_WITH_DATASTORE_MODE = 'ENGINE_FIRESTORE_WITH_DATASTORE_MODE';
  /**
   * Oracle Exadata engine.
   */
  public const PRODUCT_ENGINE_ENGINE_EXADATA_ORACLE = 'ENGINE_EXADATA_ORACLE';
  /**
   * Oracle Autonomous DB Serverless engine.
   */
  public const PRODUCT_ENGINE_ENGINE_ADB_SERVERLESS_ORACLE = 'ENGINE_ADB_SERVERLESS_ORACLE';
  /**
   * Firestore with MongoDB compatibility.
   */
  public const PRODUCT_ENGINE_ENGINE_FIRESTORE_WITH_MONGODB_COMPATIBILITY_MODE = 'ENGINE_FIRESTORE_WITH_MONGODB_COMPATIBILITY_MODE';
  /**
   * Other refers to rest of other database engine. This is to be when engine is
   * known, but it is not present in this enum.
   */
  public const PRODUCT_ENGINE_ENGINE_OTHER = 'ENGINE_OTHER';
  /**
   * PRODUCT_TYPE_UNSPECIFIED means product type is not known or that the user
   * didn't provide this field in the request.
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_UNSPECIFIED = 'PRODUCT_TYPE_UNSPECIFIED';
  /**
   * Cloud SQL product area in Google Cloud
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_CLOUD_SQL = 'PRODUCT_TYPE_CLOUD_SQL';
  /**
   * AlloyDB product area in Google Cloud
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_ALLOYDB = 'PRODUCT_TYPE_ALLOYDB';
  /**
   * Spanner product area in Google Cloud
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_SPANNER = 'PRODUCT_TYPE_SPANNER';
  /**
   * Bigtable product area in Google Cloud
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_BIGTABLE = 'PRODUCT_TYPE_BIGTABLE';
  /**
   * Memorystore product area in Google Cloud
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_MEMORYSTORE = 'PRODUCT_TYPE_MEMORYSTORE';
  /**
   * Firestore product area in Google Cloud
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_FIRESTORE = 'PRODUCT_TYPE_FIRESTORE';
  /**
   * Compute Engine self managed databases
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_COMPUTE_ENGINE = 'PRODUCT_TYPE_COMPUTE_ENGINE';
  /**
   * Oracle product area in Google Cloud
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_ORACLE_ON_GCP = 'PRODUCT_TYPE_ORACLE_ON_GCP';
  /**
   * BigQuery product area in Google Cloud
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_BIGQUERY = 'PRODUCT_TYPE_BIGQUERY';
  /**
   * Other refers to rest of other product type. This is to be when product type
   * is known, but it is not present in this enum.
   */
  public const PRODUCT_TYPE_PRODUCT_TYPE_OTHER = 'PRODUCT_TYPE_OTHER';
  /**
   * Unspecified.
   */
  public const RESOURCE_CATEGORY_RESOURCE_CATEGORY_UNSPECIFIED = 'RESOURCE_CATEGORY_UNSPECIFIED';
  /**
   * A resource that is an Instance.
   */
  public const RESOURCE_CATEGORY_INSTANCE = 'INSTANCE';
  /**
   * A resource that is a Cluster.
   */
  public const RESOURCE_CATEGORY_CLUSTER = 'CLUSTER';
  /**
   * A resource that is a Database.
   */
  public const RESOURCE_CATEGORY_DATABASE = 'DATABASE';
  /**
   * A resource that is a Dataset.
   */
  public const RESOURCE_CATEGORY_DATASET = 'DATASET';
  /**
   * A resource that is a Reservation.
   */
  public const RESOURCE_CATEGORY_RESERVATION = 'RESERVATION';
  /**
   * Unspecified.
   */
  public const SUB_RESOURCE_TYPE_SUB_RESOURCE_TYPE_UNSPECIFIED = 'SUB_RESOURCE_TYPE_UNSPECIFIED';
  /**
   * A resource acting as a primary.
   */
  public const SUB_RESOURCE_TYPE_SUB_RESOURCE_TYPE_PRIMARY = 'SUB_RESOURCE_TYPE_PRIMARY';
  /**
   * A resource acting as a secondary.
   */
  public const SUB_RESOURCE_TYPE_SUB_RESOURCE_TYPE_SECONDARY = 'SUB_RESOURCE_TYPE_SECONDARY';
  /**
   * A resource acting as a read-replica.
   */
  public const SUB_RESOURCE_TYPE_SUB_RESOURCE_TYPE_READ_REPLICA = 'SUB_RESOURCE_TYPE_READ_REPLICA';
  /**
   * A resource acting as an external primary.
   */
  public const SUB_RESOURCE_TYPE_SUB_RESOURCE_TYPE_EXTERNAL_PRIMARY = 'SUB_RESOURCE_TYPE_EXTERNAL_PRIMARY';
  /**
   * A resource acting as a read pool.
   */
  public const SUB_RESOURCE_TYPE_SUB_RESOURCE_TYPE_READ_POOL = 'SUB_RESOURCE_TYPE_READ_POOL';
  /**
   * Represents a reservation resource.
   */
  public const SUB_RESOURCE_TYPE_SUB_RESOURCE_TYPE_RESERVATION = 'SUB_RESOURCE_TYPE_RESERVATION';
  /**
   * Represents a dataset resource.
   */
  public const SUB_RESOURCE_TYPE_SUB_RESOURCE_TYPE_DATASET = 'SUB_RESOURCE_TYPE_DATASET';
  /**
   * For the rest of the categories.
   */
  public const SUB_RESOURCE_TYPE_SUB_RESOURCE_TYPE_OTHER = 'SUB_RESOURCE_TYPE_OTHER';
  /**
   * Specifies where the resource is created. For Google Cloud resources, it is
   * the full name of the project.
   *
   * @var string
   */
  public $container;
  /**
   * The edition of the resource.
   *
   * @var string
   */
  public $edition;
  /**
   * Whether the resource has deny maintenance schedules.
   *
   * @var bool
   */
  public $hasDenyMaintenanceSchedules;
  /**
   * Whether the resource has a maintenance schedule.
   *
   * @var bool
   */
  public $hasMaintenanceSchedule;
  /**
   * Label key of the resource.
   *
   * @var string
   */
  public $labelKey;
  /**
   * Label source of the resource.
   *
   * @var string
   */
  public $labelSource;
  /**
   * Label value of the resource.
   *
   * @var string
   */
  public $labelValue;
  /**
   * The location of the resources. It supports returning only regional
   * locations in Google Cloud.
   *
   * @var string
   */
  public $location;
  /**
   * The management type of the resource.
   *
   * @var string
   */
  public $managementType;
  /**
   * Engine refers to underlying database binary running in an instance.
   *
   * @var string
   */
  public $productEngine;
  /**
   * Type to identify a product
   *
   * @var string
   */
  public $productType;
  /**
   * Version of the underlying database engine
   *
   * @var string
   */
  public $productVersion;
  /**
   * The category of the resource.
   *
   * @var string
   */
  public $resourceCategory;
  /**
   * The type of resource defined according to the pattern: {Service
   * Name}/{Type}. Ex: sqladmin.googleapis.com/Instance
   * alloydb.googleapis.com/Cluster alloydb.googleapis.com/Instance
   * spanner.googleapis.com/Instance
   *
   * @var string
   */
  public $resourceType;
  /**
   * Subtype of the resource specified at creation time.
   *
   * @var string
   */
  public $subResourceType;
  /**
   * Tag inheritance value of the resource.
   *
   * @var bool
   */
  public $tagInherited;
  /**
   * Tag key of the resource.
   *
   * @var string
   */
  public $tagKey;
  /**
   * Tag source of the resource.
   *
   * @var string
   */
  public $tagSource;
  /**
   * Tag value of the resource.
   *
   * @var string
   */
  public $tagValue;

  /**
   * Specifies where the resource is created. For Google Cloud resources, it is
   * the full name of the project.
   *
   * @param string $container
   */
  public function setContainer($container)
  {
    $this->container = $container;
  }
  /**
   * @return string
   */
  public function getContainer()
  {
    return $this->container;
  }
  /**
   * The edition of the resource.
   *
   * Accepted values: EDITION_UNSPECIFIED, EDITION_ENTERPRISE,
   * EDITION_ENTERPRISE_PLUS, EDITION_STANDARD
   *
   * @param self::EDITION_* $edition
   */
  public function setEdition($edition)
  {
    $this->edition = $edition;
  }
  /**
   * @return self::EDITION_*
   */
  public function getEdition()
  {
    return $this->edition;
  }
  /**
   * Whether the resource has deny maintenance schedules.
   *
   * @param bool $hasDenyMaintenanceSchedules
   */
  public function setHasDenyMaintenanceSchedules($hasDenyMaintenanceSchedules)
  {
    $this->hasDenyMaintenanceSchedules = $hasDenyMaintenanceSchedules;
  }
  /**
   * @return bool
   */
  public function getHasDenyMaintenanceSchedules()
  {
    return $this->hasDenyMaintenanceSchedules;
  }
  /**
   * Whether the resource has a maintenance schedule.
   *
   * @param bool $hasMaintenanceSchedule
   */
  public function setHasMaintenanceSchedule($hasMaintenanceSchedule)
  {
    $this->hasMaintenanceSchedule = $hasMaintenanceSchedule;
  }
  /**
   * @return bool
   */
  public function getHasMaintenanceSchedule()
  {
    return $this->hasMaintenanceSchedule;
  }
  /**
   * Label key of the resource.
   *
   * @param string $labelKey
   */
  public function setLabelKey($labelKey)
  {
    $this->labelKey = $labelKey;
  }
  /**
   * @return string
   */
  public function getLabelKey()
  {
    return $this->labelKey;
  }
  /**
   * Label source of the resource.
   *
   * @param string $labelSource
   */
  public function setLabelSource($labelSource)
  {
    $this->labelSource = $labelSource;
  }
  /**
   * @return string
   */
  public function getLabelSource()
  {
    return $this->labelSource;
  }
  /**
   * Label value of the resource.
   *
   * @param string $labelValue
   */
  public function setLabelValue($labelValue)
  {
    $this->labelValue = $labelValue;
  }
  /**
   * @return string
   */
  public function getLabelValue()
  {
    return $this->labelValue;
  }
  /**
   * The location of the resources. It supports returning only regional
   * locations in Google Cloud.
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * The management type of the resource.
   *
   * Accepted values: MANAGEMENT_TYPE_UNSPECIFIED, MANAGEMENT_TYPE_GCP_MANAGED,
   * MANAGEMENT_TYPE_SELF_MANAGED
   *
   * @param self::MANAGEMENT_TYPE_* $managementType
   */
  public function setManagementType($managementType)
  {
    $this->managementType = $managementType;
  }
  /**
   * @return self::MANAGEMENT_TYPE_*
   */
  public function getManagementType()
  {
    return $this->managementType;
  }
  /**
   * Engine refers to underlying database binary running in an instance.
   *
   * Accepted values: ENGINE_UNSPECIFIED, ENGINE_MYSQL, ENGINE_POSTGRES,
   * ENGINE_SQL_SERVER, ENGINE_NATIVE, ENGINE_MEMORYSTORE_FOR_REDIS,
   * ENGINE_MEMORYSTORE_FOR_REDIS_CLUSTER, ENGINE_MEMORSTORE_FOR_VALKEY,
   * ENGINE_MEMORYSTORE_FOR_VALKEY, ENGINE_FIRESTORE_WITH_NATIVE_MODE,
   * ENGINE_FIRESTORE_WITH_DATASTORE_MODE, ENGINE_EXADATA_ORACLE,
   * ENGINE_ADB_SERVERLESS_ORACLE,
   * ENGINE_FIRESTORE_WITH_MONGODB_COMPATIBILITY_MODE, ENGINE_OTHER
   *
   * @param self::PRODUCT_ENGINE_* $productEngine
   */
  public function setProductEngine($productEngine)
  {
    $this->productEngine = $productEngine;
  }
  /**
   * @return self::PRODUCT_ENGINE_*
   */
  public function getProductEngine()
  {
    return $this->productEngine;
  }
  /**
   * Type to identify a product
   *
   * Accepted values: PRODUCT_TYPE_UNSPECIFIED, PRODUCT_TYPE_CLOUD_SQL,
   * PRODUCT_TYPE_ALLOYDB, PRODUCT_TYPE_SPANNER, PRODUCT_TYPE_BIGTABLE,
   * PRODUCT_TYPE_MEMORYSTORE, PRODUCT_TYPE_FIRESTORE,
   * PRODUCT_TYPE_COMPUTE_ENGINE, PRODUCT_TYPE_ORACLE_ON_GCP,
   * PRODUCT_TYPE_BIGQUERY, PRODUCT_TYPE_OTHER
   *
   * @param self::PRODUCT_TYPE_* $productType
   */
  public function setProductType($productType)
  {
    $this->productType = $productType;
  }
  /**
   * @return self::PRODUCT_TYPE_*
   */
  public function getProductType()
  {
    return $this->productType;
  }
  /**
   * Version of the underlying database engine
   *
   * @param string $productVersion
   */
  public function setProductVersion($productVersion)
  {
    $this->productVersion = $productVersion;
  }
  /**
   * @return string
   */
  public function getProductVersion()
  {
    return $this->productVersion;
  }
  /**
   * The category of the resource.
   *
   * Accepted values: RESOURCE_CATEGORY_UNSPECIFIED, INSTANCE, CLUSTER,
   * DATABASE, DATASET, RESERVATION
   *
   * @param self::RESOURCE_CATEGORY_* $resourceCategory
   */
  public function setResourceCategory($resourceCategory)
  {
    $this->resourceCategory = $resourceCategory;
  }
  /**
   * @return self::RESOURCE_CATEGORY_*
   */
  public function getResourceCategory()
  {
    return $this->resourceCategory;
  }
  /**
   * The type of resource defined according to the pattern: {Service
   * Name}/{Type}. Ex: sqladmin.googleapis.com/Instance
   * alloydb.googleapis.com/Cluster alloydb.googleapis.com/Instance
   * spanner.googleapis.com/Instance
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /**
   * Subtype of the resource specified at creation time.
   *
   * Accepted values: SUB_RESOURCE_TYPE_UNSPECIFIED, SUB_RESOURCE_TYPE_PRIMARY,
   * SUB_RESOURCE_TYPE_SECONDARY, SUB_RESOURCE_TYPE_READ_REPLICA,
   * SUB_RESOURCE_TYPE_EXTERNAL_PRIMARY, SUB_RESOURCE_TYPE_READ_POOL,
   * SUB_RESOURCE_TYPE_RESERVATION, SUB_RESOURCE_TYPE_DATASET,
   * SUB_RESOURCE_TYPE_OTHER
   *
   * @param self::SUB_RESOURCE_TYPE_* $subResourceType
   */
  public function setSubResourceType($subResourceType)
  {
    $this->subResourceType = $subResourceType;
  }
  /**
   * @return self::SUB_RESOURCE_TYPE_*
   */
  public function getSubResourceType()
  {
    return $this->subResourceType;
  }
  /**
   * Tag inheritance value of the resource.
   *
   * @param bool $tagInherited
   */
  public function setTagInherited($tagInherited)
  {
    $this->tagInherited = $tagInherited;
  }
  /**
   * @return bool
   */
  public function getTagInherited()
  {
    return $this->tagInherited;
  }
  /**
   * Tag key of the resource.
   *
   * @param string $tagKey
   */
  public function setTagKey($tagKey)
  {
    $this->tagKey = $tagKey;
  }
  /**
   * @return string
   */
  public function getTagKey()
  {
    return $this->tagKey;
  }
  /**
   * Tag source of the resource.
   *
   * @param string $tagSource
   */
  public function setTagSource($tagSource)
  {
    $this->tagSource = $tagSource;
  }
  /**
   * @return string
   */
  public function getTagSource()
  {
    return $this->tagSource;
  }
  /**
   * Tag value of the resource.
   *
   * @param string $tagValue
   */
  public function setTagValue($tagValue)
  {
    $this->tagValue = $tagValue;
  }
  /**
   * @return string
   */
  public function getTagValue()
  {
    return $this->tagValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Dimension::class, 'Google_Service_DatabaseCenter_Dimension');
