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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControlsDemandGenSelectedChannels extends \Google\Model
{
  /**
   * Whether to enable ads on the Discover channel.
   *
   * @var bool
   */
  public $discover;
  /**
   * Whether to enable ads on the Display channel.
   *
   * @var bool
   */
  public $display;
  /**
   * Whether to enable ads on the Gmail channel.
   *
   * @var bool
   */
  public $gmail;
  /**
   * Whether to enable ads on the YouTube In-Feed channel.
   *
   * @var bool
   */
  public $youtubeInFeed;
  /**
   * Whether to enable ads on the YouTube In-Stream channel.
   *
   * @var bool
   */
  public $youtubeInStream;
  /**
   * Whether to enable ads on the YouTube Shorts channel.
   *
   * @var bool
   */
  public $youtubeShorts;

  /**
   * Whether to enable ads on the Discover channel.
   *
   * @param bool $discover
   */
  public function setDiscover($discover)
  {
    $this->discover = $discover;
  }
  /**
   * @return bool
   */
  public function getDiscover()
  {
    return $this->discover;
  }
  /**
   * Whether to enable ads on the Display channel.
   *
   * @param bool $display
   */
  public function setDisplay($display)
  {
    $this->display = $display;
  }
  /**
   * @return bool
   */
  public function getDisplay()
  {
    return $this->display;
  }
  /**
   * Whether to enable ads on the Gmail channel.
   *
   * @param bool $gmail
   */
  public function setGmail($gmail)
  {
    $this->gmail = $gmail;
  }
  /**
   * @return bool
   */
  public function getGmail()
  {
    return $this->gmail;
  }
  /**
   * Whether to enable ads on the YouTube In-Feed channel.
   *
   * @param bool $youtubeInFeed
   */
  public function setYoutubeInFeed($youtubeInFeed)
  {
    $this->youtubeInFeed = $youtubeInFeed;
  }
  /**
   * @return bool
   */
  public function getYoutubeInFeed()
  {
    return $this->youtubeInFeed;
  }
  /**
   * Whether to enable ads on the YouTube In-Stream channel.
   *
   * @param bool $youtubeInStream
   */
  public function setYoutubeInStream($youtubeInStream)
  {
    $this->youtubeInStream = $youtubeInStream;
  }
  /**
   * @return bool
   */
  public function getYoutubeInStream()
  {
    return $this->youtubeInStream;
  }
  /**
   * Whether to enable ads on the YouTube Shorts channel.
   *
   * @param bool $youtubeShorts
   */
  public function setYoutubeShorts($youtubeShorts)
  {
    $this->youtubeShorts = $youtubeShorts;
  }
  /**
   * @return bool
   */
  public function getYoutubeShorts()
  {
    return $this->youtubeShorts;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControlsDemandGenSelectedChannels::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControlsDemandGenSelectedChannels');
