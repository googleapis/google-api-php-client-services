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

class GoogleAdsSearchads360V23ResourcesDynamicSearchAdsSearchTermView extends \Google\Model
{
  /**
   * Output only. True if query is added to targeted keywords. This field is
   * read-only.
   *
   * @var bool
   */
  public $hasMatchingKeyword;
  /**
   * Output only. True if query matches a negative keyword. This field is read-
   * only.
   *
   * @var bool
   */
  public $hasNegativeKeyword;
  /**
   * Output only. True if query matches a negative url. This field is read-only.
   *
   * @var bool
   */
  public $hasNegativeUrl;
  /**
   * Output only. The dynamically generated headline of the Dynamic Search Ad.
   * This field is read-only.
   *
   * @var string
   */
  public $headline;
  /**
   * Output only. The dynamically selected landing page URL of the impression.
   * This field is read-only.
   *
   * @var string
   */
  public $landingPage;
  /**
   * Output only. The URL of page feed item served for the impression. This
   * field is read-only.
   *
   * @var string
   */
  public $pageUrl;
  /**
   * Output only. The resource name of the dynamic search ads search term view.
   * Dynamic search ads search term view resource names have the form: `customer
   * s/{customer_id}/dynamicSearchAdsSearchTermViews/{ad_group_id}~{search_term_
   * fingerprint}~{headline_fingerprint}~{landing_page_fingerprint}~{page_url_fi
   * ngerprint}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Search term This field is read-only.
   *
   * @var string
   */
  public $searchTerm;

  /**
   * Output only. True if query is added to targeted keywords. This field is
   * read-only.
   *
   * @param bool $hasMatchingKeyword
   */
  public function setHasMatchingKeyword($hasMatchingKeyword)
  {
    $this->hasMatchingKeyword = $hasMatchingKeyword;
  }
  /**
   * @return bool
   */
  public function getHasMatchingKeyword()
  {
    return $this->hasMatchingKeyword;
  }
  /**
   * Output only. True if query matches a negative keyword. This field is read-
   * only.
   *
   * @param bool $hasNegativeKeyword
   */
  public function setHasNegativeKeyword($hasNegativeKeyword)
  {
    $this->hasNegativeKeyword = $hasNegativeKeyword;
  }
  /**
   * @return bool
   */
  public function getHasNegativeKeyword()
  {
    return $this->hasNegativeKeyword;
  }
  /**
   * Output only. True if query matches a negative url. This field is read-only.
   *
   * @param bool $hasNegativeUrl
   */
  public function setHasNegativeUrl($hasNegativeUrl)
  {
    $this->hasNegativeUrl = $hasNegativeUrl;
  }
  /**
   * @return bool
   */
  public function getHasNegativeUrl()
  {
    return $this->hasNegativeUrl;
  }
  /**
   * Output only. The dynamically generated headline of the Dynamic Search Ad.
   * This field is read-only.
   *
   * @param string $headline
   */
  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }
  /**
   * @return string
   */
  public function getHeadline()
  {
    return $this->headline;
  }
  /**
   * Output only. The dynamically selected landing page URL of the impression.
   * This field is read-only.
   *
   * @param string $landingPage
   */
  public function setLandingPage($landingPage)
  {
    $this->landingPage = $landingPage;
  }
  /**
   * @return string
   */
  public function getLandingPage()
  {
    return $this->landingPage;
  }
  /**
   * Output only. The URL of page feed item served for the impression. This
   * field is read-only.
   *
   * @param string $pageUrl
   */
  public function setPageUrl($pageUrl)
  {
    $this->pageUrl = $pageUrl;
  }
  /**
   * @return string
   */
  public function getPageUrl()
  {
    return $this->pageUrl;
  }
  /**
   * Output only. The resource name of the dynamic search ads search term view.
   * Dynamic search ads search term view resource names have the form: `customer
   * s/{customer_id}/dynamicSearchAdsSearchTermViews/{ad_group_id}~{search_term_
   * fingerprint}~{headline_fingerprint}~{landing_page_fingerprint}~{page_url_fi
   * ngerprint}`
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
   * Output only. Search term This field is read-only.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesDynamicSearchAdsSearchTermView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesDynamicSearchAdsSearchTermView');
