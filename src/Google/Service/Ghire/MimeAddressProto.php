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

class Google_Service_Ghire_MimeAddressProto extends Google_Model
{
  public $addrSpec;
  public $address;
  public $comments;
  public $displayName;
  public $domainPart;
  public $isEmpty;
  public $isValid;
  public $kind;
  public $localPart;
  public $mailboxList;
  public $type;

  public function setAddrSpec($addrSpec)
  {
    $this->addrSpec = $addrSpec;
  }
  public function getAddrSpec()
  {
    return $this->addrSpec;
  }
  public function setAddress($address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  public function getComments()
  {
    return $this->comments;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setDomainPart($domainPart)
  {
    $this->domainPart = $domainPart;
  }
  public function getDomainPart()
  {
    return $this->domainPart;
  }
  public function setIsEmpty($isEmpty)
  {
    $this->isEmpty = $isEmpty;
  }
  public function getIsEmpty()
  {
    return $this->isEmpty;
  }
  public function setIsValid($isValid)
  {
    $this->isValid = $isValid;
  }
  public function getIsValid()
  {
    return $this->isValid;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocalPart($localPart)
  {
    $this->localPart = $localPart;
  }
  public function getLocalPart()
  {
    return $this->localPart;
  }
  public function setMailboxList($mailboxList)
  {
    $this->mailboxList = $mailboxList;
  }
  public function getMailboxList()
  {
    return $this->mailboxList;
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
