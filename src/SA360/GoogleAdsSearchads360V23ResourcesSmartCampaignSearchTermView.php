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

class GoogleAdsSearchads360V23ResourcesSmartCampaignSearchTermView extends \Google\Model
{
  /**
   * Output only. The Smart campaign the search term served in.
   *
   * @var string
   */
  public $campaign;
  /**
   * Output only. The resource name of the Smart campaign search term view.
   * Smart campaign search term view resource names have the form:
   * `customers/{customer_id}/smartCampaignSearchTermViews/{campaign_id}~{URL-
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
   * Output only. The Smart campaign the search term served in.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Output only. The resource name of the Smart campaign search term view.
   * Smart campaign search term view resource names have the form:
   * `customers/{customer_id}/smartCampaignSearchTermViews/{campaign_id}~{URL-
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesSmartCampaignSearchTermView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesSmartCampaignSearchTermView');
