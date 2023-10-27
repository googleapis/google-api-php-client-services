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

namespace Google\Service\MapsPlaces\Resource;

use Google\Service\MapsPlaces\GoogleMapsPlacesV1Place;
use Google\Service\MapsPlaces\GoogleMapsPlacesV1SearchNearbyRequest;
use Google\Service\MapsPlaces\GoogleMapsPlacesV1SearchNearbyResponse;
use Google\Service\MapsPlaces\GoogleMapsPlacesV1SearchTextRequest;
use Google\Service\MapsPlaces\GoogleMapsPlacesV1SearchTextResponse;

/**
 * The "places" collection of methods.
 * Typical usage is:
 *  <code>
 *   $placesService = new Google\Service\MapsPlaces(...);
 *   $places = $placesService->places;
 *  </code>
 */
class Places extends \Google\Service\Resource
{
  /**
   * Get place details with a place id (in a name) string. (places.get)
   *
   * @param string $name Required. A place ID returned in a Place (with "places/"
   * prefix), or equivalently the name in the same Place. Format: placesplace_id*.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode Optional. Place details will be displayed with
   * the preferred language if available. Current list of supported languages:
   * https://developers.google.com/maps/faq#languagesupport.
   * @opt_param string regionCode Optional. The Unicode country/region code (CLDR)
   * of the location where the request is coming from. This parameter is used to
   * display the place details, like region-specific place name, if available. The
   * parameter can affect results based on applicable law. For more information,
   * see https://www.unicode.org/cldr/charts/latest/supplemental/territory_languag
   * e_information.html. Note that 3-digit region codes are not currently
   * supported.
   * @return GoogleMapsPlacesV1Place
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleMapsPlacesV1Place::class);
  }
  /**
   * Search for places near locations. (places.searchNearby)
   *
   * @param GoogleMapsPlacesV1SearchNearbyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleMapsPlacesV1SearchNearbyResponse
   */
  public function searchNearby(GoogleMapsPlacesV1SearchNearbyRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('searchNearby', [$params], GoogleMapsPlacesV1SearchNearbyResponse::class);
  }
  /**
   * Text query based place search. (places.searchText)
   *
   * @param GoogleMapsPlacesV1SearchTextRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleMapsPlacesV1SearchTextResponse
   */
  public function searchText(GoogleMapsPlacesV1SearchTextRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('searchText', [$params], GoogleMapsPlacesV1SearchTextResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Places::class, 'Google_Service_MapsPlaces_Resource_Places');
