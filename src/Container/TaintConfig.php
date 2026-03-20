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

class TaintConfig extends \Google\Model
{
  /**
   * Specifies that the behavior is unspecified, defaults to ARM.
   */
  public const ARCHITECTURE_TAINT_BEHAVIOR_ARCHITECTURE_TAINT_BEHAVIOR_UNSPECIFIED = 'ARCHITECTURE_TAINT_BEHAVIOR_UNSPECIFIED';
  /**
   * Disables default architecture taints on the node pool.
   */
  public const ARCHITECTURE_TAINT_BEHAVIOR_NONE = 'NONE';
  /**
   * Taints all the nodes in the node pool with the default ARM taint.
   */
  public const ARCHITECTURE_TAINT_BEHAVIOR_ARM = 'ARM';
  /**
   * Optional. Controls architecture tainting behavior.
   *
   * @var string
   */
  public $architectureTaintBehavior;

  /**
   * Optional. Controls architecture tainting behavior.
   *
   * Accepted values: ARCHITECTURE_TAINT_BEHAVIOR_UNSPECIFIED, NONE, ARM
   *
   * @param self::ARCHITECTURE_TAINT_BEHAVIOR_* $architectureTaintBehavior
   */
  public function setArchitectureTaintBehavior($architectureTaintBehavior)
  {
    $this->architectureTaintBehavior = $architectureTaintBehavior;
  }
  /**
   * @return self::ARCHITECTURE_TAINT_BEHAVIOR_*
   */
  public function getArchitectureTaintBehavior()
  {
    return $this->architectureTaintBehavior;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TaintConfig::class, 'Google_Service_Container_TaintConfig');
