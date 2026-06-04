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

class GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword extends \Google\Model
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
   * Output only. The ID of the Keyword Plan negative keyword.
   *
   * @var string
   */
  public $id;
  /**
   * The Keyword Plan campaign to which this negative keyword belongs.
   *
   * @var string
   */
  public $keywordPlanCampaign;
  /**
   * The keyword match type.
   *
   * @var string
   */
  public $matchType;
  /**
   * Immutable. If true, the keyword is negative. Must be set to true. Only
   * negative campaign keywords are supported.
   *
   * @var bool
   */
  public $negative;
  /**
   * Immutable. The resource name of the Keyword Plan Campaign keyword.
   * KeywordPlanCampaignKeyword resource names have the form: `customers/{custom
   * er_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The keyword text.
   *
   * @var string
   */
  public $text;

  /**
   * Output only. The ID of the Keyword Plan negative keyword.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * The Keyword Plan campaign to which this negative keyword belongs.
   *
   * @param string $keywordPlanCampaign
   */
  public function setKeywordPlanCampaign($keywordPlanCampaign)
  {
    $this->keywordPlanCampaign = $keywordPlanCampaign;
  }
  /**
   * @return string
   */
  public function getKeywordPlanCampaign()
  {
    return $this->keywordPlanCampaign;
  }
  /**
   * The keyword match type.
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
  /**
   * Immutable. If true, the keyword is negative. Must be set to true. Only
   * negative campaign keywords are supported.
   *
   * @param bool $negative
   */
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /**
   * @return bool
   */
  public function getNegative()
  {
    return $this->negative;
  }
  /**
   * Immutable. The resource name of the Keyword Plan Campaign keyword.
   * KeywordPlanCampaignKeyword resource names have the form: `customers/{custom
   * er_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * The keyword text.
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
class_alias(GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword');
