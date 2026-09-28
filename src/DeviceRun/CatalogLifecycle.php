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

namespace Google\Service\DeviceRun;

class CatalogLifecycle extends \Google\Model
{
  /**
   * State not specified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Early access. This resource may have reduced stability and availability.
   */
  public const STATE_PREVIEW = 'PREVIEW';
  /**
   * Generally available.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Still usable, but scheduled for removal.
   */
  public const STATE_DEPRECATED = 'DEPRECATED';
  protected $removalDateType = Date::class;
  protected $removalDateDataType = '';
  /**
   * Output only. Specifies the current maturity state of the resource.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. Specifies the date the resource is scheduled to be removed
   * from the catalog. Only set when `state == DEPRECATED`.
   *
   * @param Date $removalDate
   */
  public function setRemovalDate(Date $removalDate)
  {
    $this->removalDate = $removalDate;
  }
  /**
   * @return Date
   */
  public function getRemovalDate()
  {
    return $this->removalDate;
  }
  /**
   * Output only. Specifies the current maturity state of the resource.
   *
   * Accepted values: STATE_UNSPECIFIED, PREVIEW, ACTIVE, DEPRECATED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogLifecycle::class, 'Google_Service_DeviceRun_CatalogLifecycle');
