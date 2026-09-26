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

namespace Google\Service\DeviceRun;

class AndroidInstrumentationTestSmartSharding extends \Google\Model
{
  /**
   * Optional. The maximum number of shards to create. If unset or less than 1,
   * system-defined max limits are used. This limit takes precedence if the
   * targeted_shard_duration cannot be satisfied. Limits: - For physical
   * devices, the number of shards must be <= 20. - For virtual devices, the
   * number of shards must be <= 200.
   *
   * @var int
   */
  public $maxShardCount;
  /**
   * Required. The targeted duration of each shard. Limits: - Must be at least 2
   * minutes. - Must be at most 3 hours. Shard duration is not guaranteed
   * because smart sharding uses test case history and default durations which
   * may not be accurate. Durations are calculated based on the following
   * inputs: - Timing records from previous runs of the same test case. - For
   * new test cases, the average duration of other known test cases. - A system-
   * chosen, default duration if there are no previous timing records available.
   * Because the actual shard duration can exceed the targeted shard duration,
   * we recommend that you set the targeted value at least 5 minutes less than
   * the maximum allowed instrumentation timeout. This approach avoids
   * cancelling the shard before all tests can finish.
   *
   * @var string
   */
  public $targetedShardDuration;
  protected $timingRecordType = InputFile::class;
  protected $timingRecordDataType = '';

  /**
   * Optional. The maximum number of shards to create. If unset or less than 1,
   * system-defined max limits are used. This limit takes precedence if the
   * targeted_shard_duration cannot be satisfied. Limits: - For physical
   * devices, the number of shards must be <= 20. - For virtual devices, the
   * number of shards must be <= 200.
   *
   * @param int $maxShardCount
   */
  public function setMaxShardCount($maxShardCount)
  {
    $this->maxShardCount = $maxShardCount;
  }
  /**
   * @return int
   */
  public function getMaxShardCount()
  {
    return $this->maxShardCount;
  }
  /**
   * Required. The targeted duration of each shard. Limits: - Must be at least 2
   * minutes. - Must be at most 3 hours. Shard duration is not guaranteed
   * because smart sharding uses test case history and default durations which
   * may not be accurate. Durations are calculated based on the following
   * inputs: - Timing records from previous runs of the same test case. - For
   * new test cases, the average duration of other known test cases. - A system-
   * chosen, default duration if there are no previous timing records available.
   * Because the actual shard duration can exceed the targeted shard duration,
   * we recommend that you set the targeted value at least 5 minutes less than
   * the maximum allowed instrumentation timeout. This approach avoids
   * cancelling the shard before all tests can finish.
   *
   * @param string $targetedShardDuration
   */
  public function setTargetedShardDuration($targetedShardDuration)
  {
    $this->targetedShardDuration = $targetedShardDuration;
  }
  /**
   * @return string
   */
  public function getTargetedShardDuration()
  {
    return $this->targetedShardDuration;
  }
  /**
   * Required. The timing record file to use for smart sharding. If the file
   * does not exist, smart sharding will use default test time (30s) for each
   * test method to shard the job into multiple shards. This file will be
   * overwritten with the latest timing record after the job is completed.
   *
   * @param InputFile $timingRecord
   */
  public function setTimingRecord(InputFile $timingRecord)
  {
    $this->timingRecord = $timingRecord;
  }
  /**
   * @return InputFile
   */
  public function getTimingRecord()
  {
    return $this->timingRecord;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidInstrumentationTestSmartSharding::class, 'Google_Service_DeviceRun_AndroidInstrumentationTestSmartSharding');
