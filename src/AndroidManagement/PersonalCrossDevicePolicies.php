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

namespace Google\Service\AndroidManagement;

class PersonalCrossDevicePolicies extends \Google\Model
{
  /**
   * Defaults to TASK_CONTINUITY_HANDOFF_ALLOWED.
   */
  public const TASK_CONTINUITY_HANDOFF_TASK_CONTINUITY_HANDOFF_UNSPECIFIED = 'TASK_CONTINUITY_HANDOFF_UNSPECIFIED';
  /**
   * Allows the user to enable or disable the task continuity handoff feature in
   * settings. A NonComplianceDetail with API_LEVEL is reported if the Android
   * version is lower than Android 17 QPR1.
   */
  public const TASK_CONTINUITY_HANDOFF_TASK_CONTINUITY_HANDOFF_ALLOWED = 'TASK_CONTINUITY_HANDOFF_ALLOWED';
  /**
   * The task continuity handoff feature is disallowed. A NonComplianceDetail
   * with API_LEVEL is reported if the Android version is lower than Android 17
   * QPR1.
   */
  public const TASK_CONTINUITY_HANDOFF_TASK_CONTINUITY_HANDOFF_DISALLOWED = 'TASK_CONTINUITY_HANDOFF_DISALLOWED';
  /**
   * Optional. Controls the task continuity handoff
   * (https://developer.android.com/partners/android-17/features#handoff)
   * feature for the personal profile on company-owned devices with a work
   * profile. To disable Handoff device-wide on a company-owned device, both
   * crossDevicePolicies.taskContinuityHandoff and this policy should be set to
   * TASK_CONTINUITY_HANDOFF_DISALLOWED. Requires Android 17 QPR1 or higher.
   *
   * @var string
   */
  public $taskContinuityHandoff;

  /**
   * Optional. Controls the task continuity handoff
   * (https://developer.android.com/partners/android-17/features#handoff)
   * feature for the personal profile on company-owned devices with a work
   * profile. To disable Handoff device-wide on a company-owned device, both
   * crossDevicePolicies.taskContinuityHandoff and this policy should be set to
   * TASK_CONTINUITY_HANDOFF_DISALLOWED. Requires Android 17 QPR1 or higher.
   *
   * Accepted values: TASK_CONTINUITY_HANDOFF_UNSPECIFIED,
   * TASK_CONTINUITY_HANDOFF_ALLOWED, TASK_CONTINUITY_HANDOFF_DISALLOWED
   *
   * @param self::TASK_CONTINUITY_HANDOFF_* $taskContinuityHandoff
   */
  public function setTaskContinuityHandoff($taskContinuityHandoff)
  {
    $this->taskContinuityHandoff = $taskContinuityHandoff;
  }
  /**
   * @return self::TASK_CONTINUITY_HANDOFF_*
   */
  public function getTaskContinuityHandoff()
  {
    return $this->taskContinuityHandoff;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PersonalCrossDevicePolicies::class, 'Google_Service_AndroidManagement_PersonalCrossDevicePolicies');
