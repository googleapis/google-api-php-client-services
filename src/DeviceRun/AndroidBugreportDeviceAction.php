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

namespace Google\Service\DeviceRun;

class AndroidBugreportDeviceAction extends \Google\Model
{
  /**
   * Optional. Whether to deliver the bugreport when the test passes. If false,
   * the bugreport is skipped on pass to save time (default behavior). If true,
   * the bugreport is always delivered.
   *
   * @var bool
   */
  public $collectOnPass;

  /**
   * Optional. Whether to deliver the bugreport when the test passes. If false,
   * the bugreport is skipped on pass to save time (default behavior). If true,
   * the bugreport is always delivered.
   *
   * @param bool $collectOnPass
   */
  public function setCollectOnPass($collectOnPass)
  {
    $this->collectOnPass = $collectOnPass;
  }
  /**
   * @return bool
   */
  public function getCollectOnPass()
  {
    return $this->collectOnPass;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidBugreportDeviceAction::class, 'Google_Service_DeviceRun_AndroidBugreportDeviceAction');
