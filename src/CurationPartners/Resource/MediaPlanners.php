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

namespace Google\Service\CurationPartners\Resource;

use Google\Service\CurationPartners\ListMediaPlannersResponse;

/**
 * The "mediaPlanners" collection of methods.
 * Typical usage is:
 *  <code>
 *   $curationpartnersService = new Google\Service\CurationPartners(...);
 *   $mediaPlanners = $curationpartnersService->mediaPlanners;
 *  </code>
 */
class MediaPlanners extends \Google\Service\Resource
{
  /**
   * Lists all media planner accounts that the caller has access to. For curators,
   * this will return all media planners that have accepted curator terms. For
   * other accounts, attempting to list media planners will return an error.
   * (mediaPlanners.listMediaPlanners)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional query string using the [Cloud API list
   * filtering syntax](/authorized-buyers/apis/guides/list-filters). Supported
   * columns for filtering are: * `name` * `displayName` * `ancestorNames`
   * @opt_param int pageSize The maximum number of media planners to return. If
   * unspecified, at most 100 media planners will be returned. The maximum value
   * is 500; values above 500 will be coerced to 500.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.This value is received from a previous
   * `ListMediaPlanners` call in ListMediaPlannersResponse.nextPageToken.
   * @return ListMediaPlannersResponse
   * @throws \Google\Service\Exception
   */
  public function listMediaPlanners($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListMediaPlannersResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MediaPlanners::class, 'Google_Service_CurationPartners_Resource_MediaPlanners');
