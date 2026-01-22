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

class GcsAutoclassConfig extends \Google\Model
{
  /**
   * Unspecified terminal storage class
   */
  public const TERMINAL_STORAGE_CLASS_TERMINAL_STORAGE_CLASS_UNSPECIFIED = 'TERMINAL_STORAGE_CLASS_UNSPECIFIED';
  /**
   * Required. Enables Auto-class feature.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Optional. Terminal storage class of the autoclass bucket
   *
   * @var string
   */
  public $terminalStorageClass;

  /**
   * Required. Enables Auto-class feature.
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
   * Optional. Terminal storage class of the autoclass bucket
   *
   * Accepted values: TERMINAL_STORAGE_CLASS_UNSPECIFIED
   *
   * @param self::TERMINAL_STORAGE_CLASS_* $terminalStorageClass
   */
  public function setTerminalStorageClass($terminalStorageClass)
  {
    $this->terminalStorageClass = $terminalStorageClass;
  }
  /**
   * @return self::TERMINAL_STORAGE_CLASS_*
   */
  public function getTerminalStorageClass()
  {
    return $this->terminalStorageClass;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GcsAutoclassConfig::class, 'Google_Service_HypercomputeCluster_GcsAutoclassConfig');
