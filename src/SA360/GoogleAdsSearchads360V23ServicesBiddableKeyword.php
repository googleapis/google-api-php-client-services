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

class GoogleAdsSearchads360V23ServicesBiddableKeyword extends \Google\Model
{
  protected $keywordType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $keywordDataType = '';
  /**
   * A max cpc bid in micros that overrides the ad group level max cpc bid in
   * forecast simulation. This value will override the max cpc value set in the
   * bidding strategy and ad group. Only specify this field for bidding
   * strategies that support max cpc values.
   *
   * @var string
   */
  public $maxCpcBidMicros;

  /**
   * Required. Keyword. Must have text and match type.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordInfo $keyword
   */
  public function setKeyword(GoogleAdsSearchads360V23CommonKeywordInfo $keyword)
  {
    $this->keyword = $keyword;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordInfo
   */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /**
   * A max cpc bid in micros that overrides the ad group level max cpc bid in
   * forecast simulation. This value will override the max cpc value set in the
   * bidding strategy and ad group. Only specify this field for bidding
   * strategies that support max cpc values.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesBiddableKeyword::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesBiddableKeyword');
