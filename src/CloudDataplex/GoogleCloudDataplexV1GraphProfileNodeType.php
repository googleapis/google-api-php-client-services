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

class GoogleCloudDataplexV1GraphProfileNodeType extends \Google\Collection
{
  protected $collection_key = 'primaryKeys';
  /**
   * Output only. Description of the node type.
   *
   * @var string
   */
  public $description;
  protected $extractionHintsType = GoogleCloudDataplexV1GraphProfileNodeTypeExtractionHints::class;
  protected $extractionHintsDataType = '';
  protected $fieldsType = GoogleCloudDataplexV1GraphProfileField::class;
  protected $fieldsDataType = 'array';
  /**
   * Output only. Name of the node type.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Field names forming the primary keys. The order in this array
   * defines the key's ordinal positions for composite keys.
   *
   * @var string[]
   */
  public $primaryKeys;

  /**
   * Output only. Description of the node type.
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
   * Output only. Extraction hints for the node.
   *
   * @param GoogleCloudDataplexV1GraphProfileNodeTypeExtractionHints $extractionHints
   */
  public function setExtractionHints(GoogleCloudDataplexV1GraphProfileNodeTypeExtractionHints $extractionHints)
  {
    $this->extractionHints = $extractionHints;
  }
  /**
   * @return GoogleCloudDataplexV1GraphProfileNodeTypeExtractionHints
   */
  public function getExtractionHints()
  {
    return $this->extractionHints;
  }
  /**
   * Output only. Fields of the node type.
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
   * Output only. Name of the node type.
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
  /**
   * Output only. Field names forming the primary keys. The order in this array
   * defines the key's ordinal positions for composite keys.
   *
   * @param string[] $primaryKeys
   */
  public function setPrimaryKeys($primaryKeys)
  {
    $this->primaryKeys = $primaryKeys;
  }
  /**
   * @return string[]
   */
  public function getPrimaryKeys()
  {
    return $this->primaryKeys;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1GraphProfileNodeType::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1GraphProfileNodeType');
