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

namespace Google\Service\Meet;

class SmartNote extends \Google\Model
{
  /**
   * Default, never used.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * An active smart notes session has started.
   */
  public const STATE_STARTED = 'STARTED';
  /**
   * This smart notes session has ended, but the smart notes file hasn't been
   * generated yet.
   */
  public const STATE_ENDED = 'ENDED';
  /**
   * Smart notes file is generated and ready to download.
   */
  public const STATE_FILE_GENERATED = 'FILE_GENERATED';
  protected $docsDestinationType = DocsDestination::class;
  protected $docsDestinationDataType = '';
  /**
   * Output only. Timestamp when the smart notes stopped.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. Identifier. Resource name of the smart notes. Format:
   * `conferenceRecords/{conference_record}/smartNotes/{smart_note}`, where
   * `{smart_note}` is a 1:1 mapping to each unique smart notes session of the
   * conference.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Timestamp when the smart notes started.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. Current state.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The Google Doc destination where the smart notes are saved.
   *
   * @param DocsDestination $docsDestination
   */
  public function setDocsDestination(DocsDestination $docsDestination)
  {
    $this->docsDestination = $docsDestination;
  }
  /**
   * @return DocsDestination
   */
  public function getDocsDestination()
  {
    return $this->docsDestination;
  }
  /**
   * Output only. Timestamp when the smart notes stopped.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Output only. Identifier. Resource name of the smart notes. Format:
   * `conferenceRecords/{conference_record}/smartNotes/{smart_note}`, where
   * `{smart_note}` is a 1:1 mapping to each unique smart notes session of the
   * conference.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. Timestamp when the smart notes started.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * Output only. Current state.
   *
   * Accepted values: STATE_UNSPECIFIED, STARTED, ENDED, FILE_GENERATED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SmartNote::class, 'Google_Service_Meet_SmartNote');
