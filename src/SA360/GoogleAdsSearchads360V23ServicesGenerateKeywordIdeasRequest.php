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

class GoogleAdsSearchads360V23ServicesGenerateKeywordIdeasRequest extends \Google\Collection
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
  protected $collection_key = 'keywordAnnotation';
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
  protected $keywordAndUrlSeedType = GoogleAdsSearchads360V23ServicesKeywordAndUrlSeed::class;
  protected $keywordAndUrlSeedDataType = '';
  /**
   * The keyword annotations to include in response.
   *
   * @var string[]
   */
  public $keywordAnnotation;
  /**
   * Targeting network. If not set, Google Search And Partners Network will be
   * used.
   *
   * @var string
   */
  public $keywordPlanNetwork;
  protected $keywordSeedType = GoogleAdsSearchads360V23ServicesKeywordSeed::class;
  protected $keywordSeedDataType = '';
  /**
   * The resource name of the language to target. Each keyword belongs to some
   * set of languages; a keyword is included if language is one of its
   * languages. If not set, all keywords will be included.
   *
   * @var string
   */
  public $language;
  /**
   * Number of results to retrieve in a single page. A maximum of 10,000 results
   * may be returned, if the page_size exceeds this, it is ignored. If
   * unspecified, at most 10,000 results will be returned. The server may decide
   * to further limit the number of returned resources. If the response contains
   * fewer than 10,000 results it may not be assumed as last page of results.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Token of the page to retrieve. If not specified, the first page of results
   * will be returned. To request next page of results use the value obtained
   * from `next_page_token` in the previous response. The request fields must
   * match across pages.
   *
   * @var string
   */
  public $pageToken;
  protected $siteSeedType = GoogleAdsSearchads360V23ServicesSiteSeed::class;
  protected $siteSeedDataType = '';
  protected $urlSeedType = GoogleAdsSearchads360V23ServicesUrlSeed::class;
  protected $urlSeedDataType = '';

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
   * A Keyword and a specific Url to generate ideas from for example, cars,
   * www.example.com/cars.
   *
   * @param GoogleAdsSearchads360V23ServicesKeywordAndUrlSeed $keywordAndUrlSeed
   */
  public function setKeywordAndUrlSeed(GoogleAdsSearchads360V23ServicesKeywordAndUrlSeed $keywordAndUrlSeed)
  {
    $this->keywordAndUrlSeed = $keywordAndUrlSeed;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesKeywordAndUrlSeed
   */
  public function getKeywordAndUrlSeed()
  {
    return $this->keywordAndUrlSeed;
  }
  /**
   * The keyword annotations to include in response.
   *
   * @param string[] $keywordAnnotation
   */
  public function setKeywordAnnotation($keywordAnnotation)
  {
    $this->keywordAnnotation = $keywordAnnotation;
  }
  /**
   * @return string[]
   */
  public function getKeywordAnnotation()
  {
    return $this->keywordAnnotation;
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
   * A Keyword or phrase to generate ideas from, for example, cars.
   *
   * @param GoogleAdsSearchads360V23ServicesKeywordSeed $keywordSeed
   */
  public function setKeywordSeed(GoogleAdsSearchads360V23ServicesKeywordSeed $keywordSeed)
  {
    $this->keywordSeed = $keywordSeed;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesKeywordSeed
   */
  public function getKeywordSeed()
  {
    return $this->keywordSeed;
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
  /**
   * Number of results to retrieve in a single page. A maximum of 10,000 results
   * may be returned, if the page_size exceeds this, it is ignored. If
   * unspecified, at most 10,000 results will be returned. The server may decide
   * to further limit the number of returned resources. If the response contains
   * fewer than 10,000 results it may not be assumed as last page of results.
   *
   * @param int $pageSize
   */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /**
   * @return int
   */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /**
   * Token of the page to retrieve. If not specified, the first page of results
   * will be returned. To request next page of results use the value obtained
   * from `next_page_token` in the previous response. The request fields must
   * match across pages.
   *
   * @param string $pageToken
   */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /**
   * @return string
   */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /**
   * The site to generate ideas from, for example, www.example.com.
   *
   * @param GoogleAdsSearchads360V23ServicesSiteSeed $siteSeed
   */
  public function setSiteSeed(GoogleAdsSearchads360V23ServicesSiteSeed $siteSeed)
  {
    $this->siteSeed = $siteSeed;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSiteSeed
   */
  public function getSiteSeed()
  {
    return $this->siteSeed;
  }
  /**
   * A specific url to generate ideas from, for example, www.example.com/cars.
   *
   * @param GoogleAdsSearchads360V23ServicesUrlSeed $urlSeed
   */
  public function setUrlSeed(GoogleAdsSearchads360V23ServicesUrlSeed $urlSeed)
  {
    $this->urlSeed = $urlSeed;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesUrlSeed
   */
  public function getUrlSeed()
  {
    return $this->urlSeed;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateKeywordIdeasRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateKeywordIdeasRequest');
