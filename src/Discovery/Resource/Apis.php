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

namespace Google\Service\Discovery\Resource;

use Google\Service\Discovery\DirectoryList;
use Google\Service\Discovery\RestDescription;

/**
 * The "apis" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryService = new Google\Service\Discovery(...);
 *   $apis = $discoveryService->apis;
 *  </code>
 */
class Apis extends \Google\Service\Resource
{
  /**
   * Retrieve the description of a particular version of an api. (apis.getRest)
   *
   * @param string $api The name of the API.
   * @param string $version The version of the API.
   * @param array $optParams Optional parameters.
   * @return RestDescription
   * @throws \Google\Service\Exception
   */
  public function getRest($api, $version, $optParams = [])
  {
    $params = ['api' => $api, 'version' => $version];
    $params = array_merge($params, $optParams);
    return $this->call('getRest', [$params], RestDescription::class);
  }
  /**
   * Retrieve the list of APIs supported at this endpoint. (apis.listApis)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string name Only include APIs with the given name.
   * @opt_param bool preferred Return only the preferred version of an API.
   * @return DirectoryList
   * @throws \Google\Service\Exception
   */
  public function listApis($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], DirectoryList::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Apis::class, 'Google_Service_Discovery_Resource_Apis');
