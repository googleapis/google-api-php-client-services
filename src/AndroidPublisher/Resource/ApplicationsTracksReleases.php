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

namespace Google\Service\AndroidPublisher\Resource;

use Google\Service\AndroidPublisher\ListReleaseSummariesResponse;

/**
 * The "releases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google\Service\AndroidPublisher(...);
 *   $releases = $androidpublisherService->applications_tracks_releases;
 *  </code>
 */
class ApplicationsTracksReleases extends \Google\Service\Resource
{
  /**
   * Returns the list of all releases for a given track. This excludes any
   * releases that are obsolete. (releases.listApplicationsTracksReleases)
   *
   * @param string $parent Required. The parent track, which owns this collection
   * of releases. Format: applications/{package_name}/tracks/{track}
   * @param array $optParams Optional parameters.
   * @return ListReleaseSummariesResponse
   * @throws \Google\Service\Exception
   */
  public function listApplicationsTracksReleases($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListReleaseSummariesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApplicationsTracksReleases::class, 'Google_Service_AndroidPublisher_Resource_ApplicationsTracksReleases');
