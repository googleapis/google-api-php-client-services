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

namespace Google\Service\AndroidManagement;

class ExtraCapabilities extends \Google\Model
{
  /**
   * Unspecified. Defaults to LOCAL_DEVICE_WIPE_COMMAND_DISALLOWED.
   */
  public const LOCAL_DEVICE_WIPE_COMMAND_LOCAL_DEVICE_WIPE_COMMAND_UNSPECIFIED = 'LOCAL_DEVICE_WIPE_COMMAND_UNSPECIFIED';
  /**
   * The app is not allowed to perform local device wipe.
   */
  public const LOCAL_DEVICE_WIPE_COMMAND_LOCAL_DEVICE_WIPE_COMMAND_DISALLOWED = 'LOCAL_DEVICE_WIPE_COMMAND_DISALLOWED';
  /**
   * The app is allowed to perform local device wipe. Only the COMPANION_APP
   * role type can use this field.
   */
  public const LOCAL_DEVICE_WIPE_COMMAND_LOCAL_DEVICE_WIPE_COMMAND_ALLOWED = 'LOCAL_DEVICE_WIPE_COMMAND_ALLOWED';
  /**
   * Optional. Controls whether the companion app can perform local device wipe
   * (https://developers.google.com/android/management/sdk-local-commands) using
   * AMAPI SDK (https://developers.google.com/android/management/sdk-
   * integration).
   *
   * @var string
   */
  public $localDeviceWipeCommand;

  /**
   * Optional. Controls whether the companion app can perform local device wipe
   * (https://developers.google.com/android/management/sdk-local-commands) using
   * AMAPI SDK (https://developers.google.com/android/management/sdk-
   * integration).
   *
   * Accepted values: LOCAL_DEVICE_WIPE_COMMAND_UNSPECIFIED,
   * LOCAL_DEVICE_WIPE_COMMAND_DISALLOWED, LOCAL_DEVICE_WIPE_COMMAND_ALLOWED
   *
   * @param self::LOCAL_DEVICE_WIPE_COMMAND_* $localDeviceWipeCommand
   */
  public function setLocalDeviceWipeCommand($localDeviceWipeCommand)
  {
    $this->localDeviceWipeCommand = $localDeviceWipeCommand;
  }
  /**
   * @return self::LOCAL_DEVICE_WIPE_COMMAND_*
   */
  public function getLocalDeviceWipeCommand()
  {
    return $this->localDeviceWipeCommand;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExtraCapabilities::class, 'Google_Service_AndroidManagement_ExtraCapabilities');
