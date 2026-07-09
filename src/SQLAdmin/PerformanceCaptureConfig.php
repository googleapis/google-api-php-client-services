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

namespace Google\Service\SQLAdmin;

class PerformanceCaptureConfig extends \Google\Collection
{
  /**
   * Unspecified.
   */
  public const TRANSACTION_KILL_TYPE_TRANSACTION_KILL_TYPE_UNSPECIFIED = 'TRANSACTION_KILL_TYPE_UNSPECIFIED';
  /**
   * Only read-only transactions are eligible for termination.
   */
  public const TRANSACTION_KILL_TYPE_READ_ONLY_TRANSACTIONS = 'READ_ONLY_TRANSACTIONS';
  /**
   * All transactions are eligible for termination, including those with write
   * operations (such as INSERT, UPDATE, DELETE, or DDL).
   */
  public const TRANSACTION_KILL_TYPE_ALL_TRANSACTIONS = 'ALL_TRANSACTIONS';
  protected $collection_key = 'transactionKillExcludedUserHosts';
  /**
   * Optional. Specifies the minimum percentage of CPU utilization to trigger
   * the performance capture. Valid integers range from `10` to `99`. Enter `0`
   * to disable the check.
   *
   * @var int
   */
  public $cpuUtilizationThresholdPercent;
  /**
   * Optional. Enables or disables the performance capture feature.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Optional. Specifies the minimum number of undo log entries in the history
   * list length to trigger the performance capture. Valid integers range from
   * `10000` to `10000000`. Enter `0` to disable the check.
   *
   * @var int
   */
  public $historyListLengthThresholdCount;
  /**
   * Optional. Specifies the minimum percentage of memory usage to trigger the
   * performance capture. Valid integers range from `10` to `99`. Enter `0` to
   * disable the check.
   *
   * @var int
   */
  public $memoryUsageThresholdPercent;
  /**
   * Optional. Specifies the minimum number of consecutive probe threshold that
   * triggers performance capture.
   *
   * @var int
   */
  public $probeThreshold;
  /**
   * Optional. Specifies the interval in seconds between consecutive probes that
   * check if any trigger condition thresholds have been reached.
   *
   * @var int
   */
  public $probingIntervalSeconds;
  /**
   * Optional. Specifies the minimum number of MySQL `Threads_running` to
   * trigger the performance capture on the primary instance.
   *
   * @var int
   */
  public $runningThreadsThreshold;
  /**
   * Optional. Specifies the minimum number of seconds replica must be lagging
   * behind primary instance to trigger the performance capture on replica.
   *
   * @var int
   */
  public $secondsBehindSourceThreshold;
  /**
   * Optional. Specifies the minimum allowed number of semaphore waits to
   * trigger the performance capture. Valid integers range from `10` to `10000`.
   * Enter `0` to disable the check.
   *
   * @var int
   */
  public $semaphoreWaitThresholdCount;
  /**
   * Optional. Specifies the amount of time in seconds that a transaction needs
   * to have been open before the watcher starts recording it.
   *
   * @var int
   */
  public $transactionDurationThreshold;
  /**
   * Optional. Specifies a customer-defined list of users to exclude from
   * transaction termination. Entries can be in the format 'user@host' or just
   * 'user'. A standalone 'user' implies 'user@%', excluding the user from any
   * host. Wildcard '%' is allowed in the host part of the 'user@host' format.
   * Example: `["app_user", "db_admin@10.1.2.3", "report_user@%"]`
   *
   * @var string[]
   */
  public $transactionKillExcludedUserHosts;
  /**
   * Optional. Specifies the amount of time in seconds that a transaction needs
   * to have been open before the watcher starts terminating it. Valid integers
   * range from `60` to `604800` (7 days). Enter `0` to disable. If enabled
   * (i.e., > 0), this value must be greater than or equal to
   * `transaction_duration_threshold`. Configurations where `0 <
   * transaction_kill_threshold_seconds < transaction_duration_threshold` will
   * be rejected.
   *
   * @var int
   */
  public $transactionKillThresholdSeconds;
  /**
   * Optional. Determines which transactions are allowed to be terminated when
   * they exceed `transaction_kill_threshold_seconds`. This allows protecting
   * write-heavy transactions from auto-termination if desired. Defaults to
   * `READ_ONLY_TRANSACTIONS` if unspecified.
   *
   * @var string
   */
  public $transactionKillType;
  /**
   * Optional. Specifies the minimum allowed number of transactions in lock wait
   * state to trigger the performance capture. Valid integers range from `10` to
   * `10000`. Enter `0` to disable the check.
   *
   * @var int
   */
  public $transactionLockWaitThresholdCount;

