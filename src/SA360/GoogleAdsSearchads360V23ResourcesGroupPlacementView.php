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

class GoogleAdsSearchads360V23ResourcesGroupPlacementView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const PLACEMENT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PLACEMENT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Websites(for example, 'www.flowers4sale.com').
   */
  public const PLACEMENT_TYPE_WEBSITE = 'WEBSITE';
  /**
   * Mobile application categories(for example, 'Games').
   */
  public const PLACEMENT_TYPE_MOBILE_APP_CATEGORY = 'MOBILE_APP_CATEGORY';
  /**
   * mobile applications(for example, 'mobileapp::2-com.whatsthewordanswers').
   */
  public const PLACEMENT_TYPE_MOBILE_APPLICATION = 'MOBILE_APPLICATION';
  /**
   * YouTube videos(for example, 'youtube.com/video/wtLJPvx7-ys').
   */
  public const PLACEMENT_TYPE_YOUTUBE_VIDEO = 'YOUTUBE_VIDEO';
  /**
   * YouTube channels(for example, 'youtube.com::L8ZULXASCc1I_oaOT0NaOQ').
   */
  public const PLACEMENT_TYPE_YOUTUBE_CHANNEL = 'YOUTUBE_CHANNEL';
  /**
   * Surfaces owned and operated by Google(for example, 'tv.google.com').
   */
  public const PLACEMENT_TYPE_GOOGLE_PRODUCTS = 'GOOGLE_PRODUCTS';
  /**
   * Output only. Domain name for websites and YouTube channel name for YouTube
   * channels.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The automatic placement string at group level, e. g. web
   * domain, mobile app ID, or a YouTube channel ID.
   *
   * @var string
   */
  public $placement;
  /**
   * Output only. Type of the placement, for example, Website, YouTube Channel,
   * Mobile Application.
   *
   * @var string
   */
  public $placementType;
  /**
   * Output only. The resource name of the group placement view. Group placement
   * view resource names have the form: `customers/{customer_id}/groupPlacementV
   * iews/{ad_group_id}~{base64_placement}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. URL of the group placement, for example, domain, link to the
   * mobile application in app store, or a YouTube channel URL.
   *
   * @var string
   */
  public $targetUrl;

  /**
   * Output only. Domain name for websites and YouTube channel name for YouTube
   * channels.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. The automatic placement string at group level, e. g. web
   * domain, mobile app ID, or a YouTube channel ID.
   *
   * @param string $placement
   */
  public function setPlacement($placement)
  {
    $this->placement = $placement;
  }
  /**
   * @return string
   */
  public function getPlacement()
  {
    return $this->placement;
  }
  /**
   * Output only. Type of the placement, for example, Website, YouTube Channel,
   * Mobile Application.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, WEBSITE, MOBILE_APP_CATEGORY,
   * MOBILE_APPLICATION, YOUTUBE_VIDEO, YOUTUBE_CHANNEL, GOOGLE_PRODUCTS
   *
   * @param self::PLACEMENT_TYPE_* $placementType
   */
  public function setPlacementType($placementType)
  {
    $this->placementType = $placementType;
  }
  /**
   * @return self::PLACEMENT_TYPE_*
   */
  public function getPlacementType()
  {
    return $this->placementType;
  }
  /**
   * Output only. The resource name of the group placement view. Group placement
   * view resource names have the form: `customers/{customer_id}/groupPlacementV
   * iews/{ad_group_id}~{base64_placement}`
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
   * Output only. URL of the group placement, for example, domain, link to the
   * mobile application in app store, or a YouTube channel URL.
   *
   * @param string $targetUrl
   */
  public function setTargetUrl($targetUrl)
  {
    $this->targetUrl = $targetUrl;
  }
  /**
   * @return string
   */
  public function getTargetUrl()
  {
    return $this->targetUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesGroupPlacementView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesGroupPlacementView');
