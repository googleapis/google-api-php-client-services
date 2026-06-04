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

class GoogleAdsSearchads360V23ResourcesCampaignAssetAutomationSetting extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ASSET_AUTOMATION_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used as a return value only. Represents value unknown in this version.
   */
  public const ASSET_AUTOMATION_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Opted-in will enable generating and serving an asset automation type.
   */
  public const ASSET_AUTOMATION_STATUS_OPTED_IN = 'OPTED_IN';
  /**
   * Opted-out will stop generating and serving an asset automation type.
   */
  public const ASSET_AUTOMATION_STATUS_OPTED_OUT = 'OPTED_OUT';
  /**
   * Not specified.
   */
  public const ASSET_AUTOMATION_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used as a return value only. Represents value unknown in this version.
   */
  public const ASSET_AUTOMATION_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Text asset automation includes headlines and descriptions. By default,
   * advertisers are opted-in for Performance Max and opted-out for Search.
   */
  public const ASSET_AUTOMATION_TYPE_TEXT_ASSET_AUTOMATION = 'TEXT_ASSET_AUTOMATION';
  /**
   * Converts horizontal video assets to vertical orientation using content-
   * aware technology. By default, advertisers are opted in for
   * DemandGenVideoResponsiveAd.
   */
  public const ASSET_AUTOMATION_TYPE_GENERATE_VERTICAL_YOUTUBE_VIDEOS = 'GENERATE_VERTICAL_YOUTUBE_VIDEOS';
  /**
   * Shortens video assets to better capture user attention using content-aware
   * technology.
   */
  public const ASSET_AUTOMATION_TYPE_GENERATE_SHORTER_YOUTUBE_VIDEOS = 'GENERATE_SHORTER_YOUTUBE_VIDEOS';
  /**
   * Generates a preview of the landing page shown in the engagement panel. By
   * using this feature, you confirm that you own all legal rights to the images
   * on the landing page used by this account (or you have permission to share
   * the images with Google). You hereby instruct Google to publish these images
   * on your behalf for advertising or other commercial purposes.
   */
  public const ASSET_AUTOMATION_TYPE_GENERATE_LANDING_PAGE_PREVIEW = 'GENERATE_LANDING_PAGE_PREVIEW';
  /**
   * Generates video enhancements (vertical and shorter videos) for PMax
   * campaigns. Opted in by default.
   */
  public const ASSET_AUTOMATION_TYPE_GENERATE_ENHANCED_YOUTUBE_VIDEOS = 'GENERATE_ENHANCED_YOUTUBE_VIDEOS';
  /**
   * Generates image enhancements (AutoCrop and AutoEnhance). Opted in by
   * default for pmax.
   */
  public const ASSET_AUTOMATION_TYPE_GENERATE_IMAGE_ENHANCEMENT = 'GENERATE_IMAGE_ENHANCEMENT';
  /**
   * Generates image extraction. It defaults to account level Dynamic Image
   * Extension control value.
   */
  public const ASSET_AUTOMATION_TYPE_GENERATE_IMAGE_EXTRACTION = 'GENERATE_IMAGE_EXTRACTION';
  /**
   * Adds design elements and embeds text assets into image assets to create
   * images with different aspect ratios. By default, advertisers are opted in
   * for DemandGenMultiAssetAd.
   */
  public const ASSET_AUTOMATION_TYPE_GENERATE_DESIGN_VERSIONS_FOR_IMAGES = 'GENERATE_DESIGN_VERSIONS_FOR_IMAGES';
  /**
   * Controls automation for text assets related to Final URL expansion. This
   * includes automatically creating dynamic landing pages from the final URL
   * and generating text assets from the content of those landing pages. This
   * setting is turned OFF by default for Search campaigns, but it is turned ON
   * by default for Performance Max campaigns.
   */
  public const ASSET_AUTOMATION_TYPE_FINAL_URL_EXPANSION_TEXT_ASSET_AUTOMATION = 'FINAL_URL_EXPANSION_TEXT_ASSET_AUTOMATION';
  /**
   * Generates videos using other Assets as input, such as images and text. By
   * default, advertisers are opted in for DemandGenMultiAssetAd.
   */
  public const ASSET_AUTOMATION_TYPE_GENERATE_VIDEOS_FROM_OTHER_ASSETS = 'GENERATE_VIDEOS_FROM_OTHER_ASSETS';
  /**
   * The opt-in/out status of asset automation type.
   *
   * @var string
   */
  public $assetAutomationStatus;
  /**
   * The asset automation type advertiser would like to opt-in/out.
   *
   * @var string
   */
  public $assetAutomationType;

  /**
   * The opt-in/out status of asset automation type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OPTED_IN, OPTED_OUT
   *
   * @param self::ASSET_AUTOMATION_STATUS_* $assetAutomationStatus
   */
  public function setAssetAutomationStatus($assetAutomationStatus)
  {
    $this->assetAutomationStatus = $assetAutomationStatus;
  }
  /**
   * @return self::ASSET_AUTOMATION_STATUS_*
   */
  public function getAssetAutomationStatus()
  {
    return $this->assetAutomationStatus;
  }
  /**
   * The asset automation type advertiser would like to opt-in/out.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TEXT_ASSET_AUTOMATION,
   * GENERATE_VERTICAL_YOUTUBE_VIDEOS, GENERATE_SHORTER_YOUTUBE_VIDEOS,
   * GENERATE_LANDING_PAGE_PREVIEW, GENERATE_ENHANCED_YOUTUBE_VIDEOS,
   * GENERATE_IMAGE_ENHANCEMENT, GENERATE_IMAGE_EXTRACTION,
   * GENERATE_DESIGN_VERSIONS_FOR_IMAGES,
   * FINAL_URL_EXPANSION_TEXT_ASSET_AUTOMATION,
   * GENERATE_VIDEOS_FROM_OTHER_ASSETS
   *
   * @param self::ASSET_AUTOMATION_TYPE_* $assetAutomationType
   */
  public function setAssetAutomationType($assetAutomationType)
  {
    $this->assetAutomationType = $assetAutomationType;
  }
  /**
   * @return self::ASSET_AUTOMATION_TYPE_*
   */
  public function getAssetAutomationType()
  {
    return $this->assetAutomationType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignAssetAutomationSetting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignAssetAutomationSetting');
