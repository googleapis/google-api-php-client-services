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

class GoogleAdsSearchads360V23ResourcesChangeEventChangedResource extends \Google\Model
{
  protected $adType = GoogleAdsSearchads360V23ResourcesAd::class;
  protected $adDataType = '';
  protected $adGroupType = GoogleAdsSearchads360V23ResourcesAdGroup::class;
  protected $adGroupDataType = '';
  protected $adGroupAdType = GoogleAdsSearchads360V23ResourcesAdGroupAd::class;
  protected $adGroupAdDataType = '';
  protected $adGroupAssetType = GoogleAdsSearchads360V23ResourcesAdGroupAsset::class;
  protected $adGroupAssetDataType = '';
  protected $adGroupBidModifierType = GoogleAdsSearchads360V23ResourcesAdGroupBidModifier::class;
  protected $adGroupBidModifierDataType = '';
  protected $adGroupCriterionType = GoogleAdsSearchads360V23ResourcesAdGroupCriterion::class;
  protected $adGroupCriterionDataType = '';
  protected $assetType = GoogleAdsSearchads360V23ResourcesAsset::class;
  protected $assetDataType = '';
  protected $assetSetType = GoogleAdsSearchads360V23ResourcesAssetSet::class;
  protected $assetSetDataType = '';
  protected $assetSetAssetType = GoogleAdsSearchads360V23ResourcesAssetSetAsset::class;
  protected $assetSetAssetDataType = '';
  protected $campaignType = GoogleAdsSearchads360V23ResourcesCampaign::class;
  protected $campaignDataType = '';
  protected $campaignAssetType = GoogleAdsSearchads360V23ResourcesCampaignAsset::class;
  protected $campaignAssetDataType = '';
  protected $campaignAssetSetType = GoogleAdsSearchads360V23ResourcesCampaignAssetSet::class;
  protected $campaignAssetSetDataType = '';
  protected $campaignBudgetType = GoogleAdsSearchads360V23ResourcesCampaignBudget::class;
  protected $campaignBudgetDataType = '';
  protected $campaignCriterionType = GoogleAdsSearchads360V23ResourcesCampaignCriterion::class;
  protected $campaignCriterionDataType = '';
  protected $customerAssetType = GoogleAdsSearchads360V23ResourcesCustomerAsset::class;
  protected $customerAssetDataType = '';

