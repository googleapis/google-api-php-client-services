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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsFeatureToggleInfoFeatureToggle extends \Google\Model
{
  /**
   * Unspecified launch stage.
   */
  public const LAUNCH_STAGE_LAUNCH_STAGE_UNSPECIFIED = 'LAUNCH_STAGE_UNSPECIFIED';
  /**
   * The feature is in preview.
   */
  public const LAUNCH_STAGE_PREVIEW = 'PREVIEW';
  /**
   * The feature is generally available.
   */
  public const LAUNCH_STAGE_GA = 'GA';
  /**
   * The feature has reached scheduled availability, conventionally two weeks
   * after GA.
   */
  public const LAUNCH_STAGE_SCHEDULED_GA = 'SCHEDULED_GA';
  /**
   * The feature has reached delayed availability, conventionally four weeks
   * after GA.
   */
  public const LAUNCH_STAGE_DELAYED_GA = 'DELAYED_GA';
  /**
   * The feature is on for every customer and can no longer be turned off.
   */
  public const LAUNCH_STAGE_RETIRED = 'RETIRED';
  /**
   * Output only. Matches a key in the engine `features` map.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. Launch stage of the feature behind a toggle.
   *
   * @var string
   */
  public $launchStage;
  protected $retirementDateType = GoogleTypeDate::class;
  protected $retirementDateDataType = '';
  /**
   * Output only. Whether the engine's `feature_policies` may restrict this
   * feature to specific users or groups. When false, EngineService.UpdateEngine
   * rejects a policy for this feature.
   *
   * @var bool
   */
  public $supportsAccessPolicy;

  /**
   * Output only. Matches a key in the engine `features` map.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. Launch stage of the feature behind a toggle.
   *
   * Accepted values: LAUNCH_STAGE_UNSPECIFIED, PREVIEW, GA, SCHEDULED_GA,
   * DELAYED_GA, RETIRED
   *
   * @param self::LAUNCH_STAGE_* $launchStage
   */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /**
   * @return self::LAUNCH_STAGE_*
   */
  public function getLaunchStage()
  {
    return $this->launchStage;
  }
  /**
   * Output only. The informational date the toggle is scheduled to retire,
   * after which the feature is on for every customer. This is for display
   * purposes only. The system does not transition feature states automatically
   * on this date. Only when the launch stage is set to RETIRED does the feature
   * turn on for every customer. Unset if no retirement is scheduled.
   *
   * @param GoogleTypeDate $retirementDate
   */
  public function setRetirementDate(GoogleTypeDate $retirementDate)
  {
    $this->retirementDate = $retirementDate;
  }
  /**
   * @return GoogleTypeDate
   */
  public function getRetirementDate()
  {
    return $this->retirementDate;
  }
  /**
   * Output only. Whether the engine's `feature_policies` may restrict this
   * feature to specific users or groups. When false, EngineService.UpdateEngine
   * rejects a policy for this feature.
   *
   * @param bool $supportsAccessPolicy
   */
  public function setSupportsAccessPolicy($supportsAccessPolicy)
  {
    $this->supportsAccessPolicy = $supportsAccessPolicy;
  }
  /**
   * @return bool
   */
  public function getSupportsAccessPolicy()
  {
    return $this->supportsAccessPolicy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsFeatureToggleInfoFeatureToggle::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsFeatureToggleInfoFeatureToggle');
