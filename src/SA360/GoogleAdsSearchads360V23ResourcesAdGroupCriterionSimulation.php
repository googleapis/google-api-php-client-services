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

class GoogleAdsSearchads360V23ResourcesAdGroupCriterionSimulation extends \Google\Model
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
  /**
   * Output only. AdGroup ID of the simulation.
   *
   * @var string
   */
  public $adGroupId;
  protected $cpcBidPointListType = GoogleAdsSearchads360V23CommonCpcBidSimulationPointList::class;
  protected $cpcBidPointListDataType = '';
  /**
   * Output only. Criterion ID of the simulation.
   *
   * @var string
   */
  public $criterionId;
  /**
   * Output only. Last day on which the simulation is based, in YYYY-MM-DD
   * format.
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
  protected $percentCpcBidPointListType = GoogleAdsSearchads360V23CommonPercentCpcBidSimulationPointList::class;
  protected $percentCpcBidPointListDataType = '';
  /**
   * Output only. The resource name of the ad group criterion simulation. Ad
   * group criterion simulation resource names have the form: `customers/{custom
   * er_id}/adGroupCriterionSimulations/{ad_group_id}~{criterion_id}~{type}~{mod
   * ification_method}~{start_date}~{end_date}`
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
  /**
   * Output only. The field that the simulation modifies.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. AdGroup ID of the simulation.
   *
   * @param string $adGroupId
   */
  public function setAdGroupId($adGroupId)
  {
    $this->adGroupId = $adGroupId;
  }
  /**
   * @return string
   */
  public function getAdGroupId()
  {
    return $this->adGroupId;
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
   * Output only. Criterion ID of the simulation.
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
   * Output only. Last day on which the simulation is based, in YYYY-MM-DD
   * format.
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
   * Output only. Simulation points if the simulation type is PERCENT_CPC_BID.
   *
   * @param GoogleAdsSearchads360V23CommonPercentCpcBidSimulationPointList $percentCpcBidPointList
   */
  public function setPercentCpcBidPointList(GoogleAdsSearchads360V23CommonPercentCpcBidSimulationPointList $percentCpcBidPointList)
  {
    $this->percentCpcBidPointList = $percentCpcBidPointList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPercentCpcBidSimulationPointList
   */
  public function getPercentCpcBidPointList()
  {
    return $this->percentCpcBidPointList;
  }
  /**
   * Output only. The resource name of the ad group criterion simulation. Ad
   * group criterion simulation resource names have the form: `customers/{custom
   * er_id}/adGroupCriterionSimulations/{ad_group_id}~{criterion_id}~{type}~{mod
   * ification_method}~{start_date}~{end_date}`
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
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupCriterionSimulation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupCriterionSimulation');
