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

namespace Google\Service\Discovery;

class JsonSchema extends \Google\Collection
{
  protected $collection_key = 'enumDescriptions';
  protected $internal_gapi_mappings = [
        "ref" => "$ref",
  ];
  /**
   * @var string
   */
  public $ref;
  protected $additionalPropertiesType = JsonSchema::class;
  protected $additionalPropertiesDataType = '';
  protected $annotationsType = JsonSchemaAnnotations::class;
  protected $annotationsDataType = '';
  /**
   * @var string
   */
  public $default;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string[]
   */
  public $enum;
  /**
   * @var string[]
   */
  public $enumDescriptions;
  /**
   * @var string
   */
  public $format;
  /**
   * @var string
   */
  public $id;
  protected $itemsType = JsonSchema::class;
  protected $itemsDataType = '';
  /**
   * @var string
   */
  public $location;
  /**
   * @var string
   */
  public $maximum;
  /**
   * @var string
   */
  public $minimum;
  /**
   * @var string
   */
  public $pattern;
  protected $propertiesType = JsonSchema::class;
  protected $propertiesDataType = 'map';
  /**
   * @var bool
   */
  public $readOnly;
  /**
   * @var bool
   */
  public $repeated;
  /**
   * @var bool
   */
  public $required;
  /**
   * @var string
   */
  public $type;
  protected $variantType = JsonSchemaVariant::class;
  protected $variantDataType = '';

  /**
   * @param string
   */
  public function setRef($ref)
  {
    $this->ref = $ref;
  }
  /**
   * @return string
   */
  public function getRef()
  {
    return $this->ref;
  }
  /**
   * @param JsonSchema
   */
  public function setAdditionalProperties(JsonSchema $additionalProperties)
  {
    $this->additionalProperties = $additionalProperties;
  }
  /**
   * @return JsonSchema
   */
  public function getAdditionalProperties()
  {
    return $this->additionalProperties;
  }
  /**
   * @param JsonSchemaAnnotations
   */
  public function setAnnotations(JsonSchemaAnnotations $annotations)
  {
    $this->annotations = $annotations;
  }
  /**
   * @return JsonSchemaAnnotations
   */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * @param string
   */
  public function setDefault($default)
  {
    $this->default = $default;
  }
  /**
   * @return string
   */
  public function getDefault()
  {
    return $this->default;
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
  public function setEnum($enum)
  {
    $this->enum = $enum;
  }
  /**
   * @return string[]
   */
  public function getEnum()
  {
    return $this->enum;
  }
  /**
   * @param string[]
   */
  public function setEnumDescriptions($enumDescriptions)
  {
    $this->enumDescriptions = $enumDescriptions;
  }
  /**
   * @return string[]
   */
  public function getEnumDescriptions()
  {
    return $this->enumDescriptions;
  }
  /**
   * @param string
   */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /**
   * @return string
   */
  public function getFormat()
  {
    return $this->format;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param JsonSchema
   */
  public function setItems(JsonSchema $items)
  {
    $this->items = $items;
  }
  /**
   * @return JsonSchema
   */
  public function getItems()
  {
    return $this->items;
  }
  /**
   * @param string
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * @param string
   */
  public function setMaximum($maximum)
  {
    $this->maximum = $maximum;
  }
  /**
   * @return string
   */
  public function getMaximum()
  {
    return $this->maximum;
  }
  /**
   * @param string
   */
  public function setMinimum($minimum)
  {
    $this->minimum = $minimum;
  }
  /**
   * @return string
   */
  public function getMinimum()
  {
    return $this->minimum;
  }
  /**
   * @param string
   */
  public function setPattern($pattern)
  {
    $this->pattern = $pattern;
  }
  /**
   * @return string
   */
  public function getPattern()
  {
    return $this->pattern;
  }
  /**
   * @param JsonSchema[]
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return JsonSchema[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * @param bool
   */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /**
   * @return bool
   */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  /**
   * @param bool
   */
  public function setRepeated($repeated)
  {
    $this->repeated = $repeated;
  }
  /**
   * @return bool
   */
  public function getRepeated()
  {
    return $this->repeated;
  }
  /**
   * @param bool
   */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /**
   * @return bool
   */
  public function getRequired()
  {
    return $this->required;
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
  /**
   * @param JsonSchemaVariant
   */
  public function setVariant(JsonSchemaVariant $variant)
  {
    $this->variant = $variant;
  }
  /**
   * @return JsonSchemaVariant
   */
  public function getVariant()
  {
    return $this->variant;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JsonSchema::class, 'Google_Service_Discovery_JsonSchema');
