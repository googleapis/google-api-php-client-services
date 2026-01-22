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

class StartMigrationRequest extends \Google\Model
{
  protected $migrationExecutionType = MigrationExecution::class;
  protected $migrationExecutionDataType = '';
  /**
   * Optional. A request ID. Specify a unique request ID to allow the server to
   * ignore the request if it has completed. The server will ignore subsequent
   * requests that provide a duplicate request ID for at least 60 minutes after
   * the first request.For example, if an initial request times out, followed by
   * another request with the same request ID, the server ignores the second
   * request to prevent the creation of duplicate commitments.The request ID
   * must be a valid UUID
   * (https://en.wikipedia.org/wiki/Universally_unique_identifier#Format) A zero
   * UUID (00000000-0000-0000-0000-000000000000) is not supported.
   *
   * @var string
   */
  public $requestId;

  /**
   * Required. The configuration details for the migration.
   *
   * @param MigrationExecution $migrationExecution
   */
  public function setMigrationExecution(MigrationExecution $migrationExecution)
  {
    $this->migrationExecution = $migrationExecution;
  }
  /**
   * @return MigrationExecution
   */
  public function getMigrationExecution()
  {
    return $this->migrationExecution;
  }
  /**
   * Optional. A request ID. Specify a unique request ID to allow the server to
   * ignore the request if it has completed. The server will ignore subsequent
   * requests that provide a duplicate request ID for at least 60 minutes after
   * the first request.For example, if an initial request times out, followed by
   * another request with the same request ID, the server ignores the second
   * request to prevent the creation of duplicate commitments.The request ID
   * must be a valid UUID
   * (https://en.wikipedia.org/wiki/Universally_unique_identifier#Format) A zero
   * UUID (00000000-0000-0000-0000-000000000000) is not supported.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StartMigrationRequest::class, 'Google_Service_DataprocMetastore_StartMigrationRequest');
