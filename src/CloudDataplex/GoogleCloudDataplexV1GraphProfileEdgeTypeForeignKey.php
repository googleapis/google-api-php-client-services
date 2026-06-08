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

class GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKey extends \Google\Collection
{
  protected $collection_key = 'fieldMappings';
  /**
   * Output only. Description of the foreign key.
   *
   * @var string
   */
  public $description;
  protected $fieldMappingsType = GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKeyFieldMapping::class;
  protected $fieldMappingsDataType = 'array';
  /**
   * Output only. Name of the foreign key constraint.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The node type this constraint references.
   *
   * @var string
   */
  public $referencedNodeType;

  /**
   * Output only. Description of the foreign key.
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
   * Output only. Field Mappings. Mappings between local fields and the fields
   * they reference in the referenced node type.
   *
   * @param GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKeyFieldMapping[] $fieldMappings
   */
  public function setFieldMappings($fieldMappings)
  {
    $this->fieldMappings = $fieldMappings;
  }
  /**
   * @return GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKeyFieldMapping[]
   */
  public function getFieldMappings()
  {
    return $this->fieldMappings;
  }
  /**
   * Output only. Name of the foreign key constraint.
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
   * Output only. The node type this constraint references.
   *
   * @param string $referencedNodeType
   */
  public function setReferencedNodeType($referencedNodeType)
  {
    $this->referencedNodeType = $referencedNodeType;
  }
  /**
   * @return string
   */
  public function getReferencedNodeType()
  {
    return $this->referencedNodeType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKey::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKey');
