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

class Google_Service_Discovery_JsonSchema extends Google_Collection
{
  protected $collection_key = 'enumDescriptions';
  protected $internal_gapi_mappings = array(
        "ref" => "$ref",
  );
  public $ref;
  protected $additionalPropertiesType = 'Google_Service_Discovery_JsonSchema';
  protected $additionalPropertiesDataType = '';
  protected $annotationsType = 'Google_Service_Discovery_JsonSchemaAnnotations';
  protected $annotationsDataType = '';
  public $default;
  public $description;
  public $enum;
  public $enumDescriptions;
  public $format;
  public $id;
  protected $itemsType = 'Google_Service_Discovery_JsonSchema';
  protected $itemsDataType = '';
  public $location;
  public $maximum;
  public $minimum;
  public $pattern;
  protected $propertiesType = 'Google_Service_Discovery_JsonSchema';
  protected $propertiesDataType = 'map';
  public $readOnly;
  public $repeated;
  public $required;
  public $type;
  protected $variantType = 'Google_Service_Discovery_JsonSchemaVariant';
  protected $variantDataType = '';

  public function setRef($ref)
  {
    $this->ref = $ref;
  }
  public function getRef()
  {
    return $this->ref;
  }
  /**
   * @param Google_Service_Discovery_JsonSchema
   */
  public function setAdditionalProperties(Google_Service_Discovery_JsonSchema $additionalProperties)
  {
    $this->additionalProperties = $additionalProperties;
  }
  /**
   * @return Google_Service_Discovery_JsonSchema
   */
  public function getAdditionalProperties()
  {
    return $this->additionalProperties;
  }
  /**
   * @param Google_Service_Discovery_JsonSchemaAnnotations
   */
  public function setAnnotations(Google_Service_Discovery_JsonSchemaAnnotations $annotations)
  {
    $this->annotations = $annotations;
  }
  /**
   * @return Google_Service_Discovery_JsonSchemaAnnotations
   */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  public function setDefault($default)
  {
    $this->default = $default;
  }
  public function getDefault()
  {
    return $this->default;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setEnum($enum)
  {
    $this->enum = $enum;
  }
  public function getEnum()
  {
    return $this->enum;
  }
  public function setEnumDescriptions($enumDescriptions)
  {
    $this->enumDescriptions = $enumDescriptions;
  }
  public function getEnumDescriptions()
  {
    return $this->enumDescriptions;
  }
  public function setFormat($format)
  {
    $this->format = $format;
  }
  public function getFormat()
  {
    return $this->format;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param Google_Service_Discovery_JsonSchema
   */
  public function setItems(Google_Service_Discovery_JsonSchema $items)
  {
    $this->items = $items;
  }
  /**
   * @return Google_Service_Discovery_JsonSchema
   */
  public function getItems()
  {
    return $this->items;
  }
  public function setLocation($location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setMaximum($maximum)
  {
    $this->maximum = $maximum;
  }
  public function getMaximum()
  {
    return $this->maximum;
  }
  public function setMinimum($minimum)
  {
    $this->minimum = $minimum;
  }
  public function getMinimum()
  {
    return $this->minimum;
  }
  public function setPattern($pattern)
  {
    $this->pattern = $pattern;
  }
  public function getPattern()
  {
    return $this->pattern;
  }
  /**
   * @param Google_Service_Discovery_JsonSchema
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return Google_Service_Discovery_JsonSchema
   */
  public function getProperties()
  {
    return $this->properties;
  }
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  public function setRepeated($repeated)
  {
    $this->repeated = $repeated;
  }
  public function getRepeated()
  {
    return $this->repeated;
  }
  public function setRequired($required)
  {
    $this->required = $required;
  }
  public function getRequired()
  {
    return $this->required;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param Google_Service_Discovery_JsonSchemaVariant
   */
  public function setVariant(Google_Service_Discovery_JsonSchemaVariant $variant)
  {
    $this->variant = $variant;
  }
  /**
   * @return Google_Service_Discovery_JsonSchemaVariant
   */
  public function getVariant()
  {
    return $this->variant;
  }
}