  /**
   * Output only. Set if change_resource_type == AD.
   *
   * @param GoogleAdsSearchads360V23ResourcesAd $ad
   */
  public function setAd(GoogleAdsSearchads360V23ResourcesAd $ad)
  {
    $this->ad = $ad;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAd
   */
  public function getAd()
  {
    return $this->ad;
  }
  /**
   * Output only. Set if change_resource_type == AD_GROUP.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroup $adGroup
   */
  public function setAdGroup(GoogleAdsSearchads360V23ResourcesAdGroup $adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroup
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * Output only. Set if change_resource_type == AD_GROUP_AD.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAd $adGroupAd
   */
  public function setAdGroupAd(GoogleAdsSearchads360V23ResourcesAdGroupAd $adGroupAd)
  {
    $this->adGroupAd = $adGroupAd;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAd
   */
  public function getAdGroupAd()
  {
    return $this->adGroupAd;
  }
  /**
   * Output only. Set if change_resource_type == AD_GROUP_ASSET.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAsset $adGroupAsset
   */
  public function setAdGroupAsset(GoogleAdsSearchads360V23ResourcesAdGroupAsset $adGroupAsset)
  {
    $this->adGroupAsset = $adGroupAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAsset
   */
  public function getAdGroupAsset()
  {
    return $this->adGroupAsset;
  }
  /**
   * Output only. Set if change_resource_type == AD_GROUP_BID_MODIFIER.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupBidModifier $adGroupBidModifier
   */
  public function setAdGroupBidModifier(GoogleAdsSearchads360V23ResourcesAdGroupBidModifier $adGroupBidModifier)
  {
    $this->adGroupBidModifier = $adGroupBidModifier;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupBidModifier
   */
  public function getAdGroupBidModifier()
  {
    return $this->adGroupBidModifier;
  }
  /**
   * Output only. Set if change_resource_type == AD_GROUP_CRITERION.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupCriterion $adGroupCriterion
   */
  public function setAdGroupCriterion(GoogleAdsSearchads360V23ResourcesAdGroupCriterion $adGroupCriterion)
  {
    $this->adGroupCriterion = $adGroupCriterion;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupCriterion
   */
  public function getAdGroupCriterion()
  {
    return $this->adGroupCriterion;
  }
  /**
   * Output only. Set if change_resource_type == ASSET.
   *
   * @param GoogleAdsSearchads360V23ResourcesAsset $asset
   */
  public function setAsset(GoogleAdsSearchads360V23ResourcesAsset $asset)
  {
    $this->asset = $asset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAsset
   */
  public function getAsset()
  {
    return $this->asset;
  }
  /**
   * Output only. Set if change_resource_type == ASSET_SET.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetSet $assetSet
   */
  public function setAssetSet(GoogleAdsSearchads360V23ResourcesAssetSet $assetSet)
  {
    $this->assetSet = $assetSet;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetSet
   */
  public function getAssetSet()
  {
    return $this->assetSet;
  }
  /**
   * Output only. Set if change_resource_type == ASSET_SET_ASSET.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetSetAsset $assetSetAsset
   */
  public function setAssetSetAsset(GoogleAdsSearchads360V23ResourcesAssetSetAsset $assetSetAsset)
  {
    $this->assetSetAsset = $assetSetAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetSetAsset
   */
  public function getAssetSetAsset()
  {
    return $this->assetSetAsset;
  }
  /**
   * Output only. Set if change_resource_type == CAMPAIGN.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaign $campaign
   */
  public function setCampaign(GoogleAdsSearchads360V23ResourcesCampaign $campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaign
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Output only. Set if change_resource_type == CAMPAIGN_ASSET.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignAsset $campaignAsset
   */
  public function setCampaignAsset(GoogleAdsSearchads360V23ResourcesCampaignAsset $campaignAsset)
  {
    $this->campaignAsset = $campaignAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignAsset
   */
  public function getCampaignAsset()
  {
    return $this->campaignAsset;
  }
  /**
   * Output only. Set if change_resource_type == CAMPAIGN_ASSET_SET.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignAssetSet $campaignAssetSet
   */
  public function setCampaignAssetSet(GoogleAdsSearchads360V23ResourcesCampaignAssetSet $campaignAssetSet)
  {
    $this->campaignAssetSet = $campaignAssetSet;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignAssetSet
   */
  public function getCampaignAssetSet()
  {
    return $this->campaignAssetSet;
  }
  /**
   * Output only. Set if change_resource_type == CAMPAIGN_BUDGET.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignBudget $campaignBudget
   */
  public function setCampaignBudget(GoogleAdsSearchads360V23ResourcesCampaignBudget $campaignBudget)
  {
    $this->campaignBudget = $campaignBudget;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignBudget
   */
  public function getCampaignBudget()
  {
    return $this->campaignBudget;
  }
  /**
   * Output only. Set if change_resource_type == CAMPAIGN_CRITERION.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignCriterion $campaignCriterion
   */
  public function setCampaignCriterion(GoogleAdsSearchads360V23ResourcesCampaignCriterion $campaignCriterion)
  {
    $this->campaignCriterion = $campaignCriterion;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignCriterion
   */
  public function getCampaignCriterion()
  {
    return $this->campaignCriterion;
  }
  /**
   * Output only. Set if change_resource_type == CUSTOMER_ASSET.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerAsset $customerAsset
   */
  public function setCustomerAsset(GoogleAdsSearchads360V23ResourcesCustomerAsset $customerAsset)
  {
    $this->customerAsset = $customerAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerAsset
   */
  public function getCustomerAsset()
  {
    return $this->customerAsset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesChangeEventChangedResource::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesChangeEventChangedResource');
