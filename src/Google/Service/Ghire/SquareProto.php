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

class Google_Service_Ghire_SquareProto extends Google_Model
{
  public $kind;
  public $memberType;
  public $squareId;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMemberType($memberType)
  {
    $this->memberType = $memberType;
  }
  public function getMemberType()
  {
    return $this->memberType;
  }
  public function setSquareId($squareId)
  {
    $this->squareId = $squareId;
  }
  public function getSquareId()
  {
    return $this->squareId;
  }
}
