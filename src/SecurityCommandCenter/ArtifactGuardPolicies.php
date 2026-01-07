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

namespace Google\Service\SecurityCommandCenter;

class ArtifactGuardPolicies extends \Google\Collection
{
  protected $collection_key = 'failingPolicies';
  protected $failingPoliciesType = ArtifactGuardPolicy::class;
  protected $failingPoliciesDataType = 'array';
  /**
   * The ID of the resource that has policies configured for it.
   *
   * @var string
   */
  public $resourceId;

  /**
   * A list of failing policies.
   *
   * @param ArtifactGuardPolicy[] $failingPolicies
   */
  public function setFailingPolicies($failingPolicies)
  {
    $this->failingPolicies = $failingPolicies;
  }
  /**
   * @return ArtifactGuardPolicy[]
   */
  public function getFailingPolicies()
  {
    return $this->failingPolicies;
  }
  /**
   * The ID of the resource that has policies configured for it.
   *
   * @param string $resourceId
   */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /**
   * @return string
   */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ArtifactGuardPolicies::class, 'Google_Service_SecurityCommandCenter_ArtifactGuardPolicies');
