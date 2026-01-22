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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterStringConstraint extends \Google\Collection
{
  protected $collection_key = 'values';
  /**
   * Name of the string field as defined in the schema.
   *
   * @var string
   */
  public $fieldName;
  /**
   * Identifies the keywords within the search query that match a filter.
   *
   * @var string
   */
  public $querySegment;
  /**
   * Values of the string field. The record will only be returned if the field
   * value matches one of the values specified here.
   *
   * @var string[]
   */
  public $values;

  /**
   * Name of the string field as defined in the schema.
   *
   * @param string $fieldName
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
  /**
   * Identifies the keywords within the search query that match a filter.
   *
   * @param string $querySegment
   */
  public function setQuerySegment($querySegment)
  {
    $this->querySegment = $querySegment;
  }
  /**
   * @return string
   */
  public function getQuerySegment()
  {
    return $this->querySegment;
  }
  /**
   * Values of the string field. The record will only be returned if the field
   * value matches one of the values specified here.
   *
   * @param string[] $values
   */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /**
   * @return string[]
   */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterStringConstraint::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterStringConstraint');
