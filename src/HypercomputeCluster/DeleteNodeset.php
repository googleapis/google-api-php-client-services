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

namespace Google\Service\HypercomputeCluster;

class DeleteNodeset extends \Google\Collection
{
  protected $collection_key = 'nodesets';
  /**
   * Output only. Name of the nodeset to delete
   *
   * @var string[]
   */
  public $nodesets;

  /**
   * Output only. Name of the nodeset to delete
   *
   * @param string[] $nodesets
   */
  public function setNodesets($nodesets)
  {
    $this->nodesets = $nodesets;
  }
  /**
   * @return string[]
   */
  public function getNodesets()
  {
    return $this->nodesets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeleteNodeset::class, 'Google_Service_HypercomputeCluster_DeleteNodeset');
