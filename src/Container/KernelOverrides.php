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

class KernelOverrides extends \Google\Model
{
  protected $kernelCommandlineOverridesType = KernelCommandlineOverrides::class;
  protected $kernelCommandlineOverridesDataType = '';
  protected $lruGenType = LRUGen::class;
  protected $lruGenDataType = '';

  /**
   * Optional. Allow setting for optional kernel command line arguments
   * overrides.
   *
   * @param KernelCommandlineOverrides $kernelCommandlineOverrides
   */
  public function setKernelCommandlineOverrides(KernelCommandlineOverrides $kernelCommandlineOverrides)
  {
    $this->kernelCommandlineOverrides = $kernelCommandlineOverrides;
  }
  /**
   * @return KernelCommandlineOverrides
   */
  public function getKernelCommandlineOverrides()
  {
    return $this->kernelCommandlineOverrides;
  }
  /**
   * Optional. lrugen (Multi-Gen LRU) options
   *
   * @param LRUGen $lruGen
   */
  public function setLruGen(LRUGen $lruGen)
  {
    $this->lruGen = $lruGen;
  }
  /**
   * @return LRUGen
   */
  public function getLruGen()
  {
    return $this->lruGen;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KernelOverrides::class, 'Google_Service_Container_KernelOverrides');
