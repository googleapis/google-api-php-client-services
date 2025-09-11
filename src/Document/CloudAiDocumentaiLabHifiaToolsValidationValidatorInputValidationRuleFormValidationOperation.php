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

namespace Google\Service\Document;

class CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleFormValidationOperation extends \Google\Collection
{
  protected $collection_key = 'operations';
  protected $constantsType = CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleConstant::class;
  protected $constantsDataType = 'array';
  protected $fieldsType = CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField::class;
  protected $fieldsDataType = 'array';
  /**
   * @var string
   */
  public $operationType;
  protected $operationsType = CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleFormValidationOperation::class;
  protected $operationsDataType = 'array';

  /**
   * @param CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleConstant[]
   */
  public function setConstants($constants)
  {
    $this->constants = $constants;
  }
  /**
   * @return CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleConstant[]
   */
  public function getConstants()
  {
    return $this->constants;
  }
  /**
   * @param CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField[]
   */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /**
   * @return CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField[]
   */
  public function getFields()
  {
    return $this->fields;
  }
  /**
   * @param string
   */
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /**
   * @return string
   */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /**
   * @param CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleFormValidationOperation[]
   */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /**
   * @return CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleFormValidationOperation[]
   */
  public function getOperations()
  {
    return $this->operations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleFormValidationOperation::class, 'Google_Service_Document_CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleFormValidationOperation');
