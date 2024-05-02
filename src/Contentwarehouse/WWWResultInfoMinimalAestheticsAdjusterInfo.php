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

namespace Google\Service\Contentwarehouse;

class WWWResultInfoMinimalAestheticsAdjusterInfo extends \Google\Model
{
  /**
   * @var float
   */
  public $boost;
  /**
   * @var float
   */
  public $deepTagCollageBoost;
  /**
   * @var float
   */
  public $deepTagCollageScore;
  /**
   * @var float
   */
  public $eqBoost;
  /**
   * @var float
   */
  public $eqExpansionOrganicBoost;
  /**
   * @var float
   */
  public $eqExpansionStar;
  /**
   * @var float
   */
  public $tqBoost;

  /**
   * @param float
   */
  public function setBoost($boost)
  {
    $this->boost = $boost;
  }
  /**
   * @return float
   */
  public function getBoost()
  {
    return $this->boost;
  }
  /**
   * @param float
   */
  public function setDeepTagCollageBoost($deepTagCollageBoost)
  {
    $this->deepTagCollageBoost = $deepTagCollageBoost;
  }
  /**
   * @return float
   */
  public function getDeepTagCollageBoost()
  {
    return $this->deepTagCollageBoost;
  }
  /**
   * @param float
   */
  public function setDeepTagCollageScore($deepTagCollageScore)
  {
    $this->deepTagCollageScore = $deepTagCollageScore;
  }
  /**
   * @return float
   */
  public function getDeepTagCollageScore()
  {
    return $this->deepTagCollageScore;
  }
  /**
   * @param float
   */
  public function setEqBoost($eqBoost)
  {
    $this->eqBoost = $eqBoost;
  }
  /**
   * @return float
   */
  public function getEqBoost()
  {
    return $this->eqBoost;
  }
  /**
   * @param float
   */
  public function setEqExpansionOrganicBoost($eqExpansionOrganicBoost)
  {
    $this->eqExpansionOrganicBoost = $eqExpansionOrganicBoost;
  }
  /**
   * @return float
   */
  public function getEqExpansionOrganicBoost()
  {
    return $this->eqExpansionOrganicBoost;
  }
  /**
   * @param float
   */
  public function setEqExpansionStar($eqExpansionStar)
  {
    $this->eqExpansionStar = $eqExpansionStar;
  }
  /**
   * @return float
   */
  public function getEqExpansionStar()
  {
    return $this->eqExpansionStar;
  }
  /**
   * @param float
   */
  public function setTqBoost($tqBoost)
  {
    $this->tqBoost = $tqBoost;
  }
  /**
   * @return float
   */
  public function getTqBoost()
  {
    return $this->tqBoost;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WWWResultInfoMinimalAestheticsAdjusterInfo::class, 'Google_Service_Contentwarehouse_WWWResultInfoMinimalAestheticsAdjusterInfo');
