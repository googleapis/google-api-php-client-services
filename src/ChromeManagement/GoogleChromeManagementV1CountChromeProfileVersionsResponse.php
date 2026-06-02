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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementV1CountChromeProfileVersionsResponse extends \Google\Collection
{
  protected $collection_key = 'profileBrowserVersions';
  /**
   * Token to specify the next page of the request.
   *
   * @var string
   */
  public $nextPageToken;
  protected $profileBrowserVersionsType = GoogleChromeManagementV1BrowserVersion::class;
  protected $profileBrowserVersionsDataType = 'array';
  /**
   * Total number browser versions matching request.
   *
   * @var int
   */
  public $totalSize;

  /**
   * Token to specify the next page of the request.
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
   * List of all browser versions reported for profiles and their install
   * counts.
   *
   * @param GoogleChromeManagementV1BrowserVersion[] $profileBrowserVersions
   */
  public function setProfileBrowserVersions($profileBrowserVersions)
  {
    $this->profileBrowserVersions = $profileBrowserVersions;
  }
  /**
   * @return GoogleChromeManagementV1BrowserVersion[]
   */
  public function getProfileBrowserVersions()
  {
    return $this->profileBrowserVersions;
  }
  /**
   * Total number browser versions matching request.
   *
   * @param int $totalSize
   */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /**
   * @return int
   */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1CountChromeProfileVersionsResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CountChromeProfileVersionsResponse');
