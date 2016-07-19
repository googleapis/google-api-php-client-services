<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_QPXExpress_Data extends Google_Collection
{
  protected $collection_key = 'tax';
  public $aircraft;
  public $airport;
  public $carrier;
  public $city;
  public $kind;
  public $tax;

  public function setAircraft(array $aircraft)
  {
    foreach ($aircraft as $a) {
      if (!$a instanceof Google_Service_QPXExpress_AircraftData) {
        throw new InvalidArgumentException('First argument to setAircraft must be an array of Google_Service_QPXExpress_AircraftData');
      }
    }
    $this->aircraft = $aircraft;
  }
  public function getAircraft()
  {
    return $this->aircraft;
  }
  public function setAirport(array $airport)
  {
    foreach ($airport as $a) {
      if (!$a instanceof Google_Service_QPXExpress_AirportData) {
        throw new InvalidArgumentException('First argument to setAirport must be an array of Google_Service_QPXExpress_AirportData');
      }
    }
    $this->airport = $airport;
  }
  public function getAirport()
  {
    return $this->airport;
  }
  public function setCarrier(array $carrier)
  {
    foreach ($carrier as $c) {
      if (!$c instanceof Google_Service_QPXExpress_CarrierData) {
        throw new InvalidArgumentException('First argument to setCarrier must be an array of Google_Service_QPXExpress_CarrierData');
      }
    }
    $this->carrier = $carrier;
  }
  public function getCarrier()
  {
    return $this->carrier;
  }
  public function setCity(array $city)
  {
    foreach ($city as $c) {
      if (!$c instanceof Google_Service_QPXExpress_CityData) {
        throw new InvalidArgumentException('First argument to setCity must be an array of Google_Service_QPXExpress_CityData');
      }
    }
    $this->city = $city;
  }
  public function getCity()
  {
    return $this->city;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTax(array $tax)
  {
    foreach ($tax as $t) {
      if (!$t instanceof Google_Service_QPXExpress_TaxData) {
        throw new InvalidArgumentException('First argument to setTax must be an array of Google_Service_QPXExpress_TaxData');
      }
    }
    $this->tax = $tax;
  }
  public function getTax()
  {
    return $this->tax;
  }
}
