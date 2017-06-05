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

class Google_Service_Calendar_Link extends Google_Model
{
  public $applinkingSource;
  protected $displayInfoType = 'Google_Service_Calendar_DisplayInfo';
  protected $displayInfoDataType = '';
  protected $launchInfoType = 'Google_Service_Calendar_LaunchInfo';
  protected $launchInfoDataType = '';
  public $platform;
  public $url;

  public function setApplinkingSource($applinkingSource)
  {
    $this->applinkingSource = $applinkingSource;
  }
  public function getApplinkingSource()
  {
    return $this->applinkingSource;
  }
  public function setDisplayInfo(Google_Service_Calendar_DisplayInfo $displayInfo)
  {
    $this->displayInfo = $displayInfo;
  }
  public function getDisplayInfo()
  {
    return $this->displayInfo;
  }
  public function setLaunchInfo(Google_Service_Calendar_LaunchInfo $launchInfo)
  {
    $this->launchInfo = $launchInfo;
  }
  public function getLaunchInfo()
  {
    return $this->launchInfo;
  }
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  public function getPlatform()
  {
    return $this->platform;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}
