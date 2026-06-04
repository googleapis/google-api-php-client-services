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

class GoogleAdsSearchads360V23ServicesGraduateExperimentRequest extends \Google\Collection
{
  protected $collection_key = 'campaignBudgetMappings';
  protected $campaignBudgetMappingsType = GoogleAdsSearchads360V23ServicesCampaignBudgetMapping::class;
  protected $campaignBudgetMappingsDataType = 'array';
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Required. List of campaign budget mappings for graduation. Each campaign
   * that appears here will graduate, and will be assigned a new budget that is
   * paired with it in the mapping. The maximum size is one.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignBudgetMapping[] $campaignBudgetMappings
   */
  public function setCampaignBudgetMappings($campaignBudgetMappings)
  {
    $this->campaignBudgetMappings = $campaignBudgetMappings;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignBudgetMapping[]
   */
  public function getCampaignBudgetMappings()
  {
    return $this->campaignBudgetMappings;
  }
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGraduateExperimentRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGraduateExperimentRequest');
