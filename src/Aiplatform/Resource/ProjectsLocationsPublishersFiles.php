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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1ClaudeFile;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1CreateFileRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1DeleteFileResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1DownloadFileResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListFilesResponse;

/**
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $files = $aiplatformService->projects_locations_publishers_files;
 *  </code>
 */
class ProjectsLocationsPublishersFiles extends \Google\Service\Resource
{
  /**
   * Deletes the given file. Returns the deleted file's ID rather than an empty
   * body. See `DeleteFileResponse`. (files.delete)
   *
   * @param string $name Required. The name of the file to delete. Format:
   * `projects/{project}/locations/{location}/publishers/{publisher}/files/{file}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1DeleteFileResponse
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleCloudAiplatformV1DeleteFileResponse::class);
  }
  /**
   * Downloads the contents of the given file. Only files marked `downloadable`
   * can be retrieved this way; user-uploaded files are not downloadable.
   * (files.download)
   *
   * @param string $name Required. The name of the file to download. Format:
   * `projects/{project}/locations/{location}/publishers/{publisher}/files/{file}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1DownloadFileResponse
   * @throws \Google\Service\Exception
   */
  public function download($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('download', [$params], GoogleCloudAiplatformV1DownloadFileResponse::class);
  }
  /**
   * Gets the metadata for the given file. (files.get)
   *
   * @param string $name Required. The name of the file to get. Format:
   * `projects/{project}/locations/{location}/publishers/{publisher}/files/{file}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1ClaudeFile
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1ClaudeFile::class);
  }
  /**
   * Lists the files owned by the requesting project and location. Supports two
   * mutually exclusive modes: paginated listing via an opaque `page` cursor, or
   * batch fetch by `ids`. See `ListFilesRequest`.
   * (files.listProjectsLocationsPublishersFiles)
   *
   * @param string $parent Required. The location to list files under. Format:
   * `projects/{project}/locations/{location}`
   * @param string $publishersId
   * @param array $optParams Optional parameters.
   *
   * @opt_param int limit Optional. The number of files to return per page.
   * Defaults to 20 if unset, maximum 1000. Mutually exclusive with `ids`.
   * @opt_param string page Optional. Opaque pagination cursor. Pass the previous
   * response's `next_page` to fetch the next page. Mutually exclusive with `ids`.
   * @return GoogleCloudAiplatformV1ListFilesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsPublishersFiles($parent, $publishersId, $optParams = [])
  {
    $params = ['parent' => $parent, 'publishersId' => $publishersId];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListFilesResponse::class);
  }
  /**
   * Uploads a file that can be referenced by ID from subsequent Claude model
   * requests. (files.upload)
   *
   * @param string $parent Required. The location to create the file under.
   * Format: `projects/{project}/locations/{location}`
   * @param string $publishersId
   * @param GoogleCloudAiplatformV1CreateFileRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1ClaudeFile
   * @throws \Google\Service\Exception
   */
  public function upload($parent, $publishersId, GoogleCloudAiplatformV1CreateFileRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'publishersId' => $publishersId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('upload', [$params], GoogleCloudAiplatformV1ClaudeFile::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsPublishersFiles::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsPublishersFiles');
