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

class GoogleChromeManagementV1BatterySampleReport extends \Google\Model
{
  public $chargeRate;
  public $current;
  public $dischargeRate;
  public $remainingCapacity;
  public $reportTime;
  public $status;
  public $temperature;
  public $voltage;

  public function setChargeRate($chargeRate)
  {
    $this->chargeRate = $chargeRate;
  }
  public function getChargeRate()
  {
    return $this->chargeRate;
  }
  public function setCurrent($current)
  {
    $this->current = $current;
  }
  public function getCurrent()
  {
    return $this->current;
  }
  public function setDischargeRate($dischargeRate)
  {
    $this->dischargeRate = $dischargeRate;
  }
  public function getDischargeRate()
  {
    return $this->dischargeRate;
  }
  public function setRemainingCapacity($remainingCapacity)
  {
    $this->remainingCapacity = $remainingCapacity;
  }
  public function getRemainingCapacity()
  {
    return $this->remainingCapacity;
  }
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  public function getReportTime()
  {
    return $this->reportTime;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTemperature($temperature)
  {
    $this->temperature = $temperature;
  }
  public function getTemperature()
  {
    return $this->temperature;
  }
  public function setVoltage($voltage)
  {
    $this->voltage = $voltage;
  }
  public function getVoltage()
  {
    return $this->voltage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1BatterySampleReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1BatterySampleReport');
