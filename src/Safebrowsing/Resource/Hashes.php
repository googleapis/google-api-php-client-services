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

namespace Google\Service\Safebrowsing\Resource;

use Google\Service\Safebrowsing\GoogleSecuritySafebrowsingV5SearchHashesResponse;

/**
 * The "hashes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $safebrowsingService = new Google\Service\Safebrowsing(...);
 *   $hashes = $safebrowsingService->hashes;
 *  </code>
 */
class Hashes extends \Google\Service\Resource
{
  /**
   * Search for full hashes matching the specified prefixes. This is a custom
   * method as described by guidance at https://google.aip.dev/136 (hashes.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hashPrefixes Required. The hash prefixes to be looked up.
   * @return GoogleSecuritySafebrowsingV5SearchHashesResponse
   */
  public function search($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('search', [$params], GoogleSecuritySafebrowsingV5SearchHashesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Hashes::class, 'Google_Service_Safebrowsing_Resource_Hashes');
