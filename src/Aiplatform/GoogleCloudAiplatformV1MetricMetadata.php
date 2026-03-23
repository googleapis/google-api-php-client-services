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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1MetricMetadata extends \Google\Model
{
  /**
   * Optional. Flexible metadata for user-defined attributes.
   *
   * @var array[]
   */
  public $otherMetadata;
  protected $scoreRangeType = GoogleCloudAiplatformV1MetricMetadataScoreRange::class;
  protected $scoreRangeDataType = '';
  /**
   * Optional. The user-friendly name for the metric. If not set for a
   * registered metric, it will default to the metric's display name.
   *
   * @var string
   */
  public $title;

  /**
   * Optional. Flexible metadata for user-defined attributes.
   *
   * @param array[] $otherMetadata
   */
  public function setOtherMetadata($otherMetadata)
  {
    $this->otherMetadata = $otherMetadata;
  }
  /**
   * @return array[]
   */
  public function getOtherMetadata()
  {
    return $this->otherMetadata;
  }
  /**
   * Optional. The range of possible scores for this metric, used for plotting.
   *
   * @param GoogleCloudAiplatformV1MetricMetadataScoreRange $scoreRange
   */
  public function setScoreRange(GoogleCloudAiplatformV1MetricMetadataScoreRange $scoreRange)
  {
    $this->scoreRange = $scoreRange;
  }
  /**
   * @return GoogleCloudAiplatformV1MetricMetadataScoreRange
   */
  public function getScoreRange()
  {
    return $this->scoreRange;
  }
  /**
   * Optional. The user-friendly name for the metric. If not set for a
   * registered metric, it will default to the metric's display name.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1MetricMetadata::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1MetricMetadata');
