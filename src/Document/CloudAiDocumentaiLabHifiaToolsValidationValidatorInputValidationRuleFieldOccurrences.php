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

class CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleFieldOccurrences extends \Google\Model
{
  protected $fieldType = CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField::class;
  protected $fieldDataType = '';
  /**
   * @var string
   */
  public $maxOccurrences;
  /**
   * @var string
   */
  public $minOccurrences;

  /**
   * @param CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField
   */
  public function setField(CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField $field)
  {
    $this->field = $field;
  }
  /**
   * @return CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleField
   */
  public function getField()
  {
    return $this->field;
  }
  /**
   * @param string
   */
  public function setMaxOccurrences($maxOccurrences)
  {
    $this->maxOccurrences = $maxOccurrences;
  }
  /**
   * @return string
   */
  public function getMaxOccurrences()
  {
    return $this->maxOccurrences;
  }
  /**
   * @param string
   */
  public function setMinOccurrences($minOccurrences)
  {
    $this->minOccurrences = $minOccurrences;
  }
  /**
   * @return string
   */
  public function getMinOccurrences()
  {
    return $this->minOccurrences;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleFieldOccurrences::class, 'Google_Service_Document_CloudAiDocumentaiLabHifiaToolsValidationValidatorInputValidationRuleFieldOccurrences');
