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

class GoogleAdsSearchads360V23CommonLineupAttributeMetadataSampleChannel extends \Google\Model
{
  /**
   * The name of the sample channel.
   *
   * @var string
   */
  public $displayName;
  protected $youtubeChannelType = GoogleAdsSearchads360V23CommonYouTubeChannelInfo::class;
  protected $youtubeChannelDataType = '';
  protected $youtubeChannelMetadataType = GoogleAdsSearchads360V23CommonYouTubeChannelAttributeMetadata::class;
  protected $youtubeChannelMetadataDataType = '';

  /**
   * The name of the sample channel.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * A YouTube channel.
   *
   * @param GoogleAdsSearchads360V23CommonYouTubeChannelInfo $youtubeChannel
   */
  public function setYoutubeChannel(GoogleAdsSearchads360V23CommonYouTubeChannelInfo $youtubeChannel)
  {
    $this->youtubeChannel = $youtubeChannel;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYouTubeChannelInfo
   */
  public function getYoutubeChannel()
  {
    return $this->youtubeChannel;
  }
  /**
   * Metadata for the sample channel.
   *
   * @param GoogleAdsSearchads360V23CommonYouTubeChannelAttributeMetadata $youtubeChannelMetadata
   */
  public function setYoutubeChannelMetadata(GoogleAdsSearchads360V23CommonYouTubeChannelAttributeMetadata $youtubeChannelMetadata)
  {
    $this->youtubeChannelMetadata = $youtubeChannelMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYouTubeChannelAttributeMetadata
   */
  public function getYoutubeChannelMetadata()
  {
    return $this->youtubeChannelMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLineupAttributeMetadataSampleChannel::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLineupAttributeMetadataSampleChannel');
