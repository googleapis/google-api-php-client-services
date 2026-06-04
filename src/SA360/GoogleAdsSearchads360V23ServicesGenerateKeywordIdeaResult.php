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

class GoogleAdsSearchads360V23ServicesGenerateKeywordIdeaResult extends \Google\Collection
{
  protected $collection_key = 'closeVariants';
  /**
   * The list of close variants from the requested keywords that are combined
   * into this GenerateKeywordIdeaResult. See https://support.google.com/google-
   * ads/answer/9342105 for the definition of "close variants".
   *
   * @var string[]
   */
  public $closeVariants;
  protected $keywordAnnotationsType = GoogleAdsSearchads360V23CommonKeywordAnnotations::class;
  protected $keywordAnnotationsDataType = '';
  protected $keywordIdeaMetricsType = GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics::class;
  protected $keywordIdeaMetricsDataType = '';
  /**
   * Text of the keyword idea. As in Keyword Plan historical metrics, this text
   * may not be an actual keyword, but the canonical form of multiple keywords.
   * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
   *
   * @var string
   */
  public $text;

  /**
   * The list of close variants from the requested keywords that are combined
   * into this GenerateKeywordIdeaResult. See https://support.google.com/google-
   * ads/answer/9342105 for the definition of "close variants".
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
   * The annotations for the keyword. The annotation data is only provided if
   * requested.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordAnnotations $keywordAnnotations
   */
  public function setKeywordAnnotations(GoogleAdsSearchads360V23CommonKeywordAnnotations $keywordAnnotations)
  {
    $this->keywordAnnotations = $keywordAnnotations;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordAnnotations
   */
  public function getKeywordAnnotations()
  {
    return $this->keywordAnnotations;
  }
  /**
   * The historical metrics for the keyword.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics $keywordIdeaMetrics
   */
  public function setKeywordIdeaMetrics(GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics $keywordIdeaMetrics)
  {
    $this->keywordIdeaMetrics = $keywordIdeaMetrics;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics
   */
  public function getKeywordIdeaMetrics()
  {
    return $this->keywordIdeaMetrics;
  }
  /**
   * Text of the keyword idea. As in Keyword Plan historical metrics, this text
   * may not be an actual keyword, but the canonical form of multiple keywords.
   * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
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
class_alias(GoogleAdsSearchads360V23ServicesGenerateKeywordIdeaResult::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateKeywordIdeaResult');
