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

class GoogleAdsSearchads360V23ResourcesCustomConversionGoal extends \Google\Collection
{
  /**
   * The status has not been specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The custom conversion goal is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The custom conversion goal is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  protected $collection_key = 'conversionActions';
  /**
   * Conversion actions that the custom conversion goal makes biddable.
   *
   * @var string[]
   */
  public $conversionActions;
  /**
   * Immutable. The ID for this custom conversion goal.
   *
   * @var string
   */
  public $id;
  /**
   * The name for this custom conversion goal.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the custom conversion goal. Custom
   * conversion goal resource names have the form:
   * `customers/{customer_id}/customConversionGoals/{goal_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The status of the custom conversion goal.
   *
   * @var string
   */
  public $status;

  /**
   * Conversion actions that the custom conversion goal makes biddable.
   *
   * @param string[] $conversionActions
   */
  public function setConversionActions($conversionActions)
  {
    $this->conversionActions = $conversionActions;
  }
  /**
   * @return string[]
   */
  public function getConversionActions()
  {
    return $this->conversionActions;
  }
  /**
   * Immutable. The ID for this custom conversion goal.
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
   * The name for this custom conversion goal.
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
   * Immutable. The resource name of the custom conversion goal. Custom
   * conversion goal resource names have the form:
   * `customers/{customer_id}/customConversionGoals/{goal_id}`
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
   * The status of the custom conversion goal.
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
class_alias(GoogleAdsSearchads360V23ResourcesCustomConversionGoal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomConversionGoal');
