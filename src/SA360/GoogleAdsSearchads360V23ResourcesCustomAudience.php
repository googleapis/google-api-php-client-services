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

class GoogleAdsSearchads360V23ResourcesCustomAudience extends \Google\Collection
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
   * Enabled status - custom audience is enabled and can be targeted.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Removed status - custom audience is removed and cannot be used for
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
   * Google Ads will auto-select the best interpretation at serving time.
   */
  public const TYPE_AUTO = 'AUTO';
  /**
   * Matches users by their interests.
   */
  public const TYPE_INTEREST = 'INTEREST';
  /**
   * Matches users by topics they are researching or products they are
   * considering for purchase.
   */
  public const TYPE_PURCHASE_INTENT = 'PURCHASE_INTENT';
  /**
   * Matches users by what they searched on Google Search.
   */
  public const TYPE_SEARCH = 'SEARCH';
  protected $collection_key = 'members';
  /**
   * Description of this custom audience.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. ID of the custom audience.
   *
   * @var string
   */
  public $id;
  protected $membersType = GoogleAdsSearchads360V23ResourcesCustomAudienceMember::class;
  protected $membersDataType = 'array';
  /**
   * Name of the custom audience. It should be unique for all custom audiences
   * created by a customer. This field is required for creating operations.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the custom audience. Custom audience
   * resource names have the form:
   * `customers/{customer_id}/customAudiences/{custom_audience_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Status of this custom audience. Indicates whether the custom
   * audience is enabled or removed.
   *
   * @var string
   */
  public $status;
  /**
   * Type of the custom audience. ("INTEREST" OR "PURCHASE_INTENT" is not
   * allowed for newly created custom audience but kept for existing audiences)
   *
   * @var string
   */
  public $type;

  /**
   * Description of this custom audience.
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
   * Output only. ID of the custom audience.
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
   * List of custom audience members that this custom audience is composed of.
   * Members can be added during CustomAudience creation. If members are
   * presented in UPDATE operation, existing members will be overridden.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomAudienceMember[] $members
   */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomAudienceMember[]
   */
  public function getMembers()
  {
    return $this->members;
  }
  /**
   * Name of the custom audience. It should be unique for all custom audiences
   * created by a customer. This field is required for creating operations.
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
   * Immutable. The resource name of the custom audience. Custom audience
   * resource names have the form:
   * `customers/{customer_id}/customAudiences/{custom_audience_id}`
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
   * Output only. Status of this custom audience. Indicates whether the custom
   * audience is enabled or removed.
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
   * Type of the custom audience. ("INTEREST" OR "PURCHASE_INTENT" is not
   * allowed for newly created custom audience but kept for existing audiences)
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AUTO, INTEREST, PURCHASE_INTENT,
   * SEARCH
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
class_alias(GoogleAdsSearchads360V23ResourcesCustomAudience::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomAudience');
