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

class GoogleCloudDiscoveryengineV1betaSearchResponseSummary extends \Google\Collection
{
  protected $collection_key = 'summarySkippedReasons';
  /**
   * @var string[]
   */
  public $summarySkippedReasons;
  /**
   * @var string
   */
  public $summaryText;

  /**
   * @param string[]
   */
  public function setSummarySkippedReasons($summarySkippedReasons)
  {
    $this->summarySkippedReasons = $summarySkippedReasons;
  }
  /**
   * @return string[]
   */
  public function getSummarySkippedReasons()
  {
    return $this->summarySkippedReasons;
  }
  /**
   * @param string
   */
  public function setSummaryText($summaryText)
  {
    $this->summaryText = $summaryText;
  }
  /**
   * @return string
   */
  public function getSummaryText()
  {
    return $this->summaryText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaSearchResponseSummary::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaSearchResponseSummary');
