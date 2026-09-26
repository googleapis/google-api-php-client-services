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

class IosPushFilesDeviceActionFileConfig extends \Google\Model
{
  /**
   * Required. The bundle ID of the application sandbox.
   *
   * @var string
   */
  public $bundleId;
  /**
   * Required. The destination path relative to the app sandbox, e.g.
   * "/Documents/file.txt".
   *
   * @var string
   */
  public $destinationPath;
  protected $sourceFileType = InputFile::class;
  protected $sourceFileDataType = '';

  /**
   * Required. The bundle ID of the application sandbox.
   *
   * @param string $bundleId
   */
  public function setBundleId($bundleId)
  {
    $this->bundleId = $bundleId;
  }
  /**
   * @return string
   */
  public function getBundleId()
  {
    return $this->bundleId;
  }
  /**
   * Required. The destination path relative to the app sandbox, e.g.
   * "/Documents/file.txt".
   *
   * @param string $destinationPath
   */
  public function setDestinationPath($destinationPath)
  {
    $this->destinationPath = $destinationPath;
  }
  /**
   * @return string
   */
  public function getDestinationPath()
  {
    return $this->destinationPath;
  }
  /**
   * Required. The file to be pushed.
   *
   * @param InputFile $sourceFile
   */
  public function setSourceFile(InputFile $sourceFile)
  {
    $this->sourceFile = $sourceFile;
  }
  /**
   * @return InputFile
   */
  public function getSourceFile()
  {
    return $this->sourceFile;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IosPushFilesDeviceActionFileConfig::class, 'Google_Service_DeviceRun_IosPushFilesDeviceActionFileConfig');
