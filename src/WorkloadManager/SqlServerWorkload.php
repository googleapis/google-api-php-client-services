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

namespace Google\Service\WorkloadManager;

class SqlServerWorkload extends \Google\Model
{
  /**
   * Unspecified deployment model
   */
  public const DEPLOYMENT_MODEL_DEPLOYMENT_MODEL_UNSPECIFIED = 'DEPLOYMENT_MODEL_UNSPECIFIED';
  /**
   * High Availability deployment model
   */
  public const DEPLOYMENT_MODEL_HIGH_AVAILABILITY = 'HIGH_AVAILABILITY';
  /**
   * Single Instance deployment model
   */
  public const DEPLOYMENT_MODEL_SINGLE_INSTANCE = 'SINGLE_INSTANCE';
  /**
   * Unspecified environment type
   */
  public const ENVIRONMENT_TYPE_ENVIRONMENT_TYPE_UNSPECIFIED = 'ENVIRONMENT_TYPE_UNSPECIFIED';
  /**
   * Non-production environment type
   */
  public const ENVIRONMENT_TYPE_NON_PRODUCTION = 'NON_PRODUCTION';
  /**
   * Production environment type
   */
  public const ENVIRONMENT_TYPE_PRODUCTION = 'PRODUCTION';
  /**
   * Unspecified FCI type
   */
  public const FCI_TYPE_FCI_TYPE_UNSPECIFIED = 'FCI_TYPE_UNSPECIFIED';
  /**
   * SHARED DISK FCI type
   */
  public const FCI_TYPE_SHARED_DISK = 'SHARED_DISK';
  /**
   * S2D FCI type
   */
  public const FCI_TYPE_S2D = 'S2D';
  /**
   * Unspecified HA type
   */
  public const HA_TYPE_HA_TYPE_UNSPECIFIED = 'HA_TYPE_UNSPECIFIED';
  /**
   * AOAG HA type
   */
  public const HA_TYPE_AOAG = 'AOAG';
  /**
   * FCI HA type
   */
  public const HA_TYPE_FCI = 'FCI';
  /**
   * Unspecified operating system type
   */
  public const OPERATING_SYSTEM_TYPE_OPERATING_SYSTEM_TYPE_UNSPECIFIED = 'OPERATING_SYSTEM_TYPE_UNSPECIFIED';
  /**
   * Windows operating system type
   */
  public const OPERATING_SYSTEM_TYPE_WINDOWS = 'WINDOWS';
  /**
   * Ubuntu operating system type
   */
  public const OPERATING_SYSTEM_TYPE_UBUNTU = 'UBUNTU';
  /**
   * Red Hat Enterprise Linux operating system type
   */
  public const OPERATING_SYSTEM_TYPE_RED_HAT_ENTERPRISE_LINUX = 'RED_HAT_ENTERPRISE_LINUX';
  /**
   * Suse operating system type
   */
  public const OPERATING_SYSTEM_TYPE_SUSE = 'SUSE';
  /**
   * Unspecified OS image type
   */
  public const OS_IMAGE_TYPE_OS_IMAGE_TYPE_UNSPECIFIED = 'OS_IMAGE_TYPE_UNSPECIFIED';
  /**
   * Public image
   */
  public const OS_IMAGE_TYPE_PUBLIC_IMAGE = 'PUBLIC_IMAGE';
  /**
   * Custom image
   */
  public const OS_IMAGE_TYPE_CUSTOM_IMAGE = 'CUSTOM_IMAGE';
  /**
   * Unspecified type
   */
  public const SQL_SERVER_EDITION_SQL_SERVER_EDITION_TYPE_UNSPECIFIED = 'SQL_SERVER_EDITION_TYPE_UNSPECIFIED';
  /**
   * Developer type
   */
  public const SQL_SERVER_EDITION_SQL_SERVER_EDITION_TYPE_DEVELOPER = 'SQL_SERVER_EDITION_TYPE_DEVELOPER';
  /**
   * Enterprise type
   */
  public const SQL_SERVER_EDITION_SQL_SERVER_EDITION_TYPE_ENTERPRISE = 'SQL_SERVER_EDITION_TYPE_ENTERPRISE';
  /**
   * Standard type
   */
  public const SQL_SERVER_EDITION_SQL_SERVER_EDITION_TYPE_STANDARD = 'SQL_SERVER_EDITION_TYPE_STANDARD';
  /**
   * Web type
   */
  public const SQL_SERVER_EDITION_SQL_SERVER_EDITION_TYPE_WEB = 'SQL_SERVER_EDITION_TYPE_WEB';
  /**
   * Unspecified type
   */
  public const SQL_SERVER_VERSION_SQL_SERVER_VERSION_TYPE_UNSPECIFIED = 'SQL_SERVER_VERSION_TYPE_UNSPECIFIED';
  /**
   * 2017 type
   */
  public const SQL_SERVER_VERSION_SQL_SERVER_VERSION_TYPE_2017 = 'SQL_SERVER_VERSION_TYPE_2017';
  /**
   * 2019 type
   */
  public const SQL_SERVER_VERSION_SQL_SERVER_VERSION_TYPE_2019 = 'SQL_SERVER_VERSION_TYPE_2019';
  /**
   * 2022 type
   */
  public const SQL_SERVER_VERSION_SQL_SERVER_VERSION_TYPE_2022 = 'SQL_SERVER_VERSION_TYPE_2022';
  protected $activeDirectoryType = ActiveDirectory::class;
  protected $activeDirectoryDataType = '';
  /**
   * Compute engine service account - let customers bring their own SA for
   * Compute engine
   *
   * @var string
   */
  public $computeEngineServiceAccount;
  protected $databaseType = Database::class;
  protected $databaseDataType = '';
  /**
   * Required. HIGH_AVAILABILITY or SINGLE_INSTANCE
   *
   * @var string
   */
  public $deploymentModel;
  /**
   * Required. deployment environment
   *
   * @var string
   */
  public $environmentType;
  /**
   * Optional. SHARED_DISK or S2D
   *
   * @var string
   */
  public $fciType;
  /**
   * Optional. AOAG or FCI, it is only needed for High Availability deployment
   * mode
   *
   * @var string
   */
  public $haType;
  /**
   * Required. SQL licensing type
   *
   * @var bool
   */
  public $isSqlPayg;
  protected $locationType = SqlLocationDetails::class;
  protected $locationDataType = '';
  /**
   * Required. name of the media storing SQL server installation files
   *
   * @var string
   */
  public $mediaBucket;
  /**
   * Required. type of the operating system the SQL server is going to run on
   * top of
   *
   * @var string
   */
  public $operatingSystemType;
  /**
   * Required. the image of the operating system
   *
   * @var string
   */
  public $osImage;
  /**
   * Optional. OS image type, it's used to create boot disks for VM instances
   * When either Windows licensing type or SQL licensing type is BYOL, this
   * option is disabled and default to custom image
   *
   * @var string
   */
  public $osImageType;
  protected $pacemakerType = Pacemaker::class;
  protected $pacemakerDataType = '';
  /**
   * Optional. SQL Server Edition type, only applicable when Operating System is
   * Linux
   *
   * @var string
   */
  public $sqlServerEdition;
  /**
   * Optional. 2017 or 2019 or 2022
   *
   * @var string
   */
  public $sqlServerVersion;
  /**
   * Required. should be unique in the project
   *
   * @var string
   */
  public $vmPrefix;

