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

namespace Google\Service\Pubsub;

class PublishOperation extends \Google\Model
{
  /**
   * Optional. If the publisher client is using publish hedging, provides the
   * attempt count for the hedge (starting at 1). A value of 0 indicates that
   * the request was not hedged.
   *
   * @var int
   */
  public $hedgedAttemptCount;
  /**
   * Optional. Time at which the `publish()` call was initiated in the client
   * library, meaning across all RPC retry attempts, see [grpc
   * retries](https://grpc.io/docs/guides/retry/). Provides a sense of the end-
   * to-end publish duration from the client perspective, across retries.
   *
   * @var string
   */
  public $publishStartTime;

  /**
   * Optional. If the publisher client is using publish hedging, provides the
   * attempt count for the hedge (starting at 1). A value of 0 indicates that
   * the request was not hedged.
   *
   * @param int $hedgedAttemptCount
   */
  public function setHedgedAttemptCount($hedgedAttemptCount)
  {
    $this->hedgedAttemptCount = $hedgedAttemptCount;
  }
  /**
   * @return int
   */
  public function getHedgedAttemptCount()
  {
    return $this->hedgedAttemptCount;
  }
  /**
   * Optional. Time at which the `publish()` call was initiated in the client
   * library, meaning across all RPC retry attempts, see [grpc
   * retries](https://grpc.io/docs/guides/retry/). Provides a sense of the end-
   * to-end publish duration from the client perspective, across retries.
   *
   * @param string $publishStartTime
   */
  public function setPublishStartTime($publishStartTime)
  {
    $this->publishStartTime = $publishStartTime;
  }
  /**
   * @return string
   */
  public function getPublishStartTime()
  {
    return $this->publishStartTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PublishOperation::class, 'Google_Service_Pubsub_PublishOperation');
