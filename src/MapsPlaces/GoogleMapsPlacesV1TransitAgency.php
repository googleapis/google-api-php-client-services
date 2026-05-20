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

class GoogleMapsPlacesV1TransitAgency extends \Google\Collection
{
  protected $collection_key = 'lines';
  protected $displayNameType = GoogleTypeLocalizedText::class;
  protected $displayNameDataType = '';
  /**
   * The URL of the agency's fare details page.
   *
   * @var string
   */
  public $fareUrl;
  protected $iconType = GoogleMapsPlacesV1TransitIcon::class;
  protected $iconDataType = '';
  protected $linesType = GoogleMapsPlacesV1TransitLine::class;
  protected $linesDataType = 'array';
  /**
   * The URL of the agency's homepage.
   *
   * @var string
   */
  public $url;

  /**
   * Agency name (e.g. "VTA") in the requested language.
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
   * The URL of the agency's fare details page.
   *
   * @param string $fareUrl
   */
  public function setFareUrl($fareUrl)
  {
    $this->fareUrl = $fareUrl;
  }
  /**
   * @return string
   */
  public function getFareUrl()
  {
    return $this->fareUrl;
  }
  /**
   * Icon identifier for localized branded icon of a transit system (e.g. London
   * Underground) which should be used instead of TransitLine.vehicle_icon in
   * the UI.
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
   * The transit lines that are served by this agency.
   *
   * @param GoogleMapsPlacesV1TransitLine[] $lines
   */
  public function setLines($lines)
  {
    $this->lines = $lines;
  }
  /**
   * @return GoogleMapsPlacesV1TransitLine[]
   */
  public function getLines()
  {
    return $this->lines;
  }
  /**
   * The URL of the agency's homepage.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleMapsPlacesV1TransitAgency::class, 'Google_Service_MapsPlaces_GoogleMapsPlacesV1TransitAgency');
