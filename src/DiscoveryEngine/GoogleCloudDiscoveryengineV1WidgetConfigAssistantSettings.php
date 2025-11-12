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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1WidgetConfigAssistantSettings extends \Google\Model
{
  /**
   * @var bool
   */
  public $defaultWebGroundingToggleOff;
  /**
   * @var bool
   */
  public $disableLocationContext;
  /**
   * @var bool
   */
  public $googleSearchGroundingEnabled;
  /**
   * @var string
   */
  public $webGroundingType;

  /**
   * @param bool
   */
  public function setDefaultWebGroundingToggleOff($defaultWebGroundingToggleOff)
  {
    $this->defaultWebGroundingToggleOff = $defaultWebGroundingToggleOff;
  }
  /**
   * @return bool
   */
  public function getDefaultWebGroundingToggleOff()
  {
    return $this->defaultWebGroundingToggleOff;
  }
  /**
   * @param bool
   */
  public function setDisableLocationContext($disableLocationContext)
  {
    $this->disableLocationContext = $disableLocationContext;
  }
  /**
   * @return bool
   */
  public function getDisableLocationContext()
  {
    return $this->disableLocationContext;
  }
  /**
   * @param bool
   */
  public function setGoogleSearchGroundingEnabled($googleSearchGroundingEnabled)
  {
    $this->googleSearchGroundingEnabled = $googleSearchGroundingEnabled;
  }
  /**
   * @return bool
   */
  public function getGoogleSearchGroundingEnabled()
  {
    return $this->googleSearchGroundingEnabled;
  }
  /**
   * @param string
   */
  public function setWebGroundingType($webGroundingType)
  {
    $this->webGroundingType = $webGroundingType;
  }
  /**
   * @return string
   */
  public function getWebGroundingType()
  {
    return $this->webGroundingType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigAssistantSettings::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigAssistantSettings');
