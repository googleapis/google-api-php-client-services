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
 * The "folders" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudassetService = new Google_Service_CloudAsset(...);
 *   $folders = $cloudassetService->folders;
 *  </code>
 */
class Google_Service_CloudAsset_Resource_Folders extends Google_Service_Resource
{
  /**
   * Exports assets with time and resource types to a given Cloud Storage
   * location. The output format is newline-delimited JSON. This API implements
   * the google.longrunning.Operation API allowing you to keep track of the
   * export. (folders.exportAssets)
   *
   * @param string $parent Required. The relative name of the root asset. This can
   * only be an organization number (such as "organizations/123"), a project ID
   * (such as "projects/my-project-id"), a project number (such as
   * "projects/12345"), or a folder number (such as "folders/123").
   * @param Google_Service_CloudAsset_ExportAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudAsset_Operation
   */
  public function exportAssets($parent, Google_Service_CloudAsset_ExportAssetsRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('exportAssets', array($params), "Google_Service_CloudAsset_Operation");
  }
}
