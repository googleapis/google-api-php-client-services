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

class DeveloperTargetedOffer extends \Google\Model
{
  /**
   * Optional. Time at which the offer targeting was activated.
   *
   * @var string
   */
  public $activateTime;
  /**
   * Optional. The developer-created offer ID targeted for the subscription.
   *
   * @var string
   */
  public $offerId;

  /**
   * Optional. Time at which the offer targeting was activated.
   *
   * @param string $activateTime
   */
  public function setActivateTime($activateTime)
  {
    $this->activateTime = $activateTime;
  }
  /**
   * @return string
   */
  public function getActivateTime()
  {
    return $this->activateTime;
  }
  /**
   * Optional. The developer-created offer ID targeted for the subscription.
   *
   * @param string $offerId
   */
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /**
   * @return string
   */
  public function getOfferId()
  {
    return $this->offerId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeveloperTargetedOffer::class, 'Google_Service_AndroidPublisher_DeveloperTargetedOffer');
