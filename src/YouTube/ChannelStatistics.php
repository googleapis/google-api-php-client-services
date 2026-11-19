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

namespace Google\Service\YouTube;

class ChannelStatistics extends \Google\Model
{
  /**
   * The number of comments for the channel.
   *
   * @var string
   */
  public $commentCount;
  /**
   * Whether or not the number of subscribers is shown for this user.
   *
   * @var bool
   */
  public $hiddenSubscriberCount;
  /**
   * The number of subscribers that the channel has.
   *
   * @var string
   */
  public $subscriberCount;
  /**
   * The number of videos uploaded to the channel.
   *
   * @var string
   */
  public $videoCount;
  /**
   * The sum of the number of times all the videos in all formats have been
   * viewed for a channel. For all video formats (long-form, Live, and Shorts)
   * on a channel, `viewCount` counts views the moment a video begins to play
   * (includes autoplay, hold the pointer over, and click/tap to play). For all
   * video formats (long-form, Live, and Shorts) on a channel, `viewCount`
   * includes co-views when multiple people watch together on a television
   * screen.
   *
   * @var string
   */
  public $viewCount;

  /**
   * The number of comments for the channel.
   *
   * @param string $commentCount
   */
  public function setCommentCount($commentCount)
  {
    $this->commentCount = $commentCount;
  }
  /**
   * @return string
   */
  public function getCommentCount()
  {
    return $this->commentCount;
  }
  /**
   * Whether or not the number of subscribers is shown for this user.
   *
   * @param bool $hiddenSubscriberCount
   */
  public function setHiddenSubscriberCount($hiddenSubscriberCount)
  {
    $this->hiddenSubscriberCount = $hiddenSubscriberCount;
  }
  /**
   * @return bool
   */
  public function getHiddenSubscriberCount()
  {
    return $this->hiddenSubscriberCount;
  }
  /**
   * The number of subscribers that the channel has.
   *
   * @param string $subscriberCount
   */
  public function setSubscriberCount($subscriberCount)
  {
    $this->subscriberCount = $subscriberCount;
  }
  /**
   * @return string
   */
  public function getSubscriberCount()
  {
    return $this->subscriberCount;
  }
  /**
   * The number of videos uploaded to the channel.
   *
   * @param string $videoCount
   */
  public function setVideoCount($videoCount)
  {
    $this->videoCount = $videoCount;
  }
  /**
   * @return string
   */
  public function getVideoCount()
  {
    return $this->videoCount;
  }
  /**
   * The sum of the number of times all the videos in all formats have been
   * viewed for a channel. For all video formats (long-form, Live, and Shorts)
   * on a channel, `viewCount` counts views the moment a video begins to play
   * (includes autoplay, hold the pointer over, and click/tap to play). For all
   * video formats (long-form, Live, and Shorts) on a channel, `viewCount`
   * includes co-views when multiple people watch together on a television
   * screen.
   *
   * @param string $viewCount
   */
  public function setViewCount($viewCount)
  {
    $this->viewCount = $viewCount;
  }
  /**
   * @return string
   */
  public function getViewCount()
  {
    return $this->viewCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChannelStatistics::class, 'Google_Service_YouTube_ChannelStatistics');
