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

class CatalogSupportedProduct extends \Google\Model
{
  protected $automationType = CatalogAutomationSupport::class;
  protected $automationDataType = '';
  protected $deviceStreamingType = CatalogDeviceStreamingSupport::class;
  protected $deviceStreamingDataType = '';

  /**
   * Output only. Represents Automation, which is DeviceRun-backed automated
   * test execution.
   *
   * @param CatalogAutomationSupport $automation
   */
  public function setAutomation(CatalogAutomationSupport $automation)
  {
    $this->automation = $automation;
  }
  /**
   * @return CatalogAutomationSupport
   */
  public function getAutomation()
  {
    return $this->automation;
  }
  /**
   * Output only. Represents DeviceStreaming, which is interactive remote device
   * streaming.
   *
   * @param CatalogDeviceStreamingSupport $deviceStreaming
   */
  public function setDeviceStreaming(CatalogDeviceStreamingSupport $deviceStreaming)
  {
    $this->deviceStreaming = $deviceStreaming;
  }
  /**
   * @return CatalogDeviceStreamingSupport
   */
  public function getDeviceStreaming()
  {
    return $this->deviceStreaming;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogSupportedProduct::class, 'Google_Service_DeviceRun_CatalogSupportedProduct');
