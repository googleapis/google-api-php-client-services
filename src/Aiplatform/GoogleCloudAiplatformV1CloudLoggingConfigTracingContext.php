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

class GoogleCloudAiplatformV1CloudLoggingConfigTracingContext extends \Google\Model
{
  /**
   * Optional. Unique identifier for a conversation (session thread), used to
   * store and correlate messages within a conversation. The value corresponds
   * to the `gen_ai.conversation.id` field in the the OpenTelemetry GenAI
   * attributes.
   *
   * @var string
   */
  public $conversationId;
  /**
   * Optional. ID of the Cloud Trace span associated with the current operation
   * in which the log is being written. e.g., `7a2190356c3fc94b`. If a span is
   * being evaluated, this field should be populated.
   *
   * @var string
   */
  public $spanId;
  /**
   * Optional. Trace ID being written to Cloud Trace in association with this
   * log entry. e.g., `12345`, the numeric ID from the resource name. If a trace
   * or span is being evaluated, this field should be populated.
   *
   * @var string
   */
  public $traceId;

  /**
   * Optional. Unique identifier for a conversation (session thread), used to
   * store and correlate messages within a conversation. The value corresponds
   * to the `gen_ai.conversation.id` field in the the OpenTelemetry GenAI
   * attributes.
   *
   * @param string $conversationId
   */
  public function setConversationId($conversationId)
  {
    $this->conversationId = $conversationId;
  }
  /**
   * @return string
   */
  public function getConversationId()
  {
    return $this->conversationId;
  }
  /**
   * Optional. ID of the Cloud Trace span associated with the current operation
   * in which the log is being written. e.g., `7a2190356c3fc94b`. If a span is
   * being evaluated, this field should be populated.
   *
   * @param string $spanId
   */
  public function setSpanId($spanId)
  {
    $this->spanId = $spanId;
  }
  /**
   * @return string
   */
  public function getSpanId()
  {
    return $this->spanId;
  }
  /**
   * Optional. Trace ID being written to Cloud Trace in association with this
   * log entry. e.g., `12345`, the numeric ID from the resource name. If a trace
   * or span is being evaluated, this field should be populated.
   *
   * @param string $traceId
   */
  public function setTraceId($traceId)
  {
    $this->traceId = $traceId;
  }
  /**
   * @return string
   */
  public function getTraceId()
  {
    return $this->traceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1CloudLoggingConfigTracingContext::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1CloudLoggingConfigTracingContext');
