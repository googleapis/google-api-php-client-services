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

class GoogleCloudDiscoveryengineV1betaSearchRequestContentSearchSpecSummarySpec extends \Google\Model
{
  /**
   * @var bool
   */
  public $ignoreAdversarialQuery;
  /**
   * @var bool
   */
  public $ignoreNonSummarySeekingQuery;
  /**
   * @var bool
   */
  public $includeCitations;
  /**
   * @var string
   */
  public $languageCode;
  /**
   * @var int
   */
  public $summaryResultCount;

  /**
   * @param bool
   */
  public function setIgnoreAdversarialQuery($ignoreAdversarialQuery)
  {
    $this->ignoreAdversarialQuery = $ignoreAdversarialQuery;
  }
  /**
   * @return bool
   */
  public function getIgnoreAdversarialQuery()
  {
    return $this->ignoreAdversarialQuery;
  }
  /**
   * @param bool
   */
  public function setIgnoreNonSummarySeekingQuery($ignoreNonSummarySeekingQuery)
  {
    $this->ignoreNonSummarySeekingQuery = $ignoreNonSummarySeekingQuery;
  }
  /**
   * @return bool
   */
  public function getIgnoreNonSummarySeekingQuery()
  {
    return $this->ignoreNonSummarySeekingQuery;
  }
  /**
   * @param bool
   */
  public function setIncludeCitations($includeCitations)
  {
    $this->includeCitations = $includeCitations;
  }
  /**
   * @return bool
   */
  public function getIncludeCitations()
  {
    return $this->includeCitations;
  }
  /**
   * @param string
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * @param int
   */
  public function setSummaryResultCount($summaryResultCount)
  {
    $this->summaryResultCount = $summaryResultCount;
  }
  /**
   * @return int
   */
  public function getSummaryResultCount()
  {
    return $this->summaryResultCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaSearchRequestContentSearchSpecSummarySpec::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaSearchRequestContentSearchSpecSummarySpec');
