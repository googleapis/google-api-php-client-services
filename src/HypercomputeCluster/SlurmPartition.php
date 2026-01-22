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

class SlurmPartition extends \Google\Collection
{
  protected $collection_key = 'nodeSetIds';
  /**
   * Required. ID of the partition, which is how users will identify it. Must
   * conform to [RFC-1034](https://datatracker.ietf.org/doc/html/rfc1034)
   * (lower-case, alphanumeric, and at most 63 characters).
   *
   * @var string
   */
  public $id;
  /**
   * Required. IDs of the nodesets that make up this partition. Values must
   * match SlurmNodeSet.id.
   *
   * @var string[]
   */
  public $nodeSetIds;

  /**
   * Required. ID of the partition, which is how users will identify it. Must
   * conform to [RFC-1034](https://datatracker.ietf.org/doc/html/rfc1034)
   * (lower-case, alphanumeric, and at most 63 characters).
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
   * Required. IDs of the nodesets that make up this partition. Values must
   * match SlurmNodeSet.id.
   *
   * @param string[] $nodeSetIds
   */
  public function setNodeSetIds($nodeSetIds)
  {
    $this->nodeSetIds = $nodeSetIds;
  }
  /**
   * @return string[]
   */
  public function getNodeSetIds()
  {
    return $this->nodeSetIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SlurmPartition::class, 'Google_Service_HypercomputeCluster_SlurmPartition');
