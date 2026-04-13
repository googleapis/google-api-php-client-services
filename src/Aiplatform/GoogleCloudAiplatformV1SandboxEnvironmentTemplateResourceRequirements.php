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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1SandboxEnvironmentTemplateResourceRequirements extends \Google\Model
{
  /**
   * Optional. The maximum amounts of compute resources allowed. Keys are
   * resource names (e.g., "cpu", "memory"). Values are quantities (e.g.,
   * "500m", "1Gi").
   *
   * @var string[]
   */
  public $limits;
  /**
   * Optional. The requested amounts of compute resources. Keys are resource
   * names (e.g., "cpu", "memory"). Values are quantities (e.g., "250m",
   * "512Mi").
   *
   * @var string[]
   */
  public $requests;

  /**
   * Optional. The maximum amounts of compute resources allowed. Keys are
   * resource names (e.g., "cpu", "memory"). Values are quantities (e.g.,
   * "500m", "1Gi").
   *
   * @param string[] $limits
   */
  public function setLimits($limits)
  {
    $this->limits = $limits;
  }
  /**
   * @return string[]
   */
  public function getLimits()
  {
    return $this->limits;
  }
  /**
   * Optional. The requested amounts of compute resources. Keys are resource
   * names (e.g., "cpu", "memory"). Values are quantities (e.g., "250m",
   * "512Mi").
   *
   * @param string[] $requests
   */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /**
   * @return string[]
   */
  public function getRequests()
  {
    return $this->requests;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentTemplateResourceRequirements::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentTemplateResourceRequirements');
