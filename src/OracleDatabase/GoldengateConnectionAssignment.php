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

namespace Google\Service\OracleDatabase;

class GoldengateConnectionAssignment extends \Google\Model
{
  /**
   * Output only. The time when the connection assignment was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Immutable. The display name for the
   * GoldengateConnectionAssignment.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The OCID of the entitlement linked to this resource.
   *
   * @var string
   */
  public $entitlementId;
  /**
   * Optional. The labels or tags associated with the
   * GoldengateConnectionAssignment.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The name of the GoldengateConnectionAssignment resource in the
   * following format: projects/{project}/locations/{region}/goldengateConnectio
   * nAssignments/{goldengate_connection_assignment}
   *
   * @var string
   */
  public $name;
  protected $propertiesType = GoldengateConnectionAssignmentProperties::class;
  protected $propertiesDataType = '';

  /**
   * Output only. The time when the connection assignment was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Immutable. The display name for the
   * GoldengateConnectionAssignment.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. The OCID of the entitlement linked to this resource.
   *
   * @param string $entitlementId
   */
  public function setEntitlementId($entitlementId)
  {
    $this->entitlementId = $entitlementId;
  }
  /**
   * @return string
   */
  public function getEntitlementId()
  {
    return $this->entitlementId;
  }
  /**
   * Optional. The labels or tags associated with the
   * GoldengateConnectionAssignment.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. The name of the GoldengateConnectionAssignment resource in the
   * following format: projects/{project}/locations/{region}/goldengateConnectio
   * nAssignments/{goldengate_connection_assignment}
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
   * Required. Immutable. The properties of the GoldengateConnectionAssignment.
   *
   * @param GoldengateConnectionAssignmentProperties $properties
   */
  public function setProperties(GoldengateConnectionAssignmentProperties $properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return GoldengateConnectionAssignmentProperties
   */
  public function getProperties()
  {
    return $this->properties;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoldengateConnectionAssignment::class, 'Google_Service_OracleDatabase_GoldengateConnectionAssignment');
