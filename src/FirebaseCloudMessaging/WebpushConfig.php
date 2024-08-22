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

namespace Google\Service\FirebaseCloudMessaging;

use Google\Model;

class WebpushConfig extends Model
{
  /**
   * @var string[]
   */
  public array $data;
  /**
   * @var string[]
   */
  public array $headers;
  /**
   * @var array[]
   */
  public array $notification;
  protected WebpushFcmOptions $fcmOptions;

    /**
   * @param string[] $data
   */
  public function setData(array $data): void
  {
    $this->data = $data;
  }

  /**
   * @return string[]
   */
  public function getData(): array
  {
    return $this->data;
  }

  /**
   * @param WebpushFcmOptions $fcmOptions
   */
  public function setFcmOptions(WebpushFcmOptions $fcmOptions): void
  {
    $this->fcmOptions = $fcmOptions;
  }

  /**
   * @return WebpushFcmOptions
   */
  public function getFcmOptions(): WebpushFcmOptions
  {
    return $this->fcmOptions;
  }

  /**
   * @param string[] $headers
   */
  public function setHeaders(array $headers): void
  {
    $this->headers = $headers;
  }

  /**
   * @return string[]
   */
  public function getHeaders(): array
  {
    return $this->headers;
  }

  /**
   * @param array[] $notification
   */
  public function setNotification(array $notification): void
  {
    $this->notification = $notification;
  }

  /**
   * @return array[]
   */
  public function getNotification(): array
  {
    return $this->notification;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WebpushConfig::class, 'Google_Service_FirebaseCloudMessaging_WebpushConfig');
