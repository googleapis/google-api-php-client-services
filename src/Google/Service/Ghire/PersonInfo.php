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

class Google_Service_Ghire_PersonInfo extends Google_Collection
{
  protected $collection_key = 'uri';
  protected $additionalNameType = 'Google_Service_Ghire_Name';
  protected $additionalNameDataType = 'array';
  protected $addressType = 'Google_Service_Ghire_CandidateAddress';
  protected $addressDataType = 'array';
  protected $emailType = 'Google_Service_Ghire_CandidateEmail';
  protected $emailDataType = 'array';
  public $kind;
  public $name;
  protected $phoneType = 'Google_Service_Ghire_CandidatePhone';
  protected $phoneDataType = 'array';
  protected $principalType = 'Google_Service_Ghire_PrincipalWithName';
  protected $principalDataType = 'array';
  public $updateDate;
  protected $uriType = 'Google_Service_Ghire_CandidateUri';
  protected $uriDataType = 'array';

  public function setAdditionalName($additionalName)
  {
    $this->additionalName = $additionalName;
  }
  public function getAdditionalName()
  {
    return $this->additionalName;
  }
  public function setAddress($address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }
  public function getPhone()
  {
    return $this->phone;
  }
  public function setPrincipal($principal)
  {
    $this->principal = $principal;
  }
  public function getPrincipal()
  {
    return $this->principal;
  }
  public function setUpdateDate($updateDate)
  {
    $this->updateDate = $updateDate;
  }
  public function getUpdateDate()
  {
    return $this->updateDate;
  }
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  public function getUri()
  {
    return $this->uri;
  }
}
