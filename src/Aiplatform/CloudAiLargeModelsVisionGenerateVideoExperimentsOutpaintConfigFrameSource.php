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

namespace Google\Service\Aiplatform;

class CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfigFrameSource extends \Google\Model
{
  /**
   * @var string
   */
  public $globPattern;
  /**
   * Horizontal offset in pixels of the frame's left edge from the canvas's left
   * edge. Values outside the canvas crop the frame. Optional. Default is 0
   * (frame flush with the canvas's left edge).
   *
   * @var int
   */
  public $horizontalOffset;
  /**
   * Vertical offset in pixels of the frame's top edge from the canvas's top
   * edge. Values outside the canvas crop the frame. Optional. Default is 0
   * (frame flush with the canvas's top edge).
   *
   * @var int
   */
  public $verticalOffset;

  /**
   * @param string $globPattern
   */
  public function setGlobPattern($globPattern)
  {
    $this->globPattern = $globPattern;
  }
  /**
   * @return string
   */
  public function getGlobPattern()
  {
    return $this->globPattern;
  }
  /**
   * Horizontal offset in pixels of the frame's left edge from the canvas's left
   * edge. Values outside the canvas crop the frame. Optional. Default is 0
   * (frame flush with the canvas's left edge).
   *
   * @param int $horizontalOffset
   */
  public function setHorizontalOffset($horizontalOffset)
  {
    $this->horizontalOffset = $horizontalOffset;
  }
  /**
   * @return int
   */
  public function getHorizontalOffset()
  {
    return $this->horizontalOffset;
  }
  /**
   * Vertical offset in pixels of the frame's top edge from the canvas's top
   * edge. Values outside the canvas crop the frame. Optional. Default is 0
   * (frame flush with the canvas's top edge).
   *
   * @param int $verticalOffset
   */
  public function setVerticalOffset($verticalOffset)
  {
    $this->verticalOffset = $verticalOffset;
  }
  /**
   * @return int
   */
  public function getVerticalOffset()
  {
    return $this->verticalOffset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfigFrameSource::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfigFrameSource');
