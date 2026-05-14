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

namespace Google\Service\Connectors;

class JsonSchema extends \Google\Collection
{
  /**
   * Datatype unspecified.
   */
  public const JDBC_TYPE_DATA_TYPE_UNSPECIFIED = 'DATA_TYPE_UNSPECIFIED';
  /**
   * Deprecated Int type, use INTEGER type instead.
   *
   * @deprecated
   */
  public const JDBC_TYPE_INT = 'INT';
  /**
   * Small int type.
   */
  public const JDBC_TYPE_SMALLINT = 'SMALLINT';
  /**
   * Double type.
   */
  public const JDBC_TYPE_DOUBLE = 'DOUBLE';
  /**
   * Date type.
   */
  public const JDBC_TYPE_DATE = 'DATE';
  /**
   * Deprecated Datetime type.
   *
   * @deprecated
   */
  public const JDBC_TYPE_DATETIME = 'DATETIME';
  /**
   * Time type.
   */
  public const JDBC_TYPE_TIME = 'TIME';
  /**
   * Deprecated string type, use VARCHAR type instead.
   *
   * @deprecated
   */
  public const JDBC_TYPE_STRING = 'STRING';
  /**
   * Deprecated Long type, use BIGINT type instead.
   *
   * @deprecated
   */
  public const JDBC_TYPE_LONG = 'LONG';
  /**
   * Boolean type.
   */
  public const JDBC_TYPE_BOOLEAN = 'BOOLEAN';
  /**
   * Decimal type.
   */
  public const JDBC_TYPE_DECIMAL = 'DECIMAL';
  /**
   * Deprecated UUID type, use VARCHAR instead.
   *
   * @deprecated
   */
  public const JDBC_TYPE_UUID = 'UUID';
  /**
   * Blob type.
   */
  public const JDBC_TYPE_BLOB = 'BLOB';
  /**
   * Bit type.
   */
  public const JDBC_TYPE_BIT = 'BIT';
  /**
   * Tiny int type.
   */
  public const JDBC_TYPE_TINYINT = 'TINYINT';
  /**
   * Integer type.
   */
  public const JDBC_TYPE_INTEGER = 'INTEGER';
  /**
   * Big int type.
   */
  public const JDBC_TYPE_BIGINT = 'BIGINT';
  /**
   * Float type.
   */
  public const JDBC_TYPE_FLOAT = 'FLOAT';
  /**
   * Real type.
   */
  public const JDBC_TYPE_REAL = 'REAL';
  /**
   * Numeric type.
   */
  public const JDBC_TYPE_NUMERIC = 'NUMERIC';
  /**
   * Char type.
   */
  public const JDBC_TYPE_CHAR = 'CHAR';
  /**
   * Varchar type.
   */
  public const JDBC_TYPE_VARCHAR = 'VARCHAR';
  /**
   * Long varchar type.
   */
  public const JDBC_TYPE_LONGVARCHAR = 'LONGVARCHAR';
  /**
   * Timestamp type.
   */
  public const JDBC_TYPE_TIMESTAMP = 'TIMESTAMP';
  /**
   * Nchar type.
   */
  public const JDBC_TYPE_NCHAR = 'NCHAR';
  /**
   * Nvarchar type.
   */
  public const JDBC_TYPE_NVARCHAR = 'NVARCHAR';
  /**
   * Long Nvarchar type.
   */
  public const JDBC_TYPE_LONGNVARCHAR = 'LONGNVARCHAR';
  /**
   * Null type.
   */
  public const JDBC_TYPE_NULL = 'NULL';
  /**
   * Other type.
   */
  public const JDBC_TYPE_OTHER = 'OTHER';
  /**
   * Java object type.
   */
  public const JDBC_TYPE_JAVA_OBJECT = 'JAVA_OBJECT';
  /**
   * Distinct type keyword.
   */
  public const JDBC_TYPE_DISTINCT = 'DISTINCT';
  /**
   * Struct type.
   */
  public const JDBC_TYPE_STRUCT = 'STRUCT';
  /**
   * Array type.
   */
  public const JDBC_TYPE_ARRAY = 'ARRAY';
  /**
   * Clob type.
   */
  public const JDBC_TYPE_CLOB = 'CLOB';
  /**
   * Ref type.
   */
  public const JDBC_TYPE_REF = 'REF';
  /**
   * Datalink type.
   */
  public const JDBC_TYPE_DATALINK = 'DATALINK';
  /**
   * Row ID type.
   */
  public const JDBC_TYPE_ROWID = 'ROWID';
  /**
   * Binary type.
   */
  public const JDBC_TYPE_BINARY = 'BINARY';
  /**
   * Varbinary type.
   */
  public const JDBC_TYPE_VARBINARY = 'VARBINARY';
  /**
   * Long Varbinary type.
   */
  public const JDBC_TYPE_LONGVARBINARY = 'LONGVARBINARY';
  /**
   * Nclob type.
   */
  public const JDBC_TYPE_NCLOB = 'NCLOB';
  /**
   * SQLXML type.
   */
  public const JDBC_TYPE_SQLXML = 'SQLXML';
  /**
   * Ref_cursor type.
   */
  public const JDBC_TYPE_REF_CURSOR = 'REF_CURSOR';
  /**
   * Time with timezone type.
   */
  public const JDBC_TYPE_TIME_WITH_TIMEZONE = 'TIME_WITH_TIMEZONE';
  /**
   * Timestamp with timezone type.
   */
  public const JDBC_TYPE_TIMESTAMP_WITH_TIMEZONE = 'TIMESTAMP_WITH_TIMEZONE';
  protected $collection_key = 'type';
  protected $internal_gapi_mappings = [
        "comment" => "$comment",
        "defs" => "$defs",
        "id" => "$id",
        "ref" => "$ref",
        "schema" => "$schema",
  ];
  /**
   * A comment on the schema.
   *
   * @var string
   */
  public $comment;
  protected $defsType = JsonSchema::class;
  protected $defsDataType = 'map';
  /**
   * The URI defining the core schema meta-schema.
   *
   * @var string
   */
  public $id;
  /**
   * A reference to another schema.
   *
   * @var string
   */
  public $ref;
  /**
   * The URI defining the schema.
   *
   * @var string
   */
  public $schema;
  /**
   * Additional details apart from standard json schema fields, this gives
   * flexibility to store metadata about the schema
   *
   * @var array[]
   */
  public $additionalDetails;
  protected $additionalItemsType = JsonSchema::class;
  protected $additionalItemsDataType = '';
  protected $additionalPropertiesType = JsonSchema::class;
  protected $additionalPropertiesDataType = '';
  protected $allOfType = JsonSchema::class;
  protected $allOfDataType = 'array';
  protected $anyOfType = JsonSchema::class;
  protected $anyOfDataType = 'array';
  /**
   * Const value that the data must match.
   *
   * @var array
   */
  public $const;
  protected $containsType = JsonSchema::class;
  protected $containsDataType = '';
  /**
   * Encoding of the content.
   *
   * @var string
   */
  public $contentEncoding;
  /**
   * Media type of the content.
   *
   * @var string
   */
  public $contentMediaType;
  /**
   * The default value of the field or object described by this schema.
   *
   * @var array
   */
  public $default;
  protected $definitionsType = JsonSchema::class;
  protected $definitionsDataType = 'map';
  /**
   * Dependencies for the schema.
   *
   * @var array[]
   */
  public $dependencies;
  /**
   * A description of this schema.
   *
   * @var string
   */
  public $description;
  protected $elseType = JsonSchema::class;
  protected $elseDataType = '';
  /**
   * Possible values for an enumeration. This works in conjunction with `type`
   * to represent types with a fixed set of legal values
   *
   * @var array[]
   */
  public $enum;
  /**
   * Examples of the value.
   *
   * @var array[]
   */
  public $examples;
  /**
   * Whether the maximum number value is exclusive.
   *
   * @var array
   */
  public $exclusiveMaximum;
  /**
   * Whether the minimum number value is exclusive.
   *
   * @var array
   */
  public $exclusiveMinimum;
  /**
   * Format of the value as per https://json-schema.org/understanding-json-
   * schema/reference/string.html#format
   *
   * @var string
   */
  public $format;
  protected $ifType = JsonSchema::class;
  protected $ifDataType = '';
  protected $itemsType = JsonSchema::class;
  protected $itemsDataType = '';
  /**
   * JDBC datatype of the field.
   *
   * @var string
   */
  public $jdbcType;
  /**
   * Maximum number of items in the array field.
   *
   * @var int
   */
  public $maxItems;
  /**
   * Maximum length of the string field.
   *
   * @var int
   */
  public $maxLength;
  /**
   * Maximum number of properties.
   *
   * @var int
   */
  public $maxProperties;
  /**
   * Maximum value of the number field.
   *
   * @var array
   */
  public $maximum;
  /**
   * Minimum number of items in the array field.
   *
   * @var int
   */
  public $minItems;
  /**
   * Minimum length of the string field.
   *
   * @var int
   */
  public $minLength;
  /**
   * Minimum number of properties.
   *
   * @var int
   */
  public $minProperties;
  /**
   * Minimum value of the number field.
   *
   * @var array
   */
  public $minimum;
  /**
   * Number must be a multiple of this value.
   *
   * @var 
   */
  public $multipleOf;
  protected $notType = JsonSchema::class;
  protected $notDataType = '';
  protected $oneOfType = JsonSchema::class;
  protected $oneOfDataType = 'array';
  /**
   * Regex pattern of the string field. This is a string value that describes
   * the regular expression that the string value should match.
   *
   * @var string
   */
  public $pattern;
  protected $patternPropertiesType = JsonSchema::class;
  protected $patternPropertiesDataType = 'map';
  protected $propertiesType = JsonSchema::class;
  protected $propertiesDataType = 'map';
  protected $propertyNamesType = JsonSchema::class;
  protected $propertyNamesDataType = '';
  /**
   * Whether the value is read-only.
   *
   * @var bool
   */
  public $readOnly;
  /**
   * Whether this property is required.
   *
   * @var string[]
   */
  public $required;
  protected $thenType = JsonSchema::class;
  protected $thenDataType = '';
  /**
   * A title of the schema.
   *
   * @var string
   */
  public $title;
  /**
   * JSON Schema Validation: A Vocabulary for Structural Validation of JSON
   *
   * @var string[]
   */
  public $type;
  /**
   * Whether the items in the array field are unique.
   *
   * @var bool
   */
  public $uniqueItems;
  /**
   * Whether the value is write-only.
   *
   * @var bool
   */
  public $writeOnly;

