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

class GoogleAdsSearchads360V23ServicesForecastAdGroup extends \Google\Collection
{
  protected $collection_key = 'negativeKeywords';
  protected $biddableKeywordsType = GoogleAdsSearchads360V23ServicesBiddableKeyword::class;
  protected $biddableKeywordsDataType = 'array';
  /**
   * The max cpc to use for the ad group when generating forecasted traffic.
   * This value will override the max cpc value set in the bidding strategy.
   * Only specify this field for bidding strategies that max cpc values.
   *
   * @var string
   */
  public $maxCpcBidMicros;
  protected $negativeKeywordsType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $negativeKeywordsDataType = 'array';

  /**
   * Required. The list of biddable keywords to be used in the ad group when
   * doing the forecast. Requires at least one keyword.
   *
   * @param GoogleAdsSearchads360V23ServicesBiddableKeyword[] $biddableKeywords
   */
  public function setBiddableKeywords($biddableKeywords)
  {
    $this->biddableKeywords = $biddableKeywords;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesBiddableKeyword[]
   */
  public function getBiddableKeywords()
  {
    return $this->biddableKeywords;
  }
  /**
   * The max cpc to use for the ad group when generating forecasted traffic.
   * This value will override the max cpc value set in the bidding strategy.
   * Only specify this field for bidding strategies that max cpc values.
   *
   * @param string $maxCpcBidMicros
   */
  public function setMaxCpcBidMicros($maxCpcBidMicros)
  {
    $this->maxCpcBidMicros = $maxCpcBidMicros;
  }
  /**
   * @return string
   */
  public function getMaxCpcBidMicros()
  {
    return $this->maxCpcBidMicros;
  }
  /**
   * The details of the keyword. You should specify both the keyword text and
   * match type.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordInfo[] $negativeKeywords
   */
  public function setNegativeKeywords($negativeKeywords)
  {
    $this->negativeKeywords = $negativeKeywords;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordInfo[]
   */
  public function getNegativeKeywords()
  {
    return $this->negativeKeywords;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesForecastAdGroup::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesForecastAdGroup');
