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

class GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping extends \Google\Collection
{
  protected $collection_key = 'mappedEvents';
  protected $mappedEventsType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEvent::class;
  protected $mappedEventsDataType = 'array';
  /**
   * Output only. The maximum of the time range in which a user was last active
   * during the measurement window.
   *
   * @var string
   */
  public $maxTimePostInstallHours;
  /**
   * Output only. The minimum of the time range in which a user was last active
   * during the measurement window.
   *
   * @var string
   */
  public $minTimePostInstallHours;

  /**
   * Output only. The conversion value may be mapped to multiple events with
   * various attributes.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEvent[] $mappedEvents
   */
  public function setMappedEvents($mappedEvents)
  {
    $this->mappedEvents = $mappedEvents;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEvent[]
   */
  public function getMappedEvents()
  {
    return $this->mappedEvents;
  }
  /**
   * Output only. The maximum of the time range in which a user was last active
   * during the measurement window.
   *
   * @param string $maxTimePostInstallHours
   */
  public function setMaxTimePostInstallHours($maxTimePostInstallHours)
  {
    $this->maxTimePostInstallHours = $maxTimePostInstallHours;
  }
  /**
   * @return string
   */
  public function getMaxTimePostInstallHours()
  {
    return $this->maxTimePostInstallHours;
  }
  /**
   * Output only. The minimum of the time range in which a user was last active
   * during the measurement window.
   *
   * @param string $minTimePostInstallHours
   */
  public function setMinTimePostInstallHours($minTimePostInstallHours)
  {
    $this->minTimePostInstallHours = $minTimePostInstallHours;
  }
  /**
   * @return string
   */
  public function getMinTimePostInstallHours()
  {
    return $this->minTimePostInstallHours;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping');
