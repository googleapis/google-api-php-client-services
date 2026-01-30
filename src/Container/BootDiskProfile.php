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

class BootDiskProfile extends \Google\Model
{
  /**
   * Specifies the size of the swap space in gibibytes (GiB).
   *
   * @var string
   */
  public $swapSizeGib;
  /**
   * Specifies the size of the swap space as a percentage of the boot disk size.
   *
   * @var int
   */
  public $swapSizePercent;

  /**
   * Specifies the size of the swap space in gibibytes (GiB).
   *
   * @param string $swapSizeGib
   */
  public function setSwapSizeGib($swapSizeGib)
  {
    $this->swapSizeGib = $swapSizeGib;
  }
  /**
   * @return string
   */
  public function getSwapSizeGib()
  {
    return $this->swapSizeGib;
  }
  /**
   * Specifies the size of the swap space as a percentage of the boot disk size.
   *
   * @param int $swapSizePercent
   */
  public function setSwapSizePercent($swapSizePercent)
  {
    $this->swapSizePercent = $swapSizePercent;
  }
  /**
   * @return int
   */
  public function getSwapSizePercent()
  {
    return $this->swapSizePercent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BootDiskProfile::class, 'Google_Service_Container_BootDiskProfile');
