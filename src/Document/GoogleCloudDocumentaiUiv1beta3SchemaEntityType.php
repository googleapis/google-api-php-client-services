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

class GoogleCloudDocumentaiUiv1beta3SchemaEntityType extends \Google\Collection
{
  protected $collection_key = 'properties';
  /**
   * @var string
   */
  public $baseType;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string[]
   */
  public $enumValues;
  /**
   * @var bool
   */
  public $hide;
  /**
   * @var string
   */
  public $method;
  /**
   * @var string
   */
  public $occurrenceType;
  protected $propertiesType = GoogleCloudDocumentaiUiv1beta3SchemaEntityType::class;
  protected $propertiesDataType = 'array';
  /**
   * @var string
   */
  public $source;
  /**
   * @var string
   */
  public $type;

  /**
   * @param string
   */
  public function setBaseType($baseType)
  {
    $this->baseType = $baseType;
  }
  /**
   * @return string
   */
  public function getBaseType()
  {
    return $this->baseType;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string[]
   */
  public function setEnumValues($enumValues)
  {
    $this->enumValues = $enumValues;
  }
  /**
   * @return string[]
   */
  public function getEnumValues()
  {
    return $this->enumValues;
  }
  /**
   * @param bool
   */
  public function setHide($hide)
  {
    $this->hide = $hide;
  }
  /**
   * @return bool
   */
  public function getHide()
  {
    return $this->hide;
  }
  /**
   * @param string
   */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /**
   * @return string
   */
  public function getMethod()
  {
    return $this->method;
  }
  /**
   * @param string
   */
  public function setOccurrenceType($occurrenceType)
  {
    $this->occurrenceType = $occurrenceType;
  }
  /**
   * @return string
   */
  public function getOccurrenceType()
  {
    return $this->occurrenceType;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3SchemaEntityType[]
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3SchemaEntityType[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * @param string
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiUiv1beta3SchemaEntityType::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3SchemaEntityType');
