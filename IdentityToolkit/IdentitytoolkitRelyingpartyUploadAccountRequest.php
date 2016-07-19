<?php
/*
 * Copyright 2016 Google Inc.
 *
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

class Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyUploadAccountRequest extends Google_Collection
{
  protected $collection_key = 'users';
  public $delegatedProjectNumber;
  public $hashAlgorithm;
  public $memoryCost;
  public $rounds;
  public $saltSeparator;
  public $signerKey;
  public $users;

  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  public function setHashAlgorithm($hashAlgorithm)
  {
    $this->hashAlgorithm = $hashAlgorithm;
  }
  public function getHashAlgorithm()
  {
    return $this->hashAlgorithm;
  }
  public function setMemoryCost($memoryCost)
  {
    $this->memoryCost = $memoryCost;
  }
  public function getMemoryCost()
  {
    return $this->memoryCost;
  }
  public function setRounds($rounds)
  {
    $this->rounds = $rounds;
  }
  public function getRounds()
  {
    return $this->rounds;
  }
  public function setSaltSeparator($saltSeparator)
  {
    $this->saltSeparator = $saltSeparator;
  }
  public function getSaltSeparator()
  {
    return $this->saltSeparator;
  }
  public function setSignerKey($signerKey)
  {
    $this->signerKey = $signerKey;
  }
  public function getSignerKey()
  {
    return $this->signerKey;
  }
  public function setUsers(array $users)
  {
    foreach ($users as $u) {
      if (!$u instanceof Google_Service_IdentityToolkit_UserInfo) {
        throw new InvalidArgumentException('First argument to setUsers must be an array of Google_Service_IdentityToolkit_UserInfo');
      }
    }
    $this->users = $users;
  }
  public function getUsers()
  {
    return $this->users;
  }
}
