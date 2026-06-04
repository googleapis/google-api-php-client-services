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

class GoogleAdsSearchads360V23ResourcesCampaignSimulation extends \Google\Model
{
  /**
   * Not specified.
   */
  public const MODIFICATION_METHOD_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const MODIFICATION_METHOD_UNKNOWN = 'UNKNOWN';
  /**
   * The values in a simulation were applied to all children of a given resource
   * uniformly. Overrides on child resources were not respected.
   */
  public const MODIFICATION_METHOD_UNIFORM = 'UNIFORM';
  /**
   * The values in a simulation were applied to the given resource. Overrides on
   * child resources were respected, and traffic estimates do not include these
   * resources.
   */
  public const MODIFICATION_METHOD_DEFAULT = 'DEFAULT';
  /**
   * The values in a simulation were all scaled by the same factor. For example,
   * in a simulated TargetCpa campaign, the campaign target and all ad group
   * targets were scaled by a factor of X.
   */
  public const MODIFICATION_METHOD_SCALING = 'SCALING';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The simulation is for a CPC bid.
   */
  public const TYPE_CPC_BID = 'CPC_BID';
  /**
   * The simulation is for a CPV bid.
   */
  public const TYPE_CPV_BID = 'CPV_BID';
  /**
   * The simulation is for a CPA target.
   */
  public const TYPE_TARGET_CPA = 'TARGET_CPA';
  /**
   * The simulation is for a bid modifier.
   */
  public const TYPE_BID_MODIFIER = 'BID_MODIFIER';
  /**
   * The simulation is for a ROAS target.
   */
  public const TYPE_TARGET_ROAS = 'TARGET_ROAS';
  /**
   * The simulation is for a percent CPC bid.
   */
  public const TYPE_PERCENT_CPC_BID = 'PERCENT_CPC_BID';
  /**
   * The simulation is for an impression share target.
   */
  public const TYPE_TARGET_IMPRESSION_SHARE = 'TARGET_IMPRESSION_SHARE';
  /**
   * The simulation is for a budget.
   */
  public const TYPE_BUDGET = 'BUDGET';
  protected $budgetPointListType = GoogleAdsSearchads360V23CommonBudgetSimulationPointList::class;
  protected $budgetPointListDataType = '';
  /**
   * Output only. Campaign id of the simulation.
   *
   * @var string
   */
  public $campaignId;
  protected $cpcBidPointListType = GoogleAdsSearchads360V23CommonCpcBidSimulationPointList::class;
  protected $cpcBidPointListDataType = '';
  /**
   * Output only. Last day on which the simulation is based, in YYYY-MM-DD
   * format
   *
   * @var string
   */
  public $endDate;
  /**
   * Output only. How the simulation modifies the field.
   *
   * @var string
   */
  public $modificationMethod;
  /**
   * Output only. The resource name of the campaign simulation. Campaign
   * simulation resource names have the form: `customers/{customer_id}/campaignS
   * imulations/{campaign_id}~{type}~{modification_method}~{start_date}~{end_dat
   * e}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. First day on which the simulation is based, in YYYY-MM-DD
   * format.
   *
   * @var string
   */
  public $startDate;
  protected $targetCpaPointListType = GoogleAdsSearchads360V23CommonTargetCpaSimulationPointList::class;
  protected $targetCpaPointListDataType = '';
  protected $targetImpressionSharePointListType = GoogleAdsSearchads360V23CommonTargetImpressionShareSimulationPointList::class;
  protected $targetImpressionSharePointListDataType = '';
  protected $targetRoasPointListType = GoogleAdsSearchads360V23CommonTargetRoasSimulationPointList::class;
  protected $targetRoasPointListDataType = '';
  /**
   * Output only. The field that the simulation modifies.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. Simulation points if the simulation type is BUDGET.
   *
   * @param GoogleAdsSearchads360V23CommonBudgetSimulationPointList $budgetPointList
   */
  public function setBudgetPointList(GoogleAdsSearchads360V23CommonBudgetSimulationPointList $budgetPointList)
  {
    $this->budgetPointList = $budgetPointList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonBudgetSimulationPointList
   */
  public function getBudgetPointList()
  {
    return $this->budgetPointList;
  }
  /**
   * Output only. Campaign id of the simulation.
   *
   * @param string $campaignId
   */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /**
   * @return string
   */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /**
   * Output only. Simulation points if the simulation type is CPC_BID.
   *
   * @param GoogleAdsSearchads360V23CommonCpcBidSimulationPointList $cpcBidPointList
   */
  public function setCpcBidPointList(GoogleAdsSearchads360V23CommonCpcBidSimulationPointList $cpcBidPointList)
  {
    $this->cpcBidPointList = $cpcBidPointList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCpcBidSimulationPointList
   */
  public function getCpcBidPointList()
  {
    return $this->cpcBidPointList;
  }
  /**
   * Output only. Last day on which the simulation is based, in YYYY-MM-DD
   * format
   *
   * @param string $endDate
   */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return string
   */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /**
   * Output only. How the simulation modifies the field.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, UNIFORM, DEFAULT, SCALING
   *
   * @param self::MODIFICATION_METHOD_* $modificationMethod
   */
  public function setModificationMethod($modificationMethod)
  {
    $this->modificationMethod = $modificationMethod;
  }
  /**
   * @return self::MODIFICATION_METHOD_*
   */
  public function getModificationMethod()
  {
    return $this->modificationMethod;
  }
  /**
   * Output only. The resource name of the campaign simulation. Campaign
   * simulation resource names have the form: `customers/{customer_id}/campaignS
   * imulations/{campaign_id}~{type}~{modification_method}~{start_date}~{end_dat
   * e}`
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
   * Output only. First day on which the simulation is based, in YYYY-MM-DD
   * format.
   *
   * @param string $startDate
   */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return string
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /**
   * Output only. Simulation points if the simulation type is TARGET_CPA.
   *
   * @param GoogleAdsSearchads360V23CommonTargetCpaSimulationPointList $targetCpaPointList
   */
  public function setTargetCpaPointList(GoogleAdsSearchads360V23CommonTargetCpaSimulationPointList $targetCpaPointList)
  {
    $this->targetCpaPointList = $targetCpaPointList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetCpaSimulationPointList
   */
  public function getTargetCpaPointList()
  {
    return $this->targetCpaPointList;
  }
  /**
   * Output only. Simulation points if the simulation type is
   * TARGET_IMPRESSION_SHARE.
   *
   * @param GoogleAdsSearchads360V23CommonTargetImpressionShareSimulationPointList $targetImpressionSharePointList
   */
  public function setTargetImpressionSharePointList(GoogleAdsSearchads360V23CommonTargetImpressionShareSimulationPointList $targetImpressionSharePointList)
  {
    $this->targetImpressionSharePointList = $targetImpressionSharePointList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetImpressionShareSimulationPointList
   */
  public function getTargetImpressionSharePointList()
  {
    return $this->targetImpressionSharePointList;
  }
  /**
   * Output only. Simulation points if the simulation type is TARGET_ROAS.
   *
   * @param GoogleAdsSearchads360V23CommonTargetRoasSimulationPointList $targetRoasPointList
   */
  public function setTargetRoasPointList(GoogleAdsSearchads360V23CommonTargetRoasSimulationPointList $targetRoasPointList)
  {
    $this->targetRoasPointList = $targetRoasPointList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetRoasSimulationPointList
   */
  public function getTargetRoasPointList()
  {
    return $this->targetRoasPointList;
  }
  /**
   * Output only. The field that the simulation modifies.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CPC_BID, CPV_BID, TARGET_CPA,
   * BID_MODIFIER, TARGET_ROAS, PERCENT_CPC_BID, TARGET_IMPRESSION_SHARE, BUDGET
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignSimulation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignSimulation');
