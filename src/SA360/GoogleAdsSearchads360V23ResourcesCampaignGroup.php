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

class GoogleAdsSearchads360V23ResourcesCampaignGroup extends \Google\Model
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
   * The campaign group is active.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The campaign group has been removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Output only. The ID of the campaign group.
   *
   * @var string
   */
  public $id;
  /**
   * The name of the campaign group. This field is required and should not be
   * empty when creating new campaign groups. It must not contain any null (code
   * point 0x0), NL line feed (code point 0xA) or carriage return (code point
   * 0xD) characters.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the campaign group. Campaign group resource
   * names have the form:
   * `customers/{customer_id}/campaignGroups/{campaign_group_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The status of the campaign group. When a new campaign group is added, the
   * status defaults to ENABLED.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. The ID of the campaign group.
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
   * The name of the campaign group. This field is required and should not be
   * empty when creating new campaign groups. It must not contain any null (code
   * point 0x0), NL line feed (code point 0xA) or carriage return (code point
   * 0xD) characters.
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
   * Immutable. The resource name of the campaign group. Campaign group resource
   * names have the form:
   * `customers/{customer_id}/campaignGroups/{campaign_group_id}`
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
   * The status of the campaign group. When a new campaign group is added, the
   * status defaults to ENABLED.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignGroup::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignGroup');
