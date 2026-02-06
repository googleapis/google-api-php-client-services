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

namespace Google\Service\CustomerEngagementSuite;

class OmnichannelIntegrationConfigCesAppConfig extends \Google\Model
{
  /**
   * The unique identifier of the CES app. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   *
   * @var string
   */
  public $app;

  /**
   * The unique identifier of the CES app. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   *
   * @param string $app
   */
  public function setApp($app)
  {
    $this->app = $app;
  }
  /**
   * @return string
   */
  public function getApp()
  {
    return $this->app;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OmnichannelIntegrationConfigCesAppConfig::class, 'Google_Service_CustomerEngagementSuite_OmnichannelIntegrationConfigCesAppConfig');
