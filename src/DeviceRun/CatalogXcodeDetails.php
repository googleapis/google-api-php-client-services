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

class CatalogXcodeDetails extends \Google\Collection
{
  protected $collection_key = 'supportedIosVersions';
  /**
   * Output only. Lists the iOS versions this Xcode can run tests against, e.g.
   * "16.6". This is a property of the toolchain, so it says nothing about
   * whether a device on that iOS version is available; list the `Device`
   * collection to find out.
   *
   * @var string[]
   */
  public $supportedIosVersions;

  /**
   * Output only. Lists the iOS versions this Xcode can run tests against, e.g.
   * "16.6". This is a property of the toolchain, so it says nothing about
   * whether a device on that iOS version is available; list the `Device`
   * collection to find out.
   *
   * @param string[] $supportedIosVersions
   */
  public function setSupportedIosVersions($supportedIosVersions)
  {
    $this->supportedIosVersions = $supportedIosVersions;
  }
  /**
   * @return string[]
   */
  public function getSupportedIosVersions()
  {
    return $this->supportedIosVersions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogXcodeDetails::class, 'Google_Service_DeviceRun_CatalogXcodeDetails');
