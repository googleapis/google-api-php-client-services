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

class GoogleAdsSearchads360V23ServicesApplyRecommendationOperationKeywordParameters extends \Google\Model
{
  /**
   * Not specified.
   */
  public const MATCH_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const MATCH_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Exact match.
   */
  public const MATCH_TYPE_EXACT = 'EXACT';
  /**
   * Phrase match.
   */
  public const MATCH_TYPE_PHRASE = 'PHRASE';
  /**
   * Broad match.
   */
  public const MATCH_TYPE_BROAD = 'BROAD';
  /**
   * The ad group resource to add keyword to. This is a required field.
   *
   * @var string
   */
  public $adGroup;
  /**
   * Optional, CPC bid to set for the keyword. If not set, keyword will use bid
   * based on bidding strategy used by target ad group.
   *
   * @var string
   */
  public $cpcBidMicros;
  /**
   * The match type of the keyword. This is a required field.
   *
   * @var string
   */
  public $matchType;

  /**
   * The ad group resource to add keyword to. This is a required field.
   *
   * @param string $adGroup
   */
  public function setAdGroup($adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return string
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * Optional, CPC bid to set for the keyword. If not set, keyword will use bid
   * based on bidding strategy used by target ad group.
   *
   * @param string $cpcBidMicros
   */
  public function setCpcBidMicros($cpcBidMicros)
  {
    $this->cpcBidMicros = $cpcBidMicros;
  }
  /**
   * @return string
   */
  public function getCpcBidMicros()
  {
    return $this->cpcBidMicros;
  }
  /**
   * The match type of the keyword. This is a required field.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXACT, PHRASE, BROAD
   *
   * @param self::MATCH_TYPE_* $matchType
   */
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /**
   * @return self::MATCH_TYPE_*
   */
  public function getMatchType()
  {
    return $this->matchType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationKeywordParameters::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesApplyRecommendationOperationKeywordParameters');
