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

class GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetOperation extends \Google\Model
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
   * Required. The resource name of the asset to remove.
   *
   * @var string
   */
  public $asset;
  /**
   * Required. The resource name of the campaign.
   *
   * @var string
   */
  public $campaign;
  /**
   * Required. The field type of the asset to remove.
   *
   * @var string
   */
  public $fieldType;

  /**
   * Required. The resource name of the asset to remove.
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
   * Required. The resource name of the campaign.
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
   * Required. The field type of the asset to remove.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetOperation');
