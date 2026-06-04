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

class GoogleAdsSearchads360V23ResourcesMediaVideo extends \Google\Model
{
  /**
   * Output only. The duration of the Video in milliseconds.
   *
   * @var string
   */
  public $adDurationMillis;
  /**
   * Output only. The Advertising Digital Identification code for this video, as
   * defined by the American Association of Advertising Agencies, used mainly
   * for television commercials.
   *
   * @var string
   */
  public $advertisingIdCode;
  /**
   * Output only. The Industry Standard Commercial Identifier code for this
   * video, used mainly for television commercials.
   *
   * @var string
   */
  public $isciCode;
  /**
   * Immutable. The YouTube video ID (as seen in YouTube URLs). Adding prefix
   * "https://www.youtube.com/watch?v=" to this ID will get the YouTube
   * streaming URL for this video.
   *
   * @var string
   */
  public $youtubeVideoId;

  /**
   * Output only. The duration of the Video in milliseconds.
   *
   * @param string $adDurationMillis
   */
  public function setAdDurationMillis($adDurationMillis)
  {
    $this->adDurationMillis = $adDurationMillis;
  }
  /**
   * @return string
   */
  public function getAdDurationMillis()
  {
    return $this->adDurationMillis;
  }
  /**
   * Output only. The Advertising Digital Identification code for this video, as
   * defined by the American Association of Advertising Agencies, used mainly
   * for television commercials.
   *
   * @param string $advertisingIdCode
   */
  public function setAdvertisingIdCode($advertisingIdCode)
  {
    $this->advertisingIdCode = $advertisingIdCode;
  }
  /**
   * @return string
   */
  public function getAdvertisingIdCode()
  {
    return $this->advertisingIdCode;
  }
  /**
   * Output only. The Industry Standard Commercial Identifier code for this
   * video, used mainly for television commercials.
   *
   * @param string $isciCode
   */
  public function setIsciCode($isciCode)
  {
    $this->isciCode = $isciCode;
  }
  /**
   * @return string
   */
  public function getIsciCode()
  {
    return $this->isciCode;
  }
  /**
   * Immutable. The YouTube video ID (as seen in YouTube URLs). Adding prefix
   * "https://www.youtube.com/watch?v=" to this ID will get the YouTube
   * streaming URL for this video.
   *
   * @param string $youtubeVideoId
   */
  public function setYoutubeVideoId($youtubeVideoId)
  {
    $this->youtubeVideoId = $youtubeVideoId;
  }
  /**
   * @return string
   */
  public function getYoutubeVideoId()
  {
    return $this->youtubeVideoId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesMediaVideo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesMediaVideo');
