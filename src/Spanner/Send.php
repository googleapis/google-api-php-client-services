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

namespace Google\Service\Spanner;

class Send extends \Google\Collection
{
  protected $collection_key = 'key';
  /**
   * The time at which Spanner will begin attempting to deliver the message. If
   * `deliver_time` is not set, Spanner will deliver the message immediately. If
   * `deliver_time` is in the past, Spanner will replace it with a value closer
   * to the current time.
   *
   * @var string
   */
  public $deliverTime;
  /**
   * Required. The primary key of the message to be sent.
   *
   * @var array[]
   */
  public $key;
  /**
   * The payload of the message.
   *
   * @var array
   */
  public $payload;
  /**
   * Required. The queue to which the message will be sent.
   *
   * @var string
   */
  public $queue;

  /**
   * The time at which Spanner will begin attempting to deliver the message. If
   * `deliver_time` is not set, Spanner will deliver the message immediately. If
   * `deliver_time` is in the past, Spanner will replace it with a value closer
   * to the current time.
   *
   * @param string $deliverTime
   */
  public function setDeliverTime($deliverTime)
  {
    $this->deliverTime = $deliverTime;
  }
  /**
   * @return string
   */
  public function getDeliverTime()
  {
    return $this->deliverTime;
  }
  /**
   * Required. The primary key of the message to be sent.
   *
   * @param array[] $key
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return array[]
   */
  public function getKey()
  {
    return $this->key;
  }
  /**
   * The payload of the message.
   *
   * @param array $payload
   */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return array
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * Required. The queue to which the message will be sent.
   *
   * @param string $queue
   */
  public function setQueue($queue)
  {
    $this->queue = $queue;
  }
  /**
   * @return string
   */
  public function getQueue()
  {
    return $this->queue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Send::class, 'Google_Service_Spanner_Send');
