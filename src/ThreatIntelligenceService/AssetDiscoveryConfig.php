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

namespace Google\Service\ThreatIntelligenceService;

class AssetDiscoveryConfig extends \Google\Collection
{
  /**
   * Default value, should never be set.
   */
  public const SCAN_FREQUENCY_ASSET_DISCOVERY_SCAN_FREQUENCY_UNSPECIFIED = 'ASSET_DISCOVERY_SCAN_FREQUENCY_UNSPECIFIED';
  /**
   * Scan is triggered on demand.
   */
  public const SCAN_FREQUENCY_ON_DEMAND = 'ON_DEMAND';
  /**
   * Scan is triggered weekly.
   */
  public const SCAN_FREQUENCY_WEEKLY = 'WEEKLY';
  /**
   * Scan is triggered daily.
   */
  public const SCAN_FREQUENCY_DAILY = 'DAILY';
  /**
   * Scan is triggered monthly.
   */
  public const SCAN_FREQUENCY_MONTHLY = 'MONTHLY';
  /**
   * Default value, should never be set.
   */
  public const WORKFLOW_ASSET_DISCOVERY_WORKFLOW_UNSPECIFIED = 'ASSET_DISCOVERY_WORKFLOW_UNSPECIFIED';
  /**
   * Discovery workflow that only discovers external facing assets.
   */
  public const WORKFLOW_EXTERNAL_DISCOVERY = 'EXTERNAL_DISCOVERY';
  /**
   * Discovery workflow that discovers external facing assets and generates
   * relevant alerts on them.
   */
  public const WORKFLOW_EXTERNAL_DISCOVERY_AND_ASSESSMENT = 'EXTERNAL_DISCOVERY_AND_ASSESSMENT';
  /**
   * Discovery workflow that discovers mobile app assets.
   */
  public const WORKFLOW_MOBILE_APP_DISCOVERY = 'MOBILE_APP_DISCOVERY';
  protected $collection_key = 'seedAssets';
  /**
   * Output only. Timestamp of the last scan completed. This field is set by the
   * system and cannot be modified by the user.
   *
   * @var string
   */
  public $lastScanCompleteTime;
  /**
   * Output only. Timestamp of the last scan started - used for scheduling the
   * next scan. This field is set by the system and cannot be modified by the
   * user.
   *
   * @var string
   */
  public $lastScanStartTime;
  /**
   * Required. Frequency at which the scheduled discovery scan should be run. If
   * not specified, the default frequency is DAILY.
   *
   * @var string
   */
  public $scanFrequency;
  protected $scopeExclusionAssetsType = AssetDiscoverySeed::class;
  protected $scopeExclusionAssetsDataType = 'array';
  protected $seedAssetsType = AssetDiscoverySeed::class;
  protected $seedAssetsDataType = 'array';
  /**
   * Required. Workflow to be used for the scheduled discovery scan. If not
   * specified, the default workflow is EXTERNAL_DISCOVERY.
   *
   * @var string
   */
  public $workflow;

  /**
   * Output only. Timestamp of the last scan completed. This field is set by the
   * system and cannot be modified by the user.
   *
   * @param string $lastScanCompleteTime
   */
  public function setLastScanCompleteTime($lastScanCompleteTime)
  {
    $this->lastScanCompleteTime = $lastScanCompleteTime;
  }
  /**
   * @return string
   */
  public function getLastScanCompleteTime()
  {
    return $this->lastScanCompleteTime;
  }
  /**
   * Output only. Timestamp of the last scan started - used for scheduling the
   * next scan. This field is set by the system and cannot be modified by the
   * user.
   *
   * @param string $lastScanStartTime
   */
  public function setLastScanStartTime($lastScanStartTime)
  {
    $this->lastScanStartTime = $lastScanStartTime;
  }
  /**
   * @return string
   */
  public function getLastScanStartTime()
  {
    return $this->lastScanStartTime;
  }
  /**
   * Required. Frequency at which the scheduled discovery scan should be run. If
   * not specified, the default frequency is DAILY.
   *
   * Accepted values: ASSET_DISCOVERY_SCAN_FREQUENCY_UNSPECIFIED, ON_DEMAND,
   * WEEKLY, DAILY, MONTHLY
   *
   * @param self::SCAN_FREQUENCY_* $scanFrequency
   */
  public function setScanFrequency($scanFrequency)
  {
    $this->scanFrequency = $scanFrequency;
  }
  /**
   * @return self::SCAN_FREQUENCY_*
   */
  public function getScanFrequency()
  {
    return $this->scanFrequency;
  }
  /**
   * Optional. Seed assets that are out of scope for the scheduled discovery
   * scan.
   *
   * @param AssetDiscoverySeed[] $scopeExclusionAssets
   */
  public function setScopeExclusionAssets($scopeExclusionAssets)
  {
    $this->scopeExclusionAssets = $scopeExclusionAssets;
  }
  /**
   * @return AssetDiscoverySeed[]
   */
  public function getScopeExclusionAssets()
  {
    return $this->scopeExclusionAssets;
  }
  /**
   * Required. Seed assets for the scheduled discovery scan. At least one seed
   * asset is required.
   *
   * @param AssetDiscoverySeed[] $seedAssets
   */
  public function setSeedAssets($seedAssets)
  {
    $this->seedAssets = $seedAssets;
  }
  /**
   * @return AssetDiscoverySeed[]
   */
  public function getSeedAssets()
  {
    return $this->seedAssets;
  }
  /**
   * Required. Workflow to be used for the scheduled discovery scan. If not
   * specified, the default workflow is EXTERNAL_DISCOVERY.
   *
   * Accepted values: ASSET_DISCOVERY_WORKFLOW_UNSPECIFIED, EXTERNAL_DISCOVERY,
   * EXTERNAL_DISCOVERY_AND_ASSESSMENT, MOBILE_APP_DISCOVERY
   *
   * @param self::WORKFLOW_* $workflow
   */
  public function setWorkflow($workflow)
  {
    $this->workflow = $workflow;
  }
  /**
   * @return self::WORKFLOW_*
   */
  public function getWorkflow()
  {
    return $this->workflow;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetDiscoveryConfig::class, 'Google_Service_ThreatIntelligenceService_AssetDiscoveryConfig');
