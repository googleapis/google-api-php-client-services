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

class GoogleCloudDataplexV1GraphProfile extends \Google\Collection
{
  protected $collection_key = 'nodeTypes';
  protected $edgeTypesType = GoogleCloudDataplexV1GraphProfileEdgeType::class;
  protected $edgeTypesDataType = 'array';
  protected $nodeTypesType = GoogleCloudDataplexV1GraphProfileNodeType::class;
  protected $nodeTypesDataType = 'array';

  /**
   * Output only. Edge types.
   *
   * @param GoogleCloudDataplexV1GraphProfileEdgeType[] $edgeTypes
   */
  public function setEdgeTypes($edgeTypes)
  {
    $this->edgeTypes = $edgeTypes;
  }
  /**
   * @return GoogleCloudDataplexV1GraphProfileEdgeType[]
   */
  public function getEdgeTypes()
  {
    return $this->edgeTypes;
  }
  /**
   * Output only. Node types.
   *
   * @param GoogleCloudDataplexV1GraphProfileNodeType[] $nodeTypes
   */
  public function setNodeTypes($nodeTypes)
  {
    $this->nodeTypes = $nodeTypes;
  }
  /**
   * @return GoogleCloudDataplexV1GraphProfileNodeType[]
   */
  public function getNodeTypes()
  {
    return $this->nodeTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1GraphProfile::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1GraphProfile');
