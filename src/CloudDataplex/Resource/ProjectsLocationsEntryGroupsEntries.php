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

namespace Google\Service\CloudDataplex\Resource;

use Google\Service\CloudDataplex\GoogleCloudDataplexV1Entry;
use Google\Service\CloudDataplex\GoogleCloudDataplexV1ListEntriesResponse;

/**
 * The "entries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataplexService = new Google\Service\CloudDataplex(...);
 *   $entries = $dataplexService->projects_locations_entryGroups_entries;
 *  </code>
 */
class ProjectsLocationsEntryGroupsEntries extends \Google\Service\Resource
{
  /**
   * Creates an Entry. (entries.create)
   *
   * @param string $parent Required. The resource name of the parent Entry Group:
   * projects/{project}/locations/{location}/entryGroups/{entry_group}.
   * @param GoogleCloudDataplexV1Entry $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string entryId Required. Entry identifier. It has to be unique
   * within an Entry Group.Entries corresponding to Google Cloud resources use
   * Entry ID format based on Full Resource Names
   * (https://cloud.google.com/apis/design/resource_names#full_resource_name). The
   * format is a Full Resource Name of the resource without the prefix double
   * slashes in the API Service Name part of Full Resource Name. This allows
   * retrieval of entries using their associated resource name.For example if the
   * Full Resource Name of a resource is
   * //library.googleapis.com/shelves/shelf1/books/book2, then the suggested
   * entry_id is library.googleapis.com/shelves/shelf1/books/book2.It is also
   * suggested to follow the same convention for entries corresponding to
   * resources from other providers or systems than Google Cloud.The maximum size
   * of the field is 4000 characters.
   * @return GoogleCloudDataplexV1Entry
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudDataplexV1Entry $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudDataplexV1Entry::class);
  }
  /**
   * Deletes an Entry. (entries.delete)
   *
   * @param string $name Required. The resource name of the Entry: projects/{proje
   * ct}/locations/{location}/entryGroups/{entry_group}/entries/{entry}.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDataplexV1Entry
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleCloudDataplexV1Entry::class);
  }
  /**
   * Gets a single entry. (entries.get)
   *
   * @param string $name Required. The resource name of the Entry: projects/{proje
   * ct}/locations/{location}/entryGroups/{entry_group}/entries/{entry}.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string aspectTypes Optional. Limits the aspects returned to the
   * provided aspect types. Only works if the CUSTOM view is selected.
   * @opt_param string paths Optional. Limits the aspects returned to those
   * associated with the provided paths within the Entry. Only works if the CUSTOM
   * view is selected.
   * @opt_param string view Optional. View for controlling which parts of an entry
   * are to be returned.
   * @return GoogleCloudDataplexV1Entry
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudDataplexV1Entry::class);
  }
  /**
   * Lists entries within an entry group.
   * (entries.listProjectsLocationsEntryGroupsEntries)
   *
   * @param string $parent Required. The resource name of the parent Entry Group:
   * projects/{project}/locations/{location}/entryGroups/{entry_group}.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter on the entries to return. Filters
   * are case-sensitive. The request can be filtered by the following fields:
   * entry_type, entry_source.display_name. The comparison operators are =, !=, <,
   * >, <=, >= (strings are compared according to lexical order) The logical
   * operators AND, OR, NOT can be used in the filter. Wildcard "*" can be used,
   * but for entry_type the full project id or number needs to be provided.
   * Example filter expressions: "entry_source.display_name=AnExampleDisplayName"
   * "entry_type=projects/example-project/locations/global/entryTypes/example-
   * entry_type" "entry_type=projects/example-project/locations/us/entryTypes/a*
   * OR entry_type=projects/another-project/locations" "NOT
   * entry_source.display_name=AnotherExampleDisplayName"
   * @opt_param int pageSize
   * @opt_param string pageToken Optional. The pagination token returned by a
   * previous request.
   * @return GoogleCloudDataplexV1ListEntriesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsEntryGroupsEntries($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudDataplexV1ListEntriesResponse::class);
  }
  /**
   * Updates an Entry. (entries.patch)
   *
   * @param string $name Identifier. The relative resource name of the Entry, of
   * the form: projects/{project}/locations/{location}/entryGroups/{entry_group}/e
   * ntries/{entry}.
   * @param GoogleCloudDataplexV1Entry $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing Optional. If set to true and the entry does not
   * exist, it will be created.
   * @opt_param string aspectKeys Optional. The map keys of the Aspects which
   * should be modified. Supports the following syntaxes: * - matches aspect on
   * given type and empty path * @path - matches aspect on given type and
   * specified path * * - matches aspects on given type for all paths * *@path -
   * matches aspects of all types on the given pathExisting aspects matching the
   * syntax will not be removed unless delete_missing_aspects is set to true.If
   * this field is left empty, it will be treated as specifying exactly those
   * Aspects present in the request.
   * @opt_param bool deleteMissingAspects Optional. If set to true and the
   * aspect_keys specify aspect ranges, any existing aspects from that range not
   * provided in the request will be deleted.
   * @opt_param string updateMask Optional. Mask of fields to update. To update
   * Aspects, the update_mask must contain the value "aspects".If the update_mask
   * is empty, all modifiable fields present in the request will be updated.
   * @return GoogleCloudDataplexV1Entry
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudDataplexV1Entry $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudDataplexV1Entry::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsEntryGroupsEntries::class, 'Google_Service_CloudDataplex_Resource_ProjectsLocationsEntryGroupsEntries');
