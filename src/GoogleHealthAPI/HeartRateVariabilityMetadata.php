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

class HeartRateVariabilityMetadata extends \Google\Model
{
  /**
   * Optional. The power in interbeat interval fluctuations within the high
   * frequency band (0.15 Hz - 0.4 Hz).
   *
   * @var 
   */
  public $highFrequencyPower;
  /**
   * Optional. The power in interbeat interval fluctuations within the low
   * frequency band (0.04 Hz - 0.15 Hz).
   *
   * @var 
   */
  public $lowFrequencyPower;

  public function setHighFrequencyPower($highFrequencyPower)
  {
    $this->highFrequencyPower = $highFrequencyPower;
  }
  public function getHighFrequencyPower()
  {
    return $this->highFrequencyPower;
  }
  public function setLowFrequencyPower($lowFrequencyPower)
  {
    $this->lowFrequencyPower = $lowFrequencyPower;
  }
  public function getLowFrequencyPower()
  {
    return $this->lowFrequencyPower;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeartRateVariabilityMetadata::class, 'Google_Service_GoogleHealthAPI_HeartRateVariabilityMetadata');
