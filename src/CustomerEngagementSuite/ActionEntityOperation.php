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

namespace Google\Service\CustomerEngagementSuite;

class ActionEntityOperation extends \Google\Model
{
  /**
   * Operation type unspecified. Invalid, ConnectorTool create/update will fail.
   */
  public const OPERATION_OPERATION_TYPE_UNSPECIFIED = 'OPERATION_TYPE_UNSPECIFIED';
  /**
   * List operation.
   */
  public const OPERATION_LIST = 'LIST';
  /**
   * Get operation.
   */
  public const OPERATION_GET = 'GET';
  /**
   * Create operation.
   */
  public const OPERATION_CREATE = 'CREATE';
  /**
   * Update operation.
   */
  public const OPERATION_UPDATE = 'UPDATE';
  /**
   * Delete operation.
   */
  public const OPERATION_DELETE = 'DELETE';
  /**
   * Required. ID of the entity.
   *
   * @var string
   */
  public $entityId;
  /**
   * Required. Operation to perform on the entity.
   *
   * @var string
   */
  public $operation;

  /**
   * Required. ID of the entity.
   *
   * @param string $entityId
   */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /**
   * @return string
   */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /**
   * Required. Operation to perform on the entity.
   *
   * Accepted values: OPERATION_TYPE_UNSPECIFIED, LIST, GET, CREATE, UPDATE,
   * DELETE
   *
   * @param self::OPERATION_* $operation
   */
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  /**
   * @return self::OPERATION_*
   */
  public function getOperation()
  {
    return $this->operation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActionEntityOperation::class, 'Google_Service_CustomerEngagementSuite_ActionEntityOperation');
