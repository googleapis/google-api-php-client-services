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

class GoogleAdsSearchads360V23ResourcesConversionActionFirebaseSettings extends \Google\Model
{
  /**
   * Output only. The event name of a Firebase conversion.
   *
   * @var string
   */
  public $eventName;
  /**
   * Output only. The Firebase project ID of the conversion.
   *
   * @var string
   */
  public $projectId;
  /**
   * Output only. The GA property ID of the conversion.
   *
   * @var string
   */
  public $propertyId;
  /**
   * Output only. The GA property name of the conversion.
   *
   * @var string
   */
  public $propertyName;

  /**
   * Output only. The event name of a Firebase conversion.
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
   * Output only. The Firebase project ID of the conversion.
   *
   * @param string $projectId
   */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /**
   * @return string
   */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /**
   * Output only. The GA property ID of the conversion.
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
   * Output only. The GA property name of the conversion.
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
class_alias(GoogleAdsSearchads360V23ResourcesConversionActionFirebaseSettings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionActionFirebaseSettings');
