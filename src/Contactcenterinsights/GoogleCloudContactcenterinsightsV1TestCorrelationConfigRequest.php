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

class GoogleCloudContactcenterinsightsV1TestCorrelationConfigRequest extends \Google\Model
{
  protected $conversationsType = GoogleCloudContactcenterinsightsV1TestCorrelationConfigRequestConversations::class;
  protected $conversationsDataType = '';
  protected $correlationConfigType = GoogleCloudContactcenterinsightsV1CorrelationConfig::class;
  protected $correlationConfigDataType = '';
  /**
   * Optional. Filter to select conversations to test correlation against.
   * Conversations matching this filter will be sampled based on start time. The
   * most recent `max_sample_count` conversations will be selected. If no
   * conversations match the filter, the request will fail with an
   * `INVALID_ARGUMENT` error.
   *
   * @var string
   */
  public $filter;
  /**
   * Optional. The maximum number of conversations to sample when using the
   * `filter`. If not set, defaults to 1000. Values greater than 1000 are
   * coerced to 1000. This field is ignored if `conversations` is provided.
   *
   * @var int
   */
  public $maxSampleCount;

  /**
   * Optional. A list of conversations to test against.
   *
   * @param GoogleCloudContactcenterinsightsV1TestCorrelationConfigRequestConversations $conversations
   */
  public function setConversations(GoogleCloudContactcenterinsightsV1TestCorrelationConfigRequestConversations $conversations)
  {
    $this->conversations = $conversations;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1TestCorrelationConfigRequestConversations
   */
  public function getConversations()
  {
    return $this->conversations;
  }
  /**
   * Required. The correlation config to test.
   *
   * @param GoogleCloudContactcenterinsightsV1CorrelationConfig $correlationConfig
   */
  public function setCorrelationConfig(GoogleCloudContactcenterinsightsV1CorrelationConfig $correlationConfig)
  {
    $this->correlationConfig = $correlationConfig;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1CorrelationConfig
   */
  public function getCorrelationConfig()
  {
    return $this->correlationConfig;
  }
  /**
   * Optional. Filter to select conversations to test correlation against.
   * Conversations matching this filter will be sampled based on start time. The
   * most recent `max_sample_count` conversations will be selected. If no
   * conversations match the filter, the request will fail with an
   * `INVALID_ARGUMENT` error.
   *
   * @param string $filter
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return string
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * Optional. The maximum number of conversations to sample when using the
   * `filter`. If not set, defaults to 1000. Values greater than 1000 are
   * coerced to 1000. This field is ignored if `conversations` is provided.
   *
   * @param int $maxSampleCount
   */
  public function setMaxSampleCount($maxSampleCount)
  {
    $this->maxSampleCount = $maxSampleCount;
  }
  /**
   * @return int
   */
  public function getMaxSampleCount()
  {
    return $this->maxSampleCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1TestCorrelationConfigRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1TestCorrelationConfigRequest');
