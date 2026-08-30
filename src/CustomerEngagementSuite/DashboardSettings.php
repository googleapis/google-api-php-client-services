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

class DashboardSettings extends \Google\Model
{
  /**
   * Optional. The resource name of the default Contact Center Insights
   * dashboard associated with the app. This is the dashboard that will be
   * displayed when users navigate to the Monitoring view for the app. Format:
   * `projects/{project}/locations/{location}/dashboards/{dashboard}`
   *
   * @var string
   */
  public $defaultDashboard;

  /**
   * Optional. The resource name of the default Contact Center Insights
   * dashboard associated with the app. This is the dashboard that will be
   * displayed when users navigate to the Monitoring view for the app. Format:
   * `projects/{project}/locations/{location}/dashboards/{dashboard}`
   *
   * @param string $defaultDashboard
   */
  public function setDefaultDashboard($defaultDashboard)
  {
    $this->defaultDashboard = $defaultDashboard;
  }
  /**
   * @return string
   */
  public function getDefaultDashboard()
  {
    return $this->defaultDashboard;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DashboardSettings::class, 'Google_Service_CustomerEngagementSuite_DashboardSettings');
