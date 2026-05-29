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

class DataplaneV2Config extends \Google\Model
{
  /**
   * Default value.
   */
  public const SCALABILITY_MODE_SCALABILITY_MODE_UNSPECIFIED = 'SCALABILITY_MODE_UNSPECIFIED';
  /**
   * Disables the scale optimized mode for DPv2.
   */
  public const SCALABILITY_MODE_DISABLED = 'DISABLED';
  /**
   * Enables the scale optimized mode for DPv2.
   */
  public const SCALABILITY_MODE_SCALE_OPTIMIZED = 'SCALE_OPTIMIZED';
  /**
   * Optional. Scalability mode for the cluster.
   *
   * @var string
   */
  public $scalabilityMode;

  /**
   * Optional. Scalability mode for the cluster.
   *
   * Accepted values: SCALABILITY_MODE_UNSPECIFIED, DISABLED, SCALE_OPTIMIZED
   *
   * @param self::SCALABILITY_MODE_* $scalabilityMode
   */
  public function setScalabilityMode($scalabilityMode)
  {
    $this->scalabilityMode = $scalabilityMode;
  }
  /**
   * @return self::SCALABILITY_MODE_*
   */
  public function getScalabilityMode()
  {
    return $this->scalabilityMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataplaneV2Config::class, 'Google_Service_Container_DataplaneV2Config');
