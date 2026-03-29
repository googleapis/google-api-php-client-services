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

class AccurateTimeConfig extends \Google\Model
{
  /**
   * Enables enhanced time synchronization using PTP-KVM.
   *
   * @var bool
   */
  public $enablePtpKvmTimeSync;

  /**
   * Enables enhanced time synchronization using PTP-KVM.
   *
   * @param bool $enablePtpKvmTimeSync
   */
  public function setEnablePtpKvmTimeSync($enablePtpKvmTimeSync)
  {
    $this->enablePtpKvmTimeSync = $enablePtpKvmTimeSync;
  }
  /**
   * @return bool
   */
  public function getEnablePtpKvmTimeSync()
  {
    return $this->enablePtpKvmTimeSync;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccurateTimeConfig::class, 'Google_Service_Container_AccurateTimeConfig');
