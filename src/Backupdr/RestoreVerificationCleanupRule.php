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

namespace Google\Service\Backupdr;

class RestoreVerificationCleanupRule extends \Google\Model
{
  /**
   * Optional. Duration after restore finishes when cleanup triggers. Delay must
   * be non-negative and at most 30 days (2592000 seconds).
   *
   * @var string
   */
  public $cleanupDelay;
  /**
   * Optional. If set to true, the restored resource will not be cleaned up.
   *
   * @var bool
   */
  public $skipCleanup;

  /**
   * Optional. Duration after restore finishes when cleanup triggers. Delay must
   * be non-negative and at most 30 days (2592000 seconds).
   *
   * @param string $cleanupDelay
   */
  public function setCleanupDelay($cleanupDelay)
  {
    $this->cleanupDelay = $cleanupDelay;
  }
  /**
   * @return string
   */
  public function getCleanupDelay()
  {
    return $this->cleanupDelay;
  }
  /**
   * Optional. If set to true, the restored resource will not be cleaned up.
   *
   * @param bool $skipCleanup
   */
  public function setSkipCleanup($skipCleanup)
  {
    $this->skipCleanup = $skipCleanup;
  }
  /**
   * @return bool
   */
  public function getSkipCleanup()
  {
    return $this->skipCleanup;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestoreVerificationCleanupRule::class, 'Google_Service_Backupdr_RestoreVerificationCleanupRule');
