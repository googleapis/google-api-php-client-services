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

class GoogleAdsSearchads360V23ResourcesSearchTermView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Search term is added to targeted keywords.
   */
  public const STATUS_ADDED = 'ADDED';
  /**
   * Search term matches a negative keyword.
   */
  public const STATUS_EXCLUDED = 'EXCLUDED';
  /**
   * Search term has been both added and excluded.
   */
  public const STATUS_ADDED_EXCLUDED = 'ADDED_EXCLUDED';
  /**
   * Search term is neither targeted nor excluded.
   */
  public const STATUS_NONE = 'NONE';
  /**
   * Output only. The ad group the search term served in.
   *
   * @var string
   */
  public $adGroup;
  /**
   * Output only. The resource name of the search term view. Search term view
   * resource names have the form:
   * `customers/{customer_id}/searchTermViews/{campaign_id}~{ad_group_id}~{URL-
   * base64_search_term}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The search term.
   *
   * @var string
   */
  public $searchTerm;
  /**
   * Output only. Indicates whether the search term is currently one of your
   * targeted or excluded keywords.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. The ad group the search term served in.
   *
   * @param string $adGroup
   */
  public function setAdGroup($adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return string
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * Output only. The resource name of the search term view. Search term view
   * resource names have the form:
   * `customers/{customer_id}/searchTermViews/{campaign_id}~{ad_group_id}~{URL-
   * base64_search_term}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. The search term.
   *
   * @param string $searchTerm
   */
  public function setSearchTerm($searchTerm)
  {
    $this->searchTerm = $searchTerm;
  }
  /**
   * @return string
   */
  public function getSearchTerm()
  {
    return $this->searchTerm;
  }
  /**
   * Output only. Indicates whether the search term is currently one of your
   * targeted or excluded keywords.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADDED, EXCLUDED, ADDED_EXCLUDED,
   * NONE
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesSearchTermView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesSearchTermView');
