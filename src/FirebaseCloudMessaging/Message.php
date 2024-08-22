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

class Message extends Model
{

  protected string $condition;
  /** @var string[] */
  protected array $data;
  protected string $name;
  protected string $token;
  protected string $topic;
  protected AndroidConfig $android;
  protected ApnsConfig $apns;
  protected FcmOptions $fcmOptions;
  protected Notification $notification;
  protected WebpushConfig $webpush;


    /**
   * @param AndroidConfig $android
   */
  public function setAndroid(AndroidConfig $android): void
  {
    $this->android = $android;
  }

  /**
   * @return AndroidConfig
   */
  public function getAndroid(): AndroidConfig
  {
    return $this->android;
  }

  /**
   * @param ApnsConfig $apns
   */
  public function setApns(ApnsConfig $apns): void
  {
    $this->apns = $apns;
  }

  /**
   * @return ApnsConfig
   */
  public function getApns(): ApnsConfig
  {
    return $this->apns;
  }

  /**
   * @param string $condition
   */
  public function setCondition(string $condition): void
  {
    $this->condition = $condition;
  }

  /**
   * @return string
   */
  public function getCondition(): string
  {
    return $this->condition;
  }

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
   * @param FcmOptions $fcmOptions
   */
  public function setFcmOptions(FcmOptions $fcmOptions): void
  {
    $this->fcmOptions = $fcmOptions;
  }

  /**
   * @return FcmOptions
   */
  public function getFcmOptions(): FcmOptions
  {
    return $this->fcmOptions;
  }

  /**
   * @param string $name
   */
  public function setName(string $name): void
  {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param Notification $notification
   */
  public function setNotification(Notification $notification): void
  {
    $this->notification = $notification;
  }

  /**
   * @return Notification
   */
  public function getNotification(): Notification
  {
    return $this->notification;
  }

  /**
   * @param string $token
   */
  public function setToken(string $token): void
  {
    $this->token = $token;
  }

  /**
   * @return string
   */
  public function getToken(): string
  {
    return $this->token;
  }

  /**
   * @param string $topic
   */
  public function setTopic(string $topic): void
  {
    $this->topic = $topic;
  }

  /**
   * @return string
   */
  public function getTopic(): string
  {
    return $this->topic;
  }

  /**
   * @param WebpushConfig $webpush
   */
  public function setWebpush(WebpushConfig $webpush): void
  {
    $this->webpush = $webpush;
  }

  /**
   * @return WebpushConfig
   */
  public function getWebpush(): WebpushConfig
  {
    return $this->webpush;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Message::class, 'Google_Service_FirebaseCloudMessaging_Message');
