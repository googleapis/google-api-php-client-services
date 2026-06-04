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

class GoogleAdsSearchads360V23ResourcesCampaignPerformanceMaxUpgrade extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The upgrade to a Performance Max campaign is in progress.
   */
  public const STATUS_UPGRADE_IN_PROGRESS = 'UPGRADE_IN_PROGRESS';
  /**
   * The upgrade to a Performance Max campaign is complete.
   */
  public const STATUS_UPGRADE_COMPLETE = 'UPGRADE_COMPLETE';
  /**
   * The upgrade to a Performance Max campaign failed. The campaign will still
   * serve as it was before upgrade was attempted.
   */
  public const STATUS_UPGRADE_FAILED = 'UPGRADE_FAILED';
  /**
   * The campaign is eligible for upgrade to a Performance Max campaign.
   */
  public const STATUS_UPGRADE_ELIGIBLE = 'UPGRADE_ELIGIBLE';
  /**
   * Output only. The resource name of the Performance Max campaign the campaign
   * is upgraded to.
   *
   * @var string
   */
  public $performanceMaxCampaign;
  /**
   * Output only. The resource name of the legacy campaign upgraded to
   * Performance Max.
   *
   * @var string
   */
  public $preUpgradeCampaign;
  /**
   * Output only. The upgrade status of a campaign requested to be upgraded to
   * Performance Max.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. The resource name of the Performance Max campaign the campaign
   * is upgraded to.
   *
   * @param string $performanceMaxCampaign
   */
  public function setPerformanceMaxCampaign($performanceMaxCampaign)
  {
    $this->performanceMaxCampaign = $performanceMaxCampaign;
  }
  /**
   * @return string
   */
  public function getPerformanceMaxCampaign()
  {
    return $this->performanceMaxCampaign;
  }
  /**
   * Output only. The resource name of the legacy campaign upgraded to
   * Performance Max.
   *
   * @param string $preUpgradeCampaign
   */
  public function setPreUpgradeCampaign($preUpgradeCampaign)
  {
    $this->preUpgradeCampaign = $preUpgradeCampaign;
  }
  /**
   * @return string
   */
  public function getPreUpgradeCampaign()
  {
    return $this->preUpgradeCampaign;
  }
  /**
   * Output only. The upgrade status of a campaign requested to be upgraded to
   * Performance Max.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, UPGRADE_IN_PROGRESS,
   * UPGRADE_COMPLETE, UPGRADE_FAILED, UPGRADE_ELIGIBLE
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignPerformanceMaxUpgrade::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignPerformanceMaxUpgrade');
