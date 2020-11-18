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

/**
 * The "apis" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryService = new Google_Service_Discovery(...);
 *   $apis = $discoveryService->apis;
 *  </code>
 */
class Google_Service_Discovery_Resource_Apis extends Google_Service_Resource
{
  /**
   * Retrieve the description of a particular version of an api. (apis.getRest)
   *
   * @param string $api The name of the API.
   * @param string $version The version of the API.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Discovery_RestDescription
   */
  public function getRest($api, $version, $optParams = array())
  {
    $params = array('api' => $api, 'version' => $version);
    $params = array_merge($params, $optParams);
    return $this->call('getRest', array($params), "Google_Service_Discovery_RestDescription");
  }
  /**
   * Retrieve the list of APIs supported at this endpoint. (apis.listApis)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string name Only include APIs with the given name.
   * @opt_param bool preferred Return only the preferred version of an API.
   * @return Google_Service_Discovery_DirectoryList
   */
  public function listApis($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Discovery_DirectoryList");
  }
}
