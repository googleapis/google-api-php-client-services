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

class GoogleAdsSearchads360V23ServicesCampaignLifecycleGoalOperation extends \Google\Model
{
  protected $createType = GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal::class;
  protected $createDataType = '';
  protected $updateType = GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal::class;
  protected $updateDataType = '';
  /**
   * Optional. FieldMask that determines which resource fields are modified in
   * an update.
   *
   * @var string
   */
  public $updateMask;

  /**
   * @param GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal $create
   */
  public function setCreate(GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal $create)
  {
    $this->create = $create;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal
   */
  public function getCreate()
  {
    return $this->create;
  }
  /**
   * Update operation: Update an existing campaign lifecycle goal. The campaign
   * field should not be set for this operation.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal $update
   */
  public function setUpdate(GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal $update)
  {
    $this->update = $update;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal
   */
  public function getUpdate()
  {
    return $this->update;
  }
  /**
   * Optional. FieldMask that determines which resource fields are modified in
   * an update.
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
class_alias(GoogleAdsSearchads360V23ServicesCampaignLifecycleGoalOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCampaignLifecycleGoalOperation');
