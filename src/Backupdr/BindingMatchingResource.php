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

namespace Google\Service\Backupdr;

class BindingMatchingResource extends \Google\Model
{
  protected $autoProtectionDetailsType = AutoProtectionDetails::class;
  protected $autoProtectionDetailsDataType = '';
  /**
   * Output only. The timestamp when the resource was last evaluated for
   * protection.
   *
   * @var string
   */
  public $lastEvaluationTime;
  /**
   * Output only. Identifier. The resource name of the
   * `BindingMatchingResource`. Format: `projects/{project}/locations/{location}
   * /autoProtectionPolicies/{auto_protection_policy}/bindings/{binding}/matchin
   * gResources/{matching_resource}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Resource name of the workload that matches the criteria of the
   * binding. The format can be either a relative resource name (e.g.,
   * `projects/my-project/zones/us-central1-a/instances/my-instance`) or a
   * schemeless full resource name (e.g., `//compute.googleapis.com/projects/my-
   * project/zones/us-central1-a/instances/my-instance`).
   *
   * @var string
   */
  public $resource;

  /**
   * Output only. The auto protection details of the resource from the current
   * binding's perspective.
   *
   * @param AutoProtectionDetails $autoProtectionDetails
   */
  public function setAutoProtectionDetails(AutoProtectionDetails $autoProtectionDetails)
  {
    $this->autoProtectionDetails = $autoProtectionDetails;
  }
  /**
   * @return AutoProtectionDetails
   */
  public function getAutoProtectionDetails()
  {
    return $this->autoProtectionDetails;
  }
  /**
   * Output only. The timestamp when the resource was last evaluated for
   * protection.
   *
   * @param string $lastEvaluationTime
   */
  public function setLastEvaluationTime($lastEvaluationTime)
  {
    $this->lastEvaluationTime = $lastEvaluationTime;
  }
  /**
   * @return string
   */
  public function getLastEvaluationTime()
  {
    return $this->lastEvaluationTime;
  }
  /**
   * Output only. Identifier. The resource name of the
   * `BindingMatchingResource`. Format: `projects/{project}/locations/{location}
   * /autoProtectionPolicies/{auto_protection_policy}/bindings/{binding}/matchin
   * gResources/{matching_resource}`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. Resource name of the workload that matches the criteria of the
   * binding. The format can be either a relative resource name (e.g.,
   * `projects/my-project/zones/us-central1-a/instances/my-instance`) or a
   * schemeless full resource name (e.g., `//compute.googleapis.com/projects/my-
   * project/zones/us-central1-a/instances/my-instance`).
   *
   * @param string $resource
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return string
   */
  public function getResource()
  {
    return $this->resource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BindingMatchingResource::class, 'Google_Service_Backupdr_BindingMatchingResource');
