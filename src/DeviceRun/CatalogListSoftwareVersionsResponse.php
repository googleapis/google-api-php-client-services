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

namespace Google\Service\DeviceRun;

class CatalogListSoftwareVersionsResponse extends \Google\Collection
{
  protected $collection_key = 'softwareVersions';
  /**
   * Token to receive the next page of software versions. This will be absent if
   * the end of the response list has been reached.
   *
   * @var string
   */
  public $nextPageToken;
  protected $softwareVersionsType = CatalogSoftwareVersion::class;
  protected $softwareVersionsDataType = 'array';

  /**
   * Token to receive the next page of software versions. This will be absent if
   * the end of the response list has been reached.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * The list of software versions.
   *
   * @param CatalogSoftwareVersion[] $softwareVersions
   */
  public function setSoftwareVersions($softwareVersions)
  {
    $this->softwareVersions = $softwareVersions;
  }
  /**
   * @return CatalogSoftwareVersion[]
   */
  public function getSoftwareVersions()
  {
    return $this->softwareVersions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogListSoftwareVersionsResponse::class, 'Google_Service_DeviceRun_CatalogListSoftwareVersionsResponse');
