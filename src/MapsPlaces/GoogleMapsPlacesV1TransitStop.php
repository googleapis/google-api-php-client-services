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

namespace Google\Service\MapsPlaces;

class GoogleMapsPlacesV1TransitStop extends \Google\Model
{
  protected $displayNameType = GoogleTypeLocalizedText::class;
  protected $displayNameDataType = '';
  /**
   * The id of the transit stop that can be used to uniquely identify the stop
   * among other transit stops in the same transit station. This identifier is
   * not guaranteed to be stable across different responses.
   *
   * @var string
   */
  public $id;
  protected $locationType = GoogleTypeLatLng::class;
  protected $locationDataType = '';
  protected $platformCodeType = GoogleTypeLocalizedText::class;
  protected $platformCodeDataType = '';
  protected $signageTextType = GoogleTypeLocalizedText::class;
  protected $signageTextDataType = '';
  protected $stopCodeType = GoogleTypeLocalizedText::class;
  protected $stopCodeDataType = '';
  /**
   * Wheelchair accessibility of this stop. This field indicates whether there
   * is an accessible path from outside the station to the stop. It does not
   * indicate whether it is possible to board a vehicle from the stop.
   *
   * @var bool
   */
  public $wheelchairAccessibleEntrance;

  /**
   * The name of the stop.
   *
   * @param GoogleTypeLocalizedText $displayName
   */
  public function setDisplayName(GoogleTypeLocalizedText $displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return GoogleTypeLocalizedText
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * The id of the transit stop that can be used to uniquely identify the stop
   * among other transit stops in the same transit station. This identifier is
   * not guaranteed to be stable across different responses.
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
   * The stop's location.
   *
   * @param GoogleTypeLatLng $location
   */
  public function setLocation(GoogleTypeLatLng $location)
  {
    $this->location = $location;
  }
  /**
   * @return GoogleTypeLatLng
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * The platform code represented by this stop. It can be formatted in any way.
   * (eg: "2", "Platform 2", "2-4", or "1x").
   *
   * @param GoogleTypeLocalizedText $platformCode
   */
  public function setPlatformCode(GoogleTypeLocalizedText $platformCode)
  {
    $this->platformCode = $platformCode;
  }
  /**
   * @return GoogleTypeLocalizedText
   */
  public function getPlatformCode()
  {
    return $this->platformCode;
  }
  /**
   * The verbatim text written on the signboard for this platform, e.g. "Towards
   * Central" or "East side & Brooklyn". When `platform_code` is absent, this
   * field is potentially the only identifier for the platform; however, both
   * `platform_code` and `signage_text` may be set simultaneously.
   *
   * @param GoogleTypeLocalizedText $signageText
   */
  public function setSignageText(GoogleTypeLocalizedText $signageText)
  {
    $this->signageText = $signageText;
  }
  /**
   * @return GoogleTypeLocalizedText
   */
  public function getSignageText()
  {
    return $this->signageText;
  }
  /**
   * Human readable identifier of the stop, used by transit agencies to
   * distinguish stops with the same name.
   *
   * @param GoogleTypeLocalizedText $stopCode
   */
  public function setStopCode(GoogleTypeLocalizedText $stopCode)
  {
    $this->stopCode = $stopCode;
  }
  /**
   * @return GoogleTypeLocalizedText
   */
  public function getStopCode()
  {
    return $this->stopCode;
  }
  /**
   * Wheelchair accessibility of this stop. This field indicates whether there
   * is an accessible path from outside the station to the stop. It does not
   * indicate whether it is possible to board a vehicle from the stop.
   *
   * @param bool $wheelchairAccessibleEntrance
   */
  public function setWheelchairAccessibleEntrance($wheelchairAccessibleEntrance)
  {
    $this->wheelchairAccessibleEntrance = $wheelchairAccessibleEntrance;
  }
  /**
   * @return bool
   */
  public function getWheelchairAccessibleEntrance()
  {
    return $this->wheelchairAccessibleEntrance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleMapsPlacesV1TransitStop::class, 'Google_Service_MapsPlaces_GoogleMapsPlacesV1TransitStop');
