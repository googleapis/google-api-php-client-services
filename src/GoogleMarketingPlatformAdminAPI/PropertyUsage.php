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

namespace Google\Service\GoogleMarketingPlatformAdminAPI;

class PropertyUsage extends \Google\Model
{
  /**
   * @var string
   */
  public $accountId;
  /**
   * @var string
   */
  public $billableEventCount;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $property;
  /**
   * @var string
   */
  public $propertyType;
  /**
   * @var string
   */
  public $serviceLevel;
  /**
   * @var string
   */
  public $totalEventCount;

  /**
   * @param string
   */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /**
   * @return string
   */
  public function getAccountId()
  {
    return $this->accountId;
  }
  /**
   * @param string
   */
  public function setBillableEventCount($billableEventCount)
  {
    $this->billableEventCount = $billableEventCount;
  }
  /**
   * @return string
   */
  public function getBillableEventCount()
  {
    return $this->billableEventCount;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string
   */
  public function setProperty($property)
  {
    $this->property = $property;
  }
  /**
   * @return string
   */
  public function getProperty()
  {
    return $this->property;
  }
  /**
   * @param string
   */
  public function setPropertyType($propertyType)
  {
    $this->propertyType = $propertyType;
  }
  /**
   * @return string
   */
  public function getPropertyType()
  {
    return $this->propertyType;
  }
  /**
   * @param string
   */
  public function setServiceLevel($serviceLevel)
  {
    $this->serviceLevel = $serviceLevel;
  }
  /**
   * @return string
   */
  public function getServiceLevel()
  {
    return $this->serviceLevel;
  }
  /**
   * @param string
   */
  public function setTotalEventCount($totalEventCount)
  {
    $this->totalEventCount = $totalEventCount;
  }
  /**
   * @return string
   */
  public function getTotalEventCount()
  {
    return $this->totalEventCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PropertyUsage::class, 'Google_Service_GoogleMarketingPlatformAdminAPI_PropertyUsage');
