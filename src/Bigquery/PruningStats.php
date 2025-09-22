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

namespace Google\Service\Bigquery;

class PruningStats extends \Google\Model
{
  /**
   * @var string
   */
  public $postCmetaPruningParallelInputCount;
  /**
   * @var string
   */
  public $postCmetaPruningPartitionCount;
  /**
   * @var string
   */
  public $preCmetaPruningParallelInputCount;

  /**
   * @param string
   */
  public function setPostCmetaPruningParallelInputCount($postCmetaPruningParallelInputCount)
  {
    $this->postCmetaPruningParallelInputCount = $postCmetaPruningParallelInputCount;
  }
  /**
   * @return string
   */
  public function getPostCmetaPruningParallelInputCount()
  {
    return $this->postCmetaPruningParallelInputCount;
  }
  /**
   * @param string
   */
  public function setPostCmetaPruningPartitionCount($postCmetaPruningPartitionCount)
  {
    $this->postCmetaPruningPartitionCount = $postCmetaPruningPartitionCount;
  }
  /**
   * @return string
   */
  public function getPostCmetaPruningPartitionCount()
  {
    return $this->postCmetaPruningPartitionCount;
  }
  /**
   * @param string
   */
  public function setPreCmetaPruningParallelInputCount($preCmetaPruningParallelInputCount)
  {
    $this->preCmetaPruningParallelInputCount = $preCmetaPruningParallelInputCount;
  }
  /**
   * @return string
   */
  public function getPreCmetaPruningParallelInputCount()
  {
    return $this->preCmetaPruningParallelInputCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PruningStats::class, 'Google_Service_Bigquery_PruningStats');
