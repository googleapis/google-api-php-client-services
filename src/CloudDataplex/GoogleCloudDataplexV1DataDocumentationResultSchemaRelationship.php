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

class GoogleCloudDataplexV1DataDocumentationResultSchemaRelationship extends \Google\Collection
{
  /**
   * The type of the schema relationship is unspecified.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Indicates a join relationship between the schema fields.
   */
  public const TYPE_SCHEMA_JOIN = 'SCHEMA_JOIN';
  protected $collection_key = 'sources';
  protected $leftSchemaPathsType = GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths::class;
  protected $leftSchemaPathsDataType = '';
  protected $rightSchemaPathsType = GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths::class;
  protected $rightSchemaPathsDataType = '';
  /**
   * Output only. Sources which generated the schema relation edge.
   *
   * @var string[]
   */
  public $sources;
  /**
   * Output only. The type of relationship between the schema paths.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. An ordered list of fields for the join from the first table.
   * The size of this list must be the same as right_schema_paths. Each field at
   * index i in this list must correspond to a field at the same index in the
   * right_schema_paths list.
   *
   * @param GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths $leftSchemaPaths
   */
  public function setLeftSchemaPaths(GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths $leftSchemaPaths)
  {
    $this->leftSchemaPaths = $leftSchemaPaths;
  }
  /**
   * @return GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths
   */
  public function getLeftSchemaPaths()
  {
    return $this->leftSchemaPaths;
  }
  /**
   * Output only. An ordered list of fields for the join from the second table.
   * The size of this list must be the same as left_schema_paths. Each field at
   * index i in this list must correspond to a field at the same index in the
   * left_schema_paths list.
   *
   * @param GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths $rightSchemaPaths
   */
  public function setRightSchemaPaths(GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths $rightSchemaPaths)
  {
    $this->rightSchemaPaths = $rightSchemaPaths;
  }
  /**
   * @return GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths
   */
  public function getRightSchemaPaths()
  {
    return $this->rightSchemaPaths;
  }
  /**
   * Output only. Sources which generated the schema relation edge.
   *
   * @param string[] $sources
   */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /**
   * @return string[]
   */
  public function getSources()
  {
    return $this->sources;
  }
  /**
   * Output only. The type of relationship between the schema paths.
   *
   * Accepted values: TYPE_UNSPECIFIED, SCHEMA_JOIN
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
class_alias(GoogleCloudDataplexV1DataDocumentationResultSchemaRelationship::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDocumentationResultSchemaRelationship');
