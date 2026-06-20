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

class DatabaseResource extends \Google\Collection
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
  protected $collection_key = 'tags';
  protected $affiliationsType = Affiliation::class;
  protected $affiliationsDataType = 'array';
  protected $backupdrConfigType = BackupDRConfig::class;
  protected $backupdrConfigDataType = '';
  protected $childResourcesType = DatabaseResource::class;
  protected $childResourcesDataType = 'array';
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
   * The full resource name, based on CAIS resource name format
   * https://cloud.google.com/asset-inventory/docs/resource-name-format Example:
   * `//cloudsql.googleapis.com/projects/project-number/instances/mysql-1`
   * `//cloudsql.googleapis.com/projects/project-number/instances/postgres-1`
   * `//spanner.googleapis.com/projects/project-number/instances/spanner-
   * instance-1` `//alloydb.googleapis.com/projects/project-number/locations/us-
   * central1/clusters/c1` `//alloydb.googleapis.com/projects/project-
   * number/locations/us-central1/clusters/c1/instances/i1`
   *
   * @var string
   */
  public $fullResourceName;
  protected $labelsType = Label::class;
  protected $labelsDataType = 'array';
  /**
   * The location of the resources. It supports returning only regional
   * locations in Google Cloud. These are of the form: "us-central1", "us-
   * east1", etc. See https://cloud.google.com/about/locations for a list of
   * such regions.
   *
   * @var string
   */
  public $location;
  protected $machineConfigType = MachineConfig::class;
  protected $machineConfigDataType = '';
  protected $maintenanceInfoType = MaintenanceInfo::class;
  protected $maintenanceInfoDataType = '';
  protected $metricsType = Metrics::class;
  protected $metricsDataType = '';
  protected $productType = Product::class;
  protected $productDataType = '';
  /**
   * The category of the resource.
   *
   * @var string
   */
  public $resourceCategory;
  /**
   * The name of the resource(The last part of the full resource name). Example:
   * For full resource name - `//cloudsql.googleapis.com/projects/project-
   * number/instances/mysql-1`, resource name - `mysql-1` For full resource name
   * - `//cloudsql.googleapis.com/projects/project-number/instances/postgres-1`
   * , resource name - `postgres-1` Note: In some cases, there might be more
   * than one resource with the same resource name.
   *
   * @var string
   */
  public $resourceName;
  /**
   * The type of resource defined according to the pattern: {Service
   * Name}/{Type}. Ex: sqladmin.googleapis.com/Instance
   * alloydb.googleapis.com/Cluster alloydb.googleapis.com/Instance
   * spanner.googleapis.com/Instance
   *
   * @var string
   */
  public $resourceType;
  protected $signalGroupsType = SignalGroup::class;
  protected $signalGroupsDataType = 'array';
  /**
   * Subtype of the resource specified at creation time.
   *
   * @var string
   */
  public $subResourceType;
  protected $tagsType = Tag::class;
  protected $tagsDataType = 'array';

  /**
   * Optional. Affiliation details of the resource.
   *
   * @param Affiliation[] $affiliations
   */
  public function setAffiliations($affiliations)
  {
    $this->affiliations = $affiliations;
  }
  /**
   * @return Affiliation[]
   */
  public function getAffiliations()
  {
    return $this->affiliations;
  }
  /**
   * Optional. Backup and disaster recovery details for the resource.
   *
   * @param BackupDRConfig $backupdrConfig
   */
  public function setBackupdrConfig(BackupDRConfig $backupdrConfig)
  {
    $this->backupdrConfig = $backupdrConfig;
  }
  /**
   * @return BackupDRConfig
   */
  public function getBackupdrConfig()
  {
    return $this->backupdrConfig;
  }
  /**
   * List of children associated with a database group.
   *
   * @param DatabaseResource[] $childResources
   */
  public function setChildResources($childResources)
  {
    $this->childResources = $childResources;
  }
  /**
   * @return DatabaseResource[]
   */
  public function getChildResources()
  {
    return $this->childResources;
  }
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
   * The full resource name, based on CAIS resource name format
   * https://cloud.google.com/asset-inventory/docs/resource-name-format Example:
   * `//cloudsql.googleapis.com/projects/project-number/instances/mysql-1`
   * `//cloudsql.googleapis.com/projects/project-number/instances/postgres-1`
   * `//spanner.googleapis.com/projects/project-number/instances/spanner-
   * instance-1` `//alloydb.googleapis.com/projects/project-number/locations/us-
   * central1/clusters/c1` `//alloydb.googleapis.com/projects/project-
   * number/locations/us-central1/clusters/c1/instances/i1`
   *
   * @param string $fullResourceName
   */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /**
   * @return string
   */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
  /**
   * Labels applied on the resource. The requirements for labels assigned to
   * Google Cloud resources may be found at https://cloud.google.com/resource-
   * manager/docs/labels-overview#requirements
   *
   * @param Label[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return Label[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * The location of the resources. It supports returning only regional
   * locations in Google Cloud. These are of the form: "us-central1", "us-
   * east1", etc. See https://cloud.google.com/about/locations for a list of
   * such regions.
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
   * Machine configuration like CPU, memory, etc for the resource.
   *
   * @param MachineConfig $machineConfig
   */
  public function setMachineConfig(MachineConfig $machineConfig)
  {
    $this->machineConfig = $machineConfig;
  }
  /**
   * @return MachineConfig
   */
  public function getMachineConfig()
  {
    return $this->machineConfig;
  }
  /**
   * Optional. The maintenance information of the resource.
   *
   * @param MaintenanceInfo $maintenanceInfo
   */
  public function setMaintenanceInfo(MaintenanceInfo $maintenanceInfo)
  {
    $this->maintenanceInfo = $maintenanceInfo;
  }
  /**
   * @return MaintenanceInfo
   */
  public function getMaintenanceInfo()
  {
    return $this->maintenanceInfo;
  }
  /**
   * Observable metrics for the resource e.g. CPU utilization, memory
   * utilization, etc.
   *
   * @param Metrics $metrics
   */
  public function setMetrics(Metrics $metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return Metrics
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * The product this resource represents.
   *
   * @param Product $product
   */
  public function setProduct(Product $product)
  {
    $this->product = $product;
  }
  /**
   * @return Product
   */
  public function getProduct()
  {
    return $this->product;
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
   * The name of the resource(The last part of the full resource name). Example:
   * For full resource name - `//cloudsql.googleapis.com/projects/project-
   * number/instances/mysql-1`, resource name - `mysql-1` For full resource name
   * - `//cloudsql.googleapis.com/projects/project-number/instances/postgres-1`
   * , resource name - `postgres-1` Note: In some cases, there might be more
   * than one resource with the same resource name.
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
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
   * The list of signal groups and count of issues related to the resource. Only
   * those signals which have been requested would be included.
   *
   * @param SignalGroup[] $signalGroups
   */
  public function setSignalGroups($signalGroups)
  {
    $this->signalGroups = $signalGroups;
  }
  /**
   * @return SignalGroup[]
   */
  public function getSignalGroups()
  {
    return $this->signalGroups;
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
   * Tags applied on the resource. The requirements for tags assigned to Google
   * Cloud resources may be found at https://cloud.google.com/resource-
   * manager/docs/tags/tags-overview
   *
   * @param Tag[] $tags
   */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /**
   * @return Tag[]
   */
  public function getTags()
  {
    return $this->tags;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseResource::class, 'Google_Service_DatabaseCenter_DatabaseResource');
