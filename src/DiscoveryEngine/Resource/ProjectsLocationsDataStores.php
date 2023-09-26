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

namespace Google\Service\DiscoveryEngine\Resource;

use Google\Service\DiscoveryEngine\GoogleCloudDiscoveryengineV1betaCompleteQueryResponse;

/**
 * The "dataStores" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryengineService = new Google\Service\DiscoveryEngine(...);
 *   $dataStores = $discoveryengineService->projects_locations_dataStores;
 *  </code>
 */
class ProjectsLocationsDataStores extends \Google\Service\Resource
{
  /**
   * Completes the specified user input with keyword suggestions.
   * (dataStores.completeQuery)
   *
   * @param string $dataStore Required. The parent data store resource name for
   * which the completion is performed, such as `projects/locations/global/collect
   * ions/default_collection/dataStores/default_data_store`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeTailSuggestions Indicates if tail suggestions should
   * be returned if there are no suggestions that match the full query. Even if
   * set to true, if there are suggestions that match the full query, those are
   * returned and no tail suggestions are returned.
   * @opt_param string query Required. The typeahead input used to fetch
   * suggestions. Maximum length is 128 characters.
   * @opt_param string queryModel Selects data model of query suggestions for
   * serving. Currently supported values: * `document` - Using suggestions
   * generated from user-imported documents. * `search-history` - Using
   * suggestions generated from the past history of SearchService.Search API
   * calls. Do not use it when there is no traffic for Search API. * `user-event`
   * - Using suggestions generated from user-imported search events. * `document-
   * completable` - Using suggestions taken directly from user-imported document
   * fields marked as completable. Default values: * `document` is the default
   * model for regular dataStores. * `search-history` is the default model for
   * site search dataStores.
   * @opt_param string userPseudoId A unique identifier for tracking visitors. For
   * example, this could be implemented with an HTTP cookie, which should be able
   * to uniquely identify a visitor on a single device. This unique identifier
   * should not change if the visitor logs in or out of the website. This field
   * should NOT have a fixed value such as `unknown_visitor`. This should be the
   * same identifier as UserEvent.user_pseudo_id and SearchRequest.user_pseudo_id.
   * The field must be a UTF-8 encoded string with a length limit of 128
   * characters. Otherwise, an `INVALID_ARGUMENT` error is returned.
   * @return GoogleCloudDiscoveryengineV1betaCompleteQueryResponse
   */
  public function completeQuery($dataStore, $optParams = [])
  {
    $params = ['dataStore' => $dataStore];
    $params = array_merge($params, $optParams);
    return $this->call('completeQuery', [$params], GoogleCloudDiscoveryengineV1betaCompleteQueryResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDataStores::class, 'Google_Service_DiscoveryEngine_Resource_ProjectsLocationsDataStores');
