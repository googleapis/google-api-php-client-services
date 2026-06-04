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

class GoogleAdsSearchads360V23ResourcesChangeStatus extends \Google\Model
{
  /**
   * No value has been specified.
   */
  public const RESOURCE_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents an unclassified resource unknown in
   * this version.
   */
  public const RESOURCE_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The resource was created.
   */
  public const RESOURCE_STATUS_ADDED = 'ADDED';
  /**
   * The resource was modified.
   */
  public const RESOURCE_STATUS_CHANGED = 'CHANGED';
  /**
   * The resource was removed.
   */
  public const RESOURCE_STATUS_REMOVED = 'REMOVED';
  /**
   * No value has been specified.
   */
  public const RESOURCE_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents an unclassified resource unknown in
   * this version.
   */
  public const RESOURCE_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * An AdGroup resource change.
   */
  public const RESOURCE_TYPE_AD_GROUP = 'AD_GROUP';
  /**
   * An AdGroupAd resource change.
   */
  public const RESOURCE_TYPE_AD_GROUP_AD = 'AD_GROUP_AD';
  /**
   * An AdGroupCriterion resource change.
   */
  public const RESOURCE_TYPE_AD_GROUP_CRITERION = 'AD_GROUP_CRITERION';
  /**
   * A Campaign resource change.
   */
  public const RESOURCE_TYPE_CAMPAIGN = 'CAMPAIGN';
  /**
   * A CampaignCriterion resource change.
   */
  public const RESOURCE_TYPE_CAMPAIGN_CRITERION = 'CAMPAIGN_CRITERION';
  /**
   * A CampaignBudget resource change.
   */
  public const RESOURCE_TYPE_CAMPAIGN_BUDGET = 'CAMPAIGN_BUDGET';
  /**
   * A Feed resource change.
   */
  public const RESOURCE_TYPE_FEED = 'FEED';
  /**
   * A FeedItem resource change.
   */
  public const RESOURCE_TYPE_FEED_ITEM = 'FEED_ITEM';
  /**
   * An AdGroupFeed resource change.
   */
  public const RESOURCE_TYPE_AD_GROUP_FEED = 'AD_GROUP_FEED';
  /**
   * A CampaignFeed resource change.
   */
  public const RESOURCE_TYPE_CAMPAIGN_FEED = 'CAMPAIGN_FEED';
  /**
   * An AdGroupBidModifier resource change.
   */
  public const RESOURCE_TYPE_AD_GROUP_BID_MODIFIER = 'AD_GROUP_BID_MODIFIER';
  /**
   * A SharedSet resource change.
   */
  public const RESOURCE_TYPE_SHARED_SET = 'SHARED_SET';
  /**
   * A CampaignSharedSet resource change.
   */
  public const RESOURCE_TYPE_CAMPAIGN_SHARED_SET = 'CAMPAIGN_SHARED_SET';
  /**
   * An Asset resource change.
   */
  public const RESOURCE_TYPE_ASSET = 'ASSET';
  /**
   * A CustomerAsset resource change.
   */
  public const RESOURCE_TYPE_CUSTOMER_ASSET = 'CUSTOMER_ASSET';
  /**
   * A CampaignAsset resource change.
   */
  public const RESOURCE_TYPE_CAMPAIGN_ASSET = 'CAMPAIGN_ASSET';
  /**
   * An AdGroupAsset resource change.
   */
  public const RESOURCE_TYPE_AD_GROUP_ASSET = 'AD_GROUP_ASSET';
  /**
   * A CombinedAudience resource change.
   */
  public const RESOURCE_TYPE_COMBINED_AUDIENCE = 'COMBINED_AUDIENCE';
  /**
   * An AssetGroup resource change.
   */
  public const RESOURCE_TYPE_ASSET_GROUP = 'ASSET_GROUP';
  /**
   * An AssetSet resource change.
   */
  public const RESOURCE_TYPE_ASSET_SET = 'ASSET_SET';
  /**
   * A CampaignAssetSet resource change.
   */
  public const RESOURCE_TYPE_CAMPAIGN_ASSET_SET = 'CAMPAIGN_ASSET_SET';
  /**
   * Output only. The AdGroup affected by this change.
   *
   * @var string
   */
  public $adGroup;
  /**
   * Output only. The AdGroupAd affected by this change.
   *
   * @var string
   */
  public $adGroupAd;
  /**
   * Output only. The AdGroupAsset affected by this change.
   *
   * @var string
   */
  public $adGroupAsset;
  /**
   * Output only. The AdGroupBidModifier affected by this change.
   *
   * @var string
   */
  public $adGroupBidModifier;
  /**
   * Output only. The AdGroupCriterion affected by this change.
   *
   * @var string
   */
  public $adGroupCriterion;
  /**
   * Output only. The Asset affected by this change.
   *
   * @var string
   */
  public $asset;
  /**
   * Output only. The AssetGroup affected by this change.
   *
   * @var string
   */
  public $assetGroup;
  /**
   * Output only. The AssetSet affected by this change.
   *
   * @var string
   */
  public $assetSet;
  /**
   * Output only. The Campaign affected by this change.
   *
   * @var string
   */
  public $campaign;
  /**
   * Output only. The CampaignAsset affected by this change.
   *
   * @var string
   */
  public $campaignAsset;
  /**
   * Output only. The CampaignAssetSet affected by this change.
   *
   * @var string
   */
  public $campaignAssetSet;
  /**
   * Output only. The CampaignBudget affected by this change.
   *
   * @var string
   */
  public $campaignBudget;
  /**
   * Output only. The CampaignCriterion affected by this change.
   *
   * @var string
   */
  public $campaignCriterion;
  /**
   * Output only. The CampaignSharedSet affected by this change.
   *
   * @var string
   */
  public $campaignSharedSet;
  /**
   * Output only. The CombinedAudience affected by this change.
   *
   * @var string
   */
  public $combinedAudience;
  /**
   * Output only. The CustomerAsset affected by this change.
   *
   * @var string
   */
  public $customerAsset;
  /**
   * Output only. Time at which the most recent change has occurred on this
   * resource.
   *
   * @var string
   */
  public $lastChangeDateTime;
  /**
   * Output only. The resource name of the change status. Change status resource
   * names have the form:
   * `customers/{customer_id}/changeStatus/{change_status_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Represents the status of the changed resource.
   *
   * @var string
   */
  public $resourceStatus;
  /**
   * Output only. Represents the type of the changed resource. This dictates
   * what fields will be set. For example, for AD_GROUP, campaign and ad_group
   * fields will be set.
   *
   * @var string
   */
  public $resourceType;
  /**
   * Output only. The SharedSet affected by this change.
   *
   * @var string
   */
  public $sharedSet;

