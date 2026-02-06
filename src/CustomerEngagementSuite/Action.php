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

class Action extends \Google\Collection
{
  protected $collection_key = 'outputFields';
  /**
   * ID of a Connection action for the tool to use.
   *
   * @var string
   */
  public $connectionActionId;
  protected $entityOperationType = ActionEntityOperation::class;
  protected $entityOperationDataType = '';
  /**
   * Optional. Entity fields to use as inputs for the operation. If no fields
   * are specified, all fields of the Entity will be used.
   *
   * @var string[]
   */
  public $inputFields;
  /**
   * Optional. Entity fields to return from the operation. If no fields are
   * specified, all fields of the Entity will be returned.
   *
   * @var string[]
   */
  public $outputFields;

  /**
   * ID of a Connection action for the tool to use.
   *
   * @param string $connectionActionId
   */
  public function setConnectionActionId($connectionActionId)
  {
    $this->connectionActionId = $connectionActionId;
  }
  /**
   * @return string
   */
  public function getConnectionActionId()
  {
    return $this->connectionActionId;
  }
  /**
   * Entity operation configuration for the tool to use.
   *
   * @param ActionEntityOperation $entityOperation
   */
  public function setEntityOperation(ActionEntityOperation $entityOperation)
  {
    $this->entityOperation = $entityOperation;
  }
  /**
   * @return ActionEntityOperation
   */
  public function getEntityOperation()
  {
    return $this->entityOperation;
  }
  /**
   * Optional. Entity fields to use as inputs for the operation. If no fields
   * are specified, all fields of the Entity will be used.
   *
   * @param string[] $inputFields
   */
  public function setInputFields($inputFields)
  {
    $this->inputFields = $inputFields;
  }
  /**
   * @return string[]
   */
  public function getInputFields()
  {
    return $this->inputFields;
  }
  /**
   * Optional. Entity fields to return from the operation. If no fields are
   * specified, all fields of the Entity will be returned.
   *
   * @param string[] $outputFields
   */
  public function setOutputFields($outputFields)
  {
    $this->outputFields = $outputFields;
  }
  /**
   * @return string[]
   */
  public function getOutputFields()
  {
    return $this->outputFields;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Action::class, 'Google_Service_CustomerEngagementSuite_Action');
