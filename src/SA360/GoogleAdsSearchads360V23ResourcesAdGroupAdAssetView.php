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

class GoogleAdsSearchads360V23ResourcesAdGroupAdAssetView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const FIELD_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const FIELD_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The asset is linked for use as a headline.
   */
  public const FIELD_TYPE_HEADLINE = 'HEADLINE';
  /**
   * The asset is linked for use as a description.
   */
  public const FIELD_TYPE_DESCRIPTION = 'DESCRIPTION';
  /**
   * The asset is linked for use as mandatory ad text.
   */
  public const FIELD_TYPE_MANDATORY_AD_TEXT = 'MANDATORY_AD_TEXT';
  /**
   * The asset is linked for use as a marketing image.
   */
  public const FIELD_TYPE_MARKETING_IMAGE = 'MARKETING_IMAGE';
  /**
   * The asset is linked for use as a media bundle.
   */
  public const FIELD_TYPE_MEDIA_BUNDLE = 'MEDIA_BUNDLE';
  /**
   * The asset is linked for use as a YouTube video.
   */
  public const FIELD_TYPE_YOUTUBE_VIDEO = 'YOUTUBE_VIDEO';
  /**
   * The asset is linked to indicate that a hotels campaign is "Book on Google"
   * enabled.
   */
  public const FIELD_TYPE_BOOK_ON_GOOGLE = 'BOOK_ON_GOOGLE';
  /**
   * The asset is linked for use as a Lead Form extension.
   */
  public const FIELD_TYPE_LEAD_FORM = 'LEAD_FORM';
  /**
   * The asset is linked for use as a Promotion extension.
   */
  public const FIELD_TYPE_PROMOTION = 'PROMOTION';
  /**
   * The asset is linked for use as a Callout extension.
   */
  public const FIELD_TYPE_CALLOUT = 'CALLOUT';
  /**
   * The asset is linked for use as a Structured Snippet extension.
   */
  public const FIELD_TYPE_STRUCTURED_SNIPPET = 'STRUCTURED_SNIPPET';
  /**
   * The asset is linked for use as a Sitelink.
   */
  public const FIELD_TYPE_SITELINK = 'SITELINK';
  /**
   * The asset is linked for use as a Mobile App extension.
   */
  public const FIELD_TYPE_MOBILE_APP = 'MOBILE_APP';
  /**
   * The asset is linked for use as a Hotel Callout extension.
   */
  public const FIELD_TYPE_HOTEL_CALLOUT = 'HOTEL_CALLOUT';
  /**
   * The asset is linked for use as a Call extension.
   */
  public const FIELD_TYPE_CALL = 'CALL';
  /**
   * The asset is linked for use as a Price extension.
   */
  public const FIELD_TYPE_PRICE = 'PRICE';
  /**
   * The asset is linked for use as a long headline.
   */
  public const FIELD_TYPE_LONG_HEADLINE = 'LONG_HEADLINE';
  /**
   * The asset is linked for use as a business name.
   */
  public const FIELD_TYPE_BUSINESS_NAME = 'BUSINESS_NAME';
  /**
   * The asset is linked for use as a square marketing image.
   */
  public const FIELD_TYPE_SQUARE_MARKETING_IMAGE = 'SQUARE_MARKETING_IMAGE';
  /**
   * The asset is linked for use as a portrait marketing image.
   */
  public const FIELD_TYPE_PORTRAIT_MARKETING_IMAGE = 'PORTRAIT_MARKETING_IMAGE';
  /**
   * The asset is linked for use as a logo.
   */
  public const FIELD_TYPE_LOGO = 'LOGO';
  /**
   * The asset is linked for use as a landscape logo.
   */
  public const FIELD_TYPE_LANDSCAPE_LOGO = 'LANDSCAPE_LOGO';
  /**
   * The asset is linked for use as a non YouTube logo.
   */
  public const FIELD_TYPE_VIDEO = 'VIDEO';
  /**
   * The asset is linked for use to select a call-to-action.
   */
  public const FIELD_TYPE_CALL_TO_ACTION_SELECTION = 'CALL_TO_ACTION_SELECTION';
  /**
   * The asset is linked for use to select an ad image.
   */
  public const FIELD_TYPE_AD_IMAGE = 'AD_IMAGE';
  /**
   * The asset is linked for use as a business logo.
   */
  public const FIELD_TYPE_BUSINESS_LOGO = 'BUSINESS_LOGO';
  /**
   * The asset is linked for use as a hotel property in a Performance Max for
   * travel goals campaign.
   */
  public const FIELD_TYPE_HOTEL_PROPERTY = 'HOTEL_PROPERTY';
  /**
   * The asset is linked for use as a Demand Gen carousel card.
   */
  public const FIELD_TYPE_DEMAND_GEN_CAROUSEL_CARD = 'DEMAND_GEN_CAROUSEL_CARD';
  /**
   * The asset is linked for use as a Business Message.
   */
  public const FIELD_TYPE_BUSINESS_MESSAGE = 'BUSINESS_MESSAGE';
  /**
   * The asset is linked for use as a tall portrait marketing image.
   */
  public const FIELD_TYPE_TALL_PORTRAIT_MARKETING_IMAGE = 'TALL_PORTRAIT_MARKETING_IMAGE';
  /**
   * The asset is linked for use as a landing page preview image.
   */
  public const FIELD_TYPE_LANDING_PAGE_PREVIEW = 'LANDING_PAGE_PREVIEW';
  /**
   * The asset is linked for use as a long description.
   */
  public const FIELD_TYPE_LONG_DESCRIPTION = 'LONG_DESCRIPTION';
  /**
   * The asset is linked for use as a call-to-action.
   */
  public const FIELD_TYPE_CALL_TO_ACTION = 'CALL_TO_ACTION';
  /**
   * Not specified.
   */
  public const PERFORMANCE_LABEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PERFORMANCE_LABEL_UNKNOWN = 'UNKNOWN';
  /**
   * This asset does not yet have any performance informantion. This may be
   * because it is still under review.
   */
  public const PERFORMANCE_LABEL_PENDING = 'PENDING';
  /**
   * The asset has started getting impressions but the stats are not
   * statistically significant enough to get an asset performance label.
   */
  public const PERFORMANCE_LABEL_LEARNING = 'LEARNING';
  /**
   * Worst performing assets.
   */
  public const PERFORMANCE_LABEL_LOW = 'LOW';
  /**
   * Good performing assets.
   */
  public const PERFORMANCE_LABEL_GOOD = 'GOOD';
  /**
   * Best performing assets.
   */
  public const PERFORMANCE_LABEL_BEST = 'BEST';
  /**
   * Performance label cannot be assigned to this asset. This may be because
   * it's not used by asset based creatives.
   */
  public const PERFORMANCE_LABEL_NOT_APPLICABLE = 'NOT_APPLICABLE';
  /**
   * No value has been specified.
   */
  public const PINNED_FIELD_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const PINNED_FIELD_UNKNOWN = 'UNKNOWN';
  /**
   * The asset is used in headline 1.
   */
  public const PINNED_FIELD_HEADLINE_1 = 'HEADLINE_1';
  /**
   * The asset is used in headline 2.
   */
  public const PINNED_FIELD_HEADLINE_2 = 'HEADLINE_2';
  /**
   * The asset is used in headline 3.
   */
  public const PINNED_FIELD_HEADLINE_3 = 'HEADLINE_3';
  /**
   * The asset is used in description 1.
   */
  public const PINNED_FIELD_DESCRIPTION_1 = 'DESCRIPTION_1';
  /**
   * The asset is used in description 2.
   */
  public const PINNED_FIELD_DESCRIPTION_2 = 'DESCRIPTION_2';
  /**
   * The asset was used in a headline. Use this only if there is only one
   * headline in the ad. Otherwise, use the HEADLINE_1, HEADLINE_2 or HEADLINE_3
   * enums
   */
  public const PINNED_FIELD_HEADLINE = 'HEADLINE';
  /**
   * The asset was used as a headline in portrait image.
   */
  public const PINNED_FIELD_HEADLINE_IN_PORTRAIT = 'HEADLINE_IN_PORTRAIT';
  /**
   * The asset was used in a long headline (used in MultiAssetResponsiveAd).
   */
  public const PINNED_FIELD_LONG_HEADLINE = 'LONG_HEADLINE';
  /**
   * The asset was used in a description. Use this only if there is only one
   * description in the ad. Otherwise, use the DESCRIPTION_1 or DESCRIPTION_@
   * enums
   */
  public const PINNED_FIELD_DESCRIPTION = 'DESCRIPTION';
  /**
   * The asset was used as description in portrait image.
   */
  public const PINNED_FIELD_DESCRIPTION_IN_PORTRAIT = 'DESCRIPTION_IN_PORTRAIT';
  /**
   * The asset was used as business name in portrait image.
   */
  public const PINNED_FIELD_BUSINESS_NAME_IN_PORTRAIT = 'BUSINESS_NAME_IN_PORTRAIT';
  /**
   * The asset was used as business name.
   */
  public const PINNED_FIELD_BUSINESS_NAME = 'BUSINESS_NAME';
  /**
   * The asset was used as a marketing image.
   */
  public const PINNED_FIELD_MARKETING_IMAGE = 'MARKETING_IMAGE';
  /**
   * The asset was used as a marketing image in portrait image.
   */
  public const PINNED_FIELD_MARKETING_IMAGE_IN_PORTRAIT = 'MARKETING_IMAGE_IN_PORTRAIT';
  /**
   * The asset was used as a square marketing image.
   */
  public const PINNED_FIELD_SQUARE_MARKETING_IMAGE = 'SQUARE_MARKETING_IMAGE';
  /**
   * The asset was used as a portrait marketing image.
   */
  public const PINNED_FIELD_PORTRAIT_MARKETING_IMAGE = 'PORTRAIT_MARKETING_IMAGE';
  /**
   * The asset was used as a logo.
   */
  public const PINNED_FIELD_LOGO = 'LOGO';
  /**
   * The asset was used as a landscape logo.
   */
  public const PINNED_FIELD_LANDSCAPE_LOGO = 'LANDSCAPE_LOGO';
  /**
   * The asset was used as a call-to-action.
   */
  public const PINNED_FIELD_CALL_TO_ACTION = 'CALL_TO_ACTION';
  /**
   * The asset was used as a YouTube video.
   */
  public const PINNED_FIELD_YOU_TUBE_VIDEO = 'YOU_TUBE_VIDEO';
  /**
   * This asset is used as a sitelink.
   */
  public const PINNED_FIELD_SITELINK = 'SITELINK';
  /**
   * This asset is used as a call.
   */
  public const PINNED_FIELD_CALL = 'CALL';
  /**
   * This asset is used as a mobile app.
   */
  public const PINNED_FIELD_MOBILE_APP = 'MOBILE_APP';
  /**
   * This asset is used as a callout.
   */
  public const PINNED_FIELD_CALLOUT = 'CALLOUT';
  /**
   * This asset is used as a structured snippet.
   */
  public const PINNED_FIELD_STRUCTURED_SNIPPET = 'STRUCTURED_SNIPPET';
  /**
   * This asset is used as a price.
   */
  public const PINNED_FIELD_PRICE = 'PRICE';
  /**
   * This asset is used as a promotion.
   */
  public const PINNED_FIELD_PROMOTION = 'PROMOTION';
  /**
   * This asset is used as an image.
   */
  public const PINNED_FIELD_AD_IMAGE = 'AD_IMAGE';
  /**
   * The asset is used as a lead form.
   */
  public const PINNED_FIELD_LEAD_FORM = 'LEAD_FORM';
  /**
   * The asset is used as a business logo.
   */
  public const PINNED_FIELD_BUSINESS_LOGO = 'BUSINESS_LOGO';
  /**
   * The asset is used as a description prefix.
   */
  public const PINNED_FIELD_DESCRIPTION_PREFIX = 'DESCRIPTION_PREFIX';
  /**
   * A headline asset used as a sitelink in position 1.
   */
  public const PINNED_FIELD_HEADLINE_AS_SITELINK_POSITION_ONE = 'HEADLINE_AS_SITELINK_POSITION_ONE';
  /**
   * A headline asset used as a sitelink in position 2.
   */
  public const PINNED_FIELD_HEADLINE_AS_SITELINK_POSITION_TWO = 'HEADLINE_AS_SITELINK_POSITION_TWO';
  /**
   * A description line asset used as a sitelink in position 1.
   */
  public const PINNED_FIELD_DESCRIPTION_LINE_HEADLINE_AS_SITELINK_POSITION_ONE = 'DESCRIPTION_LINE_HEADLINE_AS_SITELINK_POSITION_ONE';
  /**
   * A description line asset used as a sitelink in position 2.
   */
  public const PINNED_FIELD_DESCRIPTION_LINE_HEADLINE_AS_SITELINK_POSITION_TWO = 'DESCRIPTION_LINE_HEADLINE_AS_SITELINK_POSITION_TWO';
  /**
   * Not specified.
   */
  public const SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * The asset or asset link is provided by advertiser.
   */
  public const SOURCE_ADVERTISER = 'ADVERTISER';
  /**
   * The asset or asset link is generated by Google.
   */
  public const SOURCE_AUTOMATICALLY_CREATED = 'AUTOMATICALLY_CREATED';
  /**
   * Output only. The ad group ad to which the asset is linked.
   *
   * @var string
   */
  public $adGroupAd;
  /**
   * Output only. The asset which is linked to the ad group ad.
   *
   * @var string
   */
  public $asset;
  /**
   * Output only. The status between the asset and the latest version of the ad.
   * If true, the asset is linked to the latest version of the ad. If false, it
   * means the link once existed but has been removed and is no longer present
   * in the latest version of the ad.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Output only. Role that the asset takes in the ad.
   *
   * @var string
   */
  public $fieldType;
  /**
   * Output only. Performance of an asset linkage.
   *
   * @var string
   */
  public $performanceLabel;
  /**
   * Output only. Pinned field.
   *
   * @var string
   */
  public $pinnedField;
  protected $policySummaryType = GoogleAdsSearchads360V23ResourcesAdGroupAdAssetPolicySummary::class;
  protected $policySummaryDataType = '';
  /**
   * Output only. The resource name of the ad group ad asset view. Ad group ad
   * asset view resource names have the form (Before V4): `customers/{customer_i
   * d}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{
   * AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}` Ad group ad asset
   * view resource names have the form (Beginning from V4): `customers/{customer
   * _id}/adGroupAdAssetViews/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad_id
   * }~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Source of the ad group ad asset.
   *
   * @var string
   */
  public $source;

  /**
   * Output only. The ad group ad to which the asset is linked.
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
   * Output only. The asset which is linked to the ad group ad.
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
   * Output only. The status between the asset and the latest version of the ad.
   * If true, the asset is linked to the latest version of the ad. If false, it
   * means the link once existed but has been removed and is no longer present
   * in the latest version of the ad.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Output only. Role that the asset takes in the ad.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, HEADLINE, DESCRIPTION,
   * MANDATORY_AD_TEXT, MARKETING_IMAGE, MEDIA_BUNDLE, YOUTUBE_VIDEO,
   * BOOK_ON_GOOGLE, LEAD_FORM, PROMOTION, CALLOUT, STRUCTURED_SNIPPET,
   * SITELINK, MOBILE_APP, HOTEL_CALLOUT, CALL, PRICE, LONG_HEADLINE,
   * BUSINESS_NAME, SQUARE_MARKETING_IMAGE, PORTRAIT_MARKETING_IMAGE, LOGO,
   * LANDSCAPE_LOGO, VIDEO, CALL_TO_ACTION_SELECTION, AD_IMAGE, BUSINESS_LOGO,
   * HOTEL_PROPERTY, DEMAND_GEN_CAROUSEL_CARD, BUSINESS_MESSAGE,
   * TALL_PORTRAIT_MARKETING_IMAGE, LANDING_PAGE_PREVIEW, LONG_DESCRIPTION,
   * CALL_TO_ACTION
   *
   * @param self::FIELD_TYPE_* $fieldType
   */
  public function setFieldType($fieldType)
  {
    $this->fieldType = $fieldType;
  }
  /**
   * @return self::FIELD_TYPE_*
   */
  public function getFieldType()
  {
    return $this->fieldType;
  }
  /**
   * Output only. Performance of an asset linkage.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, LEARNING, LOW, GOOD, BEST,
   * NOT_APPLICABLE
   *
   * @param self::PERFORMANCE_LABEL_* $performanceLabel
   */
  public function setPerformanceLabel($performanceLabel)
  {
    $this->performanceLabel = $performanceLabel;
  }
  /**
   * @return self::PERFORMANCE_LABEL_*
   */
  public function getPerformanceLabel()
  {
    return $this->performanceLabel;
  }
  /**
   * Output only. Pinned field.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, HEADLINE_1, HEADLINE_2, HEADLINE_3,
   * DESCRIPTION_1, DESCRIPTION_2, HEADLINE, HEADLINE_IN_PORTRAIT,
   * LONG_HEADLINE, DESCRIPTION, DESCRIPTION_IN_PORTRAIT,
   * BUSINESS_NAME_IN_PORTRAIT, BUSINESS_NAME, MARKETING_IMAGE,
   * MARKETING_IMAGE_IN_PORTRAIT, SQUARE_MARKETING_IMAGE,
   * PORTRAIT_MARKETING_IMAGE, LOGO, LANDSCAPE_LOGO, CALL_TO_ACTION,
   * YOU_TUBE_VIDEO, SITELINK, CALL, MOBILE_APP, CALLOUT, STRUCTURED_SNIPPET,
   * PRICE, PROMOTION, AD_IMAGE, LEAD_FORM, BUSINESS_LOGO, DESCRIPTION_PREFIX,
   * HEADLINE_AS_SITELINK_POSITION_ONE, HEADLINE_AS_SITELINK_POSITION_TWO,
   * DESCRIPTION_LINE_HEADLINE_AS_SITELINK_POSITION_ONE,
   * DESCRIPTION_LINE_HEADLINE_AS_SITELINK_POSITION_TWO
   *
   * @param self::PINNED_FIELD_* $pinnedField
   */
  public function setPinnedField($pinnedField)
  {
    $this->pinnedField = $pinnedField;
  }
  /**
   * @return self::PINNED_FIELD_*
   */
  public function getPinnedField()
  {
    return $this->pinnedField;
  }
  /**
   * Output only. Policy information for the ad group ad asset.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAdAssetPolicySummary $policySummary
   */
  public function setPolicySummary(GoogleAdsSearchads360V23ResourcesAdGroupAdAssetPolicySummary $policySummary)
  {
    $this->policySummary = $policySummary;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAdAssetPolicySummary
   */
  public function getPolicySummary()
  {
    return $this->policySummary;
  }
  /**
   * Output only. The resource name of the ad group ad asset view. Ad group ad
   * asset view resource names have the form (Before V4): `customers/{customer_i
   * d}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{
   * AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}` Ad group ad asset
   * view resource names have the form (Beginning from V4): `customers/{customer
   * _id}/adGroupAdAssetViews/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad_id
   * }~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
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
   * Output only. Source of the ad group ad asset.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADVERTISER, AUTOMATICALLY_CREATED
   *
   * @param self::SOURCE_* $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return self::SOURCE_*
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupAdAssetView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupAdAssetView');
