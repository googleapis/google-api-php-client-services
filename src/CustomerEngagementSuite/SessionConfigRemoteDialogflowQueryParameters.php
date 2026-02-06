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

class SessionConfigRemoteDialogflowQueryParameters extends \Google\Model
{
  /**
   * Optional. The end user metadata to be sent in [QueryParameters](https://clo
   * ud.google.com/dialogflow/cx/docs/reference/rpc/google.cloud.dialogflow.cx.v
   * 3#queryparameters).
   *
   * @var array[]
   */
  public $endUserMetadata;
  /**
   * Optional. The payload to be sent in [QueryParameters](https://cloud.google.
   * com/dialogflow/cx/docs/reference/rpc/google.cloud.dialogflow.cx.v3#querypar
   * ameters).
   *
   * @var array[]
   */
  public $payload;
  /**
   * Optional. The HTTP headers to be sent as webhook_headers in [QueryParameter
   * s](https://cloud.google.com/dialogflow/cx/docs/reference/rpc/google.cloud.d
   * ialogflow.cx.v3#queryparameters).
   *
   * @var string[]
   */
  public $webhookHeaders;

  /**
   * Optional. The end user metadata to be sent in [QueryParameters](https://clo
   * ud.google.com/dialogflow/cx/docs/reference/rpc/google.cloud.dialogflow.cx.v
   * 3#queryparameters).
   *
   * @param array[] $endUserMetadata
   */
  public function setEndUserMetadata($endUserMetadata)
  {
    $this->endUserMetadata = $endUserMetadata;
  }
  /**
   * @return array[]
   */
  public function getEndUserMetadata()
  {
    return $this->endUserMetadata;
  }
  /**
   * Optional. The payload to be sent in [QueryParameters](https://cloud.google.
   * com/dialogflow/cx/docs/reference/rpc/google.cloud.dialogflow.cx.v3#querypar
   * ameters).
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
   * Optional. The HTTP headers to be sent as webhook_headers in [QueryParameter
   * s](https://cloud.google.com/dialogflow/cx/docs/reference/rpc/google.cloud.d
   * ialogflow.cx.v3#queryparameters).
   *
   * @param string[] $webhookHeaders
   */
  public function setWebhookHeaders($webhookHeaders)
  {
    $this->webhookHeaders = $webhookHeaders;
  }
  /**
   * @return string[]
   */
  public function getWebhookHeaders()
  {
    return $this->webhookHeaders;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionConfigRemoteDialogflowQueryParameters::class, 'Google_Service_CustomerEngagementSuite_SessionConfigRemoteDialogflowQueryParameters');
