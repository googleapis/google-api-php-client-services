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

class GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths extends \Google\Collection
{
  protected $collection_key = 'paths';
  /**
   * Output only. An ordered set of Paths to fields within the schema of the
   * table. For fields nested within a top level field of type record, use '.'
   * to separate field names. Examples: Top level field - top_level Nested field
   * - top_level.child.sub_field
   *
   * @var string[]
   */
  public $paths;
  /**
   * Output only. The service-qualified full resource name of the table Ex: //bi
   * gquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_
   * ID
   *
   * @var string
   */
  public $tableFqn;

  /**
   * Output only. An ordered set of Paths to fields within the schema of the
   * table. For fields nested within a top level field of type record, use '.'
   * to separate field names. Examples: Top level field - top_level Nested field
   * - top_level.child.sub_field
   *
   * @param string[] $paths
   */
  public function setPaths($paths)
  {
    $this->paths = $paths;
  }
  /**
   * @return string[]
   */
  public function getPaths()
  {
    return $this->paths;
  }
  /**
   * Output only. The service-qualified full resource name of the table Ex: //bi
   * gquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_
   * ID
   *
   * @param string $tableFqn
   */
  public function setTableFqn($tableFqn)
  {
    $this->tableFqn = $tableFqn;
  }
  /**
   * @return string
   */
  public function getTableFqn()
  {
    return $this->tableFqn;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDocumentationResultSchemaRelationshipSchemaPaths');
