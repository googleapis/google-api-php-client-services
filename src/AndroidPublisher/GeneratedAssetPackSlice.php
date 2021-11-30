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

namespace Google\Service\AndroidPublisher;

class GeneratedAssetPackSlice extends \Google\Model
{
  public $downloadId;
  public $moduleName;
  public $sliceId;
  public $version;

  public function setDownloadId($downloadId)
  {
    $this->downloadId = $downloadId;
  }
  public function getDownloadId()
  {
    return $this->downloadId;
  }
  public function setModuleName($moduleName)
  {
    $this->moduleName = $moduleName;
  }
  public function getModuleName()
  {
    return $this->moduleName;
  }
  public function setSliceId($sliceId)
  {
    $this->sliceId = $sliceId;
  }
  public function getSliceId()
  {
    return $this->sliceId;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeneratedAssetPackSlice::class, 'Google_Service_AndroidPublisher_GeneratedAssetPackSlice');
