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

namespace Google\Service\DeviceRun;

class SessionConfigSessionNotificationConfig extends \Google\Collection
{
  protected $collection_key = 'pubsubTopic';
  /**
   * Optional. The Pub/Sub topics to which session events are published. Format:
   * `projects/{project}/topics/{topic}`. See https://cloud.google.com/pubsub/do
   * cs/admin#topic_and_subscription_name_restrictions
   *
   * @var string[]
   */
  public $pubsubTopic;

  /**
   * Optional. The Pub/Sub topics to which session events are published. Format:
   * `projects/{project}/topics/{topic}`. See https://cloud.google.com/pubsub/do
   * cs/admin#topic_and_subscription_name_restrictions
   *
   * @param string[] $pubsubTopic
   */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /**
   * @return string[]
   */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionConfigSessionNotificationConfig::class, 'Google_Service_DeviceRun_SessionConfigSessionNotificationConfig');
