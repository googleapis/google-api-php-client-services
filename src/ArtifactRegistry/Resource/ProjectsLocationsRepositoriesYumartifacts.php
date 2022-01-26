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

namespace Google\Service\ArtifactRegistry\Resource;

use Google\Service\ArtifactRegistry\UploadYumArtifactMediaResponse;
use Google\Service\ArtifactRegistry\UploadYumArtifactRequest;

/**
 * The "yumartifacts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $artifactregistryService = new Google\Service\ArtifactRegistry(...);
 *   $yumartifacts = $artifactregistryService->yumartifacts;
 *  </code>
 */
class ProjectsLocationsRepositoriesYumartifacts extends \Google\Service\Resource
{
  /**
   * Directly uploads a Yum artifact. The returned Operation will complete once
   * the resources are uploaded. Package, Version, and File resources are created
   * based on the imported artifact. Imported artifacts that conflict with
   * existing resources are ignored. (yumartifacts.upload)
   *
   * @param string $parent The name of the parent resource where the artifacts
   * will be uploaded.
   * @param UploadYumArtifactRequest $postBody
   * @param array $optParams Optional parameters.
   * @return UploadYumArtifactMediaResponse
   */
  public function upload($parent, UploadYumArtifactRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('upload', [$params], UploadYumArtifactMediaResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsRepositoriesYumartifacts::class, 'Google_Service_ArtifactRegistry_Resource_ProjectsLocationsRepositoriesYumartifacts');
