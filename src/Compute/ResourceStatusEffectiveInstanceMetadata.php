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

class ResourceStatusEffectiveInstanceMetadata extends \Google\Model
{
  /**
   * @var bool
   */
  public $blockProjectSshKeysMetadataValue;
  /**
   * @var bool
   */
  public $enableGuestAttributesMetadataValue;
  /**
   * @var bool
   */
  public $enableOsInventoryMetadataValue;
  /**
   * @var bool
   */
  public $enableOsconfigMetadataValue;
  /**
   * @var bool
   */
  public $enableOsloginMetadataValue;
  /**
   * @var bool
   */
  public $serialPortEnableMetadataValue;
  /**
   * @var bool
   */
  public $serialPortLoggingEnableMetadataValue;
  /**
   * @var string
   */
  public $vmDnsSettingMetadataValue;

  /**
   * @param bool
   */
  public function setBlockProjectSshKeysMetadataValue($blockProjectSshKeysMetadataValue)
  {
    $this->blockProjectSshKeysMetadataValue = $blockProjectSshKeysMetadataValue;
  }
  /**
   * @return bool
   */
  public function getBlockProjectSshKeysMetadataValue()
  {
    return $this->blockProjectSshKeysMetadataValue;
  }
  /**
   * @param bool
   */
  public function setEnableGuestAttributesMetadataValue($enableGuestAttributesMetadataValue)
  {
    $this->enableGuestAttributesMetadataValue = $enableGuestAttributesMetadataValue;
  }
  /**
   * @return bool
   */
  public function getEnableGuestAttributesMetadataValue()
  {
    return $this->enableGuestAttributesMetadataValue;
  }
  /**
   * @param bool
   */
  public function setEnableOsInventoryMetadataValue($enableOsInventoryMetadataValue)
  {
    $this->enableOsInventoryMetadataValue = $enableOsInventoryMetadataValue;
  }
  /**
   * @return bool
   */
  public function getEnableOsInventoryMetadataValue()
  {
    return $this->enableOsInventoryMetadataValue;
  }
  /**
   * @param bool
   */
  public function setEnableOsconfigMetadataValue($enableOsconfigMetadataValue)
  {
    $this->enableOsconfigMetadataValue = $enableOsconfigMetadataValue;
  }
  /**
   * @return bool
   */
  public function getEnableOsconfigMetadataValue()
  {
    return $this->enableOsconfigMetadataValue;
  }
  /**
   * @param bool
   */
  public function setEnableOsloginMetadataValue($enableOsloginMetadataValue)
  {
    $this->enableOsloginMetadataValue = $enableOsloginMetadataValue;
  }
  /**
   * @return bool
   */
  public function getEnableOsloginMetadataValue()
  {
    return $this->enableOsloginMetadataValue;
  }
  /**
   * @param bool
   */
  public function setSerialPortEnableMetadataValue($serialPortEnableMetadataValue)
  {
    $this->serialPortEnableMetadataValue = $serialPortEnableMetadataValue;
  }
  /**
   * @return bool
   */
  public function getSerialPortEnableMetadataValue()
  {
    return $this->serialPortEnableMetadataValue;
  }
  /**
   * @param bool
   */
  public function setSerialPortLoggingEnableMetadataValue($serialPortLoggingEnableMetadataValue)
  {
    $this->serialPortLoggingEnableMetadataValue = $serialPortLoggingEnableMetadataValue;
  }
  /**
   * @return bool
   */
  public function getSerialPortLoggingEnableMetadataValue()
  {
    return $this->serialPortLoggingEnableMetadataValue;
  }
  /**
   * @param string
   */
  public function setVmDnsSettingMetadataValue($vmDnsSettingMetadataValue)
  {
    $this->vmDnsSettingMetadataValue = $vmDnsSettingMetadataValue;
  }
  /**
   * @return string
   */
  public function getVmDnsSettingMetadataValue()
  {
    return $this->vmDnsSettingMetadataValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceStatusEffectiveInstanceMetadata::class, 'Google_Service_Compute_ResourceStatusEffectiveInstanceMetadata');
