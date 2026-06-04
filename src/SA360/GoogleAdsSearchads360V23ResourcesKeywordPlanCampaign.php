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

class GoogleAdsSearchads360V23ResourcesKeywordPlanCampaign extends \Google\Collection
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
  protected $collection_key = 'languageConstants';
  /**
   * A default max cpc bid in micros, and in the account currency, for all ad
   * groups under the campaign. This field is required and should not be empty
   * when creating Keyword Plan campaigns.
   *
   * @var string
   */
  public $cpcBidMicros;
  protected $geoTargetsType = GoogleAdsSearchads360V23ResourcesKeywordPlanGeoTarget::class;
  protected $geoTargetsDataType = 'array';
  /**
   * Output only. The ID of the Keyword Plan campaign.
   *
   * @var string
   */
  public $id;
  /**
   * The keyword plan this campaign belongs to.
   *
   * @var string
   */
  public $keywordPlan;
  /**
   * Targeting network. This field is required and should not be empty when
   * creating Keyword Plan campaigns.
   *
   * @var string
   */
  public $keywordPlanNetwork;
  /**
   * The languages targeted for the Keyword Plan campaign. Max allowed: 1.
   *
   * @var string[]
   */
  public $languageConstants;
  /**
   * The name of the Keyword Plan campaign. This field is required and should
   * not be empty when creating Keyword Plan campaigns.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the Keyword Plan campaign.
   * KeywordPlanCampaign resource names have the form:
   * `customers/{customer_id}/keywordPlanCampaigns/{kp_campaign_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * A default max cpc bid in micros, and in the account currency, for all ad
   * groups under the campaign. This field is required and should not be empty
   * when creating Keyword Plan campaigns.
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
   * The geo targets. Max number allowed: 20.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordPlanGeoTarget[] $geoTargets
   */
  public function setGeoTargets($geoTargets)
  {
    $this->geoTargets = $geoTargets;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordPlanGeoTarget[]
   */
  public function getGeoTargets()
  {
    return $this->geoTargets;
  }
  /**
   * Output only. The ID of the Keyword Plan campaign.
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
   * The keyword plan this campaign belongs to.
   *
   * @param string $keywordPlan
   */
  public function setKeywordPlan($keywordPlan)
  {
    $this->keywordPlan = $keywordPlan;
  }
  /**
   * @return string
   */
  public function getKeywordPlan()
  {
    return $this->keywordPlan;
  }
  /**
   * Targeting network. This field is required and should not be empty when
   * creating Keyword Plan campaigns.
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
   * The languages targeted for the Keyword Plan campaign. Max allowed: 1.
   *
   * @param string[] $languageConstants
   */
  public function setLanguageConstants($languageConstants)
  {
    $this->languageConstants = $languageConstants;
  }
  /**
   * @return string[]
   */
  public function getLanguageConstants()
  {
    return $this->languageConstants;
  }
  /**
   * The name of the Keyword Plan campaign. This field is required and should
   * not be empty when creating Keyword Plan campaigns.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Immutable. The resource name of the Keyword Plan campaign.
   * KeywordPlanCampaign resource names have the form:
   * `customers/{customer_id}/keywordPlanCampaigns/{kp_campaign_id}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesKeywordPlanCampaign::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesKeywordPlanCampaign');
