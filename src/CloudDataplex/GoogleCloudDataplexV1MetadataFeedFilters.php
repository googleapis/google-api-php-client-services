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

class GoogleCloudDataplexV1MetadataFeedFilters extends \Google\Collection
{
  protected $collection_key = 'entryTypes';
  /**
   * Optional. The aspect types that you want to listen to. Depending on how the
   * aspect is attached to the entry, in the format: projects/{project_id_or_num
   * ber}/locations/{location}/aspectTypes/{aspect_type_id}.
   *
   * @var string[]
   */
  public $aspectTypes;
  /**
   * Optional. The type of change that you want to listen to. If not specified,
   * all changes are published.
   *
   * @var string[]
   */
  public $changeTypes;
  /**
   * Optional. The entry types that you want to listen to, specified as relative
   * resource names in the format projects/{project_id_or_number}/locations/{loc
   * ation}/entryTypes/{entry_type_id}. Only entries that belong to the
   * specified entry types are published.
   *
   * @var string[]
   */
  public $entryTypes;

  /**
   * Optional. The aspect types that you want to listen to. Depending on how the
   * aspect is attached to the entry, in the format: projects/{project_id_or_num
   * ber}/locations/{location}/aspectTypes/{aspect_type_id}.
   *
   * @param string[] $aspectTypes
   */
  public function setAspectTypes($aspectTypes)
  {
    $this->aspectTypes = $aspectTypes;
  }
  /**
   * @return string[]
   */
  public function getAspectTypes()
  {
    return $this->aspectTypes;
  }
  /**
   * Optional. The type of change that you want to listen to. If not specified,
   * all changes are published.
   *
   * @param string[] $changeTypes
   */
  public function setChangeTypes($changeTypes)
  {
    $this->changeTypes = $changeTypes;
  }
  /**
   * @return string[]
   */
  public function getChangeTypes()
  {
    return $this->changeTypes;
  }
  /**
   * Optional. The entry types that you want to listen to, specified as relative
   * resource names in the format projects/{project_id_or_number}/locations/{loc
   * ation}/entryTypes/{entry_type_id}. Only entries that belong to the
   * specified entry types are published.
   *
   * @param string[] $entryTypes
   */
  public function setEntryTypes($entryTypes)
  {
    $this->entryTypes = $entryTypes;
  }
  /**
   * @return string[]
   */
  public function getEntryTypes()
  {
    return $this->entryTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1MetadataFeedFilters::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1MetadataFeedFilters');
