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

class GoogleCloudDocumentaiV1DocumentEntityValidationOutput extends \Google\Collection
{
  protected $collection_key = 'validationResults';
  /**
   * @var bool
   */
  public $passAllRules;
  protected $validationResultsType = GoogleCloudDocumentaiV1DocumentEntityValidationOutputValidationResult::class;
  protected $validationResultsDataType = 'array';

  /**
   * @param bool
   */
  public function setPassAllRules($passAllRules)
  {
    $this->passAllRules = $passAllRules;
  }
  /**
   * @return bool
   */
  public function getPassAllRules()
  {
    return $this->passAllRules;
  }
  /**
   * @param GoogleCloudDocumentaiV1DocumentEntityValidationOutputValidationResult[]
   */
  public function setValidationResults($validationResults)
  {
    $this->validationResults = $validationResults;
  }
  /**
   * @return GoogleCloudDocumentaiV1DocumentEntityValidationOutputValidationResult[]
   */
  public function getValidationResults()
  {
    return $this->validationResults;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiV1DocumentEntityValidationOutput::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentEntityValidationOutput');
