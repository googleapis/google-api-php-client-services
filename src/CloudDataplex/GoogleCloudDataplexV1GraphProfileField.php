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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1GraphProfileField extends \Google\Collection
{
  /**
   * Unspecified metadata type.
   */
  public const METADATA_TYPE_METADATA_TYPE_UNSPECIFIED = 'METADATA_TYPE_UNSPECIFIED';
  /**
   * Boolean type.
   */
  public const METADATA_TYPE_BOOLEAN = 'BOOLEAN';
  /**
   * Numeric type.
   */
  public const METADATA_TYPE_NUMBER = 'NUMBER';
  /**
   * String type.
   */
  public const METADATA_TYPE_STRING = 'STRING';
  /**
   * Bytes type.
   */
  public const METADATA_TYPE_BYTES = 'BYTES';
  /**
   * Date and time type.
   */
  public const METADATA_TYPE_DATETIME = 'DATETIME';
  /**
   * Timestamp type.
   */
  public const METADATA_TYPE_TIMESTAMP = 'TIMESTAMP';
  /**
   * Geospatial type.
   */
  public const METADATA_TYPE_GEOSPATIAL = 'GEOSPATIAL';
  /**
   * Struct (record) type.
   */
  public const METADATA_TYPE_STRUCT = 'STRUCT';
  /**
   * Other types not covered above.
   */
  public const METADATA_TYPE_OTHER = 'OTHER';
  /**
   * Unspecified mode.
   */
  public const MODE_MODE_UNSPECIFIED = 'MODE_UNSPECIFIED';
  /**
   * Field can be null.
   */
  public const MODE_NULLABLE = 'NULLABLE';
  /**
   * Field can be repeated.
   */
  public const MODE_REPEATED = 'REPEATED';
  /**
   * Field is required.
   */
  public const MODE_REQUIRED = 'REQUIRED';
  protected $collection_key = 'fields';
  /**
   * Output only. The data type of the field, e.g., STRING, INTEGER, DATE.
   *
   * @var string
   */
  public $dataType;
  /**
   * Output only. Description of the field.
   *
   * @var string
   */
  public $description;
  protected $extractionHintsType = GoogleCloudDataplexV1GraphProfileFieldExtractionHints::class;
  protected $extractionHintsDataType = '';
  protected $fieldsType = GoogleCloudDataplexV1GraphProfileField::class;
  protected $fieldsDataType = 'array';
  /**
   * Output only. The mapped metadata type.
   *
   * @var string
   */
  public $metadataType;
  /**
   * Output only. The mode of the field.
   *
   * @var string
   */
  public $mode;
  /**
   * Output only. Name of the field.
   *
   * @var string
   */
  public $name;

  /**
   * Output only. The data type of the field, e.g., STRING, INTEGER, DATE.
   *
   * @param string $dataType
   */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /**
   * @return string
   */
  public function getDataType()
  {
    return $this->dataType;
  }
  /**
   * Output only. Description of the field.
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
   * Output only. Extraction hints for the field.
   *
   * @param GoogleCloudDataplexV1GraphProfileFieldExtractionHints $extractionHints
   */
  public function setExtractionHints(GoogleCloudDataplexV1GraphProfileFieldExtractionHints $extractionHints)
  {
    $this->extractionHints = $extractionHints;
  }
  /**
   * @return GoogleCloudDataplexV1GraphProfileFieldExtractionHints
   */
  public function getExtractionHints()
  {
    return $this->extractionHints;
  }
  /**
   * Output only. Sub-fields of this field (for STRUCT types).
   *
   * @param GoogleCloudDataplexV1GraphProfileField[] $fields
   */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /**
   * @return GoogleCloudDataplexV1GraphProfileField[]
   */
  public function getFields()
  {
    return $this->fields;
  }
  /**
   * Output only. The mapped metadata type.
   *
   * Accepted values: METADATA_TYPE_UNSPECIFIED, BOOLEAN, NUMBER, STRING, BYTES,
   * DATETIME, TIMESTAMP, GEOSPATIAL, STRUCT, OTHER
   *
   * @param self::METADATA_TYPE_* $metadataType
   */
  public function setMetadataType($metadataType)
  {
    $this->metadataType = $metadataType;
  }
  /**
   * @return self::METADATA_TYPE_*
   */
  public function getMetadataType()
  {
    return $this->metadataType;
  }
  /**
   * Output only. The mode of the field.
   *
   * Accepted values: MODE_UNSPECIFIED, NULLABLE, REPEATED, REQUIRED
   *
   * @param self::MODE_* $mode
   */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /**
   * @return self::MODE_*
   */
  public function getMode()
  {
    return $this->mode;
  }
  /**
   * Output only. Name of the field.
   *
   * @param string $name
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1GraphProfileField::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1GraphProfileField');
