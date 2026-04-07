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

namespace Google\Service\GoogleHealthAPI;

class HydrationLog extends \Google\Model
{
  protected $amountConsumedType = VolumeQuantity::class;
  protected $amountConsumedDataType = '';
  protected $intervalType = SessionTimeInterval::class;
  protected $intervalDataType = '';

  /**
   * Required. Amount of liquid (ex. water) consumed.
   *
   * @param VolumeQuantity $amountConsumed
   */
  public function setAmountConsumed(VolumeQuantity $amountConsumed)
  {
    $this->amountConsumed = $amountConsumed;
  }
  /**
   * @return VolumeQuantity
   */
  public function getAmountConsumed()
  {
    return $this->amountConsumed;
  }
  /**
   * Required. Observed interval.
   *
   * @param SessionTimeInterval $interval
   */
  public function setInterval(SessionTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return SessionTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HydrationLog::class, 'Google_Service_GoogleHealthAPI_HydrationLog');
