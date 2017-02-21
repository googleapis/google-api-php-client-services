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

class Google_Service_Ghire_LegacyRequisition extends Google_Model
{
  public $atsRequisitionId;
  public $kind;
  protected $requisitionType = 'Google_Service_Ghire_Requisition';
  protected $requisitionDataType = '';

  public function setAtsRequisitionId($atsRequisitionId)
  {
    $this->atsRequisitionId = $atsRequisitionId;
  }
  public function getAtsRequisitionId()
  {
    return $this->atsRequisitionId;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRequisition(Google_Service_Ghire_Requisition $requisition)
  {
    $this->requisition = $requisition;
  }
  public function getRequisition()
  {
    return $this->requisition;
  }
}
