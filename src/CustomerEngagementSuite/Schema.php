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

namespace Google\Service\CustomerEngagementSuite;

class Schema extends \Google\Collection
{
  /**
   * Type unspecified.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * String type.
   */
  public const TYPE_STRING = 'STRING';
  /**
   * Integer type.
   */
  public const TYPE_INTEGER = 'INTEGER';
  /**
   * Number type.
   */
  public const TYPE_NUMBER = 'NUMBER';
  /**
   * Boolean type.
   */
  public const TYPE_BOOLEAN = 'BOOLEAN';
  /**
   * Object type.
   */
  public const TYPE_OBJECT = 'OBJECT';
  /**
   * Array type.
   */
  public const TYPE_ARRAY = 'ARRAY';
  protected $collection_key = 'required';
  protected $additionalPropertiesType = Schema::class;
  protected $additionalPropertiesDataType = '';
  protected $anyOfType = Schema::class;
  protected $anyOfDataType = 'array';
  /**
   * Optional. Default value of the data.
   *
   * @var array
   */
  public $default;
  protected $defsType = Schema::class;
  protected $defsDataType = 'map';
  /**
   * Optional. The description of the data.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Possible values of the element of primitive type with enum
   * format. Examples: 1. We can define direction as : {type:STRING,
   * format:enum, enum:["EAST", NORTH", "SOUTH", "WEST"]} 2. We can define
   * apartment number as : {type:INTEGER, format:enum, enum:["101", "201",
   * "301"]}
   *
   * @var string[]
   */
  public $enum;
  protected $itemsType = Schema::class;
  protected $itemsDataType = '';
  /**
   * Optional. Maximum number of the elements for Type.ARRAY.
   *
   * @var string
   */
  public $maxItems;
  /**
   * Optional. Maximum value for Type.INTEGER and Type.NUMBER.
   *
   * @var 
   */
  public $maximum;
  /**
   * Optional. Minimum number of the elements for Type.ARRAY.
   *
   * @var string
   */
  public $minItems;
  /**
   * Optional. Minimum value for Type.INTEGER and Type.NUMBER.
   *
   * @var 
   */
  public $minimum;
  /**
   * Optional. Indicates if the value may be null.
   *
   * @var bool
   */
  public $nullable;
  protected $prefixItemsType = Schema::class;
  protected $prefixItemsDataType = 'array';
  protected $propertiesType = Schema::class;
  protected $propertiesDataType = 'map';
  /**
   * Optional. Allows indirect references between schema nodes. The value should
   * be a valid reference to a child of the root `defs`. For example, the
   * following schema defines a reference to a schema node named "Pet": type:
   * object properties: pet: ref: #/defs/Pet defs: Pet: type: object properties:
   * name: type: string The value of the "pet" property is a reference to the
   * schema node named "Pet". See details in https://json-
   * schema.org/understanding-json-schema/structuring.
   *
   * @var string
   */
  public $ref;
  /**
   * Optional. Required properties of Type.OBJECT.
   *
   * @var string[]
   */
  public $required;
  /**
   * Optional. The title of the schema.
   *
   * @var string
   */
  public $title;
  /**
   * Required. The type of the data.
   *
   * @var string
   */
  public $type;
  /**
   * Optional. Indicate the items in the array must be unique. Only applies to
   * TYPE.ARRAY.
   *
   * @var bool
   */
  public $uniqueItems;

