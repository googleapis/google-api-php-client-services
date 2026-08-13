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

namespace Google\Service\CloudRun\Resource;

use Google\Service\CloudRun\GoogleCloudRunV2UploadSourceRequest;
use Google\Service\CloudRun\GoogleCloudRunV2UploadSourceResponse;

/**
 * The "sourceUploads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $runService = new Google\Service\CloudRun(...);
 *   $sourceUploads = $runService->projects_locations_sourceUploads;
 *  </code>
 */
class ProjectsLocationsSourceUploads extends \Google\Service\Resource
{
  /**
   * Uploads a source archive to a Google Cloud Storage bucket through Cloud Run.
   * The uploaded source object should be used for Cloud Run resource deployments.
   * User is responsible for managing the lifecycle of the uploaded object. If
   * uploading through the Cloud Run API to Cloud Storage is not desired, you can
   * use the IAM Deny Policy to deny the `run.locations.uploadSource` permission
   * for all principals. (sourceUploads.upload)
   *
   * @param string $parent Required. The project and location in which the source
   * archive should be uploaded to, specified in the format `projects/locations`.
   * @param GoogleCloudRunV2UploadSourceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudRunV2UploadSourceResponse
   * @throws \Google\Service\Exception
   */
  public function upload($parent, GoogleCloudRunV2UploadSourceRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('upload', [$params], GoogleCloudRunV2UploadSourceResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSourceUploads::class, 'Google_Service_CloudRun_Resource_ProjectsLocationsSourceUploads');
