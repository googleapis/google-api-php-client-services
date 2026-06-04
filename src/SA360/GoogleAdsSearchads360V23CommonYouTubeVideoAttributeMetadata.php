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

class GoogleAdsSearchads360V23CommonYouTubeVideoAttributeMetadata extends \Google\Collection
{
  protected $collection_key = 'videoProperties';
  /**
   * The total number of comments.
   *
   * @var string
   */
  public $commentsCount;
  /**
   * The total number of likes.
   *
   * @var string
   */
  public $likesCount;
  /**
   * The date that the video was created. Formatted as "yyyy-mm-dd".
   *
   * @var string
   */
  public $publishDate;
  /**
   * The URL of the video thumbnail, prefixed by "https://img.youtube.com/".
   *
   * @var string
   */
  public $thumbnailUrl;
  /**
   * The properties of this video (such as shorts, live stream).
   *
   * @var string[]
   */
  public $videoProperties;
  /**
   * The URL of the video, prefixed by "https://www.youtube.com/".
   *
   * @var string
   */
  public $videoUrl;
  /**
   * The total number of views.
   *
   * @var string
   */
  public $viewsCount;

  /**
   * The total number of comments.
   *
   * @param string $commentsCount
   */
  public function setCommentsCount($commentsCount)
  {
    $this->commentsCount = $commentsCount;
  }
  /**
   * @return string
   */
  public function getCommentsCount()
  {
    return $this->commentsCount;
  }
  /**
   * The total number of likes.
   *
   * @param string $likesCount
   */
  public function setLikesCount($likesCount)
  {
    $this->likesCount = $likesCount;
  }
  /**
   * @return string
   */
  public function getLikesCount()
  {
    return $this->likesCount;
  }
  /**
   * The date that the video was created. Formatted as "yyyy-mm-dd".
   *
   * @param string $publishDate
   */
  public function setPublishDate($publishDate)
  {
    $this->publishDate = $publishDate;
  }
  /**
   * @return string
   */
  public function getPublishDate()
  {
    return $this->publishDate;
  }
  /**
   * The URL of the video thumbnail, prefixed by "https://img.youtube.com/".
   *
   * @param string $thumbnailUrl
   */
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /**
   * @return string
   */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
  }
  /**
   * The properties of this video (such as shorts, live stream).
   *
   * @param string[] $videoProperties
   */
  public function setVideoProperties($videoProperties)
  {
    $this->videoProperties = $videoProperties;
  }
  /**
   * @return string[]
   */
  public function getVideoProperties()
  {
    return $this->videoProperties;
  }
  /**
   * The URL of the video, prefixed by "https://www.youtube.com/".
   *
   * @param string $videoUrl
   */
  public function setVideoUrl($videoUrl)
  {
    $this->videoUrl = $videoUrl;
  }
  /**
   * @return string
   */
  public function getVideoUrl()
  {
    return $this->videoUrl;
  }
  /**
   * The total number of views.
   *
   * @param string $viewsCount
   */
  public function setViewsCount($viewsCount)
  {
    $this->viewsCount = $viewsCount;
  }
  /**
   * @return string
   */
  public function getViewsCount()
  {
    return $this->viewsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonYouTubeVideoAttributeMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonYouTubeVideoAttributeMetadata');
