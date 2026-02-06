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

class OutputAudioConfig extends \Google\Model
{
  /**
   * Unspecified audio encoding.
   */
  public const AUDIO_ENCODING_AUDIO_ENCODING_UNSPECIFIED = 'AUDIO_ENCODING_UNSPECIFIED';
  /**
   * 16-bit linear PCM audio encoding.
   */
  public const AUDIO_ENCODING_LINEAR16 = 'LINEAR16';
  /**
   * 8-bit samples that compand 14-bit audio samples using G.711 PCMU/mu-law.
   */
  public const AUDIO_ENCODING_MULAW = 'MULAW';
  /**
   * 8-bit samples that compand 14-bit audio samples using G.711 PCMU/A-law.
   */
  public const AUDIO_ENCODING_ALAW = 'ALAW';
  /**
   * Required. The encoding of the output audio data.
   *
   * @var string
   */
  public $audioEncoding;
  /**
   * Required. The sample rate (in Hertz) of the output audio data.
   *
   * @var int
   */
  public $sampleRateHertz;

  /**
   * Required. The encoding of the output audio data.
   *
   * Accepted values: AUDIO_ENCODING_UNSPECIFIED, LINEAR16, MULAW, ALAW
   *
   * @param self::AUDIO_ENCODING_* $audioEncoding
   */
  public function setAudioEncoding($audioEncoding)
  {
    $this->audioEncoding = $audioEncoding;
  }
  /**
   * @return self::AUDIO_ENCODING_*
   */
  public function getAudioEncoding()
  {
    return $this->audioEncoding;
  }
  /**
   * Required. The sample rate (in Hertz) of the output audio data.
   *
   * @param int $sampleRateHertz
   */
  public function setSampleRateHertz($sampleRateHertz)
  {
    $this->sampleRateHertz = $sampleRateHertz;
  }
  /**
   * @return int
   */
  public function getSampleRateHertz()
  {
    return $this->sampleRateHertz;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OutputAudioConfig::class, 'Google_Service_CustomerEngagementSuite_OutputAudioConfig');
