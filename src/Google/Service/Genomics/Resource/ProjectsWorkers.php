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
 * The "workers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $workers = $genomicsService->workers;
 *  </code>
 */
class Google_Service_Genomics_Resource_ProjectsWorkers extends Google_Service_Resource
{
  /**
   * The worker uses this method to retrieve the assigned operation and provide
   * periodic status updates. (workers.checkIn)
   *
   * @param string $id The VM identity token for authenticating the VM instance.
   * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
   * @param Google_Service_Genomics_CheckInRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_CheckInResponse
   */
  public function checkIn($id, Google_Service_Genomics_CheckInRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('checkIn', array($params), "Google_Service_Genomics_CheckInResponse");
  }
}
