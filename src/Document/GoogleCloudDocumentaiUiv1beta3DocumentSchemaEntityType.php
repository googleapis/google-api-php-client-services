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

class GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityType extends \Google\Collection
{
  protected $collection_key = 'properties';
  /**
   * @var string[]
   */
  public $baseTypes;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $displayName;
  protected $entityTypeMetadataType = GoogleCloudDocumentaiUiv1beta3EntityTypeMetadata::class;
  protected $entityTypeMetadataDataType = '';
  protected $enumValuesType = GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityTypeEnumValues::class;
  protected $enumValuesDataType = '';
  /**
   * @var string
   */
  public $name;
  protected $propertiesType = GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityTypeProperty::class;
  protected $propertiesDataType = 'array';

  /**
   * @param string[]
   */
  public function setBaseTypes($baseTypes)
  {
    $this->baseTypes = $baseTypes;
  }
  /**
   * @return string[]
   */
  public function getBaseTypes()
  {
    return $this->baseTypes;
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
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3EntityTypeMetadata
   */
  public function setEntityTypeMetadata(GoogleCloudDocumentaiUiv1beta3EntityTypeMetadata $entityTypeMetadata)
  {
    $this->entityTypeMetadata = $entityTypeMetadata;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3EntityTypeMetadata
   */
  public function getEntityTypeMetadata()
  {
    return $this->entityTypeMetadata;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityTypeEnumValues
   */
  public function setEnumValues(GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityTypeEnumValues $enumValues)
  {
    $this->enumValues = $enumValues;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityTypeEnumValues
   */
  public function getEnumValues()
  {
    return $this->enumValues;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityTypeProperty[]
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityTypeProperty[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityType::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DocumentSchemaEntityType');
