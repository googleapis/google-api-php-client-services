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

namespace Google\Service\NetworkManagement;

class ProviderTag extends \Google\Model
{
  /**
   * The default value. This value is used if the status is omitted.
   */
  public const RESOURCE_TYPE_RESOURCE_TYPE_UNSPECIFIED = 'RESOURCE_TYPE_UNSPECIFIED';
  /**
   * Network path.
   */
  public const RESOURCE_TYPE_NETWORK_PATH = 'NETWORK_PATH';
  /**
   * Web path.
   */
  public const RESOURCE_TYPE_WEB_PATH = 'WEB_PATH';
  /**
   * Monitoring policy.
   */
  public const RESOURCE_TYPE_MONITORING_POLICY = 'MONITORING_POLICY';
  /**
   * Monitoring point.
   */
  public const RESOURCE_TYPE_MONITORING_POINT = 'MONITORING_POINT';
  /**
   * This represents Provider Tag that a user manually assigns to a specific
   * Rule within a Monitoring Policy. It is created when a user saves a
   * Monitoring Policy with custom tags applied to its rules.
   */
  public const RESOURCE_TYPE_MONITORING_POINT_RULE = 'MONITORING_POINT_RULE';
  /**
   * This represents auto-generated Provider Tags derived from the criteria
   * defined in a Monitoring Point Rule (e.g., Subnet, VLAN, Interface). If
   * "Auto Network Rule Tagging" is enabled, the system automatically generates
   * these tags based on the rule's filter values.
   */
  public const RESOURCE_TYPE_MONITORING_POINT_RULE_AUTO = 'MONITORING_POINT_RULE_AUTO';
  /**
   * Output only. The category of the provider tag.
   *
   * @var string
   */
  public $category;
  /**
   * Output only. The resource type of the provider tag.
   *
   * @var string
   */
  public $resourceType;
  /**
   * Output only. The value of the provider tag.
   *
   * @var string
   */
  public $value;

  /**
   * Output only. The category of the provider tag.
   *
   * @param string $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * Output only. The resource type of the provider tag.
   *
   * Accepted values: RESOURCE_TYPE_UNSPECIFIED, NETWORK_PATH, WEB_PATH,
   * MONITORING_POLICY, MONITORING_POINT, MONITORING_POINT_RULE,
   * MONITORING_POINT_RULE_AUTO
   *
   * @param self::RESOURCE_TYPE_* $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return self::RESOURCE_TYPE_*
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /**
   * Output only. The value of the provider tag.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProviderTag::class, 'Google_Service_NetworkManagement_ProviderTag');
