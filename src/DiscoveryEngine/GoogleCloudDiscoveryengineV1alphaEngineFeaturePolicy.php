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

class GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicy extends \Google\Collection
{
  /**
   * Treated as `ALLOW`.
   */
  public const DEFAULT_ACCESS_DEFAULT_ACCESS_UNSPECIFIED = 'DEFAULT_ACCESS_UNSPECIFIED';
  /**
   * Users who match neither list may use the feature.
   */
  public const DEFAULT_ACCESS_ALLOW = 'ALLOW';
  /**
   * Users who match neither list may not use the feature.
   */
  public const DEFAULT_ACCESS_DENY = 'DENY';
  protected $collection_key = 'deniedMembers';
  protected $allowedMembersType = GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicyMember::class;
  protected $allowedMembersDataType = 'array';
  /**
   * Optional. Access for users who match neither list.
   *
   * @var string
   */
  public $defaultAccess;
  protected $deniedMembersType = GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicyMember::class;
  protected $deniedMembersDataType = 'array';

  /**
   * Optional. Members who may use the feature.
   *
   * @param GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicyMember[] $allowedMembers
   */
  public function setAllowedMembers($allowedMembers)
  {
    $this->allowedMembers = $allowedMembers;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicyMember[]
   */
  public function getAllowedMembers()
  {
    return $this->allowedMembers;
  }
  /**
   * Optional. Access for users who match neither list.
   *
   * Accepted values: DEFAULT_ACCESS_UNSPECIFIED, ALLOW, DENY
   *
   * @param self::DEFAULT_ACCESS_* $defaultAccess
   */
  public function setDefaultAccess($defaultAccess)
  {
    $this->defaultAccess = $defaultAccess;
  }
  /**
   * @return self::DEFAULT_ACCESS_*
   */
  public function getDefaultAccess()
  {
    return $this->defaultAccess;
  }
  /**
   * Optional. Members who may not use the feature. Takes precedence over
   * `allowed_members`.
   *
   * @param GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicyMember[] $deniedMembers
   */
  public function setDeniedMembers($deniedMembers)
  {
    $this->deniedMembers = $deniedMembers;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicyMember[]
   */
  public function getDeniedMembers()
  {
    return $this->deniedMembers;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicy::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicy');
