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

namespace Google\Service\DeveloperConnect;

class AppHubService extends \Google\Model
{
  /**
   * @var string
   */
  public $apphubService;
  /**
   * @var string
   */
  public $criticality;
  /**
   * @var string
   */
  public $environment;

  /**
   * @param string
   */
  public function setApphubService($apphubService)
  {
    $this->apphubService = $apphubService;
  }
  /**
   * @return string
   */
  public function getApphubService()
  {
    return $this->apphubService;
  }
  /**
   * @param string
   */
  public function setCriticality($criticality)
  {
    $this->criticality = $criticality;
  }
  /**
   * @return string
   */
  public function getCriticality()
  {
    return $this->criticality;
  }
  /**
   * @param string
   */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /**
   * @return string
   */
  public function getEnvironment()
  {
    return $this->environment;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppHubService::class, 'Google_Service_DeveloperConnect_AppHubService');
