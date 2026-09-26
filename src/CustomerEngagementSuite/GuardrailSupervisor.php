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

namespace Google\Service\CustomerEngagementSuite;

class GuardrailSupervisor extends \Google\Model
{
  /**
   * Detection mode is unspecified. Default to NON_BLOCKING.
   */
  public const DETECTION_MODE_DETECTION_MODE_UNSPECIFIED = 'DETECTION_MODE_UNSPECIFIED';
  /**
   * Non blocking detection mode. Response is not blocked when the supervisor
   * detection is ongoing.
   */
  public const DETECTION_MODE_NON_BLOCKING = 'NON_BLOCKING';
  /**
   * Blocking detection mode. Response is blocked when the supervisor detection
   * is ongoing.
   */
  public const DETECTION_MODE_BLOCKING = 'BLOCKING';
  /**
   * Type is unspecified.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Invalid text issue type.
   */
  public const TYPE_INVALID_TEXT = 'INVALID_TEXT';
  /**
   * Language shift issue type.
   */
  public const TYPE_LANGUAGE_SHIFT = 'LANGUAGE_SHIFT';
  /**
   * Speaker shift issue type.
   */
  public const TYPE_SPEAKER_SHIFT = 'SPEAKER_SHIFT';
  /**
   * Audio mismatch issue type.
   */
  public const TYPE_AUDIO_MISMATCH = 'AUDIO_MISMATCH';
  /**
   * Missing tool call issue type.
   */
  public const TYPE_MISSING_TOOL_CALL = 'MISSING_TOOL_CALL';
  /**
   * Custom issue type.
   */
  public const TYPE_CUSTOM = 'CUSTOM';
  /**
   * Choppy audio issue type.
   */
  public const TYPE_CHOPPY_AUDIO = 'CHOPPY_AUDIO';
  /**
   * Agent profanity issue type.
   */
  public const TYPE_PROFANITY = 'PROFANITY';
  /**
   * Optional. The detection mode of the supervisor.
   *
   * @var string
   */
  public $detectionMode;
  /**
   * Optional. The type of the supervisor.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. The detection mode of the supervisor.
   *
   * Accepted values: DETECTION_MODE_UNSPECIFIED, NON_BLOCKING, BLOCKING
   *
   * @param self::DETECTION_MODE_* $detectionMode
   */
  public function setDetectionMode($detectionMode)
  {
    $this->detectionMode = $detectionMode;
  }
  /**
   * @return self::DETECTION_MODE_*
   */
  public function getDetectionMode()
  {
    return $this->detectionMode;
  }
  /**
   * Optional. The type of the supervisor.
   *
   * Accepted values: TYPE_UNSPECIFIED, INVALID_TEXT, LANGUAGE_SHIFT,
   * SPEAKER_SHIFT, AUDIO_MISMATCH, MISSING_TOOL_CALL, CUSTOM, CHOPPY_AUDIO,
   * PROFANITY
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GuardrailSupervisor::class, 'Google_Service_CustomerEngagementSuite_GuardrailSupervisor');
