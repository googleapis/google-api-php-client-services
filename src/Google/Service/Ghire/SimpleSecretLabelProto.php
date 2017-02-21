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

class Google_Service_Ghire_SimpleSecretLabelProto extends Google_Model
{
  public $capabilityId;
  public $genericLabel;
  public $inviteId;
  public $kind;
  public $type;

  public function setCapabilityId($capabilityId)
  {
    $this->capabilityId = $capabilityId;
  }
  public function getCapabilityId()
  {
    return $this->capabilityId;
  }
  public function setGenericLabel($genericLabel)
  {
    $this->genericLabel = $genericLabel;
  }
  public function getGenericLabel()
  {
    return $this->genericLabel;
  }
  public function setInviteId($inviteId)
  {
    $this->inviteId = $inviteId;
  }
  public function getInviteId()
  {
    return $this->inviteId;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
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
