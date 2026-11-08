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

class GenaiVertexV1VideoConfig extends \Google\Model
{
  /**
   * Unspecified task. The task is inferred from the input prompt and media.
   */
  public const TASK_TASK_UNSPECIFIED = 'TASK_UNSPECIFIED';
  /**
   * Generates video solely from a text prompt.
   */
  public const TASK_TEXT_TO_VIDEO = 'TEXT_TO_VIDEO';
  /**
   * Generates video from one or two source images. The first image defines the
   * starting frame, and the optional second image defines the ending frame.
   */
  public const TASK_IMAGE_TO_VIDEO = 'IMAGE_TO_VIDEO';
  /**
   * Generates video using reference media (such as images, audio, or video).
   */
  public const TASK_REFERENCE_TO_VIDEO = 'REFERENCE_TO_VIDEO';
  /**
   * Modifies an existing input video.
   */
  public const TASK_EDIT = 'EDIT';
  /**
   * Extends an existing input video.
   */
  public const TASK_EXTEND = 'EXTEND';
  /**
   * Increases the resolution of an existing input video.
   */
  public const TASK_UPSCALE = 'UPSCALE';
  /**
   * Optional task mode for video generation. If not specified, the model
   * automatically determines the appropriate mode based on the provided text
   * prompt and input media.
   *
   * @var string
   */
  public $task;

  /**
   * Optional task mode for video generation. If not specified, the model
   * automatically determines the appropriate mode based on the provided text
   * prompt and input media.
   *
   * Accepted values: TASK_UNSPECIFIED, TEXT_TO_VIDEO, IMAGE_TO_VIDEO,
   * REFERENCE_TO_VIDEO, EDIT, EXTEND, UPSCALE
   *
   * @param self::TASK_* $task
   */
  public function setTask($task)
  {
    $this->task = $task;
  }
  /**
   * @return self::TASK_*
   */
  public function getTask()
  {
    return $this->task;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1VideoConfig::class, 'Google_Service_Aiplatform_GenaiVertexV1VideoConfig');