  /**
   * Output only. The AdGroup affected by this change.
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
   * Output only. The AdGroupAd affected by this change.
   *
   * @param string $adGroupAd
   */
  public function setAdGroupAd($adGroupAd)
  {
    $this->adGroupAd = $adGroupAd;
  }
  /**
   * @return string
   */
  public function getAdGroupAd()
  {
    return $this->adGroupAd;
  }
  /**
   * Output only. The AdGroupAsset affected by this change.
   *
   * @param string $adGroupAsset
   */
  public function setAdGroupAsset($adGroupAsset)
  {
    $this->adGroupAsset = $adGroupAsset;
  }
  /**
   * @return string
   */
  public function getAdGroupAsset()
  {
    return $this->adGroupAsset;
  }
  /**
   * Output only. The AdGroupBidModifier affected by this change.
   *
   * @param string $adGroupBidModifier
   */
  public function setAdGroupBidModifier($adGroupBidModifier)
  {
    $this->adGroupBidModifier = $adGroupBidModifier;
  }
  /**
   * @return string
   */
  public function getAdGroupBidModifier()
  {
    return $this->adGroupBidModifier;
  }
  /**
   * Output only. The AdGroupCriterion affected by this change.
   *
   * @param string $adGroupCriterion
   */
  public function setAdGroupCriterion($adGroupCriterion)
  {
    $this->adGroupCriterion = $adGroupCriterion;
  }
  /**
   * @return string
   */
  public function getAdGroupCriterion()
  {
    return $this->adGroupCriterion;
  }
  /**
   * Output only. The Asset affected by this change.
   *
   * @param string $asset
   */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /**
   * @return string
   */
  public function getAsset()
  {
    return $this->asset;
  }
  /**
   * Output only. The AssetGroup affected by this change.
   *
   * @param string $assetGroup
   */
  public function setAssetGroup($assetGroup)
  {
    $this->assetGroup = $assetGroup;
  }
  /**
   * @return string
   */
  public function getAssetGroup()
  {
    return $this->assetGroup;
  }
  /**
   * Output only. The AssetSet affected by this change.
   *
   * @param string $assetSet
   */
  public function setAssetSet($assetSet)
  {
    $this->assetSet = $assetSet;
  }
  /**
   * @return string
   */
  public function getAssetSet()
  {
    return $this->assetSet;
  }
  /**
   * Output only. The Campaign affected by this change.
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
   * Output only. The CampaignAsset affected by this change.
   *
   * @param string $campaignAsset
   */
  public function setCampaignAsset($campaignAsset)
  {
    $this->campaignAsset = $campaignAsset;
  }
  /**
   * @return string
   */
  public function getCampaignAsset()
  {
    return $this->campaignAsset;
  }
  /**
   * Output only. The CampaignAssetSet affected by this change.
   *
   * @param string $campaignAssetSet
   */
  public function setCampaignAssetSet($campaignAssetSet)
  {
    $this->campaignAssetSet = $campaignAssetSet;
  }
  /**
   * @return string
   */
  public function getCampaignAssetSet()
  {
    return $this->campaignAssetSet;
  }
  /**
   * Output only. The CampaignBudget affected by this change.
   *
   * @param string $campaignBudget
   */
  public function setCampaignBudget($campaignBudget)
  {
    $this->campaignBudget = $campaignBudget;
  }
  /**
   * @return string
   */
  public function getCampaignBudget()
  {
    return $this->campaignBudget;
  }
  /**
   * Output only. The CampaignCriterion affected by this change.
   *
   * @param string $campaignCriterion
   */
  public function setCampaignCriterion($campaignCriterion)
  {
    $this->campaignCriterion = $campaignCriterion;
  }
  /**
   * @return string
   */
  public function getCampaignCriterion()
  {
    return $this->campaignCriterion;
  }
  /**
   * Output only. The CampaignSharedSet affected by this change.
   *
   * @param string $campaignSharedSet
   */
  public function setCampaignSharedSet($campaignSharedSet)
  {
    $this->campaignSharedSet = $campaignSharedSet;
  }
  /**
   * @return string
   */
  public function getCampaignSharedSet()
  {
    return $this->campaignSharedSet;
  }
  /**
   * Output only. The CombinedAudience affected by this change.
   *
   * @param string $combinedAudience
   */
  public function setCombinedAudience($combinedAudience)
  {
    $this->combinedAudience = $combinedAudience;
  }
  /**
   * @return string
   */
  public function getCombinedAudience()
  {
    return $this->combinedAudience;
  }
  /**
   * Output only. The CustomerAsset affected by this change.
   *
   * @param string $customerAsset
   */
  public function setCustomerAsset($customerAsset)
  {
    $this->customerAsset = $customerAsset;
  }
  /**
   * @return string
   */
  public function getCustomerAsset()
  {
    return $this->customerAsset;
  }
  /**
   * Output only. Time at which the most recent change has occurred on this
   * resource.
   *
   * @param string $lastChangeDateTime
   */
  public function setLastChangeDateTime($lastChangeDateTime)
  {
    $this->lastChangeDateTime = $lastChangeDateTime;
  }
  /**
   * @return string
   */
  public function getLastChangeDateTime()
  {
    return $this->lastChangeDateTime;
  }
  /**
   * Output only. The resource name of the change status. Change status resource
   * names have the form:
   * `customers/{customer_id}/changeStatus/{change_status_id}`
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
   * Output only. Represents the status of the changed resource.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADDED, CHANGED, REMOVED
   *
   * @param self::RESOURCE_STATUS_* $resourceStatus
   */
  public function setResourceStatus($resourceStatus)
  {
    $this->resourceStatus = $resourceStatus;
  }
  /**
   * @return self::RESOURCE_STATUS_*
   */
  public function getResourceStatus()
  {
    return $this->resourceStatus;
  }
  /**
   * Output only. Represents the type of the changed resource. This dictates
   * what fields will be set. For example, for AD_GROUP, campaign and ad_group
   * fields will be set.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_GROUP, AD_GROUP_AD,
   * AD_GROUP_CRITERION, CAMPAIGN, CAMPAIGN_CRITERION, CAMPAIGN_BUDGET, FEED,
   * FEED_ITEM, AD_GROUP_FEED, CAMPAIGN_FEED, AD_GROUP_BID_MODIFIER, SHARED_SET,
   * CAMPAIGN_SHARED_SET, ASSET, CUSTOMER_ASSET, CAMPAIGN_ASSET, AD_GROUP_ASSET,
   * COMBINED_AUDIENCE, ASSET_GROUP, ASSET_SET, CAMPAIGN_ASSET_SET
   *
   * @param self::RESOURCE_TYPE_* $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return self::RESOURCE_TYPE_*
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /**
   * Output only. The SharedSet affected by this change.
   *
   * @param string $sharedSet
   */
  public function setSharedSet($sharedSet)
  {
    $this->sharedSet = $sharedSet;
  }
  /**
   * @return string
   */
  public function getSharedSet()
  {
    return $this->sharedSet;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesChangeStatus::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesChangeStatus');
