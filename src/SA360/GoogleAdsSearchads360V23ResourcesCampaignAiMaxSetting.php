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

class GoogleAdsSearchads360V23ResourcesCampaignAiMaxSetting extends \Google\Model
{
  /**
   * Not specified.
   */
  public const BUNDLING_REQUIRED_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const BUNDLING_REQUIRED_UNKNOWN = 'UNKNOWN';
  /**
   * Search campaign is using text asset automation or brand list targeting, and
   * AI Max is not required to be enabled to serve these features.
   */
  public const BUNDLING_REQUIRED_NOT_REQUIRED = 'NOT_REQUIRED';
  /**
   * AI Max is required to be enabled for this search campaign to serve existing
   * text asset automation and brand list targeting, or to add new text asset
   * automation and brand list targeting settings.
   */
  public const BUNDLING_REQUIRED_REQUIRED = 'REQUIRED';
  /**
   * Output only. Indicates whether a search campaign has adopted AI Max before,
   * and is required to have AI Max enabled to adopt campaign-level text asset
   * automation and brand list targeting in all API versions.
   *
   * @var string
   */
  public $bundlingRequired;
  /**
   * Controls whether or not AI Max features are served for this campaign.
   * Individual AI Max features are enabled or disabled by their respective
   * settings. But if enable_ai_max is set to false or cleared, then no AI Max
   * features will serve for this campaign, regardless of the other settings.
   * Search Term Matching is enabled by default when AI Max is enabled, and can
   * be disabled at the ad group level.
   *
   * @var bool
   */
  public $enableAiMax;

  /**
   * Output only. Indicates whether a search campaign has adopted AI Max before,
   * and is required to have AI Max enabled to adopt campaign-level text asset
   * automation and brand list targeting in all API versions.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOT_REQUIRED, REQUIRED
   *
   * @param self::BUNDLING_REQUIRED_* $bundlingRequired
   */
  public function setBundlingRequired($bundlingRequired)
  {
    $this->bundlingRequired = $bundlingRequired;
  }
  /**
   * @return self::BUNDLING_REQUIRED_*
   */
  public function getBundlingRequired()
  {
    return $this->bundlingRequired;
  }
  /**
   * Controls whether or not AI Max features are served for this campaign.
   * Individual AI Max features are enabled or disabled by their respective
   * settings. But if enable_ai_max is set to false or cleared, then no AI Max
   * features will serve for this campaign, regardless of the other settings.
   * Search Term Matching is enabled by default when AI Max is enabled, and can
   * be disabled at the ad group level.
   *
   * @param bool $enableAiMax
   */
  public function setEnableAiMax($enableAiMax)
  {
    $this->enableAiMax = $enableAiMax;
  }
  /**
   * @return bool
   */
  public function getEnableAiMax()
  {
    return $this->enableAiMax;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignAiMaxSetting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignAiMaxSetting');
