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

class LRUGen extends \Google\Model
{
  /**
   * Optional. Enable lrugen.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Optional. Users can write N to min_ttl_ms to prevent the working set of N
   * milliseconds from getting evicted.
   *
   * @var int
   */
  public $minTtlMs;

  /**
   * Optional. Enable lrugen.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Optional. Users can write N to min_ttl_ms to prevent the working set of N
   * milliseconds from getting evicted.
   *
   * @param int $minTtlMs
   */
  public function setMinTtlMs($minTtlMs)
  {
    $this->minTtlMs = $minTtlMs;
  }
  /**
   * @return int
   */
  public function getMinTtlMs()
  {
    return $this->minTtlMs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LRUGen::class, 'Google_Service_Container_LRUGen');
