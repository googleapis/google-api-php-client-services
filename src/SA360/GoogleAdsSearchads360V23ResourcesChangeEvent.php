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

class GoogleAdsSearchads360V23ResourcesChangeEvent extends \Google\Model
{
  /**
   * No value has been specified.
   */
  public const CHANGE_RESOURCE_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents an unclassified resource unknown in
   * this version.
   */
  public const CHANGE_RESOURCE_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * An Ad resource change.
   */
  public const CHANGE_RESOURCE_TYPE_AD = 'AD';
  /**
   * An AdGroup resource change.
   */
  public const CHANGE_RESOURCE_TYPE_AD_GROUP = 'AD_GROUP';
  /**
   * An AdGroupCriterion resource change.
   */
  public const CHANGE_RESOURCE_TYPE_AD_GROUP_CRITERION = 'AD_GROUP_CRITERION';
  /**
   * A Campaign resource change.
   */
  public const CHANGE_RESOURCE_TYPE_CAMPAIGN = 'CAMPAIGN';
  /**
   * A CampaignBudget resource change.
   */
  public const CHANGE_RESOURCE_TYPE_CAMPAIGN_BUDGET = 'CAMPAIGN_BUDGET';
  /**
   * An AdGroupBidModifier resource change.
   */
  public const CHANGE_RESOURCE_TYPE_AD_GROUP_BID_MODIFIER = 'AD_GROUP_BID_MODIFIER';
  /**
   * A CampaignCriterion resource change.
   */
  public const CHANGE_RESOURCE_TYPE_CAMPAIGN_CRITERION = 'CAMPAIGN_CRITERION';
  /**
   * A Feed resource change.
   */
  public const CHANGE_RESOURCE_TYPE_FEED = 'FEED';
  /**
   * A FeedItem resource change.
   */
  public const CHANGE_RESOURCE_TYPE_FEED_ITEM = 'FEED_ITEM';
  /**
   * A CampaignFeed resource change.
   */
  public const CHANGE_RESOURCE_TYPE_CAMPAIGN_FEED = 'CAMPAIGN_FEED';
  /**
   * An AdGroupFeed resource change.
   */
  public const CHANGE_RESOURCE_TYPE_AD_GROUP_FEED = 'AD_GROUP_FEED';
  /**
   * An AdGroupAd resource change.
   */
  public const CHANGE_RESOURCE_TYPE_AD_GROUP_AD = 'AD_GROUP_AD';
  /**
   * An Asset resource change.
   */
  public const CHANGE_RESOURCE_TYPE_ASSET = 'ASSET';
  /**
   * A CustomerAsset resource change.
   */
  public const CHANGE_RESOURCE_TYPE_CUSTOMER_ASSET = 'CUSTOMER_ASSET';
  /**
   * A CampaignAsset resource change.
   */
  public const CHANGE_RESOURCE_TYPE_CAMPAIGN_ASSET = 'CAMPAIGN_ASSET';
  /**
   * An AdGroupAsset resource change.
   */
  public const CHANGE_RESOURCE_TYPE_AD_GROUP_ASSET = 'AD_GROUP_ASSET';
  /**
   * An AssetSet resource change.
   */
  public const CHANGE_RESOURCE_TYPE_ASSET_SET = 'ASSET_SET';
  /**
   * An AssetSetAsset resource change.
   */
  public const CHANGE_RESOURCE_TYPE_ASSET_SET_ASSET = 'ASSET_SET_ASSET';
  /**
   * A CampaignAssetSet resource change.
   */
  public const CHANGE_RESOURCE_TYPE_CAMPAIGN_ASSET_SET = 'CAMPAIGN_ASSET_SET';
  /**
   * No value has been specified.
   */
  public const CLIENT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents an unclassified client type unknown
   * in this version.
   */
  public const CLIENT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Changes made through the "ads.google.com". For example, changes made
   * through campaign management.
   */
  public const CLIENT_TYPE_GOOGLE_ADS_WEB_CLIENT = 'GOOGLE_ADS_WEB_CLIENT';
  /**
   * Changes made through Google Ads automated rules.
   */
  public const CLIENT_TYPE_GOOGLE_ADS_AUTOMATED_RULE = 'GOOGLE_ADS_AUTOMATED_RULE';
  /**
   * Changes made through Google Ads scripts.
   */
  public const CLIENT_TYPE_GOOGLE_ADS_SCRIPTS = 'GOOGLE_ADS_SCRIPTS';
  /**
   * Changes made by Google Ads bulk upload.
   */
  public const CLIENT_TYPE_GOOGLE_ADS_BULK_UPLOAD = 'GOOGLE_ADS_BULK_UPLOAD';
  /**
   * Changes made by Google Ads API.
   */
  public const CLIENT_TYPE_GOOGLE_ADS_API = 'GOOGLE_ADS_API';
  /**
   * Changes made by Google Ads Editor. This value is a placeholder. The API
   * does not return these changes.
   */
  public const CLIENT_TYPE_GOOGLE_ADS_EDITOR = 'GOOGLE_ADS_EDITOR';
  /**
   * Changes made by Google Ads mobile app.
   */
  public const CLIENT_TYPE_GOOGLE_ADS_MOBILE_APP = 'GOOGLE_ADS_MOBILE_APP';
  /**
   * Changes made through Google Ads recommendations.
   */
  public const CLIENT_TYPE_GOOGLE_ADS_RECOMMENDATIONS = 'GOOGLE_ADS_RECOMMENDATIONS';
  /**
   * Changes made through Search Ads 360 Sync.
   */
  public const CLIENT_TYPE_SEARCH_ADS_360_SYNC = 'SEARCH_ADS_360_SYNC';
  /**
   * Changes made through Search Ads 360 Post.
   */
  public const CLIENT_TYPE_SEARCH_ADS_360_POST = 'SEARCH_ADS_360_POST';
  /**
   * Changes made through internal tools. For example, when a user sets a URL
   * template on an entity like a Campaign, it's automatically wrapped with the
   * SA360 Clickserver URL.
   */
  public const CLIENT_TYPE_INTERNAL_TOOL = 'INTERNAL_TOOL';
  /**
   * Types of changes that are not categorized, for example, changes made by
   * coupon redemption through Google Ads.
   */
  public const CLIENT_TYPE_OTHER = 'OTHER';
  /**
   * Changes made by subscribing to Google Ads recommendations.
   */
  public const CLIENT_TYPE_GOOGLE_ADS_RECOMMENDATIONS_SUBSCRIPTION = 'GOOGLE_ADS_RECOMMENDATIONS_SUBSCRIPTION';
  /**
   * No value has been specified.
   */
  public const RESOURCE_CHANGE_OPERATION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents an unclassified operation unknown in
   * this version.
   */
  public const RESOURCE_CHANGE_OPERATION_UNKNOWN = 'UNKNOWN';
  /**
   * The resource was created.
   */
  public const RESOURCE_CHANGE_OPERATION_CREATE = 'CREATE';
  /**
   * The resource was modified.
   */
  public const RESOURCE_CHANGE_OPERATION_UPDATE = 'UPDATE';
  /**
   * The resource was removed.
   */
  public const RESOURCE_CHANGE_OPERATION_REMOVE = 'REMOVE';
  /**
   * Output only. The AdGroup affected by this change.
   *
   * @var string
   */
  public $adGroup;
  /**
   * Output only. The Asset affected by this change.
   *
   * @var string
   */
  public $asset;
  /**
   * Output only. The Campaign affected by this change.
   *
   * @var string
   */
  public $campaign;
  /**
   * Output only. Time at which the change was committed on this resource.
   *
   * @var string
   */
  public $changeDateTime;
  /**
   * Output only. The Simply resource this change occurred on.
   *
   * @var string
   */
  public $changeResourceName;
  /**
   * Output only. The type of the changed resource. This dictates what resource
   * will be set in old_resource and new_resource.
   *
   * @var string
   */
  public $changeResourceType;
  /**
   * Output only. A list of fields that are changed in the returned resource.
   *
   * @var string
   */
  public $changedFields;
  /**
   * Output only. Where the change was made through.
   *
   * @var string
   */
  public $clientType;
  protected $newResourceType = GoogleAdsSearchads360V23ResourcesChangeEventChangedResource::class;
  protected $newResourceDataType = '';
  protected $oldResourceType = GoogleAdsSearchads360V23ResourcesChangeEventChangedResource::class;
  protected $oldResourceDataType = '';
  /**
   * Output only. The operation on the changed resource.
   *
   * @var string
   */
  public $resourceChangeOperation;
  /**
   * Output only. The resource name of the change event. Change event resource
   * names have the form: `customers/{customer_id}/changeEvents/{timestamp_micro
   * s}~{command_index}~{mutate_index}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The email of the user who made this change.
   *
   * @var string
   */
  public $userEmail;

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
   * Output only. Time at which the change was committed on this resource.
   *
   * @param string $changeDateTime
   */
  public function setChangeDateTime($changeDateTime)
  {
    $this->changeDateTime = $changeDateTime;
  }
  /**
   * @return string
   */
  public function getChangeDateTime()
  {
    return $this->changeDateTime;
  }
  /**
   * Output only. The Simply resource this change occurred on.
   *
   * @param string $changeResourceName
   */
  public function setChangeResourceName($changeResourceName)
  {
    $this->changeResourceName = $changeResourceName;
  }
  /**
   * @return string
   */
  public function getChangeResourceName()
  {
    return $this->changeResourceName;
  }
  /**
   * Output only. The type of the changed resource. This dictates what resource
   * will be set in old_resource and new_resource.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD, AD_GROUP, AD_GROUP_CRITERION,
   * CAMPAIGN, CAMPAIGN_BUDGET, AD_GROUP_BID_MODIFIER, CAMPAIGN_CRITERION, FEED,
   * FEED_ITEM, CAMPAIGN_FEED, AD_GROUP_FEED, AD_GROUP_AD, ASSET,
   * CUSTOMER_ASSET, CAMPAIGN_ASSET, AD_GROUP_ASSET, ASSET_SET, ASSET_SET_ASSET,
   * CAMPAIGN_ASSET_SET
   *
   * @param self::CHANGE_RESOURCE_TYPE_* $changeResourceType
   */
  public function setChangeResourceType($changeResourceType)
  {
    $this->changeResourceType = $changeResourceType;
  }
  /**
   * @return self::CHANGE_RESOURCE_TYPE_*
   */
  public function getChangeResourceType()
  {
    return $this->changeResourceType;
  }
  /**
   * Output only. A list of fields that are changed in the returned resource.
   *
   * @param string $changedFields
   */
  public function setChangedFields($changedFields)
  {
    $this->changedFields = $changedFields;
  }
  /**
   * @return string
   */
  public function getChangedFields()
  {
    return $this->changedFields;
  }
  /**
   * Output only. Where the change was made through.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, GOOGLE_ADS_WEB_CLIENT,
   * GOOGLE_ADS_AUTOMATED_RULE, GOOGLE_ADS_SCRIPTS, GOOGLE_ADS_BULK_UPLOAD,
   * GOOGLE_ADS_API, GOOGLE_ADS_EDITOR, GOOGLE_ADS_MOBILE_APP,
   * GOOGLE_ADS_RECOMMENDATIONS, SEARCH_ADS_360_SYNC, SEARCH_ADS_360_POST,
   * INTERNAL_TOOL, OTHER, GOOGLE_ADS_RECOMMENDATIONS_SUBSCRIPTION
   *
   * @param self::CLIENT_TYPE_* $clientType
   */
  public function setClientType($clientType)
  {
    $this->clientType = $clientType;
  }
  /**
   * @return self::CLIENT_TYPE_*
   */
  public function getClientType()
  {
    return $this->clientType;
  }
  /**
   * Output only. The new resource after the change. Only changed fields will be
   * populated.
   *
   * @param GoogleAdsSearchads360V23ResourcesChangeEventChangedResource $newResource
   */
  public function setNewResource(GoogleAdsSearchads360V23ResourcesChangeEventChangedResource $newResource)
  {
    $this->newResource = $newResource;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesChangeEventChangedResource
   */
  public function getNewResource()
  {
    return $this->newResource;
  }
  /**
   * Output only. The old resource before the change. Only changed fields will
   * be populated.
   *
   * @param GoogleAdsSearchads360V23ResourcesChangeEventChangedResource $oldResource
   */
  public function setOldResource(GoogleAdsSearchads360V23ResourcesChangeEventChangedResource $oldResource)
  {
    $this->oldResource = $oldResource;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesChangeEventChangedResource
   */
  public function getOldResource()
  {
    return $this->oldResource;
  }
  /**
   * Output only. The operation on the changed resource.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CREATE, UPDATE, REMOVE
   *
   * @param self::RESOURCE_CHANGE_OPERATION_* $resourceChangeOperation
   */
  public function setResourceChangeOperation($resourceChangeOperation)
  {
    $this->resourceChangeOperation = $resourceChangeOperation;
  }
  /**
   * @return self::RESOURCE_CHANGE_OPERATION_*
   */
  public function getResourceChangeOperation()
  {
    return $this->resourceChangeOperation;
  }
  /**
   * Output only. The resource name of the change event. Change event resource
   * names have the form: `customers/{customer_id}/changeEvents/{timestamp_micro
   * s}~{command_index}~{mutate_index}`
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
   * Output only. The email of the user who made this change.
   *
   * @param string $userEmail
   */
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  /**
   * @return string
   */
  public function getUserEmail()
  {
    return $this->userEmail;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesChangeEvent::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesChangeEvent');
