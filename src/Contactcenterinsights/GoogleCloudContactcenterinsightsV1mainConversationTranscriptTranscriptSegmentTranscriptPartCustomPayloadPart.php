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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart extends \Google\Model
{
  /**
   * Optional. Arbitrary structured payload.
   *
   * @var array[]
   */
  public $payload;
  /**
   * Optional. Type identifier for the payload.
   *
   * @var string
   */
  public $payloadType;

  /**
   * Optional. Arbitrary structured payload.
   *
   * @param array[] $payload
   */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return array[]
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * Optional. Type identifier for the payload.
   *
   * @param string $payloadType
   */
  public function setPayloadType($payloadType)
  {
    $this->payloadType = $payloadType;
  }
  /**
   * @return string
   */
  public function getPayloadType()
  {
    return $this->payloadType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart');
