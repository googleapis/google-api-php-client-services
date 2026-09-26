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

class IosRecordVideoDeviceAction extends \Google\Model
{
  /**
   * Optional. Whether to discard the video if the test passes. If not
   * specified, the default is false (always keep the video).
   *
   * @var bool
   */
  public $discardOnPass;

  /**
   * Optional. Whether to discard the video if the test passes. If not
   * specified, the default is false (always keep the video).
   *
   * @param bool $discardOnPass
   */
  public function setDiscardOnPass($discardOnPass)
  {
    $this->discardOnPass = $discardOnPass;
  }
  /**
   * @return bool
   */
  public function getDiscardOnPass()
  {
    return $this->discardOnPass;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IosRecordVideoDeviceAction::class, 'Google_Service_DeviceRun_IosRecordVideoDeviceAction');
