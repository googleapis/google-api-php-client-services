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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesSearchSearchAds360Request extends \Google\Model
{
  /**
   * Number of elements to retrieve in a single page. When too large a page is
   * requested, the server may decide to further limit the number of returned
   * resources.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Token of the page to retrieve. If not specified, the first page of results
   * will be returned. Use the value obtained from `next_page_token` in the
   * previous response in order to request the next page of results.
   *
   * @var string
   */
  public $pageToken;
  /**
   * Required. The query string.
   *
   * @var string
   */
  public $query;
  protected $searchSettingsType = GoogleAdsSearchads360V23ServicesSearchSettings::class;
  protected $searchSettingsDataType = '';
  /**
   * If true, the request is validated but not executed.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Number of elements to retrieve in a single page. When too large a page is
   * requested, the server may decide to further limit the number of returned
   * resources.
   *
   * @param int $pageSize
   */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /**
   * @return int
   */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /**
   * Token of the page to retrieve. If not specified, the first page of results
   * will be returned. Use the value obtained from `next_page_token` in the
   * previous response in order to request the next page of results.
   *
   * @param string $pageToken
   */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /**
   * @return string
   */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /**
   * Required. The query string.
   *
   * @param string $query
   */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /**
   * @return string
   */
  public function getQuery()
  {
    return $this->query;
  }
  /**
   * Settings that allow users to specify request count, summary row, and
   * results behavior.
   *
   * @param GoogleAdsSearchads360V23ServicesSearchSettings $searchSettings
   */
  public function setSearchSettings(GoogleAdsSearchads360V23ServicesSearchSettings $searchSettings)
  {
    $this->searchSettings = $searchSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSearchSettings
   */
  public function getSearchSettings()
  {
    return $this->searchSettings;
  }
  /**
   * If true, the request is validated but not executed.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSearchSearchAds360Request::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSearchSearchAds360Request');
