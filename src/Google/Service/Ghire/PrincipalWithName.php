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

class Google_Service_Ghire_PrincipalWithName extends Google_Model
{
  public $email;
  public $firstName;
  public $isDisabled;
  public $isGroup;
  public $isLegacy;
  public $kind;
  public $lastName;
  public $name;
  protected $principalType = 'Google_Service_Ghire_PrincipalProto';
  protected $principalDataType = '';

  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }
  public function getFirstName()
  {
    return $this->firstName;
  }
  public function setIsDisabled($isDisabled)
  {
    $this->isDisabled = $isDisabled;
  }
  public function getIsDisabled()
  {
    return $this->isDisabled;
  }
  public function setIsGroup($isGroup)
  {
    $this->isGroup = $isGroup;
  }
  public function getIsGroup()
  {
    return $this->isGroup;
  }
  public function setIsLegacy($isLegacy)
  {
    $this->isLegacy = $isLegacy;
  }
  public function getIsLegacy()
  {
    return $this->isLegacy;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
  public function getLastName()
  {
    return $this->lastName;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPrincipal(Google_Service_Ghire_PrincipalProto $principal)
  {
    $this->principal = $principal;
  }
  public function getPrincipal()
  {
    return $this->principal;
  }
}
