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

class AudioTrackSnippet extends \Google\Model
{
  public const STATUS_audioTrackStatusUnspecified = 'audioTrackStatusUnspecified';
  public const STATUS_processing = 'processing';
  public const STATUS_succeeded = 'succeeded';
  public const STATUS_failed = 'failed';
  public const STATUS_rejected = 'rejected';
  /**
   * The content type of the audio (e.g., "dubbed", "descriptive").
   *
   * @var string
   */
  public $contentType;
  /**
   * If the status is "FAILED", this provides a reason for the failure.
   *
   * @var string
   */
  public $failureReason;
  /**
   * The BCP-47 language code of this AudioTrack.
   *
   * @var string
   */
  public $language;
  /**
   * The current status of this AudioTrack.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. Timestamp of the last update.
   *
   * @var string
   */
  public $updateTime;
  /**
   * The external YouTube video ID this AudioTrack belongs to.
   *
   * @var string
   */
  public $videoId;

  /**
   * The content type of the audio (e.g., "dubbed", "descriptive").
   *
   * @param string $contentType
   */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  /**
   * @return string
   */
  public function getContentType()
  {
    return $this->contentType;
  }
  /**
   * If the status is "FAILED", this provides a reason for the failure.
   *
   * @param string $failureReason
   */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /**
   * @return string
   */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /**
   * The BCP-47 language code of this AudioTrack.
   *
   * @param string $language
   */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /**
   * @return string
   */
  public function getLanguage()
  {
    return $this->language;
  }
  /**
   * The current status of this AudioTrack.
   *
   * Accepted values: audioTrackStatusUnspecified, processing, succeeded,
   * failed, rejected
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. Timestamp of the last update.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * The external YouTube video ID this AudioTrack belongs to.
   *
   * @param string $videoId
   */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /**
   * @return string
   */
  public function getVideoId()
  {
    return $this->videoId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudioTrackSnippet::class, 'Google_Service_YouTube_AudioTrackSnippet');
