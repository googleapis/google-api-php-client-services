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

class GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsResult extends \Google\Collection
{
  protected $collection_key = 'closeVariants';
  /**
   * The list of close variants from the requested keywords whose stats are
   * combined into this GenerateKeywordHistoricalMetricsResult.
   *
   * @var string[]
   */
  public $closeVariants;
  protected $keywordMetricsType = GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics::class;
  protected $keywordMetricsDataType = '';
  /**
   * The text of the query associated with one or more keywords. Note that we
   * de-dupe your keywords list, eliminating close variants before returning the
   * keywords as text. For example, if your request originally contained the
   * keywords "car" and "cars", the returned search query will only contain
   * "cars". The list of de-duped queries will be included in close_variants
   * field.
   *
   * @var string
   */
  public $text;

  /**
   * The list of close variants from the requested keywords whose stats are
   * combined into this GenerateKeywordHistoricalMetricsResult.
   *
   * @param string[] $closeVariants
   */
  public function setCloseVariants($closeVariants)
  {
    $this->closeVariants = $closeVariants;
  }
  /**
   * @return string[]
   */
  public function getCloseVariants()
  {
    return $this->closeVariants;
  }
  /**
   * The historical metrics for text and its close variants
   *
   * @param GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics $keywordMetrics
   */
  public function setKeywordMetrics(GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics $keywordMetrics)
  {
    $this->keywordMetrics = $keywordMetrics;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics
   */
  public function getKeywordMetrics()
  {
    return $this->keywordMetrics;
  }
  /**
   * The text of the query associated with one or more keywords. Note that we
   * de-dupe your keywords list, eliminating close variants before returning the
   * keywords as text. For example, if your request originally contained the
   * keywords "car" and "cars", the returned search query will only contain
   * "cars". The list of de-duped queries will be included in close_variants
   * field.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsResult::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateKeywordHistoricalMetricsResult');
