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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonFrequencyCapEntry extends \Google\Model
{
  /**
   * Maximum number of events allowed during the time range by this cap.
   *
   * @var int
   */
  public $cap;
  protected $keyType = GoogleAdsSearchads360V23CommonFrequencyCapKey::class;
  protected $keyDataType = '';

  /**
   * Maximum number of events allowed during the time range by this cap.
   *
   * @param int $cap
   */
  public function setCap($cap)
  {
    $this->cap = $cap;
  }
  /**
   * @return int
   */
  public function getCap()
  {
    return $this->cap;
  }
  /**
   * The key of a particular frequency cap. There can be no more than one
   * frequency cap with the same key.
   *
   * @param GoogleAdsSearchads360V23CommonFrequencyCapKey $key
   */
  public function setKey(GoogleAdsSearchads360V23CommonFrequencyCapKey $key)
  {
    $this->key = $key;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonFrequencyCapKey
   */
  public function getKey()
  {
    return $this->key;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonFrequencyCapEntry::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonFrequencyCapEntry');
