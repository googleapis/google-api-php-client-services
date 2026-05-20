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

class GoogleMapsPlacesV1TransitLine extends \Google\Model
{
  /**
   * Default value when vehicle type is not specified.
   */
  public const VEHICLE_TYPE_VEHICLE_TYPE_UNSPECIFIED = 'VEHICLE_TYPE_UNSPECIFIED';
  /**
   * Rail.
   */
  public const VEHICLE_TYPE_RAIL = 'RAIL';
  /**
   * Metro rail.
   */
  public const VEHICLE_TYPE_METRO_RAIL = 'METRO_RAIL';
  /**
   * Subway.
   */
  public const VEHICLE_TYPE_SUBWAY = 'SUBWAY';
  /**
   * Tram.
   */
  public const VEHICLE_TYPE_TRAM = 'TRAM';
  /**
   * Monorail.
   */
  public const VEHICLE_TYPE_MONORAIL = 'MONORAIL';
  /**
   * Heavy rail.
   */
  public const VEHICLE_TYPE_HEAVY_RAIL = 'HEAVY_RAIL';
  /**
   * Commuter train.
   */
  public const VEHICLE_TYPE_COMMUTER_TRAIN = 'COMMUTER_TRAIN';
  /**
   * High speed train.
   */
  public const VEHICLE_TYPE_HIGH_SPEED_TRAIN = 'HIGH_SPEED_TRAIN';
  /**
   * Long distance train.
   */
  public const VEHICLE_TYPE_LONG_DISTANCE_TRAIN = 'LONG_DISTANCE_TRAIN';
  /**
   * Bus.
   */
  public const VEHICLE_TYPE_BUS = 'BUS';
  /**
   * Intercity bus.
   */
  public const VEHICLE_TYPE_INTERCITY_BUS = 'INTERCITY_BUS';
  /**
   * Trolleybus.
   */
  public const VEHICLE_TYPE_TROLLEYBUS = 'TROLLEYBUS';
  /**
   * Share taxi.
   */
  public const VEHICLE_TYPE_SHARE_TAXI = 'SHARE_TAXI';
  /**
   * Coach.
   */
  public const VEHICLE_TYPE_COACH = 'COACH';
  /**
   * Ferry.
   */
  public const VEHICLE_TYPE_FERRY = 'FERRY';
  /**
   * Cable car.
   */
  public const VEHICLE_TYPE_CABLE_CAR = 'CABLE_CAR';
  /**
   * Gondola lift.
   */
  public const VEHICLE_TYPE_GONDOLA_LIFT = 'GONDOLA_LIFT';
  /**
   * Funicular.
   */
  public const VEHICLE_TYPE_FUNICULAR = 'FUNICULAR';
  /**
   * Special.
   */
  public const VEHICLE_TYPE_SPECIAL = 'SPECIAL';
  /**
   * Horse carriage.
   */
  public const VEHICLE_TYPE_HORSE_CARRIAGE = 'HORSE_CARRIAGE';
  /**
   * Airplane.
   */
  public const VEHICLE_TYPE_AIRPLANE = 'AIRPLANE';
  /**
   * The background color of the labels for this transit line in #RRGGBB hex
   * format, e.g. #909CE1. This color can also be used for drawing shapes for
   * this transit line.
   *
   * @var string
   */
  public $backgroundColor;
  protected $displayNameType = GoogleTypeLocalizedText::class;
  protected $displayNameDataType = '';
  protected $iconType = GoogleMapsPlacesV1TransitIcon::class;
  protected $iconDataType = '';
  /**
   * The id of the transit line that can be used to uniquely identify the line
   * among other transit lines in the same transit station. This identifier is
   * not guaranteed to be stable across different responses.
   *
   * @var string
   */
  public $id;
  protected $shortDisplayNameType = GoogleTypeLocalizedText::class;
  protected $shortDisplayNameDataType = '';
  /**
   * The text color of labels for this transit line in #RRGGBB hex format, e.g.
   * #909CE1.
   *
   * @var string
   */
  public $textColor;
  /**
   * The URL of a webpage with details about this line.
   *
   * @var string
   */
  public $url;
  protected $vehicleIconType = GoogleMapsPlacesV1TransitIcon::class;
  protected $vehicleIconDataType = '';
  /**
   * The type of vehicle using this line.
   *
   * @var string
   */
  public $vehicleType;

  /**
   * The background color of the labels for this transit line in #RRGGBB hex
   * format, e.g. #909CE1. This color can also be used for drawing shapes for
   * this transit line.
   *
   * @param string $backgroundColor
   */
  public function setBackgroundColor($backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /**
   * @return string
   */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /**
   * The long name for this transit line (e.g. "Sunnydale local").
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
   * Icon identifier for this particular line (e.g. subway lines in New York).
   *
   * @param GoogleMapsPlacesV1TransitIcon $icon
   */
  public function setIcon(GoogleMapsPlacesV1TransitIcon $icon)
  {
    $this->icon = $icon;
  }
  /**
   * @return GoogleMapsPlacesV1TransitIcon
   */
  public function getIcon()
  {
    return $this->icon;
  }
  /**
   * The id of the transit line that can be used to uniquely identify the line
   * among other transit lines in the same transit station. This identifier is
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
   * The short name for this transit line (e.g. "S2").
   *
   * @param GoogleTypeLocalizedText $shortDisplayName
   */
  public function setShortDisplayName(GoogleTypeLocalizedText $shortDisplayName)
  {
    $this->shortDisplayName = $shortDisplayName;
  }
  /**
   * @return GoogleTypeLocalizedText
   */
  public function getShortDisplayName()
  {
    return $this->shortDisplayName;
  }
  /**
   * The text color of labels for this transit line in #RRGGBB hex format, e.g.
   * #909CE1.
   *
   * @param string $textColor
   */
  public function setTextColor($textColor)
  {
    $this->textColor = $textColor;
  }
  /**
   * @return string
   */
  public function getTextColor()
  {
    return $this->textColor;
  }
  /**
   * The URL of a webpage with details about this line.
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
  /**
   * Icon identifier for this particular vehicle type.
   *
   * @param GoogleMapsPlacesV1TransitIcon $vehicleIcon
   */
  public function setVehicleIcon(GoogleMapsPlacesV1TransitIcon $vehicleIcon)
  {
    $this->vehicleIcon = $vehicleIcon;
  }
  /**
   * @return GoogleMapsPlacesV1TransitIcon
   */
  public function getVehicleIcon()
  {
    return $this->vehicleIcon;
  }
  /**
   * The type of vehicle using this line.
   *
   * Accepted values: VEHICLE_TYPE_UNSPECIFIED, RAIL, METRO_RAIL, SUBWAY, TRAM,
   * MONORAIL, HEAVY_RAIL, COMMUTER_TRAIN, HIGH_SPEED_TRAIN,
   * LONG_DISTANCE_TRAIN, BUS, INTERCITY_BUS, TROLLEYBUS, SHARE_TAXI, COACH,
   * FERRY, CABLE_CAR, GONDOLA_LIFT, FUNICULAR, SPECIAL, HORSE_CARRIAGE,
   * AIRPLANE
   *
   * @param self::VEHICLE_TYPE_* $vehicleType
   */
  public function setVehicleType($vehicleType)
  {
    $this->vehicleType = $vehicleType;
  }
  /**
   * @return self::VEHICLE_TYPE_*
   */
  public function getVehicleType()
  {
    return $this->vehicleType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleMapsPlacesV1TransitLine::class, 'Google_Service_MapsPlaces_GoogleMapsPlacesV1TransitLine');
