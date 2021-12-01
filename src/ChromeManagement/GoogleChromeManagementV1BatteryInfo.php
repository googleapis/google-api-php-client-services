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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementV1BatteryInfo extends \Google\Model
{
  public $designCapacity;
  public $designMinVoltage;
  protected $manufactureDateType = GoogleTypeDate::class;
  protected $manufactureDateDataType = '';
  public $manufacturer;
  public $serialNumber;
  public $technology;

  public function setDesignCapacity($designCapacity)
  {
    $this->designCapacity = $designCapacity;
  }
  public function getDesignCapacity()
  {
    return $this->designCapacity;
  }
  public function setDesignMinVoltage($designMinVoltage)
  {
    $this->designMinVoltage = $designMinVoltage;
  }
  public function getDesignMinVoltage()
  {
    return $this->designMinVoltage;
  }
  /**
   * @param GoogleTypeDate
   */
  public function setManufactureDate(GoogleTypeDate $manufactureDate)
  {
    $this->manufactureDate = $manufactureDate;
  }
  /**
   * @return GoogleTypeDate
   */
  public function getManufactureDate()
  {
    return $this->manufactureDate;
  }
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  public function setTechnology($technology)
  {
    $this->technology = $technology;
  }
  public function getTechnology()
  {
    return $this->technology;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1BatteryInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1BatteryInfo');
