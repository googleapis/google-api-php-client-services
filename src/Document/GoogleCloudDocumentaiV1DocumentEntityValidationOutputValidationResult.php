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

class GoogleCloudDocumentaiV1DocumentEntityValidationOutputValidationResult extends \Google\Model
{
  /**
   * @var string
   */
  public $ruleDescription;
  /**
   * @var string
   */
  public $ruleName;
  /**
   * @var string
   */
  public $validationDetails;
  /**
   * @var string
   */
  public $validationResultType;

  /**
   * @param string
   */
  public function setRuleDescription($ruleDescription)
  {
    $this->ruleDescription = $ruleDescription;
  }
  /**
   * @return string
   */
  public function getRuleDescription()
  {
    return $this->ruleDescription;
  }
  /**
   * @param string
   */
  public function setRuleName($ruleName)
  {
    $this->ruleName = $ruleName;
  }
  /**
   * @return string
   */
  public function getRuleName()
  {
    return $this->ruleName;
  }
  /**
   * @param string
   */
  public function setValidationDetails($validationDetails)
  {
    $this->validationDetails = $validationDetails;
  }
  /**
   * @return string
   */
  public function getValidationDetails()
  {
    return $this->validationDetails;
  }
  /**
   * @param string
   */
  public function setValidationResultType($validationResultType)
  {
    $this->validationResultType = $validationResultType;
  }
  /**
   * @return string
   */
  public function getValidationResultType()
  {
    return $this->validationResultType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiV1DocumentEntityValidationOutputValidationResult::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentEntityValidationOutputValidationResult');
