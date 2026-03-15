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

namespace Google\Service\Compute;

class VmExtensionPolicyExtensionPolicy extends \Google\Model
{
  /**
   * Optional. The specific version of the extension to install. If not set, the
   * latest version is used.
   *
   * @var string
   */
  public $pinnedVersion;
  /**
   * Optional. String-based configuration data for the extension.
   *
   * @var string
   */
  public $stringConfig;

  /**
   * Optional. The specific version of the extension to install. If not set, the
   * latest version is used.
   *
   * @param string $pinnedVersion
   */
  public function setPinnedVersion($pinnedVersion)
  {
    $this->pinnedVersion = $pinnedVersion;
  }
  /**
   * @return string
   */
  public function getPinnedVersion()
  {
    return $this->pinnedVersion;
  }
  /**
   * Optional. String-based configuration data for the extension.
   *
   * @param string $stringConfig
   */
  public function setStringConfig($stringConfig)
  {
    $this->stringConfig = $stringConfig;
  }
  /**
   * @return string
   */
  public function getStringConfig()
  {
    return $this->stringConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VmExtensionPolicyExtensionPolicy::class, 'Google_Service_Compute_VmExtensionPolicyExtensionPolicy');
