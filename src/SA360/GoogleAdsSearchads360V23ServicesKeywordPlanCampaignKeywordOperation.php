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

class GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation extends \Google\Model
{
  protected $createType = GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword::class;
  protected $createDataType = '';
  /**
   * Remove operation: A resource name for the removed Keyword Plan campaign
   * keywords expected in this format: `customers/{customer_id}/keywordPlanCampa
   * ignKeywords/{kp_campaign_keyword_id}`
   *
   * @var string
   */
  public $remove;
  protected $updateType = GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword::class;
  protected $updateDataType = '';
  /**
   * The FieldMask that determines which resource fields are modified in an
   * update.
   *
   * @var string
   */
  public $updateMask;

  /**
   * Create operation: No resource name is expected for the new Keyword Plan
   * campaign keyword.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword $create
   */
  public function setCreate(GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword $create)
  {
    $this->create = $create;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword
   */
  public function getCreate()
  {
    return $this->create;
  }
  /**
   * Remove operation: A resource name for the removed Keyword Plan campaign
   * keywords expected in this format: `customers/{customer_id}/keywordPlanCampa
   * ignKeywords/{kp_campaign_keyword_id}`
   *
   * @param string $remove
   */
  public function setRemove($remove)
  {
    $this->remove = $remove;
  }
  /**
   * @return string
   */
  public function getRemove()
  {
    return $this->remove;
  }
  /**
   * Update operation: The Keyword Plan campaign keyword expected to have a
   * valid resource name.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword $update
   */
  public function setUpdate(GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword $update)
  {
    $this->update = $update;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword
   */
  public function getUpdate()
  {
    return $this->update;
  }
  /**
   * The FieldMask that determines which resource fields are modified in an
   * update.
   *
   * @param string $updateMask
   */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /**
   * @return string
   */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation');
