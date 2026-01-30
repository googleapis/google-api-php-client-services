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

class SwapConfig extends \Google\Model
{
  protected $bootDiskProfileType = BootDiskProfile::class;
  protected $bootDiskProfileDataType = '';
  protected $dedicatedLocalSsdProfileType = DedicatedLocalSsdProfile::class;
  protected $dedicatedLocalSsdProfileDataType = '';
  /**
   * Optional. Enables or disables swap for the node pool.
   *
   * @var bool
   */
  public $enabled;
  protected $encryptionConfigType = EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  protected $ephemeralLocalSsdProfileType = EphemeralLocalSsdProfile::class;
  protected $ephemeralLocalSsdProfileDataType = '';

  /**
   * Swap on the node's boot disk.
   *
   * @param BootDiskProfile $bootDiskProfile
   */
  public function setBootDiskProfile(BootDiskProfile $bootDiskProfile)
  {
    $this->bootDiskProfile = $bootDiskProfile;
  }
  /**
   * @return BootDiskProfile
   */
  public function getBootDiskProfile()
  {
    return $this->bootDiskProfile;
  }
  /**
   * Provisions a new, separate local NVMe SSD exclusively for swap.
   *
   * @param DedicatedLocalSsdProfile $dedicatedLocalSsdProfile
   */
  public function setDedicatedLocalSsdProfile(DedicatedLocalSsdProfile $dedicatedLocalSsdProfile)
  {
    $this->dedicatedLocalSsdProfile = $dedicatedLocalSsdProfile;
  }
  /**
   * @return DedicatedLocalSsdProfile
   */
  public function getDedicatedLocalSsdProfile()
  {
    return $this->dedicatedLocalSsdProfile;
  }
  /**
   * Optional. Enables or disables swap for the node pool.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Optional. If omitted, swap space is encrypted by default.
   *
   * @param EncryptionConfig $encryptionConfig
   */
  public function setEncryptionConfig(EncryptionConfig $encryptionConfig)
  {
    $this->encryptionConfig = $encryptionConfig;
  }
  /**
   * @return EncryptionConfig
   */
  public function getEncryptionConfig()
  {
    return $this->encryptionConfig;
  }
  /**
   * Swap on the local SSD shared with pod ephemeral storage.
   *
   * @param EphemeralLocalSsdProfile $ephemeralLocalSsdProfile
   */
  public function setEphemeralLocalSsdProfile(EphemeralLocalSsdProfile $ephemeralLocalSsdProfile)
  {
    $this->ephemeralLocalSsdProfile = $ephemeralLocalSsdProfile;
  }
  /**
   * @return EphemeralLocalSsdProfile
   */
  public function getEphemeralLocalSsdProfile()
  {
    return $this->ephemeralLocalSsdProfile;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SwapConfig::class, 'Google_Service_Container_SwapConfig');
