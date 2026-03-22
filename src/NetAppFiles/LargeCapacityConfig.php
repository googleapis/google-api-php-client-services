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

namespace Google\Service\NetAppFiles;

class LargeCapacityConfig extends \Google\Model
{
  /**
   * Optional. The number of internal constituents (e.g., FlexVols) for this
   * large volume. The minimum number of constituents is 2.
   *
   * @var int
   */
  public $constituentCount;

  /**
   * Optional. The number of internal constituents (e.g., FlexVols) for this
   * large volume. The minimum number of constituents is 2.
   *
   * @param int $constituentCount
   */
  public function setConstituentCount($constituentCount)
  {
    $this->constituentCount = $constituentCount;
  }
  /**
   * @return int
   */
  public function getConstituentCount()
  {
    return $this->constituentCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LargeCapacityConfig::class, 'Google_Service_NetAppFiles_LargeCapacityConfig');
