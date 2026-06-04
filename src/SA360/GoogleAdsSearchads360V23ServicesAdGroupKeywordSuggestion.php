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

class GoogleAdsSearchads360V23ServicesAdGroupKeywordSuggestion extends \Google\Model
{
  /**
   * Not specified.
   */
  public const SUGGESTED_MATCH_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SUGGESTED_MATCH_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Exact match.
   */
  public const SUGGESTED_MATCH_TYPE_EXACT = 'EXACT';
  /**
   * Phrase match.
   */
  public const SUGGESTED_MATCH_TYPE_PHRASE = 'PHRASE';
  /**
   * Broad match.
   */
  public const SUGGESTED_MATCH_TYPE_BROAD = 'BROAD';
  /**
   * The original keyword text.
   *
   * @var string
   */
  public $keywordText;
  /**
   * The suggested AdGroup for the keyword. Resource name format:
   * `customers/{customer_id}/adGroups/{ad_group_id}`
   *
   * @var string
   */
  public $suggestedAdGroup;
  /**
   * The suggested Campaign for the keyword. Resource name format:
   * `customers/{customer_id}/campaigns/{campaign_id}`
   *
   * @var string
   */
  public $suggestedCampaign;
  /**
   * The normalized version of keyword_text for BROAD/EXACT/PHRASE suggestions.
   *
   * @var string
   */
  public $suggestedKeywordText;
  /**
   * The suggested keyword match type.
   *
   * @var string
   */
  public $suggestedMatchType;

  /**
   * The original keyword text.
   *
   * @param string $keywordText
   */
  public function setKeywordText($keywordText)
  {
    $this->keywordText = $keywordText;
  }
  /**
   * @return string
   */
  public function getKeywordText()
  {
    return $this->keywordText;
  }
  /**
   * The suggested AdGroup for the keyword. Resource name format:
   * `customers/{customer_id}/adGroups/{ad_group_id}`
   *
   * @param string $suggestedAdGroup
   */
  public function setSuggestedAdGroup($suggestedAdGroup)
  {
    $this->suggestedAdGroup = $suggestedAdGroup;
  }
  /**
   * @return string
   */
  public function getSuggestedAdGroup()
  {
    return $this->suggestedAdGroup;
  }
  /**
   * The suggested Campaign for the keyword. Resource name format:
   * `customers/{customer_id}/campaigns/{campaign_id}`
   *
   * @param string $suggestedCampaign
   */
  public function setSuggestedCampaign($suggestedCampaign)
  {
    $this->suggestedCampaign = $suggestedCampaign;
  }
  /**
   * @return string
   */
  public function getSuggestedCampaign()
  {
    return $this->suggestedCampaign;
  }
  /**
   * The normalized version of keyword_text for BROAD/EXACT/PHRASE suggestions.
   *
   * @param string $suggestedKeywordText
   */
  public function setSuggestedKeywordText($suggestedKeywordText)
  {
    $this->suggestedKeywordText = $suggestedKeywordText;
  }
  /**
   * @return string
   */
  public function getSuggestedKeywordText()
  {
    return $this->suggestedKeywordText;
  }
  /**
   * The suggested keyword match type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXACT, PHRASE, BROAD
   *
   * @param self::SUGGESTED_MATCH_TYPE_* $suggestedMatchType
   */
  public function setSuggestedMatchType($suggestedMatchType)
  {
    $this->suggestedMatchType = $suggestedMatchType;
  }
  /**
   * @return self::SUGGESTED_MATCH_TYPE_*
   */
  public function getSuggestedMatchType()
  {
    return $this->suggestedMatchType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAdGroupKeywordSuggestion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAdGroupKeywordSuggestion');
