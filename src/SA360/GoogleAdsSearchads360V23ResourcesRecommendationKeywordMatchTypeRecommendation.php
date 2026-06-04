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

class GoogleAdsSearchads360V23ResourcesRecommendationKeywordMatchTypeRecommendation extends \Google\Model
{
  /**
   * Not specified.
   */
  public const RECOMMENDED_MATCH_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const RECOMMENDED_MATCH_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Exact match.
   */
  public const RECOMMENDED_MATCH_TYPE_EXACT = 'EXACT';
  /**
   * Phrase match.
   */
  public const RECOMMENDED_MATCH_TYPE_PHRASE = 'PHRASE';
  /**
   * Broad match.
   */
  public const RECOMMENDED_MATCH_TYPE_BROAD = 'BROAD';
  protected $keywordType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $keywordDataType = '';
  /**
   * Output only. The recommended new match type.
   *
   * @var string
   */
  public $recommendedMatchType;

  /**
   * Output only. The existing keyword where the match type should be more
   * broad.
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
   * Output only. The recommended new match type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXACT, PHRASE, BROAD
   *
   * @param self::RECOMMENDED_MATCH_TYPE_* $recommendedMatchType
   */
  public function setRecommendedMatchType($recommendedMatchType)
  {
    $this->recommendedMatchType = $recommendedMatchType;
  }
  /**
   * @return self::RECOMMENDED_MATCH_TYPE_*
   */
  public function getRecommendedMatchType()
  {
    return $this->recommendedMatchType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationKeywordMatchTypeRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationKeywordMatchTypeRecommendation');
