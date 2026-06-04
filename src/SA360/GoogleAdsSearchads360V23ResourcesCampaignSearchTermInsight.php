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

class GoogleAdsSearchads360V23ResourcesCampaignSearchTermInsight extends \Google\Model
{
  /**
   * Output only. The ID of the campaign.
   *
   * @var string
   */
  public $campaignId;
  /**
   * Output only. The label for the search category. An empty string denotes the
   * catch-all category for search terms that didn't fit into another category.
   *
   * @var string
   */
  public $categoryLabel;
  /**
   * Output only. The ID of the insight.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The resource name of the campaign level search term insight.
   * Campaign level search term insight resource names have the form: `customers
   * /{customer_id}/campaignSearchTermInsights/{campaign_id}~{category_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. The ID of the campaign.
   *
   * @param string $campaignId
   */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /**
   * @return string
   */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /**
   * Output only. The label for the search category. An empty string denotes the
   * catch-all category for search terms that didn't fit into another category.
   *
   * @param string $categoryLabel
   */
  public function setCategoryLabel($categoryLabel)
  {
    $this->categoryLabel = $categoryLabel;
  }
  /**
   * @return string
   */
  public function getCategoryLabel()
  {
    return $this->categoryLabel;
  }
  /**
   * Output only. The ID of the insight.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The resource name of the campaign level search term insight.
   * Campaign level search term insight resource names have the form: `customers
   * /{customer_id}/campaignSearchTermInsights/{campaign_id}~{category_id}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignSearchTermInsight::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignSearchTermInsight');
