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

class GoogleAdsSearchads360V23ResourcesCampaignBidModifier extends \Google\Model
{
  /**
   * The modifier for the bid when the criterion matches.
   *
   * @var 
   */
  public $bidModifier;
  /**
   * Output only. The campaign to which this criterion belongs.
   *
   * @var string
   */
  public $campaign;
  /**
   * Output only. The ID of the criterion to bid modify. This field is ignored
   * for mutates.
   *
   * @var string
   */
  public $criterionId;
  protected $interactionTypeType = GoogleAdsSearchads360V23CommonInteractionTypeInfo::class;
  protected $interactionTypeDataType = '';
  /**
   * Immutable. The resource name of the campaign bid modifier. Campaign bid
   * modifier resource names have the form:
   * `customers/{customer_id}/campaignBidModifiers/{campaign_id}~{criterion_id}`
   *
   * @var string
   */
  public $resourceName;

  public function setBidModifier($bidModifier)
  {
    $this->bidModifier = $bidModifier;
  }
  public function getBidModifier()
  {
    return $this->bidModifier;
  }
  /**
   * Output only. The campaign to which this criterion belongs.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Output only. The ID of the criterion to bid modify. This field is ignored
   * for mutates.
   *
   * @param string $criterionId
   */
  public function setCriterionId($criterionId)
  {
    $this->criterionId = $criterionId;
  }
  /**
   * @return string
   */
  public function getCriterionId()
  {
    return $this->criterionId;
  }
  /**
   * Immutable. Criterion for interaction type. Only supported for search
   * campaigns.
   *
   * @param GoogleAdsSearchads360V23CommonInteractionTypeInfo $interactionType
   */
  public function setInteractionType(GoogleAdsSearchads360V23CommonInteractionTypeInfo $interactionType)
  {
    $this->interactionType = $interactionType;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonInteractionTypeInfo
   */
  public function getInteractionType()
  {
    return $this->interactionType;
  }
  /**
   * Immutable. The resource name of the campaign bid modifier. Campaign bid
   * modifier resource names have the form:
   * `customers/{customer_id}/campaignBidModifiers/{campaign_id}~{criterion_id}`
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
class_alias(GoogleAdsSearchads360V23ResourcesCampaignBidModifier::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignBidModifier');
