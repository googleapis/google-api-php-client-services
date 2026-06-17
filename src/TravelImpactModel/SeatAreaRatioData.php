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

namespace Google\Service\TravelImpactModel;

class SeatAreaRatioData extends \Google\Model
{
  /**
   * Output only. Business seating class data value.
   *
   * @var 
   */
  public $business;
  /**
   * Output only. Economy seating class data value.
   *
   * @var 
   */
  public $economy;
  /**
   * Output only. First seating class data value.
   *
   * @var 
   */
  public $first;
  /**
   * Output only. Premium economy seating class data value.
   *
   * @var 
   */
  public $premiumEconomy;

  public function setBusiness($business)
  {
    $this->business = $business;
  }
  public function getBusiness()
  {
    return $this->business;
  }
  public function setEconomy($economy)
  {
    $this->economy = $economy;
  }
  public function getEconomy()
  {
    return $this->economy;
  }
  public function setFirst($first)
  {
    $this->first = $first;
  }
  public function getFirst()
  {
    return $this->first;
  }
  public function setPremiumEconomy($premiumEconomy)
  {
    $this->premiumEconomy = $premiumEconomy;
  }
  public function getPremiumEconomy()
  {
    return $this->premiumEconomy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SeatAreaRatioData::class, 'Google_Service_TravelImpactModel_SeatAreaRatioData');
