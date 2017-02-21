<?php
/*
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

class Google_Service_Ghire_SearchInfo extends Google_Collection
{
  protected $collection_key = 'tierTwoMatchCode';
  public $isReferral;
  public $kind;
  public $tierOneMatchCode;
  public $tierTwoMatchCode;

  public function setIsReferral($isReferral)
  {
    $this->isReferral = $isReferral;
  }
  public function getIsReferral()
  {
    return $this->isReferral;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTierOneMatchCode($tierOneMatchCode)
  {
    $this->tierOneMatchCode = $tierOneMatchCode;
  }
  public function getTierOneMatchCode()
  {
    return $this->tierOneMatchCode;
  }
  public function setTierTwoMatchCode($tierTwoMatchCode)
  {
    $this->tierTwoMatchCode = $tierTwoMatchCode;
  }
  public function getTierTwoMatchCode()
  {
    return $this->tierTwoMatchCode;
  }
}
