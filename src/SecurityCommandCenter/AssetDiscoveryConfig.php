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

namespace Google\Service\SecurityCommandCenter;

class AssetDiscoveryConfig extends \Google\Collection
{
  public const INCLUSION_MODE_INCLUSION_MODE_UNSPECIFIED = 'INCLUSION_MODE_UNSPECIFIED';
  public const INCLUSION_MODE_INCLUDE_ONLY = 'INCLUDE_ONLY';
  public const INCLUSION_MODE_EXCLUDE = 'EXCLUDE';
  protected $collection_key = 'projectIds';
  /**
   * @var string[]
   */
  public $folderIds;
  /**
   * @var string
   */
  public $inclusionMode;
  /**
   * @var string[]
   */
  public $projectIds;

  /**
   * @param string[] $folderIds
   */
  public function setFolderIds($folderIds)
  {
    $this->folderIds = $folderIds;
  }
  /**
   * @return string[]
   */
  public function getFolderIds()
  {
    return $this->folderIds;
  }
  /**
   * @param self::INCLUSION_MODE_* $inclusionMode
   */
  public function setInclusionMode($inclusionMode)
  {
    $this->inclusionMode = $inclusionMode;
  }
  /**
   * @return self::INCLUSION_MODE_*
   */
  public function getInclusionMode()
  {
    return $this->inclusionMode;
  }
  /**
   * @param string[] $projectIds
   */
  public function setProjectIds($projectIds)
  {
    $this->projectIds = $projectIds;
  }
  /**
   * @return string[]
   */
  public function getProjectIds()
  {
    return $this->projectIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetDiscoveryConfig::class, 'Google_Service_SecurityCommandCenter_AssetDiscoveryConfig');
