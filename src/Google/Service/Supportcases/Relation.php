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

class Google_Service_Supportcases_Relation extends Google_Model
{
  public $borgAlertId;
  public $buganizerId;
  public $caseId;
  public $legalId;
  public $orderId;
  public $pcrId;
  public $state;
  public $type;

  public function setBorgAlertId($borgAlertId)
  {
    $this->borgAlertId = $borgAlertId;
  }
  public function getBorgAlertId()
  {
    return $this->borgAlertId;
  }
  public function setBuganizerId($buganizerId)
  {
    $this->buganizerId = $buganizerId;
  }
  public function getBuganizerId()
  {
    return $this->buganizerId;
  }
  public function setCaseId($caseId)
  {
    $this->caseId = $caseId;
  }
  public function getCaseId()
  {
    return $this->caseId;
  }
  public function setLegalId($legalId)
  {
    $this->legalId = $legalId;
  }
  public function getLegalId()
  {
    return $this->legalId;
  }
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  public function getOrderId()
  {
    return $this->orderId;
  }
  public function setPcrId($pcrId)
  {
    $this->pcrId = $pcrId;
  }
  public function getPcrId()
  {
    return $this->pcrId;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
