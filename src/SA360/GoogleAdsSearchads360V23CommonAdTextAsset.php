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

class GoogleAdsSearchads360V23CommonAdTextAsset extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ASSET_PERFORMANCE_LABEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ASSET_PERFORMANCE_LABEL_UNKNOWN = 'UNKNOWN';
  /**
   * This asset does not yet have any performance informantion. This may be
   * because it is still under review.
   */
  public const ASSET_PERFORMANCE_LABEL_PENDING = 'PENDING';
  /**
   * The asset has started getting impressions but the stats are not
   * statistically significant enough to get an asset performance label.
   */
  public const ASSET_PERFORMANCE_LABEL_LEARNING = 'LEARNING';
  /**
   * Worst performing assets.
   */
  public const ASSET_PERFORMANCE_LABEL_LOW = 'LOW';
  /**
   * Good performing assets.
   */
  public const ASSET_PERFORMANCE_LABEL_GOOD = 'GOOD';
  /**
   * Best performing assets.
   */
  public const ASSET_PERFORMANCE_LABEL_BEST = 'BEST';
  /**
   * Performance label cannot be assigned to this asset. This may be because
   * it's not used by asset based creatives.
   */
  public const ASSET_PERFORMANCE_LABEL_NOT_APPLICABLE = 'NOT_APPLICABLE';
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
   * The performance label of this text asset.
   *
   * @var string
   */
  public $assetPerformanceLabel;
  /**
   * The pinned field of the asset. This restricts the asset to only serve
   * within this field. Multiple assets can be pinned to the same field. An
   * asset that is unpinned or pinned to a different field will not serve in a
   * field where some other asset has been pinned.
   *
   * @var string
   */
  public $pinnedField;
  protected $policySummaryInfoType = GoogleAdsSearchads360V23CommonAdAssetPolicySummary::class;
  protected $policySummaryInfoDataType = '';
  /**
   * Asset text.
   *
   * @var string
   */
  public $text;

  /**
   * The performance label of this text asset.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, LEARNING, LOW, GOOD, BEST,
   * NOT_APPLICABLE
   *
   * @param self::ASSET_PERFORMANCE_LABEL_* $assetPerformanceLabel
   */
  public function setAssetPerformanceLabel($assetPerformanceLabel)
  {
    $this->assetPerformanceLabel = $assetPerformanceLabel;
  }
  /**
   * @return self::ASSET_PERFORMANCE_LABEL_*
   */
  public function getAssetPerformanceLabel()
  {
    return $this->assetPerformanceLabel;
  }
  /**
   * The pinned field of the asset. This restricts the asset to only serve
   * within this field. Multiple assets can be pinned to the same field. An
   * asset that is unpinned or pinned to a different field will not serve in a
   * field where some other asset has been pinned.
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
   * The policy summary of this text asset.
   *
   * @param GoogleAdsSearchads360V23CommonAdAssetPolicySummary $policySummaryInfo
   */
  public function setPolicySummaryInfo(GoogleAdsSearchads360V23CommonAdAssetPolicySummary $policySummaryInfo)
  {
    $this->policySummaryInfo = $policySummaryInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdAssetPolicySummary
   */
  public function getPolicySummaryInfo()
  {
    return $this->policySummaryInfo;
  }
  /**
   * Asset text.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAdTextAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAdTextAsset');
