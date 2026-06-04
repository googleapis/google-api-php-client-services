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

class GoogleAdsSearchads360V23ResourcesCombinedAudience extends \Google\Model
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
   * Enabled status - combined audience is enabled and can be targeted.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Removed status - combined audience is removed and cannot be used for
   * targeting.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Output only. Description of this combined audience.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. ID of the combined audience.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. Name of the combined audience. It should be unique across all
   * combined audiences.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the combined audience. Combined audience
   * names have the form:
   * `customers/{customer_id}/combinedAudience/{combined_audience_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Status of this combined audience. Indicates whether the
   * combined audience is enabled or removed.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. Description of this combined audience.
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
   * Output only. ID of the combined audience.
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
   * Output only. Name of the combined audience. It should be unique across all
   * combined audiences.
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
   * Immutable. The resource name of the combined audience. Combined audience
   * names have the form:
   * `customers/{customer_id}/combinedAudience/{combined_audience_id}`
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
   * Output only. Status of this combined audience. Indicates whether the
   * combined audience is enabled or removed.
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
class_alias(GoogleAdsSearchads360V23ResourcesCombinedAudience::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCombinedAudience');
