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

class RestoreServiceRequest extends \Google\Model
{
  /**
   * The restore type is unknown.
   */
  public const RESTORE_TYPE_RESTORE_TYPE_UNSPECIFIED = 'RESTORE_TYPE_UNSPECIFIED';
  /**
   * The service's metadata and configuration are restored.
   */
  public const RESTORE_TYPE_FULL = 'FULL';
  /**
   * Only the service's metadata is restored.
   */
  public const RESTORE_TYPE_METADATA_ONLY = 'METADATA_ONLY';
  /**
   * Optional. The relative resource name of the metastore service backup to
   * restore from, in the following form:projects/{project_id}/locations/{locati
   * on_id}/services/{service_id}/backups/{backup_id}. Mutually exclusive with
   * backup_location, and exactly one of the two must be set.
   *
   * @var string
   */
  public $backup;
  /**
   * Optional. A Cloud Storage URI specifying the location of the backup
   * artifacts, namely - backup avro files under "avro/", backup_metastore.json
   * and service.json, in the following form:gs://. Mutually exclusive with
   * backup, and exactly one of the two must be set.
   *
   * @var string
   */
  public $backupLocation;
  /**
   * Optional. A request ID. Specify a unique request ID to allow the server to
   * ignore the request if it has completed. The server will ignore subsequent
   * requests that provide a duplicate request ID for at least 60 minutes after
   * the first request.For example, if an initial request times out, followed by
   * another request with the same request ID, the server ignores the second
   * request to prevent the creation of duplicate commitments.The request ID
   * must be a valid UUID
   * (https://en.wikipedia.org/wiki/Universally_unique_identifier#Format). A
   * zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
   *
   * @var string
   */
  public $requestId;
  /**
   * Optional. The type of restore. If unspecified, defaults to METADATA_ONLY.
   *
   * @var string
   */
  public $restoreType;

  /**
   * Optional. The relative resource name of the metastore service backup to
   * restore from, in the following form:projects/{project_id}/locations/{locati
   * on_id}/services/{service_id}/backups/{backup_id}. Mutually exclusive with
   * backup_location, and exactly one of the two must be set.
   *
   * @param string $backup
   */
  public function setBackup($backup)
  {
    $this->backup = $backup;
  }
  /**
   * @return string
   */
  public function getBackup()
  {
    return $this->backup;
  }
  /**
   * Optional. A Cloud Storage URI specifying the location of the backup
   * artifacts, namely - backup avro files under "avro/", backup_metastore.json
   * and service.json, in the following form:gs://. Mutually exclusive with
   * backup, and exactly one of the two must be set.
   *
   * @param string $backupLocation
   */
  public function setBackupLocation($backupLocation)
  {
    $this->backupLocation = $backupLocation;
  }
  /**
   * @return string
   */
  public function getBackupLocation()
  {
    return $this->backupLocation;
  }
  /**
   * Optional. A request ID. Specify a unique request ID to allow the server to
   * ignore the request if it has completed. The server will ignore subsequent
   * requests that provide a duplicate request ID for at least 60 minutes after
   * the first request.For example, if an initial request times out, followed by
   * another request with the same request ID, the server ignores the second
   * request to prevent the creation of duplicate commitments.The request ID
   * must be a valid UUID
   * (https://en.wikipedia.org/wiki/Universally_unique_identifier#Format). A
   * zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
   *
   * @param string $requestId
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /**
   * Optional. The type of restore. If unspecified, defaults to METADATA_ONLY.
   *
   * Accepted values: RESTORE_TYPE_UNSPECIFIED, FULL, METADATA_ONLY
   *
   * @param self::RESTORE_TYPE_* $restoreType
   */
  public function setRestoreType($restoreType)
  {
    $this->restoreType = $restoreType;
  }
  /**
   * @return self::RESTORE_TYPE_*
   */
  public function getRestoreType()
  {
    return $this->restoreType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestoreServiceRequest::class, 'Google_Service_DataprocMetastore_RestoreServiceRequest');
