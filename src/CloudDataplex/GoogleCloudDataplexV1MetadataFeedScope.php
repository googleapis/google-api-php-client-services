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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1MetadataFeedScope extends \Google\Collection
{
  protected $collection_key = 'projects';
  /**
   * Optional. The entry groups whose entries you want to listen to. Must be in
   * the format: projects/{project_id_or_number}/locations/{location_id}/entryGr
   * oups/{entry_group_id}.
   *
   * @var string[]
   */
  public $entryGroups;
  /**
   * Optional. Whether the metadata feed is at the organization-level. If true,
   * all changes happened to the entries in the same organization as the feed
   * are published. If false, you must specify a list of projects or a list of
   * entry groups whose entries you want to listen to.The default is false.
   *
   * @var bool
   */
  public $organizationLevel;
  /**
   * Optional. The projects whose entries you want to listen to. Must be in the
   * same organization as the feed. Must be in the format:
   * projects/{project_id_or_number}.
   *
   * @var string[]
   */
  public $projects;

  /**
   * Optional. The entry groups whose entries you want to listen to. Must be in
   * the format: projects/{project_id_or_number}/locations/{location_id}/entryGr
   * oups/{entry_group_id}.
   *
   * @param string[] $entryGroups
   */
  public function setEntryGroups($entryGroups)
  {
    $this->entryGroups = $entryGroups;
  }
  /**
   * @return string[]
   */
  public function getEntryGroups()
  {
    return $this->entryGroups;
  }
  /**
   * Optional. Whether the metadata feed is at the organization-level. If true,
   * all changes happened to the entries in the same organization as the feed
   * are published. If false, you must specify a list of projects or a list of
   * entry groups whose entries you want to listen to.The default is false.
   *
   * @param bool $organizationLevel
   */
  public function setOrganizationLevel($organizationLevel)
  {
    $this->organizationLevel = $organizationLevel;
  }
  /**
   * @return bool
   */
  public function getOrganizationLevel()
  {
    return $this->organizationLevel;
  }
  /**
   * Optional. The projects whose entries you want to listen to. Must be in the
   * same organization as the feed. Must be in the format:
   * projects/{project_id_or_number}.
   *
   * @param string[] $projects
   */
  public function setProjects($projects)
  {
    $this->projects = $projects;
  }
  /**
   * @return string[]
   */
  public function getProjects()
  {
    return $this->projects;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1MetadataFeedScope::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1MetadataFeedScope');
