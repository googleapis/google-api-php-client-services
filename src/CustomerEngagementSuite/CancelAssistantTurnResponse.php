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

namespace Google\Service\CustomerEngagementSuite;

class CancelAssistantTurnResponse extends \Google\Model
{
  /**
   * Whether an in-flight turn was found and asked to stop (directly on this
   * task, or through an epoch preemption for a turn hosted elsewhere).
   *
   * @var bool
   */
  public $cancelled;

  /**
   * Whether an in-flight turn was found and asked to stop (directly on this
   * task, or through an epoch preemption for a turn hosted elsewhere).
   *
   * @param bool $cancelled
   */
  public function setCancelled($cancelled)
  {
    $this->cancelled = $cancelled;
  }
  /**
   * @return bool
   */
  public function getCancelled()
  {
    return $this->cancelled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CancelAssistantTurnResponse::class, 'Google_Service_CustomerEngagementSuite_CancelAssistantTurnResponse');
