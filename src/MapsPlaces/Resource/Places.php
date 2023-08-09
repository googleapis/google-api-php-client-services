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
