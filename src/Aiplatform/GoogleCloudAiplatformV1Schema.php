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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1Schema extends \Google\Collection
{
  /**
   * Not specified, should not be used.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * OpenAPI string type
   */
  public const TYPE_STRING = 'STRING';
  /**
   * OpenAPI number type
   */
  public const TYPE_NUMBER = 'NUMBER';
  /**
   * OpenAPI integer type
   */
  public const TYPE_INTEGER = 'INTEGER';
  /**
   * OpenAPI boolean type
   */
  public const TYPE_BOOLEAN = 'BOOLEAN';
  /**
   * OpenAPI array type
   */
  public const TYPE_ARRAY = 'ARRAY';
  /**
   * OpenAPI object type
   */
  public const TYPE_OBJECT = 'OBJECT';
  /**
   * Null type
   */
  public const TYPE_NULL = 'NULL';
  protected $collection_key = 'required';
  /**
   * Optional. If `type` is `OBJECT`, specifies how to handle properties not
   * defined in `properties`. If it is a boolean `false`, no additional
   * properties are allowed. If it is a schema, additional properties are
   * allowed if they conform to the schema.
   *
   * @var array
   */
  public $additionalProperties;
  protected $anyOfType = GoogleCloudAiplatformV1Schema::class;
  protected $anyOfDataType = 'array';
  /**
   * Optional. Default value to use if the field is not specified.
   *
   * @var array
   */
  public $default;
  protected $defsType = GoogleCloudAiplatformV1Schema::class;
  protected $defsDataType = 'map';
  /**
   * Optional. Description of the schema.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Possible values of the field. This field can be used to restrict
   * a value to a fixed set of values. To mark a field as an enum, set `format`
   * to `enum` and provide the list of possible values in `enum`. For example:
   * 1. To define directions: `{type:STRING, format:enum, enum:["EAST", "NORTH",
   * "SOUTH", "WEST"]}` 2. To define apartment numbers: `{type:INTEGER,
   * format:enum, enum:["101", "201", "301"]}`
   *
   * @var string[]
   */
  public $enum;
  /**
   * Optional. Example of an instance of this schema.
   *
   * @var array
   */
  public $example;
  /**
   * Optional. The format of the data. For `NUMBER` type, format can be `float`
   * or `double`. For `INTEGER` type, format can be `int32` or `int64`. For
   * `STRING` type, format can be `email`, `byte`, `date`, `date-time`,
   * `password`, and other formats to further refine the data type.
   *
   * @var string
   */
  public $format;
  protected $itemsType = GoogleCloudAiplatformV1Schema::class;
  protected $itemsDataType = '';
  /**
   * Optional. If type is `ARRAY`, `max_items` specifies the maximum number of
   * items in an array.
   *
   * @var string
   */
  public $maxItems;
  /**
   * Optional. If type is `STRING`, `max_length` specifies the maximum length of
   * the string.
   *
   * @var string
   */
  public $maxLength;
  /**
   * Optional. If type is `OBJECT`, `max_properties` specifies the maximum
   * number of properties that can be provided.
   *
   * @var string
   */
  public $maxProperties;
  /**
   * Optional. If type is `INTEGER` or `NUMBER`, `maximum` specifies the maximum
   * allowed value.
   *
   * @var 
   */
  public $maximum;
  /**
   * Optional. If type is `ARRAY`, `min_items` specifies the minimum number of
   * items in an array.
   *
   * @var string
   */
  public $minItems;
  /**
   * Optional. If type is `STRING`, `min_length` specifies the minimum length of
   * the string.
   *
   * @var string
   */
  public $minLength;
  /**
   * Optional. If type is `OBJECT`, `min_properties` specifies the minimum
   * number of properties that can be provided.
   *
   * @var string
   */
  public $minProperties;
  /**
   * Optional. If type is `INTEGER` or `NUMBER`, `minimum` specifies the minimum
   * allowed value.
   *
   * @var 
   */
  public $minimum;
  /**
   * Optional. Indicates if the value of this field can be null.
   *
   * @var bool
   */
  public $nullable;
  /**
   * Optional. If type is `STRING`, `pattern` specifies a regular expression
   * that the string must match.
   *
   * @var string
   */
  public $pattern;
  protected $propertiesType = GoogleCloudAiplatformV1Schema::class;
  protected $propertiesDataType = 'map';
  /**
   * Optional. Order of properties displayed or used where order matters. This
   * is not a standard field in OpenAPI specification, but can be used to
   * control the order of properties.
   *
   * @var string[]
   */
  public $propertyOrdering;
  /**
   * Optional. Allows referencing another schema definition to use in place of
   * this schema. The value must be a valid reference to a schema in `defs`. For
   * example, the following schema defines a reference to a schema node named
   * "Pet": type: object properties: pet: ref: #/defs/Pet defs: Pet: type:
   * object properties: name: type: string The value of the "pet" property is a
   * reference to the schema node named "Pet". See details in https://json-
   * schema.org/understanding-json-schema/structuring
   *
   * @var string
   */
  public $ref;
  /**
   * Optional. If type is `OBJECT`, `required` lists the names of properties
   * that must be present.
   *
   * @var string[]
   */
  public $required;
  /**
   * Optional. Title for the schema.
   *
   * @var string
   */
  public $title;
  /**
   * Optional. Data type of the schema field.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. If `type` is `OBJECT`, specifies how to handle properties not
   * defined in `properties`. If it is a boolean `false`, no additional
   * properties are allowed. If it is a schema, additional properties are
   * allowed if they conform to the schema.
   *
   * @param array $additionalProperties
   */
  public function setAdditionalProperties($additionalProperties)
  {
    $this->additionalProperties = $additionalProperties;
  }
  /**
   * @return array
   */
  public function getAdditionalProperties()
  {
    return $this->additionalProperties;
  }
  /**
   * Optional. The instance must be valid against any (one or more) of the
   * subschemas listed in `any_of`.
   *
   * @param GoogleCloudAiplatformV1Schema[] $anyOf
   */
  public function setAnyOf($anyOf)
  {
    $this->anyOf = $anyOf;
  }
  /**
   * @return GoogleCloudAiplatformV1Schema[]
   */
  public function getAnyOf()
  {
    return $this->anyOf;
  }
  /**
   * Optional. Default value to use if the field is not specified.
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
   * Optional. `defs` provides a map of schema definitions that can be reused by
   * `ref` elsewhere in the schema. Only allowed at root level of the schema.
   *
   * @param GoogleCloudAiplatformV1Schema[] $defs
   */
  public function setDefs($defs)
  {
    $this->defs = $defs;
  }
  /**
   * @return GoogleCloudAiplatformV1Schema[]
   */
  public function getDefs()
  {
    return $this->defs;
  }
  /**
   * Optional. Description of the schema.
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
   * Optional. Possible values of the field. This field can be used to restrict
   * a value to a fixed set of values. To mark a field as an enum, set `format`
   * to `enum` and provide the list of possible values in `enum`. For example:
   * 1. To define directions: `{type:STRING, format:enum, enum:["EAST", "NORTH",
   * "SOUTH", "WEST"]}` 2. To define apartment numbers: `{type:INTEGER,
   * format:enum, enum:["101", "201", "301"]}`
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
   * Optional. Example of an instance of this schema.
   *
   * @param array $example
   */
  public function setExample($example)
  {
    $this->example = $example;
  }
  /**
   * @return array
   */
  public function getExample()
  {
    return $this->example;
  }
  /**
   * Optional. The format of the data. For `NUMBER` type, format can be `float`
   * or `double`. For `INTEGER` type, format can be `int32` or `int64`. For
   * `STRING` type, format can be `email`, `byte`, `date`, `date-time`,
   * `password`, and other formats to further refine the data type.
   *
   * @param string $format
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
   * Optional. If type is `ARRAY`, `items` specifies the schema of elements in
   * the array.
   *
   * @param GoogleCloudAiplatformV1Schema $items
   */
  public function setItems(GoogleCloudAiplatformV1Schema $items)
  {
    $this->items = $items;
  }
  /**
   * @return GoogleCloudAiplatformV1Schema
   */
  public function getItems()
  {
    return $this->items;
  }
  /**
   * Optional. If type is `ARRAY`, `max_items` specifies the maximum number of
   * items in an array.
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
  /**
   * Optional. If type is `STRING`, `max_length` specifies the maximum length of
   * the string.
   *
   * @param string $maxLength
   */
  public function setMaxLength($maxLength)
  {
    $this->maxLength = $maxLength;
  }
  /**
   * @return string
   */
  public function getMaxLength()
  {
    return $this->maxLength;
  }
  /**
   * Optional. If type is `OBJECT`, `max_properties` specifies the maximum
   * number of properties that can be provided.
   *
   * @param string $maxProperties
   */
  public function setMaxProperties($maxProperties)
  {
    $this->maxProperties = $maxProperties;
  }
  /**
   * @return string
   */
  public function getMaxProperties()
  {
    return $this->maxProperties;
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
   * Optional. If type is `ARRAY`, `min_items` specifies the minimum number of
   * items in an array.
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
  /**
   * Optional. If type is `STRING`, `min_length` specifies the minimum length of
   * the string.
   *
   * @param string $minLength
   */
  public function setMinLength($minLength)
  {
    $this->minLength = $minLength;
  }
  /**
   * @return string
   */
  public function getMinLength()
  {
    return $this->minLength;
  }
  /**
   * Optional. If type is `OBJECT`, `min_properties` specifies the minimum
   * number of properties that can be provided.
   *
   * @param string $minProperties
   */
  public function setMinProperties($minProperties)
  {
    $this->minProperties = $minProperties;
  }
  /**
   * @return string
   */
  public function getMinProperties()
  {
    return $this->minProperties;
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
   * Optional. Indicates if the value of this field can be null.
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
   * Optional. If type is `STRING`, `pattern` specifies a regular expression
   * that the string must match.
   *
   * @param string $pattern
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
   * Optional. If type is `OBJECT`, `properties` is a map of property names to
   * schema definitions for each property of the object.
   *
   * @param GoogleCloudAiplatformV1Schema[] $properties
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return GoogleCloudAiplatformV1Schema[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * Optional. Order of properties displayed or used where order matters. This
   * is not a standard field in OpenAPI specification, but can be used to
   * control the order of properties.
   *
   * @param string[] $propertyOrdering
   */
  public function setPropertyOrdering($propertyOrdering)
  {
    $this->propertyOrdering = $propertyOrdering;
  }
  /**
   * @return string[]
   */
  public function getPropertyOrdering()
  {
    return $this->propertyOrdering;
  }
  /**
   * Optional. Allows referencing another schema definition to use in place of
   * this schema. The value must be a valid reference to a schema in `defs`. For
   * example, the following schema defines a reference to a schema node named
   * "Pet": type: object properties: pet: ref: #/defs/Pet defs: Pet: type:
   * object properties: name: type: string The value of the "pet" property is a
   * reference to the schema node named "Pet". See details in https://json-
   * schema.org/understanding-json-schema/structuring
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
   * Optional. If type is `OBJECT`, `required` lists the names of properties
   * that must be present.
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
   * Optional. Title for the schema.
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
   * Optional. Data type of the schema field.
   *
   * Accepted values: TYPE_UNSPECIFIED, STRING, NUMBER, INTEGER, BOOLEAN, ARRAY,
   * OBJECT, NULL
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1Schema::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1Schema');
