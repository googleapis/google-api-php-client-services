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
 * The "replays" collection of methods.
 * Typical usage is:
 *  <code>
 *   $policysimulatorService = new Google_Service_PolicySimulator(...);
 *   $replays = $policysimulatorService->replays;
 *  </code>
 */
class Google_Service_PolicySimulator_Resource_ProjectsLocationsReplays extends Google_Service_Resource
{
  /**
   * Create a replay using the given ReplayConfig. The parent of the replay must
   * contain all resources in the overlay. For example, if the overlay contains:
   * ``` ReplayConfig { policy_overlay = map = {
   * "//cloudresourcemanager.googleapis.com/projects/project-1": ...,
   * "//cloudresourcemanager.googleapis.com/projects/project-2": ..., } ``` Then,
   * the parent used for CreateReplay must be the organization or a folder that
   * contains both projects as children. (replays.create)
   *
   * @param string $parent Required. The parent resource where this Replay will be
   * created. This must be a project, folder, or organization with included
   * location. Example: `projects/my-example-project/locations/global`
   * @param Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1Replay $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PolicySimulator_GoogleLongrunningOperation
   */
  public function create($parent, Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1Replay $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_PolicySimulator_GoogleLongrunningOperation");
  }
  /**
   * Get the specified Replay. (replays.get)
   *
   * @param string $name Required. The name of the replay to retrieve. Format is
   * `PARENT/locations/{location}/replays/{replay}` where PARENT is a project,
   * folder, or organization. Example: `projects/my-example-
   * project/locations/{location}/replays/506a5f7f-38ce-4d7d-8e03-479ce1833c36`
   * @param array $optParams Optional parameters.
   * @return Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1Replay
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1Replay");
  }
}
