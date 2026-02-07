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

namespace Google\Service\ThreatIntelligenceService\Resource;

use Google\Service\ThreatIntelligenceService\GenerateOrgProfileConfigurationRequest;
use Google\Service\ThreatIntelligenceService\Operation;

/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $threatintelligenceService = new Google\Service\ThreatIntelligenceService(...);
 *   $projects = $threatintelligenceService->projects;
 *  </code>
 */
class Projects extends \Google\Service\Resource
{
  /**
   * Triggers the generation of a Customer Profile for a project.
   * (projects.generateOrgProfile)
   *
   * @param string $name Required. The name of the project to generate the profile
   * for. Format: projects/{project}
   * @param GenerateOrgProfileConfigurationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function generateOrgProfile($name, GenerateOrgProfileConfigurationRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateOrgProfile', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Projects::class, 'Google_Service_ThreatIntelligenceService_Resource_Projects');
