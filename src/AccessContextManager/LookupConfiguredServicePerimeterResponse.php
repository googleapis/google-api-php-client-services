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

namespace Google\Service\AccessContextManager;

class LookupConfiguredServicePerimeterResponse extends \Google\Model
{
  /**
   * The resource (for example, `projects/123` or `folders/456`) that directly
   * owns or is restricted by the enforced perimeter.
   *
   * @var string
   */
  public $restrictedResource;
  /**
   * The resource (for example, `projects/123` or `folders/456`) that directly
   * owns or is restricted by the dry-run perimeter.
   *
   * @var string
   */
  public $restrictedResourceDryRun;
  /**
   * Fully qualified name of the configured enforced perimeter. This field is
   * empty if no enforced perimeter applies. Format:
   * `accessPolicies/{policy_id}/servicePerimeters/{perimeter_name}`
   *
   * @var string
   */
  public $servicePerimeter;
  /**
   * Fully qualified name of the configured dry-run perimeter. This field is
   * empty if no dry-run perimeter configuration applies. Format:
   * `accessPolicies/{policy_id}/servicePerimeters/{perimeter_name}`
   *
   * @var string
   */
  public $servicePerimeterDryRun;

  /**
   * The resource (for example, `projects/123` or `folders/456`) that directly
   * owns or is restricted by the enforced perimeter.
   *
   * @param string $restrictedResource
   */
  public function setRestrictedResource($restrictedResource)
  {
    $this->restrictedResource = $restrictedResource;
  }
  /**
   * @return string
   */
  public function getRestrictedResource()
  {
    return $this->restrictedResource;
  }
  /**
   * The resource (for example, `projects/123` or `folders/456`) that directly
   * owns or is restricted by the dry-run perimeter.
   *
   * @param string $restrictedResourceDryRun
   */
  public function setRestrictedResourceDryRun($restrictedResourceDryRun)
  {
    $this->restrictedResourceDryRun = $restrictedResourceDryRun;
  }
  /**
   * @return string
   */
  public function getRestrictedResourceDryRun()
  {
    return $this->restrictedResourceDryRun;
  }
  /**
   * Fully qualified name of the configured enforced perimeter. This field is
   * empty if no enforced perimeter applies. Format:
   * `accessPolicies/{policy_id}/servicePerimeters/{perimeter_name}`
   *
   * @param string $servicePerimeter
   */
  public function setServicePerimeter($servicePerimeter)
  {
    $this->servicePerimeter = $servicePerimeter;
  }
  /**
   * @return string
   */
  public function getServicePerimeter()
  {
    return $this->servicePerimeter;
  }
  /**
   * Fully qualified name of the configured dry-run perimeter. This field is
   * empty if no dry-run perimeter configuration applies. Format:
   * `accessPolicies/{policy_id}/servicePerimeters/{perimeter_name}`
   *
   * @param string $servicePerimeterDryRun
   */
  public function setServicePerimeterDryRun($servicePerimeterDryRun)
  {
    $this->servicePerimeterDryRun = $servicePerimeterDryRun;
  }
  /**
   * @return string
   */
  public function getServicePerimeterDryRun()
  {
    return $this->servicePerimeterDryRun;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LookupConfiguredServicePerimeterResponse::class, 'Google_Service_AccessContextManager_LookupConfiguredServicePerimeterResponse');
