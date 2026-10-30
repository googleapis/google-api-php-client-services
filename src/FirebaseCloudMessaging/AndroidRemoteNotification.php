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

class AndroidRemoteNotification extends \Google\Model
{
  /**
   * Optional. If set to true, the notification content can be updated by the
   * app after the notification is received on the device.
   *
   * @var bool
   */
  public $mutableContent;
  protected $notificationType = AndroidNotificationV2::class;
  protected $notificationDataType = '';
  /**
   * Optional. If set to `true`, this RemoteNotification message will be
   * delivered to legacy V1 clients as a data message by omitting the
   * google.firebase.fcm.v1.AndroidRemoteNotification.notification. This should
   * only be enabled when migrating from legacy V1 data messages. Note that by
   * default (when set to false), RemoteNotification messages are automatically
   * translated to V1 notification messages for legacy clients.
   *
   * @var bool
   */
  public $useAsV1DataMessage;

  /**
   * Optional. If set to true, the notification content can be updated by the
   * app after the notification is received on the device.
   *
   * @param bool $mutableContent
   */
  public function setMutableContent($mutableContent)
  {
    $this->mutableContent = $mutableContent;
  }
  /**
   * @return bool
   */
  public function getMutableContent()
  {
    return $this->mutableContent;
  }
  /**
   * Optional. Notification to send to Android devices.
   *
   * @param AndroidNotificationV2 $notification
   */
  public function setNotification(AndroidNotificationV2 $notification)
  {
    $this->notification = $notification;
  }
  /**
   * @return AndroidNotificationV2
   */
  public function getNotification()
  {
    return $this->notification;
  }
  /**
   * Optional. If set to `true`, this RemoteNotification message will be
   * delivered to legacy V1 clients as a data message by omitting the
   * google.firebase.fcm.v1.AndroidRemoteNotification.notification. This should
   * only be enabled when migrating from legacy V1 data messages. Note that by
   * default (when set to false), RemoteNotification messages are automatically
   * translated to V1 notification messages for legacy clients.
   *
   * @param bool $useAsV1DataMessage
   */
  public function setUseAsV1DataMessage($useAsV1DataMessage)
  {
    $this->useAsV1DataMessage = $useAsV1DataMessage;
  }
  /**
   * @return bool
   */
  public function getUseAsV1DataMessage()
  {
    return $this->useAsV1DataMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidRemoteNotification::class, 'Google_Service_FirebaseCloudMessaging_AndroidRemoteNotification');
