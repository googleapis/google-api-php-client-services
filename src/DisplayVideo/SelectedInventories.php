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

namespace Google\Service\DisplayVideo;

class SelectedInventories extends \Google\Model
{
  /**
   * Whether the ad group is opted-in to Discover inventory.
   *
   * @var bool
   */
  public $allowDiscover;
  /**
   * Whether the ad group is opted-in to Gmail inventory.
   *
   * @var bool
   */
  public $allowGmail;
  /**
   * Whether the ad group is opted-in to Google Display Network inventory.
   *
   * @var bool
   */
  public $allowGoogleDisplayNetwork;
  /**
   * Whether the ad group is opted-in to YouTube in-feed inventory.
   *
   * @var bool
   */
  public $allowYoutubeFeed;
  /**
   * Whether the ad group is opted-in to YouTube shorts inventory.
   *
   * @var bool
   */
  public $allowYoutubeShorts;
  /**
   * Whether the ad group is opted-in to YouTube in-stream inventory.
   *
   * @var bool
   */
  public $allowYoutubeStream;

  /**
   * Whether the ad group is opted-in to Discover inventory.
   *
   * @param bool $allowDiscover
   */
  public function setAllowDiscover($allowDiscover)
  {
    $this->allowDiscover = $allowDiscover;
  }
  /**
   * @return bool
   */
  public function getAllowDiscover()
  {
    return $this->allowDiscover;
  }
  /**
   * Whether the ad group is opted-in to Gmail inventory.
   *
   * @param bool $allowGmail
   */
  public function setAllowGmail($allowGmail)
  {
    $this->allowGmail = $allowGmail;
  }
  /**
   * @return bool
   */
  public function getAllowGmail()
  {
    return $this->allowGmail;
  }
  /**
   * Whether the ad group is opted-in to Google Display Network inventory.
   *
   * @param bool $allowGoogleDisplayNetwork
   */
  public function setAllowGoogleDisplayNetwork($allowGoogleDisplayNetwork)
  {
    $this->allowGoogleDisplayNetwork = $allowGoogleDisplayNetwork;
  }
  /**
   * @return bool
   */
  public function getAllowGoogleDisplayNetwork()
  {
    return $this->allowGoogleDisplayNetwork;
  }
  /**
   * Whether the ad group is opted-in to YouTube in-feed inventory.
   *
   * @param bool $allowYoutubeFeed
   */
  public function setAllowYoutubeFeed($allowYoutubeFeed)
  {
    $this->allowYoutubeFeed = $allowYoutubeFeed;
  }
  /**
   * @return bool
   */
  public function getAllowYoutubeFeed()
  {
    return $this->allowYoutubeFeed;
  }
  /**
   * Whether the ad group is opted-in to YouTube shorts inventory.
   *
   * @param bool $allowYoutubeShorts
   */
  public function setAllowYoutubeShorts($allowYoutubeShorts)
  {
    $this->allowYoutubeShorts = $allowYoutubeShorts;
  }
  /**
   * @return bool
   */
  public function getAllowYoutubeShorts()
  {
    return $this->allowYoutubeShorts;
  }
  /**
   * Whether the ad group is opted-in to YouTube in-stream inventory.
   *
   * @param bool $allowYoutubeStream
   */
  public function setAllowYoutubeStream($allowYoutubeStream)
  {
    $this->allowYoutubeStream = $allowYoutubeStream;
  }
  /**
   * @return bool
   */
  public function getAllowYoutubeStream()
  {
    return $this->allowYoutubeStream;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SelectedInventories::class, 'Google_Service_DisplayVideo_SelectedInventories');
