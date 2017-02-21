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

class Google_Service_Ghire_DateRange extends Google_Model
{
  public $fromDateMs;
  public $kind;
  public $toDateMs;

  public function setFromDateMs($fromDateMs)
  {
    $this->fromDateMs = $fromDateMs;
  }
  public function getFromDateMs()
  {
    return $this->fromDateMs;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setToDateMs($toDateMs)
  {
    $this->toDateMs = $toDateMs;
  }
  public function getToDateMs()
  {
    return $this->toDateMs;
  }
}
