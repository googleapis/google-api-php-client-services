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

class KernelCommandlineOverrides extends \Google\Model
{
  /**
   * Default value. GKE will not modify the kernel configuration.
   */
  public const INIT_ON_ALLOC_INIT_ON_ALLOC_UNSPECIFIED = 'INIT_ON_ALLOC_UNSPECIFIED';
  /**
   * Disable init_on_alloc.
   */
  public const INIT_ON_ALLOC_INIT_ON_ALLOC_OFF = 'INIT_ON_ALLOC_OFF';
  /**
   * Default value. GKE will not modify the kernel configuration.
   */
  public const SPEC_RSTACK_OVERFLOW_SPEC_RSTACK_OVERFLOW_UNSPECIFIED = 'SPEC_RSTACK_OVERFLOW_UNSPECIFIED';
  /**
   * Disable spec_rstack_overflow.
   */
  public const SPEC_RSTACK_OVERFLOW_SPEC_RSTACK_OVERFLOW_OFF = 'SPEC_RSTACK_OVERFLOW_OFF';
  /**
   * Optional. Defines the change of init_on_alloc.
   *
   * @var string
   */
  public $initOnAlloc;
  /**
   * Optional. Defines the change of spec_rstack_overflow.
   *
   * @var string
   */
  public $specRstackOverflow;

  /**
   * Optional. Defines the change of init_on_alloc.
   *
   * Accepted values: INIT_ON_ALLOC_UNSPECIFIED, INIT_ON_ALLOC_OFF
   *
   * @param self::INIT_ON_ALLOC_* $initOnAlloc
   */
  public function setInitOnAlloc($initOnAlloc)
  {
    $this->initOnAlloc = $initOnAlloc;
  }
  /**
   * @return self::INIT_ON_ALLOC_*
   */
  public function getInitOnAlloc()
  {
    return $this->initOnAlloc;
  }
  /**
   * Optional. Defines the change of spec_rstack_overflow.
   *
   * Accepted values: SPEC_RSTACK_OVERFLOW_UNSPECIFIED, SPEC_RSTACK_OVERFLOW_OFF
   *
   * @param self::SPEC_RSTACK_OVERFLOW_* $specRstackOverflow
   */
  public function setSpecRstackOverflow($specRstackOverflow)
  {
    $this->specRstackOverflow = $specRstackOverflow;
  }
  /**
   * @return self::SPEC_RSTACK_OVERFLOW_*
   */
  public function getSpecRstackOverflow()
  {
    return $this->specRstackOverflow;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KernelCommandlineOverrides::class, 'Google_Service_Container_KernelCommandlineOverrides');