  /**
   * Required. active directory details
   *
   * @param ActiveDirectory $activeDirectory
   */
  public function setActiveDirectory(ActiveDirectory $activeDirectory)
  {
    $this->activeDirectory = $activeDirectory;
  }
  /**
   * @return ActiveDirectory
   */
  public function getActiveDirectory()
  {
    return $this->activeDirectory;
  }
  /**
   * Compute engine service account - let customers bring their own SA for
   * Compute engine
   *
   * @param string $computeEngineServiceAccount
   */
  public function setComputeEngineServiceAccount($computeEngineServiceAccount)
  {
    $this->computeEngineServiceAccount = $computeEngineServiceAccount;
  }
  /**
   * @return string
   */
  public function getComputeEngineServiceAccount()
  {
    return $this->computeEngineServiceAccount;
  }
  /**
   * Required. database details
   *
   * @param Database $database
   */
  public function setDatabase(Database $database)
  {
    $this->database = $database;
  }
  /**
   * @return Database
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
   * Required. HIGH_AVAILABILITY or SINGLE_INSTANCE
   *
   * Accepted values: DEPLOYMENT_MODEL_UNSPECIFIED, HIGH_AVAILABILITY,
   * SINGLE_INSTANCE
   *
   * @param self::DEPLOYMENT_MODEL_* $deploymentModel
   */
  public function setDeploymentModel($deploymentModel)
  {
    $this->deploymentModel = $deploymentModel;
  }
  /**
   * @return self::DEPLOYMENT_MODEL_*
   */
  public function getDeploymentModel()
  {
    return $this->deploymentModel;
  }
  /**
   * Required. deployment environment
   *
   * Accepted values: ENVIRONMENT_TYPE_UNSPECIFIED, NON_PRODUCTION, PRODUCTION
   *
   * @param self::ENVIRONMENT_TYPE_* $environmentType
   */
  public function setEnvironmentType($environmentType)
  {
    $this->environmentType = $environmentType;
  }
  /**
   * @return self::ENVIRONMENT_TYPE_*
   */
  public function getEnvironmentType()
  {
    return $this->environmentType;
  }
  /**
   * Optional. SHARED_DISK or S2D
   *
   * Accepted values: FCI_TYPE_UNSPECIFIED, SHARED_DISK, S2D
   *
   * @param self::FCI_TYPE_* $fciType
   */
  public function setFciType($fciType)
  {
    $this->fciType = $fciType;
  }
  /**
   * @return self::FCI_TYPE_*
   */
  public function getFciType()
  {
    return $this->fciType;
  }
  /**
   * Optional. AOAG or FCI, it is only needed for High Availability deployment
   * mode
   *
   * Accepted values: HA_TYPE_UNSPECIFIED, AOAG, FCI
   *
   * @param self::HA_TYPE_* $haType
   */
  public function setHaType($haType)
  {
    $this->haType = $haType;
  }
  /**
   * @return self::HA_TYPE_*
   */
  public function getHaType()
  {
    return $this->haType;
  }
  /**
   * Required. SQL licensing type
   *
   * @param bool $isSqlPayg
   */
  public function setIsSqlPayg($isSqlPayg)
  {
    $this->isSqlPayg = $isSqlPayg;
  }
  /**
   * @return bool
   */
  public function getIsSqlPayg()
  {
    return $this->isSqlPayg;
  }
  /**
   * Required. location details
   *
   * @param SqlLocationDetails $location
   */
  public function setLocation(SqlLocationDetails $location)
  {
    $this->location = $location;
  }
  /**
   * @return SqlLocationDetails
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Required. name of the media storing SQL server installation files
   *
   * @param string $mediaBucket
   */
  public function setMediaBucket($mediaBucket)
  {
    $this->mediaBucket = $mediaBucket;
  }
  /**
   * @return string
   */
  public function getMediaBucket()
  {
    return $this->mediaBucket;
  }
  /**
   * Required. type of the operating system the SQL server is going to run on
   * top of
   *
   * Accepted values: OPERATING_SYSTEM_TYPE_UNSPECIFIED, WINDOWS, UBUNTU,
   * RED_HAT_ENTERPRISE_LINUX, SUSE
   *
   * @param self::OPERATING_SYSTEM_TYPE_* $operatingSystemType
   */
  public function setOperatingSystemType($operatingSystemType)
  {
    $this->operatingSystemType = $operatingSystemType;
  }
  /**
   * @return self::OPERATING_SYSTEM_TYPE_*
   */
  public function getOperatingSystemType()
  {
    return $this->operatingSystemType;
  }
  /**
   * Required. the image of the operating system
   *
   * @param string $osImage
   */
  public function setOsImage($osImage)
  {
    $this->osImage = $osImage;
  }
  /**
   * @return string
   */
  public function getOsImage()
  {
    return $this->osImage;
  }
  /**
   * Optional. OS image type, it's used to create boot disks for VM instances
   * When either Windows licensing type or SQL licensing type is BYOL, this
   * option is disabled and default to custom image
   *
   * Accepted values: OS_IMAGE_TYPE_UNSPECIFIED, PUBLIC_IMAGE, CUSTOM_IMAGE
   *
   * @param self::OS_IMAGE_TYPE_* $osImageType
   */
  public function setOsImageType($osImageType)
  {
    $this->osImageType = $osImageType;
  }
  /**
   * @return self::OS_IMAGE_TYPE_*
   */
  public function getOsImageType()
  {
    return $this->osImageType;
  }
  /**
   * Optional. pacemaker configuration, only applicable for Linux HA deployments
   *
   * @param Pacemaker $pacemaker
   */
  public function setPacemaker(Pacemaker $pacemaker)
  {
    $this->pacemaker = $pacemaker;
  }
  /**
   * @return Pacemaker
   */
  public function getPacemaker()
  {
    return $this->pacemaker;
  }
  /**
   * Optional. SQL Server Edition type, only applicable when Operating System is
   * Linux
   *
   * Accepted values: SQL_SERVER_EDITION_TYPE_UNSPECIFIED,
   * SQL_SERVER_EDITION_TYPE_DEVELOPER, SQL_SERVER_EDITION_TYPE_ENTERPRISE,
   * SQL_SERVER_EDITION_TYPE_STANDARD, SQL_SERVER_EDITION_TYPE_WEB
   *
   * @param self::SQL_SERVER_EDITION_* $sqlServerEdition
   */
  public function setSqlServerEdition($sqlServerEdition)
  {
    $this->sqlServerEdition = $sqlServerEdition;
  }
  /**
   * @return self::SQL_SERVER_EDITION_*
   */
  public function getSqlServerEdition()
  {
    return $this->sqlServerEdition;
  }
  /**
   * Optional. 2017 or 2019 or 2022
   *
   * Accepted values: SQL_SERVER_VERSION_TYPE_UNSPECIFIED,
   * SQL_SERVER_VERSION_TYPE_2017, SQL_SERVER_VERSION_TYPE_2019,
   * SQL_SERVER_VERSION_TYPE_2022
   *
   * @param self::SQL_SERVER_VERSION_* $sqlServerVersion
   */
  public function setSqlServerVersion($sqlServerVersion)
  {
    $this->sqlServerVersion = $sqlServerVersion;
  }
  /**
   * @return self::SQL_SERVER_VERSION_*
   */
  public function getSqlServerVersion()
  {
    return $this->sqlServerVersion;
  }
  /**
   * Required. should be unique in the project
   *
   * @param string $vmPrefix
   */
  public function setVmPrefix($vmPrefix)
  {
    $this->vmPrefix = $vmPrefix;
  }
  /**
   * @return string
   */
  public function getVmPrefix()
  {
    return $this->vmPrefix;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SqlServerWorkload::class, 'Google_Service_WorkloadManager_SqlServerWorkload');
