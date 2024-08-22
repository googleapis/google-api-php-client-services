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

class AndroidConfig extends Model
{
  protected string $collapseKey;
  protected array $data;
  protected bool $directBootOk;
  protected AndroidFcmOptions $fcmOptions;
  protected AndroidNotification $notification;
  protected string $priority;
  protected string $restrictedPackageName;
  protected string $ttl;

  /**
   * @param string $collapseKey
   */
  public function setCollapseKey(string $collapseKey)
  {
    $this->collapseKey = $collapseKey;
  }

  /**
   * @return string
   */
  public function getCollapseKey(): string
  {
    return $this->collapseKey;
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
   * @param bool $directBootOk
   */
  public function setDirectBootOk(bool $directBootOk): void
  {
    $this->directBootOk = $directBootOk;
  }

  /**
   * @return bool
   */
  public function getDirectBootOk(): bool
  {
    return $this->directBootOk;
  }

  /**
   * @param AndroidFcmOptions $fcmOptions
   */
  public function setFcmOptions(AndroidFcmOptions $fcmOptions): void
  {
    $this->fcmOptions = $fcmOptions;
  }

  /**
   * @return AndroidFcmOptions
   */
  public function getFcmOptions(): AndroidFcmOptions
  {
    return $this->fcmOptions;
  }

  /**
   * @param AndroidNotification $notification
   */
  public function setNotification(AndroidNotification $notification): void
  {
    $this->notification = $notification;
  }

  /**
   * @return AndroidNotification
   */
  public function getNotification(): AndroidNotification
  {
    return $this->notification;
  }
  /**
   * @param string $priority
   */
  public function setPriority(string $priority): void
  {
    $this->priority = $priority;
  }

  /**
   * @return string
   */
  public function getPriority(): string
  {
    return $this->priority;
  }

  /**
   * @param string $restrictedPackageName
   */
  public function setRestrictedPackageName(string $restrictedPackageName): void
  {
    $this->restrictedPackageName = $restrictedPackageName;
  }

  /**
   * @return string
   */
  public function getRestrictedPackageName(): string
  {
    return $this->restrictedPackageName;
  }

  /**
   * @param string $ttl
   */
  public function setTtl(string $ttl): void
  {
    $this->ttl = $ttl;
  }

  /**
   * @return string
   */
  public function getTtl(): string
  {
    return $this->ttl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidConfig::class, 'Google_Service_FirebaseCloudMessaging_AndroidConfig');
