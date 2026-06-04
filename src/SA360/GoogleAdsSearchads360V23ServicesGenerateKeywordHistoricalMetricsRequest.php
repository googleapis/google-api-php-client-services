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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsRequest extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const KEYWORD_PLAN_NETWORK_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const KEYWORD_PLAN_NETWORK_UNKNOWN = 'UNKNOWN';
  /**
   * Google Search.
   */
  public const KEYWORD_PLAN_NETWORK_GOOGLE_SEARCH = 'GOOGLE_SEARCH';
  /**
   * Google Search + Search partners.
   */
  public const KEYWORD_PLAN_NETWORK_GOOGLE_SEARCH_AND_PARTNERS = 'GOOGLE_SEARCH_AND_PARTNERS';
  protected $collection_key = 'keywords';
  protected $aggregateMetricsType = GoogleAdsSearchads360V23CommonKeywordPlanAggregateMetrics::class;
  protected $aggregateMetricsDataType = '';
  /**
   * The resource names of the location to target. Maximum is 10. An empty list
   * MAY be used to specify all targeting geos.
   *
   * @var string[]
   */
  public $geoTargetConstants;
  protected $historicalMetricsOptionsType = GoogleAdsSearchads360V23CommonHistoricalMetricsOptions::class;
  protected $historicalMetricsOptionsDataType = '';
  /**
   * If true, adult keywords will be included in response. The default value is
   * false.
   *
   * @var bool
   */
  public $includeAdultKeywords;
  /**
   * Targeting network. If not set, Google Search And Partners Network will be
   * used.
   *
   * @var string
   */
  public $keywordPlanNetwork;
  /**
   * A list of keywords to get historical metrics. Not all inputs will be
   * returned as a result of near-exact deduplication. For example, if stats for
   * "car" and "cars" are requested, only "car" will be returned. A maximum of
   * 10,000 keywords can be used.
   *
   * @var string[]
   */
  public $keywords;
  /**
   * The resource name of the language to target. Each keyword belongs to some
   * set of languages; a keyword is included if language is one of its
   * languages. If not set, all keywords will be included.
   *
   * @var string
   */
  public $language;

  /**
   * The aggregate fields to include in response.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordPlanAggregateMetrics $aggregateMetrics
   */
  public function setAggregateMetrics(GoogleAdsSearchads360V23CommonKeywordPlanAggregateMetrics $aggregateMetrics)
  {
    $this->aggregateMetrics = $aggregateMetrics;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordPlanAggregateMetrics
   */
  public function getAggregateMetrics()
  {
    return $this->aggregateMetrics;
  }
  /**
   * The resource names of the location to target. Maximum is 10. An empty list
   * MAY be used to specify all targeting geos.
   *
   * @param string[] $geoTargetConstants
   */
  public function setGeoTargetConstants($geoTargetConstants)
  {
    $this->geoTargetConstants = $geoTargetConstants;
  }
  /**
   * @return string[]
   */
  public function getGeoTargetConstants()
  {
    return $this->geoTargetConstants;
  }
  /**
   * The options for historical metrics data.
   *
   * @param GoogleAdsSearchads360V23CommonHistoricalMetricsOptions $historicalMetricsOptions
   */
  public function setHistoricalMetricsOptions(GoogleAdsSearchads360V23CommonHistoricalMetricsOptions $historicalMetricsOptions)
  {
    $this->historicalMetricsOptions = $historicalMetricsOptions;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHistoricalMetricsOptions
   */
  public function getHistoricalMetricsOptions()
  {
    return $this->historicalMetricsOptions;
  }
  /**
   * If true, adult keywords will be included in response. The default value is
   * false.
   *
   * @param bool $includeAdultKeywords
   */
  public function setIncludeAdultKeywords($includeAdultKeywords)
  {
    $this->includeAdultKeywords = $includeAdultKeywords;
  }
  /**
   * @return bool
   */
  public function getIncludeAdultKeywords()
  {
    return $this->includeAdultKeywords;
  }
  /**
   * Targeting network. If not set, Google Search And Partners Network will be
   * used.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, GOOGLE_SEARCH,
   * GOOGLE_SEARCH_AND_PARTNERS
   *
   * @param self::KEYWORD_PLAN_NETWORK_* $keywordPlanNetwork
   */
  public function setKeywordPlanNetwork($keywordPlanNetwork)
  {
    $this->keywordPlanNetwork = $keywordPlanNetwork;
  }
  /**
   * @return self::KEYWORD_PLAN_NETWORK_*
   */
  public function getKeywordPlanNetwork()
  {
    return $this->keywordPlanNetwork;
  }
  /**
   * A list of keywords to get historical metrics. Not all inputs will be
   * returned as a result of near-exact deduplication. For example, if stats for
   * "car" and "cars" are requested, only "car" will be returned. A maximum of
   * 10,000 keywords can be used.
   *
   * @param string[] $keywords
   */
  public function setKeywords($keywords)
  {
    $this->keywords = $keywords;
  }
  /**
   * @return string[]
   */
  public function getKeywords()
  {
    return $this->keywords;
  }
  /**
   * The resource name of the language to target. Each keyword belongs to some
   * set of languages; a keyword is included if language is one of its
   * languages. If not set, all keywords will be included.
   *
   * @param string $language
   */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /**
   * @return string
   */
  public function getLanguage()
  {
    return $this->language;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsRequest');
