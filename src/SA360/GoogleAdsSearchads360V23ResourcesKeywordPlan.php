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

class GoogleAdsSearchads360V23ResourcesKeywordPlan extends \Google\Model
{
  protected $forecastPeriodType = GoogleAdsSearchads360V23ResourcesKeywordPlanForecastPeriod::class;
  protected $forecastPeriodDataType = '';
  /**
   * Output only. The ID of the keyword plan.
   *
   * @var string
   */
  public $id;
  /**
   * The name of the keyword plan. This field is required and should not be
   * empty when creating new keyword plans.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the Keyword Planner plan. KeywordPlan
   * resource names have the form:
   * `customers/{customer_id}/keywordPlans/{kp_plan_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * The date period used for forecasting the plan.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordPlanForecastPeriod $forecastPeriod
   */
  public function setForecastPeriod(GoogleAdsSearchads360V23ResourcesKeywordPlanForecastPeriod $forecastPeriod)
  {
    $this->forecastPeriod = $forecastPeriod;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordPlanForecastPeriod
   */
  public function getForecastPeriod()
  {
    return $this->forecastPeriod;
  }
  /**
   * Output only. The ID of the keyword plan.
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
   * The name of the keyword plan. This field is required and should not be
   * empty when creating new keyword plans.
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
   * Immutable. The resource name of the Keyword Planner plan. KeywordPlan
   * resource names have the form:
   * `customers/{customer_id}/keywordPlans/{kp_plan_id}`
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
class_alias(GoogleAdsSearchads360V23ResourcesKeywordPlan::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesKeywordPlan');
