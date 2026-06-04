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

class GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLeadFormAssetParameters extends \Google\Model
{
  protected $adAssetApplyParametersType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationAdAssetApplyParameters::class;
  protected $adAssetApplyParametersDataType = '';
  /**
   * If true, the "Submit Lead Form" goal will be set on the target campaign. As
   * a result, ads will be shown as lead form creative ads. If false, the
   * "Submit Lead Form" goal will not be set on the campaign and ads will
   * contain lead form assets.
   *
   * @var bool
   */
  public $setSubmitLeadFormAssetCampaignGoal;

  /**
   * Required. Lead form assets to be added. This is a required field.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationAdAssetApplyParameters $adAssetApplyParameters
   */
  public function setAdAssetApplyParameters(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationAdAssetApplyParameters $adAssetApplyParameters)
  {
    $this->adAssetApplyParameters = $adAssetApplyParameters;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationAdAssetApplyParameters
   */
  public function getAdAssetApplyParameters()
  {
    return $this->adAssetApplyParameters;
  }
  /**
   * If true, the "Submit Lead Form" goal will be set on the target campaign. As
   * a result, ads will be shown as lead form creative ads. If false, the
   * "Submit Lead Form" goal will not be set on the campaign and ads will
   * contain lead form assets.
   *
   * @param bool $setSubmitLeadFormAssetCampaignGoal
   */
  public function setSetSubmitLeadFormAssetCampaignGoal($setSubmitLeadFormAssetCampaignGoal)
  {
    $this->setSubmitLeadFormAssetCampaignGoal = $setSubmitLeadFormAssetCampaignGoal;
  }
  /**
   * @return bool
   */
  public function getSetSubmitLeadFormAssetCampaignGoal()
  {
    return $this->setSubmitLeadFormAssetCampaignGoal;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLeadFormAssetParameters::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLeadFormAssetParameters');