  /**
   * Optional. Specifies the minimum percentage of CPU utilization to trigger
   * the performance capture. Valid integers range from `10` to `99`. Enter `0`
   * to disable the check.
   *
   * @param int $cpuUtilizationThresholdPercent
   */
  public function setCpuUtilizationThresholdPercent($cpuUtilizationThresholdPercent)
  {
    $this->cpuUtilizationThresholdPercent = $cpuUtilizationThresholdPercent;
  }
  /**
   * @return int
   */
  public function getCpuUtilizationThresholdPercent()
  {
    return $this->cpuUtilizationThresholdPercent;
  }
  /**
   * Optional. Enables or disables the performance capture feature.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Optional. Specifies the minimum number of undo log entries in the history
   * list length to trigger the performance capture. Valid integers range from
   * `10000` to `10000000`. Enter `0` to disable the check.
   *
   * @param int $historyListLengthThresholdCount
   */
  public function setHistoryListLengthThresholdCount($historyListLengthThresholdCount)
  {
    $this->historyListLengthThresholdCount = $historyListLengthThresholdCount;
  }
  /**
   * @return int
   */
  public function getHistoryListLengthThresholdCount()
  {
    return $this->historyListLengthThresholdCount;
  }
  /**
   * Optional. Specifies the minimum percentage of memory usage to trigger the
   * performance capture. Valid integers range from `10` to `99`. Enter `0` to
   * disable the check.
   *
   * @param int $memoryUsageThresholdPercent
   */
  public function setMemoryUsageThresholdPercent($memoryUsageThresholdPercent)
  {
    $this->memoryUsageThresholdPercent = $memoryUsageThresholdPercent;
  }
  /**
   * @return int
   */
  public function getMemoryUsageThresholdPercent()
  {
    return $this->memoryUsageThresholdPercent;
  }
  /**
   * Optional. Specifies the minimum number of consecutive probe threshold that
   * triggers performance capture.
   *
   * @param int $probeThreshold
   */
  public function setProbeThreshold($probeThreshold)
  {
    $this->probeThreshold = $probeThreshold;
  }
  /**
   * @return int
   */
  public function getProbeThreshold()
  {
    return $this->probeThreshold;
  }
  /**
   * Optional. Specifies the interval in seconds between consecutive probes that
   * check if any trigger condition thresholds have been reached.
   *
   * @param int $probingIntervalSeconds
   */
  public function setProbingIntervalSeconds($probingIntervalSeconds)
  {
    $this->probingIntervalSeconds = $probingIntervalSeconds;
  }
  /**
   * @return int
   */
  public function getProbingIntervalSeconds()
  {
    return $this->probingIntervalSeconds;
  }
  /**
   * Optional. Specifies the minimum number of MySQL `Threads_running` to
   * trigger the performance capture on the primary instance.
   *
   * @param int $runningThreadsThreshold
   */
  public function setRunningThreadsThreshold($runningThreadsThreshold)
  {
    $this->runningThreadsThreshold = $runningThreadsThreshold;
  }
  /**
   * @return int
   */
  public function getRunningThreadsThreshold()
  {
    return $this->runningThreadsThreshold;
  }
  /**
   * Optional. Specifies the minimum number of seconds replica must be lagging
   * behind primary instance to trigger the performance capture on replica.
   *
   * @param int $secondsBehindSourceThreshold
   */
  public function setSecondsBehindSourceThreshold($secondsBehindSourceThreshold)
  {
    $this->secondsBehindSourceThreshold = $secondsBehindSourceThreshold;
  }
  /**
   * @return int
   */
  public function getSecondsBehindSourceThreshold()
  {
    return $this->secondsBehindSourceThreshold;
  }
  /**
   * Optional. Specifies the minimum allowed number of semaphore waits to
   * trigger the performance capture. Valid integers range from `10` to `10000`.
   * Enter `0` to disable the check.
   *
   * @param int $semaphoreWaitThresholdCount
   */
  public function setSemaphoreWaitThresholdCount($semaphoreWaitThresholdCount)
  {
    $this->semaphoreWaitThresholdCount = $semaphoreWaitThresholdCount;
  }
  /**
   * @return int
   */
  public function getSemaphoreWaitThresholdCount()
  {
    return $this->semaphoreWaitThresholdCount;
  }
  /**
   * Optional. Specifies the amount of time in seconds that a transaction needs
   * to have been open before the watcher starts recording it.
   *
   * @param int $transactionDurationThreshold
   */
  public function setTransactionDurationThreshold($transactionDurationThreshold)
  {
    $this->transactionDurationThreshold = $transactionDurationThreshold;
  }
  /**
   * @return int
   */
  public function getTransactionDurationThreshold()
  {
    return $this->transactionDurationThreshold;
  }
  /**
   * Optional. Specifies a customer-defined list of users to exclude from
   * transaction termination. Entries can be in the format 'user@host' or just
   * 'user'. A standalone 'user' implies 'user@%', excluding the user from any
   * host. Wildcard '%' is allowed in the host part of the 'user@host' format.
   * Example: `["app_user", "db_admin@10.1.2.3", "report_user@%"]`
   *
   * @param string[] $transactionKillExcludedUserHosts
   */
  public function setTransactionKillExcludedUserHosts($transactionKillExcludedUserHosts)
  {
    $this->transactionKillExcludedUserHosts = $transactionKillExcludedUserHosts;
  }
  /**
   * @return string[]
   */
  public function getTransactionKillExcludedUserHosts()
  {
    return $this->transactionKillExcludedUserHosts;
  }
  /**
   * Optional. Specifies the amount of time in seconds that a transaction needs
   * to have been open before the watcher starts terminating it. Valid integers
   * range from `60` to `604800` (7 days). Enter `0` to disable. If enabled
   * (i.e., > 0), this value must be greater than or equal to
   * `transaction_duration_threshold`. Configurations where `0 <
   * transaction_kill_threshold_seconds < transaction_duration_threshold` will
   * be rejected.
   *
   * @param int $transactionKillThresholdSeconds
   */
  public function setTransactionKillThresholdSeconds($transactionKillThresholdSeconds)
  {
    $this->transactionKillThresholdSeconds = $transactionKillThresholdSeconds;
  }
  /**
   * @return int
   */
  public function getTransactionKillThresholdSeconds()
  {
    return $this->transactionKillThresholdSeconds;
  }
  /**
   * Optional. Determines which transactions are allowed to be terminated when
   * they exceed `transaction_kill_threshold_seconds`. This allows protecting
   * write-heavy transactions from auto-termination if desired. Defaults to
   * `READ_ONLY_TRANSACTIONS` if unspecified.
   *
   * Accepted values: TRANSACTION_KILL_TYPE_UNSPECIFIED, READ_ONLY_TRANSACTIONS,
   * ALL_TRANSACTIONS
   *
   * @param self::TRANSACTION_KILL_TYPE_* $transactionKillType
   */
  public function setTransactionKillType($transactionKillType)
  {
    $this->transactionKillType = $transactionKillType;
  }
  /**
   * @return self::TRANSACTION_KILL_TYPE_*
   */
  public function getTransactionKillType()
  {
    return $this->transactionKillType;
  }
  /**
   * Optional. Specifies the minimum allowed number of transactions in lock wait
   * state to trigger the performance capture. Valid integers range from `10` to
   * `10000`. Enter `0` to disable the check.
   *
   * @param int $transactionLockWaitThresholdCount
   */
  public function setTransactionLockWaitThresholdCount($transactionLockWaitThresholdCount)
  {
    $this->transactionLockWaitThresholdCount = $transactionLockWaitThresholdCount;
  }
  /**
   * @return int
   */
  public function getTransactionLockWaitThresholdCount()
  {
    return $this->transactionLockWaitThresholdCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PerformanceCaptureConfig::class, 'Google_Service_SQLAdmin_PerformanceCaptureConfig');
