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

class Ack extends \Google\Collection
{
  protected $collection_key = 'key';
  /**
   * By default, an attempt to ack a message that does not exist will fail with
   * a `NOT_FOUND` error. With `ignore_not_found` set to true, the ack will
   * succeed even if the message does not exist. This is useful for
   * unconditionally acking a message, even if it is missing or has already been
   * acked.
   *
   * @var bool
   */
  public $ignoreNotFound;
  /**
   * Required. The primary key of the message to be acked.
   *
   * @var array[]
   */
  public $key;
  /**
   * Required. The queue where the message to be acked is stored.
   *
   * @var string
   */
  public $queue;

  /**
   * By default, an attempt to ack a message that does not exist will fail with
   * a `NOT_FOUND` error. With `ignore_not_found` set to true, the ack will
   * succeed even if the message does not exist. This is useful for
   * unconditionally acking a message, even if it is missing or has already been
   * acked.
   *
   * @param bool $ignoreNotFound
   */
  public function setIgnoreNotFound($ignoreNotFound)
  {
    $this->ignoreNotFound = $ignoreNotFound;
  }
  /**
   * @return bool
   */
  public function getIgnoreNotFound()
  {
    return $this->ignoreNotFound;
  }
  /**
   * Required. The primary key of the message to be acked.
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
   * Required. The queue where the message to be acked is stored.
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
class_alias(Ack::class, 'Google_Service_Spanner_Ack');
