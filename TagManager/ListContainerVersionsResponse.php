<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_TagManager_ListContainerVersionsResponse extends Google_Collection
{
  protected $collection_key = 'containerVersionHeader';
  public $containerVersion;
  public $containerVersionHeader;

  public function setContainerVersion(array $containerVersion)
  {
    foreach ($containerVersion as $c) {
      if (!$c instanceof Google_Service_TagManager_ContainerVersion) {
        throw new InvalidArgumentException('First argument to setContainerVersion must be an array of Google_Service_TagManager_ContainerVersion');
      }
    }
    $this->containerVersion = $containerVersion;
  }
  public function getContainerVersion()
  {
    return $this->containerVersion;
  }
  public function setContainerVersionHeader(array $containerVersionHeader)
  {
    foreach ($containerVersionHeader as $c) {
      if (!$c instanceof Google_Service_TagManager_ContainerVersionHeader) {
        throw new InvalidArgumentException('First argument to setContainerVersionHeader must be an array of Google_Service_TagManager_ContainerVersionHeader');
      }
    }
    $this->containerVersionHeader = $containerVersionHeader;
  }
  public function getContainerVersionHeader()
  {
    return $this->containerVersionHeader;
  }
}
