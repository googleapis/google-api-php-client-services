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

namespace Google\Service\AndroidPublisher;

class RenewalDeclinedContext extends \Google\Model
{
  /**
   * Required. The ID of the pending or failed order causing the state.
   *
   * @var string
   */
  public $pendingOrderId;

  /**
   * Required. The ID of the pending or failed order causing the state.
   *
   * @param string $pendingOrderId
   */
  public function setPendingOrderId($pendingOrderId)
  {
    $this->pendingOrderId = $pendingOrderId;
  }
  /**
   * @return string
   */
  public function getPendingOrderId()
  {
    return $this->pendingOrderId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RenewalDeclinedContext::class, 'Google_Service_AndroidPublisher_RenewalDeclinedContext');
