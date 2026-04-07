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

namespace Google\Service\GoogleHealthAPI;

class Sleep extends \Google\Collection
{
  /**
   * Sleep type is unspecified.
   */
  public const TYPE_SLEEP_TYPE_UNSPECIFIED = 'SLEEP_TYPE_UNSPECIFIED';
  /**
   * Classic sleep is a sleep with 3 stages types: AWAKE, RESTLESS and ASLEEP.
   */
  public const TYPE_CLASSIC = 'CLASSIC';
  /**
   * On top of "classic" sleep stages an additional processing pass can
   * calculate stages more precisely, overwriting the prior stages with AWAKE,
   * LIGHT, REM and DEEP.
   */
  public const TYPE_STAGES = 'STAGES';
  protected $collection_key = 'stages';
  /**
   * Output only. Creation time of this sleep observation.
   *
   * @var string
   */
  public $createTime;
  protected $intervalType = SessionTimeInterval::class;
  protected $intervalDataType = '';
  protected $metadataType = SleepMetadata::class;
  protected $metadataDataType = '';
  protected $outOfBedSegmentsType = OutOfBedSegment::class;
  protected $outOfBedSegmentsDataType = 'array';
  protected $stagesType = SleepStage::class;
  protected $stagesDataType = 'array';
  protected $summaryType = SleepSummary::class;
  protected $summaryDataType = '';
  /**
   * Optional. SleepType: classic or stages.
   *
   * @var string
   */
  public $type;
  /**
   * Output only. Last update time of this sleep observation.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Creation time of this sleep observation.
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
   * Required. Observed sleep interval.
   *
   * @param SessionTimeInterval $interval
   */
  public function setInterval(SessionTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return SessionTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * Optional. Sleep metadata: processing, main, manually edited, stages status.
   *
   * @param SleepMetadata $metadata
   */
  public function setMetadata(SleepMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return SleepMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Optional. “Out of bed” segments that can overlap with sleep stages.
   *
   * @param OutOfBedSegment[] $outOfBedSegments
   */
  public function setOutOfBedSegments($outOfBedSegments)
  {
    $this->outOfBedSegments = $outOfBedSegments;
  }
  /**
   * @return OutOfBedSegment[]
   */
  public function getOutOfBedSegments()
  {
    return $this->outOfBedSegments;
  }
  /**
   * Optional. List of non-overlapping contiguous sleep stage segments that
   * cover the sleep period.
   *
   * @param SleepStage[] $stages
   */
  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  /**
   * @return SleepStage[]
   */
  public function getStages()
  {
    return $this->stages;
  }
  /**
   * Output only. Sleep summary: metrics and stages summary.
   *
   * @param SleepSummary $summary
   */
  public function setSummary(SleepSummary $summary)
  {
    $this->summary = $summary;
  }
  /**
   * @return SleepSummary
   */
  public function getSummary()
  {
    return $this->summary;
  }
  /**
   * Optional. SleepType: classic or stages.
   *
   * Accepted values: SLEEP_TYPE_UNSPECIFIED, CLASSIC, STAGES
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Output only. Last update time of this sleep observation.
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
class_alias(Sleep::class, 'Google_Service_GoogleHealthAPI_Sleep');
