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

namespace Google\Service\NetworkSecurity;

class WildfireAnalysisProfile extends \Google\Collection
{
  protected $collection_key = 'wildfireThreatOverrides';
  protected $wildfireInlineCloudAnalysisRulesType = WildfireInlineCloudAnalysisRule::class;
  protected $wildfireInlineCloudAnalysisRulesDataType = 'array';
  protected $wildfireInlineMlOverridesType = WildfireInlineMlOverride::class;
  protected $wildfireInlineMlOverridesDataType = 'array';
  protected $wildfireInlineMlSettingType = WildfireInlineMlSettings::class;
  protected $wildfireInlineMlSettingDataType = '';
  protected $wildfireInlineMlSettingsType = WildfireInlineMlSettings::class;
  protected $wildfireInlineMlSettingsDataType = 'array';
  protected $wildfireOverridesType = WildfireOverride::class;
  protected $wildfireOverridesDataType = 'array';
  /**
   * Optional. Whether to hold the transfer of a file while the Advanced malware
   * sandbox real-time signature cloud performs a signature lookup. The default
   * value is `false`.
   *
   * @var bool
   */
  public $wildfireRealtimeLookup;
  protected $wildfireSubmissionRulesType = WildfireSubmissionRule::class;
  protected $wildfireSubmissionRulesDataType = 'array';
  protected $wildfireThreatOverridesType = WildfireThreatOverride::class;
  protected $wildfireThreatOverridesDataType = 'array';

  /**
   * Optional. Configuration for Advanced malware sandbox inline cloud analysis.
   *
   * @param WildfireInlineCloudAnalysisRule[] $wildfireInlineCloudAnalysisRules
   */
  public function setWildfireInlineCloudAnalysisRules($wildfireInlineCloudAnalysisRules)
  {
    $this->wildfireInlineCloudAnalysisRules = $wildfireInlineCloudAnalysisRules;
  }
  /**
   * @return WildfireInlineCloudAnalysisRule[]
   */
  public function getWildfireInlineCloudAnalysisRules()
  {
    return $this->wildfireInlineCloudAnalysisRules;
  }
  /**
   * Optional. Configuration for overriding inline ML Advanced malware sandbox
   * actions per protocol.
   *
   * @param WildfireInlineMlOverride[] $wildfireInlineMlOverrides
   */
  public function setWildfireInlineMlOverrides($wildfireInlineMlOverrides)
  {
    $this->wildfireInlineMlOverrides = $wildfireInlineMlOverrides;
  }
  /**
   * @return WildfireInlineMlOverride[]
   */
  public function getWildfireInlineMlOverrides()
  {
    return $this->wildfireInlineMlOverrides;
  }
  /**
   * Optional. Settings for Advanced malware sandbox inline ML analysis.
   *
   * @param WildfireInlineMlSettings $wildfireInlineMlSetting
   */
  public function setWildfireInlineMlSetting(WildfireInlineMlSettings $wildfireInlineMlSetting)
  {
    $this->wildfireInlineMlSetting = $wildfireInlineMlSetting;
  }
  /**
   * @return WildfireInlineMlSettings
   */
  public function getWildfireInlineMlSetting()
  {
    return $this->wildfireInlineMlSetting;
  }
  /**
   * Optional. Deprecated: Use `wildfire_inline_ml_setting` instead. Settings
   * for Advanced malware sandbox inline ML analysis.
   *
   * @deprecated
   * @param WildfireInlineMlSettings[] $wildfireInlineMlSettings
   */
  public function setWildfireInlineMlSettings($wildfireInlineMlSettings)
  {
    $this->wildfireInlineMlSettings = $wildfireInlineMlSettings;
  }
  /**
   * @deprecated
   * @return WildfireInlineMlSettings[]
   */
  public function getWildfireInlineMlSettings()
  {
    return $this->wildfireInlineMlSettings;
  }
  /**
   * Optional. Configuration for overriding Advanced malware sandbox actions per
   * protocol.
   *
   * @param WildfireOverride[] $wildfireOverrides
   */
  public function setWildfireOverrides($wildfireOverrides)
  {
    $this->wildfireOverrides = $wildfireOverrides;
  }
  /**
   * @return WildfireOverride[]
   */
  public function getWildfireOverrides()
  {
    return $this->wildfireOverrides;
  }
  /**
   * Optional. Whether to hold the transfer of a file while the Advanced malware
   * sandbox real-time signature cloud performs a signature lookup. The default
   * value is `false`.
   *
   * @param bool $wildfireRealtimeLookup
   */
  public function setWildfireRealtimeLookup($wildfireRealtimeLookup)
  {
    $this->wildfireRealtimeLookup = $wildfireRealtimeLookup;
  }
  /**
   * @return bool
   */
  public function getWildfireRealtimeLookup()
  {
    return $this->wildfireRealtimeLookup;
  }
  /**
   * Optional. Configurations for Advanced malware sandbox (WildFire) file
   * submissions.
   *
   * @param WildfireSubmissionRule[] $wildfireSubmissionRules
   */
  public function setWildfireSubmissionRules($wildfireSubmissionRules)
  {
    $this->wildfireSubmissionRules = $wildfireSubmissionRules;
  }
  /**
   * @return WildfireSubmissionRule[]
   */
  public function getWildfireSubmissionRules()
  {
    return $this->wildfireSubmissionRules;
  }
  /**
   * Optional. Configuration for overriding the Advanced malware sandbox threat
   * action by `threat_id` match.
   *
   * @param WildfireThreatOverride[] $wildfireThreatOverrides
   */
  public function setWildfireThreatOverrides($wildfireThreatOverrides)
  {
    $this->wildfireThreatOverrides = $wildfireThreatOverrides;
  }
  /**
   * @return WildfireThreatOverride[]
   */
  public function getWildfireThreatOverrides()
  {
    return $this->wildfireThreatOverrides;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WildfireAnalysisProfile::class, 'Google_Service_NetworkSecurity_WildfireAnalysisProfile');
