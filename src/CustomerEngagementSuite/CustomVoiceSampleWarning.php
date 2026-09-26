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

class CustomVoiceSampleWarning extends \Google\Model
{
  /**
   * Unspecified warning type.
   */
  public const TYPE_WARNING_TYPE_UNSPECIFIED = 'WARNING_TYPE_UNSPECIFIED';
  /**
   * The audio level of the voice sample is too low (e.g. low RMS amplitude).
   */
  public const TYPE_LOW_AUDIO_LEVEL = 'LOW_AUDIO_LEVEL';
  /**
   * Output only. A human-readable description of the warning.
   *
   * @var string
   */
  public $message;
  /**
   * Output only. The type of the warning.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. A human-readable description of the warning.
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * Output only. The type of the warning.
   *
   * Accepted values: WARNING_TYPE_UNSPECIFIED, LOW_AUDIO_LEVEL
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
class_alias(CustomVoiceSampleWarning::class, 'Google_Service_CustomerEngagementSuite_CustomVoiceSampleWarning');
