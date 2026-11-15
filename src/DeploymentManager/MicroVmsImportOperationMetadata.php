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

namespace Google\Service\DeploymentManager;

class MicroVmsImportOperationMetadata extends \Google\Model
{
  /**
   * Default value; not used.
   */
  public const PHASE_PHASE_UNSPECIFIED = 'PHASE_UNSPECIFIED';
  /**
   * Selecting a host and reserving capacity for the MicroVM.
   */
  public const PHASE_SCHEDULING = 'SCHEDULING';
  /**
   * Creating and attaching the MicroVM's persistent session storage.
   */
  public const PHASE_PROVISIONING_STORAGE = 'PROVISIONING_STORAGE';
  /**
   * Streaming user data from Cloud Storage into the session storage.
   */
  public const PHASE_IMPORTING = 'IMPORTING';
  /**
   * Booting the guest VM.
   */
  public const PHASE_BOOTING = 'BOOTING';
  /**
   * Output only. [Output Only] SHA-256 hex digest of the imported archive.
   *
   * @var string
   */
  public $archiveSha256;
  /**
   * Output only. [Output Only] Source Cloud Storage bucket name.
   *
   * @var string
   */
  public $bucketName;
  /**
   * Output only. [Output Only] Total bytes transferred from Cloud Storage.
   *
   * @var string
   */
  public $bytesTransferred;
  /**
   * Output only. [Output Only] Total files imported.
   *
   * @var string
   */
  public $filesTransferred;
  /**
   * Output only. [Output Only] Source Cloud Storage object name or prefix.
   *
   * @var string
   */
  public $objectName;
  /**
   * Output only. [Output Only] The current phase of the import operation.
   *
   * @var string
   */
  public $phase;
  /**
   * Output only. [Output Only] Size of the source object in bytes. Unset for
   * DIRECTORY_SYNC.
   *
   * @var string
   */
  public $totalBytes;

  /**
   * Output only. [Output Only] SHA-256 hex digest of the imported archive.
   *
   * @param string $archiveSha256
   */
  public function setArchiveSha256($archiveSha256)
  {
    $this->archiveSha256 = $archiveSha256;
  }
  /**
   * @return string
   */
  public function getArchiveSha256()
  {
    return $this->archiveSha256;
  }
  /**
   * Output only. [Output Only] Source Cloud Storage bucket name.
   *
   * @param string $bucketName
   */
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  /**
   * @return string
   */
  public function getBucketName()
  {
    return $this->bucketName;
  }
  /**
   * Output only. [Output Only] Total bytes transferred from Cloud Storage.
   *
   * @param string $bytesTransferred
   */
  public function setBytesTransferred($bytesTransferred)
  {
    $this->bytesTransferred = $bytesTransferred;
  }
  /**
   * @return string
   */
  public function getBytesTransferred()
  {
    return $this->bytesTransferred;
  }
  /**
   * Output only. [Output Only] Total files imported.
   *
   * @param string $filesTransferred
   */
  public function setFilesTransferred($filesTransferred)
  {
    $this->filesTransferred = $filesTransferred;
  }
  /**
   * @return string
   */
  public function getFilesTransferred()
  {
    return $this->filesTransferred;
  }
  /**
   * Output only. [Output Only] Source Cloud Storage object name or prefix.
   *
   * @param string $objectName
   */
  public function setObjectName($objectName)
  {
    $this->objectName = $objectName;
  }
  /**
   * @return string
   */
  public function getObjectName()
  {
    return $this->objectName;
  }
  /**
   * Output only. [Output Only] The current phase of the import operation.
   *
   * Accepted values: PHASE_UNSPECIFIED, SCHEDULING, PROVISIONING_STORAGE,
   * IMPORTING, BOOTING
   *
   * @param self::PHASE_* $phase
   */
  public function setPhase($phase)
  {
    $this->phase = $phase;
  }
  /**
   * @return self::PHASE_*
   */
  public function getPhase()
  {
    return $this->phase;
  }
  /**
   * Output only. [Output Only] Size of the source object in bytes. Unset for
   * DIRECTORY_SYNC.
   *
   * @param string $totalBytes
   */
  public function setTotalBytes($totalBytes)
  {
    $this->totalBytes = $totalBytes;
  }
  /**
   * @return string
   */
  public function getTotalBytes()
  {
    return $this->totalBytes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MicroVmsImportOperationMetadata::class, 'Google_Service_DeploymentManager_MicroVmsImportOperationMetadata');
