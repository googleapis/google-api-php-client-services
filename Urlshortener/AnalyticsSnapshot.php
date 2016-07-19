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

class Google_Service_Urlshortener_AnalyticsSnapshot extends Google_Collection
{
  protected $collection_key = 'referrers';
  public $browsers;
  public $countries;
  public $longUrlClicks;
  public $platforms;
  public $referrers;
  public $shortUrlClicks;

  public function setBrowsers(array $browsers)
  {
    foreach ($browsers as $b) {
      if (!$b instanceof Google_Service_Urlshortener_StringCount) {
        throw new InvalidArgumentException('First argument to setBrowsers must be an array of Google_Service_Urlshortener_StringCount');
      }
    }
    $this->browsers = $browsers;
  }
  public function getBrowsers()
  {
    return $this->browsers;
  }
  public function setCountries(array $countries)
  {
    foreach ($countries as $c) {
      if (!$c instanceof Google_Service_Urlshortener_StringCount) {
        throw new InvalidArgumentException('First argument to setCountries must be an array of Google_Service_Urlshortener_StringCount');
      }
    }
    $this->countries = $countries;
  }
  public function getCountries()
  {
    return $this->countries;
  }
  public function setLongUrlClicks($longUrlClicks)
  {
    $this->longUrlClicks = $longUrlClicks;
  }
  public function getLongUrlClicks()
  {
    return $this->longUrlClicks;
  }
  public function setPlatforms(array $platforms)
  {
    foreach ($platforms as $p) {
      if (!$p instanceof Google_Service_Urlshortener_StringCount) {
        throw new InvalidArgumentException('First argument to setPlatforms must be an array of Google_Service_Urlshortener_StringCount');
      }
    }
    $this->platforms = $platforms;
  }
  public function getPlatforms()
  {
    return $this->platforms;
  }
  public function setReferrers(array $referrers)
  {
    foreach ($referrers as $r) {
      if (!$r instanceof Google_Service_Urlshortener_StringCount) {
        throw new InvalidArgumentException('First argument to setReferrers must be an array of Google_Service_Urlshortener_StringCount');
      }
    }
    $this->referrers = $referrers;
  }
  public function getReferrers()
  {
    return $this->referrers;
  }
  public function setShortUrlClicks($shortUrlClicks)
  {
    $this->shortUrlClicks = $shortUrlClicks;
  }
  public function getShortUrlClicks()
  {
    return $this->shortUrlClicks;
  }
}
