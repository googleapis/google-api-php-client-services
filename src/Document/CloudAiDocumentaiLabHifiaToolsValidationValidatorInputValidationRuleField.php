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

class CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField extends \Google\Model
{
  protected $defaultValueType = CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleConstant::class;
  protected $defaultValueDataType = '';
  /**
   * @var string
   */
  public $fieldName;

  /**
   * @param CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleConstant
   */
  public function setDefaultValue(CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleConstant $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /**
   * @return CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleConstant
   */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  /**
   * @param string
   */
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /**
   * @return string
   */
  public function getFieldName()
  {
    return $this->fieldName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField::class, 'Google_Service_Document_CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField');
