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

class ExascaleDbStorageVaultProperties extends \Google\Collection
{
  protected $collection_key = 'vmClusterIds';
  /**
   * @var int
   */
  public $additionalFlashCachePercent;
  /**
   * @var string[]
   */
  public $attachedShapeAttributes;
  /**
   * @var string[]
   */
  public $availableShapeAttributes;
  /**
   * @var string
   */
  public $description;
  protected $exascaleDbStorageDetailsType = ExascaleDbStorageDetails::class;
  protected $exascaleDbStorageDetailsDataType = '';
  /**
   * @var string
   */
  public $ociUri;
  /**
   * @var string
   */
  public $ocid;
  /**
   * @var string
   */
  public $state;
  protected $timeZoneType = TimeZone::class;
  protected $timeZoneDataType = '';
  /**
   * @var int
   */
  public $vmClusterCount;
  /**
   * @var string[]
   */
  public $vmClusterIds;

  /**
   * @param int
   */
  public function setAdditionalFlashCachePercent($additionalFlashCachePercent)
  {
    $this->additionalFlashCachePercent = $additionalFlashCachePercent;
  }
  /**
   * @return int
   */
  public function getAdditionalFlashCachePercent()
  {
    return $this->additionalFlashCachePercent;
  }
  /**
   * @param string[]
   */
  public function setAttachedShapeAttributes($attachedShapeAttributes)
  {
    $this->attachedShapeAttributes = $attachedShapeAttributes;
  }
  /**
   * @return string[]
   */
  public function getAttachedShapeAttributes()
  {
    return $this->attachedShapeAttributes;
  }
  /**
   * @param string[]
   */
  public function setAvailableShapeAttributes($availableShapeAttributes)
  {
    $this->availableShapeAttributes = $availableShapeAttributes;
  }
  /**
   * @return string[]
   */
  public function getAvailableShapeAttributes()
  {
    return $this->availableShapeAttributes;
  }
  /**
   * @param string
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
   * @param ExascaleDbStorageDetails
   */
  public function setExascaleDbStorageDetails(ExascaleDbStorageDetails $exascaleDbStorageDetails)
  {
    $this->exascaleDbStorageDetails = $exascaleDbStorageDetails;
  }
  /**
   * @return ExascaleDbStorageDetails
   */
  public function getExascaleDbStorageDetails()
  {
    return $this->exascaleDbStorageDetails;
  }
  /**
   * @param string
   */
  public function setOciUri($ociUri)
  {
    $this->ociUri = $ociUri;
  }
  /**
   * @return string
   */
  public function getOciUri()
  {
    return $this->ociUri;
  }
  /**
   * @param string
   */
  public function setOcid($ocid)
  {
    $this->ocid = $ocid;
  }
  /**
   * @return string
   */
  public function getOcid()
  {
    return $this->ocid;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param TimeZone
   */
  public function setTimeZone(TimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return TimeZone
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /**
   * @param int
   */
  public function setVmClusterCount($vmClusterCount)
  {
    $this->vmClusterCount = $vmClusterCount;
  }
  /**
   * @return int
   */
  public function getVmClusterCount()
  {
    return $this->vmClusterCount;
  }
  /**
   * @param string[]
   */
  public function setVmClusterIds($vmClusterIds)
  {
    $this->vmClusterIds = $vmClusterIds;
  }
  /**
   * @return string[]
   */
  public function getVmClusterIds()
  {
    return $this->vmClusterIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExascaleDbStorageVaultProperties::class, 'Google_Service_OracleDatabase_ExascaleDbStorageVaultProperties');
