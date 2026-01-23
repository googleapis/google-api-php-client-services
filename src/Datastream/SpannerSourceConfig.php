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

namespace Google\Service\Datastream;

class SpannerSourceConfig extends \Google\Model
{
  /**
   * Unspecified RPC priority.
   */
  public const SPANNER_RPC_PRIORITY_SPANNER_RPC_PRIORITY_UNSPECIFIED = 'SPANNER_RPC_PRIORITY_UNSPECIFIED';
  /**
   * Low RPC priority.
   */
  public const SPANNER_RPC_PRIORITY_LOW = 'LOW';
  /**
   * Medium RPC priority.
   */
  public const SPANNER_RPC_PRIORITY_MEDIUM = 'MEDIUM';
  /**
   * High RPC priority.
   */
  public const SPANNER_RPC_PRIORITY_HIGH = 'HIGH';
  /**
   * Optional. Whether to use Data Boost for Spanner backfills. Defaults to
   * false if not set.
   *
   * @var bool
   */
  public $backfillDataBoostEnabled;
  /**
   * Required. Immutable. The change stream name to use for the stream.
   *
   * @var string
   */
  public $changeStreamName;
  protected $excludeObjectsType = SpannerDatabase::class;
  protected $excludeObjectsDataType = '';
  /**
   * Optional. The FGAC role to use for the stream.
   *
   * @var string
   */
  public $fgacRole;
  protected $includeObjectsType = SpannerDatabase::class;
  protected $includeObjectsDataType = '';
  /**
   * Optional. Maximum number of concurrent backfill tasks.
   *
   * @var int
   */
  public $maxConcurrentBackfillTasks;
  /**
   * Optional. Maximum number of concurrent CDC tasks.
   *
   * @var int
   */
  public $maxConcurrentCdcTasks;
  /**
   * Optional. The RPC priority to use for the stream.
   *
   * @var string
   */
  public $spannerRpcPriority;

  /**
   * Optional. Whether to use Data Boost for Spanner backfills. Defaults to
   * false if not set.
   *
   * @param bool $backfillDataBoostEnabled
   */
  public function setBackfillDataBoostEnabled($backfillDataBoostEnabled)
  {
    $this->backfillDataBoostEnabled = $backfillDataBoostEnabled;
  }
  /**
   * @return bool
   */
  public function getBackfillDataBoostEnabled()
  {
    return $this->backfillDataBoostEnabled;
  }
  /**
   * Required. Immutable. The change stream name to use for the stream.
   *
   * @param string $changeStreamName
   */
  public function setChangeStreamName($changeStreamName)
  {
    $this->changeStreamName = $changeStreamName;
  }
  /**
   * @return string
   */
  public function getChangeStreamName()
  {
    return $this->changeStreamName;
  }
  /**
   * Optional. The Spanner objects to avoid retrieving. If some objects are both
   * included and excluded, an error will be thrown.
   *
   * @param SpannerDatabase $excludeObjects
   */
  public function setExcludeObjects(SpannerDatabase $excludeObjects)
  {
    $this->excludeObjects = $excludeObjects;
  }
  /**
   * @return SpannerDatabase
   */
  public function getExcludeObjects()
  {
    return $this->excludeObjects;
  }
  /**
   * Optional. The FGAC role to use for the stream.
   *
   * @param string $fgacRole
   */
  public function setFgacRole($fgacRole)
  {
    $this->fgacRole = $fgacRole;
  }
  /**
   * @return string
   */
  public function getFgacRole()
  {
    return $this->fgacRole;
  }
  /**
   * Optional. The Spanner objects to retrieve from the data source. If some
   * objects are both included and excluded, an error will be thrown.
   *
   * @param SpannerDatabase $includeObjects
   */
  public function setIncludeObjects(SpannerDatabase $includeObjects)
  {
    $this->includeObjects = $includeObjects;
  }
  /**
   * @return SpannerDatabase
   */
  public function getIncludeObjects()
  {
    return $this->includeObjects;
  }
  /**
   * Optional. Maximum number of concurrent backfill tasks.
   *
   * @param int $maxConcurrentBackfillTasks
   */
  public function setMaxConcurrentBackfillTasks($maxConcurrentBackfillTasks)
  {
    $this->maxConcurrentBackfillTasks = $maxConcurrentBackfillTasks;
  }
  /**
   * @return int
   */
  public function getMaxConcurrentBackfillTasks()
  {
    return $this->maxConcurrentBackfillTasks;
  }
  /**
   * Optional. Maximum number of concurrent CDC tasks.
   *
   * @param int $maxConcurrentCdcTasks
   */
  public function setMaxConcurrentCdcTasks($maxConcurrentCdcTasks)
  {
    $this->maxConcurrentCdcTasks = $maxConcurrentCdcTasks;
  }
  /**
   * @return int
   */
  public function getMaxConcurrentCdcTasks()
  {
    return $this->maxConcurrentCdcTasks;
  }
  /**
   * Optional. The RPC priority to use for the stream.
   *
   * Accepted values: SPANNER_RPC_PRIORITY_UNSPECIFIED, LOW, MEDIUM, HIGH
   *
   * @param self::SPANNER_RPC_PRIORITY_* $spannerRpcPriority
   */
  public function setSpannerRpcPriority($spannerRpcPriority)
  {
    $this->spannerRpcPriority = $spannerRpcPriority;
  }
  /**
   * @return self::SPANNER_RPC_PRIORITY_*
   */
  public function getSpannerRpcPriority()
  {
    return $this->spannerRpcPriority;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpannerSourceConfig::class, 'Google_Service_Datastream_SpannerSourceConfig');
