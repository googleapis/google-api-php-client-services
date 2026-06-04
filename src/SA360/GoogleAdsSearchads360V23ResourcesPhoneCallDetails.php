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

class GoogleAdsSearchads360V23ResourcesPhoneCallDetails extends \Google\Model
{
  /**
   * Output only. The duration (in milliseconds) of the phone call (end to end).
   *
   * @var string
   */
  public $callDurationMillis;
  /**
   * Output only. URL to the call recording audio file.
   *
   * @var string
   */
  public $callRecordingUrl;

  /**
   * Output only. The duration (in milliseconds) of the phone call (end to end).
   *
   * @param string $callDurationMillis
   */
  public function setCallDurationMillis($callDurationMillis)
  {
    $this->callDurationMillis = $callDurationMillis;
  }
  /**
   * @return string
   */
  public function getCallDurationMillis()
  {
    return $this->callDurationMillis;
  }
  /**
   * Output only. URL to the call recording audio file.
   *
   * @param string $callRecordingUrl
   */
  public function setCallRecordingUrl($callRecordingUrl)
  {
    $this->callRecordingUrl = $callRecordingUrl;
  }
  /**
   * @return string
   */
  public function getCallRecordingUrl()
  {
    return $this->callRecordingUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesPhoneCallDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesPhoneCallDetails');
