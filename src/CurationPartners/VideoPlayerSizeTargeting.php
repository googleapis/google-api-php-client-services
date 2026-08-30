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

namespace Google\Service\CurationPartners;

class VideoPlayerSizeTargeting extends \Google\Model
{
  /**
   * Required. The minimum height of the video player in pixels.
   *
   * @var string
   */
  public $minimumHeight;
  /**
   * Required. The minimum width of the video player in pixels.
   *
   * @var string
   */
  public $minimumWidth;

  /**
   * Required. The minimum height of the video player in pixels.
   *
   * @param string $minimumHeight
   */
  public function setMinimumHeight($minimumHeight)
  {
    $this->minimumHeight = $minimumHeight;
  }
  /**
   * @return string
   */
  public function getMinimumHeight()
  {
    return $this->minimumHeight;
  }
  /**
   * Required. The minimum width of the video player in pixels.
   *
   * @param string $minimumWidth
   */
  public function setMinimumWidth($minimumWidth)
  {
    $this->minimumWidth = $minimumWidth;
  }
  /**
   * @return string
   */
  public function getMinimumWidth()
  {
    return $this->minimumWidth;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VideoPlayerSizeTargeting::class, 'Google_Service_CurationPartners_VideoPlayerSizeTargeting');
