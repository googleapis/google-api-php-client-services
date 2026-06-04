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

class GoogleAdsSearchads360V23ResourcesConversionActionGoogleAnalytics4Settings extends \Google\Model
{
  /**
   * Output only. The name of the GA 4 event.
   *
   * @var string
   */
  public $eventName;
  /**
   * Output only. The ID of the GA 4 property.
   *
   * @var string
   */
  public $propertyId;
  /**
   * Output only. The name of the GA 4 property.
   *
   * @var string
   */
  public $propertyName;

  /**
   * Output only. The name of the GA 4 event.
   *
   * @param string $eventName
   */
  public function setEventName($eventName)
  {
    $this->eventName = $eventName;
  }
  /**
   * @return string
   */
  public function getEventName()
  {
    return $this->eventName;
  }
  /**
   * Output only. The ID of the GA 4 property.
   *
   * @param string $propertyId
   */
  public function setPropertyId($propertyId)
  {
    $this->propertyId = $propertyId;
  }
  /**
   * @return string
   */
  public function getPropertyId()
  {
    return $this->propertyId;
  }
  /**
   * Output only. The name of the GA 4 property.
   *
   * @param string $propertyName
   */
  public function setPropertyName($propertyName)
  {
    $this->propertyName = $propertyName;
  }
  /**
   * @return string
   */
  public function getPropertyName()
  {
    return $this->propertyName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesConversionActionGoogleAnalytics4Settings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionActionGoogleAnalytics4Settings');
