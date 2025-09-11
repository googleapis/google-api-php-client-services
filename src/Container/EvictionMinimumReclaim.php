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

namespace Google\Service\Container;

class EvictionMinimumReclaim extends \Google\Model
{
  /**
   * @var string
   */
  public $imagefsAvailable;
  /**
   * @var string
   */
  public $imagefsInodesFree;
  /**
   * @var string
   */
  public $memoryAvailable;
  /**
   * @var string
   */
  public $nodefsAvailable;
  /**
   * @var string
   */
  public $nodefsInodesFree;
  /**
   * @var string
   */
  public $pidAvailable;

  /**
   * @param string
   */
  public function setImagefsAvailable($imagefsAvailable)
  {
    $this->imagefsAvailable = $imagefsAvailable;
  }
  /**
   * @return string
   */
  public function getImagefsAvailable()
  {
    return $this->imagefsAvailable;
  }
  /**
   * @param string
   */
  public function setImagefsInodesFree($imagefsInodesFree)
  {
    $this->imagefsInodesFree = $imagefsInodesFree;
  }
  /**
   * @return string
   */
  public function getImagefsInodesFree()
  {
    return $this->imagefsInodesFree;
  }
  /**
   * @param string
   */
  public function setMemoryAvailable($memoryAvailable)
  {
    $this->memoryAvailable = $memoryAvailable;
  }
  /**
   * @return string
   */
  public function getMemoryAvailable()
  {
    return $this->memoryAvailable;
  }
  /**
   * @param string
   */
  public function setNodefsAvailable($nodefsAvailable)
  {
    $this->nodefsAvailable = $nodefsAvailable;
  }
  /**
   * @return string
   */
  public function getNodefsAvailable()
  {
    return $this->nodefsAvailable;
  }
  /**
   * @param string
   */
  public function setNodefsInodesFree($nodefsInodesFree)
  {
    $this->nodefsInodesFree = $nodefsInodesFree;
  }
  /**
   * @return string
   */
  public function getNodefsInodesFree()
  {
    return $this->nodefsInodesFree;
  }
  /**
   * @param string
   */
  public function setPidAvailable($pidAvailable)
  {
    $this->pidAvailable = $pidAvailable;
  }
  /**
   * @return string
   */
  public function getPidAvailable()
  {
    return $this->pidAvailable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EvictionMinimumReclaim::class, 'Google_Service_Container_EvictionMinimumReclaim');
