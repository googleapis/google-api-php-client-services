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

class Google_Service_Dfareporting_GeoTargeting extends Google_Collection
{
  protected $collection_key = 'regions';
  public $cities;
  public $countries;
  public $excludeCountries;
  public $metros;
  public $postalCodes;
  public $regions;

  public function setCities(array $cities)
  {
    foreach ($cities as $c) {
      if (!$c instanceof Google_Service_Dfareporting_City) {
        throw new InvalidArgumentException('First argument to setCities must be an array of Google_Service_Dfareporting_City');
      }
    }
    $this->cities = $cities;
  }
  public function getCities()
  {
    return $this->cities;
  }
  public function setCountries(array $countries)
  {
    foreach ($countries as $c) {
      if (!$c instanceof Google_Service_Dfareporting_Country) {
        throw new InvalidArgumentException('First argument to setCountries must be an array of Google_Service_Dfareporting_Country');
      }
    }
    $this->countries = $countries;
  }
  public function getCountries()
  {
    return $this->countries;
  }
  public function setExcludeCountries($excludeCountries)
  {
    $this->excludeCountries = $excludeCountries;
  }
  public function getExcludeCountries()
  {
    return $this->excludeCountries;
  }
  public function setMetros(array $metros)
  {
    foreach ($metros as $m) {
      if (!$m instanceof Google_Service_Dfareporting_Metro) {
        throw new InvalidArgumentException('First argument to setMetros must be an array of Google_Service_Dfareporting_Metro');
      }
    }
    $this->metros = $metros;
  }
  public function getMetros()
  {
    return $this->metros;
  }
  public function setPostalCodes(array $postalCodes)
  {
    foreach ($postalCodes as $p) {
      if (!$p instanceof Google_Service_Dfareporting_PostalCode) {
        throw new InvalidArgumentException('First argument to setPostalCodes must be an array of Google_Service_Dfareporting_PostalCode');
      }
    }
    $this->postalCodes = $postalCodes;
  }
  public function getPostalCodes()
  {
    return $this->postalCodes;
  }
  public function setRegions(array $regions)
  {
    foreach ($regions as $r) {
      if (!$r instanceof Google_Service_Dfareporting_Region) {
        throw new InvalidArgumentException('First argument to setRegions must be an array of Google_Service_Dfareporting_Region');
      }
    }
    $this->regions = $regions;
  }
  public function getRegions()
  {
    return $this->regions;
  }
}
