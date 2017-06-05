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

class Google_Service_Calendar_DisplayInfo extends Google_Model
{
  public $appIconUrl;
  public $appShortTitle;
  public $appTitle;
  public $linkShortTitle;
  public $linkTitle;

  public function setAppIconUrl($appIconUrl)
  {
    $this->appIconUrl = $appIconUrl;
  }
  public function getAppIconUrl()
  {
    return $this->appIconUrl;
  }
  public function setAppShortTitle($appShortTitle)
  {
    $this->appShortTitle = $appShortTitle;
  }
  public function getAppShortTitle()
  {
    return $this->appShortTitle;
  }
  public function setAppTitle($appTitle)
  {
    $this->appTitle = $appTitle;
  }
  public function getAppTitle()
  {
    return $this->appTitle;
  }
  public function setLinkShortTitle($linkShortTitle)
  {
    $this->linkShortTitle = $linkShortTitle;
  }
  public function getLinkShortTitle()
  {
    return $this->linkShortTitle;
  }
  public function setLinkTitle($linkTitle)
  {
    $this->linkTitle = $linkTitle;
  }
  public function getLinkTitle()
  {
    return $this->linkTitle;
  }
}