  /**
   * Optional. Can either be a boolean or an object, controls the presence of
   * additional properties.
   *
   * @param Schema $additionalProperties
   */
  public function setAdditionalProperties(Schema $additionalProperties)
  {
    $this->additionalProperties = $additionalProperties;
  }
  /**
   * @return Schema
   */
  public function getAdditionalProperties()
  {
    return $this->additionalProperties;
  }
  /**
   * Optional. The value should be validated against any (one or more) of the
   * subschemas in the list.
   *
   * @param Schema[] $anyOf
   */
  public function setAnyOf($anyOf)
  {
    $this->anyOf = $anyOf;
  }
  /**
   * @return Schema[]
   */
  public function getAnyOf()
  {
    return $this->anyOf;
  }
  /**
   * Optional. Default value of the data.
   *
   * @param array $default
   */
  public function setDefault($default)
  {
    $this->default = $default;
  }
  /**
   * @return array
   */
  public function getDefault()
  {
    return $this->default;
  }
  /**
   * Optional. A map of definitions for use by `ref`. Only allowed at the root
   * of the schema.
   *
   * @param Schema[] $defs
   */
  public function setDefs($defs)
  {
    $this->defs = $defs;
  }
  /**
   * @return Schema[]
   */
  public function getDefs()
  {
    return $this->defs;
  }
  /**
   * Optional. The description of the data.
   *
   * @param string $description
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
   * Optional. Possible values of the element of primitive type with enum
   * format. Examples: 1. We can define direction as : {type:STRING,
   * format:enum, enum:["EAST", NORTH", "SOUTH", "WEST"]} 2. We can define
   * apartment number as : {type:INTEGER, format:enum, enum:["101", "201",
   * "301"]}
   *
   * @param string[] $enum
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
   * Optional. Schema of the elements of Type.ARRAY.
   *
   * @param Schema $items
   */
  public function setItems(Schema $items)
  {
    $this->items = $items;
  }
  /**
   * @return Schema
   */
  public function getItems()
  {
    return $this->items;
  }
  /**
   * Optional. Maximum number of the elements for Type.ARRAY.
   *
   * @param string $maxItems
   */
  public function setMaxItems($maxItems)
  {
    $this->maxItems = $maxItems;
  }
  /**
   * @return string
   */
  public function getMaxItems()
  {
    return $this->maxItems;
  }
  public function setMaximum($maximum)
  {
    $this->maximum = $maximum;
  }
  public function getMaximum()
  {
    return $this->maximum;
  }
  /**
   * Optional. Minimum number of the elements for Type.ARRAY.
   *
   * @param string $minItems
   */
  public function setMinItems($minItems)
  {
    $this->minItems = $minItems;
  }
  /**
   * @return string
   */
  public function getMinItems()
  {
    return $this->minItems;
  }
  public function setMinimum($minimum)
  {
    $this->minimum = $minimum;
  }
  public function getMinimum()
  {
    return $this->minimum;
  }
  /**
   * Optional. Indicates if the value may be null.
   *
   * @param bool $nullable
   */
  public function setNullable($nullable)
  {
    $this->nullable = $nullable;
  }
  /**
   * @return bool
   */
  public function getNullable()
  {
    return $this->nullable;
  }
  /**
   * Optional. Schemas of initial elements of Type.ARRAY.
   *
   * @param Schema[] $prefixItems
   */
  public function setPrefixItems($prefixItems)
  {
    $this->prefixItems = $prefixItems;
  }
  /**
   * @return Schema[]
   */
  public function getPrefixItems()
  {
    return $this->prefixItems;
  }
  /**
   * Optional. Properties of Type.OBJECT.
   *
   * @param Schema[] $properties
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return Schema[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * Optional. Allows indirect references between schema nodes. The value should
   * be a valid reference to a child of the root `defs`. For example, the
   * following schema defines a reference to a schema node named "Pet": type:
   * object properties: pet: ref: #/defs/Pet defs: Pet: type: object properties:
   * name: type: string The value of the "pet" property is a reference to the
   * schema node named "Pet". See details in https://json-
   * schema.org/understanding-json-schema/structuring.
   *
   * @param string $ref
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
   * Optional. Required properties of Type.OBJECT.
   *
   * @param string[] $required
   */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /**
   * @return string[]
   */
  public function getRequired()
  {
    return $this->required;
  }
  /**
   * Optional. The title of the schema.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * Required. The type of the data.
   *
   * Accepted values: TYPE_UNSPECIFIED, STRING, INTEGER, NUMBER, BOOLEAN,
   * OBJECT, ARRAY
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Optional. Indicate the items in the array must be unique. Only applies to
   * TYPE.ARRAY.
   *
   * @param bool $uniqueItems
   */
  public function setUniqueItems($uniqueItems)
  {
    $this->uniqueItems = $uniqueItems;
  }
  /**
   * @return bool
   */
  public function getUniqueItems()
  {
    return $this->uniqueItems;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Schema::class, 'Google_Service_CustomerEngagementSuite_Schema');
