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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesCustomInterest extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Enabled status - custom interest is enabled and can be targeted to.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Removed status - custom interest is removed and cannot be used for
   * targeting.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Allows brand advertisers to define custom affinity audience lists.
   */
  public const TYPE_CUSTOM_AFFINITY = 'CUSTOM_AFFINITY';
  /**
   * Allows advertisers to define custom intent audience lists.
   */
  public const TYPE_CUSTOM_INTENT = 'CUSTOM_INTENT';
  protected $collection_key = 'members';
  /**
   * Description of this custom interest audience.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Id of the custom interest.
   *
   * @var string
   */
  public $id;
  protected $membersType = GoogleAdsSearchads360V23ResourcesCustomInterestMember::class;
  protected $membersDataType = 'array';
  /**
   * Name of the custom interest. It should be unique across the same custom
   * affinity audience. This field is required for create operations.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the custom interest. Custom interest
   * resource names have the form:
   * `customers/{customer_id}/customInterests/{custom_interest_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Status of this custom interest. Indicates whether the custom interest is
   * enabled or removed.
   *
   * @var string
   */
  public $status;
  /**
   * Type of the custom interest, CUSTOM_AFFINITY or CUSTOM_INTENT. By default
   * the type is set to CUSTOM_AFFINITY.
   *
   * @var string
   */
  public $type;

  /**
   * Description of this custom interest audience.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. Id of the custom interest.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * List of custom interest members that this custom interest is composed of.
   * Members can be added during CustomInterest creation. If members are
   * presented in UPDATE operation, existing members will be overridden.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomInterestMember[] $members
   */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomInterestMember[]
   */
  public function getMembers()
  {
    return $this->members;
  }
  /**
   * Name of the custom interest. It should be unique across the same custom
   * affinity audience. This field is required for create operations.
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
   * Immutable. The resource name of the custom interest. Custom interest
   * resource names have the form:
   * `customers/{customer_id}/customInterests/{custom_interest_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Status of this custom interest. Indicates whether the custom interest is
   * enabled or removed.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Type of the custom interest, CUSTOM_AFFINITY or CUSTOM_INTENT. By default
   * the type is set to CUSTOM_AFFINITY.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOM_AFFINITY, CUSTOM_INTENT
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomInterest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomInterest');