  /**
   * A comment on the schema.
   *
   * @param string $comment
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /**
   * @return string
   */
  public function getComment()
  {
    return $this->comment;
  }
  /**
   * Definitions for the schema.
   *
   * @param JsonSchema[] $defs
   */
  public function setDefs($defs)
  {
    $this->defs = $defs;
  }
  /**
   * @return JsonSchema[]
   */
  public function getDefs()
  {
    return $this->defs;
  }
  /**
   * The URI defining the core schema meta-schema.
   *
   * @param string $id
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
   * A reference to another schema.
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
   * The URI defining the schema.
   *
   * @param string $schema
   */
  public function setSchema($schema)
  {
    $this->schema = $schema;
  }
  /**
   * @return string
   */
  public function getSchema()
  {
    return $this->schema;
  }
  /**
   * Additional details apart from standard json schema fields, this gives
   * flexibility to store metadata about the schema
   *
   * @param array[] $additionalDetails
   */
  public function setAdditionalDetails($additionalDetails)
  {
    $this->additionalDetails = $additionalDetails;
  }
  /**
   * @return array[]
   */
  public function getAdditionalDetails()
  {
    return $this->additionalDetails;
  }
  /**
   * Schema for additional items.
   *
   * @param JsonSchema $additionalItems
   */
  public function setAdditionalItems(JsonSchema $additionalItems)
  {
    $this->additionalItems = $additionalItems;
  }
  /**
   * @return JsonSchema
   */
  public function getAdditionalItems()
  {
    return $this->additionalItems;
  }
  /**
   * Schema for additional properties.
   *
   * @param JsonSchema $additionalProperties
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
   * Schema that must be valid against all of the sub-schemas.
   *
   * @param JsonSchema[] $allOf
   */
  public function setAllOf($allOf)
  {
    $this->allOf = $allOf;
  }
  /**
   * @return JsonSchema[]
   */
  public function getAllOf()
  {
    return $this->allOf;
  }
  /**
   * Schema that must be valid against at least one of the sub-schemas.
   *
   * @param JsonSchema[] $anyOf
   */
  public function setAnyOf($anyOf)
  {
    $this->anyOf = $anyOf;
  }
  /**
   * @return JsonSchema[]
   */
  public function getAnyOf()
  {
    return $this->anyOf;
  }
  /**
   * Const value that the data must match.
   *
   * @param array $const
   */
  public function setConst($const)
  {
    $this->const = $const;
  }
  /**
   * @return array
   */
  public function getConst()
  {
    return $this->const;
  }
  /**
   * Schema that applies to at least one item in an array.
   *
   * @param JsonSchema $contains
   */
  public function setContains(JsonSchema $contains)
  {
    $this->contains = $contains;
  }
  /**
   * @return JsonSchema
   */
  public function getContains()
  {
    return $this->contains;
  }
  /**
   * Encoding of the content.
   *
   * @param string $contentEncoding
   */
  public function setContentEncoding($contentEncoding)
  {
    $this->contentEncoding = $contentEncoding;
  }
  /**
   * @return string
   */
  public function getContentEncoding()
  {
    return $this->contentEncoding;
  }
  /**
   * Media type of the content.
   *
   * @param string $contentMediaType
   */
  public function setContentMediaType($contentMediaType)
  {
    $this->contentMediaType = $contentMediaType;
  }
  /**
   * @return string
   */
  public function getContentMediaType()
  {
    return $this->contentMediaType;
  }
  /**
   * The default value of the field or object described by this schema.
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
   * Definitions for the schema.
   *
   * @param JsonSchema[] $definitions
   */
  public function setDefinitions($definitions)
  {
    $this->definitions = $definitions;
  }
  /**
   * @return JsonSchema[]
   */
  public function getDefinitions()
  {
    return $this->definitions;
  }
  /**
   * Dependencies for the schema.
   *
   * @param array[] $dependencies
   */
  public function setDependencies($dependencies)
  {
    $this->dependencies = $dependencies;
  }
  /**
   * @return array[]
   */
  public function getDependencies()
  {
    return $this->dependencies;
  }
  /**
   * A description of this schema.
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
   * Schema that must be valid if the "if" schema is invalid.
   *
   * @param JsonSchema $else
   */
  public function setElse(JsonSchema $else)
  {
    $this->else = $else;
  }
  /**
   * @return JsonSchema
   */
  public function getElse()
  {
    return $this->else;
  }
  /**
   * Possible values for an enumeration. This works in conjunction with `type`
   * to represent types with a fixed set of legal values
   *
   * @param array[] $enum
   */
  public function setEnum($enum)
  {
    $this->enum = $enum;
  }
  /**
   * @return array[]
   */
  public function getEnum()
  {
    return $this->enum;
  }
  /**
   * Examples of the value.
   *
   * @param array[] $examples
   */
  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  /**
   * @return array[]
   */
  public function getExamples()
  {
    return $this->examples;
  }
  /**
   * Whether the maximum number value is exclusive.
   *
   * @param array $exclusiveMaximum
   */
  public function setExclusiveMaximum($exclusiveMaximum)
  {
    $this->exclusiveMaximum = $exclusiveMaximum;
  }
  /**
   * @return array
   */
  public function getExclusiveMaximum()
  {
    return $this->exclusiveMaximum;
  }
  /**
   * Whether the minimum number value is exclusive.
   *
   * @param array $exclusiveMinimum
   */
  public function setExclusiveMinimum($exclusiveMinimum)
  {
    $this->exclusiveMinimum = $exclusiveMinimum;
  }
  /**
   * @return array
   */
  public function getExclusiveMinimum()
  {
    return $this->exclusiveMinimum;
  }
  /**
   * Format of the value as per https://json-schema.org/understanding-json-
   * schema/reference/string.html#format
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
   * Schema that must be valid if the "if" schema is valid.
   *
   * @param JsonSchema $if
   */
  public function setIf(JsonSchema $if)
  {
    $this->if = $if;
  }
  /**
   * @return JsonSchema
   */
  public function getIf()
  {
    return $this->if;
  }
  /**
   * Schema that applies to array values, applicable only if this is of type
   * `array`.
   *
   * @param JsonSchema $items
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
   * JDBC datatype of the field.
   *
   * Accepted values: DATA_TYPE_UNSPECIFIED, INT, SMALLINT, DOUBLE, DATE,
   * DATETIME, TIME, STRING, LONG, BOOLEAN, DECIMAL, UUID, BLOB, BIT, TINYINT,
   * INTEGER, BIGINT, FLOAT, REAL, NUMERIC, CHAR, VARCHAR, LONGVARCHAR,
   * TIMESTAMP, NCHAR, NVARCHAR, LONGNVARCHAR, NULL, OTHER, JAVA_OBJECT,
   * DISTINCT, STRUCT, ARRAY, CLOB, REF, DATALINK, ROWID, BINARY, VARBINARY,
   * LONGVARBINARY, NCLOB, SQLXML, REF_CURSOR, TIME_WITH_TIMEZONE,
   * TIMESTAMP_WITH_TIMEZONE
   *
   * @param self::JDBC_TYPE_* $jdbcType
   */
  public function setJdbcType($jdbcType)
  {
    $this->jdbcType = $jdbcType;
  }
  /**
   * @return self::JDBC_TYPE_*
   */
  public function getJdbcType()
  {
    return $this->jdbcType;
  }
  /**
   * Maximum number of items in the array field.
   *
   * @param int $maxItems
   */
  public function setMaxItems($maxItems)
  {
    $this->maxItems = $maxItems;
  }
  /**
   * @return int
   */
  public function getMaxItems()
  {
    return $this->maxItems;
  }
  /**
   * Maximum length of the string field.
   *
   * @param int $maxLength
   */
  public function setMaxLength($maxLength)
  {
    $this->maxLength = $maxLength;
  }
  /**
   * @return int
   */
  public function getMaxLength()
  {
    return $this->maxLength;
  }
  /**
   * Maximum number of properties.
   *
   * @param int $maxProperties
   */
  public function setMaxProperties($maxProperties)
  {
    $this->maxProperties = $maxProperties;
  }
  /**
   * @return int
   */
  public function getMaxProperties()
  {
    return $this->maxProperties;
  }
  /**
   * Maximum value of the number field.
   *
   * @param array $maximum
   */
  public function setMaximum($maximum)
  {
    $this->maximum = $maximum;
  }
  /**
   * @return array
   */
  public function getMaximum()
  {
    return $this->maximum;
  }
  /**
   * Minimum number of items in the array field.
   *
   * @param int $minItems
   */
  public function setMinItems($minItems)
  {
    $this->minItems = $minItems;
  }
  /**
   * @return int
   */
  public function getMinItems()
  {
    return $this->minItems;
  }
  /**
   * Minimum length of the string field.
   *
   * @param int $minLength
   */
  public function setMinLength($minLength)
  {
    $this->minLength = $minLength;
  }
  /**
   * @return int
   */
  public function getMinLength()
  {
    return $this->minLength;
  }
  /**
   * Minimum number of properties.
   *
   * @param int $minProperties
   */
  public function setMinProperties($minProperties)
  {
    $this->minProperties = $minProperties;
  }
  /**
   * @return int
   */
  public function getMinProperties()
  {
    return $this->minProperties;
  }
  /**
   * Minimum value of the number field.
   *
   * @param array $minimum
   */
  public function setMinimum($minimum)
  {
    $this->minimum = $minimum;
  }
  /**
   * @return array
   */
  public function getMinimum()
  {
    return $this->minimum;
  }
  public function setMultipleOf($multipleOf)
  {
    $this->multipleOf = $multipleOf;
  }
  public function getMultipleOf()
  {
    return $this->multipleOf;
  }
  /**
   * Schema that must not be valid.
   *
   * @param JsonSchema $not
   */
  public function setNot(JsonSchema $not)
  {
    $this->not = $not;
  }
  /**
   * @return JsonSchema
   */
  public function getNot()
  {
    return $this->not;
  }
  /**
   * Schema that must be valid against at least one of the sub-schemas.
   *
   * @param JsonSchema[] $oneOf
   */
  public function setOneOf($oneOf)
  {
    $this->oneOf = $oneOf;
  }
  /**
   * @return JsonSchema[]
   */
  public function getOneOf()
  {
    return $this->oneOf;
  }
  /**
   * Regex pattern of the string field. This is a string value that describes
   * the regular expression that the string value should match.
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
   * Pattern properties for the schema.
   *
   * @param JsonSchema[] $patternProperties
   */
  public function setPatternProperties($patternProperties)
  {
    $this->patternProperties = $patternProperties;
  }
  /**
   * @return JsonSchema[]
   */
  public function getPatternProperties()
  {
    return $this->patternProperties;
  }
  /**
   * The child schemas, applicable only if this is of type `object`. The key is
   * the name of the property and the value is the json schema that describes
   * that property
   *
   * @param JsonSchema[] $properties
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
   * Schema for property names.
   *
   * @param JsonSchema $propertyNames
   */
  public function setPropertyNames(JsonSchema $propertyNames)
  {
    $this->propertyNames = $propertyNames;
  }
  /**
   * @return JsonSchema
   */
  public function getPropertyNames()
  {
    return $this->propertyNames;
  }
  /**
   * Whether the value is read-only.
   *
   * @param bool $readOnly
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
   * Whether this property is required.
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
   * Schema that must be valid if the "if" schema is valid.
   *
   * @param JsonSchema $then
   */
  public function setThen(JsonSchema $then)
  {
    $this->then = $then;
  }
  /**
   * @return JsonSchema
   */
  public function getThen()
  {
    return $this->then;
  }
  /**
   * A title of the schema.
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
   * JSON Schema Validation: A Vocabulary for Structural Validation of JSON
   *
   * @param string[] $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string[]
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Whether the items in the array field are unique.
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
  /**
   * Whether the value is write-only.
   *
   * @param bool $writeOnly
   */
  public function setWriteOnly($writeOnly)
  {
    $this->writeOnly = $writeOnly;
  }
  /**
   * @return bool
   */
  public function getWriteOnly()
  {
    return $this->writeOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JsonSchema::class, 'Google_Service_Connectors_JsonSchema');
