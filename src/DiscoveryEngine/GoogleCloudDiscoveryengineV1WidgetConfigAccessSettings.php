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

class GoogleCloudDiscoveryengineV1WidgetConfigAccessSettings extends \Google\Collection
{
  protected $collection_key = 'allowlistedDomains';
  /**
   * @var bool
   */
  public $allowPublicAccess;
  /**
   * @var string[]
   */
  public $allowlistedDomains;
  /**
   * @var bool
   */
  public $enableWebApp;
  /**
   * @var string
   */
  public $languageCode;
  /**
   * @var string
   */
  public $workforceIdentityPoolProvider;

  /**
   * @param bool
   */
  public function setAllowPublicAccess($allowPublicAccess)
  {
    $this->allowPublicAccess = $allowPublicAccess;
  }
  /**
   * @return bool
   */
  public function getAllowPublicAccess()
  {
    return $this->allowPublicAccess;
  }
  /**
   * @param string[]
   */
  public function setAllowlistedDomains($allowlistedDomains)
  {
    $this->allowlistedDomains = $allowlistedDomains;
  }
  /**
   * @return string[]
   */
  public function getAllowlistedDomains()
  {
    return $this->allowlistedDomains;
  }
  /**
   * @param bool
   */
  public function setEnableWebApp($enableWebApp)
  {
    $this->enableWebApp = $enableWebApp;
  }
  /**
   * @return bool
   */
  public function getEnableWebApp()
  {
    return $this->enableWebApp;
  }
  /**
   * @param string
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * @param string
   */
  public function setWorkforceIdentityPoolProvider($workforceIdentityPoolProvider)
  {
    $this->workforceIdentityPoolProvider = $workforceIdentityPoolProvider;
  }
  /**
   * @return string
   */
  public function getWorkforceIdentityPoolProvider()
  {
    return $this->workforceIdentityPoolProvider;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigAccessSettings::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigAccessSettings');
