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

class IosPushFilesDeviceAction extends \Google\Collection
{
  protected $collection_key = 'fileConfigs';
  protected $fileConfigsType = IosPushFilesDeviceActionFileConfig::class;
  protected $fileConfigsDataType = 'array';

  /**
   * Required. Configs of pushing files to the device. Limits: - A maximum of 50
   * files are allowed.
   *
   * @param IosPushFilesDeviceActionFileConfig[] $fileConfigs
   */
  public function setFileConfigs($fileConfigs)
  {
    $this->fileConfigs = $fileConfigs;
  }
  /**
   * @return IosPushFilesDeviceActionFileConfig[]
   */
  public function getFileConfigs()
  {
    return $this->fileConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IosPushFilesDeviceAction::class, 'Google_Service_DeviceRun_IosPushFilesDeviceAction');
