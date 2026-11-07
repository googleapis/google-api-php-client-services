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

namespace Google\Service\Backupdr;

class RestoreVerificationPlan extends \Google\Model
{
  /**
   * State not set.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The resource is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The resource has been created and is fully usable.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The resource is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The resource has been created but is not usable.
   */
  public const STATE_INACTIVE = 'INACTIVE';
  /**
   * The resource is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The resource is in an error state due to a configuration issue.
   */
  public const STATE_ERROR = 'ERROR';
  /**
   * Output only. When the `RestoreVerificationPlan` was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The description of the `RestoreVerificationPlan` resource. The
   * description allows for additional details about `RestoreVerificationPlan`
   * and its use cases to be provided. An example description is the following:
   * "This is a restore verification plan that performs a daily verification and
   * cleans up the resources immediately after." The description must be at most
   * 2048 characters.
   *
   * @var string
   */
  public $description;
  protected $failureCleanupRuleType = RestoreVerificationCleanupRule::class;
  protected $failureCleanupRuleDataType = '';
  /**
   * Optional. User-defined labels.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. Identifier. The resource name of the
   * `RestoreVerificationPlan`. Format: `projects/{project}/locations/{location}
   * /restoreVerificationPlans/{restoreVerificationPlan}`
   *
   * @var string
   */
  public $name;
  /**
   * Required. Describes the schedule on which the restore verification will be
   * executed. The schedule is specified as a
   * [Crontab](https://en.wikipedia.org/wiki/Cron#Overview) string.
   *
   * @var string
   */
  public $schedule;
  /**
   * Output only. The `State` for the `RestoreVerificationPlan`.
   *
   * @var string
   */
  public $state;
  protected $successCleanupRuleType = RestoreVerificationCleanupRule::class;
  protected $successCleanupRuleDataType = '';
  /**
   * Optional. Specifies the time zone to be used in interpreting schedule. The
   * value of this field must be a time zone name from the [tz
   * database](https://en.wikipedia.org/wiki/Tz_database), like
   * "America/New_York" or "UTC". Defaults to `UTC` if not specified.
   *
   * @var string
   */
  public $timeZone;
  /**
   * Output only. When the `RestoreVerificationPlan` was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. When the `RestoreVerificationPlan` was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. The description of the `RestoreVerificationPlan` resource. The
   * description allows for additional details about `RestoreVerificationPlan`
   * and its use cases to be provided. An example description is the following:
   * "This is a restore verification plan that performs a daily verification and
   * cleans up the resources immediately after." The description must be at most
   * 2048 characters.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. The cleanup rule to apply if the restore verification fails.
   *
   * @param RestoreVerificationCleanupRule $failureCleanupRule
   */
  public function setFailureCleanupRule(RestoreVerificationCleanupRule $failureCleanupRule)
  {
    $this->failureCleanupRule = $failureCleanupRule;
  }
  /**
   * @return RestoreVerificationCleanupRule
   */
  public function getFailureCleanupRule()
  {
    return $this->failureCleanupRule;
  }
  /**
   * Optional. User-defined labels.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. Identifier. The resource name of the
   * `RestoreVerificationPlan`. Format: `projects/{project}/locations/{location}
   * /restoreVerificationPlans/{restoreVerificationPlan}`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Required. Describes the schedule on which the restore verification will be
   * executed. The schedule is specified as a
   * [Crontab](https://en.wikipedia.org/wiki/Cron#Overview) string.
   *
   * @param string $schedule
   */
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  /**
   * @return string
   */
  public function getSchedule()
  {
    return $this->schedule;
  }
  /**
   * Output only. The `State` for the `RestoreVerificationPlan`.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, DELETING, INACTIVE,
   * UPDATING, ERROR
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Optional. The cleanup rule to apply if the restore verification succeeds.
   *
   * @param RestoreVerificationCleanupRule $successCleanupRule
   */
  public function setSuccessCleanupRule(RestoreVerificationCleanupRule $successCleanupRule)
  {
    $this->successCleanupRule = $successCleanupRule;
  }
  /**
   * @return RestoreVerificationCleanupRule
   */
  public function getSuccessCleanupRule()
  {
    return $this->successCleanupRule;
  }
  /**
   * Optional. Specifies the time zone to be used in interpreting schedule. The
   * value of this field must be a time zone name from the [tz
   * database](https://en.wikipedia.org/wiki/Tz_database), like
   * "America/New_York" or "UTC". Defaults to `UTC` if not specified.
   *
   * @param string $timeZone
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /**
   * Output only. When the `RestoreVerificationPlan` was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestoreVerificationPlan::class, 'Google_Service_Backupdr_RestoreVerificationPlan');
