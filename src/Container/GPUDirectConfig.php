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

class GPUDirectConfig extends \Google\Model
{
  /**
   * Default value. No GPU Direct strategy is enabled on the node.
   */
  public const GPU_DIRECT_STRATEGY_GPU_DIRECT_STRATEGY_UNSPECIFIED = 'GPU_DIRECT_STRATEGY_UNSPECIFIED';
  /**
   * GPUDirect-RDMA on A3 Ultra, and A4 machine types
   */
  public const GPU_DIRECT_STRATEGY_RDMA = 'RDMA';
  /**
   * The type of GPU direct strategy to enable on the node pool.
   *
   * @var string
   */
  public $gpuDirectStrategy;

  /**
   * The type of GPU direct strategy to enable on the node pool.
   *
   * Accepted values: GPU_DIRECT_STRATEGY_UNSPECIFIED, RDMA
   *
   * @param self::GPU_DIRECT_STRATEGY_* $gpuDirectStrategy
   */
  public function setGpuDirectStrategy($gpuDirectStrategy)
  {
    $this->gpuDirectStrategy = $gpuDirectStrategy;
  }
  /**
   * @return self::GPU_DIRECT_STRATEGY_*
   */
  public function getGpuDirectStrategy()
  {
    return $this->gpuDirectStrategy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GPUDirectConfig::class, 'Google_Service_Container_GPUDirectConfig');
