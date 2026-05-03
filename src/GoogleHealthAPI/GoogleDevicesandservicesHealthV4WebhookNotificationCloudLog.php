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

namespace Google\Service\GoogleHealthAPI;

class GoogleDevicesandservicesHealthV4WebhookNotificationCloudLog extends \Google\Model
{
  protected $httpResponseType = HttpResponse::class;
  protected $httpResponseDataType = '';

  /**
   * Required. Represents the HTTP response. This message includes the status
   * code, reason phrase, headers, and body.
   *
   * @param HttpResponse $httpResponse
   */
  public function setHttpResponse(HttpResponse $httpResponse)
  {
    $this->httpResponse = $httpResponse;
  }
  /**
   * @return HttpResponse
   */
  public function getHttpResponse()
  {
    return $this->httpResponse;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleDevicesandservicesHealthV4WebhookNotificationCloudLog::class, 'Google_Service_GoogleHealthAPI_GoogleDevicesandservicesHealthV4WebhookNotificationCloudLog');
