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

use Google\Service\ThreatIntelligenceService\AlertDocument;

/**
 * The "documents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $threatintelligenceService = new Google\Service\ThreatIntelligenceService(...);
 *   $documents = $threatintelligenceService->projects_alerts_documents;
 *  </code>
 */
class ProjectsAlertsDocuments extends \Google\Service\Resource
{
  /**
   * Gets a specific document associated with an alert. (documents.get)
   *
   * @param string $name Required. Name of the alert document to get. Format:
   * projects/{project}/alerts/{alert}/documents/{document}
   * @param array $optParams Optional parameters.
   * @return AlertDocument
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AlertDocument::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsAlertsDocuments::class, 'Google_Service_ThreatIntelligenceService_Resource_ProjectsAlertsDocuments');
