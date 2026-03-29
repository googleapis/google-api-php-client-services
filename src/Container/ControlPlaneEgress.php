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

class ControlPlaneEgress extends \Google\Model
{
  /**
   * Default value not specified.
   */
  public const MODE_MODE_UNSPECIFIED = 'MODE_UNSPECIFIED';
  /**
   * Control plane has public IP and no restriction on egress.
   */
  public const MODE_VIA_CONTROL_PLANE = 'VIA_CONTROL_PLANE';
  /**
   * No public IP on control plane and only internal allowlisted egress.
   */
  public const MODE_NONE = 'NONE';
  /**
   * Defines the mode of control plane egress.
   *
   * @var string
   */
  public $mode;

  /**
   * Defines the mode of control plane egress.
   *
   * Accepted values: MODE_UNSPECIFIED, VIA_CONTROL_PLANE, NONE
   *
   * @param self::MODE_* $mode
   */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /**
   * @return self::MODE_*
   */
  public function getMode()
  {
    return $this->mode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ControlPlaneEgress::class, 'Google_Service_Container_ControlPlaneEgress');
