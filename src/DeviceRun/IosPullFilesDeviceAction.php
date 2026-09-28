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

class IosPullFilesDeviceAction extends \Google\Collection
{
  protected $collection_key = 'paths';
  protected $pathsType = IosPullFilesDeviceActionPathConfig::class;
  protected $pathsDataType = 'array';

  /**
   * Required. Absolute directory or file paths to pull from the device. Limits:
   * - A maximum of 10 paths are allowed.
   *
   * @param IosPullFilesDeviceActionPathConfig[] $paths
   */
  public function setPaths($paths)
  {
    $this->paths = $paths;
  }
  /**
   * @return IosPullFilesDeviceActionPathConfig[]
   */
  public function getPaths()
  {
    return $this->paths;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IosPullFilesDeviceAction::class, 'Google_Service_DeviceRun_IosPullFilesDeviceAction');
