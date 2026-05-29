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

namespace Google\Service\Contactcenterinsights\Resource;

use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1Diagnostic;
use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1ListDiagnosticsResponse;
use Google\Service\Contactcenterinsights\GoogleProtobufEmpty;

/**
 * The "diagnostics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contactcenterinsightsService = new Google\Service\Contactcenterinsights(...);
 *   $diagnostics = $contactcenterinsightsService->projects_locations_diagnostics;
 *  </code>
 */
class ProjectsLocationsDiagnostics extends \Google\Service\Resource
{
  /**
   * Deletes a diagnostic. (diagnostics.delete)
   *
   * @param string $name Required. The name of the diagnostic to delete.
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Gets a diagnostic. (diagnostics.get)
   *
   * @param string $name Required. The name of the diagnostic to retrieve.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudContactcenterinsightsV1Diagnostic
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudContactcenterinsightsV1Diagnostic::class);
  }
  /**
   * Lists diagnostics. (diagnostics.listProjectsLocationsDiagnostics)
   *
   * @param string $parent Required. The parent resource of the diagnostics.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string appId Optional. The CES App ID to filter diagnostics by.
   * @opt_param string appVersion Optional. The CES App version to filter
   * diagnostics by. Setting to "-" filters to diagnostics created using "-" (the
   * latest draft version). Note that reports created at different times may
   * correspond to different draft instructions. Setting to "" (empty) retrieves
   * all diagnostics for the app_id regardless of version.
   * @opt_param string filter Optional. A filter to apply to the list (e.g.
   * `create_time > "2023-01-01T00:00:00Z"`).
   * @opt_param int pageSize Optional. The maximum number of diagnostics to
   * return. The service may return fewer than this value. If unspecified, at most
   * 100 diagnostics will be returned. The maximum value is 1000; values above
   * 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListDiagnostics` call. Provide this to retrieve the subsequent page.
   * @return GoogleCloudContactcenterinsightsV1ListDiagnosticsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsDiagnostics($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudContactcenterinsightsV1ListDiagnosticsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDiagnostics::class, 'Google_Service_Contactcenterinsights_Resource_ProjectsLocationsDiagnostics');
