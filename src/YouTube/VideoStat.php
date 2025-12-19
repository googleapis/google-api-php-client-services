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

class VideoStat extends \Google\Model
{
  protected $contentDetailsType = VideoStatsContentDetails::class;
  protected $contentDetailsDataType = '';
  /**
   * Output only. Etag of this resource.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. The ID that YouTube uses to uniquely identify the video.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. Identifies what kind of resource this is. Value: the fixed
   * string "youtube#videoStats".
   *
   * @var string
   */
  public $kind;
  protected $snippetType = VideoStatsSnippet::class;
  protected $snippetDataType = '';
  protected $statisticsType = VideoStatsStatistics::class;
  protected $statisticsDataType = '';

  /**
   * Output only. The VideoStatsContentDetails object contains information about
   * the video content, including the length of the video.
   *
   * @param VideoStatsContentDetails $contentDetails
   */
  public function setContentDetails(VideoStatsContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /**
   * @return VideoStatsContentDetails
   */
  public function getContentDetails()
  {
    return $this->contentDetails;
  }
  /**
   * Output only. Etag of this resource.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Output only. The ID that YouTube uses to uniquely identify the video.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. Identifies what kind of resource this is. Value: the fixed
   * string "youtube#videoStats".
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * Output only. The VideoStatsSnippet object contains basic details about the
   * video, such publish time.
   *
   * @param VideoStatsSnippet $snippet
   */
  public function setSnippet(VideoStatsSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /**
   * @return VideoStatsSnippet
   */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /**
   * Output only. The VideoStatsStatistics object contains statistics about the
   * video.
   *
   * @param VideoStatsStatistics $statistics
   */
  public function setStatistics(VideoStatsStatistics $statistics)
  {
    $this->statistics = $statistics;
  }
  /**
   * @return VideoStatsStatistics
   */
  public function getStatistics()
  {
    return $this->statistics;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VideoStat::class, 'Google_Service_YouTube_VideoStat');
