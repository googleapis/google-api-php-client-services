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

class RollbackSafeUpgrade extends \Google\Model
{
  /**
   * Optional. A user-defined period for the cluster remains in the rollbackable
   * state. ex: {seconds: 21600}.
   *
   * @var string
   */
  public $controlPlaneSoakDuration;

  /**
   * Optional. A user-defined period for the cluster remains in the rollbackable
   * state. ex: {seconds: 21600}.
   *
   * @param string $controlPlaneSoakDuration
   */
  public function setControlPlaneSoakDuration($controlPlaneSoakDuration)
  {
    $this->controlPlaneSoakDuration = $controlPlaneSoakDuration;
  }
  /**
   * @return string
   */
  public function getControlPlaneSoakDuration()
  {
    return $this->controlPlaneSoakDuration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RollbackSafeUpgrade::class, 'Google_Service_Container_RollbackSafeUpgrade');
