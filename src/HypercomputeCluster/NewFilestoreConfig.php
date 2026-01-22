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

namespace Google\Service\HypercomputeCluster;

class NewFilestoreConfig extends \Google\Collection
{
  /**
   * Not set.
   */
  public const PROTOCOL_PROTOCOL_UNSPECIFIED = 'PROTOCOL_UNSPECIFIED';
  /**
   * NFS 3.0.
   */
  public const PROTOCOL_NFSV3 = 'NFSV3';
  /**
   * NFS 4.1.
   */
  public const PROTOCOL_NFSV41 = 'NFSV41';
  /**
   * Not set.
   */
  public const TIER_TIER_UNSPECIFIED = 'TIER_UNSPECIFIED';
  /**
   * Offers expanded capacity and performance scaling capabilities suitable for
   * high-performance computing application requirements.
   */
  public const TIER_ZONAL = 'ZONAL';
  /**
   * Offers features and availability needed for mission-critical, high-
   * performance computing workloads.
   */
  public const TIER_REGIONAL = 'REGIONAL';
  protected $collection_key = 'fileShares';
  /**
   * Optional. Immutable. Description of the instance. Maximum of 2048
   * characters.
   *
   * @var string
   */
  public $description;
  protected $fileSharesType = FileShareConfig::class;
  protected $fileSharesDataType = 'array';
  /**
   * Required. Immutable. Name of the Filestore instance to create, in the
   * format `projects/{project}/locations/{location}/instances/{instance}`
   *
   * @var string
   */
  public $filestore;
  /**
   * Optional. Immutable. Access protocol to use for all file shares in the
   * instance. Defaults to NFS V3 if not set.
   *
   * @var string
   */
  public $protocol;
  /**
   * Required. Immutable. Service tier to use for the instance.
   *
   * @var string
   */
  public $tier;

  /**
   * Optional. Immutable. Description of the instance. Maximum of 2048
   * characters.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. Immutable. File system shares on the instance. Exactly one file
   * share must be specified.
   *
   * @param FileShareConfig[] $fileShares
   */
  public function setFileShares($fileShares)
  {
    $this->fileShares = $fileShares;
  }
  /**
   * @return FileShareConfig[]
   */
  public function getFileShares()
  {
    return $this->fileShares;
  }
  /**
   * Required. Immutable. Name of the Filestore instance to create, in the
   * format `projects/{project}/locations/{location}/instances/{instance}`
   *
   * @param string $filestore
   */
  public function setFilestore($filestore)
  {
    $this->filestore = $filestore;
  }
  /**
   * @return string
   */
  public function getFilestore()
  {
    return $this->filestore;
  }
  /**
   * Optional. Immutable. Access protocol to use for all file shares in the
   * instance. Defaults to NFS V3 if not set.
   *
   * Accepted values: PROTOCOL_UNSPECIFIED, NFSV3, NFSV41
   *
   * @param self::PROTOCOL_* $protocol
   */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /**
   * @return self::PROTOCOL_*
   */
  public function getProtocol()
  {
    return $this->protocol;
  }
  /**
   * Required. Immutable. Service tier to use for the instance.
   *
   * Accepted values: TIER_UNSPECIFIED, ZONAL, REGIONAL
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NewFilestoreConfig::class, 'Google_Service_HypercomputeCluster_NewFilestoreConfig');
