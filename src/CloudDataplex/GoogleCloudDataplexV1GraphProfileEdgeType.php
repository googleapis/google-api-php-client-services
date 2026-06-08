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

class GoogleCloudDataplexV1GraphProfileEdgeType extends \Google\Collection
{
  protected $collection_key = 'foreignKeys';
  /**
   * Output only. Description of the edge type.
   *
   * @var string
   */
  public $description;
  protected $extractionHintsType = GoogleCloudDataplexV1GraphProfileEdgeTypeExtractionHints::class;
  protected $extractionHintsDataType = '';
  protected $fieldsType = GoogleCloudDataplexV1GraphProfileField::class;
  protected $fieldsDataType = 'array';
  protected $foreignKeysType = GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKey::class;
  protected $foreignKeysDataType = 'array';
  /**
   * Output only. Name of the edge type.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Source node type.
   *
   * @var string
   */
  public $sourceNodeType;
  /**
   * Output only. Target node type.
   *
   * @var string
   */
  public $targetNodeType;

  /**
   * Output only. Description of the edge type.
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
   * Output only. Extraction hints for the edge.
   *
   * @param GoogleCloudDataplexV1GraphProfileEdgeTypeExtractionHints $extractionHints
   */
  public function setExtractionHints(GoogleCloudDataplexV1GraphProfileEdgeTypeExtractionHints $extractionHints)
  {
    $this->extractionHints = $extractionHints;
  }
  /**
   * @return GoogleCloudDataplexV1GraphProfileEdgeTypeExtractionHints
   */
  public function getExtractionHints()
  {
    return $this->extractionHints;
  }
  /**
   * Output only. Fields of the edge type.
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
   * Output only. Defines the Foreign Key constraints for the edge.
   *
   * @param GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKey[] $foreignKeys
   */
  public function setForeignKeys($foreignKeys)
  {
    $this->foreignKeys = $foreignKeys;
  }
  /**
   * @return GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKey[]
   */
  public function getForeignKeys()
  {
    return $this->foreignKeys;
  }
  /**
   * Output only. Name of the edge type.
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
   * Output only. Source node type.
   *
   * @param string $sourceNodeType
   */
  public function setSourceNodeType($sourceNodeType)
  {
    $this->sourceNodeType = $sourceNodeType;
  }
  /**
   * @return string
   */
  public function getSourceNodeType()
  {
    return $this->sourceNodeType;
  }
  /**
   * Output only. Target node type.
   *
   * @param string $targetNodeType
   */
  public function setTargetNodeType($targetNodeType)
  {
    $this->targetNodeType = $targetNodeType;
  }
  /**
   * @return string
   */
  public function getTargetNodeType()
  {
    return $this->targetNodeType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1GraphProfileEdgeType::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1GraphProfileEdgeType');
