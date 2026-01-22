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

class GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfo extends \Google\Collection
{
  protected $collection_key = 'classifiedIntents';
  /**
   * The classified intents from the input query.
   *
   * @var string[]
   */
  public $classifiedIntents;
  /**
   * The filters that were extracted from the input query.
   *
   * @var string
   */
  public $extractedFilters;
  /**
   * Rewritten input query minus the extracted filters.
   *
   * @var string
   */
  public $rewrittenQuery;
  protected $structuredExtractedFilterType = GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilter::class;
  protected $structuredExtractedFilterDataType = '';

  /**
   * The classified intents from the input query.
   *
   * @param string[] $classifiedIntents
   */
  public function setClassifiedIntents($classifiedIntents)
  {
    $this->classifiedIntents = $classifiedIntents;
  }
  /**
   * @return string[]
   */
  public function getClassifiedIntents()
  {
    return $this->classifiedIntents;
  }
  /**
   * The filters that were extracted from the input query.
   *
   * @param string $extractedFilters
   */
  public function setExtractedFilters($extractedFilters)
  {
    $this->extractedFilters = $extractedFilters;
  }
  /**
   * @return string
   */
  public function getExtractedFilters()
  {
    return $this->extractedFilters;
  }
  /**
   * Rewritten input query minus the extracted filters.
   *
   * @param string $rewrittenQuery
   */
  public function setRewrittenQuery($rewrittenQuery)
  {
    $this->rewrittenQuery = $rewrittenQuery;
  }
  /**
   * @return string
   */
  public function getRewrittenQuery()
  {
    return $this->rewrittenQuery;
  }
  /**
   * The filters that were extracted from the input query represented in a
   * structured form.
   *
   * @param GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilter $structuredExtractedFilter
   */
  public function setStructuredExtractedFilter(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilter $structuredExtractedFilter)
  {
    $this->structuredExtractedFilter = $structuredExtractedFilter;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilter
   */
  public function getStructuredExtractedFilter()
  {
    return $this->structuredExtractedFilter;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfo');
