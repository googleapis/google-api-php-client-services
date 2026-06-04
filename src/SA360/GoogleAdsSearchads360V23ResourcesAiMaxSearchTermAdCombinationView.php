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

class GoogleAdsSearchads360V23ResourcesAiMaxSearchTermAdCombinationView extends \Google\Model
{
  /**
   * Output only. Ad group where the search term served.
   *
   * @var string
   */
  public $adGroup;
  /**
   * Output only. The concatenated string containing headline assets for the ad.
   * Up to three headline assets are concatenated, separated by " | ". This
   * field is read-only.
   *
   * @var string
   */
  public $headline;
  /**
   * Output only. The destination URL, which was dynamically generated. This
   * field is read-only.
   *
   * @var string
   */
  public $landingPage;
  /**
   * Output only. The resource name of the AI Max Search Term Ad Combination
   * view AI Max Search Term Ad Combination view resource names have the form: `
   * customers/{customer_id}/aiMaxSearchTermAdCombinationViews/{ad_group_id}~{UR
   * L-base64_search_term}~{URL-base64_landing_page}~{URL-base64_headline}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The search term that triggered the ad. This field is read-
   * only.
   *
   * @var string
   */
  public $searchTerm;

  /**
   * Output only. Ad group where the search term served.
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
   * Output only. The concatenated string containing headline assets for the ad.
   * Up to three headline assets are concatenated, separated by " | ". This
   * field is read-only.
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
   * Output only. The destination URL, which was dynamically generated. This
   * field is read-only.
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
   * Output only. The resource name of the AI Max Search Term Ad Combination
   * view AI Max Search Term Ad Combination view resource names have the form: `
   * customers/{customer_id}/aiMaxSearchTermAdCombinationViews/{ad_group_id}~{UR
   * L-base64_search_term}~{URL-base64_landing_page}~{URL-base64_headline}`
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
   * Output only. The search term that triggered the ad. This field is read-
   * only.
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
class_alias(GoogleAdsSearchads360V23ResourcesAiMaxSearchTermAdCombinationView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAiMaxSearchTermAdCombinationView');
