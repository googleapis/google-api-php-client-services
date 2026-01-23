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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1alpha1TestCorrelationConfigMetadata extends \Google\Model
{
  /**
   * Output only. The time the operation was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * The dataset used for sampling conversations.
   *
   * @var string
   */
  public $dataset;
  protected $statsType = GoogleCloudContactcenterinsightsV1alpha1TestCorrelationConfigMetadataFullConversationCorrelationStats::class;
  protected $statsDataType = '';

  /**
   * Output only. The time the operation was created.
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
   * The dataset used for sampling conversations.
   *
   * @param string $dataset
   */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /**
   * @return string
   */
  public function getDataset()
  {
    return $this->dataset;
  }
  /**
   * The statistics for the operation.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1TestCorrelationConfigMetadataFullConversationCorrelationStats $stats
   */
  public function setStats(GoogleCloudContactcenterinsightsV1alpha1TestCorrelationConfigMetadataFullConversationCorrelationStats $stats)
  {
    $this->stats = $stats;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1TestCorrelationConfigMetadataFullConversationCorrelationStats
   */
  public function getStats()
  {
    return $this->stats;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1TestCorrelationConfigMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1TestCorrelationConfigMetadata');
