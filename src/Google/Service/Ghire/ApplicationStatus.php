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

class Google_Service_Ghire_ApplicationStatus extends Google_Model
{
  public $kind;
  public $legacyAtsReasonCode;
  public $legacyAtsReasonId;
  public $legacyAtsStatusValue;
  public $outcome;
  public $reason;
  protected $statusType = 'Google_Service_Ghire_Tag';
  protected $statusDataType = '';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLegacyAtsReasonCode($legacyAtsReasonCode)
  {
    $this->legacyAtsReasonCode = $legacyAtsReasonCode;
  }
  public function getLegacyAtsReasonCode()
  {
    return $this->legacyAtsReasonCode;
  }
  public function setLegacyAtsReasonId($legacyAtsReasonId)
  {
    $this->legacyAtsReasonId = $legacyAtsReasonId;
  }
  public function getLegacyAtsReasonId()
  {
    return $this->legacyAtsReasonId;
  }
  public function setLegacyAtsStatusValue($legacyAtsStatusValue)
  {
    $this->legacyAtsStatusValue = $legacyAtsStatusValue;
  }
  public function getLegacyAtsStatusValue()
  {
    return $this->legacyAtsStatusValue;
  }
  public function setOutcome($outcome)
  {
    $this->outcome = $outcome;
  }
  public function getOutcome()
  {
    return $this->outcome;
  }
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  public function getReason()
  {
    return $this->reason;
  }
  public function setStatus(Google_Service_Ghire_Tag $status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}
